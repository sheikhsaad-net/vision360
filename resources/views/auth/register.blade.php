<x-guest-layout>
<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="position-absolute w-40 top-0 start-0 h-100 d-md-block d-none">
                <div class="oblique-image position-absolute d-flex fixed-top ms-auto h-100 z-index-0 bg-cover me-n8" style="background-image:url('{{ url('/assets/img/image-sign-up.jpg') }}">
                  <div class="my-auto text-start max-width-350 ms-7">
                   <h1 class="mt-3 text-white font-weight-bolder">Crea il tuo account Vision360</h1>
                    <p class="text-white text-lg mt-4 mb-4">Registrati per accedere ai video a 360°, gestire il tuo profilo e scoprire contenuti esclusivi.</p>
                    <div class="d-flex align-items-center">
                      <div class="avatar-group d-flex">
                        <a class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-original-title="Jessica Rowland">
                          <img alt="Image placeholder" src="{{ url('/assets/img/team-3.jpg') }}" class="">
                        </a>
                        <a class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-original-title="Audrey Love">
                          <img alt="Image placeholder" src="{{ url('/assets/img/team-4.jpg') }}" class="rounded-circle">
                        </a>
                        <a class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-original-title="Michael Lewis">
                          <img alt="Image placeholder" src="{{ url('/assets/img/marie.jpg') }}" class="rounded-circle">
                        </a>
                        <a class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-original-title="Audrey Love">
                          <img alt="Image placeholder" src="{{ url('/assets/img/team-1.jpg') }}" class="rounded-circle">
                        </a>
                      </div>
                      <p class="font-weight-bold text-white text-sm mb-0 ms-2">Unisciti a oltre 2.5K+ utenti</p>
                    </div>
                  </div>
                  <div class="text-start position-absolute fixed-bottom ms-7">
                    <h6 class="text-white text-sm mb-5">Copyright © 2025 Vision360 Design by Immensive.</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 d-flex flex-column mx-auto">
                <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                <h3 class="font-weight-black text-dark display-6 mb-2">Benvenuto su Vision360</h3>
                <p class="mb-3">Completa il modulo per creare il tuo account e iniziare l'esperienza immersiva.</p>
                </div>
                <x-authentication-card>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <x-label for="name" value="{{ __('Nome') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password_confirmation" value="{{ __('Conferma Password') }}" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-label for="terms">
                                    <div class="flex items-center">
                                        <x-checkbox name="terms" id="terms" required />

                                        <div class="ms-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-label>
                            </div>
                        @endif

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Hai già un account?') }}
                            </a>

                            <x-button class="ms-4">
                                {{ __('Register') }}
                            </x-button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-xs mx-auto">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Hai dimenticato la password?') }}
                        </a>
                    @endif
                  </p>
                </div>
                </x-authentication-card>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</x-guest-layout>