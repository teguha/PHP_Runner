<?php
$tdatatb_matkul = array();
$tdatatb_matkul[".searchableFields"] = array();
$tdatatb_matkul[".ShortName"] = "tb_matkul";
$tdatatb_matkul[".OwnerID"] = "";
$tdatatb_matkul[".OriginalTable"] = "tb_matkul";


$tdatatb_matkul[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_matkul[".originalPagesByType"] = $tdatatb_matkul[".pagesByType"];
$tdatatb_matkul[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_matkul[".originalPages"] = $tdatatb_matkul[".pages"];
$tdatatb_matkul[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatb_matkul[".originalDefaultPages"] = $tdatatb_matkul[".defaultPages"];

//	field labels
$fieldLabelstb_matkul = array();
$fieldToolTipstb_matkul = array();
$pageTitlestb_matkul = array();
$placeHolderstb_matkul = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_matkul["English"] = array();
	$fieldToolTipstb_matkul["English"] = array();
	$placeHolderstb_matkul["English"] = array();
	$pageTitlestb_matkul["English"] = array();
	$fieldLabelstb_matkul["English"]["id_matkul"] = "Id Matkul";
	$fieldToolTipstb_matkul["English"]["id_matkul"] = "";
	$placeHolderstb_matkul["English"]["id_matkul"] = "";
	$fieldLabelstb_matkul["English"]["nama_matkul"] = "Nama Matkul";
	$fieldToolTipstb_matkul["English"]["nama_matkul"] = "";
	$placeHolderstb_matkul["English"]["nama_matkul"] = "";
	$fieldLabelstb_matkul["English"]["semester"] = "Semester";
	$fieldToolTipstb_matkul["English"]["semester"] = "";
	$placeHolderstb_matkul["English"]["semester"] = "";
	$fieldLabelstb_matkul["English"]["sks"] = "Sks";
	$fieldToolTipstb_matkul["English"]["sks"] = "";
	$placeHolderstb_matkul["English"]["sks"] = "";
	if (count($fieldToolTipstb_matkul["English"]))
		$tdatatb_matkul[".isUseToolTips"] = true;
}


	$tdatatb_matkul[".NCSearch"] = true;



$tdatatb_matkul[".shortTableName"] = "tb_matkul";
$tdatatb_matkul[".nSecOptions"] = 0;

$tdatatb_matkul[".mainTableOwnerID"] = "";
$tdatatb_matkul[".entityType"] = 0;
$tdatatb_matkul[".connId"] = "tte_at_localhost";


$tdatatb_matkul[".strOriginalTableName"] = "tb_matkul";

	



$tdatatb_matkul[".showAddInPopup"] = false;

$tdatatb_matkul[".showEditInPopup"] = false;

$tdatatb_matkul[".showViewInPopup"] = false;

$tdatatb_matkul[".listAjax"] = false;
//	temporary
//$tdatatb_matkul[".listAjax"] = false;

	$tdatatb_matkul[".audit"] = false;

	$tdatatb_matkul[".locking"] = false;


$pages = $tdatatb_matkul[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_matkul[".edit"] = true;
	$tdatatb_matkul[".afterEditAction"] = 1;
	$tdatatb_matkul[".closePopupAfterEdit"] = 1;
	$tdatatb_matkul[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_matkul[".add"] = true;
$tdatatb_matkul[".afterAddAction"] = 1;
$tdatatb_matkul[".closePopupAfterAdd"] = 1;
$tdatatb_matkul[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_matkul[".list"] = true;
}



$tdatatb_matkul[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_matkul[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_matkul[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_matkul[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_matkul[".printFriendly"] = true;
}



$tdatatb_matkul[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_matkul[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_matkul[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_matkul[".isUseAjaxSuggest"] = true;

$tdatatb_matkul[".rowHighlite"] = true;





$tdatatb_matkul[".ajaxCodeSnippetAdded"] = false;

$tdatatb_matkul[".buttonsAdded"] = false;

$tdatatb_matkul[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_matkul[".isUseTimeForSearch"] = false;


$tdatatb_matkul[".badgeColor"] = "EDCA00";


$tdatatb_matkul[".allSearchFields"] = array();
$tdatatb_matkul[".filterFields"] = array();
$tdatatb_matkul[".requiredSearchFields"] = array();

$tdatatb_matkul[".googleLikeFields"] = array();
$tdatatb_matkul[".googleLikeFields"][] = "id_matkul";
$tdatatb_matkul[".googleLikeFields"][] = "nama_matkul";
$tdatatb_matkul[".googleLikeFields"][] = "semester";
$tdatatb_matkul[".googleLikeFields"][] = "sks";



$tdatatb_matkul[".tableType"] = "list";

$tdatatb_matkul[".printerPageOrientation"] = 0;
$tdatatb_matkul[".nPrinterPageScale"] = 100;

$tdatatb_matkul[".nPrinterSplitRecords"] = 40;

$tdatatb_matkul[".geocodingEnabled"] = false;










$tdatatb_matkul[".pageSize"] = 20;

$tdatatb_matkul[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatb_matkul[".strOrderBy"] = $tstrOrderBy;

$tdatatb_matkul[".orderindexes"] = array();


$tdatatb_matkul[".sqlHead"] = "SELECT id_matkul,  	nama_matkul,  	semester,  	sks";
$tdatatb_matkul[".sqlFrom"] = "FROM tb_matkul";
$tdatatb_matkul[".sqlWhereExpr"] = "";
$tdatatb_matkul[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_matkul[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_matkul[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_matkul[".highlightSearchResults"] = true;

$tableKeystb_matkul = array();
$tableKeystb_matkul[] = "id_matkul";
$tdatatb_matkul[".Keys"] = $tableKeystb_matkul;


$tdatatb_matkul[".hideMobileList"] = array();




//	id_matkul
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_matkul";
	$fdata["GoodName"] = "id_matkul";
	$fdata["ownerTable"] = "tb_matkul";
	$fdata["Label"] = GetFieldLabel("tb_matkul","id_matkul");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_matkul";

		$fdata["sourceSingle"] = "id_matkul";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_matkul";

	
	
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


	$tdatatb_matkul["id_matkul"] = $fdata;
		$tdatatb_matkul[".searchableFields"][] = "id_matkul";
//	nama_matkul
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama_matkul";
	$fdata["GoodName"] = "nama_matkul";
	$fdata["ownerTable"] = "tb_matkul";
	$fdata["Label"] = GetFieldLabel("tb_matkul","nama_matkul");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nama_matkul";

		$fdata["sourceSingle"] = "nama_matkul";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nama_matkul";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatb_matkul["nama_matkul"] = $fdata;
		$tdatatb_matkul[".searchableFields"][] = "nama_matkul";
//	semester
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "semester";
	$fdata["GoodName"] = "semester";
	$fdata["ownerTable"] = "tb_matkul";
	$fdata["Label"] = GetFieldLabel("tb_matkul","semester");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "semester";

		$fdata["sourceSingle"] = "semester";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "semester";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatb_matkul["semester"] = $fdata;
		$tdatatb_matkul[".searchableFields"][] = "semester";
//	sks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sks";
	$fdata["GoodName"] = "sks";
	$fdata["ownerTable"] = "tb_matkul";
	$fdata["Label"] = GetFieldLabel("tb_matkul","sks");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sks";

		$fdata["sourceSingle"] = "sks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sks";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatb_matkul["sks"] = $fdata;
		$tdatatb_matkul[".searchableFields"][] = "sks";


$tables_data["tb_matkul"]=&$tdatatb_matkul;
$field_labels["tb_matkul"] = &$fieldLabelstb_matkul;
$fieldToolTips["tb_matkul"] = &$fieldToolTipstb_matkul;
$placeHolders["tb_matkul"] = &$placeHolderstb_matkul;
$page_titles["tb_matkul"] = &$pageTitlestb_matkul;


changeTextControlsToDate( "tb_matkul" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tb_matkul"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tb_matkul"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_matkul()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_matkul,  	nama_matkul,  	semester,  	sks";
$proto0["m_strFrom"] = "FROM tb_matkul";
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
	"m_strName" => "id_matkul",
	"m_strTable" => "tb_matkul",
	"m_srcTableName" => "tb_matkul"
));

$proto6["m_sql"] = "id_matkul";
$proto6["m_srcTableName"] = "tb_matkul";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nama_matkul",
	"m_strTable" => "tb_matkul",
	"m_srcTableName" => "tb_matkul"
));

$proto8["m_sql"] = "nama_matkul";
$proto8["m_srcTableName"] = "tb_matkul";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "semester",
	"m_strTable" => "tb_matkul",
	"m_srcTableName" => "tb_matkul"
));

$proto10["m_sql"] = "semester";
$proto10["m_srcTableName"] = "tb_matkul";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sks",
	"m_strTable" => "tb_matkul",
	"m_srcTableName" => "tb_matkul"
));

$proto12["m_sql"] = "sks";
$proto12["m_srcTableName"] = "tb_matkul";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tb_matkul";
$proto15["m_srcTableName"] = "tb_matkul";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_matkul";
$proto15["m_columns"][] = "nama_matkul";
$proto15["m_columns"][] = "semester";
$proto15["m_columns"][] = "sks";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tb_matkul";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tb_matkul";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_matkul";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_matkul = createSqlQuery_tb_matkul();


	
		;

				

$tdatatb_matkul[".sqlquery"] = $queryData_tb_matkul;



$tdatatb_matkul[".hasEvents"] = false;

?>