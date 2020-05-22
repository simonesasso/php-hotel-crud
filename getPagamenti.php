
    <?php

    header('Content-Type: application/json');

    $myArr = [];


    $server = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbName = 'hoteldb';

    $conn = new mysqli($server, $username, $password, $dbName);

    if ($conn -> connect_errno) {
      echo $conn -> connect_errno;
      return;
    }

    $sql = "
       SELECT id, status, price
       FROM pagamenti
     ";

    $results = $conn -> query($sql);

    if ($results -> num_rows < 1) {
        echo "no result";
        return;
      }

    while ($row = $results -> fetch_assoc()) {
      $myArr[] = $row["id"] . " "  . $row["status"] . " " . $row["price"];

    }
    echo json_encode($myArr);
    ?>
