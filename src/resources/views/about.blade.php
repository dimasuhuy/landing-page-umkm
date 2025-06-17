@extends('template')

@section('content')

<section class="py-3 py-md-4" style="margin-top: 3pc;">
      <hr style="border: 2px solid black; margin-right: 50%;"> 
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 col-xl-5 mb-4 mb-lg-0">
            <img class="img-fluid rounded" style="height:350px; object-fit: cover" loading="lazy" src="{{ asset('img/about.jpg') }}" alt="About 1">
          </div>
          <div class="col-12 col-lg-6 col-xl-7">
            <div class="row justify-content-center">
              <div class="col-12 col-xl-11">
                <h2 class="mb-3">Who Are We?</h2>
                <p class="lead text-secondary mb-3">Side House Coffee hadir untuk menghadirkan pengalaman ngopi terbaik, dari suasana hangat hingga racikan rasa yang tak terlupakan.</p>
                <p class="mb-4">Kami bukan sekadar tempat minum kopi. Kami adalah ruang untuk berkoneksi, berinspirasi, dan menikmati waktu. Dengan bahan berkualitas dan pelayanan ramah, kami selalu berinovasi untuk menyajikan yang terbaik bagi pelanggan kami.</p>

                <div class="row">
                  <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <div class="d-flex">
                      <div class="mr-3 text-primary">
                        <!-- Heart Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-hearts" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M4.931.481c1.627-1.671 5.692 1.254 0 5.015-5.692-3.76-1.626-6.686 0-5.015m6.84 1.794c1.084-1.114 3.795.836 0 3.343-3.795-2.507-1.084-4.457 0-3.343M7.84 7.642c2.71-2.786 9.486 2.09 0 8.358-9.487-6.268-2.71-11.144 0-8.358"/>
                        </svg>
                      </div>
                      <div>
                        <h4 class="mb-2">Kopi Halal & Aman</h4>
                        <p class="text-secondary mb-0">Kami menjamin setiap racikan kopi disiapkan dengan bahan halal dan proses yang higienis, aman untuk semua kalangan.</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="d-flex">
                      <div class="mr-3 text-primary">
                        <!-- Fire Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                          <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z"/>
                        </svg>
                      </div>
                      <div>
                        <h4 class="mb-2">Favorit Anak Muda</h4>
                        <p class="text-secondary mb-0">Side House Coffee jadi pilihan hangout generasi muda. Tempat nyaman, wifi kencang, dan minuman kekinian yang selalu update.</p>
                      </div>
                    </div>
                  </div>
                </div> <!-- end row -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <hr style="border: 2px solid black; margin-left: 50%;">

    <div class="container marketing mt-5">
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" style="object-fit:cover" src="{{ asset('img/bos.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h4 class="mt-3">Muhammad Dimas F.R.</h4>
          <p>Owner & Barista</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" style="object-fit:cover" src="{{ asset('img/karyawan2.jpg') }}" alt="Generic placeholder image" width="140" height="140">
          <h4 class="mt-3">Agus Bin Raip</h4>
          <p>Barista 2</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="rounded-circle" style="object-fit:cover" src="{{ asset('img/karyawan.jpeg') }}" alt="Generic placeholder image" width="140" height="140">
          <h4 class="mt-3">Cendana Putri</h4>
          <p>Waiter</p>
          <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
      </div>
    </div>

    <hr style="border: 2px solid black; margin-right: 50%;">

    <div class="container my-5">
      <h1 class="text-center mb-4">Lokasi Kami</h1>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe 
          class="embed-responsive-item" 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3163.0509188727145!2d106.82718401565965!3d-6.175387695532146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e5ab46f12b%3A0x2e2e24b3fd449b5f!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1624898234471!5m2!1sen!2sid" 
          width="100%" 
          height="200" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy">
        </iframe>
      </div>
    </div>

@endsection