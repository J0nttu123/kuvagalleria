<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);

$errors = [];
// Check for fake image
if (isset($_POST['submit'])){
    $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
    if ($check == false){
        $errors[] = 'Tiedosto ei ole kuva';
    }
}

// Check for file format
$image_file_type = pathinfo($target_file, PATHINFO_EXTENSION);
if ($image_file_type != 'jpg' && $image_file_type != 'jpeg' && $image_file_type != 'png'){
    $errors[] = 'Tiedoston muoto on väärä';
}

//Check for file size
if ($_FILES['fileToUpload']['size'] > 500000){
    $errors[] = 'Tiedosto on liian suuri';
}

//Check if file exists
if(file_exists($target_file)){
    $errors[] = 'Tiedosto on jo olemassa';
}

if (count($errors) > 0){
    foreach ($errors as $error){
        echo $error."<br>";
    }
} else {

    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
        echo "The file". basename($_FILES["fileToUpload"]["name"]);
        header('Location: addpicture.php');
        
        //Tallennus XML-tiedostoon
        include_once 'my_functions.php';
        saveDataToXML($_POST, basename($_FILES["fileToUpload"]["name"]));
    } else {
        echo "Tiedoston siirtämisessä tapahtui virhe";
    }    
}


