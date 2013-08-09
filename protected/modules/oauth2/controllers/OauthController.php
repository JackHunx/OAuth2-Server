<?php

class OauthController extends Controller
{
	protected function beforeAction($action)
    {
        //must return true;
        return true;
    }
    //get storage 
    protected function getStorage()
    {
        return new OAuth(Yii::app()->params['pdo']);
    }
    //set storage
}