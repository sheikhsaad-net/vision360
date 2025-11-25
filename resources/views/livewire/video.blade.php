<div class="row g-3">
    @foreach($videos as $video)
        <div class="col-lg-3 col-md-6">
            <div class="card shadow-lg border">
                <div class="position-relative">
                    <img src="{{ asset('assets/img/default-thumb.png') }}" 
                         class="card-img-top" alt="Thumbnail" 
                         style="cursor:pointer;"
                         wire:click="openVideo('{{ $video->video_url }}')">
                </div>
                <div class="card-body">
                    <h6 class="mb-1">{{ $video->title }}</h6>
                    <p class="text-sm text-muted mb-2">{{ $video->description }}</p>
                    <p class="text-sm text-muted mb-0"><strong>Location:</strong> {{ $video->location }}</p>
                </div>
            </div>
        </div>
    @endforeach


<!-- Fullscreen Modal -->
@if($videoModal)
<div class="modal fade show d-block m-0 p-0" tabindex="-1" aria-modal="true" role="dialog" style="background: rgba(0,0,0,0.7);">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content bg-dark">
            <div class="modal-body p-0 d-flex justify-content-center align-items-center">
                <button type="button" class="btn-close btn-close-white" wire:click="closeVideo"></button>
                @if($selectedVideoUrl)
                    <iframe width="100%" height="100%" 
                            src="{{ $selectedVideoUrl }}" 
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