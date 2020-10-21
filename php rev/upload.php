<?php

if (isset($_POST["submit"]))
{
    $file=$_FILES['file'];
    $name=$_FILES['file']["name"];
    $size=$_FILES['file']['size'];
    $error=$_FILES['file']['error'];
    $temp_name=$_FILES['file']['tmp_name'];
    $tempfile=explode(".",$name);

    $fileex=strtolower(end($tempfile));

    $isAllowed=array("jpg","jpeg","png");
    if (in_array($fileex,$isAllowed))
    {
        if($error===0)
        {
            if($size<300000000)
            {
                $newFilename=uniqid("SD",false).".".$fileex;
                $filedes="/home/sourav/Desktop/uplo/".$newFilename;
                move_uploaded_file( $temp_name, $filedes);
                // header("Location:fi.html?upsuc");
                echo $newFilename." succesfully uploaded";

            }
            else {
                
                echo "file size is greater than 3mb";
            }


        }
        else {
            
            echo "There is an error in file! ";
        }
       
    }
    else {
        echo "file type is not allowed!";
    }


}




?>