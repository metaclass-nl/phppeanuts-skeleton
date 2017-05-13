<?php 
/* Copyright (c) MetaClass, 2003-2012

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
See the License, http://www.gnu.org/licenses/agpl.txt */


Gen::includeClass('PntSecurityManager', 'pnt/secu');

/** Objects of this class are designed to give detailed control over what 
* a user can see and do by overriding methods here.
* Default is no authentication and allowing access to everything.
*
* Currently the default user interface does check on
* invocation of Pages, Dialogs and Actions, hides multi value property buttons and
* tables, but does not hide or make readOnly widgets, fields and columns
* and does not ghost Create, Update and Delete buttons.
* 
* Check methods should return an appropriate error message to be displayed
* in the access denied error page
*
* This concrete subclass is here to keep de application developers
* code separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in the superclass to provide defaults.
* This class may be copied to an application folder to
* make application specific overrides.
* 
* Overrides specific to the examples on the internet: because external links may exist,
* each page must be accessable directly. 
*/
class SecurityManager extends PntSecurityManager {

	//for old applications that do not allways pass pntRef, you could activate this (less secure)
//	function checkAccessRef($handler, $request, $scout) {
//		$pntRef = $request->getRequestParam('pntRef');
//		$handler->checkAlphaNumeric($pntRef); //trhows PntValidationException for bad ref
//		return null; //reference checking is disabled to allow access to each page direcly by its url
//	}
	
}
?>