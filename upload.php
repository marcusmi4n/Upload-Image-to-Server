<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
  $file = $_FILES["file"];
  $target = "uploads/" . basename($file["name"]);

  if (move_uploaded_file($file["tmp_name"], $target)) {
    echo "<p style='color:green;'>Uploaded successfully!</p>";
    echo "<img src='$target' width='200'>";
  } else {
    echo "<p style='color:red;'>Upload failed.</p>";
  }
}
?>

<form method="post" enctype="multipart/form-data">
  Select file: <input type="file" name="file"><br><br>
  <input type="submit" value="Upload">
</form>