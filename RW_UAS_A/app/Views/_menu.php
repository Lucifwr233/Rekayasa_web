<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");:root{--header-height: 3rem;--nav-width: 68px;--first-color: #4723D9;--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}a{text-decoration: none}.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}.header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}.header_img img{width: 40px}.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}.nav_logo-name{color: var(--white-color);font-weight: 700}.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}.nav_link:hover{color: var(--white-color)}.nav_icon{font-size: 1.25rem}.show{left: 0}.body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}.active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}
</style>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
   
   const showNavbar = (toggleId, navId, bodyId, headerId) =>{
   const toggle = document.getElementById(toggleId),
   nav = document.getElementById(navId),
   bodypd = document.getElementById(bodyId),
   headerpd = document.getElementById(headerId)
   
   // Validate that all variables exist
   if(toggle && nav && bodypd && headerpd){
   toggle.addEventListener('click', ()=>{
   // show navbar
   nav.classList.toggle('show')
   // change icon
   toggle.classList.toggle('bx-x')
   // add padding to body
   bodypd.classList.toggle('body-pd')
   // add padding to header
   headerpd.classList.toggle('body-pd')
   })
   }
   }
   
   showNavbar('header-toggle','nav-bar','body-pd','header')
   
   /*===== LINK ACTIVE =====*/
   const linkColor = document.querySelectorAll('.nav_link')
   
   function colorLink(){
   if(linkColor){
   linkColor.forEach(l=> l.classList.remove('active'))
   this.classList.add('active')
   }
   }
   linkColor.forEach(l=> l.addEventListener('click', colorLink))
   
    // Your code to run since DOM is loaded and ready
   });
</script>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Cuci Kendaraan</span> </a>
                <div class="nav_list"> 
                    <?php if($session->get('hak_akses') == 'Admin'){ ?>
                    <a href="<?= base_url('halberanda') ?>" class="nav_link"> <i class='fa fa-home'></i> <span class="nav_name">Beranda</span> </a> 
                    <a href="<?= base_url('halpelanggan') ?>" class="nav_link"> <i class='fa fa-users'></i> <span class="nav_name">Data Pelanggan</span> </a> 
                    <a href="<?= base_url('halkendaraan') ?>" class="nav_link"> <i class='fa fa-car'></i> <span class="nav_name">Data Kendaraan</span> </a> 
                    <a href="<?= base_url('haltransaksicuci') ?>" class="nav_link"> <i class='fa fa-shopping-cart'></i> <span class="nav_name">Transaksi Cuci</span> </a> 
                    <a href="<?= base_url('haluser') ?>" class="nav_link"> <i class='fa fa-user'></i> <span class="nav_name">Data User</span> </a> 
                    <a href="<?= base_url('hallaporan') ?>" class="nav_link"> <i class='fa fa-list-alt'></i> <span class="nav_name">Laporan</span> </a> 
                    <?php } elseif($session->get('hak_akses') == 'Bukan Admin'){ ?>
                    <a href="<?= base_url('halberanda') ?>" class="nav_link"> <i class='fa fa-home'></i> <span class="nav_name">Beranda</span> </a> 
                    <a href="<?= base_url('haltransaksicuci') ?>" class="nav_link"> <i class='fa fa-shopping-cart'></i> <span class="nav_name">Transaksi Cuci</span> </a>
                    <a href="<?= base_url('hallaporan') ?>" class="nav_link"> <i class='fa fa-list-alt'></i> <span class="nav_name">Laporan</span> </a>  
                    <?php } ?>
                </div>
            </div> <a href="<?= base_url('halmasuk/keluar') ?>" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Keluar</span> </a>
        </nav>
    </div>

<div class="row mb-5">
    <div class="col-12">
        <div class="mb-2" style="font-family: 'poppins'">
            <center><b> - <span class="fa fa-user"></span> Menu Pengguna (<?= $session->get('hak_akses') ?>) - </b></center>
        </div>
        <!-- <div class="card col-12">
            <div class="card-body mx-auto">
                <?php if($session->get('hak_akses') == 'Admin'){ ?>
                    <a href="<?= base_url('halberanda') ?>" class="btn btn-primary btn-sm"><span class="fa fa-home"></span> <br/>Beranda</a>
                    <a href="<?= base_url('halpelanggan') ?>" class="btn btn-danger btn-sm"><span class="fa fa-user"></span> <br/>Data Pelanggan</a>
                    <a href="<?= base_url('halkendaraan') ?>" class="btn btn-danger btn-sm"><span class="fa fa-car"></span> <br/>Data Kendaraan</a>
                    <a href="<?= base_url('haltransaksicuci') ?>" class="btn btn-danger btn-sm"><span class="fa fa-car"></span> <br/>Transaksi Cuci</a>
                    <a href="<?= base_url('haluser') ?>" class="btn btn-danger btn-sm"><span class="fa fa-users"></span> <br/>Data User</a>
                    <a href="<?= base_url('hallaporan') ?>" class="btn btn-primary btn-sm"><span class="fa fa-list-alt"></span> <br/>Laporan</a>
                    <a href="<?= base_url('halmasuk/keluar') ?>" onclick="return confirm('Kamu yakin keluar dari sistem ?')" class="btn btn-primary btn-sm"><span class="fa fa-bookmark"></span> <br/>Keluar</a>

                <?php } elseif($session->get('hak_akses') == 'Bukan Admin'){ ?>
                    <a href="<?= base_url('halberanda') ?>" class="btn btn-primary btn-sm"><span class="fa fa-home"></span> <br/>Beranda</a>
                    <a href="<?= base_url('haltransaksicuci') ?>" class="btn btn-info btn-sm"><span class="fa fa-car"></span> <br/>Transaksi Cuci</a>
                    <a href="<?= base_url('hallaporan') ?>" class="btn btn-success btn-sm"><span class="fa fa-list-alt"></span> <br/>Laporan</a>
                    <a href="<?= base_url('halmasuk/keluar') ?>" onclick="return confirm('Kamu yakin keluar dari sistem ?')" class="btn btn-danger btn-sm"><span class="fa fa-bookmark"></span> <br/>Keluar</a>
                <?php } ?>
            </div>
        </div> -->
    </div>
</div>
