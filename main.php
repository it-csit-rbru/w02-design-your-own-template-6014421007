<!-- include header -->
<?php include 'header.php';?>
      <section class="mt-5">
          <div class="container-fluid mt-5">
              <div class="row">
                  <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <?php for($item=1; $item <= 20; $item++){ ?>
                                    <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <?=$item;?>
                                    </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>
<!-- include footer -->
<?php include 'footer.php';?>