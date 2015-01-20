<?php

	class AdminController extends Controller
	{
		
		public $layout='adminpage1';
		
		public function actionIndex()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
				$this->render('index');
			}
		}

		public function actionSubDataUmum()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
		    	$sql = "SELECT*FROM geo_luas_wil";
				$connection = Yii::app()->db;
				$command = $connection->createCommand($sql);
				$results = $command->queryAll();
				$this->render('subdataumum', array(
					'dataProvider' => $results)
				);
			}
		}

		public function actionSubEkonomi()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
				$this->render('subekonomi');
			}
		}

		public function actionSubKeamanan()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
				$this->render('subkeamanan');
			}
		}

		public function actionTampilkanData()
		{
			if(Yii::app()->user->isGuest){
		        $this->redirect(array('/login'));
		    } else {
				$this->render('tampilkandata');
			}
		}

		public function actionSimpan()
		{
			if ($_POST) {
				//ambil dat adari masing-masing atribut
				$datar=$_POST['datar'];
				$bergelombang=$_POST['bergelombang'];
				$curam=$_POST['curam'];
				$sgtcuram=$_POST['sgtcuram'];
				$tinggidpl=$_POST['tinggidpl'];

				//query simpan data
				$sql2="INSERT INTO geo_topografi(datar,bergelombang,curam,sgtcuram,tinggidpl)
				VALUES('$datar','$bergelombang','$curam','$sgtcuram','$tinggidpl')";
				$conn=Yii::app()->db;

				//eksekusi query simpan data
				$command=$conn->createCommand($sql2);

				//eksekusi query atau non-query
				$command->execute();
				$this->redirect(array(
					'subdataumum'));
			}
		}

		//logout dan di redirect ke halaman awal
		public function actionLogout()
		{
			Yii::app()->user->logout();
			$this->redirect(array('/'));
		}
	}

?>