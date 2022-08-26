<form  action="?action=store&controller=<?php echo $controller;?>" method="POST">
    Tên
    <input type="text" name = "ten">
    <br>
    Lớp
    <select name="id_lop" id="">
        <?php foreach($lops as $lop):?>
            <option value="<?php echo $lop['id']?>">
                <?php echo $lop['ten']?>
            </option>
        <?php endforeach?>
    </select>
    <button>Thêm</button>
</form>