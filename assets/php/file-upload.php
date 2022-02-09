<?php 

    include 'conn.php';

    if (isset($_POST['submit'])){
        $extension = array('jpeg', 'jpg', 'png');

        foreach ($_FILES['images']['tmp_name'] as $key  => $value) {
            $filename = $_FILES['images']['name'][$key];
            $filename_tmp = $_FILES['images']['tmp_name'][$key];
            echo '<br/>';
            $ext=pathinfo($filename, PATHINFO_EXTENSION);

            $finalimg = '';
            $img_dir= '';

            if(in_array($ext, $extension)){
                if(!file_exists('../uploads/'.$filename))
                {
                    move_uploaded_file($filename_tmp, '../uploads/'.$filename);
                    $finalimg=$filename;
                    $img_dir='./assets/uploads/'.$filename;
                }else{  
                    $filename = str_replace('.', '-', basename($filename, $ext));
                    $newfilename=$filename.time().".".$ext;
                    move_uploaded_file($filename_tmp, '../uploads/'.$newfilename);
                    $finalimg=$newfilename;
                    $img_dir='./assets/uploads/'.$newfilename;
                }
                
                $createTime=date('Y-m-d h:i:s');
                //insert

                $query = "INSERT INTO `uploads`(`image_name`, `img_dir`, `image_create_time`) VALUES ('$finalimg', '$img_dir', '$createTime')";
                mysqli_query($conn, $query);

                header('location: ../../tech.php');
            };
        };
    };
?>