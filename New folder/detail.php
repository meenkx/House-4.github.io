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
        <link rel="stylesheet" href="css/list-people.css">
        <style type="text/css">
          .textblue{
            color: #4DC3FA;
          }
          .textblueth{
            color: #eee;
          }

        </style>
    </head>
    <body>
      <!-- content -->
        <h1>
          <span class="bluee">&lt;</span> 
          <span class="textblue">ราชวิทย์ ๔๘</span> 
          <span class="bluee">&gt;</span> 
          <span class="yellow">ข้อมูลการศึกษาต่อในระดับมหาวิทยาลัย ปีการศึกษา 2559</span>
        </h1>
        <h2>Created with love by <a href="#" >ราชวิทย์ ๔๘ และ administrator</a></h2>

        <table class="container">
          <thead>
            <tr>
              <th><span class="textblueth">ชื่อ-นามสกุล</span></th>
              <th><span class="textblueth">บ้าน&nbsp</span></th>
              <th><span class="textblueth">มหาวิทยาลัย/สถาบัน</span></th>
              <th><span class="textblueth">คณะ/สาขา </span></th>
              <th><span class="textblueth">หมายเหตุ</span></th>
            </tr>
          </thead>
          <tbody>
          <?php $no=1; include 'php/list-people-connect.php'; while ($row = mysql_fetch_array($sql_listpeople)) { ?>
            <tr>
              <td>นาย <?=$row['Name']?> <?=$row['Lastname']?></td>
              <td><?=$row['House']?>&nbsp</td>
              <td><?=$row['University']?></td>
              <td><?=$row['Faculty']?></td>
              <td><?=$row['Note']?></td>
            </tr>
          <?php $no++; } ?>
          </tbody>
        </table>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
