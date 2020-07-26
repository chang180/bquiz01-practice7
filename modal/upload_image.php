<form action="api/upload.php" method="post" enctype="multipart/form-data">
<h3>更新校園映像資料</h3>
<hr>
校園映像資料圖片：<input type="file" name="name"><br>
<input type="hidden" name="table" value="<?=$_GET['do'];?>">
<input type="hidden" name="id" value="<?=$_GET['id'];?>">
<div>
    <input type="submit" value="更新"><input type="reset" value="重肁">
</div>
</form>