<TABLE class="pntGroupContent">
<form name="advancedFilterForm" method="POST" action="index.php" accept-charset="<?php print $this->getCharset() ?>">
	<TR><TD colspan=3>
		<IMAGE location='<?php print $this->getImagesDir() ?>spacer.gif' width=630px height=1px><BR>
		<input type=hidden value='<?php print $this->getType() ?>' name='pntType'>
		<input type=hidden value='<?php $this->htOut($this->getThisPntHandlerName()) ?>' name='pntHandler'>
		<input type=hidden value='0' name='allItemsSize'>
		<input type=hidden value='0' name='pageItemOffset'>
		<?php $this->printExtraFormParameters() ?>
		<input type=hidden name='pntRef' value='<?php $this->htOut($this->getFootprintId()) ?>'>
		<input type="hidden" name="advanced" value="<?php $this->printSearchButtonLabel() ?>">
		<?php $this->printSortParams() ?>

		<?php $this->printAdvancedFilterDivs() ?>
	</td></tr>
	<TR><TD align=left width=75px><input type="SUBMIT" onClick="document.advancedFilterForm.submit();" class=funkybutton style="height: 20px" value='<?php $this->printSearchButtonLabel() ?>'></TD>
		<TD align=left><input type="BUTTON" onClick="getElement('advancedFilterOverlay').style.display='none';" class=funkybutton style="height: 20px" value='<?php $this->printCancelButtonLabel() ?>'></TD>
		<TD align=right><IMG src='<?php print $this->getImagesDir() ?>sort.gif' onClick='openSortDialog();' title='Sortering'><A id=menuLink HREF="javascript:showSimple();">simple</A></TD>
	</TR>
</form>
</TABLE>
<script>
	function eventComparatorChanged(value, divName) {
		if (value == "BETWEEN AND") {
			getElement(divName).style.display='inline';
		} else {
			getElement(divName).style.display='none';
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
	}
	//the comparatorDivs need to be initially hidden. show them from here if applicable
	for (i=1; i<= <?php print $this->getNadvancedFilters() ?>; i++) {
		compSelect = document.advancedFilterForm['pntF' + i + 'cmp'];
		eventComparatorChanged(compSelect.value, 'comparatorDiv'+i);
	}
</script>