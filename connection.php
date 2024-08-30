<?php

$conn = new mysqli('localhost', 'root', '', 'farm_order');

if (!$conn) {
  die(mysqli_error($conn));
}
