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

    <a href="http://128.199.197.229" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Back</a>

    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>


@forelse ($items as $item)

<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
  <h1 class ="w3-wide">My Wallet</h1>
  <h2 class ="w3-wide">{{$item->total}} BATH </h
</div>

<table class="table table-bordered" style="margin-top:50px">
  <tr>
    <td colspan="2">History</td> 
  </tr>
  <tr>
    <td>Tranfer / Receive</td>
    <td>Date / Time</td> 
  </tr>
@forelse ($sathits as $sathit)

  <tr>
    <td>
	@if ($sathit->receive >= 0)
            Receive : {{$sathit->receive}}
        @elseif ($sathit->transfer >= 0)
            Transfer
        @endif
    </td>
    <td>{{$sathit->created_at}}</td>
  </tr>

@empty
<p>No item</p>
@endforelse

</table>

@empty
<p>No item</p>
@endforelse

</body>
</html>


























































