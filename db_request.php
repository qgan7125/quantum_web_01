<?php

$host = "localhost";
$user = "root";
$pwd = "";
$db = "websystem";


$conn = mysqli_connect($host, $user, $pwd, $db);

if (!$conn){
    die("Could not connect because ".mysqli_error($conn));
}



// $sql = "SELECT * FROM events";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "id: " . $row["id"]. " - event: " . $row["event"]. "<br>";
//     }
//   } else {
//     echo "0 results";
//   }

echo $_POST['content'];
if (isset($_POST['content']) && !empty($_POST['content'])){
    $sql = "INSERT INTO events (id, event) VALUE(0, '".$_POST['content']."')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}else{
    echo "None";
}

$conn->close()
?>