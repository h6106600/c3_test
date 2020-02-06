
<div class="container">
    <div class="row">
    <?php foreach($data as $v):  ?>
        <div class="col-md-4">
        <h3><?= $v['title'] ?></h3>
        <p><?= $v['content'] ?></p>
        </div>
    <?php endforeach ?>
    </div>
</div>

<br>
<br>

</body>
</html>
