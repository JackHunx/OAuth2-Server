<?php

class AuthorizeController extends Controller
{
    private $oauth;
    public function actionIndex()
    {
        $this->oauth->authorize(true);
    }

    public function setOauth($oauth)
    {
        if (is_object($oauth)) {
            $this->oauth=$oauth;
        }else{
            throw new CException('param is not an object ');
        }
    }
}
