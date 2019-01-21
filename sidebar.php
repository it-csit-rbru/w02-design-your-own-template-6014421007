                                    <div class="card border-dark">
                                        <div class="card-body">
                                            สถาณะเจ้าหน้าที่ : 
                                        </div>
                                    </div>
                                    <div class="card border-dark mt-3">
                                        <div class="card-header bg-dark text-white">
                                            หมวดหมู่สินค้า
                                        </div>
                                        <div class="list-group list-group-flush">
                                            <?php
                                                require 'includes/connect_db.php';
                                                $select_cate_sql = $connect->query("SELECT name FROM category");
                                                if($select_cate_sql->num_rows > 0){
                                                    while($category_list = $select_cate_sql->fetch_object()){

                                                    
                                            ?>
                                            <a href="category.php?n=<?=$category_list->name?>" class="list-group-item list-group-item-action">
                                                <?=$category_list->name?>
                                                <span class="badge badge-primary badge-pill float-right">14</span>
                                            </a>
                                            <?php
                                                    }
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="card border-dark mt-3">
                                        <div class="card-header bg-dark">

                                        </div>
                                        <div class="card-body">

                                        </div>
                                    </div>
                                    <div class="card border-dark mt-3">
                                        <div class="card-header bg-dark">

                                        </div>
                                        <div class="card-body">

                                        </div>
                                    </div>