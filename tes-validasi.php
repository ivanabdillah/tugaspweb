<!DOCTYPE HTML>  
<html>
<head>
<title>Form Validasi Simpel</title>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Nama harus diisi";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Nama hanya mengandung huruf dan spasi";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email harus diisi";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Format email salah";
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Format URL salah";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Jenis Kelamin harus diisi";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Form Validasi Sederhana</h1>
<p><span class="error">* wajib diisi</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nama Lengkap: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br>
  Jenis Kelamin:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Perempuan
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Laki-Laki
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Lain-Lain 
  <span class="error">* <?php echo $genderErr;?></span>
  <br>
  Username: <input type="text" name="username" value="">
  <br>
  Password: <input type="password" name="password" value="">
  <br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error">* <?php echo $websiteErr;?></span>
  <br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h3>Hasil Input:</h3>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
?>
<br>
<a href="index.php">Halaman Utama</a>
</body>
</html>