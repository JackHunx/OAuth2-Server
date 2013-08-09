<?php

class OauthController extends Controller
{
    //init
    public function init()
    {
        parent::init();
        Yii::app()->setComponents(array(
            'errorHandler' => array(
                'class' => 'CErrorHandler',
                'errorAction' => $this->getId() . '/default/error',
                ),
            'user' => array(
                'class' => 'CWebUser',
                'stateKeyPrefix' => 'gii',
                'loginUrl' => Yii::app()->createUrl($this->getId() . '/default/login'),
                ),
            'widgetFactory' => array('class' => 'CWidgetFactory', 'widgets' => array())), false);
       Yii::app()->user->loginRequired();
    }
    //
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
    /**
     * authorize 
     * @return boolen true or false
     */
    public function authorize()
    {

    }
}
