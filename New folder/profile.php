
<?php
	session_start();
	if(!isset($_SESSION['Username']))
	{
		echo "<script>window.location='wrong.html';</script>";
		exit();
	}
		include("php/connect.php");

	$Username	= $_SESSION['Username'];
	$sql		= "select * from member where Username='$Username' ";
	$query		= mysql_query($sql) or die("error=$sql");
	$row		= mysql_fetch_array($query);

?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
				<link rel="stylesheet" href="css/popup.css">
        <link rel="stylesheet" href="css/list-menu/list-menu.css" />
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <style media="screen">
          .inputdata{
            background-color: #fff;
            width: 100%;
            height: 55px;
            border: 0px;
            box-shadow: 0 1px 0 rgba(0,0,0,0.2);
          }
          .inputdata::-webkit-input-placeholder {color:#777777; font-size: 15px;transition: all 0.2s ease-out 0.1s;}
          .inputdata:-ms-input-placeholder {color:#777777; font-size: 15px;transition: all 0.2s ease-out 0.1s;}
          .inputdata:hover::-webkit-input-placeholder {color:#9c9c9c; font-size: 15px;transition: all 0.2s ease-out 0.1s;}
          .inputdata:hover::-ms-input-placeholder {color:#9c9c9c; font-size: 15px;transition: all 0.2s ease-out 0.1s;}

          #submit{
            width: 100%;
            font-size: 20px;
            border-radius: 25px;
            background-color: #fff;
            border-color: #000;
            height: 40px;
            transition: all 0.2s ease-out 0.1s;
            outline: none;
          }
          #submit:hover{
            width: 100%;
            font-size: 20px;
            border-radius: 25px;
            background-color: #000;
            border-color: #000;
            color: #fff;
            height: 40px;
            outline: none;
          }
					#titletable{
						text-align: left;
						font-size: 20px;
						padding-bottom: 20px;
					}
					#center-text-profile-submit{
						font-size: 20px;
						padding-left: 10px;
						height: 45px;
						color: #000;
						border-color: #000;
						background-color: #fff;
						width: 200px;
						outline: none;
						transition: all 0.2s ;
					}
					#center-text-profile-submit:hover{
						font-size: 20px;
						padding-left: 10px;
						height: 45px;
						color: #fff;
						border-color: #000;
						background-color: #000;
						width: 200px;
						outline: none;
					}
					#profile-edit{
						display: inline;
					  font-family: 'Prompt', sans-serif;
					  font-size: 40px;
					  text-align: center;
					  position: absolute;
					  margin: auto;
					  top: -500px;
					  right: 0;
					  bottom: 0;
					  left: 0;
					  width: 90%;
					  height: 50px;
					}
          #popupBody {

              padding: 20px;
              font-size: 15px;
              text-align: left;
              background-color: #fff;
          }
          #popupBody ul {
              height: 50px;
          }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
       <!-- preloader -->
      		<div id="loader-wrapper">
      			<div id="loader"></div>
      			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
      		</div>
       <!--content-->
           <!-- text title center -->
           <nav class="profile">
						  <nav id="profile-edit">แก้ไขข้อมูลส่วนตัว
                <a id="modal_trigger" href="#modal" class="btn">ข้อมูลเก่า</a>
            		<div id="modal" class="popupContainer" style="display:none;">
            				<header class="popupHeader">
            						<span class="header_title">ข้อมูลเก่า</span>
            						<span class="modal_close"><i class="fa fa-times"></i></span>
            				</header>
            				<section id="popupBody">
							  <ul>รหัสประจำตัว &nbsp: <?=$row['Username']?></ul>
							  <ul>ชื่อ &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: นาย <?=$row['Name']?> <?=$row['Lastname']?></ul>
							  <ul>มหาวิทยาลัย &nbsp&nbsp: <?=$row['University']?></ul>
							  <ul>คณะ/สาขา &nbsp&nbsp&nbsp&nbsp: <?=$row['Faculty']?></ul>
							  <ul>หมายเหตุ &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?=$row['Note']?></ul>
							  <ul>แก้ไขล่าสุดเมื่อวันที่ : <?=$row['Date']?></ul>
            				</section>
            		</div>
              </nav>
           </nav>
           <!-- form content -->
           <nav class="center-text-profile-content">
             <ul>[update ข้อมูลใหม่] แก้ไขข้อมูลส่วนตัวตามความจริง</ul>
             <ul>
               <form class="" action="editsave.php" method="post"><br />
                  <table id="table-form" border="0" >
                    <tbody>
                      <tr>
                        <td>มหาวิทยาลัย :</td>
                      </tr>
                      <tr>
                        <td>
                          <section >
            									<select id="cd-dropdown" name="cd-dropdown" class="cd-select" >
            										<option value="-1" selected>เลือกมหาวิทยาลัยที่นี่</option>
            										<option value="จุฬาลงกรณ์มหาวิทยาลัย" >01 จุฬาลงกรณ์มหาวิทยาลัย</option>
            										<option value="มหาวิทยาลัยเกษตรศาสตร์"  >02 มหาวิทยาลัยเกษตรศาสตร์</option>
            										<option value="มหาวิทยาลัยขอนแก่น"  >03 มหาวิทยาลัยขอนแก่น</option>
            										<option value="มหาวิทยาลัยเชียงใหม่"  >04 มหาวิทยาลัยเชียงใหม่</option>
            										<option value="มหาวิทยาลัยทักษิณ"  >05 มหาวิทยาลัยทักษิณ</option>
            										<option value="มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี"  >06 มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี</option>
            										<option value="มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ"  >07 มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</option>
            										<option value="มหาวิทยาลัยเทคโนโลยีสุรนารี"  >08 มหาวิทยาลัยเทคโนโลยีสุรนารี</option>
            										<option value="มหาวิทยาลัยธรรมศาสตร์"  >09 มหาวิทยาลัยธรรมศาสตร์</option>
            										<option value="มหาวิทยาลัยนครพนม"  >10 มหาวิทยาลัยนครพนม</option>
            										<option value="มหาวิทยาลัยนราธิวาสราชนครินทร์"  >11 มหาวิทยาลัยนราธิวาสราชนครินทร์</option>
            										<option value="มหาวิทยาลัยนเรศวร"  >12 มหาวิทยาลัยนเรศวร</option>
            										<option value="มหาวิทยาลัยบูรพา"  >13 มหาวิทยาลัยบูรพา</option>
            										<option value="มหาวิทยาลัยพะเยา"  >14 มหาวิทยาลัยพะเยา</option>
            										<option value="มหาวิทยาลัยมหาสารคาม"  >15 มหาวิทยาลัยมหาสารคาม</option>
            										<option value="มหาวิทยาลัยมหิดล"  >16 มหาวิทยาลัยมหิดล</option>
            										<option value="มหาวิทยาลัยแม่โจ้"  >17 มหาวิทยาลัยแม่โจ้</option>
            										<option value="มหาวิทยาลัยแม่ฟ้าหลวง"  >18 มหาวิทยาลัยแม่ฟ้าหลวง</option>
            										<option value="มหาวิทยาลัยวลัยลักษณ์a"  >19 มหาวิทยาลัยวลัยลักษณ์a</option>
            										<option value="มหาวิทยาลัยศรีนครินทรวิโรฒ"  >20 มหาวิทยาลัยศรีนครินทรวิโรฒ</option>
            										<option value="มหาวิทยาลัยศิลปากร"  >21 มหาวิทยาลัยศิลปากร</option>
            										<option value="มหาวิทยาลัยสงขลานครินทร์"  >22 มหาวิทยาลัยสงขลานครินทร์</option>
            										<option value="มหาวิทยาลัยอุบลราชธานี"  >23 มหาวิทยาลัยอุบลราชธานี</option>
            										<option value="สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง"  >24 สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</option>
            										<option value="สถาบันเทคโนโลยีปทุมวัน"  >25 สถาบันเทคโนโลยีปทุมวัน</option>
            										<option value="มหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ"  >26 มหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ</option>
            										<option value="มหาวิทยาลัยเทคโนโลยีราชมงคลตะวันออก"  >27 มหาวิทยาลัยเทคโนโลยีราชมงคลตะวันออก</option>
            										<option value="มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี"  >28 มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี</option>
            										<option value="มหาวิทยาลัยเทคโนโลยีราชมงคลพระนคร"  >29 มหาวิทยาลัยเทคโนโลยีราชมงคลพระนคร</option>
            										<option value="มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์"  >30 มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์</option>
            										<option value="มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา"  >31 มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา</option>
            										<option value="มหาวิทยาลัยเทคโนโลยีราชมงคลศรีวิชัย"  >32 มหาวิทยาลัยเทคโนโลยีราชมงคลศรีวิชัย</option>
            										<option value="มหาวิทยาลัยเทคโนโลยีราชมงคลสุวรรณภูมิ"  >33 มหาวิทยาลัยเทคโนโลยีราชมงคลสุวรรณภูมิ</option>
            										<option value="มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน"  >34 มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน</option>
            										<option value="มหาวิทยาลัยราชภัฏกาญจนบุรี"  >35 มหาวิทยาลัยราชภัฏกาญจนบุรี</option>
            										<option value="มหาวิทยาลัยราชภัฏจันทรเกษม"  >36 มหาวิทยาลัยราชภัฏจันทรเกษม</option>
            										<option value="มหาวิทยาลัยราชภัฏธนบุรี"  >37 มหาวิทยาลัยราชภัฏธนบุรี</option>
            										<option value="มหาวิทยาลัยราชภัฏนครสวรรค์"  >38 มหาวิทยาลัยราชภัฏนครสวรรค์</option>
            										<option value="มหาวิทยาลัยราชภัฏบ้านสมเด็จเจ้าพระยา"  >39 มหาวิทยาลัยราชภัฏบ้านสมเด็จเจ้าพระยา</option>
            										<option value="มหาวิทยาลัยราชภัฏเพชรบุรี"  >40 มหาวิทยาลัยราชภัฏเพชรบุรี</option>
            										<option value="มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา"  >41 มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา</option>
            										<option value="มหาวิทยาลัยราชภัฏพิบูลสงคราม"  >42 มหาวิทยาลัยราชภัฏพิบูลสงคราม</option>
            										<option value="มหาวิทยาลัยราชภัฏมหาสารคาม"  >43 มหาวิทยาลัยราชภัฏมหาสารคาม</option>
            										<option value="มหาวิทยาลัยราชภัฏราชนครินทร์"  >44 มหาวิทยาลัยราชภัฏราชนครินทร์</option>
            										<option value="มหาวิทยาลัยราชภัฏวไลยอลงกรณ์"  >45 มหาวิทยาลัยราชภัฏวไลยอลงกรณ์</option>
            										<option value="มหาวิทยาลัยราชภัฏสวนสุนันทา"  >46 มหาวิทยาลัยราชภัฏสวนสุนันทา</option>
            										<option value="มหาวิทยาลัยสวนดุสิต"  >47 มหาวิทยาลัยสวนดุสิต</option>
            										<option value="มหาวิทยาลัยกรุงเทพ"  >48 มหาวิทยาลัยกรุงเทพ</option>
																<option value="มหาวิทยาลัยอัสสัมชัญ">49 มหาวิทยาลัยอัสสัมชัญ</option>
            										<option value="วิทยาลัยพยาบาลสภากาชาดไทย"  >50 วิทยาลัยพยาบาลสภากาชาดไทย</option>
            										<option value="วิทยาลัยพยาบาลตำรวจ"  >51 วิทยาลัยพยาบาลตำรวจ</option>
            										<option value="สถาบันการพลศึกษา"  >52 สถาบันการพลศึกษา</option>
            										<option value="สถาบันการบินพลเรือน">53 สถาบันการบินพลเรือน</option>
            										<option value="มหาวิทยาลัยนานาชาติแสตมฟอร์ด">54 มหาวิทยาลัยนานาชาติแสตมฟอร์ด</option>
            										<option value="รอแอดมิชชั่น"  >55 รอแอดมิชชั่น</option>
            										<option value="ศึกษาต่อต่างประเทศ"  >56 ศึกษาต่อต่างประเทศ</option>
            										<option value="ยังไม่มีที่เรียน"  >57 ยังไม่มีที่เรียน</option>
            									</select>
            							</section>
                        </td>
                      </tr>
                      <tr>
                        <td>คณะ/สาขา&nbsp&nbsp&nbsp: </td>
                      </tr>
                      <tr>
                        <td><input type="text" id="text" name="faculty" class="inputdata" placeholder="คณะ/สาขา"></td>
                      </tr>
                      <tr>
                        <td>หมายเหตุ&nbsp&nbsp&nbsp&nbsp&nbsp:</td>
                      </tr>
                      <tr>
                        <td>
                          <input type="text" id="text" name="note" class="inputdata" placeholder="โครงการรับตรง,โควตากีฬา,โควตาเรียนดี,ทุนเรียนฟรี,ทุนเรียนดี,โควตาอื่นๆ,อื่นๆ">
                        </td>
                      </tr>
                      <tr>
                        <td><input type="submit" id="submit" value="SEND"></td>
                      </tr>
                    </tbody>
                  </table>
               </form>
             </ul>

           </nav>

        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- popup -->
        <script src='http://andwecode.com/wp-content/uploads/2015/10/jquery.leanModal.min_.js'></script>
        <script type="text/javascript">
          // Plugin options and our code
          $("#modal_trigger").leanModal({
          		top: 100,
          		overlay: 0.6,
          		closeButton: ".modal_close"
          });
        </script>
        <!-- menu dropdown -->
        <script type="text/javascript" src="js/jquery.dropdown.js"></script>

    </body>
</html>
