<?php

	/**
	* 
	*/
	class KasusCuriKayu extends CActiveRecord
	{
		public static function model($className=__CLASS__)
			{
				return parent::model($className);
			}

			public function tableName()
			{
				return 'ppk_jk';
			}
	}

?>