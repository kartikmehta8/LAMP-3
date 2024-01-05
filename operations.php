<?php
include('connect.php');
function inputFields($placeholder, $name, $value, $type)
{
  return "<input type='$type' name='$name' value='$value' placeholder='$placeholder' class='border-2 my-4 border-gray-300 p-2 w-full' required autocomplete=off>";
}

function displayImages()
{
  global $conn;
  $sql = "SELECT * FROM registration";
  $result = mysqli_query($conn, $sql);
  $images = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $images;
}

?>