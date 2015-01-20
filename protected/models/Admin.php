<?php

	class Admin extends CActiveRecord
	{
		//digunakan untuk meng-enkripsi password dengan enkripsi md5
		protected function afterValidate()
		{
			parent::afterValidate();
			$this->password=$this->encrypt($this->password);
		}

		//fungsi untuk enkripsi data
		public function encrypt($val)
		{
			return md5($val);
		}

		//menyatakan model name
		public static function model($className=__CLASS__)
		{
			return parent::model($className);
		}

		//menentukan tabel yang akan digunakan
		public function tableName()
		{
			return 'admin';
		}

		public function rules()
		{
			return array(
				array('email,username,password,rule','required'),
				array('email,username,password','length','max'=>256),
				//buat minimal karakter
				array('username','length','min'=>6),
				array('password','length','min'=>6),
				array('id,email,username,password,rule,terakhir_masuk','safe','on'=>'search'),
			);
		}

		//atribut label
		public function attributeLabels()
		{
			return array(
				'id'=>'ID',
				'email'=>'Email',
				'username'=>'Username',
				'password'=>'Password',
				'rule'=>'Rule'
			);
		}

		//untuk search data
		public function search()
		{
			$criteria=new CDbCriteria;
			$criteria->compare('id',$this->id);
			$criteria->compare('email',$this->email,true);
			$criteria->compare('username',$this->username,true);
			$criteria->compare('password',$this->password,true);
			$criteria->compare('rule',$this->password,true);
			$criteria->compare('terakhir_masuk',$this->terakhir_masuk,true);

			return new CActiveDataProvider($this,
				array('criteria'=>$criteria,));
		}
	}

?>