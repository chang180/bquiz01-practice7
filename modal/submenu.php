<h3 class="cent">編輯次選單</h3>
<form action="api/submenu.php?parent=<?=$_GET['id'];?>" method="post">
    <table id="more">
        <tr>
            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
        include_once "../base.php";
        $db = new DB('menu');
        $rows = $db->all(['parent' => $_GET['id']]);
        foreach ($rows as $row) {
        ?>
            <tr>
                <td><input type="text" name="name[]" value="<?= $row['name']; ?>"></td>
                <td><input type="text" name="text[]" value="<?= $row['text']; ?>"></td>
                <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                <input type="hidden" name="id[]" value="<?=$row['id'];?>">
            </tr>
        <?php } ?>
    </table>
    <tr>
        <button>修改確定</button>
        <button type="reset">重置</button>
        <button type="button" onclick="moreSub()">更多次選單</button>
    </tr>
</form>
<script>
    function moreSub() {
        let el = `
        <tr>
            <td><input type="text" name="name2[]"></td>
            <td><input type="text" name="text2[]"></td>
        </tr>
        `;
        $("#more").append(el);
    }
</script>