<form action="?action=update" method="POST">
    <input type="hidden" name="id" id="" value="<?php echo $each->get_id()?>">   
    Họ
    <input type="text" name="ho" id="" value="<?php echo $each->get_ho()?>">
    <br>
    Tên
    <input type="text" name="ten" id="" value="<?php echo $each->get_ten()?>">
    <br>
    <button>Sửa</button>
</form>