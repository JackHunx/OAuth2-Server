<?php

class AuthorizeController extends OauthController
{
    //private $oauth;
    public $defaultAction='index';
    public function actionIndex()
    {
        //echo Yii::app()->getModule('oauth2')->oauth->userTable;
        //$this->loginTemplate='/aaa/aaa';
        parent::actionAuthorize();
        //$this->getStorage()->authorize(true);
        //Yii::app()->user->re
    }
    ///**
//     * regist to a new user
//     */
//     public function actionRegist()
//     {
//        
//     }
    //
    //    public function setOauth($oauth)
    //    {
    //        if (is_object($oauth)) {
    //            $this->oauth=$oauth;
    //        }else{
    //            throw new CException('param is not an object ');
    //        }
    //    }
}
