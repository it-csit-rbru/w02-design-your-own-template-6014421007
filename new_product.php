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
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-9 border-right">
                                                <div class="form-row">
                                                    <div class="col-lg-12">
                                                        <label for="">ชื่อ</label>
                                                        <input type="text" class="form-control form-control-lg" placeholder="name">
                                                    </div>
                                                </div>
                                                <div class="form-row mt-3">
                                                    <div class="col-lg-12">
                                                        <label for="">รายละเอียด</label>
                                                        <textarea id="elm1" name="area"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-3">
                                                    <div class="col-lg-12">
                                                        <label for="">Tag</label>
                                                            <select multiple data-role="tagsinput" class="form-control form-control-sm">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-row">
                                                    <div class="col-lg-12">
                                                        <label for="">อัพรูปสินค้า</label>
                                                        <input type="file" id="input-file-now" class="dropify">
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <div class="col-lg-12">
                                                        <label for="">หมวดหมู่</label>
                                                        <select class="form-control form-control-lg select2">
                                                            <?php 
                                                            require 'includes/connect_db.php';
                                                            $select_cate_pro = $connect->query("SELECT id,name FROM category");
                                                            if($select_cate_pro->num_rows > 0){
                                                                while($category_pro = $select_cate_pro->fetch_object()){
                                                            ?>
                                                            <option value="<?=$category_pro->id?>"><?="(".$category_pro->id.") ".$category_pro->name;?></option>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <div class="col-lg-12">
                                                        <label for="">ราคา</label>
                                                        <input type="text" class="form-control form-control-sm" placeholder="ราคา">
                                                    </div>
                                                </div>
                                                <div class="form-row mt-2">
                                                    <div class="col-lg-12">
                                                        <label for="">จำนวน</label>
                                                        <input id="demo3" class="form-control form-control-sm" type="text" value="1" name="demo3">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-block btn-primary mt-3">เพิ่มสินค้า</button>
                                            </div>
                                        </div>
                                    </form>
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