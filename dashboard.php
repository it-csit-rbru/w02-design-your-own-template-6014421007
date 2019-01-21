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
                        <div class="col-lg-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <i class="far fa-list-alt fa-5x"></i>
                                        </div>
                                        <div class="col-lg-7">
                                            <p class="h6">รายการทั้งหมด</p>
                                            <p class="h2 float-right">
                                                <?php
                                                    require 'includes/connect_db.php';
                                                    $select_row = mysqli_query($connect,"SELECT * FROM product");
                                                    $row_product = mysqli_num_rows($select_row);
                                                    print_r($row_product);
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <i class="far fa-chart-bar fa-5x"></i>
                                        </div>
                                        <div class="col-lg-7">
                                            <p class="h6">รายการสั่งซื้อ</p>
                                            <p class="h2 float-right">
                                                <?php
                                                    require 'includes/connect_db.php';
                                                    $select_row = mysqli_query($connect,"SELECT * FROM product");
                                                    $row_product = mysqli_num_rows($select_row);
                                                    print_r($row_product);
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-5">
                                        <i class="far fa-credit-card fa-5x"></i>
                                        </div>
                                        <div class="col-lg-7">
                                            <p class="h6">ยอดเงินทั้งหมด</p>
                                            <p class="h2 float-right">
                                                <?php
                                                    require 'includes/connect_db.php';
                                                    $select_row = mysqli_query($connect,"SELECT * FROM product");
                                                    $row_product = mysqli_num_rows($select_row);
                                                    print_r($row_product);
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <canvas id="myChart" style="height:200px;"></canvas>
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