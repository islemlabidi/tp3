<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="from-container">
<form action="mgrstudent.php?action=create" method="post" accept-charset="utf-8">
         
		<label>firstname<input type="text" name="firstname"></label><br>
		<label>lastname<input type="text" name="lastname"></label><br>
		<label>email<input type="text" name="email"></label><br>
		<label>phone<input type="number"name="phone" value=""></label><br>
		<input type="submit">
    </form>
    
    <?php

        if (!empty($_POST)) {
 
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

        }
    
    ?>
    </div>
</body>
</html>