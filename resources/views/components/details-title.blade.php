  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">{{ $title ?? 'Title'}}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('inicio') }}">Home</a></li>
            <li class="current">{{ $title ?? 'Title'}}</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="{{ $sectionId ?? 'page-details'}}" class=" {{ $sectionClass ?? 'page-details section'}}"> 
    {{ $slot }}
    </section><!-- /Portfolio Details Section -->

  </main>