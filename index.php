<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="assets/css/loginstyle.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div id="bg"></div>

<!-- this is for the form action-->
<form action="login2.php" method="post">

  <h2>LOGIN</h2>

  <?php if (isset($_GET['error'])) { ?>

      <p class="error"><?php echo $_GET['error']; ?></p>

  <?php 
} 

?>

  <!--label .class="loginlabel">User Name</label-->
  <div class="formbold-mb-3">
  <label class="formbold-form-label">Employee Type</label>

        <select class="formbold-form-input" name="employee_type" id="employee_type">
        <option value="none" selected disabled hidden>Select Employee Type</option>
          <option value="superuser">SuperUser</option>
          <option value="admin">Admin</option>
          <option value="employee">Employee</option>
        </select>
      </div>

  <input type="text" name="uname" placeholder="User Name"><br>

  <!--label .class="loginlabel> Password </label-->

  <input type="password" name="password" placeholder="Password"><br> 

  <button id= "loginbtn" type="submit">Login</button>

</form>
  <style>

.formbold-form-label {
  display: none;
}


input[type=select] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

.formbold-form-label {
  padding: 5px 5px 5px 5px;
  margin: 24px 4px 4px 4px;
}
.formbold-form-label {
  padding: 5px 5px 5px 5px;
  margin: 24px 4px 4px 4px;
  font-weight: 500;
  color: #291f1f;
  font-size: 1.35rem;
  font-family: Trirong;
}

#employee_type {
  position: relative;
  display: inline-block;
  padding: 23px 211px 10px 10px;
  margin: 6px 6px 16px 2px;
  text-align: center !important;
  color:#268631;
  font-size: 1.35rem;
  font-family: Trirong;
}

.formbold-form-label {
  padding: 5px 5px 5px 5px;
  margin: 24px 4px 4px 4px;
  font-weight: 500;
  color: #291f1f;
  font-size: 1.35rem;
  font-family: Trirong;
}
form input {
  font-family: Trir;
  width: 100%;
  outline: none;
  background-color: #fff;
  border-radius: 4px;
  border: none;
  display: block;
  padding: 0.9rem 0.7rem;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
  font-size: 17px;
  color: #4A4A4A;
  text-indent: 40px;
}

#employee_type {
  position: relative;
  display: inline-block;
  padding: 23px 146px 10px 10px;
  margin: 6px 6px 16px 2px;
  text-align: center !important;
  color: #1c4421;
  font-size: 1.35rem;
  font-family: Trirong;
  background-color: #e5ffdb !important;
}
    </style>
</body>
</html>