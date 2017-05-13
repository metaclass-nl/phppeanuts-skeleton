<!-- skinMtoNSearchPart -->
<table width=100% height=100%>
<?php $this->printPart('FilterPart')  ?>
 <tr valign=top>
	<td class=pntGroupContent>
		<div id=itemTableDiv style='position: absolute; left: 12px; top: 54px; z-index: 1; height: 200px; width: 100px; overflow: auto;' valign='top'>
				<?php $this->printPart('ItemTablePart') ?></div>
	</td>
  </tr>
</table>
<script>
			 function scaleContent() {
			 		itd = getElement('itemTableDiv'); 
			 		<?php if (!Gen::isBrowserIE()) 
			 			print "itd.style.height=0; " ?> 
			 		if (document.body.clientWidth > 26)
						itd.style.width=(document.body.clientWidth)-26;
					if (document.body.clientHeight > 130) 
						itd.style.height=(document.body.clientHeight)-64<?php 
						if ($this->getFilterPartString()) print -16; 
						if ($this->hasFilterForm()) print -38; ?>;
						<?php if ($this->getFilterPartString()) 
							print "itd.style.top=54+14;" ?>
			}
</script>
<?php $this->printPart('SelectScriptPart')  ?>
