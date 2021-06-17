<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
      .td-1{
          text-align: center;
          padding-top: 20px;

      }
      table{
        margin:auto;
      }

    </style>
    <script>
function gvi() {
  document.getElementById("txtvID").value = Math.floor(Math.random()*90000) + 10000;
document.getElementById("txtvID").disabled = true;
document.getElementById("gvoterid").disabled = true;
}
var check = function() {
  if (document.getElementById('txtCPassword').value ==
    document.getElementById('txtPassword').value) {
    document.getElementById('message1').style.color = 'green';
    document.getElementById('message1').innerHTML = '';
    document.getElementById("btnSubmit").disabled = false;
  } else {
    document.getElementById('message1').style.color = 'red';
    document.getElementById('message1').innerHTML = 'not matching';
    document.getElementById("btnSubmit").disabled = true;
  }
}
var check_email= function(){
  var str=document.getElementById('txtEmail').value;
  var n = str.includes("cusat");
  if(n){
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = '';
    document.getElementById("btnSubmit").disabled = false;
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Enter verified mail';
    document.getElementById("btnSubmit").disabled = true;
  }
}
</script>
</head>
<body>
    <div class="container-fluid" id="cont-3">
        <header id="nav-bar">
          <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href=index.html  style="color: white; font-weight: 600; margin-top: 15px;">GO VOTE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon" style="color: white;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto animate__animated animate__bounceInDown" style="padding-right: 50px;">
                <li class="nav-item" >
                  <a class="nav-link" href="index.html" style="color:white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Home</a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link" href="candidate.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Candidate</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="result.php" style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">Result</a>
                </li>

                <li class="nav-item" >
                  <a class="nav-link" href="about.php"  style="color: white; font-weight: 600; text-align: center; font-size: 18px; margin-top: 20px;  text-transform: capitalize; padding: 20px;">About</a>
                </li>

              </ul>
            </div>
          </nav>
        </header>



    </section>
    <section id="center">
    <div class="container">
        <div class="row">
            <div class="col-md-6" >
                <h1 style="padding-top: 20px;">Voters Registration</h1>
                <p style="padding-top: 20px;">Register</p>
                <form action="process_cand_2.php" method="post">
                <table>
                    <tr>
                        <td class="td-1">Name :</td>
                        <td class="td-1"><input   requiredtype="text" style="text-align: left;" name="txtName" autofocus></td>
                    </tr>
                    <tr>
                        <td class="td-1">Email :</td>
                        <td class="td-1"><input  required type="text" style="text-align: left;" name="txtEmail" onkeyup="check_email();" id="txtEmail"></td>
                        <td><span id='message'></span></td>
                    </tr>
                    <tr>
                        <td class="td-1">Mobile Number :</td>
                        <td class="td-1"><input  required type="number" style="text-align: left;" name="txtNumber"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Branch :</td>
                        <td><select name="txtbranch"  required>

                          <option>Information Technology</option>
                          <option>Computer Science </option>
                          <option>Civil</option>
                          <option>Mechanical</option>
                          <option>Electrical</option>
                          <option>Marine</option>
                          <option>Electronics and Telecom.</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="td-1">Roll No. :</td>
                        <td class="td-1"><input  required type="number" style="text-align: left;" name="txtRollNo"></td>
                    </tr>
                    <tr>
                        <td class="td-1"><input  required type="button" style="text-align: left" name="gvoterid" value="Generate voter id" id="gvoterid" onclick="gvi()">
                       </td>

                        <td class="td-1"><input  required type="text" style="text-align: left" name="txtvID" id="txtvID">
                       </td>
                    </tr>
                    <tr>
                        <td class="td-1">Password :</td>
                        <td class="td-1"><input  required type="password" style="text-align: left;" name="txtPword" onkeyup="check();" id="txtPassword"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Confirm password :</td>
                        <td class="td-1"><input  required type="password" style="text-align: left;" name="txtCPassword" onkeyup='check();' id="txtCPassword"></td>
                        <td><span id='message1'></span></td>
                    </tr>

                    <tr>
                        <td class="td-2" id style="padding-top: 20px; padding-bottom: 40px;" ><input type="Submit" class="magnifyBtn" id="btnSubmit" name="Submit"></td>
                    </tr>
                </table>
              </form>
            </div>
            <div class="col-md-6" style="padding-top: 50px;">
                <img src="img/8.svg" alt="" srcset="">
            </div>
        </div>
    </div>
</section>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <hr>
        <div class="Footer">
        <ul style="display: flex;">
                  <li style="list-style: none; padding: 10px; "><a href="index.html" style="text-decoration: none; color: #a517ba;">Home</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="about.php" style="text-decoration: none; color: #a517ba;">About</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="suggestion.html" style="text-decoration: none; color: #a517ba;">Suggestion</a></li>
                  <li style="list-style: none; padding: 10px; "><a href="contact_form.php" style="text-decoration: none; color: #a517ba;">Contact</a></li>
                </ul>
        </div>
      </div>
      <div class="col-md-6">
        <hr>
        <div class="social-icon">
          <ul >
                          <li>
                              <a href="">
                                  <i class="fa fa-facebook"></i>
                              </a>
                          </li>
                          <li>
                              <a href="">
                                  <i class="fa fa-google-plus"></i>
                              </a>
                          </li>
                          <li>
                              <a href="">
                                  <i class="fa fa-linkedin"></i>
                              </a>
                          </li>
                          <li>
                              <a href="">
                                  <i class="fa fa-twitter"></i>
                              </a>
                          </li>
                          <li>
                              <a href="">
                                  <i class="fa fa-pinterest"></i>
                              </a>
                          </li>
                      </ul>
        </div>
      </div>
    </div>
  </div>
  </section>



       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/aos.js"></script>
    <script>
     AOS.init();
    </script> -->
</body>
</html>