<html>
<head>
  <title>Registration Form</title>
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    body{
      margin: 0;
      padding: 0;
      background: linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url('images/school.jpeg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
    }
    .table{
      width: 500px;
      font-family: Arial;
      padding: 25px;
      margin-top: 5%;
      margin-bottom: 5%;
      box-shadow: 1px 1px 10px black;
      border-radius: 10px;
      background: white;
      animation: form 2s;
    }
    @keyframes form{
          from{
            opacity: 0;
            transform: translateY(20px);
          }to{
            opacity: 1;
            transform: translateY(0);
          }
        }
    .table table{
      width: 100%;
    }
    .table th{
      background: gray;
      padding: 20px;
      font-size: 20px;
      color: white;
      text-shadow: 1px 1px 0 black;
      border-radius:5px;
    }
    .table td{
      font-size: 15px;
      font-family: Arial Black;
      width: 100%;
    }
    .table td input{
      padding: 5px;
      width: 100%;
      outline: none;
      border-style: solid;
      border-left-color: white;
      border-right-color: white;
      border-top-color: white;
      text-transform: capitalize;
      font-family: arial black;
      text-align: center;
      font-size: 25px;
      color: red;
    }
    .table td input:focus{
      border-bottom-color: blue;
      transform: scale(1.1);
      overflow: hidden;
      transition: 0.6s;
    }
    .table select{
      padding: 5px;
      width: 100%;
      outline: none;
      border-style: solid;
      border-left-color: white;
      border-right-color: white;
      border-top-color: white;
      text-transform: capitalize;
      font-family: arial black;
      text-align: center;
      font-size: 17px;
      color: red;
    }
    .table td select:focus{
      border-bottom-color: blue;
      transform: scale(1.1);
      overflow: hidden;
      transition: 0.6s;
    }
    .eye{
      position: absolute;
      margin-left: -35px;
      color: red;
      margin-top: 20px;
      cursor: pointer;
    }
    @keyframes form{
          from{
            opacity: 0;
          }to{
            opacity: 1;
          }
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
          background: linear-gradient(to top, gray,silver);
          color:black;
          text-shadow: 2px 3px 2px green;
        }
        .BSIT a:Hover{
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
          background: rgba(0,0,0,0.5);
          color:white;
          text-shadow: 2px 3px 2px green;
        }
  </style>
</head>
<body>
  <div class="BSIS">
    <a href="isreg.php">BSIS</a>
  </div>
  <div class="BSIT">
    <a href="registration.php">BSIT</a>
  </div>









  <center>
    <div class="table">
    <form action="registrationcopyis.php" method="POST">
    <table>
      <thead>
        <tr>
          <th>IS REGISTRATION<br><br><p style="font-size: 13px;">(Personal Details)</p></th>
        </tr>
      </thead>
      <tbody>
        <tr style="height:5vh;"></tr>
        <tr>
          <td>Name:</td>
        </tr>
        <tr>
          <td><input type="text" name="name" required></td>
        </tr>
        <tr>
          <td>Age:</td>
        </tr>
        <tr>
          <td><input type="number" name="age" required></td>
        </tr>
        <tr>
          <td>Gender:</td>
        </tr>
        <tr>
          <td><select class="option" name="sex" required>
                <option disabled="disabled" selected="selected">--Choose Option</option>
                <option value="Male">Male</option><option value="Female">Female</option></select></td>
        </tr>
        <tr>
          <td>Email:</td>
        </tr>
        <tr>
          <td><input type="text" name="email" required></td>
        </tr>
        <tr style="height:5vh;"></tr>
        <tr>
          <td style="text-align: center;text-transform: uppercase;background: gray;color:white;text-shadow:1px 1px 0 black;padding:20px;border-radius:5px;">
          Educational Background</td>
        </tr>
        <tr style="height:5vh;"></tr>
        <tr>
          <td>Elementary:</td>
        </tr>
        <tr>
          <td><input type="text" name="elem" required></td>
        </tr>
        <tr>
          <td>Year Graduated:</td>
        </tr>
        <tr>
          <td><input type="number" name="elemG" required></td>
        </tr>
        <tr>
          <td>Junior High School:</td>
        </tr>
        <tr>
          <td><input type="text" name="jhs" required></td>
        </tr>
        <tr>
          <td>Year Graduated:</td>
        </tr>
        <tr>
          <td><input type="number" name="jhsG" required></td>
        </tr>
        <tr>
          <td>Senior High School:</td>
        </tr>
        <tr>
          <td><input type="text" name="shs" required></td>
        </tr>
        <tr>
          <td>Year Graduated:</td>
        </tr>
        <tr>
          <td><input type="number" name="shsG" required></td>
        </tr>
        <tr style="height:5vh;"></tr>
        <tr>
          <td style="text-align: center;text-transform: uppercase;background: gray;color:white;text-shadow:1px 1px 0 black;padding:20px;border-radius:5px;">
          Student Access Center</td>
        </tr>
        <tr style="height:5vh;"></tr>
        <tr>
          <td>Student ID Number:</td>
        </tr>
        <tr>
          <td><input type="text" name="studentid" required></td>
        </tr>
        <tr>
          <td>Set Your Password:</td>
        </tr>
        <tr>
          <td><input type="password" name="password" id="password" required><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="eye bi-eye-fill" viewBox="0 0 16 16" onclick="toggle()">
          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
          <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
          </svg></td>
        </tr>
        <tr style="height:10vh;"></tr>
        <tr>
          <td><button type="submit" style="background: Green;border:none;outline:none;padding:5px;width:100%;font-family: Arial Black; font-size:25px;color:white;text-shadow:1px 1px 0 black;border-radius:5px;cursor:pointer;">
          Register</button></td>
        </tr>
      </tbody>
    </table>
    </form>
  </div></center>

<script>
  alert('Please Fill the Form Properly and Honestly');



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