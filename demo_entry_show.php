<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myhmsdb";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "INSERT INTO disease_entry (name, lastName, email) VALUES ('Tom', 'Jackson', 'tom@jackson.tld')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Inserting the data</title>
</head>

<body>
    <center>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myhmsdb";
        $conn = mysqli_connect("localhost", "root", "", "myhmsdb");


        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }


        $name_disease = $_REQUEST['name_disease'];
        $about_disease = $_REQUEST['about_disease'];
        $causes_disease = $_REQUEST['causes_disease'];
        $symptoms_disease = $_REQUEST['symptoms_disease'];
        $treatment_disease = $_REQUEST['treatment_disease'];
        $medicines_disease = $_REQUEST['medicines_disease'];
        // Performing insert query execution
        // here our table name is college
        
        $sql = "INSERT INTO disease_entry VALUES (''$name_disease','$about_disease','$causes_disease','$symptoms_disease','$treatment_disease','$medicines_disease')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$name_disease\n $about_disease\n $causes_disease\n $symptoms_disease\n $treatment_disease\n $medicines_disease");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>