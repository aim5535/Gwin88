<?php
$data = json_decode(file_get_contents('data.json'), true);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data['banner'] = $_POST['banner'];
    $data['title'] = $_POST['title'];
    $data['join_link'] = $_POST['join_link'];
    file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
    echo "<p style='color:green;'>保存成功！</p>";
}
?>

<h2>后台管理</h2>
<form method="post">
  <label>Banner 图片链接：</label><br>
  <input type="text" name="banner" value="<?= $data['banner'] ?>" style="width:100%;"><br><br>

  <label>标题文字：</label><br>
  <input type="text" name="title" value="<?= $data['title'] ?>" style="width:100%;"><br><br>

  <label>加入按钮链接：</label><br>
  <input type="text" name="join_link" value="<?= $data['join_link'] ?>" style="width:100%;"><br><br>

  <button type="submit">保存设置</button>
</form>
