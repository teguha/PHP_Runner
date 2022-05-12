<?php

$tdataGLOBAL = array();


$tdataGLOBAL[".pagesByType"] = my_json_decode( "{\"login\":[\"login\"],\"menu\":[\"menu\"],\"register\":[\"register\"],\"register_success\":[\"register_success\"],\"userinfo\":[\"userinfo\"]}" );
$tdataGLOBAL[".originalPagesByType"] = $tdataGLOBAL[".pagesByType"];
$tdataGLOBAL[".pages"] = types2pages( my_json_decode( "{\"login\":[\"login\"],\"menu\":[\"menu\"],\"register\":[\"register\"],\"register_success\":[\"register_success\"],\"userinfo\":[\"userinfo\"]}" ) );
$tdataGLOBAL[".originalPages"] = $tdataGLOBAL[".pages"];
$tdataGLOBAL[".defaultPages"] = my_json_decode( "{\"login\":\"login\",\"menu\":\"menu\",\"register\":\"register\",\"register_success\":\"register_success\",\"userinfo\":\"userinfo\"}" );
$tdataGLOBAL[".originalDefaultPages"] = $tdataGLOBAL[".defaultPages"];

$tables_data["<global>"] =& $tdataGLOBAL;


$detailsTablesData["<global>"] = array();
$masterTablesData["<global>"] = array();

?>