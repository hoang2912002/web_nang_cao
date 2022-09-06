<a href="?action=create&controller=sinh_vien">Thêm</a>
<table border="1" style="width: 100%;">
    <tr>
        <td>Mã</td>
        <td>Tên</td>
        <td>Tên lớp</td>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    <?php foreach($arr as $each):?>
        <tr>
            <td>
                <?php echo $each->get_id()?>
            </td>
            <td>
                <?php echo $each->get_ten()?>
            </td>
            <td>
                <?php echo $each->get_ten_lop()?>
            </td>
            <td><a href="?action=edit&controller=sinh_vien&id=<?php echo $each->get_id()?>">Sửa</a></td>
            <td><a href="?action=delete&controller=sinh_vien&id=<?php echo $each->get_id()?>">Xóa</a></td>
        </tr>
    <?php endforeach?>
</table>