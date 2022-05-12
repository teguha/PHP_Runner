<?php
$dalTabledetail_training = array();
$dalTabledetail_training["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabledetail_training["materi"] = array("type"=>200,"varname"=>"materi", "name" => "materi", "autoInc" => "0");
$dalTabledetail_training["tanggal"] = array("type"=>7,"varname"=>"tanggal", "name" => "tanggal", "autoInc" => "0");
$dalTabledetail_training["training"] = array("type"=>3,"varname"=>"training", "name" => "training", "autoInc" => "0");
$dalTabledetail_training["id"]["key"]=true;

$dal_info["tte_at_localhost__detail_training"] = &$dalTabledetail_training;
?>