 <!-- skinDetailsTablePart -->
                  <TABLE class=pntDetailsTable>
                    <TR vAlign=top>
                        <TD width="55%">
                            <TABLE>
								<?php $this->printDetailsRows(false, false) ?>
                            </TABLE>
                        </TD>
                        <TD width="45%">
                            <TABLE>
								<?php $this->printPart('FilterPart'); ?>
								<?php $this->printDetailsRows(true, false) ?>
                            </TABLE>
                        </TD>
                    </TR>
                </TABLE>
 <!-- /skinDetailsTablePart -->
 