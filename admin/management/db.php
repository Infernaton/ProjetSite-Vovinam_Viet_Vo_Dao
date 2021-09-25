<?php
/*
try {
    $db = new PDO('mysql:host=localhost;dbname=vietvodao;port=3306;charset=utf8',"root", "");
}
catch (Exception $e){
    die('Erreur MySQL, veuillez patienter ou contactez un administrateur. <br /><br />' . $e->getMessage());
}*/

class Db{
    private static $_instance = null;

    private $_baseType;
    private $_baseName;
    private $_address;
    private $_user;
    private $_password;
    private $_bdd;
    private $_isConnected;

    public function __construct($baseType, $baseName, $address, $user, $password){
        $this->_baseType=$baseType;
        $this->_baseName=$baseName;
        $this->_address=$address;
        $this->_user=$user;
        $this->_password=$password;
        $this->_isConnected = $this->connectToMyBdd();
    }

    private function connectToMyBdd(){
        try {
            if($this->_bdd === null){
                try {
                    $this->_bdd = new PDO($this->_baseType . ':dbname='. $this->_baseName.';host='.$this->_address, $this->_user, $this->_password);
                    //echo '<p>connecter à <strong>'.$this->_baseName.'</strong></p>';
                    $this->_bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                    $this->_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->_bdd->setAttribute(PDO::MYSQL_ATTR_FOUND_ROWS, true);
                    $this->_bdd->query("SET lc_time_names = 'fr_FR'");
                    $this->_bdd->query("SET NAMES UTF8");
                    return true;
                }
                catch (Exception $e) {
                    return false;
                }
            }
        } catch (PDOException $e) {
            return false;
        }
    }

    public static function getInstance($baseType, $baseName, $address, $user, $password) {
        if(is_null(self::$_instance)) {
            self::$_instance = new Db($baseType, $baseName, $address, $user, $password);
        }
        else if(!self::$_instance->getIsBddConnect()){
            self::$_instance = new Db($baseType, $baseName, $address, $user, $password);
        }
        return self::$_instance;
    }
    public static function getCurrentInstance() {
        return self::$_instance;
    }

    public function getIsBddConnect(){
        return $this->_isConnected;
    }

}


?>