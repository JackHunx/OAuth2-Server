<?php

class DefaultController extends Controller
{
    private $oauth;
    public $layout = '/layouts/main';
	public function actionIndex()
	{
	   
       $model=new LoginForm;
        
		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
		  //print_r($_POST['LoginForm']);
//          exit();
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	  // $model = OAuthUser::model()->findByAttributes(array(Yii::app()->getModule('oauth2')->username=>'admin'));
//       //$model = new OAuthUser;
//       echo "<pre>";
//       print_r($model->getUserId());
//	   //print_r($this->module->test);
//		
	}
}