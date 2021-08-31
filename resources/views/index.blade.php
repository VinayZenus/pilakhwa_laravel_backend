<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">

    <title>Signup Form</title>
  </head>

  <body style="background:url(https://cdn.pixabay.com/photo/2021/08/25/07/23/nature-6572635_960_720.jpg); background-size:cover;">
    <br>
    <center> <h1>Signup now</h1> </center>
   <br>
   <div class="container">
     <div class="form-group col-12 p-0">
       <div>
         @if(Session::has('success'))
         <div class="alert alert-success">
           {{ Session::get('success') }}
      </div>
@endif
</div>

<form action="{{route('store')}}" method="POST">
@csrf
  
       <div class="container" style="background:#fff; padding:20px; border-radius:20px;">

        <div class="myform">
            
            <div class="row">
                
                <div class="form-group col-6">

                  <input type="text" name="firstname" class="form-control" placeholder="First name" required> <br>

              </div>

              <div class="form-group col-6">

                  <input type="text" name="lastname" class="form-control" placeholder="Last name" required> <br>


              </div>
            </div>

         <div class="row">

          <div class="form-group col-6">

           
            <input type="text" name="user" class="form-control" placeholder="Username" required> <br>

          </div>

          <div class="form-group col-6">

              <input type="text" name="email" class="form-control" placeholder="Email address" required> <br>


          </div>

       </div>

        <div class="row">

           <div class="form-group col-6">
             
               <input type="password" name="password" class="form-control" placeholder="Password"required> <br>

           </div>

           <div class="form-group col-6">
             
               <input type="text" name="mobile" class="form-control" placeholder="Mobile number"required> <br>
           </div>

           <div class="form-group col-6">
             <button type="submit" class="btn btn-success">Submit</button>
              
              </section>
              
              </div>

           </div>

        </div>

    </form>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  </body>
</html>
