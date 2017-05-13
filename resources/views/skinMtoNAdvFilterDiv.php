	<DIV id='advFilterDiv<?php print $param ?>' style='display:<?php print ($this->showAdvancedFilterDiv($param) ? 'block' : 'none') ?>; padding: 4px 0 0px 0;'>
		<?php $this->printFilterSelectWidget($param) ?> 
		<?php $this->printComparatorSelectWidget($param) ?> 
		<input type=text style='width:130px' value='<?php $this->htOut($this->getFilterValue1($param)) ?>' name='pntF<?php print $param ?>v1'>
		<div id='comparatorDiv<?php print $param ?>' style='display:none;margin-top:0px;margin-bottom:0px;'>
		<input type=text style='width:80px' value='<?php $this->htOut($this->getFilterValue2($param)) ?>' name='pntF<?php print $param ?>v2'>
		</div>
		<?php if ($param < $this->nAdvancedFilters)
			$this->printCombinatorSelectWidget($param); ?> 
		</DIV>
