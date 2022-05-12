<?php
$dalTablelembaga = array();
$dalTablelembaga["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablelembaga["nama"] = array("type"=>200,"varname"=>"nama", "name" => "nama", "autoInc" => "0");
$dalTablelembaga["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablelembaga["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTablelembaga["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablelembaga["id"]["key"]=true;

$dal_info["tte_at_localhost__lembaga"] = &$dalTablelembaga;
?>