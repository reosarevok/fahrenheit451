<div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
        <h2>Add book</h2>
        <form action="system/insert.php" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" />
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input class="form-control" type="text" name="author" id="author" />
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <div class="input-group">
                    <input class="form-control" type="text" name="price" id="price" />
                    <div class="input-group-addon">€</div>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Enter</button>
        </form>
    </div>
</div>