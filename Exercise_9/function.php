<?php
function uploadfile($uploadedFiles) {
    $files = array();
    $errors = array();
//    xử lý gom dữ liệu vào từng file đã upload

    foreach ($uploadedFiles as $key => $values) {
        foreach ($values as $index =>$value) {
            $files[$index][$key] = $value;
        }
    }

    $uploadPath = "./uploads/" . date('d-m-Y', time());
    if (!is_dir($uploadPath)) {
        mkdir($uploadPath);
    }
    foreach ($files as $file ) {
        $file = validateUploadFile($file, $uploadPath);
        if($file != false) {
            move_uploaded_file($file[tmp_name], $uploadPath. '/' .$file['name']);
        } else {
            $errors[] = 'The file ' . basename($file['name']) . "isn't valid.";
        }
    }
    return $errors;
}

