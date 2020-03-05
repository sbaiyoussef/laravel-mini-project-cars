<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{mix('/css/app.css')}}">
<link rel="stylesheet" href="{{mix('/css/theme.css')}}">

    <title>CARS</title>
</head>
<body>
   <div class="container-fluid" id="cont">
   
    <section class="header">
        <div class="overlay">
            <div class="row">
               <div class="navbar navbar-default">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                        <div class="navlogo col-lg-2">
                            <a class="navbar-brand" href="#">Cars</a>
                        </div>
                      
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                      
                   <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <div class="col-lg-8">
                                  <ul class="nav navbar-nav nav-links">
                                     <li><a href="#">Demos</a></li>
                                    <li><a href="#">Featured</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li><a href="#">Elements</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Shop</a></li>

                                  </ul>
                                </div>
                                
                            <div class="col-lg-2 right">
                                 <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#"><i class="fa fa-search fa-2x"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
                                     
                                </ul>
                            </div>-->
                          
                        </div>
                     

                  </div>
             </div>
            
            
            </div>
    
            
            
            
            
        </div>
    </section>
              

              <form action="{{route('cars.create')}}" method="POST">
                  @csrf
                <div class="form-group">
                  <label for="">mark</label>
                  <input type="text" class="form-control" name="mark" >
                </div>
                <div class="form-group">
                    <label for="">model</label>
                    <input type="text" class="form-control" name="model" >
                </div>
                  <div class="form-group">
                    <label for="">Produced on</label>
                    <input type="date" class="form-control" name="producedOn" >
                  </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>


        </div>
        <div class="col-md-6">
          <table class="table table-striped table-hover">
              <tr>
                  <th>mark</th>
                  <th>model</th>
                  <th>produced on</th>
              </tr>
              @foreach ($cars as $car)
              <tr>
              <td>{{$car->mark}}</td>
                <td>{{$car->model}}</td>
                <td>{{$car->producedOn}}</td>
            </tr>
              @endforeach
      
          </table>
        </div>
       </div>
   </div>
</body>
</html>