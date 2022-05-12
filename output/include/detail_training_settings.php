<?php
$tdatadetail_training = array();
$tdatadetail_training[".searchableFields"] = array();
$tdatadetail_training[".ShortName"] = "detail_training";
$tdatadetail_training[".OwnerID"] = "";
$tdatadetail_training[".OriginalTable"] = "detail_training";


$tdatadetail_training[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadetail_training[".originalPagesByType"] = $tdatadetail_training[".pagesByType"];
$tdatadetail_training[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadetail_training[".originalPages"] = $tdatadetail_training[".pages"];
$tdatadetail_training[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadetail_training[".originalDefaultPages"] = $tdatadetail_training[".defaultPages"];

//	field labels
$fieldLabelsdetail_training = array();
$fieldToolTipsdetail_training = array();
$pageTitlesdetail_training = array();
$placeHoldersdetail_training = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdetail_training["English"] = array();
	$fieldToolTipsdetail_training["English"] = array();
	$placeHoldersdetail_training["English"] = array();
	$pageTitlesdetail_training["English"] = array();
	$fieldLabelsdetail_training["English"]["id"] = "Id";
	$fieldToolTipsdetail_training["English"]["id"] = "";
	$placeHoldersdetail_training["English"]["id"] = "";
	$fieldLabelsdetail_training["English"]["materi"] = "Materi";
	$fieldToolTipsdetail_training["English"]["materi"] = "";
	$placeHoldersdetail_training["English"]["materi"] = "";
	$fieldLabelsdetail_training["English"]["tanggal"] = "Tanggal";
	$fieldToolTipsdetail_training["English"]["tanggal"] = "";
	$placeHoldersdetail_training["English"]["tanggal"] = "";
	$fieldLabelsdetail_training["English"]["training"] = "Training";
	$fieldToolTipsdetail_training["English"]["training"] = "";
	$placeHoldersdetail_training["English"]["training"] = "";
	if (count($fieldToolTipsdetail_training["English"]))
		$tdatadetail_training[".isUseToolTips"] = true;
}


	$tdatadetail_training[".NCSearch"] = true;



$tdatadetail_training[".shortTableName"] = "detail_training";
$tdatadetail_training[".nSecOptions"] = 0;

$tdatadetail_training[".mainTableOwnerID"] = "";
$tdatadetail_training[".entityType"] = 0;
$tdatadetail_training[".connId"] = "tte_at_localhost";


$tdatadetail_training[".strOriginalTableName"] = "detail_training";

	



$tdatadetail_training[".showAddInPopup"] = false;

$tdatadetail_training[".showEditInPopup"] = false;

$tdatadetail_training[".showViewInPopup"] = false;

$tdatadetail_training[".listAjax"] = false;
//	temporary
//$tdatadetail_training[".listAjax"] = false;

	$tdatadetail_training[".audit"] = false;

	$tdatadetail_training[".locking"] = false;


$pages = $tdatadetail_training[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadetail_training[".edit"] = true;
	$tdatadetail_training[".afterEditAction"] = 1;
	$tdatadetail_training[".closePopupAfterEdit"] = 1;
	$tdatadetail_training[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadetail_training[".add"] = true;
$tdatadetail_training[".afterAddAction"] = 1;
$tdatadetail_training[".closePopupAfterAdd"] = 1;
$tdatadetail_training[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadetail_training[".list"] = true;
}



$tdatadetail_training[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadetail_training[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadetail_training[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadetail_training[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadetail_training[".printFriendly"] = true;
}



$tdatadetail_training[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadetail_training[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadetail_training[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadetail_training[".isUseAjaxSuggest"] = true;

$tdatadetail_training[".rowHighlite"] = true;





$tdatadetail_training[".ajaxCodeSnippetAdded"] = false;

$tdatadetail_training[".buttonsAdded"] = false;

$tdatadetail_training[".addPageEvents"] = true;

// use timepicker for search panel
$tdatadetail_training[".isUseTimeForSearch"] = false;


$tdatadetail_training[".badgeColor"] = "E8926F";


$tdatadetail_training[".allSearchFields"] = array();
$tdatadetail_training[".filterFields"] = array();
$tdatadetail_training[".requiredSearchFields"] = array();

$tdatadetail_training[".googleLikeFields"] = array();
$tdatadetail_training[".googleLikeFields"][] = "id";
$tdatadetail_training[".googleLikeFields"][] = "materi";
$tdatadetail_training[".googleLikeFields"][] = "tanggal";
$tdatadetail_training[".googleLikeFields"][] = "training";



$tdatadetail_training[".tableType"] = "list";

$tdatadetail_training[".printerPageOrientation"] = 0;
$tdatadetail_training[".nPrinterPageScale"] = 100;

$tdatadetail_training[".nPrinterSplitRecords"] = 40;

$tdatadetail_training[".geocodingEnabled"] = false;










$tdatadetail_training[".pageSize"] = 20;

$tdatadetail_training[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadetail_training[".strOrderBy"] = $tstrOrderBy;

$tdatadetail_training[".orderindexes"] = array();


$tdatadetail_training[".sqlHead"] = "SELECT id,  	materi,  	tanggal,  	training";
$tdatadetail_training[".sqlFrom"] = "FROM detail_training";
$tdatadetail_training[".sqlWhereExpr"] = "";
$tdatadetail_training[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadetail_training[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadetail_training[".arrGroupsPerPage"] = $arrGPP;

$tdatadetail_training[".highlightSearchResults"] = true;

$tableKeysdetail_training = array();
$tableKeysdetail_training[] = "id";
$tdatadetail_training[".Keys"] = $tableKeysdetail_training;


$tdatadetail_training[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "detail_training";
	$fdata["Label"] = GetFieldLabel("detail_training","id");
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


	$tdatadetail_training["id"] = $fdata;
		$tdatadetail_training[".searchableFields"][] = "id";
//	materi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "materi";
	$fdata["GoodName"] = "materi";
	$fdata["ownerTable"] = "detail_training";
	$fdata["Label"] = GetFieldLabel("detail_training","materi");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "materi";

		$fdata["sourceSingle"] = "materi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "materi";

	
	
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


	$tdatadetail_training["materi"] = $fdata;
		$tdatadetail_training[".searchableFields"][] = "materi";
//	tanggal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tanggal";
	$fdata["GoodName"] = "tanggal";
	$fdata["ownerTable"] = "detail_training";
	$fdata["Label"] = GetFieldLabel("detail_training","tanggal");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "tanggal";

		$fdata["sourceSingle"] = "tanggal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tanggal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatadetail_training["tanggal"] = $fdata;
		$tdatadetail_training[".searchableFields"][] = "tanggal";
//	training
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "training";
	$fdata["GoodName"] = "training";
	$fdata["ownerTable"] = "detail_training";
	$fdata["Label"] = GetFieldLabel("detail_training","training");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "training";

		$fdata["sourceSingle"] = "training";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "training";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nama";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatadetail_training["training"] = $fdata;
		$tdatadetail_training[".searchableFields"][] = "training";


$tables_data["detail_training"]=&$tdatadetail_training;
$field_labels["detail_training"] = &$fieldLabelsdetail_training;
$fieldToolTips["detail_training"] = &$fieldToolTipsdetail_training;
$placeHolders["detail_training"] = &$placeHoldersdetail_training;
$page_titles["detail_training"] = &$pageTitlesdetail_training;


changeTextControlsToDate( "detail_training" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["detail_training"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["detail_training"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="training";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="training";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["detail_training"][0] = $masterParams;
				$masterTablesData["detail_training"][0]["masterKeys"] = array();
	$masterTablesData["detail_training"][0]["masterKeys"][]="id";
				$masterTablesData["detail_training"][0]["detailKeys"] = array();
	$masterTablesData["detail_training"][0]["detailKeys"][]="training";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_detail_training()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	materi,  	tanggal,  	training";
$proto0["m_strFrom"] = "FROM detail_training";
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
	"m_strTable" => "detail_training",
	"m_srcTableName" => "detail_training"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "detail_training";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "materi",
	"m_strTable" => "detail_training",
	"m_srcTableName" => "detail_training"
));

$proto8["m_sql"] = "materi";
$proto8["m_srcTableName"] = "detail_training";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tanggal",
	"m_strTable" => "detail_training",
	"m_srcTableName" => "detail_training"
));

$proto10["m_sql"] = "tanggal";
$proto10["m_srcTableName"] = "detail_training";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "training",
	"m_strTable" => "detail_training",
	"m_srcTableName" => "detail_training"
));

$proto12["m_sql"] = "training";
$proto12["m_srcTableName"] = "detail_training";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "detail_training";
$proto15["m_srcTableName"] = "detail_training";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "materi";
$proto15["m_columns"][] = "tanggal";
$proto15["m_columns"][] = "training";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "detail_training";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "detail_training";
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
$proto0["m_srcTableName"]="detail_training";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_detail_training = createSqlQuery_detail_training();


	
		;

				

$tdatadetail_training[".sqlquery"] = $queryData_detail_training;



include_once(getabspath("include/detail_training_events.php"));
$tdatadetail_training[".hasEvents"] = true;

?>