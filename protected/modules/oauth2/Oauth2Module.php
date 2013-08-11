<?php

class Oauth2Module extends CWebModule
{
    //Private attributes
    /*  @var $_version oauth version */
    private $_version = "1.0";
    private $_test = "\" this is just a test\"";
    //Public attributes
    /* @var $userid String The username column of the users table */
    public $userid = "user_id";
    /* @var $username String The username column of the users table */
    public $username = "username";
    /* @var $password String The password column of the users table */
    public $password ="password";
    /* @var $userTable String The user table name in the database */
    public $userTable="user";
    public function init()
    {
        // this method is called when the module is being created
        // you may place code here to customize the module or the application

        // import the module-level models and components
        $this->setImport(array(
            'oauth2.models.*',
            'oauth2.components.*',
            'oauth2.extensions.oauth2.*',
            'oauth2.controllers.OauthController',
            ));
        // set the module-level components
        $this->setComponents(array(
        'oauth'=>array(
            'class'=>'OAuthManager',
            'userTable'=>$this->userTable,
        ),
        'oauthdb' => array(
                'class' => 'CDbConnection',
                'connectionString' => 'mysql:host=localhost;dbname=newzx',
                'emulatePrepare' => true,
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
                'tablePrefix' => 'zx_',
                ), ));
    }

    public function beforeControllerAction($controller, $action)
    {
        if (parent::beforeControllerAction($controller, $action)) {
            // this method is called before any module controller action is performed
            // you may place customized code here
            //$controller->setOauth(new OAuth(Yii::app()->params['pdo']));
            return true;
        } else
            return false;
    }
    public function getTest()
    {
        return $this->_test;
    }
}
