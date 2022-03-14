<!--databasetable connection-->
<?php
class DatabaseTable{//class database 
    public $table;//link to the database table
    function __construct($table){//construct the table
        $this->table = $table; 
    }

    function save($record, $pk = ''){//save the record
    try{
        $this->insert($record);//insert the value
    }
    catch(Exception $e){
        $this->update($record, $pk);//update the value
    }
}

//function insert
function insert($record) {
    global $pdo;//global variable
    $keys = array_keys($record);//array 

    $values = implode(', ', $keys);//implode the value
    $valuesWithColon = implode(', :', $keys);//implode the value

    $query = 'INSERT INTO ' . $this->table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';//insert the value

    $stmt = $pdo->prepare($query);//prepare the query

    $stmt->execute($record);//execute the record
}

//update the record
function update($record, $pk) {//update the record
    global $pdo;
    $parameters = [];//paraeter passed as array
    foreach($record as $key => $value){//for each loop
        $parameters[] = $key. '= :' .$key;//passed parameter
    }
    $parametersWithComma = implode(',', $parameters);//implode the value
    $query = "UPDATE $this->table SET $parametersWithComma WHERE $pk =:pk";//update the table
    $record['pk'] = $record[$pk];//insert the pk
    $stmt = $pdo->prepare($query);//prepare the value
    $stmt->execute($record);//execute the record
}

//find function
function find($field, $value) {//passed as array
    global $pdo;
        $stmt = $pdo->prepare('SELECT * FROM ' . $this->table .' WHERE ' . $field . ' = :valu');//prepare the value
        $criteria = [
                'valu' => $value//passed as criteria
        ];
        $stmt->execute($criteria);//execute the criteria

        return $stmt;
}

//findAll function
function findAll() {
    global $pdo;
        $stmt = $pdo->prepare('SELECT * FROM ' . $this->table);//selects the value

        $stmt->execute();//execute the value

        return $stmt;
}

function handlingChat($mes_to,$mes_by){
    global $pdo;
    $stmt = $pdo->prepare('UPDATE messages SET message_to="'.$mes_to.'" WHERE message_by="'.$mes_by.'";');
    $stmt->execute();
    return $stmt;
}

function gettingChat($person1,$person2){
    global $pdo;
    $stmt = $pdo->prepare('SELECT *, DATE_FORMAT(time, "%r") as time12, DATE_FORMAT(time, "%M %e") as montday, date(time) as jdate FROM messages WHERE message_to="'.$person1.'" AND message_by="'.$person2.'"OR message_to="'.$person2.'" AND message_by="'.$person1.'"');
    $stmt->execute();
    return $stmt;
}

function updateHitPoint($id){
    global $pdo;
    $stmt = $pdo->prepare('UPDATE vehiclecategory SET hitcount = hitcount + 1 WHERE vehicleId ='.$id.';');
    $stmt->execute();
    return $stmt;
}
//function delete
function delete($field, $value) {//passed as array
    global $pdo;
        $stmt = $pdo->prepare('DELETE FROM ' . $this->table . ' WHERE ' . $field . ' = :pk');//delete the value
        $criteria = [
                'pk' => $value//criteria passed
        ];
        $stmt->execute($criteria);//executes the criteria

        return $stmt;
}

function findAllVec(){
     global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM '.$this->table.' JOIN type ON vehicle.modelID = type.modelID INNER JOIN vehiclecategory ON vehicle.vehicleID=vehiclecategory.vehicleID;');
    $stmt->execute();
    return $stmt;

}

function findVec($val){
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM `vehicle` JOIN type ON vehicle.modelID = type.modelID JOIN users ON users.userID = vehicle.userID JOIN vehiclecategory ON vehicle.vehicleID = vehiclecategory.vehicleID JOIN manufacturer ON type.brandID=manufacturer.brandID WHERE vehicle.vehicleID='.$val.';');
    $stmt->execute();
    return $stmt;
}

function findapprovalVec($val){
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM `vehicle` JOIN type ON vehicle.modelID = type.modelID JOIN manufacturer ON type.brandID=manufacturer.brandID WHERE vehicleID='.$val.';');
    $stmt->execute();
    return $stmt;
}

function orderOn($parameter,$limit){
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM '.$this->table.' JOIN type ON vehicle.modelID = type.modelID INNER JOIN vehiclecategory ON vehicle.vehicleID=vehiclecategory.vehicleID ORDER BY '.$parameter.' DESC LIMIT '.$limit.';');
    $stmt->execute();
    return $stmt;
}

function orderOnVehicleType($parameter,$limit){
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM '.$this->table.' JOIN type ON vehicle.modelID = type.modelID JOIN vehiclecategory ON vehicle.vehicleID = vehiclecategory.vehicleID WHERE type.vehicleType="'.$parameter.'" ORDER BY vehiclecategory.hitcount DESC LIMIT '.$limit.';');
    $stmt->execute();
    return $stmt;
}

function orderOnPremium(){
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM '.$this->table.' JOIN type ON vehicle.modelID = type.modelID JOIN vehiclecategory ON vehicle.vehicleID = vehiclecategory.vehicleID WHERE vehiclecategory.category="premium";');
    $stmt->execute();
    return $stmt;
}

function findApprovals(){
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM '.$this->table.' JOIN type ON vehicle.modelID=type.modelID JOIN manufacturer ON type.brandID=manufacturer.brandID WHERE uploadStatus = 0; ');
    $stmt->execute();
    return $stmt;
}

function searchResults($input){
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM vehicle JOIN type ON vehicle.modelID = type.modelID INNER JOIN vehiclecategory ON vehicle.vehicleID=vehiclecategory.vehicleID JOIN manufacturer ON type.brandID=manufacturer.brandID WHERE (manufacturer.brandName LIKE "%'.$input.'%") OR (type.modelName LIKE "%'.$input.'%") OR (vehicle.modelYear LIKE "%'.$input.'%");');
    $stmt->execute();
    return $stmt;
}

function filterResults($minprice, $maxprice,$mindist, $maxdist,$cc,$minyear,$maxyear,$brand,$model){
    global $pdo;
    $stmt = $pdo->prepare('SELECT * FROM vehicle JOIN type ON vehicle.modelID = type.modelID INNER JOIN vehiclecategory ON vehicle.vehicleID=vehiclecategory.vehicleID JOIN manufacturer ON type.brandID=manufacturer.brandID WHERE (vehicle.price BETWEEN '.$minprice.' AND '.$maxprice.') OR (vehicle.distanceTravelled BETWEEN '.$mindist.' AND '.$maxdist.') OR (type.cubicCapacity BETWEEN '.$cc.') OR (vehicle.modelYear BETWEEN '.$minyear.' AND '.$maxyear.') OR (manufacturer.brandName LIKE "%'.$brand.'%") OR (type.modelName LIKE "%'.$model.'%")');
    $stmt->execute();
    return $stmt;
}

function getlastVal($field) {//passed as array
    global $pdo;
        $stmt = $pdo->prepare('SELECT MAX('.$field.') FROM '.$this->table);
        $stmt->execute();//execute the criteria
        return $stmt;
}

function brandmodel() {
    global $pdo;
        $stmt = $pdo->prepare('SELECT manufacturer.brandName, type.modelName, type.modelID, type.brandID FROM manufacturer INNER JOIN type ON manufacturer.brandID=type.brandID; ');
        $stmt->execute();

        return $stmt;
}

}
?>