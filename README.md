Release notes
=============
Version 2.3.0.rc1 skeleton application

Skeleton application from phpPeanuts 2.2.0. adapted to the use of composer.
This version does not include the examples or pntUnit.

To install run:
``` bash
composer create-project metaclass-nl/phppeanuts-skeleton my_project_name dev-master
```
Before testing you need to make configurations in conf/scriptMakeSettings.php

What's new
----------
<P>Since 2.2.0</P>
<UL>
	<li>Adaptation to composer conventions
	<ul>
		<li>Reorganized directory structure
		<li>Added composer.json
		<li>Now uses composers autoloader to load Site class. (All furhter loading of classes used by phpPeanuts
		  is still done through explicit Gen::(try)includeClass calls)
		<li>You may use other libraries installed by composer and autoload their classes
		 as long as their class names do not conflict with the existing
		 (phpPeanuts and it applications) classes. Most libraries nowadays use
		 name spaces thus will not conflict.
	</ul>
</UL>

Remarks for upgrading existing phpPeanuts 2.2.0 applications
------------------------------------------------------------
To install your existing applications in the skeleton:
- backup your existing applications
- adapt your Site class to configure class and skin inclusion from new locations,
  like src/classSite.php from the skeleton does
- add or adapt Gen (try)includeClass overrides to use new classes location and library class inclusion configuration
  like src/classGen.php from the skeleton does
- move contents of your classes folder to src
- move contents of your includes folder to resources/views
- move the rest of your files and folder to public
- adapted each of your index.php files to use composers autoload.php,
  like emptyapp/index.php does
- remove composer.lock from .gitignore so that the exact versions of
  the libraries you used in development are registered in git and can
  be installed easily after git checkout or pull
- remove emptyapp

Additionally you may:
- use composer libraries by adding them to composer.json require or require-dev
- move your reusable class library folders to separate composer libraries
- adapt composer.json to have composer install your libraries
- adapt src/classSite.php $pntLibraries to use the classes from your libraries once installed
  (only those that need to be loaded through Gen::(try)includeClass)
- run composer update to install the libraries  

If you choose to use a different directory instead of vendor you need to:
- adapt src/classSite.php $pntLibraries to use the correct locations
- adapted each of your index.php files to the location of composers autoload.php,

</p>

Known bugs and limitations
----------------------
<OL>
	<li>UTF-8 not supported
	<li>Applications are only protected against cross frame scripting in browsers that support the X-Frame-Options header. 
	<li>The Synchronizer Token Pattern by referrerer tokens is not as strong as by request tokens. (currently
	most frameworks only implement this pattern for actions (called tickets with peanuts)). 
	<li>Though the framework has DAO classes that are successfully used as the database abstraction layer with MySQL
	and SqLite, the use with other databases may require some additional refactoring. Please inform us about eventual
	problems and solutions with the use of other databases. (Known: Oracle versions below 9 do not support standard
	explicit JOIN syntax, but producing JOIN instuctions is not delegated to DAO objects and can not be easily refactored
	to do so.)
	<li>The AGPL license requires you to make the source of applications using this version
	of phpPeanuts available to any users outside your own organization, and allow them forward
	it to the rest of the world. 
</OL>

