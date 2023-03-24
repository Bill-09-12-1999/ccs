<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>User Login Form</title>
    <style>
    #mainbox{
      position:absolute;
      font-size:30px;
      cursor:pointer;
      color:#fff;
      top: 0;
    }
    .sidemenu{
      position:fixed;
      top:0;
      left:0;
      height: 100%;
      width:0px;
      background-color: #222;
      z-index:1;
      padding-top: 100px;
      overflow-x: hidden;
      transition: 1s;
    }
    .sidemenu .admin{
      padding:8px 8px 8px 25px;
      margin-top:10%;
      text-decoration: none;
      font-size: 25px;
      color:#999;
      display:block;
    }
    .sidemenu .admin:hover{
      color:white;
    }
    .sidemenu .faculty{
      padding:8px 8px 8px 25px;
      margin-top:10%;
      text-decoration: none;
      font-size: 25px;
      color:#999;
      display:block;
    }
    .sidemenu .faculty:hover{
      color:white;
    }
    .sidemenu .clerk{
      padding:8px 8px 8px 25px;
      margin-top:10%;
      text-decoration: none;
      font-size: 25px;
      color:#999;
      display:block;
    }
    .sidemenu .clerk:hover{
      color:white;
    }
    .sidemenu .close{
      font-family:arial;
      position:absolute;
      top:0;
      right: 30px;
      font-size:70px;
      margin-left:32px;
      text-decoration: none;
      color:white;
    }
    .sidemenu .close:hover{
      color:red;
    }
      *{
        margin: 0;
        padding: 0;
      }
        input{
          width:350px;
          font-size: 15px;
          font-family: arial black;
          text-align: center;
          border-color: black;
          background-color: black;
          color:red;
          padding: 10px;
          outline: none;
          border: none;
          border-radius: 5px;
        }
        input:focus{
            box-shadow: 3px 5px 8px rgba(0,0,0,0.8);
            transition: 0.4s;
            border-color:yellow;
          }
        input:hover{
          border-color:yellow;
        }
        .login-box{
          width: 380px;
          float:none;
          margin-top: 5%;
          margin-bottom: 5%;
          margin-left: 35%;
          background: linear-gradient(to bottom, blue, skyblue);
          border-radius: 10px;
          box-shadow: 1px 1px 15px black;
          padding: 30px 30px 30px 30px;
          animation: form 1.5s;
        }
        @keyframes form{
          from{
            opacity: 0;
          }to{
            opacity: 1;
          }
        }
        .form-control{
          background-color:white;
        }
        button{
          margin-bottom: 5%;
          font-size: 16px;
          color:white;
          font-family: serif;
          height:40px;
          width: 30%;
          box-shadow: 0 30px 70px rgba(0,0,0,.4);
          font-family: arial;
          border:none;
          border-radius:5px;
          cursor: pointer;
          background-color:green;
        }
        .login-box img{
          border-radius: 50%;
          width: 100px;
          height: 100px;
        }
        button:hover{
          box-shadow: 0 20px 50px rgba(0,0,0,.9);
          transform:scale(.95);
          transition: 0.5s;
        }
        body{
          margin:0;
          padding:0;
          background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url('images/school.jpeg');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          background-attachment: fixed;
        }
        *{
          margin:0;
          padding:0;
        }
        .BSIS{
          animation: form 1.5s;
        }
        .BSIT{
          animation: form 1.5s;
        }
        .BSIS a{
          width:12.5%;
          height:4vh;
          text-align: center;
          text-decoration: none;
          position:absolute;
          left:0;
          top:0;
          margin-top: 2%;
          margin-left: 12%;
          font-family:arial black;
          padding:10px;
          border-radius:5px;
          cursor: pointer;
          z-index: 5;
          background: rgba(0,0,0,0.5);
          color:white;
          text-shadow: 2px 3px 2px green;
        }
        .BSIS a:Hover{
          background: linear-gradient(to top, gray,silver);
          color:black;
        }
        .BSIT a{
          width:12.5%;
          height:4vh;
          text-align: center;
          text-decoration: none;
          position:absolute;
          left:0;
          top:0;
          margin-top: 10%;
          margin-left: 12%;
          font-family:arial black;
          padding:10px;
          border-radius:5px;
          cursor: pointer;
          z-index: 5;
          background: linear-gradient(to top, gray,silver);
          color:black;
          text-shadow: 2px 3px 2px green;
        }
        .eye{
          position: absolute;
          margin-left: -35px;
          color: red;
          margin-top: 12px;
        }
        @media only screen and (max-width:990px){
          .login-box{
            margin:50% auto;
            max-width: 900px;
          }
          .form-control{
            margin-left: 10%;
            width:80%;
            font-size: 25px;
          }
          button{
            margin-left: 28%;
          }
          #regis{
            margin-left: 30%;
          }
          h1{
            font-size: 70px;
          }
          .login-up{
            padding:70px;
          }
          .login-down{
            padding:30px;
          }
        }

        .form-group{
background: #e8f0fe;
          display: flex;
          align-items: center;

        }
        .form-group input{
          width: 100%;
        }
        form-group input:hover{
          box-shadow: 3px 5px 8px rgba(0,0,0,0.8);
          transition: 0.4s;
          border-color:yellow;
        }

        .form-group img{
          position: absolute;
margin-left: 345px;
          width: 25px;
          height: auto;
          cursor: pointer;
        }
    </style>

  </head>
  <body>






      <div class="login-box">
          <center><img src="images/logo.png" class="user"></img><img src="images/ccs.jpg" class="user"></img></center><br><br><br>

          <h1 style="text-align:center; font-family:Arial Black; color:white; letter-spacing:4px;text-shadow: 2px 2px 5px black;">HELLO USER <br> <p style="font-family: arial;font-size: 20px;letter-spacing: 0;">Login Here </p></h1><br><br>
          <form action="login.php" method="POST">
            <div class="form-group">
              <input type="text" name="txt_username" class="form-control" placeholder="Enter Your Username / Student ID #" required>
            </div><br>

              <div class="form-group">
                <input type="password" name="txt_password" class="form-control" id="password" placeholder="Enter Your Password" required>
                <img src="images/eye-close.png" id=eyeicon>
              </div><br>
              <center><button type="submit">Login</button></center><br>
          </form>
          <p style="color:white;text-decoration: none;font-family: Arial black;font-size: 20px;text-shadow: 1px 1px 2px black;margin-left: 90px;">Don't Have Account?</p>
          <center><a href="registration.php" style="color:black;font-family: Arial black;font-size: 20px;">Register Here</a></center>
        </div>
      </div>
    </div>


        <script>
        function openfunction(){
          document.getElementById("menu").style.width="140px";
        }

        function closefunction(){
          document.getElementById("menu").style.width="0px";
        }
var eyeicon = document.getElementById('eyeicon');
var password = document.getElementById('password');

eyeicon.onclick = function() {
  if (password.type == "password") {
    password.type = "text";

    eyeicon.src="images/eye-open.png";
    
  }else {
    password.type = "password";
    eyeicon.src="images/eye-close.png";
  }

}

        </script>
  </body>
</html>
