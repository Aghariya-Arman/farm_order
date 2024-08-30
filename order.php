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

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    .btn-container {
      display: inline-flex;
      align-items: center;
    }

    .btn {
      padding: 10px 15px;
      margin: 5px;
      cursor: pointer;
      border: 1px solid #007bff;
      background-color: #007bff;
      color: white;
      border-radius: 5px;
    }

    .btn-disabled {
      background-color: #ddd;
      cursor: not-allowed;
    }
  </style>
</head>

<body>

  <div class="container-fluid">
    <div class="row justify-content-center" id="r1">
      <div class="col-md-4  p-5 mt-3">
        <h4> Unlock your gift!</h4>

        (You can choose Milk, Curd and various other products)
        Gift applicable only for 1st time users.
      </div>

    </div>
    <!-- top navigate url -->
    <div class="row justify-content-center">
      <ul class="nav nav-tabs col-md-3">
        <li class="active"><a data-toggle="tab" href="#r2" style="text-decoration: none;color: black;">Organic
            Milk</a></li>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li><a data-toggle="tab" href="#r3" style="text-decoration: none;color: black;">Other Organic Product</a>
        </li>
      </ul>
    </div>
    <!-- all card row -->
    <div class="tab-content">
      <div class="row justify-content-center mt-3 tab-pane fade in active" id="r2">
        <div class="col-md-6 ">
          <?php
          $name = ['Organic Cow Milk Pasteurized & Homogenized', 'Amrutha A2 Organic Cow Milk Pasteurized', 'Organic Cow Milk Pasteurized'];

          $description = ['Pasteurized and homogenized - Ready-to-consume nutrition on the go!', 'A2-protein rich, ready-to-consume milk.', 'No-boiling-required, ready-to-consume milk!'];

          $price = ['45', '43', '40'];
          $qauntity = ['500ml', '500ml', '500ml'];
          $image = ['item1', 'item2', 'item3'];

          $length = count($name);

          for ($i = 0; $i < $length; $i++) {
            echo '
           <div class="row justify-content-md-around ">
            <div class="card">
              <div class="card-body row">
                <div class="img col-md-2">
                  <img src="img/' . $image[$i] . '.jpg" alt="img" style="width: 100%;">
                </div>
                <div class="col-md-8">
                  <h5 class="card-title"> ' . $name[$i] . '</h5>
                  <span>' . $qauntity[$i] . '</span>
                  <p class="card-text">' . $description[$i] . '</p>
                  <span style="color: rgb(93, 162, 93);"><b> FREE</b> </span><del>' . $price[$i] . '</del>
                 <div class="btn-container float-end"  id="btn-container-' . $i . '">
                  <button class="btn" id="addButton" type="submit" onclick="toggleButtons(' . $i . ')
                  ">Add</button>
                  
                    </div>
                </div>
              </div>
            </div>
          </div>
           
           ';
          }

          ?>

          <!-- <div class="row justify-content-md-around ">
            <div class="card">
              <div class="card-body row">
                <div class="img col-md-2">
                  <img src="img/item1.jpg" alt="img" style="width: 100%;">
                </div>
                <div class="col-md-8">
                  <h5 class="card-title">Organic Cow Milk Pasteurized & Homogenized</h5>
                  <span>500 ml</span>
                  <p class="card-text">Pasteurized and homogenized - Ready-to-consume nutrition on the go!</p>
                  <span style="color: rgb(93, 162, 93);"><b> FREE</b> </span><del>45</del>
                  <button type="submit" class="btn btn-primary float-end">Add</button>
                </div>
              </div>
            </div>
          </div> -->
          <!-- second row -->
          <!-- <div class="row justify-content-md-around mt-2">
            <div class="card">
              <div class="card-body row">
                <div class="img col-md-2">
                  <img src="img/item2.jpg" alt="img" style="width: 100%;">
                </div>
                <div class="col-md-8">
                  <h5 class="card-title">Organic Cow Milk Pasteurized</h5>
                  <span>500 ml</span>
                  <p class="card-text">No-boiling-required, ready-to-consume milk!</p>
                  <span style="color: rgb(93, 162, 93);"><b> FREE</b> </span><del>40</del>
                  <a href="#" class="btn btn-primary float-end">Add</a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- third row -->
          <!-- <div class="row justify-content-md-around mt-2">
            <div class="card">
              <div class="card-body row">
                <div class="img col-md-2">
                  <img src="img/item3.jpg" alt="img" style="width: 100%;">
                </div>
                <div class="col-md-8">
                  <h5 class="card-title">Organic Cow Milk Pasteurized & Homogenized</h5>
                  <span>500 ml</span>
                  <p class="card-text">Pasteurized and homogenized - Ready-to-consume nutrition on the go!</p>
                  <span style="color: rgb(93, 162, 93);"><b> FREE</b> </span><del>450</del>
                  <a href="#" class="btn btn-primary float-end">Add</a>
                </div>
              </div>
            </div>
          </div> -->


        </div>
      </div>

      <div class="row justify-content-center mt-3 tab-pane fade" id="r3">
        <div class="col-md-6 ">
          <?php
          $name = ['Organic Buttermilk On-The-Go pack (Spiced)', 'Organic Buttermilk On-The-Go pack (Plain)', 'Organic Probiotic Buttermilk Spiced'];

          $description = ['Pasteurized and homogenized - Ready-to-consume nutrition on the go!', 'A2-protein rich, ready-to-consume milk.', 'No-boiling-required, ready-to-consume milk!'];

          $price = ['25', '35', '30'];
          $qauntity = ['200ml', '200ml', '200ml'];
          $image = ['item4', 'item5', 'item6'];

          $length = count($name);

          for ($i = 0; $i < $length; $i++) {
            echo '
             <div class="row justify-content-md-around ">
            <div class="card">
              <div class="card-body row">
                <div class="img col-md-2">
                  <img src="img/' . $image[$i] . '.png" alt="img" style="width: 100%;">
                </div>
                <div class="col-md-8">
                  <h5 class="card-title">' . $name[$i] . '</h5>
                  <span>200 ml</span>
                  <p class="card-text">' . $description[$i] . '</p>
                  <span style="color: rgb(93, 162, 93);"><b> FREE</b> </span><del>' . $price[$i] . '</del>
                  <div class="btn-container1 float-end"  id="btn-container1-' . $i . '">
                  <button class="btn" id="addButton" type="submit" onclick="toggleButtons1(' . $i . ')
                  ">Add</button>
                  
                    </div>
                </div>
              </div>
            </div>
          </div>
            
            ';
          }

          ?>
          <!-- <div class="row justify-content-md-around ">
            <div class="card">
              <div class="card-body row">
                <div class="img col-md-2">
                  <img src="img/item4.png" alt="img" style="width: 100%;">
                </div>
                <div class="col-md-8">
                  <h5 class="card-title">Organic Buttermilk On-The-Go pack (Spiced)</h5>
                  <span>200 ml</span>
                  <p class="card-text">Pasteurized and homogenized - Ready-to-consume nutrition on the go!</p>
                  <span style="color: rgb(93, 162, 93);"><b> FREE</b> </span><del>45</del>
                  <a href="#" class="btn btn-primary float-end">Add</a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- second row -->
          <!-- <div class="row justify-content-md-around mt-2">
            <div class="card">
              <div class="card-body row">
                <div class="img col-md-2">
                  <img src="img/item5.png" alt="img" style="width: 100%;">
                </div>
                <div class="col-md-8">
                  <h5 class="card-title">Organic Buttermilk On-The-Go pack (Plain)</h5>
                  <span>200 ml</span>
                  <p class="card-text">No-boiling-required, ready-to-consume milk!</p>
                  <span style="color: rgb(93, 162, 93);"><b> FREE</b> </span><del>40</del>
                  <a href="#" class="btn btn-primary float-end">Add</a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- third row -->
          <!-- <div class="row justify-content-md-around mt-2">
            <div class="card">
              <div class="card-body row">
                <div class="img col-md-2">
                  <img src="img/item6.png" alt="img" style="width: 100%;">
                </div>
                <div class="col-md-8">
                  <h5 class="card-title">Organic Probiotic Buttermilk Spiced</h5>
                  <span>200 ml</span>
                  <p class="card-text">Pasteurized and homogenized - Ready-to-consume nutrition on the go!</p>
                  <span style="color: rgb(93, 162, 93);"><b> FREE</b> </span><del>450</del>
                  <a href="#" class="btn btn-primary float-end">Add</a>
                </div>
              </div>
            </div>
          </div> -->


        </div>
      </div>

    </div>
    </form>


    <div class="row  mt-3 mb-2">
      <div class="col-md-2"></div>
      <button class="btn btn-primary col-md-6"><a href="" style="color: white;text-decoration: none;">Book Free
          Sample</a></button>
    </div>

  </div>
</body>

</html>



<script>
  function toggleButtons(index) {
    // Reset all buttons first
    resetAllButtons();

    // Set the clicked button's container to show increment/decrement buttons
    const container = document.getElementById('btn-container-' + index);
    let currentValue = 1;

    container.innerHTML = `
          <button class="btn btn-disabled">+</button>
          <span id="valueDisplay-${index}">${currentValue}</span>
          <button class="btn" onclick="revertToAdd(${index})">-</button>
      `;
  }

  function resetAllButtons() {
    const containers = document.querySelectorAll('.btn-container');
    containers.forEach((container, i) => {
      container.innerHTML = `<button class="btn" type="button" onclick="toggleButtons(${i})">Add</button>`;
    });
  }

  function revertToAdd(index) {
    // Reset the specific button back to "Add"
    const container = document.getElementById('btn-container-' + index);
    container.innerHTML = `<button class="btn" type="button" onclick="toggleButtons(${index})">Add</button>`;
  }




  // other organic product

  function toggleButtons1(index) {
    // Reset all buttons first
    resetAllButtons1();

    // Set the clicked button's container to show increment/decrement buttons
    const container = document.getElementById('btn-container1-' + index);
    let currentValue = 1;

    container.innerHTML = `
          <button class="btn btn-disabled">+</button>
          <span id="valueDisplay-${index}">${currentValue}</span>
          <button class="btn" onclick="revertToAdd1(${index})">-</button>
      `;
  }

  function resetAllButtons1() {
    const containers = document.querySelectorAll('.btn-container1');
    containers.forEach((container, i) => {
      container.innerHTML = `<button class="btn" type="button" onclick="toggleButtons1(${i})">Add</button>`;
    });
  }

  function revertToAdd1(index) {
    // Reset the specific button back to "Add"
    const container = document.getElementById('btn-container1-' + index);
    container.innerHTML = `<button class="btn" type="button" onclick="toggleButtons1(${index})">Add</button>`;
  }
</script>