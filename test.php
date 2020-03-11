<?php include_once './inc/dbhandler.php' ?>
<?php include './inc/nav.php' ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
$sql = "SELECT * FROM Customer;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['FirstName']." ";
        echo $row['LastName']."<br>";
        echo $row['ShippingAddress'];
    }
}
?>