<?php

	$conn 	= mysql_connect("localhost","root","")or die(mysql_error());
	$db		= mysql_select_db("kc47entcom_kc48")or die("cannot select DB");
	mysql_query("SET NAMES UTF8"); 

	//$username	= $_SESSION['username'];
	$sql		= "select * from member where Username";
	$query		= mysql_query($sql) or die("error=$sql");
//	$row		= mysql_fetch_array($query);

	
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
	 //$University = $row['University'];
	 
	 while ($row = mysql_fetch_array($query)){
    $no=$row['No'];
 if(strcmp($row['University'],"จุฬาลงกรณ์มหาวิทยาลัย")==0) {$University1 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเกษตรศาสตร์")==0) {$University2 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยขอนแก่น")==0) {$University3 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเชียงใหม่")==0) {$University4 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยทักษิณ")==0) {$University5 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ")==0) {$University6++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี")==0) {$University7++;} 
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
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏบ้านสมเด็จเจ้าพระยา")==0) {$University39 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏเพชรบุรี")==0) {$University40 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา")==0) {$University41 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏพิบูลสงคราม")==0) {$University42 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏมหาสารคาม")==0) {$University43 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏราชนครินทร์")==0) {$University44 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏวไลยอลงกรณ์")==0) {$University45 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏสวนสุนันทา")==0) {$University46 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยสวนดุสิต")==0) {$University47 ++;} 
else if(strcmp($row['University'],"มหาวิทยาลัยกรุงเทพ")==0) {$University48 ++;} 
else if(strcmp($row['University'],"วิทยาลัยพยาบาลสภากาชาดไทย")==0) {$University49 ++;} 
else if(strcmp($row['University'],"วิทยาลัยพยาบาลตำรวจ")==0) {$University50 ++;} 
else if(strcmp($row['University'],"สถาบันการพลศึกษา")==0) {$University51 ++;} 
else if(strcmp($row['University'],"สถาบันการบินพลเรือน")==0) {$University52 ++;} 
else if(strcmp($row['University'],"ไม่ศึกษาต่อในระดับอุดมศึกษา")==0) {$University53 ++;} 
else if(strcmp($row['University'],"ศึกษาต่อต่างประเทศ")==0) {$University54 ++;}
else if(strcmp($row['University'],"มหาวิทยาลัยนานาชาติแสตมฟอร์ด")==0) {$University55 ++;}
else if(strcmp($row['University'],"รอแอดมิชชั่น")==0) {$University56 ++;}
else if(strcmp($row['University'],"มหาวิทยาลัยราชภัฏภูเก็ต")==0) {$University57 ++;}
else if(strcmp($row['University'],"มหาวิทยาลัยอัสสัมชัญ")==0) {$University58 ++;}
else if(strcmp($row['University'],"สถาบันอาศรมศิลป์")==0) {$University59 ++;}
else if(strcmp($row['University'],null)==0) {$University60 ++;}
		$no++;
	 }

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
	<title></title>
</head>
<body>
                
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>University</th>
                          <th>Count</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>จุฬาลงกรณ์มหาวิทยาลัย</td>
                          <td><?php echo $University1 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>2</td>
                          <td>มหาวิทยาลัยเกษตรศาสตร์</td>
                          <td><?php echo $University2 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>3</td>
                          <td>มหาวิทยาลัยขอนแก่น</td>
                          <td><?php echo $University3 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>4</td>
                          <td>มหาวิทยาลัยเชียงใหม่</td>
                          <td><?php echo $University4 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>5</td>
                          <td>มหาวิทยาลัยทักษิณ</td>
                          <td><?php echo $University5 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>6</td>
                          <td>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ</td>
                          <td><?php echo $University6 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>7</td>
                          <td>มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี</td>
                          <td><?php echo $University7 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>8</td>
                          <td>มหาวิทยาลัยเทคโนโลยีสุรนารี</td>
                          <td><?php echo $University8 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>9</td>
                          <td>มหาวิทยาลัยธรรมศาสตร์</td>
                          <td><?php echo $University9 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>10</td>
                          <td>มหาวิทยาลัยนครพนม</td>
                          <td><?php echo $University10 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>11</td>
                          <td>มหาวิทยาลัยนราธิวาสราชนครินทร์</td>
                          <td><?php echo $University11 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>12</td>
                          <td>มหาวิทยาลัยนเรศวร</td>
                          <td><?php echo $University12 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>13</td>
                          <td>มหาวิทยาลัยบูรพา</td>
                          <td><?php echo $University13 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>14</td>
                          <td>มหาวิทยาลัยพะเยา</td>
                          <td><?php echo $University14 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>15</td>
                          <td>มหาวิทยาลัยมหาสารคาม</td>
                          <td><?php echo $University15 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>16</td>
                          <td>มหาวิทยาลัยมหิดล</td>
                          <td><?php echo $University16 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>17</td>
                          <td>มหาวิทยาลัยแม่โจ้</td>
                          <td><?php echo $University17 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>18</td>
                          <td>มหาวิทยาลัยแม่ฟ้าหลวง</td>
                          <td><?php echo $University18 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>19</td>
                          <td>มหาวิทยาลัยวลัยลักษณ์</td>
                          <td><?php echo $University19 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>20</td>
                          <td>มหาวิทยาลัยศรีนครินทรวิโรฒ</td>
                          <td><?php echo $University20 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>21</td>
                          <td>มหาวิทยาลัยศิลปากร</td>
                          <td><?php echo $University21 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>22</td>
                          <td>มหาวิทยาลัยสงขลานครินทร์</td>
                          <td><?php echo $University22 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>23</td>
                          <td>มหาวิทยาลัยอุบลราชธานี</td>
                          <td><?php echo $University23 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>24</td>
                          <td>สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง</td>
                          <td><?php echo $University24 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>25</td>
                          <td>สถาบันเทคโนโลยีปทุมวัน</td>
                          <td><?php echo $University25 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>26</td>
                          <td>มหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ</td>
                          <td><?php echo $University26 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>27</td>
                          <td>มหาวิทยาลัยเทคโนโลยีราชมงคลตะวันออก</td>
                          <td><?php echo $University27 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>28</td>
                          <td>มหาวิทยาลัยเทคโนโลยีราชมงคลธัญบุรี</td>
                          <td><?php echo $University28 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>29</td>
                          <td>มหาวิทยาลัยเทคโนโลยีราชมงคลพระนคร</td>
                          <td><?php echo $University29 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>30</td>
                          <td>มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์</td>
                          <td><?php echo $University30 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>31</td>
                          <td>มหาวิทยาลัยเทคโนโลยีราชมงคลล้านนา</td>
                          <td><?php echo $University31 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>32</td>
                          <td>มหาวิทยาลัยเทคโนโลยีราชมงคลศรีวิชัย</td>
                          <td><?php echo $University32 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>33</td>
                          <td>มหาวิทยาลัยเทคโนโลยีราชมงคลสุวรรณภูมิ</td>
                          <td><?php echo $University33 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>34</td>
                          <td>มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน</td>
                          <td><?php echo $University34 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>35</td>
                          <td>มหาวิทยาลัยราชภัฏกาญจนบุรี</td>
                          <td><?php echo $University35 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>36</td>
                          <td>มหาวิทยาลัยราชภัฏจันทรเกษม</td>
                          <td><?php echo $University36 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>37</td>
                          <td>มหาวิทยาลัยราชภัฏธนบุรี</td>
                          <td><?php echo $University37 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>38</td>
                          <td>มหาวิทยาลัยราชภัฏนครสวรรค์</td>
                          <td><?php echo $University38 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>39</td>
                          <td>มหาวิทยาลัยราชภัฏบ้านสมเด็จเจ้าพระยา</td>
                          <td><?php echo $University39 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>40</td>
                          <td>มหาวิทยาลัยราชภัฏเพชรบุรี</td>
                          <td><?php echo $University40 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>41</td>
                          <td>มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา</td>
                          <td><?php echo $University41 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>42</td>
                          <td>มหาวิทยาลัยราชภัฏพิบูลสงคราม</td>
                          <td><?php echo $University42 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>43</td>
                          <td>มหาวิทยาลัยราชภัฏมหาสารคาม</td>
                          <td><?php echo $University43 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>44</td>
                          <td>มหาวิทยาลัยราชภัฏราชนครินทร์</td>
                          <td><?php echo $University44 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>45</td>
                          <td>มหาวิทยาลัยราชภัฏวไลยอลงกรณ์</td>
                          <td><?php echo $University45 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>46</td>
                          <td>มหาวิทยาลัยราชภัฏสวนสุนันทา</td>
                          <td><?php echo $University46 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>47</td>
                          <td>มหาวิทยาลัยสวนดุสิต</td>
                          <td><?php echo $University47 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>48</td>
                          <td>มหาวิทยาลัยกรุงเทพ</td>
                          <td><?php echo $University48 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>49</td>
                          <td>วิทยาลัยพยาบาลสภากาชาดไทย</td>
                          <td><?php echo $University49 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>50</td>
                          <td>วิทยาลัยพยาบาลตำรวจ</td>
                          <td><?php echo $University50 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>51</td>
                          <td>สถาบันการพลศึกษา</td>
                          <td><?php echo $University51 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>52</td>
                          <td>สถาบันการบินพลเรือน</td>
                          <td><?php echo $University52 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>53</td>
                          <td>มหาวิทยาลัยนานาชาติแสตมฟอร์ด</td>
                          <td><?php echo $University55 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>54</td>
                          <td>มหาวิทยาลัยราชภัฏภูเก็ต</td>
                          <td><?php echo $University57 ?></td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr>
                          <td>55</td>
                          <td>มหาวิทยาลัยอัสสัมชัญ</td>
                          <td><?php echo $University58 ?></td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr>
                          <td>56</td>
                          <td>สถาบันอาศรมศิลป์</td>
                          <td><?php echo $University59 ?></td>
                        </tr>
                      </tbody>
                      <tbody>
                        <tr>
                          <td>57</td>
                          <td>ไม่ศึกษาต่อในระดับอุดมศึกษา</td>
                          <td><?php echo $University53 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>58</td>
                          <td>ศึกษาต่อต่างประเทศ</td>
                          <td><?php echo $University54 ?></td>
                        </tr>
                      </tbody> 

                      <tbody>
                        <tr>
                          <td>59</td>
                          <td>รอแอดมิชชั่น</td>
                          <td><?php echo $University56 ?></td>
                        </tr>
                      </tbody> 
                      <tbody>
                        <tr>
                          <td>60</td>
                          <td>ยังไม่ลงข้อมูล</td>
                          <td><?php echo $University60 ?></td>
                        </tr>
                      </tbody> 


                      <tbody>
                      
                        <tr>
                          <td>Number Student</td>
                          <td>จำนวนนักเรียนทั้งหมด</td>
                          <td><?php echo $no ?></td>
                        </tr>
                       
                      </tbody>

                    </table>
              
</body>
</html>