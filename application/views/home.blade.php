@layout('layouts/frontend')

@section('content')
    @if($news->count())
        @foreach($news as $article)
            <article>
                <h3>{{ $article->heading }}</h3>
                <p>{{ $article->content }}</p>

                <div>
                    <span class="badge">Posted {{ $article->created_at->format('Y-m-d H:i:s') }}</span>
                    <div class="pull-right">
                        @foreach($article->tags as $tag)
                            <span class="{{ $tag->class }}">{{ $tag->name }}</span>
                        @endforeach
                    </div>
                </div>
            </article>
        @endforeach
    @else
        <p>Check back here soon for updates!</p>
    @endif
@endsection
