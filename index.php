
<?php
require_once '../DeimThailand/condb.php';
//query
$query = "SELECT * FROM tbl_table ORDER BY id ASC";
$result = mysqli_query($condb, $query);
 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>รายชื่อโต๊ะจาก ร้าน DeimThailand</title>
    <style type="text/css">
    .devbanban{
    background-color: #bdb7b5;
    }
    </style>
  </head>
  <body style="background-color: #2c2720;">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-md-2"></div>
        <div class="col-12 col-sm-11 col-md-7 devbanban" style="margin-top: 50px;">
          <br>
          <h4 align="center" style="color: #1D1B1B;">รายชื่อโต๊ะจาก ร้าน DeimThailand</h4>
          <br>
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="alert alert-warning" role="alert">
                <center>หมายเลขโต๊ะ *เหลือง = ว่าง, เทา = ไม่ว่าง </center>
              </div>
              <hr>
              <div class="row" style="margin-bottom: 20px;">
                <?php foreach ($result as  $row) {
                  if($row['table_status']==0){ //ว่าง
                    echo '<div class="col-2 col-md-2 col-sm-2" style="margin: 5px;">';
                  echo '<a href="booking.php?id='.$row["id"].'&act=booking"class="btn btn-warning" target="_blank">'.$row['table_name'].'</a></div>';
                    }else{ //ถูกจอง
                      echo '<div class="col-2 col-md-2 col-sm-2" style="margin: 5px;">';
                    echo '<a href="#" class="btn btn-secondary disabled" target="_blank">'.$row['table_name'].'</a></div>';
                      }
                    } ?>
                  </div>
                  <p>*เหลือง = ว่าง, เทา = ไม่ว่าง</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <center> <font color="white"> กลับสู่หน้าแรก <a href="index.php" target="_blank"> คลิก </a></font></center>
      </body>
    </html>