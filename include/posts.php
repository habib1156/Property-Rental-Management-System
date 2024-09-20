<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  
  <link rel="stylesheet" href="./include/css/bootstrap.min.css">
  <link rel="stylesheet" href="./include/css/all.min.css">
  <link rel="stylesheet" href="./include/css/index.css">
  <link rel="stylesheet" href="./include/css/posts.css">
</head>
<body>
  <section>
  <div class="container-fluid">
    <div class="row">
    
      <div class="col-md-2 sidebar">
        
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="./practice2.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./posts.php">Property</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">schedule</a>
          </li>
          
        </ul>
      </div>
      
      
      <div class="col-md-10 main-content">
        <div class="headertext">
          <h1>Posts In details for your Flat or Appartments</h1>
        </div>
        <section>
          <div class="container">
            <div class="row">
              
              <div class="col">
                <form class="form">
                  <div class="col-md-12">
                    <label><b>Your Name :</label>
                    <input type="email" class="form-control" placeholder="Enter your name" />
                  </div>
                  <div class="sameline ">
                    <div class="col-md-6">
                      <label>Id Number</label>
                      <input type="idnumber" class="form-control" placeholder="Enter your Number" />
                    </div>
                    <div class="col-md-6">
                      <label>Address</label>
                      <input type="email" class="form-control" placeholder="Enter your Address" />
                    </div>
                  </div>
        
        
        
                  <div class="col-12">
                    <div class="Details">
                      <label>Posts Details</label>
                      <textarea class="form-control" id="FormControlTextarea1" placeholder="Your flat Details, rents, Advantages... more.." rows="6"></textarea>
        
                    </div>
                    
                    
        
                  </div>
                  <div class="col-12">
                      <div class="form-group">
                          <label for="imageUpload">Select an image:</label>
                          <input type="file" class="form-control-file" id="imageUpload" accept="image/*">
                        </div>
                        <button type="submit" class="buttonOnet">Upload Image</button>
                  </div>
                </form>
              </div>
             
            </div>
            </b>
          </div>
          </div>
          </div>
        </section>
        

      </div>
    </div>
  </div>
</section>

 
  <script src="./include/js/jquery-3.7.0.js"></script>
  <script src="./include/js/bootstrap.bundle.js"></script>
  <script src="./include/js/bootstrap.min.js"></script>
</body>
</html>
