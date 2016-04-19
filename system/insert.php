<?php
require_once "database.php";
print_r($_POST);
IF (!empty($_POST)) {
    $new_id = add_book($_POST["title"], $_POST["author"], $_POST["price"]);
    $new_book = get_first("SELECT * FROM book WHERE book_id = $new_id");
    print_r($new_book);
}