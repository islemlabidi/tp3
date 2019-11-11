<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

//py-3

<div class="container">
    <h2>student</h2>
    <table class="table">
    <thead>
        
        <tr>
        <th>Id</th>    
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead> 


<a href="create.php" class="btn btn-primary"> Ajouter</a>
<?php
    include 'dbconnexion.php';
     $rep = $bd->query('SELECT * FROM students');
        while ($donnees = $rep->fetch())
            {
              echo "<tr>";
                echo "<td>".$donnees['id'] . "</td>";
                echo "<td>".$donnees['firstname'] . "</td>";
                echo "<td>".$donnees['lastname'] . "</td>";
                echo "<td>".$donnees['email'] . "</td>";
                echo "<td>".$donnees['phone'] . "</td>";
				echo "<td><a href='edit.php?id=".$donnees['id']."' class='btn btn-primary'> Update</a></td>";
				echo "<td><a href='delete.php?id=".$donnees['id']."' class='btn btn-primary'> Delete</a></td>";
              echo "</tr>";
            }

?>  
</table>
</div>
</body>
</html>