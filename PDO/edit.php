<?php

  require_once('connect.php');
  
  if(isset($_REQUEST['update_id'])){
    try{
        $id = $_REQUEST['update_id'];
        $select_stmt = $db->prepare('SELECT * FROM ims_file WHERE id = :id');
        $select_stmt->bindParam(":id", $id);
        $select_stmt->execute();
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
        $subject = $row['subject'];
        $headline = $row['headline'];
        $details = $row['details'];
        $img = $row['img'];
    } catch(PDOException $e) {
      $e->getMessage();
    }
}

  if(isset($_REQUEST['btn_update'])) {
    try{
      $subject = $_REQUEST['txt_subject'];
      $headline = $_REQUEST['txt_headline'];
      $details = $_REQUEST['txt_details'];

      $image_file = $_FILES['txt_file']['name'];
      $type = $_FILES['txt_file']['type'];
      $size = $_FILES['txt_file']['size'];
      $temp = $_FILES['txt_file']['tmp_name'];

      $path = "upload/".$image_file;
      $direction ="upload/";

      if($image_file){
        if($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
            if(!file_exists($path)) {
                if($size < 5000000) {
                    unlink($direction.$row['img']);
                    move_uploaded_file($temp,'upload/'.$image_file);
                } else {
                    $errorMsg = "Your file is too large, please upload a file up to 5MB in size";
                }
            } else {
                $errorMsg = "File already exists... Check upload folder";
            }
        } else {
            $errorMsg ="Upload JPG, JPEG, PNG & GIF formats...";
        }
    }
     else {
      $image_file = $row['img'];
    }

    if (!isset($errorMsg)) {
      $update_stmt = $db->prepare("UPDATE ims_file SET subject = :subject_up, headline = :headline_up, details = :details_up, img = :file_up WHERE id= :id");
$update_stmt->bindParam(':subject_up', $subject);
$update_stmt->bindParam(':headline_up', $headline);
$update_stmt->bindParam(':details_up', $details);
$update_stmt->bindParam(':file_up', $image_file);
$update_stmt->bindParam(':id', $id);
 

      if($update_stmt->execute()) {
        $updateMsg = "File update successfully...";
        header("refresh:2;admin.php");
      }
    }

    } catch(PDOException $e) {
      $e->getMessage();
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <div class="container text-center">
        <h1>Edit file page</h1>
        <?php
        if(isset($errorMsg)){
        ?>
        <div class="alert alert-danger">
            <strong><?php echo $errorMsg; ?> </strong>
        </div>
        <?php } ?>

        <?php
        if(isset($updateMsg)){
        ?>
        <div class="alert alert-success">
            <strong><?php echo $updateMsg; ?> </strong>
        </div>
        <?php } ?>


        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="form-group">
        <div class="row">
            <label for="subject" class="col-sm-3 control-label">Subject</label>
            <div class="col-sm-9">
                <input type="text" name="txt_subject" class="form-control" value="<?php echo $subject; ?>">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label for="headline" class="col-sm-3 control-label">Headline</label>
            <div class="col-sm-9">
                <input type="text" name="txt_headline" class="form-control" value="<?php echo $headline; ?>">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label for="details" class="col-sm-3 control-label">Details</label>
            <div class="col-sm-9">
                <textarea name="txt_details" class="form-control"><?php echo $details; ?></textarea>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <label for="img" class="col-sm-3 control-label">Image</label>
            <div class="col-sm-9">
                <input type="file" name="txt_file" class="form-control">
                <p>
                    <img src="upload/<?php echo $img; ?>" height="100" width="100" alt="">
                </p>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-12">
            <input type="submit" name="btn_update" class="btn btn-primary" value="Update">
            <a href="admin.php" class="btn btn-danger">Cancel</a>
        </div>
    </div>
</form>

    </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>