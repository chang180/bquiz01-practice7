<?php
include_once "../base.php";

$parent = $_GET['parent'];
foreach ($_POST['id'] as $key => $id) {
    if (!empty($_POST['del']) && in_array($id,$_POST['del'])) {
        $Menu->del($id);
    } else {
        $sub = $Menu->find($id);
        $sub['name'] = $_POST['name'][$key];
        $sub['text'] = $_POST['text'][$key];
        $Menu->save($sub);
    }
}
if (!empty($_POST['name2'])) {
    foreach ($_POST['name2'] as $key=>$name) {
        $new['name'] = $name;
        $new['text'] = $_POST['text2'][$key];
        $new['parent'] = $parent;
        $new['sh'] = 1;
        $Menu->save($new);
    }
}
to("../admin.php?do=menu");
