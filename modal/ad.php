<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3>新增動態文字廣告</h3>
    <hr>
    動態文字廣告：<input type="text" name="text">
    <div>
        <input type="hidden" name="table" value="<?= $_GET['do']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重肁">
    </div>
</form>