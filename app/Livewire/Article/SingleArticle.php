<?php

namespace App\Livewire\Article;

use App\Models\Article as ModelArticle;
use Livewire\Component;

class SingleArticle extends Component
{
    public $article;
    public function mount($id){
        $this->article = ModelArticle::find($id);
    }
    public function render()
    {
        return view('livewire.article.single-article');
    }
}
