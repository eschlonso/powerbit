<?php
include("db.php");
try
{
	//Open database connection
	
	//global $host,$user,$password,$dbname;
	$con = mysql_connect($host,$user,$password);
	mysql_select_db($dbname, $con);

	//Getting records (listAction)
	if($_GET["action"] == "list")
	{
		//Get record count
		$result = mysql_query("SELECT COUNT(*) AS RecordCount FROM finanzas_gastos WHERE op=2 ;");
		$row = mysql_fetch_array($result);
		$recordCount = $row['RecordCount'];

		//Get records from database
		$result = mysql_query("SELECT * FROM finanzas_gastos WHERE op=2 ORDER BY " . $_GET["jtSorting"] . " LIMIT " . $_GET["jtStartIndex"] . "," . $_GET["jtPageSize"] . ";");
		
		//Add all records to an array
		$rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['TotalRecordCount'] = $recordCount;
		$jTableResult['Records'] = $rows;
		print json_encode($jTableResult);
	}
	//Creating a new record (createAction)
	else if($_GET["action"] == "create")
	{
		//Insert record into database
		$result = mysql_query("INSERT INTO finanzas_gastos(descripcion, saldo, fecha,op,categoria) VALUES('" . $_POST["descripcion"] . "', " . $_POST["saldo"] . ",'".$_POST["fecha"]. "',2,". $_POST["categoria"] .");");
		
		//Get last inserted record (to return to jTable)
		$result = mysql_query("SELECT * FROM finanzas_gastos WHERE op=2 AND id = LAST_INSERT_ID();");
		$row = mysql_fetch_array($result);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);
	}
	//Updating a record (updateAction)
	else if($_GET["action"] == "update")
	{
		//Update record in database
		$result = mysql_query("UPDATE finanzas_gastos SET descripcion = '" . $_POST["descripcion"] . "', saldo = " . $_POST["saldo"] . ", fecha = '".$_POST["fecha"]. "' , categoria = '".$_POST["categoria"]. "' WHERE id = " . $_POST["id"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
		//Delete from database
		$result = mysql_query("DELETE FROM finanzas_gastos WHERE id = " . $_POST["id"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}

	//Close database connection
	mysql_close($con);

}
catch(Exception $ex)
{
    //Return error message
	$jTableResult = array();
	$jTableResult['Result'] = "ERROR";
	$jTableResult['Message'] = $ex->getMessage();
	print json_encode($jTableResult);
}
	
?>