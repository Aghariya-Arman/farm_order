<?php

$conn = new mysqli('localhost', 'root', '', 'farm_order2');

if (!$conn) {
  die(mysqli_error($conn));
}
