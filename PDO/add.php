<?php
require_once('connect.php'); 

if (isset($_POST['btn_insert'])) {
    try {
        $subject = $_POST['txt_subject'];
        $headline = $_POST['txt_headline'];
        $details = $_POST['txt_details'];

        $image_file = $_FILES['txt_file']['name'];
        $type = $_FILES['txt_file']['type'];
        $size = $_FILES['txt_file']['size'];
        $temp = $_FILES['txt_file']['tmp_name'];

        $path = "upload/" . $image_file;

        if (empty($subject) || empty($headline) || empty($details)) {
            $errorMsg = "Please fill in all required fields";
        } elseif (empty($image_file)) {
            $errorMsg = "Please Select Image";
        } elseif ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
            if (!file_exists($path)) {
                if ($size < 5000000) {
                    move_uploaded_file($temp, 'upload/' . $image_file);
                } else {
                    $errorMsg = "Your file is too large, please upload a file up to 5MB in size";
                }
            } else {
                $errorMsg = "File already exists in the upload folder";
            }
        } else {
            $errorMsg = "Upload JPG, JPEG, PNG & GIF file formats only";
        }

        if (!isset($errorMsg)) {
            $insert_stmt = $db->prepare('INSERT INTO ims_file(subject, headline, details, img) VALUES(:fsubject, :fheadline, :fdetails, :fimg)');
            $insert_stmt->bindParam(':fsubject', $subject);
            $insert_stmt->bindParam(':fheadline', $headline);
            $insert_stmt->bindParam(':fdetails', $details);
            $insert_stmt->bindParam(':fimg', $image_file);

            if ($insert_stmt->execute()) {
                $insertMsg = "File Uploaded successfully...";
                header('refresh:2;admin.php');
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    
    <div class="container text-center">
        <h1>Insert file page</h1>
        <?php
        if(isset($errorMsg)){
        ?>
        <div class="alert alert-danger">
            <strong><?php echo $errorMsg; ?> </strong>
        </div>
        <?php } ?>

        <?php
        if(isset($insertMsg)){
        ?>
        <div class="alert alert-success">
            <strong><?php echo $insertMsg; ?> </strong>
        </div>
        <?php } ?>


        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group">
            <div class="row">
            <label for="subject" class="col-sm-3 control-label">Subject</label>
            <div class="col-sm-9">
                <input type="text" name="txt_subject" class="form-control" placeholder="Enter subject">
        </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
            <label for="headline" class="col-sm-3 control-label">Headline</label>
            <div class="col-sm-9">
                <input type="text" name="txt_headline" class="form-control" placeholder="Enter headline">
            </div>
        </div>
        </div>
        <div class="form-group">
            <div class="row">
            <label for="details" class="col-sm-3 control-label">Details</label>
            <div class="col-sm-9">
                <textarea name="txt_details" class="form-control" placeholder="Enter details"></textarea>
            </div>
        </div>
        </div>
        <div class="form-group">
            <div class="row">
            <label for="img" class="col-sm-3 control-label">Image</label>
            <div class="col-sm-9">
                <input type="file" name="txt_file" class="form-control">
            </div>
        </div>
        </div>
        <div class="form-group">
            <div class="col-sm-12">
                <input type="submit" name="btn_insert" class="btn btn-success" value="Insert">
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
