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
    public $registTemplate = '/default/regist';
    public function init()
    {
        //Yii::app()->clientScript->registerCoreScript('jquery');
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
        //exit;
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
                // print_r($_POST['LoginForm']);
                //exit();
                $model = new LoginForm;

                // collect user input data
                if (isset($_POST['LoginForm'])) {
                    //print_r($_POST['LoginForm']);
                    //          exit();
                    $model->attributes = $_POST['LoginForm'];
                    // validate user input and redirect to the previous page if valid
                    if ($model->validate() && $model->login())
                        return true;
                    else {
                        echo json_encode(array('info' => '用户名或密码错误', 'status' => 'n'));
                        exit();
                    }
                }
            }
            //Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/facebox.js');
            $this->renderPartial($this->loginTemplate);
            Yii::app()->end();
        } else {
            //not a guest , login with this logined user or login with a nother user
            return true;
        }


        //return true;
    }
    /**
     * regist to a new user
     */
    public function actionRegist()
    {
        if (isset($_POST['RegistForm'])) {
            $user = new User;
            $user->attributes = array_merge($_POST['RegistForm'], array('registered' => time
                    ()));
            //print_r($user->a);
            // exit;
            if ($user->save())
                echo json_encode(array('status' => 'y', 'returnUrl' => Yii::app()->createUrl('site/test')));
            else
                echo json_encode(array('status' => 'n', 'info' => '注册失败,请重新注册'));
            exit();
        }
        $this->renderPartial($this->registTemplate);
    }
    /**
     * encryt password
     * 
     * default encryption method is used by md5 
     */
    protected function encrypt($value)
    {
        return md5($value);
    }
    /**
     * @return mixed null or $user_id
     */
    protected function getUserId()
    {
        //print_r();
        return Yii::app()->user->id == null ? null : Yii::app()->user->id;
    }
    /**
     * get user info 
     */
    protected function getUserInfo()
    {

    }
}
