<?php 

$data=file_get_contents('php://input');

$json=json_decode($data,true);

file_put_contents('../storage/bizinehRud/updates/'.$json['update_id'].'.json',$data);
echo "hi";
