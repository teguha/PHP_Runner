<?php
$tdatamhs = array();
$tdatamhs[".searchableFields"] = array();
$tdatamhs[".ShortName"] = "mhs";
$tdatamhs[".OwnerID"] = "";
$tdatamhs[".OriginalTable"] = "mhs";


$tdatamhs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamhs[".originalPagesByType"] = $tdatamhs[".pagesByType"];
$tdatamhs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamhs[".originalPages"] = $tdatamhs[".pages"];
$tdatamhs[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamhs[".originalDefaultPages"] = $tdatamhs[".defaultPages"];

//	field labels
$fieldLabelsmhs = array();
$fieldToolTipsmhs = array();
$pageTitlesmhs = array();
$placeHoldersmhs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmhs["English"] = array();
	$fieldToolTipsmhs["English"] = array();
	$placeHoldersmhs["English"] = array();
	$pageTitlesmhs["English"] = array();
	$fieldLabelsmhs["English"]["id"] = "Id";
	$fieldToolTipsmhs["English"]["id"] = "";
	$placeHoldersmhs["English"]["id"] = "";
	$fieldLabelsmhs["English"]["nama"] = "Nama";
	$fieldToolTipsmhs["English"]["nama"] = "";
	$placeHoldersmhs["English"]["nama"] = "";
	if (count($fieldToolTipsmhs["English"]))
		$tdatamhs[".isUseToolTips"] = true;
}


	$tdatamhs[".NCSearch"] = true;



$tdatamhs[".shortTableName"] = "mhs";
$tdatamhs[".nSecOptions"] = 0;

$tdatamhs[".mainTableOwnerID"] = "";
$tdatamhs[".entityType"] = 0;
$tdatamhs[".connId"] = "tte_at_localhost";


$tdatamhs[".strOriginalTableName"] = "mhs";

	



$tdatamhs[".showAddInPopup"] = false;

$tdatamhs[".showEditInPopup"] = false;

$tdatamhs[".showViewInPopup"] = false;

$tdatamhs[".listAjax"] = false;
//	temporary
//$tdatamhs[".listAjax"] = false;

	$tdatamhs[".audit"] = false;

	$tdatamhs[".locking"] = false;


$pages = $tdatamhs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamhs[".edit"] = true;
	$tdatamhs[".afterEditAction"] = 1;
	$tdatamhs[".closePopupAfterEdit"] = 1;
	$tdatamhs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamhs[".add"] = true;
$tdatamhs[".afterAddAction"] = 1;
$tdatamhs[".closePopupAfterAdd"] = 1;
$tdatamhs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamhs[".list"] = true;
}



$tdatamhs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamhs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamhs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamhs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamhs[".printFriendly"] = true;
}



$tdatamhs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamhs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamhs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamhs[".isUseAjaxSuggest"] = true;

$tdatamhs[".rowHighlite"] = true;





$tdatamhs[".ajaxCodeSnippetAdded"] = false;

$tdatamhs[".buttonsAdded"] = false;

$tdatamhs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamhs[".isUseTimeForSearch"] = false;


$tdatamhs[".badgeColor"] = "B22222";


$tdatamhs[".allSearchFields"] = array();
$tdatamhs[".filterFields"] = array();
$tdatamhs[".requiredSearchFields"] = array();

$tdatamhs[".googleLikeFields"] = array();
$tdatamhs[".googleLikeFields"][] = "id";
$tdatamhs[".googleLikeFields"][] = "nama";



$tdatamhs[".tableType"] = "list";

$tdatamhs[".printerPageOrientation"] = 0;
$tdatamhs[".nPrinterPageScale"] = 100;

$tdatamhs[".nPrinterSplitRecords"] = 40;

$tdatamhs[".geocodingEnabled"] = false;










$tdatamhs[".pageSize"] = 20;

$tdatamhs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamhs[".strOrderBy"] = $tstrOrderBy;

$tdatamhs[".orderindexes"] = array();


$tdatamhs[".sqlHead"] = "SELECT id,  	nama";
$tdatamhs[".sqlFrom"] = "FROM mhs";
$tdatamhs[".sqlWhereExpr"] = "";
$tdatamhs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamhs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamhs[".arrGroupsPerPage"] = $arrGPP;

$tdatamhs[".highlightSearchResults"] = true;

$tableKeysmhs = array();
$tableKeysmhs[] = "id";
$tdatamhs[".Keys"] = $tableKeysmhs;


$tdatamhs[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mhs";
	$fdata["Label"] = GetFieldLabel("mhs","id");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatamhs["id"] = $fdata;
		$tdatamhs[".searchableFields"][] = "id";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "mhs";
	$fdata["Label"] = GetFieldLabel("mhs","nama");
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


	$tdatamhs["nama"] = $fdata;
		$tdatamhs[".searchableFields"][] = "nama";


$tables_data["mhs"]=&$tdatamhs;
$field_labels["mhs"] = &$fieldLabelsmhs;
$fieldToolTips["mhs"] = &$fieldToolTipsmhs;
$placeHolders["mhs"] = &$placeHoldersmhs;
$page_titles["mhs"] = &$pageTitlesmhs;


changeTextControlsToDate( "mhs" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mhs"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mhs"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mhs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nama";
$proto0["m_strFrom"] = "FROM mhs";
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
	"m_strTable" => "mhs",
	"m_srcTableName" => "mhs"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mhs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "mhs",
	"m_srcTableName" => "mhs"
));

$proto8["m_sql"] = "nama";
$proto8["m_srcTableName"] = "mhs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "mhs";
$proto11["m_srcTableName"] = "mhs";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "nama";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "mhs";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "mhs";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mhs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mhs = createSqlQuery_mhs();


	
		;

		

$tdatamhs[".sqlquery"] = $queryData_mhs;



$tdatamhs[".hasEvents"] = false;

?>