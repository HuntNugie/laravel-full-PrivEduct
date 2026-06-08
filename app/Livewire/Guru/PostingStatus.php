<?php

namespace App\Livewire\Guru;

use Livewire\Component;

class PostingStatus extends Component
{
    public $posting;
      public function activePostingan()
    {
        if ($this->posting[0]->status_publish === 'published') {
            $this->posting[0]->update([
                "status_publish" => "not_publish"
            ]);
        } else {
            $this->posting[0]->update([
                "status_publish" => "published"
            ]);
        }

        $this->dispatch("posting_updated");
    }
    public function render()
    {
        return view('livewire.guru.posting-status');
    }
}
