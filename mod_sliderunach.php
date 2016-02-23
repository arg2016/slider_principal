<?php

defined('_JEXEC') or die ('Restricted access');
/*Se llaman los helpers del modulo y del k2 para mostra la informacion*/
require_once (dirname(__FILE__).DS.'helper.php');
require_once(JPATH_SITE.DS.'components'.DS.'com_k2'.DS.'helpers'.DS.'route.php');

/*Se reciben los parametros del modulo*/
$categoria=$params->get("categoriak2");
$cantidad=$params->get('cantidad');
$articulos=  modSliderUnachHelper::getK2Items($categoria[0]);

/*Se agregan los scripts necesarios para que el slider funcione*/
$document = JFactory::getDocument();
//$document->addStyleSheet(JURI::root(true). '/modules/'.$module->module.'/assets/camera.css');
//$document->addScript( JURI::root(true). '/modules/'.$module->module.'/assets/jquery.mobile.customized.min.js' ); 
//$document->addScript( JURI::root(true). '/modules/'.$module->module.'/assets/jquery.easing.1.3.js' ); 	
//$document->addScript( JURI::root(true). '/modules/'.$module->module.'/assets/camera.min.js' ); 	
 
/*Se llama a la vista del modulo*/      
//require(JModuleHelper::getLayoutPath ('mod_sliderunach'));
require JModuleHelper::getLayoutPath('mod_sliderunach', $params->get('layout','default'));

