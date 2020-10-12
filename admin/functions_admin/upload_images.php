<?php
// Kiểm tra nếu form đã submit
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Kiểm tra xem file đã tải lên mà không có lỗi
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Xác nhận phần mở rộng của file
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Vui lòng chọn đúng định dạng file.");
    
        // Xác nhận kích thước file - tối đa 5MB
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: Kích thước File quá lớn.");
    
        // Xác định loại file
        if(in_array($filetype, $allowed)){
            // Kiểm tra xem file có tồn tại trước khi upload hay không
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
                echo "File của bạn đã upload thành công.";
            } 
        } else{
            echo "Error: Có vấn đề xảy ra trong quá trì Upload. vui lòng thử lại."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
?>