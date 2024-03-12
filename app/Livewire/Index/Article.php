<?php

namespace App\Livewire\Index;

use Livewire\Component;

class Article extends Component
{

    public $Article;

    public function mount($Article){
        $this->Article = $Article;
    }
    public function render()
    {
        return view('livewire.index.article');
    }
}
