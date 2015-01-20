<?php

	/*
		digunakan untuk mendata user yang login
		class ini meng-extends CUserIdentity yang telah disediakan yii
	*/
		
	class AdminLogin extends CUserIdentity
	{
		private $_id;
		//authenticate user dengan user model (Login.php)
		public function authenticate()
		{
			//cari data dengan atribut username menggunakan model Login
			$user=Login::model()->findByAttributes(
				array(
					'username'=>$this->username));

			/*$pass=Login::model()->findByAttributes(
				array(
					'password'=>$this->password));*/
			//jika user hasilnya null maka beri pesan error invalid username
			if($user===null){
				$this->errorCode=self::ERROR_USERNAME_INVALID;
				//else jika tidak null
			}/*else if (($user===null) && ($pass===null)) {
				$this->addError('password','Username dan Password tidak boleh kosong.');
			}*/else{
				//cek jika password yang ada didalam database tidak sama dengan password yang di enkripsi
				if($user->password!==$user->encrypt($this->password)){
					//beri pesan error invalid password
					$this->errorCode=self::ERROR_PASSWORD_INVALID;
				}else{
					//jika password yang dienkripsi sama dengan yang ada di database
					//ambil data user id dan ditampung dalam variabel $_id
					$this->_id=$user->id;

					//set state username agar dapat ditampilkan sebagai data user yang login
					$this->setState('username',$user->username);

					//beri error none pada variabel errorCode
					$this->errorCode=self::ERROR_NONE;
				}
			}
			
			//kembalikan bukan error code
			return !$this -> errorCode;	//ini skrip aslinya
			//return $this -> errorCode;
		}

		//untuk mendapatkan user id yang login, agar dapat ditampilkan sebagai user id yang login
		public function getId()
		{
			return $this->_id;
		}
	}

?>