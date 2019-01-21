<?php
    session_start();
    
    if(isset($_SESSION['login'])){
        $login = json_decode($_SESSION['login']);
        require 'includes/connect_db.php';
            $select_profile = $connect->query("SELECT * FROM users_profile WHERE user_id=$login->id");
            if($select_profile->num_rows > 0){
                $profile = $select_profile->fetch_object();
            } 
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Include Editor style. -->
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_style.min.css' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- form Uploads -->
    <link href="fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css" />

    <!-- Include Editor style. -->
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_editor.min.css' rel='stylesheet' type='text/css' />
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@2.9.1/css/froala_style.min.css' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="js/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="js/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="js/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
    <link href="js/switchery/switchery.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-info border-bottom border-secondary">
        <div class="container">
            <a class="navbar-brand" href="main.php">Navbar Shop</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="main.php">สินค้าทั้งหมด <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mr-5">
                    <?php if(isset($_SESSION['login'])){ ?>
                    <li class="nav-item dropdown">
                        
                        <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?= $profile->image;?>" class="img-fluid rounded-circle" width="23" alt="">
                            <?= $login->name; ?>
                        </a>
                        <div class="dropdown-menu rounded-0" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                            <a class="dropdown-item" href="profile.php">โปรไฟล์</a>
                            <a class="dropdown-item" href="setting.php">ตั้งค่า</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="login/logout_check.php">ออกจากระบบ</a>
                        </div>
                    </li>
                    <?php }else{?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">เข้าสู่ระบบ</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light" href="signup.php">สมัครสมาชิก</a>
                    </li>
                    <?php }?>
                </ul>
            </div>
        </div>
      </nav>
