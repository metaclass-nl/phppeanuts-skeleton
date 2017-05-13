<table width=100% >
<?php $this->printPart('FilterPart')  ?>
 <tr valign=top>
	<td class=pntGroupContent>

		<script>
			// pop up report, overrides general.js
			function tdl(obj, itemId) {
				popUpWindowAutoSizePos(tdlGetHref(obj, itemId)+'&pntHandler=ReportPage');
			}
		</script>
			<form name="itemTableForm" method="POST" action="index.php" accept-charset="<?php print $this->getCharset() ?>">
				<input type=hidden value='SelectionReportPage' name='pntHandler'>
				<input type=hidden value='<?php print $this->getType() ?>' name='pntType'>
				<input type=hidden value='<?php $this->htOut($this->getFootprintId()) ?>' name='pntRef'>
				<input type=hidden value='<?php print $this->getReqParam('pntLayout', true) ?>' name='pntLayout'>
				<?php $this->printPart('ItemTablePart') ?>
			</form>

	</td>
  </tr>
</table>