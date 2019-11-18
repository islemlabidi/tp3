<?php
       
        include 'students.php';
        $students=new students;
        if (isset($_GET["action"]) && $_GET["action"] === "create") {
            $students->addStudent($_POST);
            header('Location: mgrstudent.php'); 
        }
        if (isset($_GET["action"]) && $_GET["action"] === "delete") {
         $students->deleteStudents($_GET["id"]);  
         header('Location: mgrstudent.php'); 
        }
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
    
<div class="container">
    <h2>student</h2>
    <table class="table table-hover">
    <thead>
        <td><a href='create.php' class='btn btn-primary'> ajouter</a></td>
        <tr>
        <th>Id</th>    
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Phone</th>
    
      </tr>
    </thead> 
    <tbody>
        <?php
        $listStudent=$students->readallStudent();
        while($data =$listStudent->fetch()){
      ?>    
       <tr>
        <td><?= $data['id'] ?></td>    
        <td><?= $data['firstname'] ?></td>
        <td><?= $data['lastname'] ?></td>
        <td><?= $data['email'] ?></td>
        <td><?= $data['phone'] ?></td>
<?php 
        echo "<td><a href='edit.php?id=".$data['id']."' class='btn btn-primary'> Update</a></td>";
        echo "<td><a href='mgrstudent.php?id=".$data['id']."&action=delete' class='btn btn-primary'> Delete</a></td>";
        echo "</tr>";
              ?>

      </tr>
      <?php 
        }
      ?>  
    </tbody>
    
    </table>
</div>
</body>
</html>