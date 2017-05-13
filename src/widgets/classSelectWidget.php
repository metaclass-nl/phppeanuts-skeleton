<?php
/* Copyright (c) MetaClass, 2003-2013

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
See the License, http://www.gnu.org/licenses/agpl.txt */


Gen::includeClass('PntSelectWidget', 'pnt/web/widgets');

/** FormWidget that generates html specifying 
* a SELECT tag, by default as a dropdown list
* with values that are options for the property.
* @see http://www.phppeanuts.org/site/index_php/Pagina/128
*
* This concrete subclass is here to keep de application developers
* code separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in the superclass.
* @package widgets
*/
class SelectWidget extends PntSelectWidget {

}
?>