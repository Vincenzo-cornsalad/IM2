<?php
include 'db/dbconnect.php';

$aid = $_SESSION['aid'];


$sql = "SELECT account.accid,"
        . " account.firstname,"
        . " account.lastname,"
        . " post.postid, post.content,"
        . " post.post_date,"
        . " post.post_time"
        . " FROM account"
        . " INNER JOIN post ON account.accid=post.accid;";

$result = $con-> query($sql);


while($row=mysqli_fetch_assoc($result)){
    echo "<div class='post'>";
        echo "<div class='post'>";
        echo $_SESSION['firstname']." ".$_SESSION['lastname'];
        echo "</div>";
        echo "<div class='post-content'>";
        echo $row['content'];
        echo "</div>";
    echo "</div>";
}
$con->close();