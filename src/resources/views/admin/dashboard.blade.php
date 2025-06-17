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
            width: 50px;
            text-align: center;
        }

        .btn-ukuran-update.active {
            background-color: #022A59;
            color: white;
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
            <li class="nav-item active">
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

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

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

                <div class="row">
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body p-4">
                                <div class="row no-gutters align-items-center" style="color: black;">
                                    <div class="mr-3">
                                        <i class="bi bi-cup-hot" style="font-size: xx-large;"></i>
                                    </div>
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            Coffee</div>
                                        <div class="h5 mb-0 font-weight-bold">
                                            10
                                            <!-- <span>&#8451;</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body p-4">
                                <div class="row no-gutters align-items-center" style="color: black;">
                                    <div class="mr-3">
                                        <i class="bi bi-cup-straw" style="font-size: xx-large;"></i>
                                    </div>
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            Light</div>
                                        <div class="h5 mb-0 font-weight-bold">
                                        100
                                            <!-- <span>&#8451;</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-food shadow h-100 py-2">
                            <div class="card-body p-4">
                                <div class="row no-gutters align-items-center" style="color: black;">
                                    <div class="mr-3">
                                        <i class="bi bi-fork-knife" style="font-size: xx-large;"></i>
                                    </div>
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            Food</div>
                                        <div class="h5 mb-0 font-weight-bold">
                                        100
                                            <!-- <span>&#8451;</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-snack shadow h-100 py-2">
                            <div class="card-body p-4">
                                <div class="row no-gutters align-items-center" style="color: black;">
                                    <div class="mr-3">
                                        <i class="bi bi-thunderbolt-fill" style="font-size: xx-large;"></i>
                                    </div>
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-uppercase mb-1">
                                            Snack</div>
                                        <div class="h5 mb-0 font-weight-bold">
                                        100
                                            <!-- <span>&#8451;</span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-lg-12 p-0">

                        <!-- Tabel Data -->
                        <table border="1" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width:35px">No</th>
                                    <th style="width:110px">Nama</th>
                                    <th style="width:155px">Gambar</th>
                                    <th style="width:110px">Kategori</th>
                                    <th style="width:170px">Deskripsi</th>
                                    <th style="width: 70px;">Ukuran</th>
                                    <th>Harga</th>
                                    <th style="width: 180px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($menus as $index => $menu)
                                <tr>
                                    <td style="text-align:center">{{ $index + 1 }}</td>
                                    <td>{{ $menu->name }}</td>
                                    <td><img src="{{ asset("img/product/$menu->image") }}" style="object-fit:cover; width:150px" alt=""></td> 
                                    <td>{{ $menu->kategori->name ?? '-' }}</td>
                                    <td>
                                        <span class="short-text">
                                            {{ \Illuminate\Support\Str::limit($menu->description, 60) }}
                                        </span>
                                        <span class="full-text d-none">
                                            {{ $menu->description }}
                                        </span>
                                        @if(strlen($menu->description) > 60)
                                            <a href="javascript:void(0);" class="toggle-desc text-primary" style="margin-left: 5px;">Selengkapnya</a>
                                        @endif
                                    </td>
                                    <td style="display: flex; flex-direction: column; gap: 10px;">
                                    @isset($menu->size)
                                        @foreach(explode(',', $menu->size) as $ukuran)
                                            <span class="btn btn-ukuran mx-1">{{ $ukuran }}</span>
                                        @endforeach
                                    @endisset
                                    </td>
                                    <td>{{ 'Rp ' . number_format($menu->price, 0, ',', '.') }}</td>
                                    <td class="d-flex" style="justify-content: space-around;">
                                        <form method="post" action="{{ route('admin.dashboard.hapus-menu',$menu->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                        <button type="button" data-id="{{ $menu->id }}" class="btn btn-primary" data-toggle="modal" data-target="#updateMenu{{ $menu->id }}">Update</button>
                                    </td>   
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="updateMenu{{ $menu->id }}" tabindex="-1" role="dialog" aria-labelledby="tambahTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Update Menu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <form method="POST" action="{{ route('admin.dashboard.update-menu', $menu->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-body">
                                            <div class="user-box mb-2">
                                                <label>Nama</label>
                                                <input type="text" class="p-2 form-control" name="name" value="{{ $menu->name }}" required>
                                            </div>

                                            <div class="user-box mb-2">
                                                <label>Gambar (biarkan kosong jika tidak diubah)</label>
                                                <input type="file" class="form-control-file" name="image">
                                            </div>

                                            <div class="user-box mb-2">
                                                <label>Deskripsi</label>
                                                <textarea class="form-control" name="description" required>{{ $menu->description }}</textarea>
                                            </div>

                                            <div class="user-box mb-3">
                                                <label>Ukuran Tersedia</label>
                                                <div class="p-2 border d-flex justify-content-between" style="border-radius: 5px;">
                                                <input type="hidden" id="size-available-{{ $menu->id }}" name="size" value="{{ $menu->size }}">
                                                @foreach (['L','M','S'] as $ukuran)
                                                    <button type="button" class="btn btn-ukuran-update {{ in_array($ukuran, explode(',', $menu->size)) ? 'active' : '' }}" data-value="{{ $ukuran }}">{{ $ukuran }}</button>
                                                @endforeach
                                                </div>
                                            </div>

                                            <div class="user-box mb-2">
                                                <label>Harga</label>
                                                <input type="number" class="form-control" name="price" value="{{ $menu->price }}" required>
                                            </div>

                                            <div class="user-box mb-2">
                                                <label>Kategori</label>
                                                <select name="category_id" class="form-control" required>
                                                @foreach($kategoris as $kategori)
                                                    <option value="{{ $kategori->id }}" {{ $menu->category_id == $kategori->id ? 'selected' : '' }}>
                                                    {{ $kategori->name }}
                                                    </option>
                                                @endforeach
                                                </select>
                                            </div>
                                            </div>

                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $('#exampleModalCenter').on('show.bs.modal', function (event) {
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
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleLinks = document.querySelectorAll(".toggle-desc");

        toggleLinks.forEach(function (link) {
        link.addEventListener("click", function () {
            const td = link.closest("td");
            const shortText = td.querySelector(".short-text");
            const fullText = td.querySelector(".full-text");

            if (fullText.classList.contains("d-none")) {
            fullText.classList.remove("d-none");
            shortText.classList.add("d-none");
            link.textContent = "Sembunyikan";
            } else {
            fullText.classList.add("d-none");
            shortText.classList.remove("d-none");
            link.textContent = "Selengkapnya";
            }
        });
        });
    });
    </script>
    <script>
        $(document).on('click', '.btn-ukuran-update', function () {
            const container = $(this).closest('.user-box');
            const hiddenInput = container.find('input[type="hidden"]');
            $(this).toggleClass('active');

            let selected = [];
            container.find('.btn-ukuran-update.active').each(function () {
            selected.push($(this).data('value'));
            });

            hiddenInput.val(selected.join(','));
        });
    </script>
</body>

</html>