	<BR>
	<form name="loginForm" method="POST" action="index.php" ENCTYPE="multipart/form-data" accept-charset="<?php print $this->getCharset() ?>">
		<input type="hidden" name="pntHandler" value="LoginAction">
		<input type="hidden" name="ticket" value="<?php $this->printTicket() ?>">
		<input type="hidden" name="loginMessage" value="<?php print $this->getReqParam('loginMessage', true) ?>">
		<BR>
		gebruikersnaam: <input type="text" name="username" value="<?php print $this->getReqParam('username', true) ?>"><BR><BR>
		wachtwoord:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name='password' value=""><BR>
		<BR>
		<input type="submit" name="loginButton" value="Log in" disabled="1"><BR>
	</form>
	<script><!--
	setTimeout("document.loginForm.loginButton.disabled=false;",<?php $this->printLoginButtonEnableDelay() ?>);
	--></script>