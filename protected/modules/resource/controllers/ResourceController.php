<?php

class ResourceController extends Controller
{
	//default action 
    public $defaultAction='getUser';
    //init 
    public function init()
    {
        //init
    }
    //get storage
    protected function getStorage()
    {
        return new OAuth(Yii::app()->params['pdo']);
    }
    /**
     * return login user user info like user id user name ...
     */
    public function actionGetUser()
    {
        $this->getStorage()->resource();
    }
}