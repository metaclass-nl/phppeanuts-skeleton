<?php
// Copyright (c) MetaClass, 2011
	
Gen::includeClass('PntMenuPart', 'pnt/web/parts');

class MainMenuPart extends PntMenuPart {

	public $rowHlColor='#FBFFB3';

	function initMenuData() {
		$this->menuData[] = array('emptyapp', '', '', 'Startingpoint for developing a new application', 'Empty application');
	}
	
}