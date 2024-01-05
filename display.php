<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Images</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body>
  <div class="flex justify-center items-center h-screen bg-gray-200">
    <div class="bg-white rounded shadow p-6 m-4 w-1/2">
      <h2 class="text-2xl font-bold mb-2">Display Images</h2>
      <div class="flex flex-wrap">
        <?php
        require_once('operations.php');
        $images = displayImages();
        foreach ($images as $image) {
          ?>
          <table class="table-auto">
            <thead>
              <tr>
                <th class="px-4 py-2">Username</th>
                <th class="px-4 py-2">Mobile</th>
                <th class="px-4 py-2">Image</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border px-4 py-2">
                  <?php echo $image['username']; ?>
                </td>
                <td class="border px-4 py-2">
                  <?php echo $image['mobile']; ?>
                </td>
                <td class="border px-4 py-2"><img src="<?php echo 'http://localhost/Image-Upload/' . $image['image']; ?>" alt="" class="w-full"></td>
              </tr>
            </tbody>
          </table>
          <?php
        }
        ?>


      </div>
    </div>
  </div>
</body>

</html>