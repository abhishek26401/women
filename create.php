<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];

    $email = $_POST['email'];

    $contact = $_POST['contact'];

    $username =$_POST['username'];

    $sql = "INSERT INTO users(name,email,contact,username) VALUES ('$name','$email','$contact','$username')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New contact saved successfully.";
      // Swal.fire(
      //   'Good job!',
      //   'You clicked the button!',
      //   'success'
      // )

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 
    if($result==true){
      header("location: welcome1.php");
    }

    $conn->close(); 

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
    <h2 class="mb-4">Add Contact</h2>
    <!-- <form> -->
      <div class="form-group">
        <!-- <label for="name">Name</label> -->
        <label for="exampleInputEmail1">Username</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
        <!-- <input type="text" name="name" class="form-co -->
        <!-- <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo $name; ?>"> -->
        <!-- <input type="hidden" name="user_id" value="<?php echo $id; ?>"> -->
      </div>
      <div class="form-group">
        <!-- <label for="gmail">E-mail</label>
        <input type="email" class="form-control" id="gmail" name="email" placeholder="Enter Gmail address" value="<?php echo $email; ?>"> -->
        <label for="exampleInputPassword1">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
      </div>
      <div class="form-group">
        <!-- <label for="phone">Phone Number</label>
        <input type="tel" class="form-control" id="phone" name="contact" placeholder="Enter phone number" value="<?php echo $contact; ?>"> -->
        <label for="exampleInputPassword1">Contact no.</label>
        <input type="tel" name="contact" class="form-control" id="exampleInputPassword1" placeholder="Enter Contact no.">
      </div>
      <!-- <div class="form-group">
        <label for="whatsapp">WhatsApp Number</label>
        <input type="tel" class="form-control" id="whatsapp" name="whatsapp" placeholder="Enter WhatsApp number">
      </div> -->
      <div class="text-center">
        <!-- <button type="submit" class="btn btn-primary mr-2" value="Update" name="update">Save Contact</button> -->
        <button type="submit" name="submit"class="btn btn-primary mx-5" value="Update">ADD</button>
        <!-- <button type="button" class="btn btn-secondary">Add New Contact</button> -->
      </div>
    <!-- </form> -->
  </div>
</fieldset>

</form>
</body>
</html>