<h1>
    Danh sách sinh viên 
</h1>
<a href="?action=create">Thêm sinh viên</a>
<table border="1" style="width: 100%;">
    <tr>
        <th>Mã</th>
        <th>Tên</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    <?php foreach($result as $each):?>
    <tr>
        <td>
            <?php echo $each['id']?>
        </td>
        <td>
            <?php echo $each['ten']?>
        </td>
        <td>
            <a href="?action=edit&id=<?php echo $each['id']?>">
                Sửa
            </a>
        </td>
        <td>
            <a href="?action=delete&id=<?php echo $each['id']?>">Xóa</a>
        </td>
    </tr>
    <?php endforeach?>
</table>