<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Template</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   </head>
   <body>
      <div class="container">
         <div class="row mt-3">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            </div>
            <div class="col-md-3"></div>
         </div>
         <div class="row mt-3">
            <div class="col-md-3">
               <h5>Note: </h5>
               <hr>
               <p>Fill All Fields Otherwise data will not submitted to database.</p>
               <hr>
               <p>Same Email will not submitted</p>
               <hr>
               <p>Type Correct format of Email Otherwise data will not submitted</p>
            </div>
            <div class="col-md-6">
               <form  method="post" action="insert.php">
                  <h3 class="text-center">Add New Customer</h3>
                  <hr>
                  <div class="form-group">
                     <input class="form-control" type="text" name="first_name" placeholder="Name" autocomplete="off" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control" type="text" name="last_name" placeholder="lastname" autocomplete="off">
                  </div>
                  <div class="form-group">
                     <input class="form-control" type="text" name="email" placeholder="Email " autocomplete="off" required>
                  </div>
                  <div class="form-group">
                     <input  class="form-control" type="text" name="phone" placeholder="Mobile Number" autocomplete="off" required>
                  </div>
                  <div class="form-group">
                     <input  class="form-control" type="password" name="password" placeholder="password" required>
                  </div>
                  <button type="submit" class="btn btn-success btn-block" name="submit">Submit Form</button>
               </form>
               <hr>
               <a href="Users.php" class="btn btn-primary btn-block" role="button">View All Customers</a>
            </div>
            <div class="col-md-3"></div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   </body>
</html>