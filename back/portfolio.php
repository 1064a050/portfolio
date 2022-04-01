<?php include_once "../base.php"; ?>

<link href="../css/levelb.css" rel="stylesheet" type="text/css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/js.js"></script>
<div style="width:100%;text-align:center;font-size:20px;margin:20px auto;">
    <p>作品集管理</p>

    <form method="post" action="../api/edit.php ">
            <table width="100%">
                <tbody>
                    <tr class="yel">
                        <td width="12%">作品縮圖</td>
                        <td width="12%">作品主題</td>
                        <td width="30%">作品說明</td>
                        <td width="30%">作品連結</td>
                        <td width="6%">顯示</td>
                        <td width="6%">刪除</td>
                    </tr>
                    <?php
                    $rows = $Append->all();
                    foreach ($rows as $row) {
                        $checked = ($row['sh'] == 1) ? 'checked' : '';
                    ?>
                        <tr class="trce">
                            <td>
                                <a href="<?= $row['link']; ?>" target="_blank">
                                    <img src="../img/<?= $row['img']; ?>" style="width:120px;height:80px"></a>
                            </td>
                            <td width="10%">
                                <input type="text" name="name[]" value="<?= $row['name']; ?>" style="width:100%;padding:10px;">
                            </td>
                            <td>
                                <input type="text" name="text[]" value="<?= $row['text']; ?>" style="width:100%;padding:10px;">
                            </td>
                            <td>
                                <input type="text" name="link[]" value="<?= $row['link']; ?>" style="width:100%;padding:10px;">
                            </td>
                            <td>
                                <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= $checked; ?>>
                            </td>
                            <td>
                                <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                            </td>
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
            <table style="margin-top:40px; width:70%;">
                <tbody>
                    <tr>
                        <td width="200px">
                        <input type="button" onclick="op('#cover','#cvr','./modal/portfolio.php')" value="新增作品">
                        <td class="cent">
                            <input type="submit" value="修改確定">
                            <input type="reset" value="重置">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>


</div>