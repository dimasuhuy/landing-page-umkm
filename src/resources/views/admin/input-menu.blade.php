<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Side House Coffe</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="{{asset('img/logo-removebg.png')}}" type="image/x-icon">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/admin/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        .btn-ukuran {
            background-color: white;
            color: black;
            border-radius: 5px;
            margin: 0 15px;
            border: 2px solid black;
        }

        .btn-ukuran.active {
            background-color: #022A59;
            color: white;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .user-box input{
            width: 100%;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .modal-title{
            font-size: 25px;
            color: black;
            font-weight: bold;
        }
        .size {
            padding: 5px 10px;
            border: 2px solid;
            text-transform: uppercase;
            font-weight: bold;
            margin: 5px;
        }
    </style>


</head>

<body id="page-top" style="color: black;">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-icon">
                    <img style="width: auto; max-height: 60px; height: auto;" src="{{ asset('img/logo-removebg.png')}}">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('admin.input-menu') }}">
                    <!-- <i class="fas fa-fw fa-cog"></i> -->
                    <i class="bi bi-box-arrow-in-down"></i>
                    <span style="color: white;">Input Menu</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.kategori') }}">
                    <!-- <i class="fas fa-fw fa-cog"></i> -->
                    <i class="bi bi-upload"></i>
                    <span>Input Kategori</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="mr-2 img-profile rounded-circle" src="{{ asset('img/logo.png')}}">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    {{ Auth::guard('admin')->user()->name }}
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item">
                                    <i class="bi bi-box-arrow-right mr-2"></i> Logout
                                </button>
                                </form>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="col mb-4">
                    <div class="mx-5">
                        <br>
                        <h1 class="text-center">Upload Menu</h1>
                        <form class="mt-4" action="{{ route('admin.input-menu.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                            <div class="form-group mt-3">
                                <label for="exampleInputName">Nama Menu</label>
                                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Tambahkan nama untuk menu" required="required" style="background-color: #F2F2F2; color: black; border-radius: 10px">
                            </div>
                            <div class="form-group mt-3">
                                <label for="exampleInputName">Harga Menu</label>
                                <input type="number" name="price" class="form-control" id="exampleInputName" placeholder="Berikan harga menu" required="required" style="background-color: #F2F2F2; color: black; border-radius: 10px">
                            </div>
                            <div class="form-group preview" style="display: none; background-color: #F2F2F2; border-radius: 10px">
                                <label for="upload" style="position: absolute; right: 10px;">
                                    <div style="background-color: white;padding: 10px;border-radius: 100%">
                                        <i class="fa-regular fa-pen-to-square fa-xl"></i>
                                    </div>
                                </label>
                                <img id="preview" src="#" alt="Preview" style="max-width: 100%; max-height: 100%; display: none;">
                            </div>
                            <div class="form-group input-img" style="background-color: #F2F2F2; height: 250px; display: flex; justify-content: center; flex-direction: column; align-items: center; border-radius: 10px">
                                <div class="mb-2">
                                    <i class="fa-solid fa-arrow-up-from-bracket fa-xl"></i>
                                </div>
                                <h6>Unggah foto menu disini</h6>
                                <label for="upload" style="cursor: pointer; background-color: red;">
                                    <input type="file" id="upload" name="image" accept="image/*" style="display: none; " onchange="previewImage(event)" required>
                                    <div class="btn" style="background-color: #022A59; color: white;">Unggah Foto</div>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi_foto">Deskripsi Menu</label>
                                <textarea placeholder="Tulis deskripsimu disini" name="description" class="form-control" id="deskripsi_foto" style="background-color: #F2F2F2; border-radius: 10px" required></textarea>
                            </div>
                            <div class="form-group" style="width: 80%">
                                <label for="size">Ukuran yang tersedia</label>
                                <div class="row">
                                    <input type="hidden" id="size" name="size" required>
                                    <button type="button" class="btn btn-ukuran" data-value="L">L</button>
                                    <button type="button" class="btn btn-ukuran" data-value="M">M</button>
                                    <button type="button" class="btn btn-ukuran" data-value="S">S</button>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label for="exampleFormControlSelect1">Kategori</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="category_id" required style="background-color: #F2F2F2; border-radius: 10px; width: 25%;">
                                        @foreach ($kategoris as $index)
                                        <option value='{{ $index['id'] }}'>{{ $index['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <button type="submit"  class="btn" style="background-color: #022A59; color:#ffff; width: 100%">Kirim</button>
                        </form>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
     
    <!-- Footer -->
    <div class="container" style="background-color:rgb(0, 0, 0); max-width:none;">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2021 SIDE HOUSE COFFE, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <img src="{{ asset("img/logo-removebg.png") }}" class="bi me-2" width="40" height="32">
            </a>

            <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="{{ route('index') }}" class="nav-link px-2 text-muted">Home</a></li>
            <!-- <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li> -->
            <li class="nav-item"><a href="{{ route('menu') }}" class="nav-link px-2 text-muted">Menu</a></li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link px-2 text-muted">About</a></li>
            <li class="nav-item"><a href="https://wa.me/628123456789" target="_blank" class="nav-link px-2 text-muted">Contact</a></li>
            </ul>
        </footer>
    </div>
    <!-- End of Footer -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
<script>
    // function setMember(params) {
    //     console.log(params)
    //     $('#membership').val(params)
    //     $('#gratis, #member').removeAttr('style')
    //     if (params == 0) {
    //         $('#gratis').css({'background-color': '#022A59', 'color': '#ffff', 'margin': '0 15px'});
    //     } else {
    //         $('#gratis').css({'background-color': 'white', 'color': 'black', 'border-radius': '5px', 'margin': '0 15px', 'border-color': 'black', 'border-width': '2px'});
    //     }

    //     if (params == 1) {
    //         $('#member').css({'background-color': '#022A59', 'color': '#ffff'});
    //     } else {
    //         $('#member').css({'background-color': 'white', 'color': 'black', 'border-radius': '5px', 'border-color': 'black', 'border-width': '2px'});
    //     }

    // }

    function previewImage(event) {
        $('.input-img').hide()
        $('.preview').show()
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.style.display = 'block';
            preview.style.margin = 'auto';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<script>
  $(document).ready(function() {
    $('.btn-ukuran').click(function() {
      $(this).toggleClass('active');

      // Ambil semua tombol yang sedang aktif
      let selected = [];
      $('.btn-ukuran.active').each(function() {
        selected.push($(this).data('value'));
      });

      // Update input hidden dengan nilai yang dipilih, pisahkan dengan koma
      $('#size').val(selected.join(','));
    });
  });
</script>


</body>

</html>