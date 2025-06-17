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
        .btn-ukuran {
            padding: 5px 10px;
            background-color: white;
            border-radius: 5px;
            margin: 0 15px;
            border: 2px solid black;
            text-transform: uppercase;
            font-weight: bold;
            margin: 5px;
        }

        .btn-ukuran-update {
            background-color: white;
            color: black;
            border-radius: 5px;
            margin: 0 15px;
            border: 2px solid black;
        }

        .btn-ukuran-update.active {
            background-color: #022A59;
            color: white;
        }

        .card-header{
            display: flex;
            padding: 5px 0 5px 0px;
            justify-content: space-between;
            align-items: center;
            margin-bottom:10px;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
                <div class="sidebar-brand-icon">
                    <img style="width: auto; max-height: 60px; height: auto;" src="{{ asset('img/logo-removebg.png') }}">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.input-menu') }}">
                    <!-- <i class="fas fa-fw fa-cog"></i> -->
                    <i class="bi bi-box-arrow-in-down"></i>
                    <span>Input Menu</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
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

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


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
                <div class="container-fluid">

                    <div class="col-lg-12 p-0">

                        <!-- Tabel Data -->
                        <div class="card-header">
                            <h3 style="color: black; font-weight:700">Data Kategori</h3>
                            <i class="las la-plus"></i>
                            <button type="button" data-id="" class="btn btn-primary" data-toggle="modal" data-target="#tambah"><span>Tambah Kategori</span></button>
                        </div>
                        <table border="1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width:100px;text-align: center;">No</th>
                                    <th style="text-align: center;">Nama Kategori</th>
                                    <th style="width: 300px; text-align: center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($kategoris as $index => $kategori)
                                <tr>
                                    <td style="text-align: center;">{{ $index + 1 }}</td>
                                    <td>{{ $kategori->name }}</td>
                                    <td class="d-flex" style="justify-content: space-around;">
                                        <form action="{{ route('admin.kategori.hapus', $kategori->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                        <button type="button" data-id="{{ $kategori->id }}" class="btn btn-primary" data-toggle="modal" data-target="#updateKategori{{ $kategori->id }}">Update</button>
                                    </td>   
                                </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>

                    </div>
                    <!-- Modal Update -->
                    <div class="modal fade" id="updateKategori{{ $kategori->id }}" tabindex="-1" role="dialog" aria-labelledby="tambahTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Update Kategori</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="{{ route('admin.kategori.update', $kategori->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <div class="user-box">
                                <label style="color: black; font-size: larger; font-weight: bold;">Ganti Kategori:</label>
                                <input type="text" class="p-2" value="{{ $kategori->name }}" placeholder="Tambahkan nama kategori" name="name" >
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal tambah -->
                    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Tambahkan Kategori</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="POST" action="{{ route('admin.kategori.store') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="user-box">
                                <label style="color: black; font-size: larger; font-weight: bold;">Nama Kategori:</label>
                                <input type="text" class="p-2" placeholder="Tambahkan nama kategori" name="name" >
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>

                </div>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $('#userDropdown').on('click', function (e) {
    e.preventDefault();
    $(this).dropdown('toggle');
  });
</script>


<script>
    $('#update').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Tombol yang diklik
        var id = button.data('id'); // Ambil ID dari data-id

        var modal = $(this);
        modal.find('#update-id').val(id); // Isi input hidden dengan ID
    });
    $('#tambah').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Tombol yang diklik
        var id = button.data('id'); // Ambil ID dari data-id

        var modal = $(this);
        modal.find('#update-id').val(id); // Isi input hidden dengan ID
    });
</script>

<script>
  $(document).ready(function() {
    $('.btn-ukuran-update').click(function() {
      $(this).toggleClass('active');

      // Ambil semua tombol yang sedang aktif
      let selected = [];
      $('.btn-ukuran-update.active').each(function() {
        selected.push($(this).data('value'));
      });

      // Update input hidden dengan nilai yang dipilih, pisahkan dengan koma
      $('#size-available').val(selected.join(','));
    });
  });
</script>
</body>

</html>