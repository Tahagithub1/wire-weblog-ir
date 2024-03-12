<?php

namespace App\Livewire\Index;

use Livewire\Component;

class Index extends Component
{

    public $new_article;
    public $best_article;

    public function mount()
    {

     $this->new_article = \App\Models\Article::orderBy('id' , 'DESC')->take(4)->get();
     $this->best_article = \App\Models\Article::where('is_best' , 1)->take(4)->get();

    }

    public function render()
    {
        return view('livewire.index.index');
    }
}
