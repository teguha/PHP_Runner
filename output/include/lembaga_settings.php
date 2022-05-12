<?php
$tdatalembaga = array();
$tdatalembaga[".searchableFields"] = array();
$tdatalembaga[".ShortName"] = "lembaga";
$tdatalembaga[".OwnerID"] = "id";
$tdatalembaga[".OriginalTable"] = "lembaga";


$tdatalembaga[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalembaga[".originalPagesByType"] = $tdatalembaga[".pagesByType"];
$tdatalembaga[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalembaga[".originalPages"] = $tdatalembaga[".pages"];
$tdatalembaga[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalembaga[".originalDefaultPages"] = $tdatalembaga[".defaultPages"];

//	field labels
$fieldLabelslembaga = array();
$fieldToolTipslembaga = array();
$pageTitleslembaga = array();
$placeHolderslembaga = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslembaga["English"] = array();
	$fieldToolTipslembaga["English"] = array();
	$placeHolderslembaga["English"] = array();
	$pageTitleslembaga["English"] = array();
	$fieldLabelslembaga["English"]["id"] = "Id";
	$fieldToolTipslembaga["English"]["id"] = "";
	$placeHolderslembaga["English"]["id"] = "";
	$fieldLabelslembaga["English"]["nama"] = "Nama";
	$fieldToolTipslembaga["English"]["nama"] = "";
	$placeHolderslembaga["English"]["nama"] = "";
	$fieldLabelslembaga["English"]["email"] = "Email";
	$fieldToolTipslembaga["English"]["email"] = "";
	$placeHolderslembaga["English"]["email"] = "";
	$fieldLabelslembaga["English"]["username"] = "Username";
	$fieldToolTipslembaga["English"]["username"] = "";
	$placeHolderslembaga["English"]["username"] = "";
	$fieldLabelslembaga["English"]["password"] = "Password";
	$fieldToolTipslembaga["English"]["password"] = "";
	$placeHolderslembaga["English"]["password"] = "";
	if (count($fieldToolTipslembaga["English"]))
		$tdatalembaga[".isUseToolTips"] = true;
}


	$tdatalembaga[".NCSearch"] = true;



$tdatalembaga[".shortTableName"] = "lembaga";
$tdatalembaga[".nSecOptions"] = 1;

$tdatalembaga[".mainTableOwnerID"] = "id";
$tdatalembaga[".entityType"] = 0;
$tdatalembaga[".connId"] = "tte_at_localhost";


$tdatalembaga[".strOriginalTableName"] = "lembaga";

	



$tdatalembaga[".showAddInPopup"] = false;

$tdatalembaga[".showEditInPopup"] = false;

$tdatalembaga[".showViewInPopup"] = false;

$tdatalembaga[".listAjax"] = false;
//	temporary
//$tdatalembaga[".listAjax"] = false;

	$tdatalembaga[".audit"] = false;

	$tdatalembaga[".locking"] = false;


$pages = $tdatalembaga[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalembaga[".edit"] = true;
	$tdatalembaga[".afterEditAction"] = 1;
	$tdatalembaga[".closePopupAfterEdit"] = 1;
	$tdatalembaga[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalembaga[".add"] = true;
$tdatalembaga[".afterAddAction"] = 1;
$tdatalembaga[".closePopupAfterAdd"] = 1;
$tdatalembaga[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalembaga[".list"] = true;
}



$tdatalembaga[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalembaga[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalembaga[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalembaga[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalembaga[".printFriendly"] = true;
}



$tdatalembaga[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalembaga[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalembaga[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalembaga[".isUseAjaxSuggest"] = true;

$tdatalembaga[".rowHighlite"] = true;





$tdatalembaga[".ajaxCodeSnippetAdded"] = false;

$tdatalembaga[".buttonsAdded"] = false;

$tdatalembaga[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalembaga[".isUseTimeForSearch"] = false;


$tdatalembaga[".badgeColor"] = "4169E1";


$tdatalembaga[".allSearchFields"] = array();
$tdatalembaga[".filterFields"] = array();
$tdatalembaga[".requiredSearchFields"] = array();

$tdatalembaga[".googleLikeFields"] = array();
$tdatalembaga[".googleLikeFields"][] = "id";
$tdatalembaga[".googleLikeFields"][] = "nama";
$tdatalembaga[".googleLikeFields"][] = "email";
$tdatalembaga[".googleLikeFields"][] = "username";
$tdatalembaga[".googleLikeFields"][] = "password";



$tdatalembaga[".tableType"] = "list";

$tdatalembaga[".printerPageOrientation"] = 0;
$tdatalembaga[".nPrinterPageScale"] = 100;

$tdatalembaga[".nPrinterSplitRecords"] = 40;

$tdatalembaga[".geocodingEnabled"] = false;










$tdatalembaga[".pageSize"] = 20;

$tdatalembaga[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalembaga[".strOrderBy"] = $tstrOrderBy;

$tdatalembaga[".orderindexes"] = array();


$tdatalembaga[".sqlHead"] = "SELECT id,  	nama,  	email,  	username,  	password";
$tdatalembaga[".sqlFrom"] = "FROM lembaga";
$tdatalembaga[".sqlWhereExpr"] = "";
$tdatalembaga[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalembaga[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalembaga[".arrGroupsPerPage"] = $arrGPP;

$tdatalembaga[".highlightSearchResults"] = true;

$tableKeyslembaga = array();
$tableKeyslembaga[] = "id";
$tdatalembaga[".Keys"] = $tableKeyslembaga;


$tdatalembaga[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "lembaga";
	$fdata["Label"] = GetFieldLabel("lembaga","id");
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


	$tdatalembaga["id"] = $fdata;
		$tdatalembaga[".searchableFields"][] = "id";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "lembaga";
	$fdata["Label"] = GetFieldLabel("lembaga","nama");
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


	$tdatalembaga["nama"] = $fdata;
		$tdatalembaga[".searchableFields"][] = "nama";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "lembaga";
	$fdata["Label"] = GetFieldLabel("lembaga","email");
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


	$tdatalembaga["email"] = $fdata;
		$tdatalembaga[".searchableFields"][] = "email";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "lembaga";
	$fdata["Label"] = GetFieldLabel("lembaga","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatalembaga["username"] = $fdata;
		$tdatalembaga[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "lembaga";
	$fdata["Label"] = GetFieldLabel("lembaga","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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


	$tdatalembaga["password"] = $fdata;
		$tdatalembaga[".searchableFields"][] = "password";


$tables_data["lembaga"]=&$tdatalembaga;
$field_labels["lembaga"] = &$fieldLabelslembaga;
$fieldToolTips["lembaga"] = &$fieldToolTipslembaga;
$placeHolders["lembaga"] = &$placeHolderslembaga;
$page_titles["lembaga"] = &$pageTitleslembaga;


changeTextControlsToDate( "lembaga" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["lembaga"] = array();
//	training
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="training";
		$detailsParam["dOriginalTable"] = "training";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training";
	$detailsParam["dCaptionTable"] = GetTableCaption("training");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["lembaga"][$dIndex] = $detailsParam;

	
		$detailsTablesData["lembaga"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["lembaga"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["lembaga"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["lembaga"][$dIndex]["detailKeys"][]="lembaga_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["lembaga"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lembaga()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nama,  	email,  	username,  	password";
$proto0["m_strFrom"] = "FROM lembaga";
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
	"m_strTable" => "lembaga",
	"m_srcTableName" => "lembaga"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "lembaga";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "lembaga",
	"m_srcTableName" => "lembaga"
));

$proto8["m_sql"] = "nama";
$proto8["m_srcTableName"] = "lembaga";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "lembaga",
	"m_srcTableName" => "lembaga"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "lembaga";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "lembaga",
	"m_srcTableName" => "lembaga"
));

$proto12["m_sql"] = "username";
$proto12["m_srcTableName"] = "lembaga";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "lembaga",
	"m_srcTableName" => "lembaga"
));

$proto14["m_sql"] = "password";
$proto14["m_srcTableName"] = "lembaga";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "lembaga";
$proto17["m_srcTableName"] = "lembaga";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "nama";
$proto17["m_columns"][] = "email";
$proto17["m_columns"][] = "username";
$proto17["m_columns"][] = "password";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "lembaga";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "lembaga";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="lembaga";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lembaga = createSqlQuery_lembaga();


	
		;

					

$tdatalembaga[".sqlquery"] = $queryData_lembaga;



$tdatalembaga[".hasEvents"] = false;

?>