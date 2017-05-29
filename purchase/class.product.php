<?php

require_once '../dbconfig.php';

class Product{

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

    public function addProduct($product_type, $product_name, $gsm, $brand, $unit_type, $size1, $size2)
    {
    	try
		{							
			
			$stmt = $this->conn->prepare("INSERT INTO sol_papers(pro_type, pro_name, gsm, brand, unit_type, size1, size2) 
			                                             VALUES(:product_type, :product_name, :gsm, :brand, :unit_type, :size1, :size2)");
			$stmt->bindparam(":product_type",$product_type);
			$stmt->bindparam(":product_name",$product_name);
			$stmt->bindparam(":gsm",$gsm);
			$stmt->bindparam(":brand",$brand);
			$stmt->bindparam(":unit_type",$unit_type);
			$stmt->bindparam(":size1",$size1);
			$stmt->bindparam(":size2",$size2);
			$stmt->execute();	
			return $stmt;
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
    }
}