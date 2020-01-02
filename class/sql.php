<?php

class Sql extends PDO { 	//classe PDO é nativa do sistema, extend para herdar bindparametros .. entre outros

    private $conn;

    public function __construct(){		//Método construct é executado assim que instância a classe

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
    
    }

    private function setParams($statment, $parameters = array()){

		foreach($parameters as $key => $value){

    		$stmt->bindParam($key, $value);

    	}

    }

    private function setParam($statment, $key, $value){

    	$statment->bindParam($key, $value);

    }

    public function query($rawQuery, $params = array()){

    	$stmt = $this->conn->prepare($rawQuery);

		$this->setParams($stmt, $params); 	

		$stmt->execute();

		return $stmt;

    }


    public function select($rawQuery, $params = array()):array
    {

    	$stmt = $this->query($rawQuery, $params);

    	return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>