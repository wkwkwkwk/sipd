<?php


	class IndexController extends Controller
	{
		/*if (isset(Yii::app()->session['admin'])) {
			$this->render('/admin/index');
		} else {*/
			//untuk menyatakan bahwa kita menggunakan layout
			public $layout='homepage';

			public function actionIndex()
			{
				
				//render ke file index.php
				//IsAuth::Admin();
				$this->render('index');
				
			}
	}

?>