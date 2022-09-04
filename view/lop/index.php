<a href="?action=create">Thêm</a>
<table border="1" style="width: 100%;">
    <tr>
        <td>Mã</td>
        <td>Họ và Tên</td>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    <?php foreach($arr as $each):?>
        <tr>
            <td>
                <?php echo $each->get_id()?>
            </td>
            <td>
                <?php echo $each->get_ho_ten()?>
            </td>
            <td><a href="?action=edit&id=<?php echo $each->get_id()?>">Sửa</a></td>
            <td><a href="?action=delete&id=<?php echo $each->get_id()?>">Xóa</a></td>
        </tr>
    <?php endforeach?>
</table>