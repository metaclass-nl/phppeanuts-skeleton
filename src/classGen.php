<?php
/* Copyright (c) MetaClass, 2003-2012

Distrubuted and licensed under under the terms of the GNU Affero General Public License
version 3, or (at your option) any later version.

This program is distributed WITHOUT ANY WARRANTY; without even the implied warranty 
of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

See the License, http://www.gnu.org/licenses/agpl.txt */

/**
 * Utility class that replaces pnt 1.x generalFunctions.php
 * PntGen must be included from classSite.php before this file is included
 */
class Gen extends PntGen {

    // function overrides to support global $cfgCommonClassDirs;
    static function tryIncludeClass($className, $dirPath='') {
        if (class_exists($className)) return true;

        global $pntLibraries;
        if ($dirPath && substr($dirPath, -1) != '/')
            $dirPath .= '/';

        $dir1 = subStr($dirPath, 0, strPos($dirPath, '/'));
        $basePath = (isSet($pntLibraries->$dir1) ? $pntLibraries->$dir1 : '../../src');
        $result = Gen::tryIncludeOnce("$basePath/$dirPath"."class$className.php"); //warning in PntGen method comment

        return $result;
    }



    static function includeClass($className, $dirPath='', $debug=false) {
        $result = Gen::tryIncludeClass($className, $dirPath);
        if (!$result || $debug) {
            global $pntLibraries;
            if ($dirPath && substr($dirPath, -1) != '/')
                $dirPath .= '/';
            $dir1 = subStr($dirPath, 0, strPos($dirPath, '/'));
            $basePath = (isSet($pntLibraries->$dir1) ? $pntLibraries->$dir1 : '../../src');
            if ($result)
                print ("Included: $basePath/$dirPath"."class$className.php<BR>");
            else
                trigger_error("Could not include: $basePath/$dirPath"."class$className.php", E_USER_WARNING);
        }
        return $result;
    }
}

?>