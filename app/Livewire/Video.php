<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Video as VideoModel;

class Video extends Component
{
    public $videos;
    public $selectedVideoUrl = null;
    public $selectedLocation = null;
    public $videoModal = false;

    public function mount()
    {
        $this->videos = VideoModel::all();
    }

    // Accept ID instead of URL
    public function openVideo($videoId)
    {
        $video = VideoModel::find($videoId);
        if ($video) {
            $this->selectedVideoUrl = $video->file_path;
            $this->selectedLocation = $video->location;
            $this->videoModal = true;
        }
    }

    public function closeVideo()
    {
        $this->selectedVideoUrl = null;
        $this->selectedLocation = null;
        $this->videoModal = false;
    }

    public function render()
    {
        return view('livewire.video', [
            'videos' => $this->videos
        ]);
    }
}