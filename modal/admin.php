<form action="api/add.php" method="post" enctype="multipart/form-data">
    <h3>新增管理者帳號</h3>
    <hr>
    帳號：<input type="text" name="acc"><br>
    密碼：<input type="text" name="pw"><br>
    確認密碼<input type="text" name="pw2">
    <div>
        <input type="hidden" name="table" value="<?= $_GET['do']; ?>">
        <input type="submit" value="新增"><input type="reset" value="重肁">
    </div>
</form>