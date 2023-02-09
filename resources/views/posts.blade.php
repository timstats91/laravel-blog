<x-layout>
    @foreach ($posts as $post)
        <article>
            <a href="/posts/{{ $post->id }}">
                <h1>{{ $post->title }}</h1>
            </a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
</x-layout>
