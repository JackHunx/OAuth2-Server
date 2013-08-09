<?php

class DefaultController extends Controller
{
    private $oauth;
    public $layout = '/layouts/main';
	public function actionIndex()
	{
		$this->render('index');
	}
}