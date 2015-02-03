<?php

	/**
	* 
	*/
	class PolitikDaerah extends CActiveRecord
	{
		public static function model($className=__CLASS__)
			{
				return parent::model($className);
			}

			public function tableName()
			{
				return 'pdnp_jkppd';
			}
	}

?>