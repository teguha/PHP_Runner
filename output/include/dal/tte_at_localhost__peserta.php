<?php
$dalTablepeserta = array();
$dalTablepeserta["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablepeserta["nama"] = array("type"=>200,"varname"=>"nama", "name" => "nama", "autoInc" => "0");
$dalTablepeserta["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablepeserta["status"] = array("type"=>3,"varname"=>"status", "name" => "status", "autoInc" => "0");
$dalTablepeserta["training_id"] = array("type"=>3,"varname"=>"training_id", "name" => "training_id", "autoInc" => "0");
$dalTablepeserta["id"]["key"]=true;

$dal_info["tte_at_localhost__peserta"] = &$dalTablepeserta;
?>