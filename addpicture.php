<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

?>
<?php include('inc/header.php'); ?>
<div class="container text-center">
    <h1>Lataa kuva</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload">
        <input type="submit" value="Lataa" name="submit">
    <form>
</div>

<?php include('inc/footer.php'); ?>