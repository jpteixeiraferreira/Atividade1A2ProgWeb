            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $type ?? 'app'}}">
              <div class="portfolio-content h-100">
                <img src="{{  asset('assets/img/portfolio/'.($cardImg ?? 'app-1').'.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{  $cardTitle ?? 'App 1' }}</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{  asset('assets/img/portfolio/'.($cardImg ?? 'app-1').'.jpg') }}" title= {{ $cardTitle ?? "App 1"}} data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="{{ route('portfolio-details') }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>