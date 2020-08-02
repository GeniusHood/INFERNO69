<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo(base_url('public/estilos.css')) ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>INFERNO.69</title>
</head>
<body class="fondo">
    <header>
        <nav class="navbar navbar-expand-lg fondo">
            <a class="navbar-brand text-light " href="<?php echo(base_url('public/inferno')) ?>">
                <img src="imagenes/Logo1.jpeg" width="50" height="50" class="d-inline-block align-top " alt="" loading="lazy">
               
              </a>
            <button class="navbar-toggler btn btn-outline-warning" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon btn btn-outline-warning"></span>
            </button>          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link text-light" href="<?php echo(base_url('public/inferno')) ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="<?php echo(base_url('public/category')) ?>">Category</a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link text-light" href="<?php echo(base_url('public/programmers')) ?>">Programmers</a>
                  </li>
              </ul>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-success mr-2" data-toggle="modal" data-target="#Register">
                   Sing up 🔥
                   </button>
               
               <!-- Modal -->
               <div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-labelledby="Register" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="Register">Register in Inferno.69</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form>
                         <div class="form-row">
                           <div class="col-6 mb-3 font-weight-bold">
                             <label for="validationDefault01">Name</label>
                             <input type="text" class="form-control" id="validationDefault01" required>
                           </div>
                           <div class="col-md-6 mb-3 font-weight-bold">
                             <label for="validationDefault02">Address</label>
                             <input type="text" class="form-control" id="validationDefault02" required>
                           </div>
                           <div class="col-md-6 mb-3 font-weight-bold">
                             <label for="validationDefault02">Identification card</label>
                             <input type="number" class="form-control" id="validationDefault03" required>
                           </div>
                           <div class="col-md-6 mb-3 font-weight-bold">
                             <label for="validationDefault05">Email</label>
                             <input type="email" class="form-control" id="validationDefault04" required>
                           </div>
                         </div>
                         <div class="form-row">
                           <div class="col-md-6 mb-3  font-weight-bold">
                             <label for="validationDefault03">Phone number</label>
                             <input type="number" class="form-control" id="validationDefault05" required>
                           </div>
                           <div class="col-md-6 mb-3  font-weight-bold">
                             <label for="validationDefault03">Password</label>
                             <input type="password" class="form-control" id="validationDefault06" required>
                           </div>
                         </div>                            
                       </form>
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="button" class="btn btn-primary">Sing up</button>
                     </div>
                   </div>
                 </div>
               </div>
               
                 <!-- Button trigger modal -->
                 <button type="button" class="btn btn-outline-info mr-2" data-toggle="modal" data-target="#Loginin">
                 Login in 😈
                   </button>
               
               <!-- Modal -->
               <div class="modal fade" id="Loginin" tabindex="-1" role="dialog" aria-labelledby="Loginin" aria-hidden="true">
                 <div class="modal-dialog">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h5 class="modal-title" id="Loginin">Welcome to Inferno.69</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                     </div>
                     <div class="modal-body">
                       <form>
                         <div class="form-group">
                           <label for="exampleInputEmail1 " class="font-weight-bold">Email address</label>
                           <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                           <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                         </div>
                         <div class="form-group">
                           <label for="exampleInputPassword1 " class="font-weight-bold">Password</label>
                           <input type="password" class="form-control" id="exampleInputPassword1">
                         </div>
                         
                       </form>
                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                       <button type="button" class="btn btn-primary">Login in</button>
                     </div>
                   </div>
                 </div>
               </div>
          </nav>
    </header>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md12">
                        <div class="card-deck">
                            <div class="card">
                              <img src="<?php echo(base_url('public/imagenes/accessories1.png')) ?>" class="card-img-top" alt="accessories1">
                              <div class="card-body">
                                <h5 class="card-title">SILICONE BALL GAG BLACK</h5>
                              </div>
                              <div class="card-footer">
                                <small class="text-danger">$55.900</small>
                              </div>
                            </div>
                            <div class="card">
                              <img src="<?php echo(base_url('public/imagenes/accessories2.png')) ?>" class="card-img-top" alt="accessories2">
                              <div class="card-body">
                                <h5 class="card-title">FLOGGER BLACK</h5>
                              </div>
                              <div class="card-footer">
                                <small class="text-danger">$50.900</small>
                              </div>
                            </div>
                            <div class="card">
                              <img src="<?php echo(base_url('public/imagenes/accessories3.png')) ?>" class="card-img-top" alt="accessories3">
                              <div class="card-body">
                                <h5 class="card-title">PALM CROP BLACK</h5>
                              </div>
                              <div class="card-footer">
                                <small class="text-danger">$49.900</small>
                              </div>
                            </div>
                            <div class="card">
                                <img src="<?php echo(base_url('public/imagenes/accessories4.png')) ?>" class="card-img-top" alt="accessories4">
                                <div class="card-body">
                                  <h5 class="card-title">PASSIONATE PADDLE BLACK</h5>
                                </div>
                                <div class="card-footer">
                                  <small class="text-danger">$68.000</small>
                                </div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </section> <br>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md12">
                        <div class="card-deck">
                            <div class="card">
                              <img src="<?php echo(base_url('public/imagenes/accessories5.png')) ?>" class="card-img-top" alt="accessories5">
                              <div class="card-body">
                                <h5 class="card-title">NIPPLE CLAMP METAL BLACK</h5>
                              </div>
                              <div class="card-footer">
                                <small class="text-danger">$59.900</small>
                              </div>
                            </div>
                            <div class="card">
                              <img src="<?php echo(base_url('public/imagenes/accessories6.png')) ?>" class="card-img-top" alt="accessories6">
                              <div class="card-body">
                                <h5 class="card-title">NIPPLE CHAIN</h5>
                              </div>
                              <div class="card-footer">
                                <small class="text-danger">$50.000</small>
                              </div>
                            </div>
                            <div class="card">
                              <img src="<?php echo(base_url('public/imagenes/accessories7.png')) ?>" class="card-img-top" alt="accessories7">
                              <div class="card-body">
                                <h5 class="card-title">NIPPLE CLAMPS METAL SILVER</h5>
                              </div>
                              <div class="card-footer">
                                <small class="text-danger">$55.000</small>
                              </div>
                            </div>
                            <div class="card">
                                <img src="<?php echo(base_url('public/imagenes/accessories8.png')) ?>" class="card-img-top" alt="accessories8">
                                <div class="card-body">
                                  <h5 class="card-title">NIPPLE MOON HEART BLACK</h5>
                                </div>
                                <div class="card-footer">
                                  <small class="text-danger">$49.000</small>
                                </div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </section><br>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md12">
                        <div class="card-deck">
                            <div class="card">
                              <img src="<?php echo(base_url('public/imagenes/accessories9.jpg')) ?>" class="card-img-top" alt="accessories9">
                              <div class="card-body">
                                <h5 class="card-title">FETISH FANTASY CUFFS BLACK</h5>
                              </div>
                              <div class="card-footer">
                                <small class="text-danger">$79.500</small>
                              </div>
                            </div>
                            <div class="card">
                              <img src="<?php echo(base_url('public/imagenes/accessories10.png')) ?>" class="card-img-top" alt="accessories10">
                              <div class="card-body">
                                <h5 class="card-title">SENSUAL MASK</h5>
                              </div>
                              <div class="card-footer">
                                <small class="text-danger">$30.000</small>
                              </div>
                            </div>
                            <div class="card">
                              <img src="<?php echo(base_url('public/imagenes/accessories11.png')) ?>" class="card-img-top" alt="accessories11">
                              <div class="card-body">
                                <h5 class="card-title">WHORE NECKLACE</h5>
                              </div>
                              <div class="card-footer">
                                <small class="text-danger">$160.000</small>
                              </div>
                            </div>
                            <div class="card">
                                <img src="<?php echo(base_url('public/imagenes/accessories12.jpeg')) ?>" class="card-img-top" alt="accessories12">
                                <div class="card-body">
                                  <h5 class="card-title">BLACK CANDLES</h5>
                                </div>
                                <div class="card-footer">
                                  <small class="text-danger">$25.000</small>
                                </div>
                              </div>
                          </div>
                    </div>
                </div>
            </div>
        </section><br>
        <section class="p-10px">
            <div class="container ">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="card-deck">
                            <div class="card ">
                              <img src="<?php echo(base_url('public/imagenes/accessories13.jpg')) ?>" class="card-img-top" alt="accessories13">
                              <div class="card-body">
                                <h5 class="card-title">KIT FETISH FANTASY</h5>
                              </div>
                              <div class="card-footer">
                                <small class="text-danger">$190.000</small>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="ppp">
        <div class=" container text-dark ">
            <div class="row">                
                <div class="col-12 col-md-4 ">  
                     <br>                    
                    <a class="navbar-brand text-light " href="">
                     <img src="<?php echo(base_url('public/imagenes/Logo1.jpeg'))?>" width="90" height="90" alt="imagen1" loading="lazy">
                     </a> 
                </div> 
                <div class="col-12 col-md-4 ">
                     <a class="navbar-brand text-light" href="">
                        <img src="<?php echo(base_url('public/imagenes/gmail (1).png'))?>" width="50" height="50" alt="imagen2" loading="lazy">
                        Inferno.69@gmail.com   </a>  
                          <a class="navbar-brand text-light   " href="">
                        <img src="<?php echo(base_url('public/imagenes/periscope.png'))?>" width="50" height="50" alt="imagen4" loading="lazy">
                    Medellin-Colombia</a> <br>        
                </div>
                <div class="col-12 col-md-4">                   
                    <a class="navbar-brand text-light" href="">
                        <img src="<?php echo(base_url('public/imagenes/copywriting.png'))?>" width="50" height="50" alt="imagen3" loading="lazy">Copyright</a> <br>
                    <a class="navbar-brand text-light" href="">
                        <img src="<?php echo(base_url('public/imagenes/whatsapp (1).png'))?>" width="50" height="50" alt="imagen3" loading="lazy">
                        </a> 
                    <a class="navbar-brand text-light   " href="">
                        <img src="<?php echo(base_url('public/imagenes/instragram.png'))?>" width="50" height="50" alt="imagen4" loading="lazy">
                    </a> 
                    <a class="navbar-brand text-light   " href="">
                        <img src="<?php echo(base_url('public/imagenes/facebook.png'))?>" width="50" height="50" alt="imagen4" loading="lazy">
                    </a> 
                    <a class="navbar-brand text-light   " href="">
                        <img src="<?php echo(base_url('public/imagenes/twitter.png'))?>" width="50" height="50" alt="imagen4" loading="lazy">
                    </a>                         
                </div>     
                                                                                      
            </div>
        </div>
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>