<!-- skinMtoNFilterFormPart -->
<TR><TD height=1px>
<table width=100% class=pntGroupPane>
<form name="simpleFilterForm" method="POST" action="index.php" ENCTYPE="multipart/form-data" accept-charset="<?php print $this->getCharset() ?>">
 <tr valign=top>
	<td height=100% class=pntGroupContent>
<DIV id='simpleFilterDiv' style='display:<?php $this->printDivDisplayStyle('simpleFilterDiv') ?>'>
		<input type=hidden value='<?php print $this->getType() ?>' name='pntType'>
		<input type=hidden value='<?php $this->htOut($this->getThisPntHandlerName()) ?>' name='pntHandler'>
		<input type=hidden value='0' name='allItemsSize'>
		<input type=hidden value='0' name='pageItemOffset'>
		<?php $this->printExtraFormParameters() ?>
		<input type=hidden value='All stringfields' name='pntF1'>
		<input type=hidden value='LIKE' name='pntF1cmp'>
		<input type=hidden name='pntRef' value='<?php $this->htOut($this->getFootprintId()) ?>'>
		<input type="hidden" name="simple" value="<?php $this->printSearchButtonLabel() ?>">
		<input type=text value='<?php $this->htOut($this->getFilter1Value1()) ?>' size=50 name='pntF1v1'><input type=button onClick="document.simpleFilterForm.submit();" class=funkybutton style="height: 20px" value='<?php $this->printSearchButtonLabel() ?>'>
		<?php $this->printSortParams() ?>
		<IMG src='../images/sort.gif' onClick='openSortDialog();' title='Sortering'>
		 <A id=menuLink HREF="javascript:showAdvanced();">advanced</A>

</DIV>
<DIV id='advancedFilterDiv' style='display:<?php $this->printDivDisplayStyle('advancedFilterDiv') ?>'>
<TABLE width=100% cellspacing=0 cellpadding=0>
</form>
	<TR>
		<TD width=230px onMouseOver="getElement('advancedFilterOverlay').style.display='block';"><?php $this->printAdvancedFilterDescriptions() ?></TD>
		<TD align=right><A id=menuLink HREF="javascript:showSimple();">simple</A></TD>
	</TR>
</TABLE>
</DIV>
<DIV id='advancedFilterOverlay' style='display:none;position:absolute;left:0px;top:0px;width:390px;z-index: 2; ' valign='top'>
<form name="advancedFilterForm" method="POST" action="index.php" ENCTYPE="multipart/form-data" accept-charset="<?php print $this->getCharset() ?>">
	<DIV>
		<IMAGE location='../beheer/images/spacer.gif' width=385px height=1px><BR>
		<input type=hidden value='<?php print $this->getType() ?>' name='pntType'>
		<input type=hidden value='<?php $this->htOut($this->getThisPntHandlerName()) ?>' name='pntHandler'>
		<input type=hidden value='0' name='allItemsSize'>
		<input type=hidden value='0' name='pageItemOffset'>
		<?php $this->printExtraFormParameters() ?>
		<input type=hidden name='pntRef' value='<?php $this->htOut($this->getFootprintId()) ?>'>
		<input type="hidden" name="advanced" value="<?php $this->printSearchButtonLabel() ?>">
		<?php $this->printSortParams() ?>

		<?php $this->printAdvancedFilterDivs() ?>
	</DIV>
	<BR>
	<TABLE class=pntGroupContent>
	<TR><TD align=left width=75px><input type="SUBMIT" onClick="document.advancedFilterForm.submit();" class=funkybutton style="height: 20px" value='<?php $this->printSearchButtonLabel() ?>'></TD>
		<TD align=left><input type="BUTTON" onClick="getElement('advancedFilterOverlay').style.display='none';" class=funkybutton style="height: 20px" value='<?php $this->printCancelButtonLabel() ?>'></TD>
		<TD width=190px align=right><IMG src='<?php print $this->getImagesDir() ?>sort.gif' onClick='openSortDialog();' title='Sortering'><A id=menuLink HREF="javascript:showSimple();">simple</A></TD>
	</TR>
</form>
</TABLE>
</DIV>
	</td>
  </tr>
</table>	
</TD></TR>
<script>
	function showAdvanced() {
		getElement('advancedFilterDiv').style.display='block';
		getElement('simpleFilterDiv').style.display='none';
		getElement('advancedFilterOverlay').style.display='block';
	}
	function showSimple() {
		getElement('simpleFilterDiv').style.display='block';
		getElement('advancedFilterDiv').style.display='none';
		getElement('advancedFilterOverlay').style.display='none';
	}

	function eventComparatorChanged(value, divNaam) {
		if (value == "BETWEEN AND") {
			getElement(divNaam).style.display='inline';
		} else {
			getElement(divNaam).style.display='none';
		}
	}
	function showHideFilterDivs() {
		hideTheRest = false;
		for (i=1; i< <?php print $this->getNadvancedFilters() ?>; i++) {
			selectObj = document.advancedFilterForm['pntFC'+i];
			divObj = getElement('advFilterDiv'+(i + 1));
			if (hideTheRest || (selectObj.options[selectObj.selectedIndex].value == '') ) {
				hideTheRest = true;
				divObj.style.display='none';
			} else {
				divObj.style.display='block';
			}
		}
		scaleContent();
	}
	//the comparatorDivs need to be initially hidden. show them from here if applicable
	for (i=1; i<= <?php print $this->getNadvancedFilters() ?>; i++) {
		compSelect = document.advancedFilterForm['pntF' + i + 'cmp'];
		eventComparatorChanged(compSelect.value, 'comparatorDiv'+i);
	}
	<?php $this->printSortDialogScripts() ?>
</script>