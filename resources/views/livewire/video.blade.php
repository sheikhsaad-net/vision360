<div class="row g-3">

    @foreach($videos as $video)
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-lg border">
                <div class="position-relative">
                    <img src="{{ asset('assets/img/default-thumb.png') }}" 
                        class="card-img-top" alt="Thumbnail" 
                        style="cursor:pointer;"
                        wire:click="openVideo({{ $video->id }})">
                </div>
                <div class="card-body">
                    <h6 class="mb-1">{{ $video->title }}</h6>
                    <p class="text-sm text-muted mb-2">{{ $video->description }}</p>
                </div>
            </div>
        </div>
    @endforeach

    @if($videoModal)
        <div class="modal fade show d-block m-0 p-0" tabindex="-1" aria-modal="true" role="dialog" style="background: rgba(0,0,0,0.7);">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content bg-dark">
                    <div class="modal-body p-0 d-flex justify-content-center align-items-center">

                        <!-- Close button with location -->
                        <div class="position-fixed start-1 bottom-2 d-flex align-items-center" style="z-index:1055;">
                            <button type="button" 
                                    class="d-flex justify-content-center align-items-center bg-white py-2 px-3" style="border-radius:50%;"
                                    wire:click="closeVideo">
                                <span class="fs-5">&times;</span>
                            </button>
                            @if($selectedLocation)
                                <span class="mx-3 text-lg border-radius-lg py-2 px-4 bg-white">{{ $selectedLocation }}</span>
                            @endif
                        </div>

                        @if($selectedVideoUrl)
                            <iframe width="100%" height="100%" 
                                    src="{{ $selectedVideoUrl }}?controls=0&autoplay=1&rel=0&modestbranding=1&showinfo=0&fs=1&iv_load_policy=3&disablekb=1"
                                    title="Video Player" frameborder="0"
                                    allow="autoplay; fullscreen" allowfullscreen>
                            </iframe>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    @endif

</div>