<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Video as VideoModel;

class Video extends Component
{
    public $videos;
    public $selectedVideoUrl = null;
    public $videoModal = false; // property to show/hide modal

    public function mount()
    {
        $this->videos = VideoModel::all();
    }

    public function openVideo($videoUrl)
    {
        $this->selectedVideoUrl = $videoUrl;
        $this->videoModal = true; // show modal
    }

    public function closeVideo()
    {
        $this->selectedVideoUrl = null;
        $this->videoModal = false; // hide modal
    }

    public function render()
    {
        return view('livewire.video', [
            'videos' => $this->videos
        ]);
    }
}