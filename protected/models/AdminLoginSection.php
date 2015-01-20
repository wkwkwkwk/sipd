<?php

	class AdminLoginSection extends CFormModel
	{
		public $username;
		public $password;
		public $rememberMe;

		private $_identity;

		//deklarasi validasi yang menyatakan username dan password harus diisi
		public function rules()
		{
			return array(
				//username dan password dibutuhkan
				array('username, password','required'),
				// untuk rememberMe dan harus sebuah boolean
				array('rememberMe', 'boolean'),
				//password akan di authentikasi
				array('password','authenticate'),
				);
		}

		//set atribut label
		public function attributeLabels() {
			return array(
				'rememberMe' => 'Remember Me',
			);
		}

		//authenticate password
		public function authenticate($attribute, $params)
		{
			//jika tidak ada error
			if (!$this->hasErrors()) {
				/*
					panggil komponen AdminLogin dengan param : username dan password
					ditampung oleh variabel _identity
				*/	
				$this->_identity=new AdminLogin($this->username, $this->password);
				//jika authenticate gagal
				if (!$this->_identity->authenticate()) {
					//pesan error
					$this->addError('password','Username dan/atau password salah.');
				}
			}
			
		}
			
		//admin login dengan meng-input username dan password
		public function login()
		{
			//jika _identity null
			if ($this -> _identity === null) {
				/*
					panggil komponen AdminLogin dengan param : username dan password
					ditampung oleh variabel _identity
				*/
				$this->_identity=new AdminLogin($this->username, $this->password);
				
				/*
					panggil fungsi authenticate() yang ada di komponen AdminLogin
					yang akan memvalidasi username dan password
				*/
				$this->_identity->authenticate();
			}

			//jika errorCode yang ada di _identity bernilai ERROR_NONE
			if ($this->_identity->errorCode === AdminLogin::ERROR_NONE) {
				//membuat remember me durasi 30 hari
				$durasi = $this -> rememberMe ? 3600 * 24 * 30 : 0;
				
				Yii::app()->user->login($this->_identity,$durasi);

				//update terakhir_masuk admin
				Login::model()->updateByPk($this->_identity->id, array(
					'terakhir_masuk'=>new CDbExpression('NOW()')));
				return true;
			} else {
				return false;
			}
		}
	}

?>