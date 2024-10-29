<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class PostComponent extends Component
{
    use WithPagination;

    public function posts(): Builder
    {
        return Post::query();
    }

    public function render()
    {
        // Log::info($this->posts()->paginate(1));
        // Log::info('Type of the paginated object: ' . get_class($this->posts()));
        return view('livewire.post-component', [
            'posts' => $this->posts()->paginate(5)
        ]);
    }
}
