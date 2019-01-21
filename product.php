<?php include 'header.php';?>
    <?php 
        if(isset($_GET['id'])){
            $product_id = $_GET['id'];
            require 'includes/connect_db.php';
            $select_product_query = $connect->query("SELECT * FROM product WHERE id='$product_id'");
        }
        
    ?>
      <section class="mt-5">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 mt-5">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <?php
                                    if($select_product_query->num_rows > 0){
                                        $product = $select_product_query->fetch_object();
                                ?>
                                <div class="col-lg-9">
                                    <h1><?=$product['name']?></h1>
                                    <hr>
                                    <div class="row mt-3">
                                        <div class="col-lg-8">
                                            <img src="<?=$product->image;?>" class="img-fluid img-thumbnail" alt="">
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    
                                                    <table class="table table-sm table-borderless mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">ชื่อ :</td>
                                                                <td class=""><?=$product->name;?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">หมวดหมู่ :</td>
                                                                <td class=""><?=$product->name;?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">ราคา :</td>
                                                                <td class=""><?=$product->price;?> บาท</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>                                                
                                            <button type="submit" class="btn btn-sm btn-success mt-3 btn-block">หยิบใส่ตะกร้าสินค้า</button>
                                            <p class="mt-4">Tag : 
                                                <?php for($tag = 1; $tag <=3 ; $tag++){?>
                                                <a href="#" class="badge badge-dark pl-2 pr-2">tag<?=$tag;?></a>
                                                <?php }?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="card rounded-0">
                                                <div class="card-header">
                                                    รายละเอียด
                                                    <div class="float-right">
                                                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">แชร์</a></div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text"><?=$product['content']?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="card rounded-0">
                                                <div class="card-header">
                                                    Facebook Comment
                                                </div>
                                                <div class="card-body">
                                                    <div class="fb-comments" data-width="100%" data-numposts="5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    
                                }
                                ?>
                                <div class="col-lg-3">
                                    <?php include 'sidebar.php'; ?>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>
<?php include 'footer.php';?>