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
                                        <div class="col-lg-6">
                                            <img src="<?= $profile->image;?>" class="img-fluid " alt="">
                                            <input type="file" id="input-file-now" value="<?= $profile->image;?>" class="dropify">
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