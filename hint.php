



<?php
include("config.php");

if (isset($_POST['query'])) {
$search = $_POST['query'];
$search = mysqli_real_escape_string($cn, $search);

$suggestion_query = "SELECT name FROM user_info WHERE name LIKE '%{$search}%' LIMIT 5";
$result = mysqli_query($cn, $suggestion_query);

$data = array();

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row['name'];
    }
}
}
echo json_encode($data);


mysqli_close($cn);

?>