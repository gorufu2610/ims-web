<?php
include('connect.php');
$id = $_GET['id'];
$query = mysqli_query($con,"SELECT * FROM ims_file WHERE id=$id");
$result = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$result['subject']?></title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">IMS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/profile.php?id=100024570648966">Contect</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.google.co.th/maps/place/%E0%B8%9A%E0%B8%A3%E0%B8%B4%E0%B8%A9%E0%B8%B1%E0%B8%97+%E0%B9%80%E0%B8%AD%E0%B8%AA%E0%B8%97%E0%B8%B5%E0%B9%80%E0%B8%AD%E0%B8%AA+%E0%B8%8B%E0%B8%B5%E0%B8%AA%E0%B9%80%E0%B8%97%E0%B9%87%E0%B8%A1+%E0%B9%81%E0%B8%AD%E0%B8%99%E0%B8%94%E0%B9%8C+%E0%B8%94%E0%B8%B5%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%A5%E0%B8%AD%E0%B8%9B%E0%B9%80%E0%B8%A1%E0%B8%99%E0%B8%97%E0%B9%8C+%E0%B8%88%E0%B8%B3%E0%B8%81%E0%B8%B1%E0%B8%94/@9.1113033,99.3358025,17z/data=!3m1!4b1!4m6!3m5!1s0x305407b01e545d53:0xbe812428f4d8330d!8m2!3d9.1113033!4d99.3383774!16s%2Fg%2F1tr6cn0p?hl=th&entry=ttu">Map</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a href="https://www.facebook.com/profile.php?id=100081007094663">
    <button type="button" class="btn btn-success">Admin Login</button>
    </a>
    </form>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-4">
    <img src="PDO/upload/<?=$result['img']?>" class="card-img-top" alt="Image" width="100%">
    </div>
    <div class="col-md-8">
      <div class="card mb-4">
        <div class="card-body">
          <h2 class="card-title"><?=$result['subject']?></h2>
          <p class="card-text"><?=$result['details']?></p>
        </div>
      </div>
    </div>
  </div>
</div>





<style>
        /* CSS สำหรับ footer */
        .blog-footer {
            padding: 15px;
            background-color: black;
            color: #fff;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- เนื้อหาหน้าเว็บของคุณ -->

    <!-- Footer ของคุณ -->
    <footer class="blog-footer text-center">
        <p style="margin:0;">ระบบจัดการข้อมูลข่าวสาร</p>
    </footer>

</body>
</html>