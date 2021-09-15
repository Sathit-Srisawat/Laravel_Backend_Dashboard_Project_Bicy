<!DOCTYPE html>
<html lang="en">
<title>Bicy Manage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}

</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://128.199.197.229/home" class="w3-bar-item w3-button w3-padding-large">HOME</a>

    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">USER MANAGE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="http://128.199.197.229/posts" class="w3-bar-item w3-button">All user</a>
        <a href="http://128.199.197.229/posts/create" class="w3-bar-item w3-button">Add new user</a>
      </div>
    </div>

    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">STATIONS <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="http://128.199.197.229/posts" class="w3-bar-item w3-button">All Stations</a>
        <a href="http://128.199.197.229/posts/create" class="w3-bar-item w3-button">Add new station</a>
      </div>
    </div>

    <a href="http://128.199.197.229/wallet-admin" class="w3-bar-item w3-button w3-padding-large w3-hide-small">WALLET</a>

    <a href="http://128.199.197.229/report" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REPORT</a>

    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">FIND BICY</a>

    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>


<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
  <h1 class ="w3-wide">REPORT</h1>
  <h2 class ="w3-wide">Bicy Problem</h2>
</div>

<table class="table table-bordered">
        <tr>
            <td>No</td>
            <td>Id Bicy</td>
            <td>Problem</td>
            <td>Location</td>
            <td width="280px">Action</td>
        </tr>
</table> 

</body>
</html>
