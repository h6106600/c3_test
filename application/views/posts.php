<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Insert 1</h2>
            <form action="<?= base_url(); ?>index.php/post/insert1" method="post">
                <div class="form-group">
                    <label for="title">title:</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="content">content:</label>
                    <input type="text" class="form-control" name="content">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4">
            <h2>Update 1</h2>
            <form action="<?= base_url(); ?>index.php/post/update1" method="post">
                <div class="form-group">
                    <label for="id">id:</label>
                    <input type="text" class="form-control" name="id">
                </div>
                <div class="form-group">
                    <label for="title">title:</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="content">content:</label>
                    <input type="text" class="form-control" name="content">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4">
        <h2>Delete 1</h2>
            <form action="<?= base_url(); ?>index.php/post/delete1" method="post">
                <div class="form-group">
                    <label for="id">id:</label>
                    <input type="text" class="form-control" name="id">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
    <?php foreach($data as $v):  ?>
        <div class="col-md-4">
            <h3><?= $v['id'] ?></h3>
            <h4><?= $v['title'] ?></h4>
            <p><?= $v['content'] ?></p>
        </div>
    <?php endforeach ?>
    </div>
</div>


<br>
<br>

</body>
</html>