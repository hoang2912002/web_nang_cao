<form action="?action=store&controller=sinh_vien" method="POST">
    Tên
    <input type="text" name="ten" id="">
    <br>
    Lớp
    <select name="id_lop" id="">
        <?php foreach($lops as $lop):?>
            <option value="<?php echo $lop->get_id()?>">
                <?php echo $lop->get_ten()?>
            </option>
        <?php endforeach?>
    </select>
    <button>Thêm</button>
</form>