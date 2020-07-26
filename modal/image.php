<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3>新增校園映像圖片</h3>
    <hr>
    校園映像圖片：<input type="file" name="name"><br>
    <div>
        <input type="hidden" name="table" value="<?= $_GET['do']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重肁">
    </div>
</form>