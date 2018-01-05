<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.unsettypes
 *
 * @copyright   Copyright (C) 2005 - 2007 Open Source Matters. All rights reserved.
 * @license     License GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * Plug-in to unset the `type` attribute for JavaScript and CSS
 *
 * @package     Joomla.Plugin
 * @subpackage  System.unsettypes
 * @since       3.0
 */
 
class PlgSystemUnsetTypes extends JPlugin
{
	
	public function __construct(&$subject, $config)
	{
		parent::__construct($subject, $config);
	}
	
    public function onBeforeCompileHead()
    {
        $app = JFactory::getApplication();
        if($app instanceof JApplicationSite & $app->isSite()){
			$doc = JFactory::getDocument();
			$data = $doc->getHeadData();
			
			foreach($data['styleSheets'] as &$params){
				unset($params['type'], $params['mime']);
			}
			unset($params);
			$doc->_styleSheets = $data['styleSheets'];
			
			foreach($data['scripts'] as &$params){
				unset($params['type'], $params['mime']);
			}
			unset($params);
			$doc->_scripts = $data['scripts'];
			
			if(count($data['script']) > 0){
				$customScriptTag = '<script>' . "\n";
				foreach($data['script'] as $script){
					$customScriptTag .= $script  . "\n";
				}
				$customScriptTag .= '</script>' . "\n";
				$doc->addCustomTag($customScriptTag);
				$doc->_script = array();
			}
			
			if(count($data['style']) > 0){
				$customStyleTag = '<style>' . "\n";
				foreach($data['style'] as $style){
					$customStyleTag .= $style  . "\n";
				}
				$customStyleTag .= '</style>' . "\n";
				$doc->addCustomTag($customStyleTag);
				$doc->_style = array();
			}
		}
	}
}