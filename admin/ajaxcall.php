<?php 
 require_once 'config.php';
	$config = new Config;
	$result = $config->selectData('select * from type_drink');
 

if(isset($_POST['typeid'])){
  $typeid =$_POST['typeid'];
  $output ='';



		$result_right = $config->selectData('select * from resources where type_id = '. $typeid);
	
		foreach ($result_right as $rows_right) {
		
	$output .='<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 menu-right"> '. $rows_right['src_name'] .' </div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 menu-right">
		 '. $rows_right['src_id'] .'
	</div>
	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 menu-right">
		 '. $rows_right['unit'] .'
	</div>
	<div class="col-lg-2 col-md-3 col-sm-3 col-xs-4 menu-right">
		'.  $rows_right['buy_price'] .'
	</div>
	<div class="col-lg-3 col-md-2 col-sm-2 col-xs-4 menu-right">
		'.  $rows_right['quantity'].' 
	</div>
		


	' ;
	
		
	
	
	}
	die($output);
}

if(isset($_POST['datatable'])){

//  $array = $_POST['datatable'];

// echo $array[0]['ST'];
	$table = $_POST['datatable'];
	$ban = "ban".$_POST['ban'];
	$joindate = $_POST['joindate'];
	

	$array = array("datajoin" =>$joindate , "table"=>$table );
	json_encode($array);

setcookie($ban, serialize($array), time()+86400 );
	
echo" set thanh cong ";


}

if(isset($_POST['tableid'])){
	$tableid = $_POST['tableid'];
	if(isset($_COOKIE[$tableid])){
	$data = unserialize($_COOKIE[$tableid]);

   echo json_encode($data);
	}

}




 ?>