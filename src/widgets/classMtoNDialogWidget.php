<?php
/* Copyright (c) MetaClass, 2003-2013

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
See the License, http://www.gnu.org/licenses/agpl.txt */

Gen::includeClass('PntMtoNDialogWidget', 'pnt/web/widgets');

/** FormWidget that generates html specifying Div
* and a button. Both will react to a click by open a Dialog.
* When the dialog is closed it calls a funcion specified by
* this Widget to set the new value and label in this Widget. 
*
* This concrete subclass is here to keep de application developers
* code separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in the superclass.
* @package widgets
*/
class MtoNDialogWidget extends PntMtoNDialogWidget {

}
?>