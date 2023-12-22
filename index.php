<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Basic Banking System</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
      *{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
</style>
  </head>

<body style="background: linear-gradient(to right, #3a9cfc, #5cc2f7, #9ed9f7, #b9e4fa);">
  <?php include 'navbar.php'; ?>

      <div class="container-fluid">
        <style>
        intro{
          background: #EAF0F1;
        }
        h1 {
          color:#0a0a0a;
          font-weight: bold;
          font-size: 65px;
          transition: 0.5s;
        }
        h3{
          font-size: 40px;
          color: #0a0a0a;
        }
        h2{
          font-size: 40px;
        }
        p{
          color: #0a0a0a;
          font-size: 15px;
          padding: 1.7vmin 6vmin;
        }
        .img-fluid{
          width: 400px;
          margin-left: 15%;
        }
        h6{
          margin-top: 10px;
          font-size: 17px;
          line-height: 1.5;
        }
        </style> 

      <!-- Introduction section -->
            <div class="row intro py-1" style="background: linear-gradient(to right, #3a9cfc, #5cc2f7, #9ed9f7, #b9e4fa);height : 600px">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5" style="padding-top:150px; margin-left: 15%">
                  <h3>Welcome to</h3>
                  <h1>Sparks Bank!</h1>
                  <p>
                    Success is not how much money we have in the bank, but how many peoples' lives we have impacted through it.
                  </p>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center" style="padding-top:70px;">
                <img src="img/logo.png" class="img-fluid pt-2">
              </div>
            </div>
      </div>
     
      <center style="margin:-7px 0px 20px 0px;">
        <div class="container"
            style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
            <h2 style="text-shadow:2px 2px 2px gray; color:#0a0a0a;"><b>Our Awesome Facilities</b></h2>
            <div class="container" style="margin:40px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div
                            style="background-color:#343a40; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-users fa-7x"></i><br><br>
                            <a href="createuser.php"><button type="button" class="btn btn-outline-light mybtn" style="border-radius:30px">Create User</button></a><br>
                            <h6>Here,User can create can account for the bank.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#343a40; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-comments-dollar fa-7x"></i><br><br>
                            <a href="transfermoney.php"><button type="button" class="btn btn-outline-light mybtn" style="border-radius:30px">Send Money</button></a><br>
                            <h6>Here, you can send money from your account.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#343a40; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <i class="fas fa-coins fa-7x"></i><br><br>
                            <a href="transactionhistory.php"><button type="button" class="btn btn-outline-light mybtn" style="border-radius:30px">Transaction History</button></a><br>
                            <h6>Here, you can check the transaction done to another account.</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </center>
    <br>
    <br>
    <style>
    .pt-2, .py-2 {
      padding-top: .rem!important;
    }
    .fa {
      padding-top: 10px;
      padding-bottom: 10px;
      margin-top: 3px;
      font-size: 20px;
      width: 50px;
      text-align: center;
      text-decoration: none;
    }
    .fa:hover {
      opacity: 0.7;
    }
    .fa-facebook {
      border:2px solid;
      border-radius:30px;
      margin: 20px 10px;
      background: #050dfa;
      color: black;
    }
    .fa-facebook:hover{
      color: #4060A5;
      background: #fff;
      border-color: #4060A5;
    }
    .fa-twitter {
      border:2px solid;
      border-radius:30px;
      margin: 20px 10px;
      background: #55ACEE;
      color: black;
    }
    .fa-twitter:hover{
      color: #00ABE3;
      background: #fff;
      border-color: #00ABE3;
    }
    .fa-instagram {
      border:2px solid;
      border-radius:30px;
      margin: 20px 10px;
      background: #125688;
      color: black;
    }
    .fa-instagram:hover{
      color: #125688;  
      background: white;  
      border-color: #125688;
    }
    .fa-linkedin {
      border:2px solid;
      border-radius:30px;
      margin: 20px 10px;
      background: #007bb5;
      color: black;
    }
    .fa-linkedin:hover{
      color: #0094BC;
      background: #fff;
      border-color: #0094BC;
    }
    p{
      color: black;
      margin-bottom: -14px;
    }
    </style>
    <footer class="text-center mt-5 py-2" id="footer" style="background-color : #fff;">
      <div class="container" style="margin-bottom:-28px">
        <a href="https://www.facebook.com/thesparksfoundation.info" class="fa fa-facebook"></a>
        <a href="https://twitter.com/tsfsingapore" class="fa fa-twitter"></a>
        <a href="https://www.instagram.com/thesparksfoundation.info/" class="fa fa-instagram"></a>
        <a href="https://www.linkedin.com/company/the-sparks-foundation/mycompany/" class="fa fa-linkedin"></a>
      </div>
      <p>Official Website: <a href='https://internship.thesparksfoundation.info/' target="_blank">https://internship.thesparksfoundation.info/</a></p>
      <p>&#169; Made By: Shraddha Apraj #GRIPDEC2023</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>   