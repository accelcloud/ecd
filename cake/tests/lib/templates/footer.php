<?php
/**
 * Short description for file.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <http://book.cakephp.org/1.3/en/The-Manual/Common-Tasks-With-CakePHP/Testing.html>
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.cakephp.org/1.3/en/The-Manual/Common-Tasks-With-CakePHP/Testing.html CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.cake.tests.lib
 * @since         CakePHP(tm) v 1.2.0.4433
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
?>	</div>
		</div>
 		<div id="footer">
			<p>
 			<!--PLEASE USE ONE OF THE POWERED BY CAKEPHP LOGO-->
 			<a href="http://www.cakephp.org/" target="_blank">
				<img src="<?php echo $baseDir; ?>img/cake.power.gif" alt="CakePHP(tm) :: Rapid Development Framework" /></a>
			</p>
 		</div>
		<?php
			App::import('Core', 'View');
			$null = null;
			$View =& new View($null, false);
			echo $View->element('sql_dump');
		?>
	</div>
</body>
</html>
