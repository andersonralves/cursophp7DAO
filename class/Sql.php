<?php

class Sql extends PDO
{
	private $conn;

	public function __construct()
	{
		$this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", 'udemy_user', 'udemy123');
	}

	private function setParams($statement, $parameters = array())
	{
		foreach($parameters as $key => $value) {

			$this->setParam($key, $value);

		}
	}

	private function setParam($statement, $key, $value)
	{
		$statement->bindParam($key, $value);
	}

	public function query($rowQuery, $params = array())
	{
		$stmt = $this->conn->prepare($rowQuery);

		$this->setParams($stmt, $params);

		$stmt->execute();

		return $stmt;
	}

	public function select($rowQuery, $params = array()):array
	{
		$stmt = $this->query($rowQuery, $params);

		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $results;
	}
}