<?php
/* Copyright (c) MetaClass, 2003-2012

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
See the License, http://www.gnu.org/licenses/agpl.txt */

Gen::includeClass('PntObjectPropertyPage', 'pnt/web/pages');

/** Page showing a TablePart with the values of a multi value property.
* The property is specified by the pntProperty request parameter.
* Columns of the TablePart can be specified in metadata on the class
* specified by pntType request parameter, 
* @see http://www.phppeanuts.org/site/index_php/Pagina/61
*
* This concrete subclass is here to keep de application developers
* code (including localization overrides) separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in superclass. 
* This class may be copied to an application folder to
* make application specific overrides.
* @see http://www.phppeanuts.org/site/index_php/Pagina/64
*/
class ObjectPropertyPage extends PntObjectPropertyPage {

}
?>