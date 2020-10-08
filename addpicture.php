<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

?>
<?php include('inc/header.php'); ?>
    <h1>Upload Stuff</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="author">Author</label>
        <input type="text" name="author">
        <br>
        <input type="file" name="fileToUpload">
        <br>
        <input type="submit" value="Upload" name="submit">
    <form>


<?php include('inc/footer.php'); ?>