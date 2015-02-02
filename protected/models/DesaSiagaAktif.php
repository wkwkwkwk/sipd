<?php

	/**
	* 
	*/
	class DesaSiagaAktif extends CActiveRecord
	{
		public static function model($className=__CLASS__)
			{
				return parent::model($className);
			}

			public function tableName()
			{
				return 'kes_siagaaktif';
			}
	}

?>