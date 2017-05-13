<?php
/* Copyright (c) MetaClass, 2003-2012

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
See the License, http://www.gnu.org/licenses/agpl.txt */

Gen::includeClass('PntObjectEditDetailsDialog', 'pnt/web/dialogs');

/** Dialog to edit details of a single peanut. It is a specialization of
* ObjectEditDetailsPage but there are no multi value property buttons.
* It is invoked by the ''New' button in PntObjectDialog and PntObjectMtoNPropertyPage
*
* This concrete subclass is here to keep de application developers
* code (including localization overrides) separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in superclass. 
* This class may be copied to an application folder to
* make application specific overrides.
* @see http://www.phppeanuts.org/site/index_php/Pagina/66
*/
class ObjectEditDetailsDialog extends PntObjectEditDetailsDialog {

}	
?>