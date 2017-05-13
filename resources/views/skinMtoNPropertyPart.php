<!--  skinMtoNPropertyPart -->
<table width=90% height=98% class=pntGroupContent>
<?php $this->printPart('FilterPart')  ?>
 <tr valign=top>
	<td width=40%><div id='<?php print $this->getPropertyName() ?>Div' style='height:100%; width: 250px; overflow: auto;'>
			<?php $this->printPart('ItemTablePart') ?>
		</div></td>
  </tr>
</table>
<?php $this->printAddRemoveScriptPart() ?>
<input type=hidden name='<?php print $this->getPropertyName() ?>' value='###@@@***'>
<IFRAME name="<?php print $this->getSearchFrameName() ?>" id="<?php print $this->getSearchFrameName() ?>" src="<?php $this->printSearchPageUrl() ?>" style='position:	absolute; left: 0px; top: 44px; height: 0px; width: 396px; z-index:	1;'>
</IFRAME>
<!--  /skinMtoNPropertyPart -->
