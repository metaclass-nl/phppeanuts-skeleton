	<updateElement id="<?php $this->htOut($partId) ?>" <?php $this->ajaxPrintPartAttributes($partName) ?> >
		<![CDATA[<?php $this->printPart($partName, $extraParam); ?>]]>
	</updateElement>

