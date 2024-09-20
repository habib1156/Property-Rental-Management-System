<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./include/css/bootstrap.min.css">
    <link rel="stylesheet" href="./include/css/all.min.css">
    <link rel="stylesheet" href="./include/css/fontawesome.min.css">
    <link rel="stylesheet" href="./include/css/index.css">
  </head>
    <title>Property Rental Management System</title>
</head>

<!------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------->


<div class="header-top-right">
    <div class="main">   
      
          <ul class="yat">
        <h1 class="title "><i class="fa-solid fa-tent" style="color: #ffffff;"></i> Property Rental</h1>
           
          
        </ul>    
    </div>
</div>

    
    <div class="header-bottom">
        <div class="main">   
            <ul class="yati">
  
               <li><a href="./index.php"> Home</a></li> 
               <li><a href="./aboutus.php"> About </a></li>
              <li><a href="./Rent.php"> Property</a></li> 
                <li><a href="./contact.php"> Contact Us</a></li>
                <li><a href="./login.php"><i class="fa-solid fa-user"></i> Login</a></li> 
                
            </ul>    
        </div>
    </div>
    

<!------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------->
<body>
    
    <header>
     
        
      
      <h3 class="textthree">Search properties for sale and for rent in Bangladesh</h3>

      <div class="box">
        <div class="row">
          <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Rent" aria-label="First name">
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col">
                
              </div>
            </div>
            <input type="text" class="form-control" placeholder="Enter Location" aria-label="First name">
            
          </div>
            
          <div class="col-md-3">
              <input type="text" class="form-control" placeholder="Residential" aria-label="Last name">
            </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Beds & Baths" aria-label="First name">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Area (sqft)" aria-label="Last name">
          </div>
          <div class="col-md-3">
              <input type="text" class="form-control" placeholder="Price(BDT)" aria-label="Last name">
            </div>
            <div class="col-md-3">
              <button class="button"><a href="./find.php">Find</a></button></a>
            </div>
            <p class="textfour"> Reset Search</p>
            
        </div>
        </div>
      
</header>
<div class="lastsearch">
<div class="text">
  <h5> <i class="fa-solid fa-clock-rotate-left"></i> Last searches</h5>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <button class="lastsearchbutton" ><a href="./Rent.php">
        <div class="row">
          <div class="col-11">
            <p>
            <b>Commercial properties for sale in Dhaka</b> <br>
            All Appartments
          </p>
          </div>
          <div class="col-1">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
        </div></a>
      </button>
    </div>
    <div class="col-md-4">
      <button class="lastsearchbutton" ><a href="./Rent.php">
        <div class="row">
          <div class="col-11"> <p>
            <b>Commercial properties for sale in Dhaka</b> <br>
            All Appartments </p>
          </div>
          <div class="col-1">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
        </div>
        </a>
      </button>
    </div>
    <div class="col-md-4">
      <button class="lastsearchbutton" ><a href="./Rent.php">
        <div class="row">
          <div class="col-11">
            <p>
            <b>Commercial properties for sale in Dhaka</b> <br>
            All Appartments </p>
          </div>
          <div class="col-1">
            <i class="fa-solid fa-chevron-right"></i>
          </div>
        </div>
      </a>
      </button>
    </div>
  </div>
</div>
</div>

<div>
  <div class="text">
      <h3>Popular Dhaka Neighborhoods</h3>
  </div>
      <!------------------------------------------------------------------------------------------------------------>
  <div >
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="sale-tab" data-bs-toggle="tab" data-bs-target="#sale-tab-pane" type="button" role="tab" aria-controls="sale-tab-pane" aria-selected="true"><h4 class="navbutton">For Sale</h4></button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="rent-tab" data-bs-toggle="tab" data-bs-target="#rent-tab-pane" type="button" role="tab" aria-controls="rent-tab-pane" aria-selected="false"><h4>To Rent</h4></button>
          </li>
          
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="sale-tab-pane" role="tabpanel" aria-labelledby="sale-tab" tabindex="0">
              
      
      <br>
      <div class="sale">
      <div class="row">
          <div class="col-6 col-md-4"><u><b><a href="./Rent.php" >Dhaka Appartments</a></b></u><br>
              <li>Bashundhara R-A</li>
              <li>Uttara </li>
              <li>Mirpur</li>
              <li>Gulshan </li>
              <li>Dhanmondi</li>
          </div>
          <div class="col-6 col-md-4"><u><b><a href="./Rent.php" >Chottogram Appartments</a></b></u><br>
              <li>Bayazid</li>
              <li> Double Mooring </li>
              <li>Khulshi </li>
              <li>16 No. Chawk Bazaar Ward</li>
              <li>4 No Chandgaon Ward</li>
          </div>
          <div class="col-6 col-md-4"><b><a href="./Rent.php" >Chattogram Popular Location</a></b>
              
              <li>Bayazid</li>
              <li>Khulshi </li>
              <li>4 No Chandgaon Ward</li>
              <li>Jamal Khan</li>
              <li>Bakalia</li>
              
          </div>
      </div>
  <br>
      <div class="row">
          <div class="col-6 col-md-4"><u><b><a href="./Rent.php" >Dhaka offices</a></b></u><br>
              <li>Motijheel</li>
              <li>Mohammadpur</li>
              <li>Kalabagan</li>
              <li>Dhanmondi</li>
              <li>Badda</li>
          </div>
          <div class="col-6 col-md-4"><b><a href="./Rent.php" >Dhaka Popular Locations</a></b><br>
              <li><a>Bashundhara R-A</a></li>
              <li><a>Uttara</a></li>
              <li><a>Mirpur</a></li>
              <li><a>Gulshan</a></li>
              <li><a>Dhanmondi</a></li>
          </div>
          <div class="col-6 col-md-4"><u><b><a href="./Rent.php" >Dhaka Commercial</a></b></u>
              
              <li>Motijheel</li>
              <li>Dhanmondi</li>
              <li>Badda</li>
              <li>Tejgaon</li>
              <li>Uttara</li>
              
          </div>
      </div>
      <div class="text">
        <h3>Popular offer for Sale</h3>
        
    </div>
    </div>
      <section class="sliderer">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">

        <div class="slider"> <a href="./details.php">
            <div id="carouselIndicators" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
               
                  <p class="slidertxt">
                    <h4> BDT 1.30 core</h4>
                    <h5><i class="fa-regular fa-star"></i>60% flat offer</h5>
                          <h5> Apertment </h5>
                          <i class="fa-solid fa-bed"></i>1 
                           <i class="fa-solid fa-bath"></i>1
                         
                  </p>
                  <img src="./include/img/1.1.jpg" >
                </div>
                <div class="carousel-item">
                  
                  <p>
                    <h4> BDT 1.30 core</h4>
                    <h5>60% flat offer</h5>
                          <h5> Apertment </h5> <i class="fa-solid fa-bed">1</i>  <i class="fa-solid fa-bath">1</i>
                          <br>
                      </p>
                  <img src="./include/img/1.1.jpg" >
                </div>
                <div class="carousel-item">
                  
                  <p>
                    <h4> BDT 1.35 core</h4>
                    <h5>60% flat offer</h5>
                          <h5> Apertment </h5> <i class="fa-solid fa-bed">1</i>  <i class="fa-solid fa-bath">1</i>
                          <br>
                          
                  </p>
                  <img src="./include/img/1.1.jpg " >
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            </a>
            </div>
          </div>
          <div class="col-md-2">
           
          </div>
          </div>
    </section>
        </div>
  
  
     
      <div class="tab-pane fade" id="rent-tab-pane" role="tabpanel" aria-labelledby="rent-tab" tabindex="0"> 
          
      <br>
      <div class="rent">
      <div class="row">
          <div class="col-6 col-md-4"><u><b><a href="./Rent.php" >Dhaka Appartments</a></b></u><br>
              <li>Bashundhara R-A</li>
              <li>Uttara </li>
              <li>Mirpur</li>
              <li>Gulshan </li>
              <li>Dhanmondi</li>
          </div>
          <div class="col-6 col-md-4"><u><b><a href="./Rent.php" >Chottogram Appartments</a></b></u><br>
              <li>Khulshi</li>
              <li> Halishahar</li>
              <li>South Khulshi </li>
              <li>Kazir Dewri</li>
              <li>15.No Bagmoniram Ward</li>
          </div>
          <div class="col-6 col-md-4"><b><a href="./Rent.php" >Chattogram Popular Location</a></b>
              
              <li>Halishahar</li>
              <li>Khulshi </li>
              <li>Kazir Dewri</li>
              <li>Panchalaish</li>
              
              
          </div>
      </div>
  <br>
      <div class="row">
          <div class="col-6 col-md-4"><u><b><a href="./Rent.php" >Dhaka offices</b></a></u><br>
              <li>Uttara</li>
              <li>Motijheel</li>
              <li>Tejgaon</li>
              <li>Banani</li>
              <li>Mirpur</li>
              
          </div>
          <div class="col-6 col-md-4"><b><a href="./Rent.php" >Dhaka Popular Locations</a></b><br>
              <li><a>Bashundhara R-A</a></li>
              <li><a>Uttara</a></li>
              <li><a>Mirpur</a></li>
              <li><a>Gulshan</a></li>
              <li><a>Dhanmondi</a></li>
          </div>
          <div class="col-6 col-md-4"><u><b><a href="./Rent.php" >Dhaka Commercial</a></b></u>
              <li>Uttara</li>
              <li>Gulshan</li>
              <li>Banani</li>
              <li>Dhanmondi</li>
              <li>Mohammadpur</li>
              
              
          </div>
      </div>
  
     
      <div class="text">
        <h3>Popular offer for Rent</h3>
        
    </div>
    <section class="slidererer">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

      <div class="sliders"> <a href="./details.php">
          <div id="carouselIndicatorstwo" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselIndicatorstwo" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselIndicatorstwo" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselIndicatorstwo" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
             
                <p>
                  <h4> BDT 1.30 core</h4>
                  <h5>60% flat offer</h5>
                        <h5> Apertment </h5> <i class="fa-solid fa-bed">1</i>  <i class="fa-solid fa-bath">1</i>
                        <br>
                        
                </p>
                <img src="./include/img/1.1.jpg" >
              </div>
              <div class="carousel-item">
                
                <p>
                  <h4> BDT 1.30 core</h4>
                  <h5>60% flat offer</h5>
                        <h5> Apertment </h5> <i class="fa-solid fa-bed">1</i>  <i class="fa-solid fa-bath">1</i>
                        <br>
                        
                </P>
                <img src="./include/img/1.1.jpg" >
              </div>
              <div class="carousel-item">
                
                <p>
                  <h4> BDT 1.35 core</h4>
                  <h5>60% flat offer</h5>
                        <h5> Apertment </h5> <i class="fa-solid fa-bed">1</i>  <i class="fa-solid fa-bath">1</i>
                        <br>
                        
                </p>
                <img src="./include/img/1.1.jpg " >
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicatorstwo" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicatorstwo" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          </a>
          </div>
        </div>
        <div class="col-md-2">
         
        </div>
        </div>
  </section>
  </div>
      

   
        
</div>

      </div>

  
      </div>
     
        </div>
  
    
  




<!------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------->
  
   


<!--========================================================================================================



<!-- <div class="container">
    <div class="radio_container">
        <input type="radio" name="radio" id="one" checked>
        <label for="one">one</label>
        <input type="radio" name="radio" id="two">
        <label for="two">two</label>
        <input type="radio" name="radio" id="three">
        <label for="three">three</label>
    </div>
</div> 

========================================================================================================== -->



<!------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------->

   <script src="./include/js/jquery-3.7.0.js"></script>
<script src="./include/js/bootstrap.bundle.js"></script>
<!-- <script src="/rent-property/include/js/bootstrap.min.js"></script> -->

<!------------------------------------------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------------------------------------------->


</body>
<footer class="footer">
               
    <div class="main">   
       
        <ul class="yate">
           <li><a href="./aboutus.php"> ABOUT US</a></li> 
           <li><a href="./contact.php"> CONTACT US</a></li> 
           <li><a href="#"> CAREERS</a></li>
          
            
           <p><i class="fa-regular fa-copyright"></i> 2023 Property Rental</p>
</ul>
    
    </div>
    <div class="main">   
       
        <ul class="yate">
    <li><a href="https://www.facebook.com"><i class="fa-brands fa-facebook"></i></a></li>
    <li><a href="https://www.twitter.com"><i class="fa-brands fa-twitter"></i></a> </li>
    <li><a href="https://www.pinterest.com"><i class="fa-brands fa-pinterest"></i></a> </li>
    <li><a href="https://www.instragram.com/"><i class="fa-brands fa-instagram"></i></a> </li>
    <li><a href="https://www.youtube.com"> <i class="fa-brands fa-youtube"></i></a> </li>
</ul>
    
</div>


</footer>
</html>