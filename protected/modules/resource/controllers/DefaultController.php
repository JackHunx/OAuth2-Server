<?php

class DefaultController extends ResourceController
{
	public function actionIndex()
	{
	   echo json_encode(array('user_id'=>$this->getUserId()));
	}
}