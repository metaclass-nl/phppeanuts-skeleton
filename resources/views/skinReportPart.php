<table width=100% cellspacing=0 cellpadding=0>
 <tr  valign=top>
  	<td> 
				<script>
					// report table data link, overrides general.js
					function tdl(obj, itemId) {
						document.location.href = tdlGetHref(obj, itemId)+'&pntHandler=ReportPage';
					}
				</script>
				<?php $this->printPart('DetailsPart'); ?>
				<?php $this->printEventualMultiPropsPart() ?>
	</td>
  </tr>
<?php if ($this->inPopup) $this->printPart('ButtonsPanel') ?>
</table>  
