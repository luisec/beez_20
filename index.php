<?php
/**
 * @package                Joomla.Site
 * @subpackage	Templates.beez_20
 * @copyright        Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license                GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

jimport('joomla.filesystem.file');

// check modules
$showRightColumn	= ($this->countModules('position-3') or $this->countModules('position-6') or $this->countModules('position-8'));
$showbottom			= ($this->countModules('position-9') or $this->countModules('position-10') or $this->countModules('position-11'));
$showleft			= ($this->countModules('position-4') or $this->countModules('position-7') or $this->countModules('position-5'));

if ($showRightColumn==0 and $showleft==0) {
	$showno = 0;
}

JHtml::_('behavior.framework', true);

// get params
$color				= $this->params->get('templatecolor');
$logo				= $this->params->get('logo');
$navposition		= $this->params->get('navposition');
$app				= JFactory::getApplication();
$doc				= JFactory::getDocument();
$templateparams		= $app->getTemplate(true)->params;

$doc->addStyleSheet($this->baseurl.'/templates/system/css/system.css');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>

	<link rel="stylesheet" type="text/css" media="screen" href="templates/beez_20/css/template.css" />

	<script type="text/javascript" src="templates/beez_20/scripts/jquery.min-1.8.0.js"></script>

	<script type="text/javascript" src="templates/beez_20/scripts/gallery/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="templates/beez_20/scripts/gallery/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="templates/beez_20/scripts/gallery/loader.js"></script>

	<script type="text/javascript" src="templates/beez_20/scripts/scrollpage/jquery.scrollTo.js"></script>
	<script type="text/javascript" src="templates/beez_20/scripts/scrollpage/Scrolling.js"></script>

	<script type="text/javascript" src="templates/beez_20/scripts/ServiceSlider/slider.js"></script>

<jdoc:include type="head" />

<!--[if lte IE 6]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
<?php if ($color=="personal") : ?>
<style type="text/css">
#line {
	width:98% ;
}
.logoheader {
	height:200px;
}
#header ul.menu {
	display:block !important;
	width:98.2% ;
}
</style>
<?php endif; ?>
<![endif]-->

<!--[if IE 7]>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ie7only.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript">
	var big ='<?php echo (int)$this->params->get('wrapperLarge');?>%';
	var small='<?php echo (int)$this->params->get('wrapperSmall'); ?>%';
	var altopen='<?php echo JText::_('TPL_BEEZ2_ALTOPEN', true); ?>';
	var altclose='<?php echo JText::_('TPL_BEEZ2_ALTCLOSE', true); ?>';
	var bildauf='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/plus.png';
	var bildzu='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/minus.png';
	var rightopen='<?php echo JText::_('TPL_BEEZ2_TEXTRIGHTOPEN', true); ?>';
	var rightclose='<?php echo JText::_('TPL_BEEZ2_TEXTRIGHTCLOSE', true); ?>';
	var fontSizeTitle='<?php echo JText::_('TPL_BEEZ2_FONTSIZE', true); ?>';
	var bigger='<?php echo JText::_('TPL_BEEZ2_BIGGER', true); ?>';
	var reset='<?php echo JText::_('TPL_BEEZ2_RESET', true); ?>';
	var smaller='<?php echo JText::_('TPL_BEEZ2_SMALLER', true); ?>';
	var biggerTitle='<?php echo JText::_('TPL_BEEZ2_INCREASE_SIZE', true); ?>';
	var resetTitle='<?php echo JText::_('TPL_BEEZ2_REVERT_STYLES_TO_DEFAULT', true); ?>';
	var smallerTitle='<?php echo JText::_('TPL_BEEZ2_DECREASE_SIZE', true); ?>';
</script>

</head>

<body>



	<div id="wrapper">

		<div id="mask">

			<div id="menu">
				<div id="menuCont">
					<jdoc:include type="modules" name="PrincipalMenu" class="panel" />
				</div>
				<div id="menuFoot"></div>
			</div>

			<div id="item1" class="item">
				<a name="item1"></a>
				<div class="content">
					item1 <a href="#item1" class="panel">1</a> | <a href="#item2" class="panel">2</a> | <a href="#item3" class="panel">3</a> | <a href="#item4" class="panel">4</a> | <a href="#item5" class="panel">5</a>
					<br />
					<jdoc:include type="modules" name="Inicio" class="panel" />
				</div>
			</div>
			
			<div id="item2" class="item">
				<a name="item2"></a>
				<div class="content">
					item2 <a href="#item1" class="panel">1</a> | <a href="#item2" class="panel">2</a> | <a href="#item3" class="panel">3</a> | <a href="#item4" class="panel">4</a> | <a href="#item5" class="panel">5</a>
					<br />
					<div class="contentTitle"><h2>¿Quines Somos?</h2></div>
					<div class="contenttext">
						<jdoc:include type="modules" name="QSomos" class="panel" />
					</div>
					<div id="bqsomos"></div>
					
				</div>
			</div>
			
			<div id="item3" class="item">
				<a name="item3"></a>
				<div class="content">
					item3 <a href="#item1" class="panel">1</a> | <a href="#item2" class="panel">2</a> | <a href="#item3" class="panel">3</a> | <a href="#item4" class="panel">4</a> | <a href="#item5" class="panel">5</a>
					<br />
					<div class="contentTitle"><h2>Clientes</h2></div>
					<jdoc:include type="modules" name="Client" class="panel" />
				</div>
			</div>
			
			<div id="item4" class="item">
				<a name="item4"></a>
				<div class="content">
					item4 <a href="#item1" class="panel">1</a> | <a href="#item2" class="panel">2</a> | <a href="#item3" class="panel">3</a> | <a href="#item4" class="panel">4</a> | <a href="#item5" class="panel">5</a>
					<br />
					<div class="contentTitle"><h2>Servicios</h2></div>
					<div class="contenttext">
						<div id="slideshow">
						    <div id="slidesContainer">
						    	<jdoc:include type="modules" name="Servic" class="panel" />
						    </div>
						</div>
					</div>
					
				</div>
			</div>
			
			<div id="item5" class="item">
				<a name="item5"></a>
				<div class="content">
					item5 <a href="#item1" class="panel">1</a> | <a href="#item2" class="panel">2</a> | <a href="#item3" class="panel">3</a> | <a href="#item4" class="panel">4</a> | <a href="#item5" class="panel">5</a>
					<br />
					<div class="contentTitle"><h2>Contáctanos</h2></div>
					<div id="formcontainer">
						<div id="form">

						</div>
						<div id="map">

						</div>
					</div>
					<jdoc:include type="modules" name="Contac" class="panel" />
				</div>
			</div>

		</div>

	</div>





<!--        <div id="clientes">
            <img src="templates/beez_20/images/Clientes/Adidas.jpg" width="256" height="256" class="first" />
            <img src="templates/beez_20/images/Clientes/Chanel.jpg" width="256" height="256" />
            <img src="templates/beez_20/images/Clientes/Jack.jpg" width="256" height="256" />
            <img src="templates/beez_20/images/Clientes/nike.jpg" width="256" height="256" />
        </div>
-->

</body>
</html>
