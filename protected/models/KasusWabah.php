<?php

	/**
	* 
	*/
	class KasusWabah extends CActiveRecord
	{
		public static function model($className=__CLASS__)
			{
				return parent::model($className);
			}

			public function tableName()
			{
				return 'pm_jkw';
			}
	}

?>