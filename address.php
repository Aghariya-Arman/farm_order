<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="style.css">
  <title>address</title>
  <style>
    #c1 {
      background-color: #E5E3DF;
    }

    .selected {
      background-color: #F0F6ED;
      color: greenyellow;
    }

    .date-input {
      width: 100%;
      border: none;
      border-radius: 5px;
      outline: none;

    }
  </style>
</head>
<?php
include 'connection.php';

session_start();
if (isset($_SESSION['data'])) {

  $stud = $_SESSION['data'];
  // print_r($stud);
  // exit;
}
if (isset($_POST['submit'])) {

  $image = $_POST['image'];
  $pname = $_POST['name'];
  $desc = $_POST['description'];
  $quantity = $_POST['quantity'];
  $date = $_POST['options'] == "" ? $_POST['date-picker'] : $_POST['options'];
  $product_id = $_POST['p_id'];

  $address = $_POST['address'];
  $floornumber = $_POST['floorno'];
  $city = $_POST['city'];
  $pincode = $_POST['pincode'];

  $sql = "insert into user_address (customer_address,customer_florno,customer_city,customer_pincode) values (' $address',' $floornumber','  $city','$pincode')";
  $result = mysqli_query($conn, $sql);

  $sql = "SELECT address_id  FROM user_address ORDER BY address_id DESC LIMIT 1;";
  $result = mysqli_query($conn, $sql);

  if ($row = mysqli_fetch_assoc($result)) {
    $id = $row['address_id'];
    // print_r($id);
    // exit;
  }

  $sql = "insert into customer_order (product_id,p_image,add_id,order_date) values (' $product_id','$image','$id',' $date')";

  $result = mysqli_query($conn, $sql);
  if ($result) {
    header("Location:success.php");
  } else {
    die(mysqli_error($conn));
  }
}
?>

<body>
  <form action="" method="post">
    <div class="continer">
      <div class="row justify-content-center mt-5">
        <div class="col-md-5">
          <div class="card">
            <div class="card-body row">
              <div class="img col-md-2">
                <img src="img/<?php echo $stud['image']; ?>" alt="img" style="width: 100%;">
                <input type="hidden" name="image" value="<?php echo $stud['image']; ?>">
              </div>
              <div class="col-md-8">
                <input type="hidden" name="p_id" value="<?php echo $stud['pid']; ?>">
                <h5 class="card-title"><?php echo $stud['Name']; ?></h5>
                <input type="hidden" name="name" value="<?php echo $stud['Name']; ?>">

                <span> <?php echo $stud['quan']; ?> </span>
                <input type="hidden" name="quantity" value="<?php echo $stud['quan']; ?>">

                <p class="card-text"><?php echo $stud['desc']; ?></p>
                <input type="hidden" name="description" value="<?php echo $stud['desc']; ?>">

                <span style="color: rgb(93, 162, 93);"><b> FREE</b> </span><del></del>
                <!-- <input type="hidden" name="price" value="' . $price[$i] . '"> -->

                <div class="btn-container float-end border border-primary rounded">
                  <button class="btn btn-light " id="addButton" type="button">
                    <i class="fa fa-plus px-2"></i>
                    <span class="fw-bold">1</span>
                    <i class="fa fa-minus ps-2"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-5 p-5" id="c1">
          <div class="row">
            <div class="col-md-12">
              <label for="exampleFormControlInput1" class="form-label">Enter Address</label>
              <input type="text" class="form-control" name="address" placeholder="Enter Address">
            </div>
            <div class="col-md-6 mt-2">
              <label for="exampleFormControlInput1" class="form-label">Enter FloorNO</label>
              <input type="text" class="form-control" name="floorno" placeholder="Enter FloorNO">
            </div>
            <div class="col-md-6 mt-2">
              <label for="exampleFormControlInput1" class="form-label">Enter City</label>
              <input type="text" class="form-control" name="city" placeholder="Enter City">
            </div>
            <div class="col-md-6 mt-2">
              <label for="exampleFormControlInput1" class="form-label">EnterPincode</label>
              <input type="text" class="form-control" name="pincode" placeholder="Enter pincode" onkeypress="return isNumberKey(event)" maxlength="6">
            </div>
          </div>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <h5><i class="fa fa-clock-o px-2"></i>Delivery Slot</h5>
          <span>Due to high demand, delivery dates are going quickly. Reserve yours today!</span><br>
          <div class="row mt-4">
            <div class="col-md-3 rounded border border-success p-2" onclick="selectOption('option1', this)">
              <input class="d-none date-inputs" type="radio" id="option1" name="options" value="Option 1">
              <label for="option1" id="label1"></label>
            </div>
            <div class="col-md-3 rounded border border-success p-2 ms-3" onclick="selectOption('option2', this)">
              <input class="d-none date-inputs" type="radio" id="option2" name="options" value="Option 2">
              <label for="option2" id="label2"></label>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-md-3 p-2  rounded border border-success" onclick="selectOption('option3', this)">
              <input class="d-none date-inputs" type="radio" id="option3" name="options" value="Option 3">
              <label for="option3" id="label3"></label>
            </div>
            <div class="col-md-3 rounded border border-success p-2 ms-3" onclick="selectOption('date-picker', this)">
              <input class="date-input" type="date" id="date-picker" min="">
            </div>
          </div>
          <!-- <label><input type="radio"><span id="date1" name="date1"></span></label> -->
          <!-- <input class="p-2 mt-2" type="text" id="date1" name="date1" readonly>
          <input class="p-2 mt-2" type="text" id="date2" name="date2" readonly>
          <input class="p-2 mt-1" type="text" id="date3" name="date3" readonly> -->

          <input type="hidden" id="selected-date" name="date-picker"><br>
          <button class="btn btn-primary mt-2" type="submit" name="submit">Add your order</button>
        </div>
      </div>

    </div>
  </form>
</body>

</html>

<script>
  var today = new Date();
  //today.setDate(today.getDate() + 2);

  function addday(date, day) {
    var result = new Date(date);
    result.setDate(result.getDate() + day);
    return result;
  }

  //2 days extra
  var dateplus2 = addday(today, 2)
  var day2 = String(dateplus2.getDate()).padStart(2, '0');
  var month2 = String(dateplus2.getMonth() + 1).padStart(2, '0');
  var year2 = dateplus2.getFullYear();
  var curent2 = year2 + '-' + month2 + '-' + day2;
  //document.getElementById("date1").value = curent2;
  document.getElementById("label1").textContent = curent2;
  document.getElementById('option1').value = curent2;


  // 3 days extra
  var dateplus3 = addday(today, 3)
  var day3 = String(dateplus3.getDate()).padStart(2, '0');
  var month3 = String(dateplus3.getMonth() + 1).padStart(2, '0');
  var year3 = dateplus3.getFullYear();
  var currentDate3 = year3 + '-' + month3 + '-' + day3;
  //document.getElementById("date2").value = currentDate3;
  document.getElementById("label2").textContent = currentDate3;
  document.getElementById('option2').value = currentDate3;

  //4 days extra
  var dateplus4 = addday(today, 4)
  var day4 = String(dateplus4.getDate()).padStart(2, '0');
  var month4 = String(dateplus4.getMonth() + 1).padStart(2, '0');
  var year4 = dateplus3.getFullYear();
  var currentDate4 = year4 + '-' + month4 + '-' + day4;
  console.log(currentDate4);
  //document.getElementById("date3").value = currentDate4;
  document.getElementById("label3").textContent = currentDate4;
  document.getElementById('option3').value = currentDate4;

  // get current date
  var day = String(today.getDate()).padStart(2, '0');
  var month = String(today.getMonth() + 1).padStart(2, '0');
  var year = today.getFullYear();
  var minDate = year + '-' + month + '-' + day;
  document.getElementById('date-picker').setAttribute('min', minDate);

  //get selected date
  var datePicker = document.getElementById('date-picker');
  datePicker.addEventListener('change', function() {
    var selectedDate = datePicker.value;
    document.getElementById('selected-date').value = selectedDate;
  });



  //pincode only number
  function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  }


  function selectOption(radioId, divElement) {
    // Reset all backgrounds by removing the 'selected' class
    document.querySelectorAll('.col-md-3').forEach(div => {
      div.classList.remove('selected');
    });

    // Set the background of the clicked div by adding the 'selected' class
    divElement.classList.add('selected');
    const input = document.getElementById(inputId);
    if (input.type === 'radio') {
      input.checked = true; // Check the radio button
    } else if (input.type === 'date') {
      input.focus(); // Focus on the date input for user input
    }

    // Select the corresponding radio button
    // document.getElementById(radioId).checked = true;
  }
</script>