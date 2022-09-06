<form action="?action=update&controller=sinh_vien" method="POST">
    <input type="hidden" name="id" id="" value="<?php echo $each->get_id()?>">   
    Tên
    <input type="text" name="ten" id="" value="<?php echo $each->get_ten()?>">
    <br>
    Lớp
    <select name="id_lop" id="">
        <?php foreach($lops as $lop):?>
            <option value="<?php echo $lop->get_id()?>"
            <?php if($lop->get_id()===$each->get_id_lop())
                echo "selected";
            ?>>
                <?php echo $lop->get_ten()?>
            </option>
        <?php endforeach?>
    </select>
    <br>
    <button>Sửa</button>
</form>