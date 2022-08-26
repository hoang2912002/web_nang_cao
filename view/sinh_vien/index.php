<h1>
    Danh sách sinh vien
</h1>
<a href="?action=create&controller=sinh_vien">
    Thêm 
</a>
<table border="1" style="width: 100%;">
    <tr>
        <td>
            Mã
        </td>
        <td>Tên</td>
        <td>Tên lớp</td>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    <?php foreach ($result as $each):?>
    <tr>
        <td><?php echo $each['id']?></td>
        <td><?php echo $each['ten']?></td>
        <td><?php echo $each['ten_lop']?></td>
        <td>
            <a href="?action=edit&controller=sinh_vien&id=<?php echo $each['id']?>">
                Sửa 
            </a>
        </td>
        <td>
            <a href="?action=delete&controller=sinh_vien&id=<?php echo $each['id']?>">
                Xóa 
            </a>
        </td>
    </tr>
    <?php endforeach?>
</table>