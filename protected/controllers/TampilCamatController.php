<?php

	class TampilCamatController extends YiinigoController
	{
		public $layout="adminpage1";

		public function actionRekapCamat()
		{
			$tahunini=date("Y");
			$this->render('rekapcamat',array('tahunini'=>$tahunini));
		}
	}

?>