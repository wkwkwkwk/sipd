<?php

	/**
	* 
	*/
	class IPM extends CActiveRecord
	{
		public static function model($className=__CLASS__)
			{
				return parent::model($className);
			}

			public function tableName()
			{
				return 'kesos_ipm';
			}
	}

?>