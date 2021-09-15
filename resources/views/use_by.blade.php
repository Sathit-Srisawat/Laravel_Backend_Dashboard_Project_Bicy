<!DOCTYPE html>
<html lang="en">
<title>Bicy Manage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./main.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        font-family: "Lato", sans-serif
    }

    .mySlides {
        display: none
    }

    p.ex1 {
        margin-left: 30px;
    }

    .container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}

</style>
<body>

    <!-- Navbar -->
    <div class="w3-top">
        <div class="w3-bar w3-black w3-card">
            <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

            <a href="http://128.199.197.229" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Dashboard</a>

            <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
        </div>
    </div>

    <div class="w3-content" style="max-width:2000px;margin-top:46px">

        <!-- The Band Section -->
        <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
            <h2 class="w3-wide">ID USER RENT BICYCLE</h2>
        </div>

        @forelse ($items as $item)
        @if ($item->bike_id == $_GET['id_bicycle'])

        <div class="container w3-content w3-center w3-padding-64">
	<button onclick="window.location.href='http://128.199.197.229/detail_user?id_user={{$item->user_id}}'" class="btn">ID : {{$item->user_id}} || Time :{{$item->created_at}}</button>            
        </div>

        @endif
        @empty
          <p>No item</p>
        @endforelse

    </div>

</body>

</html>
