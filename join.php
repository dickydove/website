<!DOCTYPE html>
<html lang="en">
<head>
<title>Dicky Dove</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div style="width:80%;margin:10px auto;"> <!-- Container -->
<div> <!-- Header -->
  <img src="images/ddlogo.jpg">
<!--  <p><a href="members.php">Members</a></p> -->>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Home</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="members.php">Members</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="join.php">Join</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="stories.php">Stories</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="categories.php" id="navbardrop" data-toggle="dropdown">
        Categories
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="stepmom.php">Stepmom</a>
        <a class="dropdown-item" href="hotwife.php">Hotwife</a>
        <a class="dropdown-item" href="sharing.php">Shariing</a>
      </div>
    </li>
  </ul>
</nav>
</div>
<div style="margin:10px 10px;"> <!-- Content -->
  <h2>Content</h2>
  <div style="width:400px;"><form action="/action_page.php" class="was-validated">
   <div class="form-group">
     <label for="uname">Username:</label>
     <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div>
   <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
     <div class="valid-feedback">Valid.</div>
     <div class="invalid-feedback">Please fill out this field.</div>
   </div>
   <div class="form-group form-check">
     <label class="form-check-label">
       <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
       <div class="valid-feedback">Valid.</div>
       <div class="invalid-feedback">Check this checkbox to continue.</div>
     </label>
   </div>
   <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
  <div class="container-fluid">
  <h1>Responsive Columns</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>The columns will automatically stack on top of each other when the screen is less than 576px wide.</p>
  <div class="row">
    <div class="col-sm-3" style="background-color:lavender;">.col-sm-3</div>
    <div class="col-sm-3" style="background-color:lavenderblush;">.col-sm-3</div>
    <div class="col-sm-3" style="background-color:lavender;">.col-sm-3</div>
    <div class="col-sm-3" style="background-color:lavenderblush;">.col-sm-3</div>
  </div>
</div>
</div>
<div style="font-size:small;"> <!-- Footer -->
  <hr>
  <p>Copyright 2020. Dicky Dove Entertainment. All Rights Reserved. </p>
</div>
</div>
</body>
</html>
