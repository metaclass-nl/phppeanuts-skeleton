Release notes
=============
Version 2.3.0.alpha skeleton application

Skeleton application from phpPeanuts 2.2.0. adapted to the use of composer.
This version does not include the examples nor pntUnit and the unit tests.

Before testing you need to make configurations in conf/scriptMakeSettings.php
and run composer install.

What's new
----------
<P>Since 2.2.0</P>
<UL>
	<li>Adaptation to composer conventions
	<ul>
		<li>Reorganized directory structure
		<li>Added composer.json
		<li>Now uses composers autoloader to load Site class. (All furhter loading of classes used by phpPeanuts
		  is still done through explicit (try)includeClass calls)
		<li>You may use other libraries installed by composer and autoload their classes
		 the composer way als long as their class names do not conflict with the existing
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
- move reusable class library folders to separate composer libraries
- adapt composer.json to have composer install the libraries
- adapt src/classSite.php $pntLibraries to use the classes from the libraries once installed

If you choose to use a different directory instead of vendor you need to:
- adapt src/classSite.php $pntLibraries to use the correct locations
- adapted each of your index.php files to the location of composers autoload.php,

</p>

Known bugs and limitations
----------------------
<OL>
	<li>Applications are only protected against cross frame scripting in browsers that support the X-Frame-Options header. 
	<li>The Synchronizer Token Pattern by referrerer tokens is not as strong as by request tokens. (currently
	most frameworks only implement this pattern for actions (called tickets with peanuts)). 
	<li>With older versions of PHP and/or MySQL the character set can not be set on the connection in such a way that the 
		quoting functions of MySQL take the character set into account (This is a limitation of PHP and MySql). 
		This may be a problem with UTF-8 and it may 
		have security implications, possibly including SQL injection vurnerabilities. To avoid this requires:<br>
		- MySQL >= 5.0.7 or if you're using MySQL 4, then >= 4.1.13.<br>
		- PntMySqlDao: PHP 5.0.7 or later<br>
		- PntPdoDao: PHP 5.3.6 or later<br>
		- PntMySqliDao (not included in the open source version): PHP 5.0.5 or later.
		Emulated parameterized queries like used by PDO and PntMySqlDao will not protect you from this! (You may configure
		PDO to use native parameterization)
	<li>Though the framework has DAO classes that are successfully used as the database abstraction layer with MySQL
	and SqLite, the use with other databases may require some additional refactoring. Please inform us about eventual
	problems and solutions with the use of other databases. (Known: Oracle versions below 9 do not support standard
	explicit JOIN syntax, but producing JOIN instuctions is not delegated to DAO objects and can not be easily refactored
	to do so.)
	<li>The AGPL license requires you to make the source of applications using this version
	of phpPeanuts available to any users outside your own organization, and allow them forward
	it to the rest of the world. An extended commercial edition is available on request under 
	developers licenses that do not include obligations to publish derived works etc. 
	For more info see the Support menu of the phpPeanuts website.
</OL>

