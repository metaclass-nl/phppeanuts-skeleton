<?php
/* Copyright (c) MetaClass, 2003-2012

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	
See the License, http://www.gnu.org/licenses/agpl.txt */

Gen::includeClass('PntObjectReportPage', 'pnt/web/pages');

/** Kind of DetailsPage showing property labels and values of a single object,
* but also a TablePart with values for each multi value property.
* Navigation leads to other ReportPages. 
* What details are shown can be overridden by overriding getFormTextPaths method.
* What multi value properties are shown can be overriden by overriding
* the getMultiPropNames method. 
* Columns shown in each TablePart can be overridden by creating a 
* getReportColumnPaths method on the type of objects shown in the table.
* Layout can be overridden, see http://www.phppeanuts.org/site/index_php/Pagina/65
*
* This concrete subclass is here to keep de application developers
* code (including localization overrides) separated from the framework code.
* @see http://www.phppeanuts.org/site/index_php/Menu/178
* Framework code is in superclass. 
* This class may be copied to an application folder to
* make application specific overrides.
* @see http://www.phppeanuts.org/site/index_php/Pagina/64
*/
class ObjectReportPage extends PntObjectReportPage {
	

}
?>