<!doctype html>
<html>
<head>
    <title>My Site</title>
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">
=======
    
>>>>>>> 62eb11614248ebc88b55f36b0a00012ce554d9c8
</head>
<body>
    
<?php if ($this->session->userdata('user_id') == false):?>

    <h1>Welcome Home</h1>

    <nav>
        <a href="<?=site_url('dashboard/login')?>">Login</a>
    </nav>

<?php elseif($this->session->userdata('is_admin') == true):?>

    <h1>Admin Panel</h1>

    <nav>
        Manage Users | <a href="<?=site_url('admin/logout')?>">Logout</a>
    </nav>

<?php else:?>

    <h1>User Dashboard</h1>

    <nav>
        <a href="<?=site_url('dashboard/home')?>">Dashboard</a> | 
        <a href="<?=site_url('dashboard/account')?>">My Account</a> | 
        <a href="<?=site_url('dashboard/logout')?>">Logout</a>
    </nav>


<?php endif; ?>
