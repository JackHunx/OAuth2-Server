<?php

class CheckvalueController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }
    public function actionIsRegister()
    {
        $record = User::model()->find('username=:username', array(':username' => $_POST['param']));
        if ($record == null)
            echo json_encode(array('status' => 'n', 'info' => '用户不存在,检查用户名是否正确！'));
        else
            echo json_encode(array('status' => 'y'));
    }
    /**
     * 检查用户名是否已经注册
     */
    public function actionIsRegisted()
    {
        $record = User::model()->find('username=:username', array(':username' => $_POST['param']));
        if ($record == null)
            echo json_encode(array('status' => 'y', 'info' => '此用户名可以注册！'));
        else
            echo json_encode(array('status' => 'n', 'info' => '用户名已经存在,请选择其他用户名！'));
    }
    /**
     * 检查邮箱是否注册
     */
    public function actionEmail()
    {
        $record = User::model()->find('email=:email', array(':email' => $_POST['param']));
        if ($record == null)
            echo json_encode(array('status' => 'y', 'info' => '邮箱可以注册！'));
        else
            echo json_encode(array('status' => 'n', 'info' => '邮箱已存在,请重新选择邮箱!'));
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
