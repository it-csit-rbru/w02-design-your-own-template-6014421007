<!-- include header -->
<?php include 'header.php';?>
      <section class="mt-5">
          <div class="container">
              <div class="row">
                  <div class="col-lg-3 mt-5">
                    <?php include 'sidebar-dashboard.php';?>
                  </div>
                  <div class="col-lg-9 mt-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    
                                    <div class="row">
                                        <div class="col-lg-4 border-right">
                                            <img src="<?= $profile->image;?>" class="img-fluid rounded-circle" alt="">
                                            <hr>
                                            <input type="file" name="" id="">
                                        </div>
                                        <div class="col-lg-8">
                                            <p class="h2">คุณ : <?= $login->fname." ".$login->lname?> </p>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="h3">ข้อมูลส่วนตัว</p>
                                                    <form action="" method="post">
                                                        <div class="form-row">
                                                            <div class="col-lg-8">
                                                                <label for="">อีเมล์</label>
                                                                <input type="text" name="" value="<?=$login->email;?>" class="form-control form-control-sm" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-row mt-2">
                                                            <div class="col-lg-6">
                                                                <label for="">ชื่อ</label>
                                                                <input type="text" name="" value="<?=$login->fname;?>" class="form-control form-control-sm">
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="">นามสกุล</label>
                                                                <input type="text" name="" value="<?=$login->lname;?>" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                        <div class="form-row mt-2">
                                                            <p class="h4">ยอดคงเหลือ : <?=$profile->money." บาท";?></p>
                                                            <div class="col-lg-12">
                                                                <label for="">PayPal Key API</label>
                                                                <input type="text" name="" value="<?=$profile->paypal;?>" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-success float-right mt-4">บันทึก</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p class="h3">เปลี่ยน password</p>
                                                    <form action="" method="post">
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <label for="">รหัสอันเก่า</label>
                                                                <input type="text" name="" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <label for="">รหัสอันใหม่</label>
                                                                <input type="text" name="" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-lg-6">
                                                                <label for="">ยืนยันรหัาใหม่</label>
                                                                <input type="text" name="" class="form-control form-control-sm">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-sm btn-success float-right mt-4">ยืนยัน</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>
<!-- include footer -->
<?php include 'footer.php';?>