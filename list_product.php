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
                                    <table id="listproductTable" class="table table-hover">
                                        <thead class="text-center">
                                            <tr>
                                                <th>#</th>
                                                <th>ชื่อ</th>
                                                <th>ราคา</th>
                                                <th>จำนวน</th>
                                                <th>วันที่วางขาย</th>
                                                <th>แก้ไข</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                require 'includes/connect_db.php';
                                                $select_list_product = $connect->query("SELECT * FROM product WHERE users_id=$login->id");
                                                if($select_list_product->num_rows > 0){
                                                    while($list_product = $select_list_product->fetch_object()){
                                                        $row_id = 1;
                                                    
                                            ?>
                                            <tr>
                                                <td class="text-center"><?=$row_id++?></td>
                                                <td class=""><?=$list_product->name?></td>
                                                <td class=""><?=$list_product->price." บาท"?></td>
                                                <td class="text-center"><?=$list_product->category_id ?></td>
                                                <td class="text-center"><?=$list_product->data_time?></td>
                                                <td class="text-center">
                                                    <a href=""><i class="far fa-edit"></i></a>
                                                    <a href=""><i class="far fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            }else{
                                                echo 'no';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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