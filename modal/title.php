<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3>新增標題區圖片</h3>
    <hr>
    標題區圖片：<input type="file" name="name"><br>
    標題區替代文字：<input type="text" name="text">
    <div>
        <input type="hidden" name="table" value="<?= $_GET['do']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重肁">
    </div>
</form>