<?php
session_start();
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('Christian Meter', 'Renate Horsch');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-44992560-1', 'renate-horsch.de');
		ga('send', 'pageview');
	</script>
	
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('main');
		#echo $this->Html->css('colorbox');
		echo $this->Html->css('//fonts.googleapis.com/css?family=Open+Sans');

		echo $this->Html->script('modernizr.js');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<header>
			<div align="left"><h1 stlye="margin-bottom: 0;"><?php echo $cakeDescription; ?></h1></div>
			<div align="right"><h2>Praxis für Klassische Homöopathie, Gesprächstherapie, medizinische Heilhypnose</h2></div>
		</header>
		<?php 
			include("nav.ctp");
		?>
		<div id="content">
			<?php 
				echo $this->Session->flash();
				echo $this->fetch('content'); 
			?>
		</div>
		<footer>
			
		</footer>
	</div>
</body>
</html>