		<div id=itemTableDiv class=itemTableDiv style='height: 300px; width: 600px; overflow: auto;'>
<?php $this->printPart('DetailsFormStartPart') ?>
<?php $this->printPart('EditDetailsPart') ?>
<?php $this->printDeleteScript(); ?>
<?php $this->printEventualMultiPropsPart() ?>
			</form>
		</div>
		<script>
			 function scaleContent() {
			 		itd = getElement('itemTableDiv'); 
			 		<?php if (!Gen::isBrowserIE()) 
			 			print "itd.style.height=0"; ?> 
					itd.style.width=(window.document.body.clientWidth)-140;
					itd.style.height=(window.document.body.clientHeight)-59-<?php print $this->getButtonsPanelHeight() ?>;	
			}
		</script>