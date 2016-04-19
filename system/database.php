<?php
//Connect to database
$db = mysqli_connect('localhost', 'root', '', 'fahrenheit451') or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");

function get_all($sql)
{
    global $db;
    $result = array();
    $query_result = mysqli_query($db, $sql) or exit(mysqli_error($db));
    while ($row = mysqli_fetch_assoc($query_result)) {
        $result[] = $row;
    }
    return $result;
}
function get_first($sql)
{
    global $db;
    $query_result = mysqli_query($db, $sql) or exit(mysqli_error($db));
    $result = mysqli_fetch_assoc($query_result);
    return empty($result) ? array() : $result;
}
function add_book($title, $author, $price)
{
    global $db;
    $title = mysqli_real_escape_string($db, $title);
    mysqli_query($db, "INSERT INTO book (title, author_id, price) VALUES ('$title', $author, $price)") or exit(mysqli_error($db));
    return mysqli_insert_id($db);
}