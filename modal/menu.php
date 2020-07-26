<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3>新增主選單名稱</h3>
    <hr>
    主選單名稱：<input type="text" name="name"><br>
    連結網址：<input type="text" name="text">
    <div>
        <input type="hidden" name="table" value="<?= $_GET['do']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重肁">
    </div>
</form>