<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}

?>
<?php include('inc/header.php'); ?>

<?php
$xml = simplexml_load_file('data/galleria.xml')
?>

<?php foreach ($xml->picture as $pic) ?>
    <div>
        <h2><?php echo $pic->author; ?></h2>
        <img src="uploads/<?php echo $pic->file;?>" alt="kuva" />
        <p><?php echo $pic->date; ?></p>
    </div>
<?php endforeach; ?>


<?php include('inc/footer.php'); ?>

