<!DOCTYPE html>
<html lang="em">
@include('template/headtag', ['title' => 'Drop Shop'])
<body>
@include('template/navbar')


  <!-- PRODUCTS Heading-->
<div class="container-fluid text-center">

<div class="dsbanner text-center">
  <img src="{{ url('img/productsbanner.jpg') }}" id="ds-banner" class="img-fluid">
</div>
</div>


<section>

  <div class="container-fluid justify-content-center" id="container">

    <!-- PRODUCTS NAV BAR -->
    <nav class="navbar navbar-expand-sm sticky-top" role="navigation" id="products-navbar">

       <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#products-bar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="products-bar">
            <ul class="navbar-nav" id="navbarItems-tab">
                  <li class="nav-item ml-auto dropdown">
                    <a class="nav-link dropdown-toggle mr-auto" href="#" id="athleteDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ATHLETES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="athleteDrop">
                      <a class="dropdown-item mx-auto" href="{{ route('products', ['collab_name' => 'kobe-bryant']) }}">KOBE BRYANT</a>
                      <a class="dropdown-item mx-auto" href="{{ route('products', ['collab_name' => 'ray-allen']) }}">RAY ALLEN
                      </a>
                    </div>
                  </li>
                  <li class="nav-item ml-auto dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="celebDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CELEBRITIES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="celebDrop">
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'travis-scott']) }}">TRAVIS SCOTT
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'asap-rocky']) }}">A$AP ROCKY
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'yeezy']) }}">YEEZY
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'rihanna']) }}">RIHANNA
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'pharrell']) }}">PHARRELL
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'drake']) }}">DRAKE
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'kendrick-lamar']) }}">KENDRICK LAMAR
                      </a>
                    </div>
                  </li>
                  <li class="nav-item ml-auto dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="designDrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DESIGNERS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="designDrop">
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'alexander-wang']) }}">ALEXANDER WANG
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'just-don']) }}">JUST DON
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'fear-of-god']) }}">FEAR OF GOD</a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'off-white']) }}">OFF-WHITE
                      </a>
                      <a class="dropdown-item" href="{{ route('products', ['collab_name' => 'supreme']) }}">SUPREME
                      </a>
                    </div>
                  </li>
            </ul>
      </div>
    </nav>

    <!-- FIRST INSTANCE OF SHOE -->
    <div class="row text-center" id="products1">
      @foreach ($shoes as $shoe)
      <div class="col-md-4 d-flex justify-content-center">
        <figure class="figure">
        <img src="{{ url($shoe->img_file_path) }}" class="img-fluid" style="width: 275px; height: 200px;" data-toggle="modal" data-target="#{{str_replace('.', '', $shoe->modal_name)}}" id="size">
        <figcaption style="text-decoration: underline; font-size: 17px;" data-toggle="modal" data-target="#{{str_replace('.', '', $shoe->modal_name)}}">
          {{$shoe->product_name}}
        </figcaption>
        <figcaption class="figure-caption text-center p-3">
          <button type="button" id="cmpBtn" class="btn btn-light" data-toggle="modal" data-target="#{{str_replace('.', '', $shoe->modal_name)}}">
          COMPARE PRICES
          </button>
        </figcaption>
        </figure>
      </div>
      @endforeach
    </div>
  </div>


</section>
  @foreach ($shoes as $shoe)
  <div class="modal" id="{{str_replace('.', '', $shoe->modal_name)}}">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">

              <!-- MODAL HEADER -->
      <div class="modal-header">
        <h3 class="modal-title text-center" id="modPriceHead">Lowest Prices Available:</h3>
        <h3 class="modal-title text-center" id="modProdDesc">Product Description:</h3>
        <button id="XModal" type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

              <!-- MODAL BODY -->
      <div class="modal-body">
        <div class="container" id="modalPrices">
          <div class="row">
            <div class="col">
              <h3 class="p-3 text-center">FlightClub Prices Starting At:</h3>
              <a href="{{ $shoe->scraper_links->fc_url ?? "products"  }}" target="_blank">
              <h4 class="text-center">&dollar;{{$shoe->lowest_fc_price}}</h4>
              </a>
              <h3 class="p-3 text-center">Goat Prices Starting At:</h3>
              <a href="{{ $shoe->scraper_links->goat_url ?? "products"  }}" target="_blank">
              <h4 class="text-center">&dollar;{{$shoe->lowest_goat_price}}</h4>
              </a>
              <h3 class="p-3 text-center">Kixify Prices Starting At:</h3>
              <a href="{{ $shoe->scraper_links->kixify_url ?? "products"  }}" target="_blank">
              <h4 class="text-center">&dollar;{{$shoe->lowest_kix_price}}</h4>
              </a>
            </div>
            <div class="col" id="modalDesc">
              <h3 class="p-3 text-center" id="prodDesc">
                {{$shoe->product_description}}
              </h3>
            </div>
          </div>
        </div>
      </div>

      <!-- MODAL FOOTER -->
      <div class="modal-footer">
        <button id="closeModal" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach

@include('template/footer')

</body>
</html>