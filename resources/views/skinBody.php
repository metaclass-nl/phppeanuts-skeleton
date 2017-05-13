<!-- skinBody -->
<table width=99% cellspacing=0 cellpadding=0><tr valign=top>
	<td height=100% width=135px class=pntGroupContent>
    	<table height=100% width=100%>
			<tr valign=top height=100>
				<td class=pntMenuPart>
				<font class=pntMenuHead>Menu</font><BR><Br><BR>
				<?php $this->printPart('MenuPart') ?>
				</td>
			</tr>
			<tr valign=top>
				<td class=<?php print $this->getInfoStyle() ?>>
				<font class=pntInfoHead>Information</font><BR><BR><BR>
				<span id='InformationPart'>
				<?php $this->printPart('InformationPart') ?>
				</span>
				</td>
			</tr>
		</table> <BR>
	</td>
  	<td>
  		<table width=100% cellspacing=0 cellpadding=0>
			<tr>
		    	<td valign=top>
<?php $this->printPart('MainPart') ?>		    				
		    	</td>		    	
		    </tr> 
<?php $this->printPart('ButtonsPanel') ?>
		</table>
	</td>
</tr></table>	
<!-- /skinBody -->