<?php

	/**
	* 
	*/
	class Pmukiman extends CActiveRecord
	{
		public static function model($className=__CLASS__)
			{
				return parent::model($className);
			}

			public function tableName()
			{
				return 'infra_arealmukim';
			}
	}

?>