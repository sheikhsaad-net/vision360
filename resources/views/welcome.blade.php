<x-guest-layout>
<main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="position-absolute w-40 top-0 start-0 h-100 d-md-block d-none">
                <div class="oblique-image position-absolute d-flex fixed-top ms-auto h-100 z-index-0 bg-cover me-n8" style="background-image:url('{{ url('/assets/img/image-sign-up.jpg') }}')">
                  <div class="my-auto text-start max-width-350 ms-7">
                    <h1 class="mt-3 text-white font-weight-bolder">Esplora il mondo a 360°</h1>
                    <p class="text-white text-lg mt-4 mb-4">Accedi per guardare video immersivi, esplorare contenuti esclusivi e gestire il tuo profilo Vision360.</p>
                    <div class="d-flex align-items-center">
                      <div class="avatar-group d-flex">
                        <a class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-original-title="User 1">
                          <img alt="User" src="{{ url('/assets/img/team-3.jpg') }}" class="">
                        </a>
                        <a class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-original-title="User 2">
                          <img alt="User" src="{{ url('/assets/img/team-4.jpg') }}" class="rounded-circle">
                        </a>
                        <a class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-original-title="User 3">
                          <img alt="User" src="{{ url('/assets/img/marie.jpg') }}" class="rounded-circle">
                        </a>
                        <a class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-original-title="User 4">
                          <img alt="User" src="{{ url('/assets/img/team-1.jpg') }}" class="rounded-circle">
                        </a>
                      </div>
                      <p class="font-weight-bold text-white text-sm mb-0 ms-2">Unisciti a oltre 2.5K+ utenti</p>
                    </div>
                  </div>
                  <div class="text-start position-absolute fixed-bottom ms-7">
                    <h6 class="text-white text-sm mb-5">Copyright © 2025 Vision360</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex flex-column mx-auto">
                <div class="card card-plain mt-8">
                  <div class="card-header pb-0 text-left bg-transparent">
                    <h3 class="font-weight-black text-dark display-6 mb-2">Benvenuto su Vision360</h3>
                    <p class="mb-3">Accedi con il tuo account per esplorare i video 360° disponibili.</p>
                  </div>
                  <div class="card-body">
                      <form method="POST" action="{{ route('login') }}">
                          @csrf
                          <div class="mb-3">
                              <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                          </div>
                          <div class="mb-3">
                              <input type="password" name="password" class="form-control" placeholder="Password" required>
                          </div>
                          <div class="text-center">
                              <button type="submit" class="btn btn-primary w-100">Accedi</button>
                          </div>
                      </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</main>
</x-guest-layout>