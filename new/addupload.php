<?php include('config.php') ?>

<?php
$Description = $_POST['Description'];
$Block= $_POST['Block'];
$Type = $_POST['Type'];
$Count_Bed = $_POST['Count_Bed'];

$target_dir = "addart/";
$img = $target_dir . basename($_FILES["img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($img,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["img"]["size"] > 500000) {
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
    if (move_uploaded_file($_FILES["img"]["tmp_name"], $img)) {
        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$res = mysqli_query($con,"INSERT INTO Main(Description,M_Block,M_Type,M_Count_Bed,M_Links) VALUES ('$Description','$Block','$Type','$Count_Bed','$img')") or die (mysqli_error());
header("location:postdetails.php")

?>