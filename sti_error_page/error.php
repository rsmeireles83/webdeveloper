<?php
/**
 * @package     Joomla.Site
 * @subpackage  Template.system
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentError $this */

if (!isset($this->error))
{
	$this->error = JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
	$this->debug = false;
}

$app = JFactory::getApplication();
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta charset="utf-8" />
	<title><?php echo $this->error->getCode(); ?> - <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></title>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:700,900" rel="stylesheet">

	
	<style>
			* {
			  -webkit-box-sizing: border-box;
					  box-sizing: border-box;
			}

			body {
			  padding: 0;
			  margin: 0;
			}

			#notfound {
			  position: relative;
			  height: 100vh;
			}

			#notfound .notfound {
			  position: absolute;
			  left: 50%;
			  top: 50%;
			  -webkit-transform: translate(-50%, -50%);
				  -ms-transform: translate(-50%, -50%);
					  transform: translate(-50%, -50%);
			}

			.notfound {
			  max-width: 767px;
			  width: 100%;
			  line-height: 1.4;
			  padding: 0px 15px;
			}

			.notfound .notfound-404 {
			  position: relative;
			  height: 150px;
			  line-height: 150px;
			  margin-bottom: 25px;
			}

			.notfound .notfound-404 h1 {
			  font-family: 'Titillium Web', sans-serif;
			  font-size: 186px;
			  font-weight: 900;
			  margin: 0px;
			  text-transform: uppercase;
			  background: url("<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/404.png");
			  -webkit-background-clip: text;
			  -webkit-text-fill-color: transparent;
			  background-size: cover;
			  background-position: center;
			}

			.notfound h2 {
			  font-family: 'Titillium Web', sans-serif;
			  font-size: 26px;
			  font-weight: 700;
			  margin: 0;
			}

			.notfound p {
			  font-family: 'Montserrat', sans-serif;
			  font-size: 14px;
			  font-weight: 500;
			  margin-bottom: 0px;
			  text-transform: uppercase;
			}

			.notfound a {
			  font-family: 'Titillium Web', sans-serif;
			  display: inline-block;
			  text-transform: uppercase;
			  color: #fff;
			  text-decoration: none;
			  border: none;
			  background: #5c91fe;
			  padding: 10px 40px;
			  font-size: 14px;
			  font-weight: 700;
			  border-radius: 1px;
			  margin-top: 15px;
			  -webkit-transition: 0.2s all;
			  transition: 0.2s all;
			}

			.notfound a:hover {
			  opacity: 0.8;
			}

			@media only screen and (max-width: 767px) {
			  .notfound .notfound-404 {
				height: 110px;
				line-height: 110px;
			  }
			  .notfound .notfound-404 h1 {
				font-size: 120px;
			  }
			}
	</style>

	<!--[if lt IE 9]><script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script><![endif]-->
</head>
<body>
	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>404</h1>
			</div>
			<h2>Desculpe! Essa página não existe.</h2>
			<p>A página que você está buscando não existe, foi removida ou está indisponível.</p>
			<a href="<?php echo JUri::root(true); ?>">Voltar para a página inicial</a>
		</div>
	</div>
</body>
</html>
