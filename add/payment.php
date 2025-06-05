<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="css/s6.css">
  <link rel="stylesheet" type="text/css" href="css/s7.css">
</head>
<body>
<!-- Trigger the Modal -->
<center><input type="radio" name="radio1">
<img id="myImg" src="pay.jpg" alt="Pay Here" style="width:80%;max-width:200px"></center> <br><br>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<div>
	<center><input type="radio"name="radio1" value="Cash on Delivery" style="color: black;" onclick="Enabledisable()">Cash on Delivery <br><br>
</div></center>
<center><a href="final.php" target="_blank" style=" background-color: #f44336; color: white;padding: 14px 25px;text-align: center;text-decoration: none;display: inline-block;">Pay</a></center>
<script type="text/javascript">
	var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

</script>
</body>
</html>

<?php 
include('config.php');
if (isset($_POST['send'])) 
{
  extract($_POST);

  echo $asd= "insert into payment(online) value ('$radio1')";
  $add=mysqli_query($connect,$asd) or die(mysqli_error($connect));
  if ($asd) 
  {
    echo "<script>;";
    echo 'window.location.href="final.php"';
    echo "</script>";
    }
    else
    {
      echo "<script>;";
      echo "window.alert('Data Error..!');";
    echo "</script>";
    }
   }
 ?>