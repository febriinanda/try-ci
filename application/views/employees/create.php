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
            <a href="<?php echo site_url("employees/create")?>"><li class="active">New</li></a>
            <a href="<?php echo site_url("employees")?>"><li class="">Update</li></a>
            <a href="<?php echo site_url("/")?>"><li class="">Delete</li></a>
        </nav>
        <div class="content">
        <h2><?php echo $title; ?></h2>

        <?php echo form_open('employees/create'); ?>

            <div class="input">
                <label>First name</label>
                <input type="text" name="firstname">
            </div>
            <div class="input">
                <label>Last name</label>
                <input type="text" name="lastname">
            </div>
            <div class="input">
                <label>Department</label>
                <input type="text" name="department">
            </div>
            <button class="tombol biru">Create</button>

        </form>
        <div class="<?php if(validation_errors()) echo 'message merah'?>">
            <?php echo validation_errors(); ?>
        </div>

        <div class="<?php if($result == 'success') echo 'message hijau'; else echo "message no"?>">
            <?php echo "Successfully add new employee!"; ?>
        </div>
        
        </div>
    </div>
</div>
