<?php


	class PageController extends Controller
	{
		//untuk menyatakan bahwa kita menggunakan layout
		public $layout='homepage';

		public function actionIndex()
		{
			//render ke file index.php
			$this->render('index');
		}
	}

?>