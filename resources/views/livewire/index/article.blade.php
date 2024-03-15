<div class="col-11 col-md-3 px-3 py-4">
    <div class="card hover_shadow hover_up">
        <a href="/article.html">
        <div class="p-0 over_hidden card_header h_10 d-flex align-items-centr justify-content-center">
            <img src="{{ $article->image }}" alt="" class="h-100">
        </div>
        <div class="card-body px-1 py-2">
           <h5 class="text-center text-primary"> {{ $article->h_title }}</h5>
           <p class="text-justify text-right font_0_9 text-secondary"> {{ $article->top_title }} </p>
           <a href="/article/{{ $article->id }}" class="btn btn-primary cursor_pointer_shadow rounded_5 px-3">ادامه ی مقاله</a>
        </div>
        </a>
    </div>
</div>
