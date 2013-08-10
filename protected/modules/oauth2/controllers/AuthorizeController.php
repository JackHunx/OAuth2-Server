<?php

class AuthorizeController extends OauthController
{
    //private $oauth;
    public $defaultAction='index';
    public function actionIndex()
    {
        //$this->loginTemplate='/aaa/aaa';
        parent::actionAuthorize();
        //$this->getStorage()->authorize(true);

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
