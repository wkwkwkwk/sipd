<?php

	class ExportController extends YiinigoController
	{
		
		public $layout="adminpage1";

		//untuk menampilkan data topografi
		public function actionIndex()
		{
			$topografi=Topografi::model()->findAll();
			$tahunini=date("Y");
			$this->render("index",array(
				"dataTopografi"=>$topografi,
				"tahunini"=>$tahunini
				));
		}

		//membuat function untuk export data ke excel
		public function actionToexcel($fileName)
		{
			$this -> createExcel($fileName);
			$topografi=Topografi::model()->findAll();

			//render partial ke file index dengan membawa data $topografi dan akan ditampung oleh $dataExcel
			$dataExcel=$this->renderPartial("report",array(
				"dataTopografi"=>$topografi
				));

			//echo dataExcel dan akan mendownload file excel
			echo $dataExcel;
		}
	}

?>