<?php

class Oauth2Controller extends Controller
{
    private $oauth;
    public function init()
    {
        $this->oauth = new OAuth(Yii::app()->params['pdo']);
    }
	public function actionToken()
	{
		
		$this->oauth->token();
	}
    public function actionAuthorize()
    {
        $this->oauth->authorize(true);
    }
    
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}