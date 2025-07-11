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
    <link rel="stylesheet" href="assets/icon/css/all.min.css">
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

 </style>
</head>
<body>
    <div class="container-fluid ">
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
                        <li class="nav-item"><a href="" class="nav-link p-4 fs-4"> <i class="fa-solid fa-cart-plus"></i>
                            </a>
                        </li>
                        <li class="nav-item"><a href="" class="nav-link p-4 fs-4"> <i
                                    class="fa-solid fa-magnifying-glass"></i>
                            </a></li>
                       
                    </ul>
                </div>
            </nav>
        
            <div class="container-fluid">
                <h1 class="hd2 text-center ">Add Products</h1>
           
             <div class="container p-5 img7">
                <form method="post" enctype="multipart/form-data">
                 <div class="row">
                    <div class="col-lg-8 p-5 mb-5 mt-5 m-auto bg-light">
                      <div class="row text-center fw-bold">
                        <div class="col-lg-3 text-center"><label class=""> Select Product:</label></div>
                        <div class="col-lg-9"><input type="file" name="img" class="form-control"></div>
                      </div>
                      <div class="row text-center mt-3 fw-bold">
                        <div class="col-lg-3 text-center"><label class=""> Product Name:</label></div>
                        <div class="col-lg-9"><input type="text" name="pname" class="form-control"></div>
                      </div>
                      <div class="row text-center mt-3 fw-bold">
                        <div class="col-lg-3 text-center"><label class=""> Product Description:</label></div>
                        <div class="col-lg-9"><input type="text"  name="pdes" class="form-control"></div>
                      </div>
                      <div class="row text-center mt-3 fw-bold">
                        <div class="col-lg-3 text-center"><label class=""> Product Price:</label></div>
                        <div class="col-lg-9"><input type="text" name="pprice" class="form-control"></div>
                      </div>

                      <button class="btn border border-dark d-block m-auto ps-5 pe-5 mt-5 pt-2 pb-2 btn1" name="btn"> Add Products</button>
                      
                    </div>
                 </div>
                </form>


                <?php
if (isset($_POST['btn'])){
    $a = $_FILES['img'];
    $b = $_POST['pname'];
    $c = $_POST['pdes'];
    $d = $_POST['pprice'];

    $p_name = $_FILES['img']['name'];
                 $p_size = $_FILES['img']['size'];
                 $p_tmp_name = $_FILES['img']['tmp_name'];
                 $p_type = $_FILES['img']['type'];
                 move_uploaded_file($p_tmp_name, 'assets/img/' . $p_name);


       include 'config.php';
        $query = "INSERT INTO product_info (P_img, P_name, P_description, P_price) VALUES ('$p_name', '$b', '$c', '$d')";
        $res = mysqli_query($conn, $query) or die('Query Failed');
        
        if($res){
            echo "<script>
            alert('your product add susseccfully');
            location.href='display.php';
            </script>";
        }
}


?>

             </div>



               
                
            </div>
    </div>
</body>
</html>