<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shopee</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            .bg-orange {
                background-color: #FE5621 !important;
            }
            .search {
                width:700px;
                height:30px;
                margin-top: 15px;
                margin-right: 16px;
            }
            
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <header>
        <div class="container-fluid">
            <div class="progress col-xl bg-orange">
                <div class="progress-bar bg-orange" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">K??nh ng?????i b??n</div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Tr??? th??nh Ng?????i b??n Shopee</div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">T???i ???ng d???ng</div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100">K???t n???i </div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 3%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"><i class="bi bi-facebook"></i></div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 3%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"><i class="bi bi-instagram"></i></div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"><span class="bi bi-bell"></span></div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">Th??ng b??o</div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"><i class="bi bi-question-circle"></i></div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">H??? tr???</div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"><i class="bi bi-globe"></i></div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">Ti???ng Vi???t</div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">????ng k??</div>
                <div class="progress-bar bg-orange" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">????ng nh???p</div> 
            </div>
        </div>
          <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 bg-orange">
                    <img src="img/shopee.jpg" alt="" style= "width: 50%;">
                </div>
                <div class="col-xl-8 bg-orange topnav">
                    <form action="">
                        <input class= "search" type="text" placeholder="????ng k?? v?? nh???n voucher">
                        <button class="btn bg-orange my-2 my-sm-0 " type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <div class="progress 2 bg-orange">
                        <div class="progress-bar bg-orange" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">??o Kho??c</div>
                        <div class="progress-bar bg-orange" role="progressbar" style="width: 6%;" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100">D??p</div>
                        <div class="progress-bar bg-orange" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">T??i X??ch N???</div>
                        <div class="progress-bar bg-orange" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">??o Croptop</div>
                        <div class="progress-bar bg-orange" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">???p IPhone</div>
                        <div class="progress-bar bg-orange" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100">V??y</div>
                        <div class="progress-bar bg-orange" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Tai Nghe Bluetooth</div>
                        <div class="progress-bar bg-orange" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">B??nh tr??ng ph??i s????ng</div>
                    </div>
                </div>
                <div class="col-xl-2 bg-orange">
                    <i class="bi bi-cart2 bg-orange" style="font-size: 3rem;"></i>
                </div>
            </div>
        </div>
    </header>
    

    <div class="container-fluid">
        <div class="row mt-3">
            <a class=" text-black font-weight" style=" font-size: 1.5rem; ">Danh m???c</a>
        </div> <!-- space -->
        <div class="row">
            <div class="col-xl-1">
            </div><!-- card -->
            <div class=" card col-xl-1">
                <img src="img/??o_1.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center " style="font-size: 0.8rem;">Th???i trang Nam</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/dt.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">??i???n tho???i & ph??? ki???n</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/thi???t b???.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">thi???t b??? ??i???n t???</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/laptop.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">M??y t??nh & Laptop</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/m??y ???nh.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">M??y ???nh & m??y xem phim</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/?????ng h???.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">?????ng h???</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/gi??y nam.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">Gi??y d??p nam</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/??i???n gia d???ng.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">Thi???t b??? ??i???n gia d???ng</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/th??? thao.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;" >Th??? thao & du l???ch</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                    <img src="img/xe.png" alt="card-img-top" style="width: 100%;">
                    <div class="card-body">
                        <p class="card-text text-sm-center" style="font-size: 0.8rem;">?? t?? & Xe m??y & Xe ?????p</p>
                    </div>
                </div><!-- card -->
            <div class="col-xl-1">
            </div><!-- card -->
        </div><!--end row-->

        <div class="row">
            <div class="col-xl-1">
            </div><!-- card -->
                <div class="card col-xl-1">
                    <img src="img/??o n???.png" alt="card-img-top" style="width: 100%;">
                    <div class="card-body">
                        <p class="card-text text-sm-center" style="font-size: 0.8rem;">Th???i trang n???</p>
                    </div>
                </div><!-- card -->
                <div class="card col-xl-1">
                    <img src="img/b??.png" alt="card-img-top" style="width: 100%;">
                    <div class="card-body">
                        <p class="card-text text-sm-center" style="font-size: 0.8rem;">M??? & B??</p>
                    </div>
                </div><!-- card -->
                <div class="card col-xl-1">
                    <img src="img/nh?? c???a.png" alt="card-img-top" style="width: 100%;">
                    <div class="card-body">
                        <p class="card-text text-sm-center" style="font-size: 0.8rem;">Nh?? c???a & ?????i s???ng</p>
                    </div>
                </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/s???c ??ep.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">S???c ?????p</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/s???c kh???e.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">S???c Kh???e</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/gi??y n???.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">Gi??y d??p n???</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/t??i n???.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">T??i v?? n???</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/ph??? ki???n.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">Ph??? ki???n & Trang s???c</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/b??ch h??a.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">B??ch h??a online</p>
                </div>
            </div><!-- card -->
            <div class="card col-xl-1">
                <img src="img/nh?? s??ch.png" alt="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text text-sm-center" style="font-size: 0.8rem;">Nh?? s??ch online</p>
                </div>
            </div><!-- card -->
            <div class="col-xl-1">
            </div><!-- card -->
        </div><!--end row-->
    </div><!--end container-->
    </body>
</html>
