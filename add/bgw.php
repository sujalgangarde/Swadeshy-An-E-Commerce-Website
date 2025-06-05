<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Swadeshy™</title>
  <link rel="stylesheet" href="s5.css">
</head>

<body>
  <!-- contacts-5-grid -->
  <div class="w3l-contact-10">
    <div class="form-41-mian section-gap">
      <div class="wrapper">
        <div class="form-inner-cont">
          <form  method="post" class="signin-form">
            <h3>Personal Details</h3>
            <div class="form-input">
              <label for="w3lName">Name</label>
              <input type="text" name="name" id="w3lName" placeholder="Enter your name" required="" />
            </div>
            <div class="form-input">
              <label for="w3lSubject">Phone Number</label>
              <input type="text" name="phone" id="w3lSubject" placeholder="Enter Number" required />
            </div>
            <div class="form-input">
              <label >Email</label>
              <input type="email" name="mail" id="w3lSender" placeholder="Enter your email" required />
            </div>
            <div class="form-input">
              <label for="w3lMessage">Address</label>
              <textarea name="addr" id="w3lMessage" placeholder="Enter your Address" required=""></textarea>
            </div>
            <div class="form-input">
              <label for="w3lName">Product Name</label>
              <input type="text" name="pname" id="w3lName" value="Black Grapes Wine" placeholder="Product" required="" />
            </div>
            <div class="form-input">
              <label for="w3lName">Product Price</label>
              <input type="text" name="price" id="price" value="900" placeholder="Price" onchange="total()"  required="" />
            </div>
            <div class="form-input">
              <label for="w3lName">Quantity</label>
              <input type="text" name="qty" id="quantity" placeholder="Enter Quantity" onchange="total()" required="" />
            </div>
            <div>
            <p>Your Total is: </p><span id="total" name="total"></span></div>
            <a href="payment.php"><button class="btn" name="pay">Proceed to Pay</button></a>
          </form>
        </div>
      </div>
    </div>
    <!--<div class="contacts-5-grid-main section-gap">
      <div class="contacts-5-grid">
        <div class="map-content-5">
          <input id="tab1" type="radio" name="tabs" checked>
          <label class="tabtle" for="tab1">New York</label>

          <input id="tab2" type="radio" name="tabs">
          <label class="tabtle" for="tab2">Dubai</label>

          <input id="tab3" type="radio" name="tabs">
          <label class="tabtle" for="tab3">Saudi Arabia</label>

          <section id="content1" class="tab-content">
            <div class="wrapper">
              <div class="d-grid grid-col-2">
                <div class="contact-type">
                  <div class="service-col-4">
                    <h6>Address</h6>
                    <p>#302, 5th Floor, ALHK-2247 ek, Settlers Lane, New York.</p>

                  </div>
                  <div class="service-col-4">
                    <h6>Email</h6>
                    <a href="mailto:mailone@example.com" class="link1">mailone@example.com</a>
                    <a href="mailto:mailtwo@example.com" class="link1">mailtwo@example.com</a>

                  </div>
                  <div class="service-col-4">
                    <h6>Phone</h6>
                    <a href="tel:+12 324-016-695" class="link1">+12 324-016-695</a>
                    <a href="tel:+44 224-058-545" class="link1">+44 224-058-545</a>

                  </div>
                </div>-->
                <div class="contacts-sub-5">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.901518929721!2d73.89096517215569!3d18.442780033192232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c07cabcb7165%3A0x416c45e42c0467be!2sSinhgad%20Academy%20Of%20Engineering!5e0!3m2!1sen!2sus!4v1686073539382!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </section>

          <section id="content2" class="tab-content">
            <div class="wrapper">
              <div class="d-grid grid-col-2">
                <div class="contact-type">
                  <div class="service-col-4">
                    <h6>Address</h6>
                    <p>#302, 5th Floor, ALHK-2247 ek, Al Sharafi building, Dubai.</p>

                  </div>
                  <div class="service-col-4">
                    <h6>Email</h6>
                    <a href="mailto:mailtwo@example.com" class="link1">mailtwo@example.com</a>
                    <a href="mailto:mailone@example.com" class="link1">mailone@example.com</a>

                  </div>
                  <div class="service-col-4">
                    <h6>Phone</h6>
                    <a href="tel:+44 224-058-545" class="link1">+44 224-058-545</a>
                    <a href="tel:+12 324-016-695" class="link1">+12 324-016-695</a>

                  </div>
                </div>
                <div class="contacts-sub-5">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563262564932!5m2!1sen!2sin"
                    style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </section>
          <section id="content3" class="tab-content">
            <div class="wrapper">
              <div class="d-grid grid-col-2">
                <div class="contact-type">
                  <div class="service-col-4">
                    <h6>Address</h6>
                    <p>#411, 3rd Floor, SALK-2247 ek, Al Sharafi building, Saudi Arabia.</p>

                  </div>
                  <div class="service-col-4">
                    <h6>Email</h6>
                    <a href="mailto:mailone@example.com" class="link1">mailone@example.com</a>
                    <a href="mailto:mailtwo@example.com" class="link1">mailtwo@example.com</a>
                  </div>
                  <div class="service-col-4">
                    <h6>Phone</h6>
                    <a href="tel:+12 324-016-695" class="link1">+12 324-016-695</a>
                    <a href="tel:+44 224-058-545" class="link1">+44 224-058-545</a>
                  </div>
                </div>

                <div class="contacts-sub-5">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563262564932!5m2!1sen!2sin"
                    style="border:0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
      <!-- //contacts-5-grid -->

    </div>
<script type="text/javascript">
  function total() {
    var quantity=document.getElementById("quantity").value;
    var price=document.getElementById("price").value;
    //var total=parseFloat(quantity)*parseFloat(price);
    document.getElementById("total").innerHTML=quantity*price
  }
</script>
</body>

</html>

<?php 
include('config.php');
if (isset($_POST['pay'])) 
{
  extract($_POST);

  echo $asd= "insert into buy(name,phone,email,addr,pname,price,qty) value ('$name','$phone','$mail','$addr','$pname','$price','$qty')";
  $add=mysqli_query($connect,$asd) or die(mysqli_error($connect));
  if ($asd) 
  {
    echo "<script>;";
    echo "window.alert('Booked!!');";
    echo 'window.location.href="payment.php"';
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