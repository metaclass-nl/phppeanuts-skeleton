<?php
/* Copyright (c) MetaClass, 2003-2012

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
See the License, http://www.gnu.org/licenses/agpl.txt */

global $pntLibraries;
$pntLibraries = (object) array(
	'pnt' => '../../vendor/metaclass-nl/phppeanuts-classes-pnt/src',
);

require_once($pntLibraries->pnt. '/pnt/classPntGen.php');
require_once("../../src/classGen.php");

//activate the following if you need depricated functions
//require_once($pntLibraries->pnt. "/pnt/depricatedFunctions.php");

//register the Site class
$GLOBALS['PntIncludedClasses']['site'] = 'Site';
Gen::includeClass('PntSite', 'pnt/web');

/** Objects of this class are the single entrypoint for handling http requests.
* Site connects to the database as specified in scriptMakeSettings.php and
* sets the ErrorHandler, the debugMode, specifies application folder and domain folder, 
* supplies StringConverters,  baseUrl and takes care of sessions.
*
* This concrete subclass is here to keep de application developers
* code (including localization overrides) separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in superclass. 
*/
class Site extends PntSite {

	//public $debugMode = 'verbose'; //options: '', 'short', 'verbose'

	//function setErrorHandler() {
	//	//Activate the code below if you do not want to see notifications but you do want to log them.
	//	//also set the correct hostname in classErrorHandler.php 
	//	ini_set('log_errors', '1');
	//	Gen::includeClass('ErrorHandler');
	//	$this->errorHandler = new ErrorHandler(null, $this->getShopEmail());
	//	$this->errorHandler->developmentHost = 'localhost';
	//	if ($this->errorHandler->isDevelopment()) {
	//		//print "showing notifications";
	//		$this->errorHandler->reportingLevel = E_ALL | E_STRICT;
	//	}
	//	$this->errorHandler->loggingLevel = E_ALL  | E_STRICT;
	//	$this->errorHandler->startHandling();
	//}

	function getShopEmail() {
		return "youradress@yourdomain";
	}


	function loadSettings() {
		require('../../conf/scriptMakeSettings.php');
	}

	function getIncludesDir() {
		return '../resources/views';
	}

} 

?>
