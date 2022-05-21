<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="bootsrapFiles\css\bootstrap.min.css" type="text/css">
    <link href="fontAwesome\all.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="images\logo.png">

    {{-- <link rel="stylesheet" href="stylesheet\head.css"> --}}
    <link rel="stylesheet" href="page.css">
    <title>Image Painting</title>
</head>
<body>
    <img class="img-logo" src="images\logo.png"  alt="logo" srcset="">
    <div class="main-body bg-warnin">
        <div class="main-title">
            PAINT ESTIMATOR
        </div>
        <div class="ceilling-box">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/page">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#"> Spreed Rate</a>
                    <a class="nav-item nav-link" href="#"> Material Cost</a>
                  </div>
                </div>
              </nav>
            <table class="main-table ">
                <form action="" onsubmit="onFormSubmit()">
                    <tr class="title bg-dange">
                        <th class="main-header" colspan="2"> <h3> CEILLING</h3> </th>
                    </tr>
                    <tr class="table-box">
                        <td class="column-1"> 
                            <table>
                                <tr class="bg-inf">
                                    <td class="bg-inf"> <label for="Space name"> Space name </label>  </td>
                                    <td> <input type="text" name="space" id="space" placeholder="Master bedroom"> </td> 
                                </tr>
                                <tr class="bg-warnin">
                                    <td> <label for="Surface-area"> Surface area </label> </td>
                                    <td> <input type="number" name="length" id="length" placeholder="L"> ft <input type="number" name="breath" id="breath" placeholder="B"> ft</td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="Select-paint"> Select paint  </label>
                                    </td>
                                    <td>
                                        <select name="Paint-options" id="paints">
                                            <option value="volvo">Paint 1</option>
                                            <option value="saab">Paint 2</option>
                                            <option value="mercedes">Paint 3</option>
                                        <option>
                                    </td>
                                </tr>
                                <tr class="" >
                                    <td> <label for="fee"> Labour fee </label> </td>
                                    <td> <input type="number" name="fee" id="fee" placeholder="200"> 	&#8373; </td>
                                </tr>
                            </table>
                        </td>
                        <td class="column-2">
                            <table>
                                <tr>
                                    <td> Materials To Be Used </td>
                                </tr>
                                <tr> 
                                    <td> <input type="checkbox" name="Primier" id="primier" value="Primier"> Primier </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" name="Caulking" id="caulking" value="Caulking"> Caulking </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" name="Filla" id="filla" value="Filla"> Filla </td>
                                </tr>
                                <tr>
                                    <td> <input type="checkbox" name="Masky" id="masky" value="Masky"> Masky tape </td>
                                </tr>
                            </table>
                        </td>
                        <td class="column-3">
                            <div class="check-list">
                                <table class="table table-striped cart-list">
                                    <thead class="sticky-top bg-white">
                                      <tr class="cart-title ">
                                        <td >#</td>
                                        <td > Space </td>
                                        <td> Area </td>
                                        <td> Paint (Ltr) </td>
                                        <td> Cost </td>
                                        <td> Material </td>
                                        <td> Cost </td>
                                        <td> Fee(&#8373;) </td>
                                        <td> Total(&#8373;) </td>
                                        <td> Action </td>
                                      </tr>
                                    </thead>
                                    <tbody id="Data-section" class="Data-section">
                                      {{-- <tr>
                                        <th scope="row">1</th>
                                        <td>Master bedroom</td>
                                        <td>168</td>
                                        <td>3</td>
                                        <td>150</td>
                                        <td>Filla</td>
                                        <td>30</td>
                                        <td>200</td>
                                        <td>380</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>Guess bedroom </td>
                                        <td>165</td>
                                        <td>3</td>
                                        <td>150</td>
                                        <td>Filla</td>
                                        <td>30</td>
                                        <td>200</td>
                                        <td>380</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td>Main hall</td>
                                        <td>200</td>
                                        <td>3</td>
                                        <td>150</td>
                                        <td>Filla</td>
                                        <td>30</td>
                                        <td>200</td>
                                        <td>380</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">4</th>
                                        <td>Main hall</td>
                                        <td>200</td>
                                        <td>3</td>
                                        <td>150</td>
                                        <td>Filla</td>
                                        <td>30</td>
                                        <td>200</td>
                                        <td>380</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">4</th>
                                        <td>Main hall</td>
                                        <td>200</td>
                                        <td>3</td>
                                        <td>150</td>
                                        <td>Filla</td>
                                        <td>30</td>
                                        <td>200</td>
                                        <td>380</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">4</th>
                                        <td>Main hall</td>
                                        <td>200</td>
                                        <td>3</td>
                                        <td>150</td>
                                        <td>Filla</td>
                                        <td>30</td>
                                        <td>200</td>
                                        <td>380</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">4</th>
                                        <td>Main hall</td>
                                        <td>200</td>
                                        <td>3</td>
                                        <td>150</td>
                                        <td>Filla</td>
                                        <td>30</td>
                                        <td>200</td>
                                        <td>380</td>
                                      </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"> <hr class="ceil-bar1"> </td>
                        <td colspan="1"> <hr class="ceil-bar2"> </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="buttons">
                                <div class="action-buttons">
                                    <button type="button" onclick="resetForm()" class="sub-btn btn-sm">Reset</button>
                                    <button type="submit" class="add-btn btn-sm" id="add" > Add New</button>
                                </div>
                            </div>
                        </td>
                        <td colspan="1">
                            <div class="total-submit">
                                <span class="total">
                                    GRAND TOTAL : GHS <span id="grand-total">   </span>
                                </span>
                                <span class="submit">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn " data-toggle="modal" data-target="#exampleModal">
                                        Send Mail
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"> INVOICE </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                      <label for="clients-name" id="client-name"> Business / Client's Name </label>
                                                      <input type="text" class="form-control" id="client-name" placeholder="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="clients-location" id="clients-location" class=""> Business / Client's Location </label>
                                                        <input type="text" class="form-control" id="clients-location" placeholder="">
                                                      </div>
                                                    <div class="form-group">
                                                      <label for="clients-email" id="clients-email"> Business / Client's Email </label>
                                                      <input type="Email" class="form-control" id="clients-email" placeholder="">
                                                    </div>
                                                  </form>
                                            </div>
                                            <div class="modal-footer">
                                            {{-- <button type="button" class="btn exit" data-dismiss="modal">Close</button> --}}
                                            <button type="button" class="btn send-invoice">Send Invoice</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="0"> <hr class="ceil-bar"> </td>
                    </tr>
                </form>
            </table>
        </div>
    </div>


    {{-- Bootstrap files --}}
   <script src="js/backendScript.js"></script>
   <script src="js/Bootstrapjquery.js"></script>
    <script defer src="js/all.js"></script>
    <script src="js/Propper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>