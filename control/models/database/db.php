<?php 

$config = [
	'username' => 'root',
	'password' => '',
	'database' => 'map'	
];

function connect($config)
{
	try{
    		$conn = new PDO('mysql:host=localhost;dbname=school;charset=utf8','root','',[
        		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    		]);
		return $conn;
    }catch(Exception $pe){
        return false;
} 
}// !end connect();

function query($query, $bindings, $conn)
{
	$stmt = $conn->prepare($query);
	$stmt->execute($bindings);

	return ($stmt->rowCount() > 0) ? $stmt : false ;
}

function get($tableName, $conn, $limit = 10)
{
	try{
	$result =  $conn->query("select * from $tableName order by id DESC limit $limit");
	
	return ( $result->rowCount() > 0 ) 
	? $result
	: false;
	}
	catch(Exception $e){
		return false;
	}
}

function get_my($tableName, $conn){
	try{
	$result =  $conn->query("select * from $tableName");
	
	return ( $result->rowCount() > 0 ) 
	? $result
	: false;
	}
	catch(Exception $e){
		return false;
	}
}

function get_by_id($table_name, $id, $conn)
{
	 $query = query("select * from $table_name where id = :id", ['id' => $id], $conn);

	if ( $query ) return $query->fetchAll();
}

function get_byId($id, $conn){
	$query = query("select * from posts where id = :id", ['id' => $id], $conn);

	if ( $query ) return $query->fetchAll();	
}
