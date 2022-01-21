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

echo system("ls");

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
    <form id="upl_ph" class="up_form" onsubmit="return fileValidation();"  method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" required name="fileToUpload" id="fileToUpload">
        <button name="submit" id="upl" >Upload</button>
    </form>
    <br>
    <br>
    <br>
    <a class="link" target="_blank" href="uploads">View in folder</a>
</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script>
    function fileValidation() {
        var fileInput =
            document.getElementById('fileToUpload');

        var filePath = fileInput.value;

        // Allowing file type
        var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;

        if (!allowedExtensions.exec(filePath)) {
            alert('Invalid file type');
            fileInput.value = '';
            return false;
        }
        else
        {
            return true;
        }
    }
</script>

</body>
</html>
