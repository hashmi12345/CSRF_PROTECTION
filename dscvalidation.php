<html>
    <head>
        <title>validate</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style="background-color: gray;">
        
      <div class="container">
        <div class='row' align='right' style='padding-top: 20px;'>
          <a href='logout.php' class='button'><button type='submit' class='btn btn-warning' id='dsc' name='dsc'> Logout </button></a>
        </div>
        <div class="row" align="center" style="padding-top: 100px;">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-2"></div>
                    <div class="col-sm-8">


          						  <?php
                      if(isset($_COOKIE['session_cookie']))
                      {
                        session_start();
                        if ($_POST['csrf_Token'] == $_COOKIE['csrf_token'])
                        {
                          $name=$_POST['name'];
                          $dob=$_POST['dob'];
                          $address=$_POST['address'];
                          $age=$_POST['age'];

                          echo "<div style='background-color: #161a31;border-color: #ff9d00;color: #ff9d00' class='alert alert-warning' role='alert'>"."You are free from CSRF"."</div>";
          								echo "<div style='color: #000000;background-color: #ffb93e;border-color: #df0303;border: 2px solid;' class='alert alert-success' role='alert'>".$name."</div>";
          								echo "<div style='color: #000000;background-color: #ffb93e;border-color: #df0303;border: 2px solid;'class='alert alert-info' role='alert'>".$dob."</div>";
          								echo "<div style='color: #000000;background-color: #ffb93e;border-color: #df0303;border: 2px solid;' class='alert alert-success' role='alert'>".$address."</div>";
          								echo "<div style='color: #000000;background-color: #ffb93e;border-color: #df0303;border: 2px solid;' class='alert alert-info' role='alert'>".$age."</div>";
                      
          							}
          							else
          							{
          								echo "<script>alert('WARNING :: CSRF Found !!!')</script>";
          							}

          						}
                      else{
                        echo "<h3>Couldn't set session correctly. Try login again!!!</h3><br><a href='stplogin.php' class='button'><button type='submit' class='btn btn-warning' id='dsc' name='dsc'> Login </button></a>";
                      }
          						?>


                    </div>
                  <div class="col-sm-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </body>
  </html>
