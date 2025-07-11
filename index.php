<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="assets/icon/css/all.min.css">
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/app.js"></script>
    <link rel="stylesheet" href="assets/Hover-master/css/hover.css">
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


 </style>
    <title>Cosmecos</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container-fluid  main mb-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <a href="" class="navbar-brand nav-link fs-1">COSMECOS</a>
                <button class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#mynav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-end text-light me-5" id="mynav">
                    <ul class="navbar-nav ">
                        <li class="nav-item hvr-grow hvr-underline-from-left"><a href="" class="nav-link pt-4"> HOME </a></li>
                        <li class="nav-item hvr-underline-from-left"><a href="" class="nav-link pt-4"> ABOUT US </a></li>
                        <li class="nav-item hvr-underline-from-left"><a href="display.php" class="nav-link pt-4"> SHOP </a></li>
                        <li class="nav-item hvr-underline-from-left"><a href="" class="nav-link pt-4"> PAGES </a></li>
                        <li class="nav-item hvr-underline-from-left"><a href="" class="nav-link pt-4"> CONTACT </a></li>
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
                                  <input type="password" placeholder="Enter Password" class="p-1 form-control" id="pswd">
                                 <span> 
                                  <button class="btn  i2" onclick="showpass()"> <i class="fa-solid fa-eye "></i></button>
                                 </span>
                                  
                              </div>
                              <div>
                                  <input type="checkbox">
                                  <span class="text-dark">Remember me</span>
                                  <span class="ms-5 text-dark"><a href="#">Forget Password?</a></span>
                              </div>
                             
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



                </div>
            </nav>

            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 mt-5">
                    <img src="assets/img/home2-slide1-img1-2.png" width="100%" height="100%">
                </div>
                <div class="col-lg-7 mb-5 mt-5 col-md-7 col-sm-7 d-flex justify-content-center align-items-center">
                    <div class="pe-5 fs-5  ">
                        <p class="text-center  hd1">A Little Surprise</p>
                        <p class="text-secondary">Electric ray demoiselle squeaker unicorn fish Kafuae pike bango
                            temperate ocean-bass,yellow bass coffinfish yellow cutomers.</p>
                        <button class="btn btn1 ps-5 pe-5 pt-3 pb-3 border border-dark mt-5">SHOP NOW</button>
                    </div>
                 </div>
            </div>
        </div><!--main-->
        <div class="container-fluid section1 mt-5 mb-5">
            <div class="row m-auto ">
                <div class="col-lg-5 mt-5 m-auto  img1">
                    <div class="pt-5 ps-3 pb-5">
                        <h1 class="hd2 mt-5">Best price</h1>
                        <h4 class="hd3">Perfume Flower Collection</h4>
                        <button class="btn  mt-5 btn1 ps-5 pe-5 pt-3 pb-3 border border-dark"> SHOP NOW</button>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-10 mt-5 m-auto  img2">
                    <div class="pt-5 ps-3 pb-5">
                        <h1 class="hd2 mt-5">New Perfume</h1>
                        <h4 class="hd3">Perfume Cool Collection</h4>
                        <button class="btn  mt-5 btn1 ps-5 pe-5 pt-3 pb-3 border border-dark"> SHOP NOW</button>
                    </div>

                </div>
            </div>
         </div><!--section1 -->
        <div class="container  mt-5 mb-5">
            <h4 class=" mt-5 text-center hd2 pt-5">Category</h4>
            <h2 class="text-center fs-2 hd1">FRAGRANCE TYPES</h2s>
                <h5 class="text-center text-secondary mt-3 mb-5">The stylish and organized cosmetic products</h5>
                <div class="row mt-5">
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="row m-auto">
                            <div class="col-lg-6 col-md-6 col-sm-6 m-auto">
                                <img src="assets/img/Capture.PNG" class="m-auto">
                            </div>
                        </div>
                        <h2 class="text-center hd3  mt-5">Fresh Fragrances</h2>
                        <p class="text-center text-secondary">Black scalyfin kingfish convict blenny ziege yellow moray
                            whalefish silver drifitinity elpo</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="row m-auto">
                            <div class="col-lg-6 col-md-6 col-sm-6 m-auto">
                                <img src="assets/img/Capture 1.PNG" class="m-auto">
                            </div>
                        </div>
                        <h2 class="text-center hd3 mt-5">Fresh Fragrances</h2>
                        <p class="text-center text-secondary">Black scalyfin kingfish convict blenny ziege yellow moray
                            whalefish silver drifitinity elpo</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="row m-auto">
                            <div class="col-lg-6 col-md-6 col-sm-6 m-auto">
                                <img src="assets/img/Capture 2.PNG" class="m-auto">
                            </div>
                        </div>
                        <h2 class="text-center hd3 mt-5">Oceanic Fragrances</h2>
                        <p class="text-center text-secondary">California halibut gianttail dogfish plunderfish dorado
                            rock
                            beauty combtooth blenny</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="row m-auto">
                            <div class="col-lg-6 col-md-6 col-sm-6 m-auto">
                                <img src="assets/img/Capture 3.PNG" class="m-auto">
                            </div>
                        </div>
                        <h2 class="text-center hd3 mt-5">Woody Fragrances</h2>
                        <p class="text-center text-secondary">Redmouth whalefish ling cod koi spotted dogfish lemon sole
                            nurse sandfish slender catfish.</p>
                    </div>
                </div>
        </div><!--section2-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-5">
                    <h1 class="mt-5 hd2">About Cosmecos </h1>
                    <h1 class="hd1 fs-2">PERFECT PERFUME</h1>
                    <p class="fw-bold">Popularized through customer relationships with some of the world’s most
                        recognizable faces.</p>
                    <p class=" text-secondary">Merluccid hake redlip blenny discus snake mudhead large-eye
                        bream scissor-tail rasbora opaleye char dogfish beachsalmon, sand tilefish. Spiny eel skipping
                        goby fierasfer tarwhine Blind goby tidewater goby rocket danio armorhead catfish streamer.</p>
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                            <h1 class="text-center hd4">470k </h1>
                            <h5 class="text-center text-secondary">Perfumes sold</h5>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <h1 class="text-center hd4">10 Years</h1>
                            <h5 class="text-center text-secondary">Perfect Years</h5>
                        </div>
                    </div>
                    <button class="btn mt-5 btn1 ps-5 pe-5 pt-3 pb-3 border border-dark">Explore Now</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="assets/img/download1.png" width="100%">
                    <h1 class="hd2 ms-5 mt-5">new</h1>
                </div>
            </div>
        </div><!--sectinon3-->
        <div class="container-fluid mt-5 section4 mb-5">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-8   p-5">
                    <h1 class=" ms-5 hd3 fw-bold mt-5">Find Your Beauty Guide</h1>
                    <h5 class="ms-5 text-secondary"> Cosmecos is committed to cruelty-free product formulation, &
                        testing.</h5>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-4 d-flex justify-content-center align-items-center">
                    <button class="btn mt-5  btn1 ps-5 pe-5 pt-3 pb-3 border border-dark">Explore Now</button>
                </div>
            </div>
        </div><!--sectinon4-->
        <div class="container mt-5 mb-5">
            <h1 class="hd2 text-center pt-5">Best products</h1>
            <h1 class="text-center hd3">Best Sellers Products</h1>
            <p class="text-secondary text-center mb-5">The stylish and organized cosmetic products</p>
            <div class="row ">
                <div class="col-lg-3  col-md-6 col-sm-12 ">
                    <div class="row">
                        <div class="col-lg-12 img3">
                            <img src="assets/img/img_2-9-545x654 (1).jpg" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex mt-5 justify-content-center align-items-center">
                            <span class="m-auto">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </span>
                        </div>

                        <div class="col-lg-12">
                            <p class="text-center fs-4 ">Body Oil & Lotion</p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 m-auto btn1 border-dark border">
                            <p class="text-center mt-2 ">ADD TO CART</p>
                        </div>
                        <div class="col-lg-5 m-auto border-dark border">
                            <p class="text-center mt-2"><span class="text-seondary"><s>$27.00</s></span><span
                                    class="hd4">$15.00</span></p>
                        </div>
                        <div class="col-lg-1"></div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="row">
                        <div class="col-lg-12 img3">
                            <img src="assets/img/img_2-8-545x654.jpg" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex mt-5 justify-content-center align-items-center">
                            <span class="m-auto">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </div>

                        <div class="col-lg-12">
                            <p class="text-center fs-4">Cream Soap</p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 m-auto btn1 border-dark border">
                            <p class="text-center mt-2 ">ADD TO CART</p>
                        </div>
                        <div class="col-lg-5 m-auto border-dark border">
                            <p class="text-center mt-2"><span class="hd4">$25.00</span></p>
                        </div>
                        <div class="col-lg-1"></div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="row">
                        <div class="col-lg-12 img3">
                            <img src="assets/img/img_2-7-545x654.jpg" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex mt-5 justify-content-center align-items-center">
                            <span class="m-auto">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </span>
                        </div>

                        <div class="col-lg-12">
                            <p class="text-center fs-4">Mascara</p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 m-auto btn1 border-dark border">
                            <p class="text-center mt-2 ">ADD TO CART</p>
                        </div>
                        <div class="col-lg-5 m-auto border-dark border">
                            <p class="text-center mt-2"><span class="text-secondary"><s>$45.00</s></span><span
                                    class="hd4">$35.00</span></p>
                        </div>
                        <div class="col-lg-1"></div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="row">
                        <div class="col-lg-12 img3">
                            <img src="assets/img/img_2-6-545x654.jpg" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex mt-5 justify-content-center align-items-center">
                            <span class="m-auto">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </span>
                        </div>

                        <div class="col-lg-12">
                            <p class="text-center fs-4">Dropped Beard Oil</p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 m-auto btn1 border-dark border">
                            <p class="text-center mt-2 ">ADD TO CART</p>
                        </div>
                        <div class="col-lg-5 m-auto border-dark border">
                            <p class="text-center mt-2"><span class="hd4">$28.00</span></p>
                        </div>
                        <div class="col-lg-1"></div>

                    </div>
                </div>


            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="row">
                        <div class="col-lg-12 img3">
                            <img src="assets/img/img_2-5-545x654.jpg" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex mt-5 justify-content-center align-items-center">
                            <span class="m-auto">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </span>
                        </div>

                        <div class="col-lg-12">
                            <p class="text-center fs-4">Nail Polish Nova</p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 m-auto btn1 border-dark border">
                            <p class="text-center mt-2 ">ADD TO CART</p>
                        </div>
                        <div class="col-lg-5 m-auto border-dark border">
                            <p class="text-center mt-2"><span class="hd4">$15.00</span></p>
                        </div>
                        <div class="col-lg-1"></div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="row">
                        <div class="col-lg-12 img3">
                            <img src="assets/img/img_2-4-545x654.jpg" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex mt-5 justify-content-center align-items-center">
                            <span class="m-auto">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </div>

                        <div class="col-lg-12">
                            <p class="text-center fs-4">Soft Hand Lotion</p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 m-auto btn1 border-dark border">
                            <p class="text-center mt-2 ">ADD TO CART</p>
                        </div>
                        <div class="col-lg-5 m-auto border-dark border">
                            <p class="text-center mt-2"><span class="hd4">$25.00</span></p>
                        </div>
                        <div class="col-lg-1"></div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="row">
                        <div class="col-lg-12 img3">
                            <img src="assets/img/img_2-3-1-545x654.jpg" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex mt-5 justify-content-center align-items-center">
                            <span class="m-auto">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </div>

                        <div class="col-lg-12">
                            <p class="text-center fs-4">Lipstick Brown</p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 m-auto btn1 border-dark border">
                            <p class="text-center  mt-2">ADD TO CART</p>
                        </div>
                        <div class="col-lg-5 m-auto border-dark border">
                            <p class="text-center mt-2"><span><s>$45.00</s></span><span class="hd4">$35.00</span></p>
                        </div>
                        <div class="col-lg-1"></div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="row">
                        <div class="col-lg-12 img3">
                            <img src="assets/img/img_2-2-1-545x654.jpg" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex mt-5 justify-content-center align-items-center">
                            <span class="m-auto">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </span>
                        </div>

                        <div class="col-lg-12">
                            <p class="text-center fs-4">Perfect Concealer</p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 m-auto btn1 border-dark border">
                            <p class="text-center  mt-2">ADD TO CART</p>
                        </div>
                        <div class="col-lg-5 m-auto border-dark border">
                            <p class="text-center mt-2"><span class="hd4">$28.00</span></p>
                        </div>
                        <div class="col-lg-1"></div>

                    </div>
                </div>

            </div>
            <button class="btn d-block m-auto mt-5 border border-dark btn1 pt-3 pb-3 ps-5 pe-5">Explore More</button>
        </div><!--section5-->
        <div class="container-fluid section6 mt-5 ">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 p-5 mt-5 ">
                    <div class="bg1 mt-5 ms-5">
                        <h1 class="hd2  text-light">Perfume</h1>
                        <h1 class="hd1 mt-3"> Fresh Aroma</h1>
                        <p class="mt-3 text-secondary">Dogteeth tetra coley Ragfish yellow-and-black triplefin grenadier
                            dogfish shark torpedo scaly dragonfish flathead

                        </p>
                        <button class="btn btn1 border border-dark mt-5 ps-5 pe-5 pt-3 pb-3"> Shop Now</button>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-7">
                    <img src="assets/img/home2-image-3.png">
                    <!-- <div class=""><span>-50%</span><span>SALE</span></div> -->
                </div>
            </div>
        </div><!--section6-->
        <div class="container-fluid mt-5  ">
            <div class="row ">
                <div class="col-lg-1 col-md-1 "></div>
                <div class="col-lg-5 col-md-5 col-sm-12 img5 mt-5" >
                   
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 ms-5">
                    <h2 class="hd2 mt-5">Features</h2>
                    <h1 class="hd3">Only High Quality is the Core Value For Us</h1>
                    <p class="fw-bold mt-3">Palfmoon yellow moray tompot blenny, cuchia tompot blenny; smelt southern
                        flounder grunt sculpin yellowbanded perch.</p>
                    <p class="text-secondary">Searobin freshwater hatchetfish sea bass orangestriped triggerfish white
                        croaker. Pollock pencil catfish airbreathing catfish vendace pygmy sunfish spaghetti. Dogteeth
                        tetra coley. Merluccid hake redlip blenny discus snake mudhead large-eye bream scissor-tail
                        rasbora opaleye char dogfish beachsalmon, sand tilefish. Spiny eel skipping goby fierasfer
                        tarwhine Blind goby tidewater goby rocket danio armorhead catfish streamer.</p>
                    <button class="btn border border-dark ps-5 pe-5 pt-3 pb-3 mb-5 btn1 mt-5">Explore More</button>
                </div>
                <div class="col-lg-1 col-md-1 "></div>
            </div>
        </div><!--section7-->
        <div class="container-fluid mt-5">
            <div class="row mt-5">
                <div class="col-lg-1 col-md-1 "></div>

                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2 class="hd2 mt-5">Features</h2>
                    <h1 class="hd3">A perfume that makes dressing complete</h1>
                    <p class="text-secondary">Flabby whalefish ocean sunfish trench rocket danio Colorado squawfish,
                        cowfish round stiw perch zebra.</p>

                    <p class="fw-bold"><span><i class="fa-solid fa-circle-check"></i></span> <span class="ms-5">Frilled
                            shark ground shark livebearer cutthroat trout</span></p>
                    <p class="fw-bold"><span><i class="fa-solid fa-circle-check"></i></span> <span
                            class="ms-5">Tonguefish devil ray smalleye squaretail dogfish</span></p>
                    <p class="fw-bold"><span><i class="fa-solid fa-circle-check"></i></span> <span
                            class="ms-5">Porcupinefish warty angler zebra turkeyfish</span></p>
                    <button class="btn btn1 border border-dark ps-5 pe-5 pt-3 pb-3 mb-5 mt-5">Explore More</button>
                </div>
                <div class="col-lg-1 col-md-1 "></div>
                <div class="col-lg-5 col-md-5 col-sm-12 img6"></div>

            </div>

        </div>
    </div><!--section8-->
    <div class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 ps-5 ms-5">
                <h1 class="hd2 fs-2"> The Best things</h1>
                <h1 class="hd3">Revolution Gallery</h1>
                <p class="text-secondary">Yellow tang sea devil tang, wrymouth killifish southern flounder
                    weatherfish.<br> Cuckoo wrasse yellow jack redside.</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <button class="btn btn1 border border-dark mt-5 ms-5 ps-5 pe-5 pt-3 pb-3">VIEW ALL</button>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img src="assets/img/top-view-tropical-leaves-with-beauty-tools-cosmetics-2-640x640.jpg" width="100%">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img src="assets/img/set-luxury-perfume-bottles-isolated-min-2-640x640.jpg" width="100%">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img src="assets/img/close-up-woman-spraying-perfume-arms-add-fragrance-body-2-640x640.jpg"
                    width="100%">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <img src="assets/img/composition-with-cosmetic-products-aloe-vera-mortar-leaves-2-640x640.jpg"
                    width="100%">
            </div>
        </div>
    </div><!--section9-->
    <div class="container-fluid p-5 img7">
        <div class="container p-5 mt-5 bg-light">
            <h2 class="hd2 text-center">Testimonials</h2>
            <h1 class="hd1 text-center fs-1">WHAT OUR CLIENT SAYS</h1>
            <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container p-5">
                            <p class="text-secondary p-5 mt-5 text-center">Brows should begin directly above the middle of your nostrils.The
                                highest point of the arch
                                should <br>connectthe tip of the nose with the middle of the iris. brows should end where the
                                corner of the<br> nostrils connect with the outer corner of the eye.
                            </p>
                            <p class=" text-center fs-3">Mike Oxmall</p>
                            <p class="hd4 text-center fs-5">Client Of Cosmecos</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container p-5">
                            <p class="text-secondary p-5 mt-5 text-center">Brows should begin directly above the middle of your nostrils.The
                                highest point of the arch
                                should <br>connectthe tip of the nose with the middle of the iris. brows should end where the
                                corner of the<br> nostrils connect with the outer corner of the eye.
                            </p>
                            <p class=" text-center fs-3">Samanta Peterson</p>
                            <p class="hd4 text-center fs-5">Client Of Cosmecos</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container p-5">
                            <p class="text-secondary p-5 mt-5 text-center">Brows should begin directly above the middle of your nostrils.The
                                highest point of the arch
                                should <br>connectthe tip of the nose with the middle of the iris. brows should end where the
                                corner of the<br> nostrils connect with the outer corner of the eye.
                            </p>
                            <p class=" text-center fs-3">Mike Oxmall</p>
                            <p class="hd4 text-center fs-5">Client Of Cosmecos</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon " aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div><!--section10-->
    <div class="container-fluid section12 mt-5">
        <div class="row pt-5">
            <div class="col-lg-2 col-md-3 col-sm-6">
                <img src="assets/img/partner-logo-1-blue-2.png">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <img src="assets/img/partner-logo-2-blue-2.png">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <img src="assets/img/partner-logo-3-blue-2.png">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <img src="assets/img/partner-logo-4-blue-2.png">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <img src="assets/img/partner-logo-5-blue-2.png">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <img src="assets/img/partner-logo-6-blue-2.png">
            </div>
        </div>

    </div>
    <footer class="bg-dark">
       <div class="container">
        <div class="row text-light p-5">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h3 class="text-light ">COSMECOS</h3>
                <p><i class="fa-solid fa-location-dot"></i><span class="ms-2">58 White St., New York</span></p>
                <p><i class="fa-solid fa-envelope"></i><span class="ms-2">cosmecos_company@mail.com</span></p>
                <p><i class="fa-solid fa-phone"></i><span class="ms-2">+1 (800) 987 456 98</span></p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <p class="fs-2">Useful Links</p>
                <p>Home Pages</p>
                <p>Other Pages</p>
                <p>Protfoilo</p>
                <p>Blog Posts</p>
                <p>Shop Products</p>
                <p>Contacts</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <p class="fs-2">Subscribe</p>
                <input type="text" class="form-control mt-4" placeholder="Your Email">
                <button class="btn border text-light mt-3 ps-5 pe-5 pt-2 pb-2 form-control border-light">SUBSCRIBE</button>
            </div>
        </div>
     <hr class="bg-light">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
              <p class="text-light text-center">© 2024 Cosmecos Theme</p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <p class="text-light text-center">Terms and Conditions</p>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <p class="text-light text-center">
                    <span class="text-light"><i class="fa-brands fa-twitter"></i></span>
                    <span class="text-light ms-3"><i class="fa-brands fa-facebook"></i></span>
                    <span class="text-light ms-3"><i class="fa-brands fa-linkedin"></i></span>
                    <span class="text-light ms-3"><i class="fa-brands fa-instagram"></i></span>
                </p>
              </div>
        </div>
       </div>
            </footer>

    </div><!--main-->



</body>

</html>