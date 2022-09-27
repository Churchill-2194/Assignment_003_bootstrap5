<!DOCTYPE html>
<html lang="en">
<body>

  <?php
  require_once('dbconnect.php');
  if(isset($_POST['submitSubscriptions'])){
    //1.fetch from data
    $email=$_POST
    //2.SQL Query to insert data to database
    $queryData=mysqli_query($conn,"INSERT INTO subscribers email VALUES('$email')");
  }
  ?> 
  



    <nav class="navbar navbar-expand-lg bg-light fixed-top ">
        <div class="container-fluid">
         <a href="#" class="navbar-brand">Zalego Academy</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menu">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="menu">
             <div class="navbar-nav">
                 <a href="#" class="nav-link ">Home</a> 
                 <a href="#" class="nav-link active ">About us</a>
                 <a href="#" class="nav-link ">Contact us</a>
             </div>
         </div>
     </div>
    </nav>
    

    <main class="p-5 mb-2 text-black">
        <h1>About Us</h1>
        <p>This is a template for a single marketing or informational website.It includes a large callout called a jumbotron and three supporting pieces of content.Use it as a starting point to create something more unique</p>

    </main>

  <section class="container-fluid">
     <div class="row">
         <!-- First column starts -->
           <div class="col-sm-12 col-md-8 col-lg-6">
              <h2 class="title">Our Program</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eligendi molestias quaerat dolorem ipsa asperiores cum, 
              consequuntur, <br>nisi inventore eius quos aspernatur, nulla facilis tempora laudantium? 
              Eligendi, quo odio sapiente quasi perspiciatis fugit autem itaque.</p>
             
            </div>
         <!-- First column ends -->

         <!-- Second column starts -->
           <div class="col-sm-12col-md-6 col-lg-6">
              <img src="./office.jpg" alt="placeholder image" class="img-fluid" width="600px" height="400px">

           </div>

         <!-- Second column ends -->
        </div>
  </section>

  <h2 style="padding: 20px;">The Programs</h1>



    <section class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
               
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Skill Discovery</h5>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, minus!</p>

                  <a href="#"><button type="button" class="btn btn-primary">View Details</button>
                 
                  </a>


                </div>
              </div>

            </div>

            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Upskilling Program</h5>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, minus!</p>

                  <a href="#"><button type="button" class="btn btn-primary">View Details</button></a>


                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Path finding Program</h5>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt, minus!</p>

                  <a href="#"><button type="button" class="btn btn-primary">View Details</button></a>


                </div>
              </div>
            </div>
           
        </div>

      </section>
      <br>
      <div class=container>
        <p style="text-align: center;">
            Subscribe to get information,Latest news about<br> Zalego Academy
        </p>
      <br>
      <br>
      <section class="container justify-content-center">
        <div class="row">
          <div class="col-lg-7">
            <div class="form-group " >
          
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email address">
            </div>
          </div>
          <div class="col-lg-5">
            <a href="#"><button type="button" class="btn btn-primary">Subscribe</button></a>

          </div>
        </div>
        <br>
      </section>
      <div class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
          <p class="navbar-text">© Zalego2022</p>
        </div>
      </div>
</div>

</section>


    <hr> &copy;Company 22

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> 
</body>
</html>