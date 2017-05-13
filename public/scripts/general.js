// Copyright (c) the partners of MetaClass, 2003, 2004, 2005
 
//this file should not contain any application- or installation specific code
//for example localization-specific code should be factored out and overridden in
//specific.js 

function inArray(myArray, myElem) {
	for (i=0; i<myArray.length; i++) {
		if (myArray[i]==myElem) {
			return true;
		}
	}
	return false;
}

function getElement( elementId)
    {
    var element;

    if (document.all) {
        element = document.all[elementId];
        }
    else if (document.getElementById) {
        element = document.getElementById(elementId);
        }
    else element = -1;

    return element;
}

// table data link, follows link from table item to its editpage
function tdl(obj, itemId) {
	document.location.href = tdlGetHref(obj, itemId);
}

function tdlGetHref(obj, itemId) {
	dirTypeAndContext = obj.parentNode.parentNode.parentNode.id;
	arr = dirTypeAndContext.split('*');
	link = '../'+encodeURIComponent(arr[0])+'/index.php?pntType='+encodeURIComponent(arr[1])+'&id='+encodeURIComponent(itemId);
	if (pntFootprintId != null)
		link = link + '&pntRef=' + pntFootprintId; //important because IE does not pass HTTP_REFERER from javascript
	return link;
}

// clears dialog widget inputs in form of ObjectEditDetailsPage
function clrDialogWidget(idKey, labelKey) {
	theForm = document.detailsForm;
	theForm[idKey].value = '';
	theForm[labelKey].value = '';
}

function getParentNodeByTagName(elem, tagName) {
	while (elem.tagName != tagName) {
		elem = elem.parentNode;
	}
	return elem;
}

function getNodeByTagName(arr, tagName, index) {
	count = 0;
	for (i=0; i<arr.length; i++) 
		if (arr[i].tagName == tagName) {
			if (count == index)
				return arr[i];
			else 
				count ++;
		}
	return null;
}

function pntSelectElementsByClassName(arr, clsName) {
	var result = new Array();
	var i, j;
	for (i in arr) {
		if (!arr[i].className) continue;
		var pieces = arr[i].className.split(' ');
		for (j in pieces) {
			if (pieces[j] == clsName) {
				result.push(arr[i]);
				break;
			}
		}
	}
	return result;
}

function invertTableCheckboxes(aButton) {
	var aTableSection = getParentNodeByTagName(aButton, 'TABLE');
	var elements = aTableSection.getElementsByTagName("input");
	for (i=0; i<elements.length; i++) {
		if (elements[i].type=="checkbox") {
			if (elements[i].checked) {
				elements[i].checked=false;
			} else {
				elements[i].checked=true;
			}
		}
	}

}

function getObjectHtmlTag(myObj) {
	return myObj.outerHTML.replace(myObj.innerHTML,'');
}

//piece of code for replacing keypad . with ,
//this is the international version that does nothing. see specific.js
var metLK;
function metKD(evt) {
    metLK = evt.keyCode;
}
function metKP(evt) {
	//international version does nothing
}
//end of piece

function scaleContent()
{
	//default implementation: ignore
}

function pntTabSelected(allTabs, selected)
{
	 for (var i=0; i<allTabs.length; i++) {
	 	var contentDiv = getElement(allTabs[i] + 'Content');
	 	var tabDiv = getElement(allTabs[i] + 'Tab');

	 	if (allTabs[i] == selected) {
	 		tabDiv.className='pntTab_selected';
	 		contentDiv.style.display='block';
	 	} else {
	 		tabDiv.className='pntTab';
	 		contentDiv.style.display='none';
	 	}
	}
	scaleContent();
}


function pntPrint_r(what) {
    var output = '';
    for (var i in what)
        output += i+ ' = ' + what[i] + '\n';
    return(output);
}

function pntGetFormValues(aForm) {
	if (!aForm) return null;
	var vals = Array();
	return pntAddFormValues(aForm.elements, vals);
}
function pntAddFormValues(formFields, vals) {
	for (var i=0; i<formFields.length; i++) {
		vals[formFields[i].name] = formFields[i].value;
	}
	return vals;
}
function pntInitDetailsFormRefData() {
	pntFormRefData = pntGetFormValues(document.detailsForm);
}

function pntArraysEqual(first, second) {
	if (first.length != second.length) return false;
	for (var i in first) {
		if (first[i] != second[i]) return false;
	}
	for (var i in second) {
		if (first[i] != second[i]) return false;
	}
	return true;
}

function pntSelectionReport(itemTableId, handler) {
	if (!handler) handler = 'SelectionReportPage';
	var itemTable = getElement(itemTableId);
	if (itemTable) {
		var selectedParams = pntCollectSelectedParams(itemTable);
		var arr = itemTableId.split('*');
	}
	if (!itemTable || selectedParams.length > 1900) {
		var reportForm;
		if (document.itemTableForm) {
			reportForm = document.itemTableForm;
		} else {
			if (document.detailsForm && itemTableId) {
				//count tables with class pntItemTable
				var tables = document.detailsForm.getElementsByTagName('TABLE');
				var found = pntSelectElementsByClassName(tables, 'pntItemTable');
				if (found.length == 1) {
					reportForm = document.detailsForm;
					reportForm.pntType.value = arr[1];
				}
			}
			if (!reportForm)
				return alert('too many items selected');
		}
		reportForm.pntHandler.value=handler; 
		return reportForm.submit();
	}	

	if (selectedParams) {
		link = '../'+encodeURIComponent(arr[0])+'/index.php?pntType='+encodeURIComponent(arr[1])+'&pntHandler='+encodeURIComponent(handler)+'&pntLayout=Report'+selectedParams;
	} else { //no items selected
		if (arr[4]) { //propertypage
			link = 'index.php?pntType='+encodeURIComponent(arr[2])+'&id='+encodeURIComponent(arr[3])+'&pntProperty='+encodeURIComponent(arr[4])+'&pntHandler=PropertyPage&pntLayout=Report';
		} else { //indepage or searchpage
			var simpleFilterDiv = getElement('simpleFilterDiv');
			if (simpleFilterDiv) {
				var reportForm;
				if (simpleFilterDiv.style.display=='block') 
					reportForm = document.simpleFilterForm;
				else 
					reportForm = document.advancedFilterForm;
				reportForm.pntLayout.value = 'Report';
				return reportForm.submit();
			} else { //indexpage
				link = document.location.href + '&pntLayout=Report'; 
			}
		}
	}
	if (pntFootprintId != null)
			link = link + '&pntRef=' + encodeURIComponent(pntFootprintId); //important because IE does not pass HTTP_REFERER from javascript
	popUpWindowAutoSizePos(link);
}

function pntGetFilterFormVisible() {
	div = getElement('simpleFilterDiv');
	if (div.style.display == 'block') 
		return document.simpleFilterForm;
	else 
		return document.advancedFilterForm;
}

function pntFfpColSort( paths ) {
	form = pntGetFilterFormVisible();
	same = true;
	for (i=0; i<paths.length; i++) {
		element = form.elements['pntS' + (i+1)];
		if (element.value != paths[i]) same = false;
		element.value=paths[i];
	}
	if (same && form.elements['pntS1d'].value == 'ASC')
		direction = 'DESC';
	else
		direction = 'ASC';
	for (i=0; i<paths.length; i++) 
		form.elements['pntS' + (i+1) + 'd'].value = direction;
	form.pntSiS.value = '1';
	form.submit();
}

function pntSaveMtoNPropTableState(propNameAndTableId) {
	itemTable = getElement(propNameAndTableId[1]);
	tbody = getNodeByTagName(itemTable.childNodes, 'TBODY', 0);
	var ids = '';
	for (i=0; i<tbody.rows.length; i++) {
		if (i > 0) ids = ids + ';';
		ids = ids + tbody.rows[i].id;
	}
	document.detailsForm[propNameAndTableId[0]].value=ids;
} 

function pntSubmitDetailsForm() {
	pntFormRefData = null; 
	document.detailsForm.submit();
}
function pntSaveEditors() {
}

function pntSubmitDelete() {
	pntFormRefData = null; 
	document.detailsForm.pntHandler.value='DeleteAction'; 
	document.detailsForm.submit(); 
}
function pntSubmitDeleteMarked() {
	pntFormRefData = null; 
	document.detailsForm.pntHandler.value='DeleteMarkedAction'; 
	document.detailsForm.submit();
}
function pntVerifyAndDelete(formName, oid, delConfQ, dialogWidth, dialogHeight) {
	if (oid.length==0) {
		if (confirm(delConfQ))
			return pntSubmitDelete();
	} else {
		var frm = document.forms[formName]; 
		selectedParams = "&" + encodeURIComponent("*!@" + oid) + "=1";
		pntVerifyAndDeleteDialog(frm, selectedParams, dialogWidth, dialogHeight);
	}
}
function pntVerifyAndDeleteMarked(formName, noItemsMarkedMessage, dialogWidth, dialogHeight) {
	var frm = document.forms[formName]; 
	var selectedParams = pntCollectSelectedParams(frm);
	if (selectedParams=='')
		return alert(noItemsMarkedMessage);;
	if (selectedParams.length > 1900) 
		return alert("ERROR: Too many items selected"); //HACK - shoud POST the form to VerifyDeletePage but that page is NYI
		
	pntVerifyAndDeleteDialog(frm, selectedParams, dialogWidth, dialogHeight);
}
function pntCollectSelectedParams(fromEl) {
	var els = fromEl.getElementsByTagName("input");
	var selectedParams = ''; 
	for (i=0; i<els.length; i++) {
		if (els[i].type=="checkbox" && els[i].checked && els[i].name.substr(0, 3) == '*!@') {
			selectedParams = selectedParams+'&'+encodeURIComponent(els[i].name)+"=1";
		}
	}
	return selectedParams;
}
function pntVerifyAndDeleteDialog(frm, selectedParams, dialogWidht, dialogHeight) {
		var dialogUrl = frm.action + "?pntHandler=VerifyDeleteDialog";
		dialogUrl += "&pntType=" + encodeURIComponent(frm.pntType.value);
		dialogUrl += "&pntRef=" + encodeURIComponent(pntFootprintId);
		dialogUrl += selectedParams;
		
		popUp(dialogUrl,dialogWidht,dialogHeight,100,75);
}	

function pntDetailsSaveButtonPressed() {
	pntDetailsSave();
}
function pntDetailsSave() {
	if (document.detailsForm.pntOriginalId && document.detailsForm.pntOriginalId.value) { 
		//browsers back button was used after create new or copy 
		document.detailsForm.id.value=document.detailsForm.pntOriginalId.value;
		document.detailsForm.pntOriginalId.value='';
	}
	pntSubmitDetailsForm();
}
function pntDetailsCreateNewButtonPressed() {
	pntDetailsCreateNew();
}
function pntDetailsCreateNew() {
	if (!document.detailsForm.pntOriginalId.value) { 
	 	document.detailsForm.pntOriginalId.value=document.detailsForm.id.value; 
 	} 
 	document.detailsForm.id.value='';
 	pntSubmitDetailsForm();
}
function pntDetailsCopyButtonPressed() {
	pntDetailsCopy();
}
function pntDetailsCopy() {
	if (document.detailsForm.pntOriginalId.value) { 
		//browsers back button was used after create new or copy
		document.detailsForm.id.value=document.detailsForm.pntOriginalId.value;
	} else {
		document.detailsForm.pntOriginalId.value=document.detailsForm.id.value;
	} 
	pntSubmitDetailsForm();
}

function pntOpenDialogFor(formkey, strUrl, width, height) {
	var detailsForm = document.detailsForm;	
	if (!detailsForm) return alert('no detailsForm');
	var objectId = encodeURIComponent(detailsForm[formkey].value);
	popUp(strUrl+objectId+'&pntFormKey='+encodeURIComponent(formkey),width,height,100,75);
}
function pntDialogWidgetClicked(labelElement, strUrl, w, h) {
	pntOpenDialogFor(labelElement.nextSibling.name, strUrl, w, h);
}

//only for setting dialog result on dialogwidget or shortlistwidget
function pntSetDialogResult(id, formkey, label) {
	if (formkey.charAt(formkey.length-1) == ']')
		var labelkey = formkey.substr(0,formkey.length-3)+']';
	else 
		var labelkey = formkey.substr(0,formkey.length-2); 
	var detailsForm = document.detailsForm;	
	if (!detailsForm) return alert('no detailsForm');
	if (detailsForm[labelkey] == null) {
		pntSetDialogResultOnShortlist(id, formkey, label);
		return;
	}
	detailsForm[formkey].value = id;
	detailsForm[formkey].title = label; //for easy label retrieval
	detailsForm[labelkey].value = label;
}

function pntSetMtoNDialogResult(id, formkey, label) {
	var labelkey = 'pntWidgetTxt_' + formkey;
	var detailsForm = document.detailsForm;	
	if (!detailsForm) return alert('no detailsForm');
	detailsForm[formkey].value = id;
	labelsDiv = getElement('pntWidgetTxt_' + formkey);
//	if (labelsDiv.getAttributeNode('textContent'))
//		labelsDiv.textContent = label;
//	else
	labelsDiv.firstChild.nodeValue = label;
}

function pntSetDialogResultOnShortlist(id, formkey, label) {
	var opt = document.createElement('option');
	opt.value = id;
	opt.text = label;
	opt.selected = true;
	try {
		getElement(formkey).add(opt, null);
  	} catch(ex) {
  		getElement(formkey).add(opt); // IE 
  	}
}

//parameter updateMap is optional, array with ids of elements to update by 
//ids of updateElements expected from the server. If the id of an updateElement 
//is not in the updateMap, it will be used directly as the id of the element to be updated.
//for GET make postQuery null, for POST otherwise pass the queryString
function pntAjaxRequest(url, postQuery, updateMap) {
    if (!pntAjaxUrlOk(url)) {
    	alert('AJAX error: different host, port or scheme: ' + url);
    }
    var httpReq;
    if (window.XMLHttpRequest) { 
        httpReq = new XMLHttpRequest();
        if (httpReq.overrideMimeType) {
            httpReq.overrideMimeType('text/xml');
        }
    } 
    if (!httpReq && window.ActiveXObject) {
        try {	httpReq = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
        	try {	httpReq = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {}
        }
    }

    if (!httpReq) {
        alert('AJAX error: Can not create XMLHTTP object');
        return false;
    }
    httpReq.onreadystatechange = function() { pntAjaxReadyStateChanged(httpReq, updateMap); };
    if (postQuery) {
    	httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    	httpReq.open('POST', url, true);
    } else {
        httpReq.open('GET', url, true);
    }
    httpReq.send(postQuery);
}

function pntAjaxReadyStateChanged(httpReq, updateMap) {
	var xmldoc;
    try {
        if (httpReq.readyState != 4) {
        	return;
        }
        if (httpReq.status == 200) {
	    	xmldoc = httpReq.responseXML;
	    	if (xmldoc.childNodes.length == 0 || xmldoc.firstChild.nodeName == 'parsererror') {
				alert("AJAX response XML parse error\n\n" + httpReq.responseText);
				return;
			}
        } else {
            alert('AJAX Request Error, Statuscode: ' + httpReq.status);
        }
    } catch( e ) {
        alert('AJAX response error: ' + e.description);
    }
    //alert(httpReq.responseText);
    pntAjaxProcessXml(xmldoc, updateMap);
}

function pntAjaxProcessXml(xmldoc, updateMap) {
	var updates = xmldoc.getElementsByTagName('updateElement');
	for (var i=0; i<updates.length; i++) {
		var update = updates.item(i);
		var idToUpdate = update.getAttribute('id');
		if (updateMap && updateMap[idToUpdate]) 
			idToUpdate = updateMap[idToUpdate];

		pntAjaxUpdateElement(update, idToUpdate);
	}
	scaleContent();
}

function pntAjaxUpdateElement(update, idToUpdate) {
	var el = document.getElementById(idToUpdate);
	if (el) {
		var dataFound = false;
		//process content CDATA
		var updChilds = update.childNodes;
		for (var j=0; j<updChilds.length; j++) {
			if (updChilds[j].nodeType==4) { //CDATA
				dataFound = true;
				el.innerHTML = updChilds[j].data;
			}
		}
		if (!dataFound) {
			alert("AJAX Error: updateElement without data: '"+ update.getAttribute('id') + "'");
		}
	} else {
		alert("AJAX Error: Element to be updated not found: '" + update.getAttribute('id') + "'");
	}
}

// only urls to the same host and port through the same scheme as the page originates from are allowed 
function pntAjaxUrlOk(url) {
	var pieces = url.split('://');
	if (pieces.length == 1) 
		//no scheme, extra check that no ':' could be interpreted as the end of a scheme
		return url.indexOf(':') == -1;  
	
	var iSlash = pieces[1].indexOf('/');
	if (iSlash == -1) 
		var toCheck = pieces[1];
	else 
		var toCheck = pieces[1].substring(0,iSlash + 1);
	toCheck = pieces[0] + '://' + toCheck;

	return toCheck == document.location.href.substr(0, toCheck.length);
}

function pntInit() {
	for (var i in pntInitFunctions) {
		pntInitFunctions[i].call();
	}
}
function pntInitAdd(func, name) {
	pntInitFunctions[name]= func;
}
var pntInitFunctions = new Array();
//pntAppendToInit(scaleContent); this does not work because appended functions can 
//not be overridden by redeclading them
