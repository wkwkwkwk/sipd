<?php

	class AjaxController extends Controller
	{
		public $layout = "null";

		public function actionIndex()
		{
			$this->render('index');
		}

		public function actionCreate()
		{
			//jika di request oleh ajax maka dijalankan
			if (Yii::app()->request->isAjaxRequest) {
				$modelTopografi = new Topografi;

				if ($_POST) {
					$modelTopografi['datar']=$_POST['datar'];
					$modelTopografi['bergelombang']=$_POST['bergelombang'];
					$modelTopografi['curam']=$_POST['curam'];
					$modelTopografi['sgtcuram']=$_POST['sgtcuram'];
					$modelTopografi['tinggidpl']=$_POST['tinggidpl'];
					$modelTopografi->save();
				}

				$this->render('create');
			}
		}
	}

?>