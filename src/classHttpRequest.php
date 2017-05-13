<?php 
/* Copyright (c) MetaClass, 2003-2012

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

See the License, http://www.gnu.org/licenses/agpl.txt */

Gen::includeClass('PntHttpRequest', 'pnt/web');

/* Validating Http request validator. Logs validation warnings for bad input. Stores only valid input.
 * 
* This concrete subclass is here to keep de application developers
* code separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in the superclass.
* This class may be copied to an application folder to
* make application specific overrides.
* @see http://www.phppeanuts.org/site/index_php/Pagina/65
*/
class HttpRequest extends PntHttpRequest {
	
}
?>