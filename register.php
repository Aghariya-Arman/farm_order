<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>farm_order</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>customer register</title>
</head>
<?php
include 'connection.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mobile = $_POST['number'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];

  $sql = "insert into customer_reg (customer_name,customer_number,customer_email,customer_gender)values ('$name','$mobile','$email','$gender')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("location:address.php");
  } else {
    echo "invalid error";
  }
}

?>

<body>
  <div class="container">
    <div class="row justify-content-center mt-5 ">
      <div class="col-md-4 border border-dark p-5">
        <form method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Name</label>
            <input type="text" class="form-control" name="name" placeholder="enter name">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Enter Mobile-No</label>
            <input type="text" class="form-control" name="number" placeholder="enter number" onkeypress="return isNumberKey(event)" maxlength="10" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Enter Email</label>
            <input type="email" class="form-control" id="exampleInputPassword1" name="email" aria-describedby="emailHelp" placeholder="enter email" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Gender:-</label>&nbsp;&nbsp;&nbsp;
            Male <input type="radio" name="gender" value="male">
            Female <input type="radio" name="gender" value="female">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Register</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>

<script>
  function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  }
</script>