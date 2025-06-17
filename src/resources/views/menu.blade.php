@extends('template')

@section('content')

<section class="shop_section layout_padding">
    <div class="container" style="margin-top: 4pc;">
      <div class="heading_container heading_center pl-3">
        <h1>
          Menu
        </h1>
        <ul class="pl-0 pt-3 mb-0">
            <li class="btn btn-outline-dark kategori mb-2" id="kategori_semua" style="margin: 0 15px 0 0; padding:8px 20px;">Semua</li>
            @foreach ($kategoris as $index => $kategori)
                <li class=" btn btn-outline-dark kategori mb-2" id="kategori_{{ $kategori->id }}" style="margin: 0 15px 0 0; padding:8px 20px;">{{ $kategori->name }}</li>
            @endforeach
        </ul>
      </div>
      <div class="row" id="kategoriIsotope">
        @foreach ($menus as $index => $menu)
          <div class="col-sm-6 col-xl-3 item {{ $menu->kategori->id }}">
            <div class="box">
              <a href="#popupProduk" 
                data-toggle="modal"
                data-name="{{ $menu->name }}"
                data-description="{{ $menu->description }}"
                data-price="{{ 'Rp ' . number_format($menu->price, 0, ',', '.') }}"
                data-image="{{ asset("img/product/$menu->image") }}"
                data-size="{{ $menu->size }}"
                class="open-popup">
                <div class="img-box">
                  <img src="{{ asset("img/product/$menu->image") }}" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    {{ $menu->name }}
                  </h6>
                  <h6>
                    <span>
                      {{ 'Rp ' . number_format($menu->price, 0, ',', '.') }}
                    </span>
                  </h6>
                </div>
              </a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

<!-- Modal -->
<div class="modal fade" id="popupProduk" tabindex="-1" role="dialog" aria-labelledby="popupProdukLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content p-3">
      <button type="button" class="own-close position-absolute" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <!-- <div class="modal-body"> -->
        <!-- Konten popup yang kamu buat -->
        <div class="card mb-0">
          <div class="container-fluid">
            <div class="wrapper row">
              <div class="preview col-md-6">
                <div class="preview-pic tab-content">
                  <img id="modal-image" src="" class="img-fluid" />
                </div>
              </div>
              <div class="details col-md-6 pt-3">
                <h3 class="product-title" id="modal-title"></h3>
                <p class="product-description" id="modal-description"></p>
                <h5 class="price" id="modal-price"></h5>
                <h5 class="sizes">Sizes available:</h5>
                <div id="modal-sizes" class="mb-4"></div>
                <!-- <h5 class="sizes mt-3">Hot & Ice available</h5> -->
                <div class="action">
                  <a class="add-to-cart btn btn-default" type="button" href="https://wa.me/628123456789" target="_blank">
                    <svg class="mr-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                      <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                    </svg>
                    Order Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>

@endsection