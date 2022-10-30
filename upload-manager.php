<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["zip_file"]) && $_FILES["zip_file"]["error"] == 0){
        $allowed = array(
            'zip' => 'application/zip',
            'x-zip-compressed' => 'application/x-zip-compressed',
            'x-zip' => 'multipart/x-zip',
            'x-compressed' => 'application/x-compressed'
        );
        $filename = $_FILES["zip_file"]["name"];
        $filetype = $_FILES["zip_file"]["type"];
        $filesize = $_FILES["zip_file"]["size"];
        $file_temp_name = $_FILES["zip_file"]["tmp_name"];
        $fille_error = $_FILES["zip_file"]["error"];

        /* Wyświetlanie właściwości przesłanego pliku
        echo "Przesyłany plik: <b>" . $filename . "</b><br />";
        echo "Type: " . $filetype . "<br />";
        echo "Rozmiar pliku: " . ($filesize / 1024 / 1024) . " Mb<br />";
         */
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 100MB maximum
        $maxsize = 100 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists("upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($file_temp_name, "upload/" . $filename);
                header("location: upload-list.php");
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Plik załadowany z błędami. Error: " . $fille_error;
    }
}
