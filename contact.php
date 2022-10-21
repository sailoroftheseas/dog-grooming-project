<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>

.map-container-2{
  overflow:hidden;
  padding-bottom:56.25%;
  position:relative;
  height:0;
}
.map-container-2 iframe{
  left:0;
  top:0;
  height:100%;
  width:100%;
  position:absolute;
}

body {

background-image: linear-gradient(360deg, #0062E6, #33AEFF);

}

.error {
  color: red;
}
 
    </style>

  </head>

  <body>

  <?php


  $firstname = htmlspecialchars(stripslashes(strip_tags(htmlentities((filter_input(INPUT_POST,'firstname'))))));
  $lastname = htmlspecialchars(stripslashes(strip_tags(htmlentities((filter_input(INPUT_POST,'lastname'))))));
  $emailaddress = htmlspecialchars(stripslashes(strip_tags(htmlentities((filter_input(INPUT_POST,'youremail'))))));
  $phonenumber = htmlspecialchars(stripslashes(strip_tags(htmlentities((filter_input(INPUT_POST,'phonenumb'))))));
  $contactreason = htmlspecialchars(stripslashes(strip_tags(htmlentities((filter_input(INPUT_POST,'reason'))))));
  $message = htmlspecialchars(stripslashes(strip_tags(htmlentities((filter_input(INPUT_POST,'yourmessage'))))));




// define variables and set to empty values
$firstnameerr = $lastnameerr = $emailerr = $phoneerr = $contacterr = $messagerr = "";
$firstname = $lastname = $emailaddress = $phonenumber = $contactreason = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($firstname)) {
    $firstnameerr = "First name is required";
  } else {
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
      $firstnameerr = "Only letters and white space allowed";
    }
  }

  if (empty($firstname)) {
    $lastnameerr = "Last name is required";
  } else {
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
      $firstnameerr = "Only letters and white space allowed";
    }
  }
  
  if (empty($emailaddress)) {
    $emailerr = "Email is required";
  } else {
    // check if e-mail address is well-formed
    if (!filter_var($emailaddress, FILTER_VALIDATE_EMAIL)) {
      $emailerr = "Invalid email format";
    }
  }

  if (empty($contactreason)) {
    $contacterr = "Contact reason is required";
  } else {
    $contactreason = test_input($contactreason);
  }

  if (empty($message)) {
    $messagerr = "A message is required";
  } else {
    $message = test_input($message);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = htmlentities($data);
  return $data;
}
?>


    <nav class="navbar navbar-expand-lg bg-light navbar sticky-top bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="image1.jpeg" width="50" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Our Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.html">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="reviews.html">Reviews</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="aboutus.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="contact.php">Contact</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" role="button" aria-current="page" data-bs-toggle="dropdown" aria-expanded="false">Contact</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item btn-primary" href="reservations.html">Book Now</a></li>
                <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
              </ul>
            </li> -->

          </ul>
          <ul class="navbar-nav ms-auto">
              <!-- <button class="btn btn-outline-info navbar-btn">Book Now</button> -->
              <a href="reservations.html" class="btn btn-outline-info navbar-btn">Book Now</a>
          </ul>
        </div>
      </div>
    </nav>

    <div class="b-example-divider"></div>

    <div class="container-fluid p-2 bg-light text-dark text-center" id="godown">
      <h1 id="topofpage">Contact Us</h1>
      <p></p> 
    </div>


    <!-- <div class="container mt-4">
        <div class="row">
          <div class="col-sm-12 text-primary">
            <h3 class="text-center">Expierience</h3>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.. Lorem ipsum dolor sit amet, consectetur adipisicing elit... Lorem ipsum dolor sit amet, consectetur adipisicing elit....</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          </div>
    
        
      <div class="container mt-4">
        
        <div class="row">
          <div class="col-sm-6 text-info">
            <div class="text-center">
                <img src="Images/pexels-gustavo-fring-6816866.jpg" class="rounded mb-2 d-block" alt="..." width="200px">
              </div>
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
          </div>
          <div class="col-sm-6 text-warning">
            <h3>Our Misson</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            <div class="text-center">
                <img src="Images/pexels-gustavo-fring-6816866.jpg" class="rounded mx-auto d-block" alt="..." width="200px">
              </div>
          </div>
          
        
        </div>
      </div>

      <div class="container mt-4">
        <div class="row">
          <div class="col-sm-12 text-danger">
            <h3 class="text-center">About the Owner</h3>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit.. Lorem ipsum dolor sit amet, consectetur adipisicing elit... Lorem ipsum dolor sit amet, consectetur adipisicing elit....</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            <div class="text-center">
                <img src="Images/pexels-gustavo-fring-6816866.jpg" class="rounded mx-auto d-block" alt="..." width="200px">
              </div>
    
          </div>
        
        </div>
      </div>


      <div class="container-fluid p-5 text-info text-center" id="godown">
        <h1>Like what you see?</h1>
        <p></p> 
        <button class="btn btn-outline-info btn-lg px-4">Schedule an Appointment!</button>
      </div> -->
<!--   
            <div class="col-lg-12 mx-auto ">
              <div class="p-4 m-2 bg-primary bg-opacity-75 text-white rounded container-fluid">
              <div  class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <p class="lead mb-4 text-dark text-center">Address: 123 Road St, City State, Zip</p>
                <p class="lead mb-4 text-dark text-center">Phone: 123-456-7890</p>
                <p class="lead mb-4 text-dark text-center">Email: ouremail@email.Company</p>

              </div>
            </div>
            </div>
            <div class="container">
            <div class="col-lg-12 mx-auto ">
                <div class="p-4 m-2 bg-light bg-opacity-75 text-white rounded container-fluid align-items-center rounded-3 border shadow-lg mt-5">
                    <div class="row">
                    <div class="col-md-6 p-4 m-2 bg-primary bg-opacity-75 text-white rounded ">
                        <p class="lead mb-4 text-dark text-center">Address: 123 Road St, City State, Zip</p>
                        </div>
                    </div>
                    <div class="col-md-6 p-4 m-2 bg-primary bg-opacity-75 text-white rounded ">
                        <p class="lead mb-4 text-dark text-center">Address: 123 Road St, City State, Zip</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- 
        <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="col-md-12 p-4 m-2 bg-primary bg-opacity-75 text-white rounded ">
                    <p class=" mb-4 text-dark text-center">Address: 123 Road St, City State, Zip</p>
                    <div class="col-md-12 p-4 m-2 bg-info bg-opacity-75 text-white rounded ">
                        <p class=" mb-4 text-dark text-center">Phone: 123-456-7890</p>
                        <div class="col-md-12 p-4 m-2 bg-warning bg-opacity-75 text-white rounded ">
                            <p class=" mb-4 text-dark text-center">Email: ouremail@email.Company</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
              </div>
          
              </div>
            </div> -->

            <!--IMPORTANT ms-0 = margin left me-0 = margin right -->

            <div class="container col-lg-12 mx-auto container-fluid justify-content-center"> 
              <div class="row">

                <div class="col-lg-6">

                  <div class="col-lg-12 mx-auto">
                    <div class="p-4 mx-auto bg-light  text-black rounded rounded-4 container-fluid align-items-center rounded-3 border border-primary border-2 shadow-lg mt-2">
                        <form class="row g-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                          <h4 class="mt-2 mb-0 text-center">Contact Form</h4>
                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">First Name*</label>
                                <input type="text" name="firstname" class="form-control" id="inputAddress" placeholder="First Name" value="<?php echo $firstname;?>">
  <span class="error"> <?php echo $firstnameerr;?></span>
                              </div>
                              <div class="col-md-6">
                                <label for="inputAddress2" class="form-label">Last Name*</label>
                                <input type="text" name="lastname" class="form-control" id="inputAddress2" placeholder="Last Name" value="<?php echo $lastname;?>">
  <span class="error"> <?php echo $lastnameerr;?></span>
                              </div>
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Email Address*</label>
                              <input type="email" name="youremail" class="form-control" id="inputEmail4" placeholder="Phone Number" value="<?php echo $emailaddress;?>">
  <span class="error"> <?php echo $emailerr;?></span>
                            </div>
                            <div class="col-md-6">
                              <label for="inputEmail4" class="form-label">Phone Number</label>
                              <input type="tel" name="phonenumb" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="col-md-12">
                              <label for="inputPassword4" class="form-label">Reason for Contacting*</label>
                              <input type="text" name="reason" class="form-control" id="inputPassword4" placeholder="Reason for Contacting" value="<?php echo $contactreason;?>">
  <span class="error"> <?php echo $contacterr;?></span>
                            </div>
                            <div class="col-12">
                                <label for="exampleFormControlTextarea1" class="form-label">Your Message*</label>
                                <textarea name="yourmessage" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Type your message here..."><?php echo $message;?></textarea>
                                <span class="error"> <?php echo $messagerr;?></span>
                              </div>
                            
                            <div class="col-12 d-grid gap-2 d-sm-flex justify-content-center">
                              <button type="submit" class="btn btn-primary btn-lg px-5  me-sm-3 fw-bold">Submit</button>
                              <button type="reset" class="btn btn-secondary btn-lg px-5  me-sm-3 fw-bold">Reset</button>

                            </div>
                            <!-- <div class="col-12 d-grid gap-2 d-sm-flex justify-content-center">
                                <button type="reset" class="btn btn-warning btn-lg px-5 me-sm-3 fw-bold">Reset</button>
                              </div> -->
                          </form>
                    <div  class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                     
                    </div>
                  </div>
                </div>

                </div>

                 <div class="col-lg-6">

                 
                    <div class="col-lg-12 mx-auto justify-content-center ">
                        <div class="p-4 mx-auto container bg-light  text-white rounded rounded-4 container-fluid align-items-center justify-content-center rounded-3 border border-2 border-info shadow-lg mt-2">
                <!-- <div class="container bg-light rounded p-3 justify-content-center mx-auto"> -->
                <div class="row">
                  <div class="col-lg-6 text-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-geo-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                      </svg>
                    <div class="p-4 m-2 bg-info bg-opacity-75 text-white rounded border border-dark border-2  ">
    
                    <p class="mb-4 text-dark text-center">Address: 123 Road St, City State, Zip</p>
                    </div>
                  </div>
                  <div class="col-lg-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
                      </svg>
                    <div class="p-4 m-2 bg-info bg-opacity-75 text-white rounded border border-dark border-2  ">
                    <p class=" mb-5 text-dark text-center">Phone: 123-456-7890 </p>
                    
                    </div>
                  </div>
                  <div class="col-lg-12 text-center">
    
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-envelope-heart" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l3.235 1.94a2.76 2.76 0 0 0-.233 1.027L1 5.384v5.721l3.453-2.124c.146.277.329.556.55.835l-3.97 2.443A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741l-3.968-2.442c.22-.28.403-.56.55-.836L15 11.105V5.383l-3.002 1.801a2.76 2.76 0 0 0-.233-1.026L15 4.217V4a1 1 0 0 0-1-1H2Zm6 2.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                      </svg>
                    
                    <div class="p-4 m-2 bg-info bg-opacity-75 text-white rounded border border-dark border-2  ">
    
                        <p class=" mb-4 text-dark text-center">Our Email: ouremail@email.com</p>
                        </div>
                  </div>
                </div>
                <div class="col-lg-12 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-geo-alt" viewBox="0 0 16 16">
                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                      </svg>
                    <div class="p-4 m-2 bg-info bg-opacity-75 text-white rounded border border-dark border-2  ">
    
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://www.embedgooglemap.net"></a></div></div>
                  </div>
                </div>
              </div>
            </div>
         </div>

        </div>
      </div>
      </div>

            <!-- ALTERNATIVE FORMAT
               <div class="col-lg-12 mx-auto p-1">
                <div class="p-4 mx-auto bg-light bg-opacity-75 text-black rounded container-fluid align-items-center rounded-3 border shadow-lg mt-1">
                    <form class="row g-3 p-3">
                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" id="inputAddress" placeholder="First Name">
                          </div>
                          <div class="col-md-6">
                            <label for="inputAddress2" class="form-label">Last Name</label>
                            <input type="text" name="lastname" class="form-control" id="inputAddress2" placeholder="Last Name">
                          </div>
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Email Address</label>
                          <input type="email" name="youremail" class="form-control" id="inputEmail4" placeholder="Phone Number">
                        </div>
                        <div class="col-md-6">
                          <label for="inputEmail4" class="form-label">Phone Number</label>
                          <input type="tel" name="phonenumb" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="col-md-12">
                          <label for="inputPassword4" class="form-label">Reason for Contacting</label>
                          <input type="text" name="reason" class="form-control" id="inputPassword4" placeholder="Reason for Contacting">
                        </div>
                        <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
                            <textarea name="yourmessage" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type your message here..."></textarea>
                          </div>
                        
                        <div class="col-12 d-grid gap-2 d-sm-flex justify-content-center">
                          <button type="submit" class="btn btn-primary btn-lg px-5  me-sm-3 fw-bold">Submit</button>
                        </div>
                        <div class="col-12 d-grid gap-2 d-sm-flex justify-content-center">
                            <button type="reset" class="btn btn-warning btn-lg px-5 me-sm-3 fw-bold">Reset</button>
                          </div>
                      </form>
                <div  class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                 
                </div>
              </div>
            </div>
            

            
            <div class="container">
                <div class="col-lg-12 mx-auto ">
                    <div class="p-4 m-2 bg-warning bg-opacity-75 text-white rounded container-fluid align-items-center rounded-3 border shadow-lg mt-5">
            <div class="container bg-info rounded p-3 justify-content-center mx-auto">
            <div class="row">
              <div class="col-lg-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-geo-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                  </svg>
                <div class="p-4 m-2 bg-primary bg-opacity-75 text-white rounded ">

                <p class="mb-4 text-dark text-center">Address: 123 Road St, City State, Zip</p>
                </div>
              </div>
              <div class="col-lg-4 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                <div class="p-4 m-2 bg-primary bg-opacity-75 text-white rounded ">
                <p class=" mb-4 text-dark text-center">Phone: 123-456-7890 </p>
                
                </div>
              </div>
              <div class="col-lg-4 text-center">

                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-envelope-heart" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l3.235 1.94a2.76 2.76 0 0 0-.233 1.027L1 5.384v5.721l3.453-2.124c.146.277.329.556.55.835l-3.97 2.443A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741l-3.968-2.442c.22-.28.403-.56.55-.836L15 11.105V5.383l-3.002 1.801a2.76 2.76 0 0 0-.233-1.026L15 4.217V4a1 1 0 0 0-1-1H2Zm6 2.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
                  </svg>
                
                <div class="p-4 m-2 bg-primary bg-opacity-75 text-white rounded ">

                    <p class=" mb-4 text-dark text-center">Our Email: ouremail@email.com</p>
                    </div>
              </div>
            </div>
            <div class="col-lg-12 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                <div class="p-4 m-2 bg-primary bg-opacity-75 text-white rounded ">

                    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://www.embedgooglemap.net"></a></div></div>
              </div>
            </div>
          </div>
        </div>
     </div>
    </div> -->
    

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

      <symbol id="facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </symbol>
      <symbol id="instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
      </symbol>
      <symbol id="twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
      </symbol>
    </svg>


<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
      </a>
      <span class="mb-3 mb-md-0 text-black">&copy; 2022 Doodle, Inc</span>
    </div>
    <a type="button" class="btn btn-outline-dark btn-md me-sm-3 fw-bold" href="#topofpage">&#8593</a>


    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
    </ul>
  </footer>
</div>

               


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  </body>
</html>

