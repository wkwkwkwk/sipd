<?php


	class LoginController extends Controller
	{
		//untuk menyatakan bahwa kita menggunakan layout
		public $layout='login';

		public function actionIndex()
		{
			//panggil model AdminLoginSection dan ditampung oleh $model
			$model=new AdminLoginSection;

			//jika ajax maka divalidasi oleh ajax
			if (isset($_POST['ajax']) && $_POST['ajax'] === 'frmlogin') {
				//tampilkan hasil validasi form
				echo CActiveForm::validate($model);
				//end
				Yii::app()->end();
			}

			//ambil data yang diinput user
			if (isset($_POST['AdminLoginSection'])) {
				$model->attributes=$_POST['AdminLoginSection'];

				//validasi data yang diinput oleh user
				if ($model->validate() && $model->login()) {
					//redirect ke halaman yang diinginkan
					$this->redirect(array('admin/index'));
				}
			}

			//tampilkan login form
			$this->render('index',array('model'=>$model));
		}

		public function actionHome()
		{
			$this->render('/index');
		}

	}

?>