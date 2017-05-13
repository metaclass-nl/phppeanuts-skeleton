<!-- skinReportBody -->
	<script>
		// report table data link, overrides general.js
		function tdl(obj, itemId) {
			document.location.href = tdlGetHref(obj, itemId)+'&pntHandler=ReportPage';
		}
	</script>
	<?php $this->includeSkin('DialogBody') ?>				
<!-- /skinReportBody -->