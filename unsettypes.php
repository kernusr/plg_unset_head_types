<?php
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

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
		}
	}
}