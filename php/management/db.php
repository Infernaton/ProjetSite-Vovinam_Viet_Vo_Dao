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

    private function executeAndClose($stmt){
        $stmt->execute();

        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }
    private function executeAndCloseWithArray($stmt, $values){
        $stmt->execute($values);

        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }

    public function getAllNews(){
        $req = $this->_bdd->prepare('SELECT * FROM news ORDER BY id DESC');
        return $this->executeAndClose($req);
    }
    public function getAllEvent(){
        $req = $this->_bdd->prepare('SELECT DISTINCT type FROM event');
        return $this->executeAndClose($req);
    }
    public function sortAllEvent($selectedYear, $someFilter){
        if (count($someFilter)>0){
            $allFilter = 'WHERE (';
            for ($i=0; $i< count($someFilter); $i++){
                $allFilter .= $someFilter[$i];
                if (isset($someFilter[$i+1])){
                    if (explode(" ",$someFilter[$i])[0] == explode(" ",$someFilter[$i+1])[0]){
                        $allFilter .= ' OR ';
                    }else {
                        $allFilter .= ') AND (';
                    }
                }
            }
            $allFilter .= ')';
        }else {
            $allFilter = 'WHERE dateDebut like "'.$selectedYear.'%"';
        }
        $req = $this->_bdd->prepare('SELECT * FROM event '.$allFilter.' Order by `dateDebut` DESC');
        return $this->executeAndClose($req);
    }
    public function getAllMasterByHierarchy($hierarchy){
        $req = $this->_bdd->prepare('SELECT * FROM specialist WHERE hierarchy LIKE :hierarachy ORDER BY id');
        return $this->executeAndCloseWithArray($req, [":hierarachy"=>$hierarchy]);
    }
    public function getMasterById($idMaster){
        $req = $this->_bdd->prepare('SELECT * FROM specialist WHERE id= :id');
        return $this->executeAndCloseWithArray($req, [":id"=>$idMaster]);
    }
    public function getPresCouncil(){
        $req = $this->_bdd->prepare(
            'SELECT * FROM specialist as S
            LEFT JOIN organisation as O on S.id = O.id_master
            WHERE O.role LIKE "%Président du Conseil%"');
        return $this->executeAndClose($req)[0];
    }
    public function getOrganigramme(){
        $req = $this->_bdd->prepare(
            'SELECT role, affectation, mail,
                IF (O.id_master = 0, O.info, S.name) as `name`,
                IF (O.id_master = 0, NULL, S.pictureProfile) as picture
            FROM organisation as O
            LEFT JOIN specialist as S on S.id = O.id_master
            ORDER BY O.id');
        return $this->executeAndClose($req);
    }
    public function getClubForMap(){
        $req = $this->_bdd->prepare('SELECT * FROM club');
        return $this->executeAndClose($req);
    }
    public function getComiteForMap(){
        $req = $this->_bdd->prepare(
            'SELECT C.id, C.nomComite, C.link, C.coordonee, 
                IF(O.id_master = 0, O.info, S.name) as president, O.mail as mail_pres,
                IF(O_bis.id_master = 0, O_bis.info, S_bis.name) as repTechnique, O_bis.mail as mail_rt

            FROM comite as C
            LEFT JOIN organisation AS O ON O.id = C.idPresident
            LEFT JOIN specialist as S on S.id = O.id_master
            LEFT JOIN organisation AS O_bis ON O_bis.id = C.idRepTech 
            LEFT JOIN specialist as S_bis on S_bis.id = O_bis.id_master');
        return $this->executeAndClose($req);
    }
}