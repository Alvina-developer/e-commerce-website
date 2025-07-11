<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/app.js"></script>
    <title>Document</title>
    <style>
.btn1 {
    transition: color 0.8s; 
    overflow: hidden;
    position: relative;
    z-index: 1; 
    background-color: transparent; 
    color: #000; 
}

.btn1::before {
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 0%;
    background: #000;
    z-index: -1; 
    transition: height 0.8s;
    bottom: 0;
    border-radius: 50% 50% 0 0;
}

.btn1:hover::before {
    height: 180%;
}

.btn1:hover {
    color: #fff; 
}

.display1{
    height: 600px;
}
.display1 img{
   height : 400px;
}

 </style>
</head>
<body>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <a href="" class="navbar-brand nav-link fs-1">COSMECOS</a>
                <button class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#mynav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-end text-light me-5" id="mynav">
                    <ul class="navbar-nav ">
                        <li class="nav-item"><a href="index.php" class="nav-link p-4"> HOME </a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link p-4"> ABOUT US </a></li>
                        <li class="nav-item"><a href="display.php" class="nav-link p-4"> SHOP </a></li>
                        <li class="nav-item"><a href="page.php" class="nav-link p-4"> PAGES </a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link p-4"> CONTACT </a></li>
                        <li class="nav-item"><a href="" class="nav-link p-4 fs-4"> <i class="fa-regular fa-heart"></i>
                            </a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link p-4 fs-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link p-4 fs-4"> <i
                                    class="fa-solid fa-magnifying-glass"></i>
                            </a></li>
                    </ul>
    </nav>


    <!--modal-->

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body d-flex flex-column align-items-center">
                              <!--form-->
                              <h2 class="mt-3 hd2">Login</h2>
                              <div class="input-box text-dark input-group p-4 mt-5 mb-4">
                                  <input type="text" placeholder="Enter Username" class=" p-1 form-control" id="uname">
                                  
                                  <i class="fa-solid fa-user i1"></i>
                              </div>
                              <div class="input-box text-dark input-group p-4 mt-3 mb-4">
                                  <input type="text" placeholder="Enter Password" class="p-1 form-control" id="pswd">
                                 <span> 
                                  <button class="btn  i2" onclick="showpass()"> <i class="fa-solid fa-eye "></i></button>
                                 </span>
                                  
                              </div>
                              <div>
                                  <input type="checkbox">
                                  <span class="text-dark">Remember me</span>
                                  <span class="ms-5 text-dark"><a href="#">Forget Password?</a></span>
                              </div>
                              <!-- <div class=" w-100 mt-3">
                                  <button class=" mt-2 btn border-dark border d-flex m-auto ps-5 pe-5 pt-2 pb-2 rounded-pill" onclick="abc()">Login</button>
                              </div> -->
                              <!-- <p class="mt-3 text-dark">Don't hava an account? <a href="#">Register</a></p> -->
<!--formend-->
                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn1 border-dark border" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn  btn1 border border-dark" onclick="abc()">Login</button>
                            </div>
                          </div>
                        </div>
                      </div>
<!--modal end-->



<div class="container">
    <div class="row">
    <?php
        
        include 'config.php';
        $query = "SELECT * FROM product_info" ;

        $res = mysqli_query($conn, $query) or die('Query Failed');
        

    while($row = mysqli_fetch_assoc($res)){
        ?>
        
        <div class="col-lg-4 display1">
            <img src="assets/img/<?php echo $row['P_img']?>"alt="no pic found" width="100%">
            <h1 class="hd4 text-center"><?php echo $row['P_name']?></h1>
            <p class="text-center text-secondary fs-5"><?php echo $row['P_description']?> </p>
            <h5 class="hd3 text-center  fw-bold">$<?php echo $row['P_price']?></h5>
        </div>
    
        
        
        <?php
    }?>
    </div>
   </div>
    </div>
</body>
</html>