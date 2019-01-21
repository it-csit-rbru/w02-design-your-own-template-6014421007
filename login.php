<?php include 'header.php';?>
        <section class="mt-5">
          <div class="container">
              <div class="row">
                <div class="col-md-10 m-auto">
                    <div class="card mt-5  bg-login shadow-sm">
                        <div class="card-body mt-5 mb-5">
                            <div class="row">
                                <div class="col-md-4 bg-light pt-5 pr-3 pb-3 pl-3 offset-md-7 ">
                                    <h1 class="text-center">LOGIN</h1>
                                    <form action="login/login_check.php" method="post">
                                        <div class="form-group mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" placeholder="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="password" required>
                                        </div>
                                        <div class=" text-center mt-5">
                                            <button class="btn btn-dark pr-5 pl-5" type="submit">Login</button> 
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
    </html>