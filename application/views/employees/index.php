<div class="row">
    <div class="col-1">
        <nav class="menu side hijau">
            <div><h1>ICON</h1></div>
            <li class="">Home</li>
            <li class="active">Employee</li>
            <li>Holiday</li>
            <li>Payroll</li>
            <li>Attendent</li>
        </nav>
    </div>
    <div class="col-10">
        <h2><?php echo $title; ?></h2>

    <?php foreach ($employees as $data): ?>

            <h3><?php echo $data['fullname']; ?></h3>
            <div class="main">
                    <?php echo $data['department']; ?>
            </div>
            <p><a href="<?php echo site_url('employees/'.$data['id']); ?>">View article</a></p>

    <?php endforeach; ?>
    </div>
</div>