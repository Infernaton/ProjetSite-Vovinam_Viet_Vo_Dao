<?php
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

    //region masters
    public function getAllMasters(){
        $req = $this->_bdd->prepare('SELECT * FROM specialist ORDER BY id');
        return $this->executeAndClose($req);
    }
    public function getAllMastersNameNotDead(){
        $req = $this->_bdd->prepare('SELECT name FROM specialist WHERE deathDate like "---"');
        return $this->executeAndClose($req);
    }
    public function getAllMasterTypes(){
        $req = $this->_bdd->prepare('SELECT DISTINCT hierarchy FROM specialist');
        return $this->executeAndClose($req);
    }
    public function getDataMaster($id){
        $req = $this->_bdd->prepare('SELECT * FROM specialist as s WHERE s.id = :id ');
        return $this->executeAndCloseWithArray($req, ["id"=>$id])[0];
    }
    public function getDataMasterByName($name){
        $req = $this->_bdd->prepare('SELECT id FROM specialist WHERE name like %:name%');
        return $this->executeAndCloseWithArray($req, ["name"=>$name])[0];
    }
    //endregion
    //region clubs
    public function getAllClubs(){
        $req = $this->_bdd->prepare('SELECT * FROM marqueur ORDER BY id');
        return $this->executeAndClose($req);
    }
    public function getAllComite(){
        $req = $this->_bdd->prepare('SELECT * FROM marqueur WHERE club_comite LIKE "comite" ORDER BY id');
        return $this->executeAndClose($req);
    }
    public function getDataClub($id){
        $req = $this->_bdd->prepare('SELECT * FROM marqueur as m WHERE m.id = :id ');
        return $this->executeAndCloseWithArray($req, ["id"=>$id])[0];
    }
    public function getDataComiteByName($name){
        $req = $this->_bdd->prepare('SELECT * FROM marqueur WHERE titre like :title');
        return $this->executeAndCloseWithArray($req, ["title"=>$name])[0];
    }
    //endregion
    //region events
    public function getAllEvents(){
        $req = $this->_bdd->prepare('SELECT * FROM event Order by `dateDebut` DESC');
        return $this->executeAndClose($req);
    }
    public function getAllEventTypes(){
        $req = $this->_bdd->prepare('SELECT DISTINCT type FROM event');
        return $this->executeAndClose($req);
    }
    public function getDataEvent($id){
        $req = $this->_bdd->prepare('SELECT * FROM event as e WHERE e.id = :id');
        return $this->executeAndCloseWithArray($req, ["id"=>$id])[0];
    }
    //endregion
    //region news
    public function getAllNews(){
        $req = $this->_bdd->prepare('SELECT * FROM news ORDER BY date DESC');
        return $this->executeAndClose($req);
    }
    public function countAllNews(){
        $req = $this->_bdd->prepare('SELECT COUNT(*) FROM news');
        return $this->executeAndClose($req);
    }
    //endregion
    //region organism
    public function getAllOrganism(){
        $req = $this->_bdd->prepare('SELECT * FROM organisation ORDER BY id');
        return $this->executeAndClose($req);
    }
    public function getAllAffectation(){
        $req = $this->_bdd->prepare('SELECT DISTINCT affectation FROM organisation ORDER BY id');
        return $this->executeAndClose($req);
    }
    public function getHigherIdFromOrganism(){
        $req = $this->_bdd->prepare('SELECT id, role FROM organisation ORDER BY id DESC');
        return $this->executeAndClose($req)[0];
    }
    //endregion

}


?>