 <?php

  require_once('database.php');

  $db = $conn; // DB Connection details;
  $tableName = 'gallery'; // Photo sharing  app table ;

  $getImage = fetch_image($tableName);

  // page the data retrieved
  function fetch_image($tableName)
  {
    global $db;
    $tableName = trim($tableName);
    if (!empty($tableName)) {
      $img_query = "SELECT * FROM " . $tableName . " ORDER BY id DESC";
      $result = $db->query($img_query);

      if ($result->num_rows > 0) {
        $row = $result->fetch_all(MYSQLI_ASSOC);
        return $row;
      } else {

        echo "No Image found in Database";
      }
    } else {
      echo "DB must be configured";
    }
  }

  ?>