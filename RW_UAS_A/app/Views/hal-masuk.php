<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Halaman Masuk - Aplikasi UAS Rekayasa Web</title>
    
    <!-- Komponen CSS Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- Komponen FontAwesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Komponen Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Flamenco&family=Montserrat&family=Poppins:wght@400;500&family=Quicksand:wght@600&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}


.container {
    margin: 50px auto;
}

.body {
    position: relative;
    width: 720px;
    height: 440px;
    margin: 20px auto;
    border: 1px solid #dddd;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}


.box-1 img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}


.box-2 {
    padding: 10px;
}

.box-1,
.box-2 {
    width: 50%;
}
.h-1 {
    font-size: 24px;
    font-weight: 700;
}
.text-muted {
    font-size: 14px;
}
.container .box {
    width: 100px;
    height: 100px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 2px solid transparent;
    text-decoration: none;
    color: #615f5fdd;
}


.box:active,
.box:visited {
    border: 2px solid #ee82ee;
}


.box:hover {
    border: 2px solid #ee82ee;
}

.btn.btn-primary {
    background-color: #ee82ee;
    color: white;
    border: 5px;
    padding: 6px;
    font-size: 18px;
}

.btn.btn-primary .fas.fa-chevron-right {
    font-size: 12px;
}


.footer .p-color {
    color: #ee82ee;
}

.footer.text-muted {
    font-size: 10px;
}

.fas.fa-times {
    position: absolute;
    top: 20px;
    right: 20px;
    height: 20px;
    width: 20px;
    background-color: #f3cff379;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.fas.fa-times:hover {
    color: #ff0000;
}

@media (max-width:767px) {
    body {
        padding: 10px;
    }

    .body {
        width: 100%;
        height: 100%;
    }

    .box-1 {
        width: 100%;
    }

    .box-2 {
        width: 100%;
        height: 440px;
    }
}
    </style>

</head>
 
<body class="p-5" style="font-family: Poppins;">
    <center style="margin-top: 2.5%; margin-bottom: 2.5%;">
    </center>

    <div class="container">
        <div class="body d-md-flex align-items-center justify-content-between">
            <div class="box-1 mt-md-0 mt-5">
                <img src="https://images.pexels.com/photos/2033997/pexels-photo-2033997.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                    class="" alt="">
            </div>
            <div class=" box-2 d-flex flex-column h-100">
                <div class="mt-5">
                    <p class="mb-1 h-1">Login Account.</p>
                    <p class="text-muted mb-2">Mulai input data cuci kendaraan.</p>
                    <div class="d-flex flex-column ">

                            <form method="post" action="<?= base_url('halmasuk/autentifikasi'); ?>">
                                <!-- login form -->
                                <div class="row mb-8 mt-4">
                                    <div class="col-12">
                                        <p>Username</p>
                                        <input class="form-control" type="text" name="inputan_username" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <p>Password</p>
                                        <input class="form-control" type="password" name="inputan_password" required>
                                    </div>
                                </div>  
                            <button class="btn btn-primary"> <i class="fa fa-sign-in"></i> Masuk </button>
                        </form> 
                    </div>
                </div>
                <div class="mt-auto">
                    <p class="footer text-muted mb-0 mt-md-0 mt-4">By register you agree with our
                        <span class="p-color me-1">terms and conditions</span>and
                        <span class="p-color ms-1">privacy policy</span>
                    </p>
                </div>
            </div>
            <span class="fas fa-times"></span>
        </div>
    </div>
</body>

</html>
