<?php
/* Copyright (c) MetaClass, 2003-2012

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
See the License, http://www.gnu.org/licenses/agpl.txt */

Gen::includeClass('PntObjectSelectionReportPage', 'pnt/web/pages');

/** Page showing a TablePart with manually selected objects. 
* Navigation leads to ReportPages. 
* Columns shown in the TablePart can be overridden by creating a 
* getReportColumnPaths method on the type of objects shown in the table.
* totals are shown of columns with values of properties typed as number. 
*
* This concrete subclass is here to keep de application developers
* code (including localization overrides) separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in superclass. 
* This class may be copied to an application folder to
* make application specific overrides.
* @see http://www.phppeanuts.org/site/index_php/Pagina/64
*/
class ObjectSelectionReportPage extends PntObjectSelectionReportPage {
	

}
?>