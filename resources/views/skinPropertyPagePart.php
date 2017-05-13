<!--  skinPropertyPagePart -->
<table width=100% class=pntGroupContent>
<?php $this->printPart('FilterPart')  ?>
 <tr valign=top>
	<td>
		<div id=itemTableDiv style='height: 300px; width: 600px; overflow: auto;'>
			<?php $this->printPart('DetailsFormStartPart') ?>
				<?php $this->printPart('PropertyPart') ?>
			</form>
		</div>
	</td>
  </tr>
</table>
<?php $this->printDeleteMarkedScript(); ?>

<script>
	var pntFormRefData;
	function scaleContent() {
	 		itd = getElement('itemTableDiv'); 
	 		<?php if (!Gen::isBrowserIE()) 
	 			print "itd.style.height=0"; ?> 
			itd.style.width=(window.document.body.clientWidth)-155;
			itd.style.height=(window.document.body.clientHeight)-124<?php 
				if ($this->getFilterPartString()) print -24; ?>;
	}
</script>
<!--  /skinPropertyPart -->