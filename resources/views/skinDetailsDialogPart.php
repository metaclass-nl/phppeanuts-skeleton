		<div id=itemTableDiv class=itemTableDiv style='height: 300px; width: 600px; overflow: auto;'>
<?php $this->printPart('InformationPart') ?>
<?php $this->printPart('DetailsFormStartPart') ?>
<input type=hidden name='pntHandlerOrigin' value='EditDetailsDialog'>

<?php $this->printPart('EditDetailsPart') ?>
			</form>
		</div>
		<script>
			 function scaleContent() {
			 		itd = getElement('itemTableDiv'); 
			 		<?php if (!Gen::isBrowserIE()) 
			 			print "itd.style.height=0"; ?> 
					itd.style.width=(window.document.body.clientWidth)-13;
					itd.style.height=(window.document.body.clientHeight)-138;	
			}
		</script>