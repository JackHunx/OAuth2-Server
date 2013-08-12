<?php

class ResourceController extends Controller
{
    private $userid;
    //default action
    //public $defaultAction='getUser';
    //init
    public function init()
    {
        //init
        $this->userid = $this->getStorage()->verifyResourceRequest();
        if ($this->userid == false) {
            echo json_encode(array('status' => '0', 'error' => 'verify access_token fail'));
            exit();
        }
    }
    //get storage
    protected function getStorage()
    {
        return new OAuth(Yii::app()->params['pdo']);
    }
    public function getUserId()
    {
        return $this->userid;
    }
}
