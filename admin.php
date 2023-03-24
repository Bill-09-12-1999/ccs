<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login Form</title>
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
          background:url('images/school.jpeg');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          background-attachment: fixed;
        }
        *{
          margin:0;
          padding:0;
        }
        .bg{
          background: rgba(0,0,0,0.8);
          position:fixed;
          width:100%;
          height:100%;
          top:0;
          z-index: -1;
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
    </style>

  </head>
  <body>
    <div id="mainbox" onclick="openfunction()">&#9776;</div>
        <div id="menu" class="sidemenu">
          <ul>
              <li><a href="index.php" class="admin"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>User</a>
              </li>
          </ul>
          <ul>
              <li>
                <a href="faculty.php" class="faculty"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg>Faculty</a>
              </li>
          </ul>
          <ul>
            <li>
              <a href="clerk.php" class="clerk"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
              <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
              </svg>Registrar</a>
            </li>
          </ul>
          <a href="#" class="close" onclick="closefunction()">&times;</a>
        </div>




      <div class="login-box">
          <center><img src="images/logo.png" class="user"></img><img src="images/ccs.jpg" class="user"></img></center><br><br><br>

          <h1 style="text-align:center; font-family:Arial Black; color:white; letter-spacing:4px;text-shadow: 2px 2px 5px black;">HELLO ADMIN <br> <p style="font-family: arial;font-size: 20px;letter-spacing: 0;">Login Here </p></h1><br><br>
          <form action="adminprog.php" method="POST">
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="Enter Default Username" required>
            </div><br>

              <div class="form-group">
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Your Password" required>


                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="eye bi-eye-fill" viewBox="0 0 16 16" onclick="toggle()" style="cursor:pointer;">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
              </svg>
              </div><br>
              <center><button type="submit">Login</button></center><br>
          </form>
        </div>
      </div>
    </div>
  <div class="bg"></div>
        <script>
        function openfunction(){
          document.getElementById("menu").style.width="140px";
        }

        function closefunction(){
          document.getElementById("menu").style.width="0px";
        }

        var state= false;
        function toggle(){
          if(state){
            document.getElementById("password").setAttribute("type","password");
            state=false;
          }else{
            document.getElementById("password").setAttribute("type","text");
            state=true;
          }
        }
        </script>
  </body>
</html>
