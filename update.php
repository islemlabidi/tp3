<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
</head>
<body>
    <div class="from-container">
    <?php
 
    include 'edit.php';

    $update = $bd->query("UPDATE students SET firstname =' $mfirstname', lastname = '$mlastname' , email = '$memail' WHERE students.id = '$idd'");
    



        ?>
    </div>
</body>
</html>