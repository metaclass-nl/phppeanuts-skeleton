<!-- skinIndexReportPart -->
<table width=100% height=100%>
<?php $this->printPart('FilterPart')  ?>
 <tr valign=top>
	<td class=pntGroupContent>
		<script>
			 function scaleContent() {}
		</script>
		<div id=itemTableDiv valign='top'>
			<form name=itemTableForm method=post action='index.php' accept-charset="<?php print $this->getCharset() ?>">
				<input type=hidden value='DeleteMarkedAction' name='pntHandler'>
				<input type=hidden value='<?php print $this->getType() ?>' name='pntType'>
				<input type=hidden value='<?php $this->htOut($this->getFootprintId()) ?>' name='pntRef'>
				<input type=hidden value='<?php print $this->getReqParam('pntLayout', true) ?>' name='pntLayout'>
				<?php $this->printPart('ItemTablePart') ?>
			</form>
		</div>
	</td>
  </tr>
</table>