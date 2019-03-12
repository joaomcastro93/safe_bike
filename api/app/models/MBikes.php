<?php


namespace App\Models;


use App\Core\MVC\Model;

class MBikes extends Model{
	
function GetBikes(){
	$db=database();
    $data = array();

    $sql = "select * from bikes";
	$row = $db->prepare($sql);
	$row->execute();
	while($item = $row->fetch(\PDO::FETCH_OBJ)){
		
		$obj = (Object)[
				"id"=>$item->bike_id,
				"brand"=>$item->brand,
				"model"=>$item->model
				];
		
		array_push($data,$obj);	
		
	}
$bikes["Bikes"] = $data;
	echo json_encode($bikes);	
	
}

}
 