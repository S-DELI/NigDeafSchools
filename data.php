<?php
//Get Schools table
$table = '';
$serial = '';
if(isset($_GET['table'])){
  $table = $_GET['table'];
  If($table == 'get_schools'){
    if(isset($_GET['serial'])){
      $serial = $_GET['serial'];
    }
  } else{
    $table = '';
  }
}

// Prepare array
$mysql_data = array();

if($table != ''){
//On load request connect to db using PDO
try {
  $db_connection = new PDO('mysql:host=localhost;dbname=afriklib_deafsearch', 'afriklib_orodo2', '@orlu=orodo2018', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
} catch (Exception $e) {
  $result = 'error';
  $message = 'Failed to connect to database';
  $table = '';
};
 $db_connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//fetch school table
if($table == 'get_schools'){
  $query = 'SELECT * FROM school ORDER BY sch_id ASC';
  $query = $db_connection->prepare($query);
  $query->execute();
  if(!$query){
    $result = 'error';
    $message = 'query error';
  }else {
    $result = 'success';
    $message = 'query success';
    while($row = $query->fetch()){
      $mysql_data[] = array(
        'serial' => $row['sch_id'],
        'name' => $row['sch_name'],
        'address' => $row['sch_address'],
        'type' => $row['sch_type'],
        'ownership' => $row['sch_ownership'],
        'level' => $row['sch_level'],
        'state' => $row['sch_state'],
        'visibility' => $row['sch_visibility']
      );
    }
  }
}
}

//Prepare data
$data = array(
  "result" => $result,
  "message" => $message,
  "data" => $mysql_data
);

//Convert PHP array to JSON array
$json_data = json_encode($data);
print $json_data;

?>
