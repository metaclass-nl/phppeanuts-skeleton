<!-- skinSortDialogPart -->
<BR>
<?php print $this->getInformation() ?><BR>
<BR>
<form method="POST" name="pntSortForm" action="index.php" accept-charset="<?php print $this->getCharset() ?>">
	<?php $this->printSortWidgets() ?>

</form>
<!-- /skinSortDialogPart -->
