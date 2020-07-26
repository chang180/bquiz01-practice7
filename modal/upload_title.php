<form action="api/upload.php" method="post" enctype="multipart/form-data">
<h3>更新圖片</h3>
<hr>
標題區圖片：<input type="file" name="name"><br>
<input type="hidden" name="table" value="<?=$_GET['do'];?>">
<input type="hidden" name="id" value="<?=$_GET['id'];?>">
<div>
    <input type="submit" value="更新"><input type="reset" value="重肁">
</div>
</form>