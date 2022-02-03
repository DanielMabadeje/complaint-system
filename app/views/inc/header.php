<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <title><?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bootstrap.css">
    <link href='<?php echo URLROOT; ?>/css/register.css' rel='stylesheet'>
</head>

<body>
    


<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Complaint registration</span>
    </div>
      

      <?php if(isAdmin()): ?>

        <ul class="nav-links">
          <li>
            <a href="" class="active">
              <i class="bx bx-folder"></i>
              <span class="links_name">Dashboard</span>
            </a>
          </li>

          <li>
            <a href="<?= URLROOT ?>admin/complaints">
              <i class="bx bx-book"></i>
              <span class="links_name">Complaint</span>
            </a>
          </li>
        
          <!-- <li>
            <a href="#">
              <i class='bx bx-pie-chart'></i>
              <span class="links_name">User Management</span>
            </a>
          </li> -->
        
          <!-- <li>
            <a href="#">
              <i class='bx bx-bulb' ></i>
              <span class="links_name">Feedback</span>
            </a>
          </li>  -->
        </ul>

        <?php elseif(isset($_SESSION['user_id'])): ?>

          <ul class="nav-links">
            <li>
              <a href="<?= URLROOT ?>complaints/add" class="active">
                <i class="bx bx-folder"></i>
                <span class="links_name">Submit Complaint</span>
              </a>
            </li>
            <li>
              <a href="<?= URLROOT ?>/complaints" >
                <i class='bx bx-list-ul'></i>
                <span class="links_name">List of Complaint</span>
              </a>
            </li>
        
            <li>
              <a href="<?= URLROOT ?>/pages/faq">
                <i class='bx bx-bulb' ></i>
                <span class="links_name">FAQ</span>
              </a>
            </li>
            
            <li>
              <a href="<?= URLROOT ?>/users/logout">
                <i class='bx bx-power-off' ></i>
                <span class="links_name">Logout</span>
              </a>
            </li>

          </ul>

        <?php else: ?>

          <ul class="nav-links">
            <li>
              <a href="<?= URLROOT ?>users/register" class="active">
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">User Registration</span>
              </a>
            </li>
            <li>
              <a href="<?= URLROOT ?>users/login" >
                <i class='bx bx-box' ></i>
                <span class="links_name">User Login</span>
              </a>
            </li>

            <li>
              <a href="<?= URLROOT ?>admins/login">
                <i class='bx bx-user' ></i>
                <span class="links_name">Admin Login</span>
              </a>
            </li>

            <div class="dropdown">
              <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                Link
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
              </ul>
          </ul>
      <?php endif; ?>
  </div>
</div>