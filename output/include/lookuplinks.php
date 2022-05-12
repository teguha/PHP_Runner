<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["training"] ) ) {
			$lookupTableLinks["training"] = array();
		}
		if( !isset( $lookupTableLinks["training"]["peserta.training_id"] )) {
			$lookupTableLinks["training"]["peserta.training_id"] = array();
		}
		$lookupTableLinks["training"]["peserta.training_id"]["edit"] = array("table" => "peserta", "field" => "training_id", "page" => "edit");
		if( !isset( $lookupTableLinks["lembaga"] ) ) {
			$lookupTableLinks["lembaga"] = array();
		}
		if( !isset( $lookupTableLinks["lembaga"]["training.lembaga_id"] )) {
			$lookupTableLinks["lembaga"]["training.lembaga_id"] = array();
		}
		$lookupTableLinks["lembaga"]["training.lembaga_id"]["edit"] = array("table" => "training", "field" => "lembaga_id", "page" => "edit");
		if( !isset( $lookupTableLinks["training"] ) ) {
			$lookupTableLinks["training"] = array();
		}
		if( !isset( $lookupTableLinks["training"]["detail_training.training"] )) {
			$lookupTableLinks["training"]["detail_training.training"] = array();
		}
		$lookupTableLinks["training"]["detail_training.training"]["edit"] = array("table" => "detail_training", "field" => "training", "page" => "edit");
}

?>