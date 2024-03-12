
@foreach ($best_article as $best)
<livewire:index.article :article = "$best">
@endforeach

@foreach ($new_article as $new)
<livewire:index.article :article = "$new">
@endforeach
