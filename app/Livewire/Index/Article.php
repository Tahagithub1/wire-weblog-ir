<?php

namespace App\Livewire\Index;

use Livewire\Component;

class Article extends Component
{

    public $article;

    public function mount($article){
        $this->article = $article;
    }

    public function render()
    {
        return view('livewire.index.article');
    }
}
