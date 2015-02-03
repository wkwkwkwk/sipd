<?php

	/**
	* 
	*/
	class Jumah extends CActiveRecord
	{
		public static function model($className=__CLASS__)
			{
				return parent::model($className);
			}

			public function tableName()
			{
				return 'infra_jmlrmh';
			}
	}

?>