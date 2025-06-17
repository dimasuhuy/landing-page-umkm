<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side House Coffe</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/style_product.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style_detail_product.css") }}">
    <link rel="shortcut icon" href="{{asset('img/logo-removebg.png')}}" type="image/x-icon">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" style="background-color: #B9B28A;" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ route('index') }}" style="font-family: fangsong; font-weight: bold;">
                    <!-- <img style="max-width: 100px;" src="logo-removebg.png" alt=""> -->
                     SIDE HOUSE COFFE
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto ms-auto my-2 my-lg-0" style="font-weight: 700;">
                        <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                        <li class="nav-item {{ request()->is('menu') ? 'active' : '' }}"><a class="nav-link" href="{{ route('menu') }}">Menu</a></li>
                        <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://wa.me/628123456789" target="_blank">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

@yield('content')

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

    <style>
      .marketing .col-lg-4{
        margin-bottom: 1.5rem;
        text-align: center;
      }
      .active{
        color:black;
      }
    </style>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JS jika dibutuhkan -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(document).on('click', '.open-popup', function () {
        const name = $(this).data('name');
        const description = $(this).data('description');
        const price = $(this).data('price');
        const image = $(this).data('image');
        const size = $(this).data('size');

        $('#modal-title').text(name);
        $('#modal-description').text(description);
        $('#modal-price').text(price);
        $('#modal-image').attr('src', image);

        // Isi ukuran jika ada
        let sizeHtml = '';
        if (size) {
        size.split(',').forEach(function (ukuran) {
            sizeHtml += `<span class="size">${ukuran}</span> `;
        });
        } else {
        sizeHtml = '<small class="text-muted">Tidak ada ukuran</small>';
        }

        $('#modal-sizes').html(sizeHtml);
    });

    
    // Menangani klik pada setiap item navigasi
    $('.navbar-nav .nav-item').each(function() {
        // Mendapatkan URL yang terkait dengan item navigasi
        var navItemUrl = $(this).find('a').attr('href');

        // Memeriksa apakah path URL saat ini cocok dengan URL item navigasi
        if (currentPath === navItemUrl) {
            // Tambahkan kelas 'active' pada item navigasi yang sesuai
            $(this).addClass('active');
        }
    });
    </script>
    <script>
        $(document).ready(function(){
            // Click handler for Kategori
            $('.kategori').click(function() {
                $('.kategori').removeClass('active'); // Hapus kelas active dari semua elemen kategori
                $(this).addClass('active'); // Tambahkan kelas active ke kategori yang diklik

                var kategoriId = $(this).attr('id').split('_')[1]; // Ambil ID unik dari kategori
                $('.item').hide(); // Sembunyikan semua item

                if (kategoriId === 'semua') {
                    $('.item').show(); // Tampilkan semua item jika "Semua" dipilih
                } else {
                    $('.item.' + kategoriId).show(); // Tampilkan item dengan kategori yang dipilih
                }
            });

        $('.item').click(function(e) {
            e.preventDefault(); // Mencegah reload dari <a href="">
            $('#popupProduk').modal('show'); // Tampilkan modal
            });
        });
    </script>

</body>
</html>