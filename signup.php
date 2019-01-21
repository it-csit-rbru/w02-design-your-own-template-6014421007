<!-- include header -->
<?php include 'header.php';?>
      <section class="mt-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-10 m-auto ">
                    <div class="card shadow-sm bg-signup mt-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="signup/signup.php" method="post" class="mt-5 mb-5 pt-5 pb-5">
                                                <div class="form-row">
                                                    <div class="col-lg-12">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control" name="email" id="email" placeholder="example@mail.com" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-lg-6">
                                                        <label for="fname">Firstname</label>
                                                        <input type="text" class="form-control" name="fname" id="fname" placeholder="ชื่อ" required>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="lname">Lastname</label>
                                                        <input type="text" class="form-control" name="lname" id="lname" placeholder="นามสกุล" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-lg-12">
                                                        <label for="password">password</label>
                                                        <input type="text" class="form-control" name="password" id="password" placeholder="password" required>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-dark btn-lg btn-block mt-3">สมัครสมาชิก</button>
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
      </section>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
    </html>