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
  </style>
</head>
<?php

session_start();
if (isset($_SESSION['data'])) {

  $stud = $_SESSION['data'];
}
if (isset($_POST['submit'])) {

  print_r($_POST);
  exit;
  // $pname = $stud['Name'];
  // $pdesc = $stud['desc'];
  $image = $_POST['image'];
  $cname = $_POST['name'];
  $desc = $_POST['description'];
  $quantity = $_POST['quantity'];

  $address = $_POST['address'];
  $floornumber = $_POST['floorno'];
  $city = $_POST['city'];
  $pincode = $_POST['pincode'];

  $date = $_POST['date'];
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
              <input type="text" class="form-control" name="pincode" placeholder="Enter pincode">
            </div>
          </div>

        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <h5><i class="fa fa-clock-o px-2"></i>Delivery Slot</h5>
          <span>Due to high demand, delivery dates are going quickly. Reserve yours today!</span><br>

          <!-- <label><input type="radio"><span id="date1" name="date1"></span></label> -->

          <input class="p-2 mt-2" type="text" id="date1" name="date1" readonly>
          <input class="p-2 mt-2" type="text" id="date2" name="date2" readonly>
          <input class="p-2 mt-1" type="text" id="date3" name="date3" readonly>
          <input class="p-2 mt-1" type="date" id="date-picker" name="date-picker" min="">


          <input type="hidden" id="selected-date" name="date"><br>
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
  console.log(curent2);
  document.getElementById("date1").value = curent2;

  // 3 days extra
  var dateplus3 = addday(today, 3)
  var day3 = String(dateplus3.getDate()).padStart(2, '0');
  var month3 = String(dateplus3.getMonth() + 1).padStart(2, '0');
  var year3 = dateplus3.getFullYear();
  var currentDate3 = year3 + '-' + month3 + '-' + day3;
  console.log(currentDate3);
  document.getElementById("date2").value = currentDate3;

  //4 days extra
  var dateplus4 = addday(today, 4)
  var day4 = String(dateplus4.getDate()).padStart(2, '0');
  var month4 = String(dateplus4.getMonth() + 1).padStart(2, '0');
  var year4 = dateplus3.getFullYear();
  var currentDate4 = year4 + '-' + month4 + '-' + day4;
  console.log(currentDate4);
  document.getElementById("date3").value = currentDate4;

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
</script>