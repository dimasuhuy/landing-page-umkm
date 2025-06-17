@extends('template')

@section('content')

    <div class="container px-5 py-2" style="background-color: #A86523; margin-top: 7pc; border-radius: 10px;">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2" style="font-family: fangsong; font-weight: bold;">SIDE HOUSE COFFE</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Di Side House Coffee, setiap cangkir punya cerita. Hadir untuk kamu yang butuh jeda dari hiruk pikuk dunia. Lebih dari sekadar kopi, kami hadir untuk menciptakan suasana hangat di setiap sudut harimu.</p>
                    <!-- <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Get Started</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Learn More</a>
                    </div> -->
                    <a class="btn btn-outline-light btn-lg px-4" href="{{ route('menu') }}">Let's See The Menu</a>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" style="border: 2px black solid; border-radius: 5px;" src="{{ asset('img/bg-coffe.jpg') }}" alt="..."></div>
        </div>
    </div>

    <div class="container" style="margin: 5rem auto;">
        <div class="row justify-content-center">
            <div class="col-12 col-md my-auto mx-3 text-center">
                <h3 class="font-weight-bold" style="color:#022A59; margin-bottom:20px;">Tempat Cari Inspirasi</h3>
                <span style="margin-top:10px; font-size:22px">Baik Anda mencari inspirasi dengan secangkir kopi dengan sedikit cemilan, 
                    atau sekadar ingin menemukan keindahan dalam kehidupan, 
                    nikmati kejutan yang datang dengan setiap seruput kopi. </span>
                <!-- <div>
                    <a href="" class="btn mt-3 px-4 py-2" style="background-color: #022A59; color: #fff; border-color: #022A59; text-decoration: none;">Jelajahi</a>
                </div> -->
            </div>
            <div class="col-12 col-md-6 item-wrapper">
                <img src="{{ asset('img/section1.png') }}" style="height: 100%; border-radius:15px" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container"  style="margin: 5rem auto;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 item-wrapper">
                <img src="{{ asset('img/section2.jpg') }}" style="height: 100%; border-radius:15px" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md my-auto mx-3 text-center">
                <h3 class="font-weight-bold" style="color:#022A59; margin-bottom:20px;">Banyak Promo Menarik</h3>
                <span style="margin-top:10px; font-size:22px">Nikmati berbagai penawaran spesial dari Side House Coffee! Dapatkan diskon hingga 30% untuk pembelian kedua, promo bundling minuman, dan kejutan menarik setiap minggu hanya untuk Anda. </span>
                {{-- <div>
                    <a href="" class="btn mt-3 px-4 py-2" style="background-color: #022A59; color: #fff; border-color: #022A59; text-decoration: none;">Jelajahi</a>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="container my-5">
      <h1 class="text-center mb-4">Lokasi Kami</h1>
      <div>
        <iframe 
          class="embed-responsive-item" 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.0509188727145!2d106.82718401565965!3d-6.175387695532146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e5ab46f12b%3A0x2e2e24b3fd449b5f!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1624898234471!5m2!1sen!2sid" 
          width="100%" 
          height="450" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy">
        </iframe>
      </div>
    </div>
@endsection