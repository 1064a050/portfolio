<h3>新增作品</h3>
<hr>
<form action="../api/add.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>作品縮圖：</td>
            <td><input type="file" name="img" ></td>
        </tr>
        <tr>
            <td>作品名稱：</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>作品內容說明：</td>
            <td><input type="text" name="text" ></td>
        </tr>
        <tr>
            <td>作品連結網址：</td>
            <td><input type="text" name="link" ></td>
        </tr>
    </table>
    <div><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>