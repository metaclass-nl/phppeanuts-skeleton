<?php
/* Copyright (c) MetaClass, 2003-2012

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
See the License, http://www.gnu.org/licenses/agpl.txt */

Gen::includeClass('PntDatabaseConnection', 'pnt/db');

/** Instance of this class desrcibes a database connection.
*
* This concrete subclass is here to keep de application developers
* code (including localization overrides) separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in superclass. 
* This class may be copied to an application folder to
* make application specific overrides.
*/
class DatabaseConnection extends PntDatabaseConnection {
	
	/** @depricated, only works with MySql. 
	* Use ::makeConnection or QueryHandler::connect
	*/
	function connect($host,$port,$username,$password,$dbName) {
		// establishes the connection and selects the db
		$hostport="$host:$port";
		$this->dbSource = mysql_connect($hostport,$username,$password);
		if ($this->dbSource !== false) {
			mysql_select_db($dbName,$this->dbSource);
			DatabaseConnection::defaultConnection($this);
		}
	}
		
}
?>