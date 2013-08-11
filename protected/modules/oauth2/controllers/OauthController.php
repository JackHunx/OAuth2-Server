<?php

class OauthController extends Controller
{
    /**
     * default action 
     */
    public $defaultAction = 'authorize';
    /**
     * the defalut login template file path 
     */
    public $loginTemplate = '/default/login';
    //init
    public function init()
    {
        //parent::init();
        //        Yii::app()->setComponents(array(
        //            'errorHandler' => array(
        //                'class' => 'CErrorHandler',
        //                'errorAction' => $this->getId() . '/default/error',
        //                ),
        //            'user' => array(
        //                'class' => 'CWebUser',
        //                'stateKeyPrefix' => 'gii',
        //                'loginUrl' => Yii::app()->createUrl($this->getId() . '/login'),
        //                ),
        //            'widgetFactory' => array('class' => 'CWidgetFactory', 'widgets' => array())), false);
        //       Yii::app()->user->loginRequired();
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
     * 
     */
    public function actionAuthorize()
    {
        //$authorize = $this->login();
        $this->getStorage()->authorize($this->login(), $this->getUserId());
    }
    /**
     * @return boolen true or false
     */
    protected function login()
    {
        //if login or not
        if (Yii::app()->user->isGuest) {
            if (isset($_POST['LoginForm'])) {
                $model = new LoginForm;

                // collect user input data
                if (isset($_POST['LoginForm'])) {
                    //print_r($_POST['LoginForm']);
                    //          exit();
                    $model->attributes = $_POST['LoginForm'];
                    // validate user input and redirect to the previous page if valid
                    if ($model->validate() && $model->login())
                        return true;
                }
            }
            $this->renderPartial($this->loginTemplate);
            Yii::app()->end();
        } else {
            //not a guest , login with this logined user or login with a nother user
            return true;
        }


        //return true;
    }
    /**
     * @return mixed null or $user_id
     */
    protected function getUserId()
    {
        return Yii::app()->user->id == null ? null : Yii::app()->user->id;
    }
    /**
     * get user info 
     */
    protected function getUserInfo()
    {

    }
}
