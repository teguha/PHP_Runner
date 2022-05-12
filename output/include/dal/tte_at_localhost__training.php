<?php
$dalTabletraining = array();
$dalTabletraining["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletraining["nama"] = array("type"=>200,"varname"=>"nama", "name" => "nama", "autoInc" => "0");
$dalTabletraining["mulai"] = array("type"=>7,"varname"=>"mulai", "name" => "mulai", "autoInc" => "0");
$dalTabletraining["selesai"] = array("type"=>7,"varname"=>"selesai", "name" => "selesai", "autoInc" => "0");
$dalTabletraining["pengajar"] = array("type"=>200,"varname"=>"pengajar", "name" => "pengajar", "autoInc" => "0");
$dalTabletraining["lembaga_id"] = array("type"=>3,"varname"=>"lembaga_id", "name" => "lembaga_id", "autoInc" => "0");
$dalTabletraining["id"]["key"]=true;

$dal_info["tte_at_localhost__training"] = &$dalTabletraining;
?>