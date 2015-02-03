<?php

	/**
	* 
	*/
	class Alim extends CActiveRecord
	{
		public static function model($className=__CLASS__)
			{
				return parent::model($className);
			}

			public function tableName()
			{
				return 'sda_air_limbah';
			}
	}

?>