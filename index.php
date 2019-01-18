<!-- include header -->
<?php include 'header.php';?>
      <section class="mt-5">
          <div class="container mt-5">
              <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-md-3">
                                    <div class="card border-info">
                                        <div class="card-body">
                                            สถาณะเจ้าหน้าที่ : 
                                        </div>
                                    </div>
                                    <div class="card border-info mt-3">
                                        <div class="card-header bg-info">
                                            หมวดหมู่สินค้า
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <a href="#" class="list-group-item list-group-item-action">Menu 1</a>
                                            <a href="#" class="list-group-item list-group-item-action">Menu 2</a>
                                            <a href="#" class="list-group-item list-group-item-action">Menu 3</a>
                                            <a href="#" class="list-group-item list-group-item-action">Menu 4</a>
                                            <a href="#" class="list-group-item list-group-item-action">Menu 5</a>
                                            <a href="#" class="list-group-item list-group-item-action">Menu 6</a>
                                            <a href="#" class="list-group-item list-group-item-action">Menu 7</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                                                <div class="carousel-inner rounded" style="height:300px;">
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
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="card-body">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <div class="card border-info">
                                                <div class="card-header bg-info">
                                                    สินค้าทั้งหมด
                                                </div>
                                                <div class="card-body">
                                                    <div class="row">

                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <?php for($item=1;$item<=20;$item++){?>
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card shadow-sm">
                                                                <img src="images/show002.jpg" class="img-fluid" alt="...">
                                                                <div class="card-body">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
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
          </div>
      </section>
<!-- include footer -->
<?php include 'footer.php';?>