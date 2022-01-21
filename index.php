<?php

if (isset($_POST['submit'])){

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

// Check file size
    if ($_FILES["fileToUpload"]["size"] > 9999999) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

// Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

}
//ArI^NL^QZVYM*so5ID7O host psw
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload php script</title>
    <link rel="icon" href="logo.jpeg">
    <style>
        .up_form{
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 20px #000;
            display: inline-block;
            border-radius:20px;
        }
        h3 {
            margin-top: 100px;
            background-color: #000;
            color: #fff;
            display: inline-block;
            font-family: arial;
            padding: 10px;
        }
        .link{
            background-color: #115fb4;
            display: inline-block;
            padding: 10px 20px 10px 20px;
            text-decoration: none;
            color: #fff;
            transition: 0.2s;
            font-family: arial, serif;
        }
        .link:hover{
            background-color: #0a71f6;
            color: #000;
        }
    </style>
</head>
<body style="background-image: url('back.jpg');background-size: cover;background-repeat: no-repeat" >

<center>
    <h3 style="text-transform: uppercase" >challenge: to upload a PHP script</h3>
    <br>
    <br>
    <form class="up_form" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" required name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <br>
    <br>
    <br>
    <a class="link" target="_blank" href="uploads">View in folder</a>
</center>

</body>
</html>