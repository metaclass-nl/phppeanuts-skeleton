<?php
/* Copyright (c) MetaClass, 2003-2012

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
See the License, http://www.gnu.org/licenses/agpl.txt */

Gen::includeClass('PntMtoNPropertyPart', 'pnt/web/parts');

/** Part used by ObjectMtoNPropertyPage.
* Contains a table from which the user can remove items by clicking their remove icons.
* and a SearchFrame with an MtoNSearchPage from which the user can search and add items
* by clicking in them. The table is adapted client-side to show the resulting related
* items. When the save button is pressed the id's of the added and removed items
* are sent to the server and processed to add and remove the relationship objects 
* according to the selections of the user.
* This part can also be used inside a TabsPart inside an EditDetalsPage to create 
* a single large form that holds both the detailsPart as the MtoNSearchPart(s). 
* The user can then edit each tab and after he is finished send the entire form
* to the server at once so that all details and n to m relationships are processed at once.
*
* This concrete subclass is here to keep de application developers
* code (including localization overrides) separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in the superclass. 
* This class may be copied to an application folder to
* make application specific overrides.
* @see http://www.phppeanuts.org/site/index_php/Pagina/65
*/
class MtoNPropertyPart extends PntMtoNPropertyPart {
	
	
}
?>