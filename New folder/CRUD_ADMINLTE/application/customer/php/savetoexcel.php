<?php
	require_once 'PHPWord.php';
	include '../list/listmain2.php';
	// Write data from MySQL result
	$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	$objDB = mysql_select_db("kc47entcom_kc48");
	@mysql_query("SET NAMES UTF8");
	@mysql_query("SET character_set_results=utf8");
	@mysql_query("SET character_set_client=utf8");
	@mysql_query("SET character_set_connection=utf8");
	date_default_timezone_set("Asia/Bangkok");
	$datetime = date('งานแนะแนว : รวบรวมข้อมูล ณ เวลา G:i:s วันที่ d/m/Y');

	$strSQL = "SELECT * FROM member WHERE No BETWEEN 001 and 154 ";
	$objQuery = mysql_query($strSQL);

	// New Word Document
	$PHPWord = new PHPWord();

	// New portrait section
	$section = $PHPWord->createSection(array('orientation'=>'landscape'));

	$PHPWord->addFontStyle('rStyle', array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>16));
	$PHPWord->addParagraphStyle('pStyle', array('align'=>'center', 'spaceAfter'=>100));
	$PHPWord->addParagraphStyle('sStyle', array('align'=>'left', 'spaceAfter'=>100));
	$section->addText('ตารางสรุปผลการศึกษาต่อในระดับอุดมศึกษา', 'rStyle', 'pStyle');
	$section->addText('ของนักเรียนชั้นมัธยมศึกษาปีที่ 6  ปีการศึกษา 2559  ( ราชวิทย์ 48 )', 'rStyle', 'pStyle');
	// Define table style arrays
	$styleTable = array('borderSize'=>2, 'borderColor'=>'000000', 'cellMargin'=>80, 'TH SarabunPSK'=>true, 'size'=>14);

	// Define cell style arrays
	$styleCell = array('valign'=>'center','align'=>'center');
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
	$table->addCell(1000, $styleCell)->addText('ลำดับ', $fontStyle);
	$table->addCell(7000, $styleCell)->addText('ผลการศึกษาต่อในระดับอุดมศึกษา', $fontStyle);
	$table->addCell(3000, $styleCell)->addText('จำนวน', $fontStyle);
	$table->addCell(3000, $styleCell)->addText('ร้อยละ', $fontStyle);
	// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('1',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('ผลการศึกษาต่อในระดับอุดมศึกษา',array('bold'=>true, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
	// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('',array('bold'=>false,'TH SarabunPSK'=>true, 'size'=>14 , 'borderBottomSize'=>3,'borderBottomColor'=>'ffffff')) ;
	$table->addCell(7000)->addText('ระบบรับตรง /โควตา / Admission',array('bold'=>true, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('borderBottomSize'=>3,'borderBottomColor'=>'ffffff','bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('borderBottomSize'=>3,'borderBottomColor'=>'ffffff','bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
	// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('',array('bold'=>false,'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('-สถาบันการศึกษาของรัฐบาล',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText($Universityzonea,array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText(number_format($Universityperzonea, 2, '.', ''),array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
	// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('',array('bold'=>false,'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('-สถาบันการศึกษาของเอกชน',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText($Universityzoneb,array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText(number_format($Universityperzoneb, 2, '.', ''),array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
		// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('',array('bold'=>false,'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('สถาบันการศึกษาอื่นๆ',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
			// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('',array('bold'=>false,'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('-สถาบันการบินพลเรือน',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
				// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('',array('bold'=>false,'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('-โรงเรียนจ่าอากาศ',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
				// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('',array('bold'=>false,'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('-โรงเรียนนายสิบตำรวจ',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
					// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('',array('bold'=>false,'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('รวม',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText($Universityzoneaa,array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText(number_format($Universityperzoneaa, 2, '.', ''),array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
						// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('2',array('bold'=>false,'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('อื่น ๆ',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText('',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));

	$table->addRow();
	$table->addCell(1000)->addText('',array('bold'=>false,'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('-ไม่ศึกษาต่อในระดับอุดมศึกษาปีการศึกษา 2559',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText($Universityaaa,array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText(number_format($Universityperaaa, 2, '.', ''),array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));

							// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('',array('bold'=>false, 'borderTopColor'=>'ffffff','TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('-ศึกษาต่อต่างประเทศ',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText($Universitybbb,array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText(number_format($Universityperbbb, 2, '.', ''),array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
							// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('',array('bold'=>false, 'borderTopColor'=>'ffffff','TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('-รอแอดมิชชั่น',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText($Universityccc,array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText(number_format($Universityperccc, 2, '.', ''),array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));
							// Add more rows / cells
	$table->addRow();
	$table->addCell(1000)->addText('',array('bold'=>false, 'borderTopColor'=>'ffffff','TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(7000)->addText('รวม',array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText($Universityzoned,array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14)) ;
	$table->addCell(3000)->addText(number_format($Universityzoned, 2, '.', ''),array('bold'=>false, 'TH SarabunPSK'=>true, 'size'=>14));

	$section->addText('');
	$section->addText($datetime,  array('TH SarabunPSK'=>true, 'size'=>16));

	// Save File
	$objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
	$objWriter->save('Texts.docx');

	// Your browser will name the file "myFile.docx"
	// regardless of what it's named on the server
	header("Content-Disposition: attachment; filename='ข้อมูลมหาลัยราชวิทย์_๔๘_ห้อง_1.docx'");
	readfile('Texts.docx'); // or echo file_get_contents($temp_file);
	//unlink('Texts.docx');  // remove temp file

?>
