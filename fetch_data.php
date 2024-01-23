<?php

// include("config.php");

// $output = '';

// if (isset($_POST['query'])) {
//     $search = $_POST['query'];
//     $search = mysqli_real_escape_string($conn, $search);

//     $query = "SELECT * FROM user_info WHERE name LIKE '%{$search}%' OR email LIKE '%{$search}%' OR age LIKE '%{$search}%' OR address LIKE '%{$search}%' ";
//     $result = $conn->query($query);
// $i = 1;
//     if ($result->num_rows > 0) {
//         while ($row = $result->fetch_assoc()) {
//             $output .= '<tr>';
//             $output .= '<td>' . $i . '</td>';
//             $output .= '<td>' . $row['name'] . '</td>';
//             $output .= '<td>' . $row['email'] . '</td>';
//             $output .= '<td>' . $row['age'] . '</td>';
//             $output .= '<td>' . $row['address'] . '</td>';
//             $output .= '<td> <img src='. $row['photo'] . ' alt="Image not found" height="50px" ></td>';

//             $output .= '</tr>';
//             $i++;
//         }
//     } else {
//         $output .= '<tr><td colspan="3">No results found</td></tr>';
//     }

//     echo $output;
// }

// $cn->close();
?>


