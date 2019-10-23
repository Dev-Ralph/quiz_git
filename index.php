<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/quiz_git/resource/php/quiz.php';
if (isset($_POST['submit'])) {
$quiz = new quiz($_POST['a1'],$_POST['a2'],$_POST['a3'],$_POST['a4'],$_POST['a5'],$_POST['aname']);
$quiz->check();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
  <link rel="stylesheet" href="vendor/css/bootstrap.css">
  <link rel="stylesheet" href="resource/css/style.css">
  <link href="vendor/fonts/css/fontawesome.css" rel="stylesheet">
  <link href="vendor/fonts/css/brands.css" rel="stylesheet">
  <link href="vendor/fonts/css/solid.css" rel="stylesheet">
</head>
<body>
  <div class="container pt-5">
    <div class="row">
      <div class="form-group">
      <input type="text" id="aname" name="aname" placeholder="Enter Your Name" class="form-control col ml-5" required autofocus>
    </div>
    </div>
  </div>
  <div class="container-fluid pt-4">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <div class="card-header text-white bg-white"><h2 style="color:#d75093">Question #1</h2></div>
                      <div class="card-body">
                        <form method="GET" action="">
                          <div class="form-group row">
                            <div class="col-md-12">
                          <h2 class="col" style="font-size: 20px;">Which one is the first web browser invented in 1990?</h2>
                            </div>
                          </div>
                          <div class="form-group row pl-5">
                          <div class="col-md-6">
                          <input type="radio" name="a1" value="A"> Internet Explorer
                          </div>
                          </div>
                          <div class="form-group row pl-5">
                          <div class="col-md-6">
                          <input type="radio" name="a1" value="B"> Mosaic
                          </div>
                          </div>
                          <div class="form-group row pl-5">
                          <div class="col-md-6">
                          <input type="radio" name="a1" value="C"> Mozilla
                          </div>
                          </div>
                          <div class="form-group row pl-5">
                          <div class="col-md-6">
                          <input type="radio" name="a1" value="D"> Nexus
                          </div>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="container-fluid pt-4">
                          <div class="row justify-content-center">
                            <div class="col-md-6">
                              <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                              -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                              -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                  <div class="card-header text-white bg-white"><h2 style="color:#d75093">Question #2</h2></div>
                                    <div class="card-body">
                                      <form method="GET" action="">
                                        <div class="form-group row">
                                          <div class="col-md-12">
                                        <h2 class="col" style="font-size: 20px;">First computer virus is known as?</h2>
                                          </div>
                                        </div>
                                        <div class="form-group row pl-5">
                                        <div class="col-md-6">
                                        <input type="radio" name="a2" value="A"> Rabbit
                                        </div>
                                        </div>
                                        <div class="form-group row pl-5">
                                        <div class="col-md-6">
                                        <input type="radio" name="a2" value="B"> Creeper Virus
                                        </div>
                                        </div>
                                        <div class="form-group row pl-5">
                                        <div class="col-md-6">
                                        <input type="radio" name="a2" value="C"> Elk Cloner
                                        </div>
                                        </div>
                                        <div class="form-group row pl-5">
                                        <div class="col-md-6">
                                        <input type="radio" name="a2" value="D"> SCA Virus
                                        </div>
                                        </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>


                              <div class="container-fluid pt-4">
                                        <div class="row justify-content-center">
                                          <div class="col-md-6">
                                            <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                                            -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                                            -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                <div class="card-header text-white bg-white"><h2 style="color:#d75093">Question #3</h2></div>
                                                  <div class="card-body">
                                                    <form method="GET" action="">
                                                      <div class="form-group row">
                                                        <div class="col-md-12">
                                                      <h2 class="col" style="font-size: 20px;">Firewall in computer is used for?</h2>
                                                        </div>
                                                      </div>
                                                      <div class="form-group row pl-5">
                                                      <div class="col-md-6">
                                                      <input type="radio" name="a3" value="A"> Security
                                                      </div>
                                                      </div>
                                                      <div class="form-group row pl-5">
                                                      <div class="col-md-6">
                                                      <input type="radio" name="a3" value="B"> Data Transmission
                                                      </div>
                                                      </div>
                                                      <div class="form-group row pl-5">
                                                      <div class="col-md-6">
                                                      <input type="radio" name="a3" value="C"> Authentication
                                                      </div>
                                                      </div>
                                                      <div class="form-group row pl-5">
                                                      <div class="col-md-6">
                                                      <input type="radio" name="a3" value="D"> Monitoring
                                                      </div>
                                                      </div>
                                                      </form>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <div class="container-fluid pt-4">
                                                      <div class="row justify-content-center">
                                                        <div class="col-md-6">
                                                          <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                                                          -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                                                          -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                              <div class="card-header text-white bg-white"><h2 style="color:#d75093">Question #4</h2></div>
                                                                <div class="card-body">
                                                                  <form method="GET" action="">
                                                                    <div class="form-group row">
                                                                      <div class="col-md-12">
                                                                    <h2 class="col" style="font-size: 20px;">Which of the following is not an operating system?</h2>
                                                                      </div>
                                                                    </div>
                                                                    <div class="form-group row pl-5">
                                                                    <div class="col-md-6">
                                                                    <input type="radio" name="a4" value="A"> DOS
                                                                    </div>
                                                                    </div>
                                                                    <div class="form-group row pl-5">
                                                                    <div class="col-md-6">
                                                                    <input type="radio" name="a4" value="B"> Mac
                                                                    </div>
                                                                    </div>
                                                                    <div class="form-group row pl-5">
                                                                    <div class="col-md-6">
                                                                    <input type="radio" name="a4" value="C"> C
                                                                    </div>
                                                                    </div>
                                                                    <div class="form-group row pl-5">
                                                                    <div class="col-md-6">
                                                                    <input type="radio" name="a4" value="D"> Linux
                                                                    </div>
                                                                    </div>
                                                                    </form>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="container-fluid pt-4">
                                                                    <div class="row justify-content-center">
                                                                      <div class="col-md-6">
                                                                        <div class="card" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                                                                        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                                                                        -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                                                                            <div class="card-header text-white bg-white"><h2 style="color:#d75093">Question #5</h2></div>
                                                                              <div class="card-body">
                                                                                <form method="GET" action="">
                                                                                  <div class="form-group row">
                                                                                    <div class="col-md-12">
                                                                                  <h2 class="col" style="font-size: 20px;">Which of the following is not a database management software?</h2>
                                                                                    </div>
                                                                                  </div>
                                                                                  <div class="form-group row pl-5">
                                                                                  <div class="col-md-6">
                                                                                  <input type="radio" name="a5" value="A"> MySQL
                                                                                  </div>
                                                                                  </div>
                                                                                  <div class="form-group row pl-5">
                                                                                  <div class="col-md-6">
                                                                                  <input type="radio" name="a5" value="B"> Oracle
                                                                                  </div>
                                                                                  </div>
                                                                                  <div class="form-group row pl-5">
                                                                                  <div class="col-md-6">
                                                                                  <input type="radio" name="a5" value="C"> Sybase
                                                                                  </div>
                                                                                  </div>
                                                                                  <div class="form-group row pl-5">
                                                                                  <div class="col-md-6">
                                                                                  <input type="radio" name="a5" value="D"> COBOL
                                                                                  </div>
                                                                                  </div>
                                                                                  </form>
                                                                                </div>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
