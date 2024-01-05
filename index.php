<?php
require_once('operations.php');

if (isset($_POST['upload'])) {
  $username = $_POST['username'];
  $mobile = $_POST['mobile'];
  $image = $_FILES['image']['name'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $path = 'images/' . $image;
  if (move_uploaded_file($tmp_name, $path)) {
    $sql = "INSERT INTO registration (username, mobile, image) VALUES ('$username', '$mobile', '$path')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      header('location: display.php');
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  } else {
    echo "Failed to move uploaded file.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Upload</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body>
  <div class="flex justify-center items-center h-screen bg-gray-200">
    <div class="bg-white rounded shadow p-6 m-4 w-1/2">
      <h2 class="text-2xl font-bold mb-2">Registration Form</h2>
      <form action="index.php" method="post" enctype="multipart/form-data">
        <?php
        echo inputFields('Username', 'username', '', 'text');
        echo inputFields('Mobile', 'mobile', '', 'tel');
        echo inputFields('Image', 'image', '', 'file');
        ?>
        <button type="submit" name="upload"
          class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
    </div>
    </form>
  </div>
</body>

</html>