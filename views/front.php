<?php require $_SERVER['DOCUMENT_ROOT']."/fahrenheit451/controllers/front.php"; ?>

<?php if (count($books) > 0): ?>
<div class="row">
    <div class="col-xs-12">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book): array_map('htmlentities', $book); ?>
                <tr>
                    <td><?= $book["title"] ?></td>
                    <td><?= $book["name"] ?></td>
                    <td><?= $book["price"] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif; ?>