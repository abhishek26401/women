<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $name = $_POST['name'];

        $user_id = $_POST['user_id'];

        $email = $_POST['email'];

        $contact= $_POST['contact'];

        $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`contact`='$contact' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }
        if($result==true){
            header("location: welcome1.php");
        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `users` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $name = $row['name'];

            $email = $row['email'];

            $contact  = $row['contact'];

            $id = $row['id'];

        } 

    ?>







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Contact</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    body {
          background-image: url("https://images.unsplash.com/photo-1515694346937-94d85e41e6f0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80");
      /* background-color: #f8f9fa; */
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background: rgba(184, 239, 249, 0.6);
      /* background-color: #fff; */
      border-radius: 5px;
      box-shadow: 0px 0px 10px #ccc;
      margin-top: 50px;
    }
  </style>
</head>
<body>
<form action="" method="post">

<fieldset>
  <div class="container">
    <h2 class="mb-4">Edit Contact</h2>
    <!-- <form> -->
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo $name; ?>">
        <input type="hidden" name="user_id" value="<?php echo $id; ?>">
      </div>
      <div class="form-group">
        <label for="gmail">E-mail</label>
        <input type="email" class="form-control" id="gmail" name="email" placeholder="Enter Gmail address" value="<?php echo $email; ?>">
      </div>
      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="contact" placeholder="Enter phone number" value="<?php echo $contact; ?>">
      </div>
      <!-- <div class="form-group">
        <label for="whatsapp">WhatsApp Number</label>
        <input type="tel" class="form-control" id="whatsapp" name="whatsapp" placeholder="Enter WhatsApp number">
      </div> -->
      <div class="text-center">
        <button type="submit" class="btn btn-primary mr-2" value="Update" name="update">Save Contact</button>
        <!-- <button type="button" class="btn btn-secondary">Add New Contact</button> -->
      </div>
    <!-- </form> -->
  </div>
</fieldset>

</form>
</body>
</html>


    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 