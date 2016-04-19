<?php
require $_SERVER['DOCUMENT_ROOT']."/fahrenheit451/system/database.php";

    $books = get_all("SELECT *
                   FROM book
                   JOIN author USING (author_id)");
