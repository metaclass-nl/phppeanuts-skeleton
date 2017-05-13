<?php
/* Copyright (c) MetaClass, 2003-2012

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
See the License, http://www.gnu.org/licenses/agpl.txt */

Gen::includeClass('PntObjectSaveAction', 'pnt/web/actions');

/** Action that saves an object to the database. 
* Used by form from ObjectEditDetailsPage 
* when Insert or Update button is pressed. 
* Calls save method on the object.
* @see http://www.phppeanuts.org/site/index_php/Pagina/158
*
* This concrete subclass is here to keep de application developers
* code separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in the superclass
* This class may be copied to an application folder to
* make application specific overrides.
*/
class ObjectSaveAction extends PntObjectSaveAction {


	//to get the old (pre 1.2) behavior (allways back to origin), uncomment the following
//	function finishSuccess($obj) {
//		$this->processNtoMproperties();
//		$message = $this->getOKMessage($obj);
//		$this->redirectRequest($this->getBackToOriginRequestData($obj), $message);
//	}
	
}
?>