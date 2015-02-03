<?php

	/**
	* 
	*/
	class Turap extends CActiveRecord
	{
		public static function model($className=__CLASS__)
			{
				return parent::model($className);
			}

			public function tableName()
			{
				return 'infra_turap';
			}
	}

?>