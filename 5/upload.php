<?php
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//Sprawdź czy plik obrazu jest obrazem
if(isset($_POST['submit'])){
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false){
    echo "File is a image".$check['mime'].".";
    $uploadOk = 1;
  }else{
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
//Sprawdzenie czy plik istnieje
if(file_exists($target_file)){
  echo "Przepraszam plik już istnieje";
  $uploadOk = 0;
}
//Ograniczenie rozmiaru pliku
if($_FILES['fileToUpload']['size'] > 500000){
  echo 'Przepraszam plik jest za duży!';
  $uploadOk = 0;
}
//Ograniczenie typu pliku
if($imageFileType != "jpg" && $imageFileType != 'png' &&
 $imageFileType != 'jpeg' && $imageFileType != 'gif'){
   echo "Przepraszam, tylko JPG, JPEG, PNG lub GIF pliki są dozwolone.";
   $uploadOk = 0;
 }
//Jeżeli nie jest ok sorry wyrzuć błąd
if($uploadOk == 0){
  echo "Przepraszam, twój plik nie został przesłany!";
//jak jest ok wgraj plik  
}else{
  if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)){
    echo "The file".htmlspecialchars(basename(
      $_FILES['fileToUpload']['name']
      ))."Plik został przesłany.";
  }else{
    echo "Przepraszamy wystąpił błąd podczas przesyłania pliku.";
  }
}

?>
