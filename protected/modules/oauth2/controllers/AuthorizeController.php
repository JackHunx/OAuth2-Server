<?php

class AuthorizeController extends OauthController
{
    //private $oauth;
    //public $defaultAction='test';
    public function actionIndex()
    {
     
      $this->getStorage()->authorize(true);
      
    }
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
