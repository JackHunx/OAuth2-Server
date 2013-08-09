<?php

class Oauth2Module extends CWebModule
{
	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'oauth2.models.*',
			'oauth2.components.*',
		));
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// this method is called before any module controller action is performed
			// you may place customized code here
            $controller->setOauth(new OAuth(Yii::app()->params['pdo']));
			return true;
		}
		else
			return false;
	}
}
