<div class="row">
    <div class="col-1">
        <nav class="menu side hijau">
            <div><h1>HRIS</h1></div>
            <a href="<?php echo site_url("/")?>"><li class="">Home</li></a>
            <a href="<?php echo site_url("employees")?>"><li class="active">Employee</li></a>
            <a href="<?php echo site_url("/")?>"><li class="">Holiday</li></a>
            <a href="<?php echo site_url("/")?>"><li class="">Payroll</li></a>
            <a href="<?php echo site_url("/")?>"><li class="">Attendent</li></a>
        </nav>
    </div>
    <div class="col-11">
        <nav class="menu top hijau">
            <a href="<?php echo site_url("employees/create")?>"><li class="">New</li></a>
            <a href="<?php echo site_url("employees/edit/".$employee['id'])?>"><li class="active">Update</li></a>
            <a href="<?php echo site_url("/")?>"><li class="">Delete</li></a>
        </nav>
        <div class="content">
        <h2><?php echo $title; ?></h2>

        <?php echo form_open('employees/edit'); ?>
            <div class="input">
                <label>ID</label>
                <input type="text" name="id" value="<?php echo $employee['id'];?>" readonly disabled>
            </div>

            <div class="input">
                <label>Full name</label>
                <input type="text" name="fullname" value="<?php echo $employee['fullname'];?>">
            </div>
            
            <div class="input">
                <label>Department</label>
                <select name="department">
                    <?php foreach($department as $list): 
                        if($list == $employee['department']){
                        ?>
                        <option value="<?php echo $list; ?>" selected><?php echo $list; ?></option>
                        <?php }else{ ?>
                        <option value="<?php echo $list; ?>"><?php echo $list; ?></option>
                    <?php }endforeach; ?>
                </select>
                
            </div>
            <button class="tombol biru">Update</button>

        </form>
        <div class="<?php if(validation_errors()) echo 'message merah'?>">
            <?php echo validation_errors(); ?>
        </div>

        <div class="<?php if($result == 'success') echo 'message hijau'; else echo "message no"?>">
            <?php echo "Successfully update existing employee!"; ?>
        </div>
        
        </div>
    </div>
</div>
