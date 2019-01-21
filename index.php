<!-- include header -->
<?php include 'header.php';?>
      <section class="mt-5">
          <div class="container mt-5">
              <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <?php include 'sidebar.php'; ?>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class=" col-md-12 col-lg-12 col-xl-9 d-none d-sm-block">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                                                <div class="carousel-inner rounded mt-3" style="height:386px;">
                                                    <div class="carousel-item active">
                                                    <img src="images/show001.jpg" class="d-block w-100 " alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                    <img src="images/show002.jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                    <img src="images/show003.jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                    <div class="carousel-item">
                                                    <img src="images/show004.jpg" class="d-block w-100" alt="...">
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class=" col-md-12  col-lg-12 col-xl-3">
                                            <div class="row">
                                                <div class="col-md-4 col-lg-4 col-xl-12 mt-3">
                                                    <div class="card text-white">
                                                        <img src="images/001.jpg" class="card-img" alt="...">
                                                        <div class="card-img-overlay">
                                                            <h5 class="card-title">Card title</h5>
                                                            <p class="card-text">Last updated 3 mins ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-xl-12 mt-3">
                                                    <div class="card text-white ">
                                                        <img src="images/002.jpg" class="card-img" alt="...">
                                                        <div class="card-img-overlay">
                                                            <h5 class="card-title">Card title</h5>
                                                            <p class="card-text">Last updated 3 mins ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-4 col-xl-12 mt-3">
                                                    <div class="card text-white ">
                                                        <img src="images/003.jpg" class="card-img" alt="...">
                                                        <div class="card-img-overlay">
                                                            <h5 class="card-title">Card title</h5>
                                                            <p class="card-text">Last updated 3 mins ago</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <div class="card border-info">
                                                <div class="card-header text-white bg-info">
                                                    สินค้าทั้งหมด
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">
                                                        <?php 
                                                        //
                                                        require 'includes/connect_db.php';
                                                        $select_product_query =  mysqli_query($connect, "SELECT * FROM product");
                                                        if(mysqli_num_rows($select_product_query) > 0 ){
                                                            while($product = $select_product_query->fetch_assoc()) {
                                                        ?>
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card rounded-0 shadow-sm">
                                                                <img src="images/upload/product.png" class="img-fluid" alt="...">
                                                                <div class="card-body text-center">
                                                                    <p class="card-text h6">ราคา <?=$product['price']?> บาท</p>
                                                                </div>
                                                                <div class="card-footer">
                                                                    <a class="btn btn-info btn-sm btn-block" href="product.php?id=<?=$product['id']?>" role="button"><i class="fas fa-cart-arrow-down"></i> สั่งซื้อ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                            }
                                                        }else{
                                                        ?>
                                                        <div class="col-lg-12 text-center">
                                                            <h1>ไม่มีข้อมูล</h1>
                                                        </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <hr>
                                                    <?php ?>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <nav aria-label="Page navigation example ">
                                                                <ul class="pagination float-right">
                                                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                    <?php ?>
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
<?php include 'pages/footer.php';?>