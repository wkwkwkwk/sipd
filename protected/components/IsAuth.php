<?php
/*class untuk mengecek auth/login
 *jika login tidak sah maka direct ke halaman lain*/
class IsAuth{
    /*untuk cek auth halaman admin*/
    public static function Admin(){
        if(isset(Yii::app()->user->wedhatama)){
            $this->redirect(array('admin/index'));
        }/* else {
            echo "gagal";
        }*/
    }
    /*untuk cek auth halaman pelanggan*/
    /*public static function Customer(){
        if(!isset(Yii::app()->user->customerLogin)){
            $this->redirect(array('account/'));
        }
    }*/
}
