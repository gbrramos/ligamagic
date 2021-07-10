<?php
include_once('connection.php');

$result = mysqli_query($conn,"SELECT * FROM produto");
foreach($result as $r){
    echo json_encode($r);
}
