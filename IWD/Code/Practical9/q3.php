<!DOCTYPE html>
<html>
<body>
    <h2>Upload Image</h2>
    <?php
    if(isset($_POST["submit"])) {
        $target_dir = "uploads/";
        
        if (!file_exists($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $target_file = $target_dir . $_FILES["fileToUpload"]["name"];
        
        if($_FILES["fileToUpload"]["error"] !== UPLOAD_ERR_OK) {
            echo "Error: No file uploaded or upload failed.";
            return;
        }
        
        if(getimagesize($_FILES["fileToUpload"]["tmp_name"]) === false) {
            echo "Error: File is not an image.";
            return;
        }
        
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "File uploaded successfully.";
        } else {
            echo "Error uploading file.";
        }
    }
    ?>

    <form action="#" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>