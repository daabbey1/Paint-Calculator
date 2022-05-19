<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootsrapFiles\css\bootstrap.min.css" type="text/css">
    <link href="fontAwesome\all.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="stylesheet\head.css">
    <link rel="stylesheet" href="home.css">
    <title> Image Painting </title>
</head>
<body>
    <img class="img-logo" src="images\logo.png"  alt="logo" srcset="">
   <div class="box">
        <div class="title">
            Paint calculator
        </div>
    <div class="">
        <div class="main-body">
           <div class="room-wall">
                {{-- Room Walls --}}
                <div class="room-title">
                        Room walls
                </div>
                <form action="" method="post">
                    <div class="room-body row" id="form">
                        <div class="col-7 bg-dange">
                            <div class="row">
                                <div class="col-7">
                                    <span class="input-text" > Bed room, Hall,etc </span> <br> 
                                    <span class="input-text"> Total area of Room </span> <br>
                                    <span class="input-text"> Total area of windows </span> <br>
                                    <span class="input-text"> Total area of Door </span> <br>
                                    {{-- <span class="input-text"> Number of rooms </span> <br> --}}
                                </div>
                                <div class="col-5">
                                    <div class=" input-box col-4 br-warning">
                                        <input type="text"placeholder="  " name="" id=""> <br>
                                        <input type="text" name="" id=""> <br>
                                        <input type="text" name="" id=""> <br>
                                        <input type="text" name="" id=""> <br>
                                        {{-- <input type="number" name="" id=""> <br> --}}
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    
                        <div class="col-5 wall-form"> 
                            <div class="material-title">
                                Materils to be used
                            </div>
                            <div class="material-body  row">

                                <div class="col-6"> 
                                    <span class="input-text"> Primier  </span> <br>
                                    <span class="input-text"> Caulking/Filla  </span> <br>
                                    <span class="input-text"> Masky/Paper/plastic  </span> <br>
                                </div>
                                
                                <div class="materials-chk col-2">
                                    <input class="checkbox" type="checkbox" size="" name="" id=""> <br>
                                    <input class="checkbox" type="checkbox" name="" id=""> <br>
                                    <input class="checkbox" type="checkbox" name="" id=""> <br>
                                </div>
                            </div>
                        </div> 
                        
                        {{-- Horizontal Bar --}}
                        <hr class="hor-bar">

                        <div class="section" id="form_section">
                            
                            <p> Lorem, ipsum dolor.</p>
                            
                        </div>

                        {{-- Action Buttons --}}
                        <div class="buttons">
                            <div class="action-buttons">

                                <a class="subtract-btn" href='#'>-</a>
                                {{-- <button type="button" class="add-btn">+</button> --}}
                                {{-- <button type="button" class="add-btn  btn-sm">+</button> --}}
                                <button type="button" class="add-btn btn-sm" id="add" onclick="AddForm()"  > +</button>
                                
                                
                                <button type="submit" style="color:white; background-color: #079b8ad7" class="submit-btn btn-light"> Submit </button>
                            </div>
                        </div>
                        {{-- <a href='home?name=true'> <i class="fas fa-plus"></i> </a> --}}
                        {{-- <a href='home?name=true'>Execute PHP Function</a> --}}
                        {{-- <a href='home?name=true'> KL<i class="fas fa-plus"></i> </a> --}}
                        {{-- <button type="submit" style="color:white; background-color: #079b8ad7" class="sub-btn btn-light"> Submit </button>   --}}
                    </div>
                </form>
            </div>
        </div>
    </div>

   {{-- Bootstrap files --}}
   <script src="bootsrapFiles\js\bootstrap.min.js"></script>
   <script src="bootsrapFiles\js\propper.js"></script>
   <script src="js\backendScript.js"></script>
</body>
</html>