<?php
session_start();
if (!isset($_SESSION['user_id'])) {
	header('Location: login.php');
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home page</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h1>This is home page <a class="btn ml-5" href="logout.php">Logout</a></h1>
      </div>
      <div class="card-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, voluptatum velit repudiandae alias temporibus accusantium asperiores explicabo non id, incidunt exercitationem aperiam, similique! Illum aperiam expedita accusamus vero harum, laboriosam.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quisquam, harum dignissimos. Dolorem nesciunt, nostrum nulla accusantium voluptas repellat nam aperiam facilis. Vero deserunt nobis, voluptatibus explicabo tenetur nisi iste.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis minus nisi praesentium delectus voluptas ab cumque sapiente, non earum, nesciunt hic? Iste quae libero eaque enim ad sit sed, perspiciatis.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, voluptatum velit repudiandae alias temporibus accusantium asperiores explicabo non id, incidunt exercitationem aperiam, similique! Illum aperiam expedita accusamus vero harum, laboriosam.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quisquam, harum dignissimos. Dolorem nesciunt, nostrum nulla accusantium voluptas repellat nam aperiam facilis. Vero deserunt nobis, voluptatibus explicabo tenetur nisi iste.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis minus nisi praesentium delectus voluptas ab cumque sapiente, non earum, nesciunt hic? Iste quae libero eaque enim ad sit sed, perspiciatis.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, voluptatum velit repudiandae alias temporibus accusantium asperiores explicabo non id, incidunt exercitationem aperiam, similique! Illum aperiam expedita accusamus vero harum, laboriosam.lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos quisquam, harum dignissimos. Dolorem nesciunt, nostrum nulla accusantium voluptas repellat nam aperiam facilis. Vero deserunt nobis, voluptatibus explicabo tenetur nisi iste.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis minus nisi praesentium delectus voluptas ab cumque sapiente, non earum, nesciunt hic? Iste quae libero eaque enim ad sit sed, perspiciatis.</p>
      </div>
    </div>
  </div>
</body>
</html>