<?php
require_once(dirname(__FILE__).'/../extensions/yiichat/YiiChatDbHandlerBase.php');
require_once(dirname(__FILE__).'/../extensions/yiichat/YiiChatWidget.php');
require_once(dirname(__FILE__).'/../extensions/yiichat/IYiiChat.php');
class ChatHandler extends YiiChatDbHandlerBase {
    //
    // IMPORTANT:
    // in any time here you can use this available methods:
    //  getData(), getIdentity(), getChatId()
    //
    protected function getDb(){
        // the application database
        return Yii::app()->db;
    }
    protected function createPostUniqueId(){
        // generates a unique id. 40 char.
        return hash('sha1',$this->getChatId().time().rand(1000,9999));      
    }
    protected function getIdentityName(){
        // find the identity name here
        // example: 
        //  $model = MyPeople::model()->findByPk($this->getIdentity());
        //  return $model->userFullName();
        $pilihuser=Yii::app()->user->username/*"kalimanah"*/;
        return "$pilihuser"; 
    }
    protected function getDateFormatted($value){
        // format the date numeric $value
        //return Yii::app()->format->formatDateTime($value);
        $value=date("d-m-Y H:m:s A");
        $pecah=explode(" ", $value);
        $tanggal=explode("-", $pecah[0]);
        switch ($tanggal[1]) {
            case "01":
                $tanggal[1] = "January";
                break;
            case "02":
                $tanggal[1] = "Febuari";
                break;
            case "03":
                $tanggal[1] = "Maret";
                break;
            case "04":
                $tanggal[1] = "April";
                break;
            case "05":
                $tanggal[1] = "Mei";
                break;
            case "06":
                $tanggal[1] = "Juni";
                break;
            case "07":
                $tanggal[1] = "Juli";
                break;
            case "08":
                $tanggal[1] = "Agustus";
                break;
            case "09":
                $tanggal[1] = "September";
                break;
            case "10":
                $tanggal[1] = "Oktober";
                break;
            case "11":
                $tanggal[1] = "November";
                break;
            case "12":
                $tanggal[1] = "Desember";
                break;
        }
        $tampil = "$tanggal[0] $tanggal[1], $tanggal[2] - $pecah[1] $pecah[2]";
        return $tampil;
    }
    protected function acceptMessage($message){
        // return true for accept this message. false reject it.
        return $message;
    }
}
?>