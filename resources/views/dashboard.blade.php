<x-app-layout>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <div class="pt-2 pb-5">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <header class="bg-white shadow-lg mb-4 rounded-lg ">
                <div class="mx-auto py-5 px-5">
                    <h1 class="text-lg font-semibold mb-1">Pannello Vision360</h1>
                    <p class="text-sm text-gray-600">Il pannello fornisce accesso controllato ai dati utente e ai video 360 archiviati.</p>
                </div>
            </header>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container-fluid py-5 px-5">
                  
                    @livewire('video')
                      
                </div>
            </div>
        </div>
    </div>
  </main>
  </x-app-layout>