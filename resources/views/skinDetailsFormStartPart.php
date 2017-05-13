			<form name="detailsForm" method="POST" action="index.php" ENCTYPE="multipart/form-data" accept-charset="<?php print $this->getCharset() ?>">
				<input type=hidden name='pntHandler' value='SaveAction'>
				<input type=hidden name='id' value='<?php print $this->getConvert($this->object, 'id') ?>'>
				<input type=hidden name='pntType' value='<?php print $this->getType() ?>'>
				<input type=hidden name='pntProperty' value='<?php print $this->getReqParam('pntProperty', true)?>'>
				<input type=hidden name='pntContext' value='<?php print $this->getReqParam('pntContext', true)?>'>
				<input type=hidden name='pntRef' value='<?php $this->htOut($this->getFootprintId()) ?>'>
				<input type=hidden name='pntIgnoreMissingFields' value='<?php print $this->getIgnoreMissingFields() ?>'>
				<input type=hidden name='pntBackToOrigin' value='<?php print $this->getBackToOrigin() ?>'>
				<input type=hidden name='pntActionTicket' value='<?php $this->printNextActionTicket() ?>'>
				<input type=hidden name='pntOriginalId' value=''>
