<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("header.html");
    ?>
<section>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1> Withdrawal Form </h1>
          <p style="padding-bottom:50px;">Are you sure you want to withdraw?  </p>  
        </div>
        <div class="col-md-4" style="border-radius: 6px; border: 3px  #a517ba solid;">
          <h2 style="padding-top: 30px;">Withdrawal Form</h2>
          <form action="conform_withdraw.php" method="post">
            <table>
              <tr>
                <label style="float: left; position: absolute; margin-top: 25px; margin-left: -160px; outline:none;"> Email:</label>
				      	<td style="padding-top: 50px;"><input placeholder="Enter Your Email" type="email" name="txtEmail" ></td>
              </tr>
              <tr >
                <label style="float: left; position: absolute; margin-top: 100px;  px; margin-left: -160px;"> VoterID :</label>
					      <td style="padding-top: 50px;"><input required placeholder="Enter Your Voter ID " type="number" name="txtvID"></td>
              </tr>
              <tr>
              <td style="padding-top: 50px; padding-bottom: 30px;"><button class="magnifyBtn">Submit</button></a></td>
              </tr>
            </table>
          </form>
        </div>
        <div class="col-md-8" style="padding-left: 50px; width: 100%; padding-top: 30px;">
          <img src="img/6.svg" alt="" srcset="">
        </div>
      </div>
    </div>
  </section>
  <?php
    include("footer.html");
  ?>
</body>
</html>