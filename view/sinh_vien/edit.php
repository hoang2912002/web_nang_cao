<form  action="?action=update&controller=<?php echo $controller;?>" method="POST">
    <input type="hidden" name="id" id="" value="<?php echo $each['id']?>">
    Tên
    <input type="text" name = "ten" value="<?php echo $each['ten']?>">
    <br>
    Lớp
    <select name="id_lop" id="">
        <?php foreach($lops as $lop):?>
            <option value="<?php echo $lop['id']?>" <?php if($lop['id']=== $each['id_lop']) echo "selected"?>>
                <?php echo $lop['ten']?>
            </option>
        <?php endforeach?>
    </select>
    <br>
    <button>Sửa</button>
</form>