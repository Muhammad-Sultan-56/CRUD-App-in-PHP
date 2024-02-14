<?php
include("config.php");

if (isset($_POST['query'])) {
    $search = $_POST['query'];
    $search = mysqli_real_escape_string($cn, $search);

    $query = "SELECT * FROM user_info WHERE name LIKE '%{$search}%' OR email LIKE '%{$search}%' OR address LIKE '%{$search}%'";
    $result = mysqli_query($cn, $query);
    $output = '';

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '<tr>';
            $output .= '<th scope="row">' . $row['id'] . '</th>';
            $output .= '<td>' . $row['name'] . '</td>';
            $output .= '<td>' . $row['email'] . '</td>';
            $output .= '<td>' . $row['age'] . '</td>';
            $output .= '<td>' . $row['address'] . '</td>';
            $output .= '<td><img src="' . $row['photo'] . '" alt="Image not found" height="50px"></td>';
            $output .= '<td>
                            <a href="edit-user.php?id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a>
                            <a href="fir-delete.php?id=' . $row['id'] . '" class="btn btn-danger btn-sm">Delete</a>
                        </td>';
            $output .= '</tr>';
        }
    } else {
        $output .= '<tr class="text-center"><td colspan="7">No results found</td></tr>';
    }

    echo $output;

    mysqli_close($cn);
}


