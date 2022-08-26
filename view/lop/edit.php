<form  action="?action=update&controller=lop" method="POST">
    <input type="hidden" name="id" id="" value="<?php echo $each['id']?>">
    Tên
    <input type="text" name = "ten" value="<?php echo $each['ten']?>">
    <button>Sửa</button>
</form>