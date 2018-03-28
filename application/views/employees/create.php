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

            <label for="title">Title</label>
            <input type="input" name="title" /><br />

            <label for="text">Text</label>
            <textarea name="text"></textarea><br />

            <input type="submit" name="submit" value="Create news item" />

        </form>
        <div class="<?php if(validation_errors()) echo 'message merah'?>">
            <?php echo validation_errors(); ?>
        </div>
        
        </div>
    </div>
</div>
