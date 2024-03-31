<?php

$db = new PDO('mysql:host=localhost;dbname=test2', 'root', 'mysql');

  $info = [];

  if ($query = $db->query("SELECT * FROM каталог2")) {
    $info = $query->fetchAll(PDO::FETCH_ASSOC);
  } else {
    print_r($db->errorInfo());
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My test HTML</title>
</head>
<body>
  <?php foreach ($info as $data): ?>
    <div style="width: 200px;">
   <div style="height: 5px; margin: 20px;"></div>
    <img src="<?php echo $data['images']; ?>" alt="изображение" width=" 150">
  <h4><?php echo $data['name'] ?></h4>
  <h2><?php echo $data['price'] ?></h2>
  </div>
  <?php endforeach; ?>
</body>
</html>
