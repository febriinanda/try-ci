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
            <a href="<?php echo site_url("employees")?>"><li class="">Update</li></a>
            <a href="<?php echo site_url("/")?>"><li class="">Delete</li></a>
        </nav>
        <div class="content">
        <h2><?php echo $title; ?></h2>
        <?php foreach ($employees as $data): ?>
            <div class="card hijau">
                <div class="content">
                    <div class="title">
                        <?php echo $data['fullname']; ?>
                    </div>
                    <div class="subtitle">
                        <?php echo $data['department']; ?> Department
                    </div>
                    <div class="description">
                        <?php echo $data['fullname']; ?> joined in <?php echo $data['department']; ?> Department from 2010
                    </div>
                    
                </div>
                <div class="action">
                    <a href="<?php echo site_url('employees/'.$data['id']); ?>">View</a>
                    <a href="<?php echo site_url('employees/edit/'.$data['id']); ?>">Edit</a>
                    <a href="<?php echo site_url('employees/delete/'.$data['id']); ?>">Delete</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>