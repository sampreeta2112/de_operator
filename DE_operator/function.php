<?php
require '../includes/db_config.php';
if(isset($_REQUEST['action']) && function_exists($_REQUEST['action'])) {
  $action = $_REQUEST['action'];
  call_user_func($action);
}
function save_can(){
    global $link;
    $mysata = $_POST['myData']; 
    $id = $_POST['id']; 
    // $sql = "insert into can_backup (imageid, canvasjson, extra) values('asd','".$mysata."','asds')";
     $sql = "UPDATE can_backup SET canvasjson = '$mysata' WHERE ID = '$id'";
		$result = mysqli_query($link, $sql);
}
function get_can(){
    global $link;
    //echo 'sda';exit;
    $cans_query = 'select canvasjson,ID from can_backup';
    $result = mysqli_query($link, $cans_query);
    $i=1;
    $add ="";
    while($row = $result->fetch_assoc()){
          ;
          
        $add.= "<li class='datajson' data-json='".$row['canvasjson']."'data-id='".$row['ID']."'>Picture ".$i."</li>";
        $i++;
    }
    echo $add;
}

?>