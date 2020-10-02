<?php
setcookie('username','UpImages',time()+3600,"/",'',0,0);
?>


<!DOCTYPE html>
<html>
<head>
    <title> Upload Image </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="avatar"/>
    <input type="submit" name="upload" value="Upload"/>
</form>
<?php

if (isset($_POST['upload']))
{
    if (isset($_FILES['avatar']))
    {
        if ($_FILES['avatar']['error'] > 0)
        {
            echo 'File Upload Bị Lỗi';
        }
        else{
            move_uploaded_file($_FILES['avatar']['tmp_name'], 'project/uploads'.$_FILES['avatar']['name']);
            echo 'File Uploaded';
        }
    }
    else{
        echo 'Bạn chưa chọn file upload';
    }
}
var_dump($_FILES);
?>


</body>
</html>