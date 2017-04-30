<?php

  $conn   = mysql_connect("localhost","root","")or die(mysql_error());
  $db   = mysql_select_db("kc47entcom_kc48")or die("cannot select DB");
  mysql_query("SET NAMES UTF8"); 

  //$username = $_SESSION['username'];

  $sql    = "select * from member where Username";
  $query    = mysql_query($sql) or die("error=$sql");
//  $row    = mysql_fetch_array($query);

  $no=0;
  $University1 =0; 
  $University2 =0; 
  $University3 =0; 
  $University4 =0; 
  $University5 =0; 
  $University6 =0; 
  $University7 =0; 
  $University8 =0; 
  $University9 =0; 
  $University10 =0; 
  $University11 =0; 
  $University12 =0; 
  $University13 =0; 
  $University14 =0; 
  $University15 =0; 
  $University16 =0; 
  $University17 =0; 
  $University18 =0; 
  $University19 =0; 
  $University20 =0; 
  $University21 =0; 
  $University22 =0; 
  $University23 =0; 
  $University24 =0; 
  $University25 =0; 
  $University26 =0; 
  $University27 =0; 
  $University28 =0; 
  $University29 =0; 
  $University30 =0; 
  $University31 =0; 
  $University32 =0; 
  $University33 =0; 
  $University34 =0; 
  $University35 =0; 
  $University36 =0; 
  $University37 =0; 
  $University38 =0; 
  $University39 =0; 
  $University40 =0; 
  $University41 =0; 
  $University42 =0; 
  $University43 =0; 
  $University44 =0; 
  $University45 =0; 
  $University46 =0; 
  $University47 =0; 
  $University48 =0; 
  $University49 =0; 
  $University50 =0; 
  $University51 =0; 
  $University52 =0; 
  $University53 =0; 
  $University54 =0;
  $University55 =0;
    $University56 =0;
    $University57 =0;   
    $University58 =0;   
    $University59 =0;      
  $University60 =0; 
 $University61 =0;
 $University62 =0;
 $University63 =0;
 $University64 =0;
 $University65 =0;
 $University66 =0;
 $University67 =0;
 $University68 =0;
 $University69 =0;
 $University70 =0;
 $University71 =0;
 $University72 =0;
 $University73 =0;
 $University74 =0;
 $University75 =0;
 
  $Universityaaa=0;
   $Universitybbb=0;
    $Universityccc=0;
     $Universityddd=0;

   while ($row = mysql_fetch_array($query)){
    
if(strcmp($row['University'],"จุฬาลงกรณ์มหาวิทยาลัย")==0) {$University1 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเกษตรศาสตร์")==0) {$University2 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยขอนแก่น")==0) {$University3 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเชียงใหม่")==0) {$University4 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยทักษิณ")==0) {$University5 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ")==0) {$University6 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี")==0) {$University7 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีสุรนารี")==0) {$University8 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยธรรมศาสตร์")==0) {$University9 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยนครพนม")==0) {$University10 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยนราธิวาสราชนครินทร์")==0) {$University11 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยนเรศวร")==0) {$University12 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยบูรพา")==0) {$University13 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยพะเยา")==0) {$University14 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยมหาสารคาม")==0) {$University15 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยมหิดล")==0) {$University16 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยแม่โจ้")==0) {$University17 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยแม่ฟ้าหลวง")==0) {$University18 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยวลัยลักษณ์")==0) {$University19 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยศรีนครินทรวิโรฒ")==0) {$University20 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยศิลปากร")==0) {$University21 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยสงขลานครินทร์")==0) {$University22 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยอุบลราชธานี")==0) {$University23 ++;} 
else if(strcmp($row['University'],"สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง")==0) {$University24 ++;} 
else if(strcmp($row['University'],"สถาบันเทคโนโลยีปทุมวัน")==0) {$University25 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ")==0) {$University26 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีราชมงคลตะวันออก")==0) {$University27 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี")==0) {$University28 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีราชมงคลพระนคร")==0) {$University29 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์")==0) {$University30 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา")==0) {$University31 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีราชมงคลศรีวิชัย")==0) {$University32 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีราชมงคลสุวรรณภูมิ")==0) {$University33 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน")==0) {$University34 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏกาญจนบุรี")==0) {$University35 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏจันทรเกษม")==0) {$University36 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏธนบุรี")==0) {$University37 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏนครสวรรค์")==0) {$University38 ++;} 
else if(strcmp($row['University'],"สถาบันเทคโนโลยีนานาชาติสิรินธร มหาวิทยาลัยธรรมศาสตร์")==0) {$University39 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยรามคำแหง")==0) {$University40 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏนครปฐม")==0) {$University41 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏอุบลราชธานี")==0) {$University42 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏบ้านสมเด็จเจ้าพระยา")==0) {$University43 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏเพชรบุรี")==0) {$University44 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา")==0) {$University45 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏพิบูลสงคราม")==0) {$University46 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏมหาสารคาม")==0) {$University47 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏราชนครินทร์")==0) {$University48 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏวไลยอลงกรณ์")==0) {$University49 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏสวนสุนันทา")==0) {$University50 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยหอการค้าไทย")==0) {$University51 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยธุรกิจบัณฑิตย์")==0) {$University52 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชพฤกษ์")==0) {$University53 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยศรีปทุม")==0) {$University54 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีมหานคร")==0) {$University55 ++;} 
else if(strcmp($row['University'],"วิทยาลัยดุสิตธานี")==0) {$University56 ++;} 
else if(strcmp($row['University'],"สถาบันกันตนา")==0) {$University57 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยรังสิต")==0) {$University58 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยสวนดุสิต")==0) {$University59 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยกรุงเทพ")==0) {$University60 ++;} 
else if(strcmp($row['University'],"วิทยาลัยพยาบาลสภากาชาดไทย")==0) {$University61 ++;} 
else if(strcmp($row['University'],"วิทยาลัยพยาบาลตำรวจ")==0) {$University62 ++;} 
else if(strcmp($row['University'],"สถาบันการพลศึกษา")==0) {$University63 ++;} 
else if(strcmp($row['University'],"สถาบันการบินพลเรือน")==0) {$University64 ++;} 
else if(strcmp($row['University'],"โรงเรียนจ่าอากาศ")==0) {$University65 ++;} 
else if(strcmp($row['University'],"โรงเรียนนายสิบตำรวจ")==0) {$University66 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยนานาชาติแสตมฟอร์ด")==0) {$University67 ++;} 
else if(strcmp($row['University'],"วิทยาลัยเทคโนโลยีปัญญาภิวัฒน์")==0) {$University68 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏภูเก็ต")==0) {$University69 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยอัสสัมชัญ")==0) {$University70 ++;} 
else if(strcmp($row['University'],"สถาบันอาศรมศิลป์")==0) {$University71 ++;} 
else if(strcmp($row['University'],"ไม่ศึกษาต่อในระดับอุดมศึกษา")==0) {$Universityaaa ++;} 
else if(strcmp($row['University'],"ศึกษาต่อต่างประเทศ")==0) {$Universitybbb ++;} 
else if(strcmp($row['University'],"รอแอดมิชชั่น")==0) {$Universityccc ++;} 
else if(strcmp($row['University'],NULL)==0) {$Universityddd ++;} 

    $no++;
   }
   
   

$Universityper1 = $University1 * 100/$no; 
$Universityper2 = $University2 * 100/$no; 
$Universityper3 = $University3 * 100/$no; 
$Universityper4 = $University4 * 100/$no; 
$Universityper5 = $University5 * 100/$no; 
$Universityper6 = $University6 * 100/$no; 
$Universityper7 = $University7 * 100/$no; 
$Universityper8 = $University8 * 100/$no; 
$Universityper9 = $University9 * 100/$no; 
$Universityper10 = $University10 * 100/$no; 
$Universityper11 = $University11 * 100/$no; 
$Universityper12 = $University12 * 100/$no; 
$Universityper13 = $University13 * 100/$no; 
$Universityper14 = $University14 * 100/$no; 
$Universityper15 = $University15 * 100/$no; 
$Universityper16 = $University16 * 100/$no; 
$Universityper17 = $University17 * 100/$no; 
$Universityper18 = $University18 * 100/$no; 
$Universityper19 = $University19 * 100/$no; 
$Universityper20 = $University20 * 100/$no; 
$Universityper21 = $University21 * 100/$no; 
$Universityper22 = $University22 * 100/$no; 
$Universityper23 = $University23 * 100/$no; 
$Universityper24 = $University24 * 100/$no; 
$Universityper25 = $University25 * 100/$no; 
$Universityper26 = $University26 * 100/$no; 
$Universityper27 = $University27 * 100/$no; 
$Universityper28 = $University28 * 100/$no; 
$Universityper29 = $University29 * 100/$no; 
$Universityper30 = $University30 * 100/$no; 
$Universityper31 = $University31 * 100/$no; 
$Universityper32 = $University32 * 100/$no; 
$Universityper33 = $University33 * 100/$no; 
$Universityper34 = $University34 * 100/$no; 
$Universityper35 = $University35 * 100/$no; 
$Universityper36 = $University36 * 100/$no; 
$Universityper37 = $University37 * 100/$no; 
$Universityper38 = $University38 * 100/$no; 
$Universityper39 = $University39 * 100/$no; 
$Universityper40 = $University40 * 100/$no; 
$Universityper41 = $University41 * 100/$no; 
$Universityper42 = $University42 * 100/$no; 
$Universityper43 = $University43 * 100/$no; 
$Universityper44 = $University44 * 100/$no; 
$Universityper45 = $University45 * 100/$no; 
$Universityper46 = $University46 * 100/$no; 
$Universityper47 = $University47 * 100/$no; 
$Universityper48 = $University48 * 100/$no; 
$Universityper49 = $University49 * 100/$no; 
$Universityper50 = $University50 * 100/$no; 
$Universityper51 = $University51 * 100/$no; 
$Universityper52 = $University52 * 100/$no; 
$Universityper53 = $University53 * 100/$no; 
$Universityper54 = $University54 * 100/$no; 
$Universityper55 = $University55 * 100/$no; 
$Universityper56 = $University56 * 100/$no; 
$Universityper57 = $University57 * 100/$no; 
$Universityper58 = $University58 * 100/$no; 
$Universityper59 = $University59 * 100/$no; 
$Universityper60 = $University60 * 100/$no; 
$Universityper61 = $University61 * 100/$no; 
$Universityper62 = $University62 * 100/$no; 
$Universityper63 = $University63 * 100/$no; 
$Universityper64 = $University64 * 100/$no; 
$Universityper65 = $University65 * 100/$no; 
$Universityper66 = $University66 * 100/$no; 
$Universityper67 = $University67 * 100/$no; 
$Universityper68 = $University68 * 100/$no; 
$Universityper69 = $University69 * 100/$no; 
$Universityper70 = $University70 * 100/$no; 
$Universityper71 = $University71 * 100/$no; 
$Universityperaaa = $Universityaaa * 100/$no; 
$Universityperbbb = $Universitybbb * 100/$no; 
$Universityperccc = $Universityccc * 100/$no; 
$Universityperddd = $Universityddd * 100/$no;


$Universityzonea = $University1 
+$University2 
+$University3 
+$University4 
+$University5 
+$University6 
+$University7 
+$University8 
+$University9 
+$University10 
+$University11 
+$University12 
+$University13 
+$University14 
+$University15 
+$University16 
+$University17 
+$University18 
+$University19 
+$University20 
+$University21 
+$University22 
+$University23 
+$University24 
+$University25 
+$University26 
+$University27 
+$University28 
+$University29 
+$University30 
+$University31 
+$University32 
+$University33 
+$University34 
+$University35 
+$University36 
+$University37 
+$University38 
+$University39 
+$University40 
+$University41 
+$University42 
+$University43 
+$University44 
+$University45 
+$University46 
+$University47 
+$University48 
+$University49 
+$University50 
+$University61 
+$University62 
+$University63 
+$University69 
+$University71 ; 
$Universityperzonea = $Universityzonea * 100/$no;
$Universityzoneb = $University51 
+$University52 
+$University53 
+$University54 
+$University55 
+$University56 
+$University57 
+$University58 
+$University59 
+$University60 
+$University67 
+$University68 
+$University70 ;
$Universityperzoneb = $Universityzoneb * 100/$no;
$Universityzonec = $Universityper64+$Universityper65+$Universityper66 ;
$Universityperzonec = $Universityzonec * 100/$no;
$Universityzoned = $Universityaaa 
+$Universitybbb 
+$Universityccc 
+$Universityddd ;
$Universityperzoned = $Universityzoned * 100/$no;
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
  <title></title>
</head>
<body>
                
    <section class="content">
   
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">มหาวิทยาลัยของรัฐบาล</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>สถาบันของรัฐบาล</th>
                  <th>จำนวน</th>
                  <th>ร้อยละ</th>
                </tr>
                </thead>
                <tbody>
                      <tr>
                        <td>1</td>
                        <td>จุฬาลงกรณ์มหาวิทยาลัย</td>
                        <td><?php echo $University1?></td>
                        <td><?php echo number_format($Universityper1, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>2</td>
                        <td>มหาวิทยาลัยเกษตรศาสตร์</td>
                        <td><?php echo $University2?></td>
                        <td><?php echo number_format($Universityper2, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>3</td>
                        <td>มหาวิทยาลัยขอนแก่น</td>
                        <td><?php echo $University3?></td>
                        <td><?php echo number_format($Universityper3, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>4</td>
                        <td>มหาวิทยาลัยเชียงใหม่</td>
                        <td><?php echo $University4?></td>
                        <td><?php echo number_format($Universityper4, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>5</td>
                        <td>มหาวิทยาลัยทักษิณ</td>
                        <td><?php echo $University5?></td>
                        <td><?php echo number_format($Universityper5, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>6</td>
                        <td>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</td>
                        <td><?php echo $University6?></td>
                        <td><?php echo number_format($Universityper6, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>7</td>
                        <td>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี</td>
                        <td><?php echo $University7?></td>
                        <td><?php echo number_format($Universityper7, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>8</td>
                        <td>มหาวิทยาลัยเทคโนโลยีสุรนารี</td>
                        <td><?php echo $University8?></td>
                        <td><?php echo number_format($Universityper8, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>9</td>
                        <td>มหาวิทยาลัยธรรมศาสตร์</td>
                        <td><?php echo $University9?></td>
                        <td><?php echo number_format($Universityper9, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>10</td>
                        <td>มหาวิทยาลัยนครพนม</td>
                        <td><?php echo $University10?></td>
                        <td><?php echo number_format($Universityper10, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>11</td>
                        <td>มหาวิทยาลัยนราธิวาสราชนครินทร์</td>
                        <td><?php echo $University11?></td>
                        <td><?php echo number_format($Universityper11, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>12</td>
                        <td>มหาวิทยาลัยนเรศวร</td>
                        <td><?php echo $University12?></td>
                        <td><?php echo number_format($Universityper12, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>13</td>
                        <td>มหาวิทยาลัยบูรพา</td>
                        <td><?php echo $University13?></td>
                        <td><?php echo number_format($Universityper13, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>14</td>
                        <td>มหาวิทยาลัยพะเยา</td>
                        <td><?php echo $University14?></td>
                        <td><?php echo number_format($Universityper14, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>15</td>
                        <td>มหาวิทยาลัยมหาสารคาม</td>
                        <td><?php echo $University15?></td>
                        <td><?php echo number_format($Universityper15, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>16</td>
                        <td>มหาวิทยาลัยมหิดล</td>
                        <td><?php echo $University16?></td>
                        <td><?php echo number_format($Universityper16, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>17</td>
                        <td>มหาวิทยาลัยแม่โจ้</td>
                        <td><?php echo $University17?></td>
                        <td><?php echo number_format($Universityper17, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>18</td>
                        <td>มหาวิทยาลัยแม่ฟ้าหลวง</td>
                        <td><?php echo $University18?></td>
                        <td><?php echo number_format($Universityper18, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>19</td>
                        <td>มหาวิทยาลัยวลัยลักษณ์</td>
                        <td><?php echo $University19?></td>
                        <td><?php echo number_format($Universityper19, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>20</td>
                        <td>มหาวิทยาลัยศรีนครินทรวิโรฒ</td>
                        <td><?php echo $University20?></td>
                        <td><?php echo number_format($Universityper20, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>21</td>
                        <td>มหาวิทยาลัยศิลปากร</td>
                        <td><?php echo $University21?></td>
                        <td><?php echo number_format($Universityper21, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>22</td>
                        <td>มหาวิทยาลัยสงขลานครินทร์</td>
                        <td><?php echo $University22?></td>
                        <td><?php echo number_format($Universityper22, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>23</td>
                        <td>มหาวิทยาลัยอุบลราชธานี</td>
                        <td><?php echo $University23?></td>
                        <td><?php echo number_format($Universityper23, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>24</td>
                        <td>สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</td>
                        <td><?php echo $University24?></td>
                        <td><?php echo number_format($Universityper24, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>25</td>
                        <td>สถาบันเทคโนโลยีปทุมวัน</td>
                        <td><?php echo $University25?></td>
                        <td><?php echo number_format($Universityper25, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>26</td>
                        <td>มหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ</td>
                        <td><?php echo $University26?></td>
                        <td><?php echo number_format($Universityper26, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>27</td>
                        <td>มหาวิทยาลัยเทคโนโลยีราชมงคลตะวันออก</td>
                        <td><?php echo $University27?></td>
                        <td><?php echo number_format($Universityper27, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>28</td>
                        <td>มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี</td>
                        <td><?php echo $University28?></td>
                        <td><?php echo number_format($Universityper28, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>29</td>
                        <td>มหาวิทยาลัยเทคโนโลยีราชมงคลพระนคร</td>
                        <td><?php echo $University29?></td>
                        <td><?php echo number_format($Universityper29, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>30</td>
                        <td>มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์</td>
                        <td><?php echo $University30?></td>
                        <td><?php echo number_format($Universityper30, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>31</td>
                        <td>มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา</td>
                        <td><?php echo $University31?></td>
                        <td><?php echo number_format($Universityper31, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>32</td>
                        <td>มหาวิทยาลัยเทคโนโลยีราชมงคลศรีวิชัย</td>
                        <td><?php echo $University32?></td>
                        <td><?php echo number_format($Universityper32, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>33</td>
                        <td>มหาวิทยาลัยเทคโนโลยีราชมงคลสุวรรณภูมิ</td>
                        <td><?php echo $University33?></td>
                        <td><?php echo number_format($Universityper33, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>34</td>
                        <td>มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน</td>
                        <td><?php echo $University34?></td>
                        <td><?php echo number_format($Universityper34, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>35</td>
                        <td>มหาวิทยาลัยราชภัฏกาญจนบุรี</td>
                        <td><?php echo $University35?></td>
                        <td><?php echo number_format($Universityper35, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>36</td>
                        <td>มหาวิทยาลัยราชภัฏจันทรเกษม</td>
                        <td><?php echo $University36?></td>
                        <td><?php echo number_format($Universityper36, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>37</td>
                        <td>มหาวิทยาลัยราชภัฏธนบุรี</td>
                        <td><?php echo $University37?></td>
                        <td><?php echo number_format($Universityper37, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>38</td>
                        <td>มหาวิทยาลัยราชภัฏนครสวรรค์</td>
                        <td><?php echo $University38?></td>
                        <td><?php echo number_format($Universityper38, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>39</td>
                        <td>สถาบันเทคโนโลยีนานาชาติสิรินธร มหาวิทยาลัยธรรมศาสตร์</td>
                        <td><?php echo $University39?></td>
                        <td><?php echo number_format($Universityper39, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>40</td>
                        <td>มหาวิทยาลัยรามคำแหง</td>
                        <td><?php echo $University40?></td>
                        <td><?php echo number_format($Universityper40, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>41</td>
                        <td>มหาวิทยาลัยราชภัฏนครปฐม</td>
                        <td><?php echo $University41?></td>
                        <td><?php echo number_format($Universityper41, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>42</td>
                        <td>มหาวิทยาลัยราชภัฏอุบลราชธานี</td>
                        <td><?php echo $University42?></td>
                        <td><?php echo number_format($Universityper42, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>43</td>
                        <td>มหาวิทยาลัยราชภัฏบ้านสมเด็จเจ้าพระยา</td>
                        <td><?php echo $University43?></td>
                        <td><?php echo number_format($Universityper43, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>44</td>
                        <td>มหาวิทยาลัยราชภัฏเพชรบุรี</td>
                        <td><?php echo $University44?></td>
                        <td><?php echo number_format($Universityper44, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>45</td>
                        <td>มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา</td>
                        <td><?php echo $University45?></td>
                        <td><?php echo number_format($Universityper45, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>46</td>
                        <td>มหาวิทยาลัยราชภัฏพิบูลสงคราม</td>
                        <td><?php echo $University46?></td>
                        <td><?php echo number_format($Universityper46, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>47</td>
                        <td>มหาวิทยาลัยราชภัฏมหาสารคาม</td>
                        <td><?php echo $University47?></td>
                        <td><?php echo number_format($Universityper47, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>48</td>
                        <td>มหาวิทยาลัยราชภัฏราชนครินทร์</td>
                        <td><?php echo $University48?></td>
                        <td><?php echo number_format($Universityper48, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>49</td>
                        <td>มหาวิทยาลัยราชภัฏวไลยอลงกรณ์</td>
                        <td><?php echo $University49?></td>
                        <td><?php echo number_format($Universityper49, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>50</td>
                        <td>มหาวิทยาลัยราชภัฏสวนสุนันทา</td>
                        <td><?php echo $University50?></td>
                        <td><?php echo number_format($Universityper50, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>51</td>
                        <td>วิทยาลัยพยาบาลสภากาชาดไทย</td>
                        <td><?php echo $University61?></td>
                        <td><?php echo number_format($Universityper61, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>52</td>
                        <td>วิทยาลัยพยาบาลตำรวจ</td>
                        <td><?php echo $University62?></td>
                        <td><?php echo number_format($Universityper62, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>53</td>
                        <td>สถาบันการพลศึกษา</td>
                        <td><?php echo $University63?></td>
                        <td><?php echo number_format($Universityper63, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>54</td>
                        <td>มหาวิทยาลัยราชภัฏภูเก็ต</td>
                        <td><?php echo $University69?></td>
                        <td><?php echo number_format($Universityper69, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>55</td>
                        <td>สถาบันอาศรมศิลป์</td>
                        <td><?php echo $University71?></td>
                        <td><?php echo number_format($Universityper71, 2, '.', ''); ?></td>
                      </tr>
                      <tr>
                        <td>56</td>
                        <td>รวมทั้งหมด</td>
                        <td><?php echo $Universityzonea?></td>
                        <td><?php echo number_format($Universityperzonea, 2, '.', ''); ?></td>
                      </tr>
                </tbody>

              </table>
            </div>
          </div>
          <!-- /.box University 1 -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row University 1 -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">มหาวิทยาลัยของเอกชน</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>สถาบันของเอกชน</th>
                  <th>จำนวน</th>
                  <th>ร้อยละ</th>
                </tr>
                </thead>
                <tbody>
                      <tr>
                        <td>1</td>
                        <td>มหาวิทยาลัยหอการค้าไทย</td>
                        <td><?php echo $University51?></td>
                        <td><?php echo number_format($Universityper51, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>2</td>
                        <td>มหาวิทยาลัยธุรกิจบัณฑิตย์</td>
                        <td><?php echo $University52?></td>
                        <td><?php echo number_format($Universityper52, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>3</td>
                        <td>มหาวิทยาลัยราชพฤกษ์</td>
                        <td><?php echo $University53?></td>
                        <td><?php echo number_format($Universityper53, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>4</td>
                        <td>มหาวิทยาลัยศรีปทุม</td>
                        <td><?php echo $University54?></td>
                        <td><?php echo number_format($Universityper54, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>5</td>
                        <td>มหาวิทยาลัยเทคโนโลยีมหานคร</td>
                        <td><?php echo $University55?></td>
                        <td><?php echo number_format($Universityper55, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>6</td>
                        <td>วิทยาลัยดุสิตธานี</td>
                        <td><?php echo $University56?></td>
                        <td><?php echo number_format($Universityper56, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>7</td>
                        <td>สถาบันกันตนา</td>
                        <td><?php echo $University57?></td>
                        <td><?php echo number_format($Universityper57, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>8</td>
                        <td>มหาวิทยาลัยรังสิต</td>
                        <td><?php echo $University58?></td>
                        <td><?php echo number_format($Universityper58, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>9</td>
                        <td>มหาวิทยาลัยสวนดุสิต</td>
                        <td><?php echo $University59?></td>
                        <td><?php echo number_format($Universityper59, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>10</td>
                        <td>มหาวิทยาลัยกรุงเทพ</td>
                        <td><?php echo $University60?></td>
                        <td><?php echo number_format($Universityper60, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>11</td>
                        <td>มหาวิทยาลัยนานาชาติแสตมฟอร์ด</td>
                        <td><?php echo $University67?></td>
                        <td><?php echo number_format($Universityper67, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>12</td>
                        <td>วิทยาลัยเทคโนโลยีปัญญาภิวัฒน์</td>
                        <td><?php echo $University68?></td>
                        <td><?php echo number_format($Universityper68, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>13</td>
                        <td>มหาวิทยาลัยอัสสัมชัญ</td>
                        <td><?php echo $University70?></td>
                        <td><?php echo number_format($Universityper70, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>14</td>
                        <td>รวมทั้งหมด</td>
                        <td><?php echo $Universityzoneb?></td>
                        <td><?php echo number_format($Universityperzoneb, 2, '.', ''); ?></td>
                      </tr>
                </tbody>

              </table>
            </div>
          </div>
          <!-- /.box University 1 -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row University 2 -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">สถาบันอื่น ๆ</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>สถาบันอื่น ๆ</th>
                  <th>จำนวน</th>
                  <th>ร้อยละ</th>
                </tr>
                </thead>
                <tbody>
                      <tr>
                        <td>1</td>
                        <td>สถาบันการบินพลเรือน</td>
                        <td><?php echo $University64?></td>
                        <td><?php echo number_format($Universityper64, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>2</td>
                        <td>โรงเรียนจ่าอากาศ</td>
                        <td><?php echo $University65?></td>
                        <td><?php echo number_format($Universityper65, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>3</td>
                        <td>โรงเรียนนายสิบตำรวจ</td>
                        <td><?php echo $University66?></td>
                        <td><?php echo number_format($Universityper66, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>4</td>
                        <td>รวมทั้งหมด</td>
                        <td><?php echo $Universityzonec?></td>
                        <td><?php echo number_format($Universityperzonec, 2, '.', ''); ?></td>
                      </tr>
                </tbody>

              </table>
            </div>
          </div>
          <!-- /.box University 1 -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row University 3 -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">อื่น ๆ</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ลำดับ</th>
                  <th>อื่น ๆ</th>
                  <th>จำนวน</th>
                  <th>ร้อยละ</th>
                </tr>
                </thead>
                <tbody>
                      <tr>
                        <td>1</td>
                        <td>ไม่ศึกษาต่อในระดับอุดมศึกษา</td>
                        <td><?php echo $Universityaaa?></td>
                        <td><?php echo number_format($Universityperaaa, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>2</td>
                        <td>ศึกษาต่อต่างประเทศ</td>
                        <td><?php echo $Universitybbb?></td>
                        <td><?php echo number_format($Universityperbbb, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>3</td>
                        <td>รอแอดมิชชั่น</td>
                        <td><?php echo $Universityccc?></td>
                        <td><?php echo number_format($Universityperccc, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>4</td>
                        <td>ยังไม่ลงข้อมูล</td>
                        <td><?php echo $Universityddd?></td>
                        <td><?php echo number_format($Universityperddd, 2, '.', ''); ?></td>
                      </tr> 
                      <tr>
                        <td>5</td>
                        <td>รวมทั้งหมด</td>
                        <td><?php echo $Universityzoned?></td>
                        <td><?php echo number_format($Universityperzoned, 2, '.', ''); ?></td>
                      </tr>
                </tbody>

              </table>
            </div>
          </div>
          <!-- /.box University 1 -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row University 4 -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
              
</body>
</html>