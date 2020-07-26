<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3>新增最新消息資料</h3>
    <hr>
    最新消息資料：<textarea name="text" cols="60" rows="5"></textarea><br>
    <div>
        <input type="hidden" name="table" value="<?= $_GET['do']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重肁">
    </div>
</form>