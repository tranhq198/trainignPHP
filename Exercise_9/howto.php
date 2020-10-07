<!DOCTYPE html>
<html>
<head>
    <title> Upload Image </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>

    <?php
    include "function.php";
    if (isset($_GET['upload']) && $_GET['upload'] == 'file') {
        $uploadedFiles = $_FILES['file_upload'];
        var_dump($uploadedFiles);
        $errors = uploadFile($uploadedFiles);
        if(!empty($errors)) {
            print_r($errors);
            exit();
        }
    } else {
    ?>
    <fieldset>
        <legend>Upload file</legend>
        <form id="upload_file" method="post" action="?upload=file" enctype="multipart/form-data">
            <input multiple  type="file" name="file_upload[]"/>
            <input type="submit" name="upload" value="Upload"/>
        </form>
    </fieldset>
    <?php
    }
    ?>
</body>
</html>