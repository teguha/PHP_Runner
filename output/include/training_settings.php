<?php
$tdatatraining = array();
$tdatatraining[".searchableFields"] = array();
$tdatatraining[".ShortName"] = "training";
$tdatatraining[".OwnerID"] = "";
$tdatatraining[".OriginalTable"] = "training";


$tdatatraining[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining[".originalPagesByType"] = $tdatatraining[".pagesByType"];
$tdatatraining[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining[".originalPages"] = $tdatatraining[".pages"];
$tdatatraining[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining[".originalDefaultPages"] = $tdatatraining[".defaultPages"];

//	field labels
$fieldLabelstraining = array();
$fieldToolTipstraining = array();
$pageTitlestraining = array();
$placeHolderstraining = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining["English"] = array();
	$fieldToolTipstraining["English"] = array();
	$placeHolderstraining["English"] = array();
	$pageTitlestraining["English"] = array();
	$fieldLabelstraining["English"]["id"] = "Id";
	$fieldToolTipstraining["English"]["id"] = "";
	$placeHolderstraining["English"]["id"] = "";
	$fieldLabelstraining["English"]["nama"] = "Nama";
	$fieldToolTipstraining["English"]["nama"] = "";
	$placeHolderstraining["English"]["nama"] = "";
	$fieldLabelstraining["English"]["mulai"] = "Mulai";
	$fieldToolTipstraining["English"]["mulai"] = "";
	$placeHolderstraining["English"]["mulai"] = "";
	$fieldLabelstraining["English"]["selesai"] = "Selesai";
	$fieldToolTipstraining["English"]["selesai"] = "";
	$placeHolderstraining["English"]["selesai"] = "";
	$fieldLabelstraining["English"]["pengajar"] = "Pengajar";
	$fieldToolTipstraining["English"]["pengajar"] = "";
	$placeHolderstraining["English"]["pengajar"] = "";
	$fieldLabelstraining["English"]["lembaga_id"] = "Lembaga Id";
	$fieldToolTipstraining["English"]["lembaga_id"] = "";
	$placeHolderstraining["English"]["lembaga_id"] = "";
	if (count($fieldToolTipstraining["English"]))
		$tdatatraining[".isUseToolTips"] = true;
}


	$tdatatraining[".NCSearch"] = true;



$tdatatraining[".shortTableName"] = "training";
$tdatatraining[".nSecOptions"] = 0;

$tdatatraining[".mainTableOwnerID"] = "";
$tdatatraining[".entityType"] = 0;
$tdatatraining[".connId"] = "tte_at_localhost";


$tdatatraining[".strOriginalTableName"] = "training";

	



$tdatatraining[".showAddInPopup"] = false;

$tdatatraining[".showEditInPopup"] = false;

$tdatatraining[".showViewInPopup"] = false;

$tdatatraining[".listAjax"] = false;
//	temporary
//$tdatatraining[".listAjax"] = false;

	$tdatatraining[".audit"] = false;

	$tdatatraining[".locking"] = false;


$pages = $tdatatraining[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining[".edit"] = true;
	$tdatatraining[".afterEditAction"] = 1;
	$tdatatraining[".closePopupAfterEdit"] = 1;
	$tdatatraining[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining[".add"] = true;
$tdatatraining[".afterAddAction"] = 1;
$tdatatraining[".closePopupAfterAdd"] = 1;
$tdatatraining[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining[".list"] = true;
}



$tdatatraining[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining[".printFriendly"] = true;
}



$tdatatraining[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining[".isUseAjaxSuggest"] = true;

$tdatatraining[".rowHighlite"] = true;





$tdatatraining[".ajaxCodeSnippetAdded"] = false;

$tdatatraining[".buttonsAdded"] = false;

$tdatatraining[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining[".isUseTimeForSearch"] = false;


$tdatatraining[".badgeColor"] = "6B8E23";


$tdatatraining[".allSearchFields"] = array();
$tdatatraining[".filterFields"] = array();
$tdatatraining[".requiredSearchFields"] = array();

$tdatatraining[".googleLikeFields"] = array();
$tdatatraining[".googleLikeFields"][] = "id";
$tdatatraining[".googleLikeFields"][] = "nama";
$tdatatraining[".googleLikeFields"][] = "mulai";
$tdatatraining[".googleLikeFields"][] = "selesai";
$tdatatraining[".googleLikeFields"][] = "pengajar";
$tdatatraining[".googleLikeFields"][] = "lembaga_id";



$tdatatraining[".tableType"] = "list";

$tdatatraining[".printerPageOrientation"] = 0;
$tdatatraining[".nPrinterPageScale"] = 100;

$tdatatraining[".nPrinterSplitRecords"] = 40;

$tdatatraining[".geocodingEnabled"] = false;










$tdatatraining[".pageSize"] = 20;

$tdatatraining[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining[".strOrderBy"] = $tstrOrderBy;

$tdatatraining[".orderindexes"] = array();


$tdatatraining[".sqlHead"] = "SELECT id,  	nama,  	mulai,  	selesai,  	pengajar,  	lembaga_id";
$tdatatraining[".sqlFrom"] = "FROM training";
$tdatatraining[".sqlWhereExpr"] = "";
$tdatatraining[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining[".highlightSearchResults"] = true;

$tableKeystraining = array();
$tableKeystraining[] = "id";
$tdatatraining[".Keys"] = $tableKeystraining;


$tdatatraining[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "training";
	$fdata["Label"] = GetFieldLabel("training","id");
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


	$tdatatraining["id"] = $fdata;
		$tdatatraining[".searchableFields"][] = "id";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "training";
	$fdata["Label"] = GetFieldLabel("training","nama");
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


	$tdatatraining["nama"] = $fdata;
		$tdatatraining[".searchableFields"][] = "nama";
//	mulai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mulai";
	$fdata["GoodName"] = "mulai";
	$fdata["ownerTable"] = "training";
	$fdata["Label"] = GetFieldLabel("training","mulai");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "mulai";

		$fdata["sourceSingle"] = "mulai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mulai";

	
	
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


	$tdatatraining["mulai"] = $fdata;
		$tdatatraining[".searchableFields"][] = "mulai";
//	selesai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "selesai";
	$fdata["GoodName"] = "selesai";
	$fdata["ownerTable"] = "training";
	$fdata["Label"] = GetFieldLabel("training","selesai");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "selesai";

		$fdata["sourceSingle"] = "selesai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "selesai";

	
	
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


	$tdatatraining["selesai"] = $fdata;
		$tdatatraining[".searchableFields"][] = "selesai";
//	pengajar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pengajar";
	$fdata["GoodName"] = "pengajar";
	$fdata["ownerTable"] = "training";
	$fdata["Label"] = GetFieldLabel("training","pengajar");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pengajar";

		$fdata["sourceSingle"] = "pengajar";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pengajar";

	
	
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


	$tdatatraining["pengajar"] = $fdata;
		$tdatatraining[".searchableFields"][] = "pengajar";
//	lembaga_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "lembaga_id";
	$fdata["GoodName"] = "lembaga_id";
	$fdata["ownerTable"] = "training";
	$fdata["Label"] = GetFieldLabel("training","lembaga_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "lembaga_id";

		$fdata["sourceSingle"] = "lembaga_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lembaga_id";

	
	
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
	$edata["LookupTable"] = "lembaga";
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


	$tdatatraining["lembaga_id"] = $fdata;
		$tdatatraining[".searchableFields"][] = "lembaga_id";


$tables_data["training"]=&$tdatatraining;
$field_labels["training"] = &$fieldLabelstraining;
$fieldToolTips["training"] = &$fieldToolTipstraining;
$placeHolders["training"] = &$placeHolderstraining;
$page_titles["training"] = &$pageTitlestraining;


changeTextControlsToDate( "training" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["training"] = array();
//	peserta
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="peserta";
		$detailsParam["dOriginalTable"] = "peserta";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "peserta";
	$detailsParam["dCaptionTable"] = GetTableCaption("peserta");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["training"][$dIndex] = $detailsParam;

	
		$detailsTablesData["training"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["training"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["training"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["training"][$dIndex]["detailKeys"][]="training_id";
//	detail_training
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="detail_training";
		$detailsParam["dOriginalTable"] = "detail_training";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "detail_training";
	$detailsParam["dCaptionTable"] = GetTableCaption("detail_training");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["training"][$dIndex] = $detailsParam;

	
		$detailsTablesData["training"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["training"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["training"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["training"][$dIndex]["detailKeys"][]="training";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["training"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="lembaga";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="lembaga";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "lembaga";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["training"][0] = $masterParams;
				$masterTablesData["training"][0]["masterKeys"] = array();
	$masterTablesData["training"][0]["masterKeys"][]="id";
				$masterTablesData["training"][0]["detailKeys"] = array();
	$masterTablesData["training"][0]["detailKeys"][]="lembaga_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	nama,  	mulai,  	selesai,  	pengajar,  	lembaga_id";
$proto0["m_strFrom"] = "FROM training";
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
	"m_strTable" => "training",
	"m_srcTableName" => "training"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "training";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "training",
	"m_srcTableName" => "training"
));

$proto8["m_sql"] = "nama";
$proto8["m_srcTableName"] = "training";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mulai",
	"m_strTable" => "training",
	"m_srcTableName" => "training"
));

$proto10["m_sql"] = "mulai";
$proto10["m_srcTableName"] = "training";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "selesai",
	"m_strTable" => "training",
	"m_srcTableName" => "training"
));

$proto12["m_sql"] = "selesai";
$proto12["m_srcTableName"] = "training";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pengajar",
	"m_strTable" => "training",
	"m_srcTableName" => "training"
));

$proto14["m_sql"] = "pengajar";
$proto14["m_srcTableName"] = "training";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "lembaga_id",
	"m_strTable" => "training",
	"m_srcTableName" => "training"
));

$proto16["m_sql"] = "lembaga_id";
$proto16["m_srcTableName"] = "training";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "training";
$proto19["m_srcTableName"] = "training";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "nama";
$proto19["m_columns"][] = "mulai";
$proto19["m_columns"][] = "selesai";
$proto19["m_columns"][] = "pengajar";
$proto19["m_columns"][] = "lembaga_id";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "training";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "training";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="training";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training = createSqlQuery_training();


	
		;

						

$tdatatraining[".sqlquery"] = $queryData_training;



$tdatatraining[".hasEvents"] = false;

?>