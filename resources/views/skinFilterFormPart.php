<!-- skinFilterFormPart --> 
<TR><TD height=1px>
<table width=100% class=pntGroupPane cellspacing=0 cellpadding=0>
<form name="simpleFilterForm" method=POST action="index.php" accept-charset="<?php print $this->getCharset() ?>">
 <tr valign=top>
	<td height=100% class=pntGroupContent>
<DIV id='simpleFilterDiv' style='display:<?php $this->printDivDisplayStyle('simpleFilterDiv') ?>'>
	<DIV style='float: left;'>
		<input type=hidden value='<?php print $this->getType() ?>' name='pntType'>
		<input type=hidden value='<?php $this->htOut($this->getThisPntHandlerName()) ?>' name='pntHandler'>
		<input type=hidden value='0' name='allItemsSize'>
		<input type=hidden value='0' name='pageItemOffset'>
		<?php  $this->printExtraFormParameters() ?>
		<input type=hidden value='All stringfields' name='pntF1'>
		<input type=hidden value='LIKE' name='pntF1cmp'>
		<input type=hidden name='pntRef' value='<?php $this->htOut($this->getFootprintId()) ?>'>
		<input type="hidden" name="simple" value="<?php $this->printSearchButtonLabel() ?>">
		<input type=text value='<?php $this->htOut($this->getFilter1Value1()) ?>' size=50 name='pntF1v1'><input type=button onClick="document.simpleFilterForm.submit();" class=funkybutton style="height: 20px" value='<?php $this->printSearchButtonLabel() ?>'>
		<?php $this->printSortParams() ?>
	</DIV>
	<DIV style='float: right;'>
		<IMG src='<?php print $this->getImagesDir() ?>sort.gif' onClick='openSortDialog();' title='Sort'><A id=menuLink HREF="javascript:showAdvanced();">Advanced</A>
	</DIV>
</DIV>
<DIV id='advancedFilterDiv' style='display:<?php $this->printDivDisplayStyle('advancedFilterDiv') ?>'>
<TABLE width=100% cellspacing=0 cellpadding=0>
</form>
	<TR>
		<TD width=70% onMouseOver="getElement('advancedFilterOverlay').style.display='block';"><?php $this->printAdvancedFilterDescriptions() ?></TD>
		<TD align=right><A id=menuLink HREF="javascript:showSimple();">simple</A></TD>
	</TR>
</TABLE>
</DIV>
<DIV id='advancedFilterOverlay' style='display:none;position:absolute;left:<?php print (int) $this->whole->advancedFilterOverlayLeft ?>px;top:54px;width:680px;z-index: 2; ' valign='top'>
<?php $this->includeSkin('AdvancedFilterFormPart') ?>
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

	<?php $this->printSortDialogScripts() ?>
</script>