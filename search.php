<?php include './inc/catalog-nav.php' ?>
<?php require './inc/dbhandler.php' ?>

<h1>Search Results</h1>

<div style="margin-top: 100px;">

<?php 
if (isset($_POST['submit-search'])) {
    $search = mysqli_real_escape_string($conn, $_POST['search']);
    $sql = "SELECT * FROM article WHERE A_Title LIKE '%$search%' OR A_Text LIKE '%$search%' 
    OR A_Author LIKE '%$search%' OR A_Date LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);

    echo "There are ".$queryResult." results!";

    if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<a href='article.php?title=".$row['A_Title']."&date=".$row['A_Date']."'><div>
                <h3>".$row['A_Title']."</h3>
                <p>".$row['A_Text']."</p>
                <p>".$row['A_Author']."</p>
                <p>".$row['A_Date']."</p>
            </div></a>";
        }
    } else {
        echo "There are no results matching your search";
        exit();
    }
}


?>


</div>