<?php
$dalTablepenandatangan = array();
$dalTablepenandatangan["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablepenandatangan["nama"] = array("type"=>200,"varname"=>"nama", "name" => "nama", "autoInc" => "0");
$dalTablepenandatangan["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablepenandatangan["id"]["key"]=true;

$dal_info["tte_at_localhost__penandatangan"] = &$dalTablepenandatangan;
?>