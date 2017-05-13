<table width=100% >
<?php $this->printPart('FilterPart')  ?>
 <tr valign=top>
	<td class=pntGroupContent>
		<script>
			 function scaleContent() {
			 		itd = getElement('itemTableDiv'); 
			 		<?php if (!Gen::isBrowserIE()) 
			 			print "itd.style.height=0"; ?> 
			 		itd.style.width=(window.document.body.clientWidth)-155;
					itd.style.height=(window.document.body.clientHeight)-124<?php 
						if ($this->getFilterPartString()) print -16; 
						if ($this->hasFilterForm()) print -24; ?>;
			}
		</script>
		<div id=itemTableDiv style='height: 300px; width: 600px; overflow: auto;' valign='top'>
			<form name="itemTableForm" method="POST" action="index.php" accept-charset="<?php print $this->getCharset() ?>">
				<input type=hidden value='DeleteMarkedAction' name='pntHandler'>
				<input type=hidden value='<?php print $this->getType() ?>' name='pntType'>
				<input type=hidden value='<?php $this->htOut($this->getFootprintId()) ?>' name='pntRef'>
				<input type=hidden name='pntActionTicket' value='<?php $this->printNextActionTicket() ?>'>
				<?php $this->printPart('ItemTablePart') ?>
			</form>
		</div>
	</td>
  </tr>
</table>