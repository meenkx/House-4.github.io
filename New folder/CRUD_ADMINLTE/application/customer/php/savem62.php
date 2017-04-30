<?php
	require_once 'PHPWord.php';
	// Write data from MySQL result
	$objConnect = mysql_connect("localhost","kc47entcom_kc48","123Qweasd") or die("Error Connect to Database");
	$objDB = mysql_select_db("kc47entcom_kc48");
	@mysql_query("SET NAMES UTF8");
	@mysql_query("SET character_set_results=utf8");
	@mysql_query("SET character_set_client=utf8");
	@mysql_query("SET character_set_connection=utf8");
	date_default_timezone_set("Asia/Bangkok");
	$datetime = date('อัพเดทเมื่อ : เวลา G:i:s วันที่ d/m/Y');
	$strSQL = "SELECT * FROM member WHERE No BETWEEN 037 and 072";
	$objQuery = mysql_query($strSQL);

	// New Word Document
	$PHPWord = new PHPWord();

	// New portrait section
	$section = $PHPWord->createSection(array('orientation'=>'landscape'));

	$PHPWord->addFontStyle('rStyle', array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>16));
	$PHPWord->addParagraphStyle('pStyle', array('align'=>'center', 'spaceAfter'=>100));
	$PHPWord->addParagraphStyle('sStyle', array('align'=>'left', 'spaceAfter'=>100));
	$section->addText('ข้อมูลการศึกษาต่อในระดับมหาวิทยาลัย ปีการศึกษา 2559', 'rStyle', 'pStyle');
	$section->addText('รายชื่อนักเรียนชั้นมัธยมศึกษาปีที่   6 / 2 ', 'rStyle', 'pStyle');
	// Define table style arrays
	$styleTable = array('borderSize'=>2, 'borderColor'=>'000000', 'cellMargin'=>80, 'TH SarabunPSK'=>true, 'size'=>14);

	// Define cell style arrays
	$styleCell = array('valign'=>'center');
	$styleCellBTLR = array('valign'=>'center', 'textDirection'=>PHPWord_Style_Cell::TEXT_DIR_BTLR);

	// Define font style for first row
	$fontStyle = array('bold'=>true, 'align'=>'center', 'TH SarabunPSK'=>true, 'size'=>14);

	// Add table style
	$PHPWord->addTableStyle('myOwnTableStyle', $styleTable );

	// Add table
	$table = $section->addTable('myOwnTableStyle');

	// Add row
	$table->addRow(200);

	// Add cells
	$table->addCell(1200, $styleCell)->addText('ชื่อ', $fontStyle);
	$table->addCell(1400,array('borderLeftSize'=>3, 'borderLeftColor'=>'ffffff', 'bgColor'=>'FFFFFF'))->addText('นามสกุล', $fontStyle);
$table->addCell(70, $styleCell)->addText('บ้าน', $fontStyle);
	$table->addCell(4000, $styleCell)->addText('มหาวิทยาลัย/สถาบัน', $fontStyle);
	$table->addCell(4000, $styleCell)->addText('คณะ/สาขา ', $fontStyle);
	$table->addCell(4000, $styleCell)->addText('หมายเหตุ', $fontStyle);


	while($objResult = mysql_fetch_array($objQuery))
	{
			if ($objResult["University"] != NULL) {
				// Add more rows / cells
				$table->addRow();
				$table->addCell(1200)->addText($objResult["Name"],array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
				$table->addCell(1400,array('borderLeftSize'=>3, 'borderLeftColor'=>'ffffff', 'bgColor'=>'FFFFFF'))->addText($objResult["Lastname"],array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
				$table->addCell(70)->addText($objResult["House"],array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
				$table->addCell(4000)->addText($objResult["University"],array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
				$table->addCell(4000)->addText($objResult["Faculty"],array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
				$table->addCell(4000)->addText($objResult["Note"],array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
			}
			else {

			}

	}
	$section->addText('');
	$section->addText($datetime,  array('TH SarabunPSK'=>true, 'size'=>16));

	// Save File
	$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
$objWriter->save('Texts.docx');

// Your browser will name the file "myFile.docx"
// regardless of what it's named on the server
header("Content-Disposition: attachment; filename=ข้อมูลมหาลัยราชวิทย์_๔๘_ห้อง_2.docx");
readfile('Texts.docx'); // or echo file_get_contents($temp_file);
//unlink('Texts.docx');  // remove temp file

?>
