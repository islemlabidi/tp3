<?php 
//recuperer les informations de l'etudiants par son id 
include 'students.php';
$students=new students;
if (isset($_POST["id"])) {
    $students->update($_POST);
}
$info = $students->showStudent($_GET['id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="from-container">
<form action="edit.php?id=<?php echo $info['id'] ?>" method="post" accept-charset="utf-8">
        <label>firstname<input type="text" name="firstname" value="<?php echo $info['firstname'] ?>"></label><br>
         <label>lastname<input type="text" name="lastname"  value="<?php echo $info['lastname'] ?>"></label><br>
         <label>email<input type="text" name="email" value="<?php echo $info['email'] ?>"></label><br>
         <label>phone<input type="number"name="phone" value="<?php echo $info['phone'] ?>"></label><br>
         <input type="hidden" name="id" value="<?php echo $info['id'] ?>">
         <input type="submit" value="Modifier">
     </form>
    </div>
</body>
</html>