<?php
/* Copyright (c) MetaClass, 2003-2012

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
See the License, http://www.gnu.org/licenses/agpl.txt */

Gen::includeClass('PntComparator', 'pnt/db/query');

/** Objects of this class describe a comparision.
* Used by FilterFormPart in the advanced search.
* part for navigational query specification, part of PntSqlFilter
* @see http://www.phppeanuts.org/site/index_php/Pagina/170
*
* This concrete subclass is here to keep de application developers
* code (including localization overrides) separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in superclass. 
*/
class Comparator extends PntComparator {


}
?>