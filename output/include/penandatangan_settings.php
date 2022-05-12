<?php
$tdatapenandatangan = array();
$tdatapenandatangan[".searchableFields"] = array();
$tdatapenandatangan[".ShortName"] = "penandatangan";
$tdatapenandatangan[".OwnerID"] = "";
$tdatapenandatangan[".OriginalTable"] = "penandatangan";


$tdatapenandatangan[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapenandatangan[".originalPagesByType"] = $tdatapenandatangan[".pagesByType"];
$tdatapenandatangan[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapenandatangan[".originalPages"] = $tdatapenandatangan[".pages"];
$tdatapenandatangan[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapenandatangan[".originalDefaultPages"] = $tdatapenandatangan[".defaultPages"];

//	field labels
$fieldLabelspenandatangan = array();
$fieldToolTipspenandatangan = array();
$pageTitlespenandatangan = array();
$placeHolderspenandatangan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspenandatangan["English"] = array();
	$fieldToolTipspenandatangan["English"] = array();
	$placeHolderspenandatangan["English"] = array();
	$pageTitlespenandatangan["English"] = array();
	$fieldLabelspenandatangan["English"]["id"] = "Id";
	$fieldToolTipspenandatangan["English"]["id"] = "";
	$placeHolderspenandatangan["English"]["id"] = "";
	$fieldLabelspenandatangan["English"]["nama"] = "Nama";
	$fieldToolTipspenandatangan["English"]["nama"] = "";
	$placeHolderspenandatangan["English"]["nama"] = "";
	$fieldLabelspenandatangan["English"]["email"] = "Email";
	$fieldToolTipspenandatangan["English"]["email"] = "";
	$placeHolderspenandatangan["English"]["email"] = "";
	if (count($fieldToolTipspenandatangan["English"]))
		$tdatapenandatangan[".isUseToolTips"] = true;
}


	$tdatapenandatangan[".NCSearch"] = true;



$tdatapenandatangan[".shortTableName"] = "penandatangan";
$tdatapenandatangan[".nSecOptions"] = 0;

$tdatapenandatangan[".mainTableOwnerID"] = "";
$tdatapenandatangan[".entityType"] = 0;
$tdatapenandatangan[".connId"] = "tte_at_localhost";


$tdatapenandatangan[".strOriginalTableName"] = "penandatangan";

	



$tdatapenandatangan[".showAddInPopup"] = false;

$tdatapenandatangan[".showEditInPopup"] = false;

$tdatapenandatangan[".showViewInPopup"] = false;

$tdatapenandatangan[".listAjax"] = false;
//	temporary
//$tdatapenandatangan[".listAjax"] = false;

	$tdatapenandatangan[".audit"] = false;

	$tdatapenandatangan[".locking"] = false;


$pages = $tdatapenandatangan[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapenandatangan[".edit"] = true;
	$tdatapenandatangan[".afterEditAction"] = 1;
	$tdatapenandatangan[".closePopupAfterEdit"] = 1;
	$tdatapenandatangan[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapenandatangan[".add"] = true;
$tdatapenandatangan[".afterAddAction"] = 1;
$tdatapenandatangan[".closePopupAfterAdd"] = 1;
$tdatapenandatangan[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapenandatangan[".list"] = true;
}



$tdatapenandatangan[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapenandatangan[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapenandatangan[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapenandatangan[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapenandatangan[".printFriendly"] = true;
}



$tdatapenandatangan[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapenandatangan[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapenandatangan[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapenandatangan[".isUseAjaxSuggest"] = true;

$tdatapenandatangan[".rowHighlite"] = true;





$tdatapenandatangan[".ajaxCodeSnippetAdded"] = false;

$tdatapenandatangan[".buttonsAdded"] = false;

$tdatapenandatangan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapenandatangan[".isUseTimeForSearch"] = false;


$tdatapenandatangan[".badgeColor"] = "DC143C";


$tdatapenandatangan[".allSearchFields"] = array();
$tdatapenandatangan[".filterFields"] = array();
$tdatapenandatangan[".requiredSearchFields"] = array();

$tdatapenandatangan[".googleLikeFields"] = array();
$tdatapenandatangan[".googleLikeFields"][] = "id";
$tdatapenandatangan[".googleLikeFields"][] = "nama";
$tdatapenandatangan[".googleLikeFields"][] = "email";



$tdatapenandatangan[".tableType"] = "list";

$tdatapenandatangan[".printerPageOrientation"] = 0;
$tdatapenandatangan[".nPrinterPageScale"] = 100;

$tdatapenandatangan[".nPrinterSplitRecords"] = 40;

$tdatapenandatangan[".geocodingEnabled"] = false;










$tdatapenandatangan[".pageSize"] = 20;

$tdatapenandatangan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapenandatangan[".strOrderBy"] = $tstrOrderBy;

$tdatapenandatangan[".orderindexes"] = array();


$tdatapenandatangan[".sqlHead"] = "SELECT id,  	nama,  	email";
$tdatapenandatangan[".sqlFrom"] = "FROM penandatangan";
$tdatapenandatangan[".sqlWhereExpr"] = "";
$tdatapenandatangan[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapenandatangan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapenandatangan[".arrGroupsPerPage"] = $arrGPP;

$tdatapenandatangan[".highlightSearchResults"] = true;

$tableKeyspenandatangan = array();
$tableKeyspenandatangan[] = "id";
$tdatapenandatangan[".Keys"] = $tableKeyspenandatangan;


$tdatapenandatangan[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "penandatangan";
	$fdata["Label"] = GetFieldLabel("penandatangan","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapenandatangan["id"] = $fdata;
		$tdatapenandatangan[".searchableFields"][] = "id";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "penandatangan";
	$fdata["Label"] = GetFieldLabel("penandatangan","nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nama";

		$fdata["sourceSingle"] = "nama";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nama";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapenandatangan["nama"] = $fdata;
		$tdatapenandatangan[".searchableFields"][] = "nama";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "penandatangan";
	$fdata["Label"] = GetFieldLabel("penandatangan","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatapenandatangan["email"] = $fdata;
		$tdatapenandatangan[".searchableFields"][] = "email";


$tables_data["penandatangan"]=&$tdatapenandatangan;
$field_labels["penandatangan"] = &$fieldLabelspenandatangan;
$fieldToolTips["penandatangan"] = &$fieldToolTipspenandatangan;
$placeHolders["penandatangan"] = &$placeHolderspenandatangan;
$page_titles["penandatangan"] = &$pageTitlespenandatangan;


changeTextControlsToDate( "penandatangan" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["penandatangan"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["penandatangan"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_penandatangan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nama,  	email";
$proto0["m_strFrom"] = "FROM penandatangan";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "penandatangan",
	"m_srcTableName" => "penandatangan"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "penandatangan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "penandatangan",
	"m_srcTableName" => "penandatangan"
));

$proto8["m_sql"] = "nama";
$proto8["m_srcTableName"] = "penandatangan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "penandatangan",
	"m_srcTableName" => "penandatangan"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "penandatangan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "penandatangan";
$proto13["m_srcTableName"] = "penandatangan";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "nama";
$proto13["m_columns"][] = "email";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "penandatangan";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "penandatangan";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="penandatangan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_penandatangan = createSqlQuery_penandatangan();


	
		;

			

$tdatapenandatangan[".sqlquery"] = $queryData_penandatangan;



$tdatapenandatangan[".hasEvents"] = false;

?>