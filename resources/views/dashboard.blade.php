<x-app-layout>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <div class="pt-2 pb-5">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <header class="bg-white shadow mb-4 rounded-lg ">
                <div class="mx-auto py-4 px-5">
                    <h1 class="text-lg font-semibold">Pannello Vision360</h1>
                    <p class="text-sm text-gray-600">Il pannello fornisce accesso controllato ai dati utente e ai video 360 archiviati.</p>
                </div>
            </header>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container-fluid py-4 px-5">
                  <div class="row g-3">
                    <!-- Card 1 -->
                    <div class="col-lg-3 col-md-6">
                      <div class="card shadow-sm border">
                        <div class="position-relative">
                          <img src="{{ url('/assets/img/sample1.jpg') }}" class="card-img-top" alt="Thumbnail">
                          <button class="btn btn-dark btn-sm position-absolute top-50 start-50 translate-middle">
                            <i class="fa fa-play"></i>
                          </button>
                        </div>
                        <div class="card-body">
                          <h6 class="mb-1">Video Title 1</h6>
                          <p class="text-sm text-muted mb-0">Short description</p>
                        </div>
                      </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-lg-3 col-md-6">
                      <div class="card shadow-sm border">
                        <div class="position-relative">
                          <img src="{{ url('/assets/img/sample2.jpg') }}" class="card-img-top" alt="Thumbnail">
                          <button class="btn btn-dark btn-sm position-absolute top-50 start-50 translate-middle">
                            <i class="fa fa-play"></i>
                          </button>
                        </div>
                        <div class="card-body">
                          <h6 class="mb-1">Video Title 2</h6>
                          <p class="text-sm text-muted mb-0">Short description</p>
                        </div>
                      </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-lg-3 col-md-6">
                      <div class="card shadow-sm border">
                        <div class="position-relative">
                          <img src="{{ url('/assets/img/sample3.jpg') }}" class="card-img-top" alt="Thumbnail">
                          <button class="btn btn-dark btn-sm position-absolute top-50 start-50 translate-middle">
                            <i class="fa fa-play"></i>
                          </button>
                        </div>
                        <div class="card-body">
                          <h6 class="mb-1">Video Title 3</h6>
                          <p class="text-sm text-muted mb-0">Short description</p>
                        </div>
                      </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-lg-3 col-md-6">
                      <div class="card shadow-sm border">
                        <div class="position-relative">
                          <img src="{{ url('/assets/img/sample4.jpg') }}" class="card-img-top" alt="Thumbnail">
                          <button class="btn btn-dark btn-sm position-absolute top-50 start-50 translate-middle">
                            <i class="fa fa-play"></i>
                          </button>
                        </div>
                        <div class="card-body">
                          <h6 class="mb-1">Video Title 4</h6>
                          <p class="text-sm text-muted mb-0">Short description</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
  </main>
  </x-app-layout>