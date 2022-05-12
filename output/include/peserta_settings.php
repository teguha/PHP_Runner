<?php
$tdatapeserta = array();
$tdatapeserta[".searchableFields"] = array();
$tdatapeserta[".ShortName"] = "peserta";
$tdatapeserta[".OwnerID"] = "";
$tdatapeserta[".OriginalTable"] = "peserta";


$tdatapeserta[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapeserta[".originalPagesByType"] = $tdatapeserta[".pagesByType"];
$tdatapeserta[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapeserta[".originalPages"] = $tdatapeserta[".pages"];
$tdatapeserta[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapeserta[".originalDefaultPages"] = $tdatapeserta[".defaultPages"];

//	field labels
$fieldLabelspeserta = array();
$fieldToolTipspeserta = array();
$pageTitlespeserta = array();
$placeHolderspeserta = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspeserta["English"] = array();
	$fieldToolTipspeserta["English"] = array();
	$placeHolderspeserta["English"] = array();
	$pageTitlespeserta["English"] = array();
	$fieldLabelspeserta["English"]["id"] = "Id";
	$fieldToolTipspeserta["English"]["id"] = "";
	$placeHolderspeserta["English"]["id"] = "";
	$fieldLabelspeserta["English"]["nama"] = "Nama";
	$fieldToolTipspeserta["English"]["nama"] = "";
	$placeHolderspeserta["English"]["nama"] = "";
	$fieldLabelspeserta["English"]["email"] = "Email";
	$fieldToolTipspeserta["English"]["email"] = "";
	$placeHolderspeserta["English"]["email"] = "";
	$fieldLabelspeserta["English"]["status"] = "Status";
	$fieldToolTipspeserta["English"]["status"] = "";
	$placeHolderspeserta["English"]["status"] = "";
	$fieldLabelspeserta["English"]["training_id"] = "Training Id";
	$fieldToolTipspeserta["English"]["training_id"] = "";
	$placeHolderspeserta["English"]["training_id"] = "";
	if (count($fieldToolTipspeserta["English"]))
		$tdatapeserta[".isUseToolTips"] = true;
}


	$tdatapeserta[".NCSearch"] = true;



$tdatapeserta[".shortTableName"] = "peserta";
$tdatapeserta[".nSecOptions"] = 0;

$tdatapeserta[".mainTableOwnerID"] = "";
$tdatapeserta[".entityType"] = 0;
$tdatapeserta[".connId"] = "tte_at_localhost";


$tdatapeserta[".strOriginalTableName"] = "peserta";

	



$tdatapeserta[".showAddInPopup"] = false;

$tdatapeserta[".showEditInPopup"] = false;

$tdatapeserta[".showViewInPopup"] = false;

$tdatapeserta[".listAjax"] = false;
//	temporary
//$tdatapeserta[".listAjax"] = false;

	$tdatapeserta[".audit"] = false;

	$tdatapeserta[".locking"] = false;


$pages = $tdatapeserta[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapeserta[".edit"] = true;
	$tdatapeserta[".afterEditAction"] = 1;
	$tdatapeserta[".closePopupAfterEdit"] = 1;
	$tdatapeserta[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapeserta[".add"] = true;
$tdatapeserta[".afterAddAction"] = 1;
$tdatapeserta[".closePopupAfterAdd"] = 1;
$tdatapeserta[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapeserta[".list"] = true;
}



$tdatapeserta[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapeserta[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapeserta[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapeserta[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapeserta[".printFriendly"] = true;
}



$tdatapeserta[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapeserta[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapeserta[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapeserta[".isUseAjaxSuggest"] = true;

$tdatapeserta[".rowHighlite"] = true;





$tdatapeserta[".ajaxCodeSnippetAdded"] = false;

$tdatapeserta[".buttonsAdded"] = false;

$tdatapeserta[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapeserta[".isUseTimeForSearch"] = false;


$tdatapeserta[".badgeColor"] = "CFAE83";


$tdatapeserta[".allSearchFields"] = array();
$tdatapeserta[".filterFields"] = array();
$tdatapeserta[".requiredSearchFields"] = array();

$tdatapeserta[".googleLikeFields"] = array();
$tdatapeserta[".googleLikeFields"][] = "id";
$tdatapeserta[".googleLikeFields"][] = "nama";
$tdatapeserta[".googleLikeFields"][] = "email";
$tdatapeserta[".googleLikeFields"][] = "status";
$tdatapeserta[".googleLikeFields"][] = "training_id";



$tdatapeserta[".tableType"] = "list";

$tdatapeserta[".printerPageOrientation"] = 0;
$tdatapeserta[".nPrinterPageScale"] = 100;

$tdatapeserta[".nPrinterSplitRecords"] = 40;

$tdatapeserta[".geocodingEnabled"] = false;










$tdatapeserta[".pageSize"] = 20;

$tdatapeserta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapeserta[".strOrderBy"] = $tstrOrderBy;

$tdatapeserta[".orderindexes"] = array();


$tdatapeserta[".sqlHead"] = "SELECT id,  	nama,  	email,  	status,  	training_id";
$tdatapeserta[".sqlFrom"] = "FROM peserta";
$tdatapeserta[".sqlWhereExpr"] = "";
$tdatapeserta[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapeserta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapeserta[".arrGroupsPerPage"] = $arrGPP;

$tdatapeserta[".highlightSearchResults"] = true;

$tableKeyspeserta = array();
$tableKeyspeserta[] = "id";
$tdatapeserta[".Keys"] = $tableKeyspeserta;


$tdatapeserta[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "peserta";
	$fdata["Label"] = GetFieldLabel("peserta","id");
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


	$tdatapeserta["id"] = $fdata;
		$tdatapeserta[".searchableFields"][] = "id";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "peserta";
	$fdata["Label"] = GetFieldLabel("peserta","nama");
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


	$tdatapeserta["nama"] = $fdata;
		$tdatapeserta[".searchableFields"][] = "nama";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "peserta";
	$fdata["Label"] = GetFieldLabel("peserta","email");
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


	$tdatapeserta["email"] = $fdata;
		$tdatapeserta[".searchableFields"][] = "email";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "peserta";
	$fdata["Label"] = GetFieldLabel("peserta","status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatapeserta["status"] = $fdata;
		$tdatapeserta[".searchableFields"][] = "status";
//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "peserta";
	$fdata["Label"] = GetFieldLabel("peserta","training_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "training_id";

		$fdata["sourceSingle"] = "training_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_id";

	
	
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


	$tdatapeserta["training_id"] = $fdata;
		$tdatapeserta[".searchableFields"][] = "training_id";


$tables_data["peserta"]=&$tdatapeserta;
$field_labels["peserta"] = &$fieldLabelspeserta;
$fieldToolTips["peserta"] = &$fieldToolTipspeserta;
$placeHolders["peserta"] = &$placeHolderspeserta;
$page_titles["peserta"] = &$pageTitlespeserta;


changeTextControlsToDate( "peserta" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["peserta"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["peserta"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="training";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="training";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["peserta"][0] = $masterParams;
				$masterTablesData["peserta"][0]["masterKeys"] = array();
	$masterTablesData["peserta"][0]["masterKeys"][]="id";
				$masterTablesData["peserta"][0]["detailKeys"] = array();
	$masterTablesData["peserta"][0]["detailKeys"][]="training_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_peserta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nama,  	email,  	status,  	training_id";
$proto0["m_strFrom"] = "FROM peserta";
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
	"m_strTable" => "peserta",
	"m_srcTableName" => "peserta"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "peserta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "peserta",
	"m_srcTableName" => "peserta"
));

$proto8["m_sql"] = "nama";
$proto8["m_srcTableName"] = "peserta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "peserta",
	"m_srcTableName" => "peserta"
));

$proto10["m_sql"] = "email";
$proto10["m_srcTableName"] = "peserta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "peserta",
	"m_srcTableName" => "peserta"
));

$proto12["m_sql"] = "status";
$proto12["m_srcTableName"] = "peserta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "peserta",
	"m_srcTableName" => "peserta"
));

$proto14["m_sql"] = "training_id";
$proto14["m_srcTableName"] = "peserta";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "peserta";
$proto17["m_srcTableName"] = "peserta";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "nama";
$proto17["m_columns"][] = "email";
$proto17["m_columns"][] = "status";
$proto17["m_columns"][] = "training_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "peserta";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "peserta";
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
$proto0["m_srcTableName"]="peserta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_peserta = createSqlQuery_peserta();


	
		;

					

$tdatapeserta[".sqlquery"] = $queryData_peserta;



$tdatapeserta[".hasEvents"] = false;

?>