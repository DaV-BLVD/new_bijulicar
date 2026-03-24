@extends('admin.layout')

@section('content')

@php
    $article = $article ?? null;

    // Vehicle Specs
    $specs = old('vehicle_specs.key')
        ? collect(old('vehicle_specs.key'))->map(fn($key, $i) => [
            'key' => $key,
            'value' => old('vehicle_specs.value')[$i] ?? ''
        ])->toArray()
        : ($article->vehicle_specs ?? []);

    // Related Articles
    $related = old('related_articles.title')
        ? collect(old('related_articles.title'))->map(fn($title, $i) => [
            'title' => $title,
            'category' => old('related_articles.category')[$i] ?? '',
            'image' => old('related_articles.image')[$i] ?? '',
        ])->toArray()
        : ($article->related_articles ?? []);

    // Content Images
    $contentImages = old('content_images') ?? ($article->content_images ?? []);
    $contentImages2 = old('content_images2') ?? ($article->content_images2 ?? []);
@endphp

<div class="max-w-5xl mx-auto p-8 bg-white rounded-2xl shadow border my-10">

    <div class="flex justify-between mb-8">
        <h1 class="text-2xl font-bold">
            {{ $article ? 'Edit' : 'Create' }} News Article
        </h1>

        <a href="{{ route('admin.news.index') }}" class="text-sm text-gray-500">← Back</a>
    </div>

    <form action="{{ $article ? route('admin.news.update', $article) : route('admin.news.store') }}"
        method="POST" enctype="multipart/form-data" class="space-y-8">

        @csrf
        @if($article) @method('PUT') @endif

        {{-- ================= BASIC ================= --}}
        <div class="border p-4 rounded bg-gray-50 space-y-4">
            <h3 class="font-bold">Basic Info</h3>

            <input name="title" placeholder="Title"
                value="{{ old('title', $article->title ?? '') }}" class="border p-2 w-full">

            <input name="subtitle" placeholder="Subtitle"
                value="{{ old('subtitle', $article->subtitle ?? '') }}" class="border p-2 w-full">

            <div class="grid grid-cols-3 gap-3">
                <input name="author_name" placeholder="Author"
                    value="{{ old('author_name', $article->author_name ?? '') }}" class="border p-2">

                <input name="author_role" placeholder="Role"
                    value="{{ old('author_role', $article->author_role ?? '') }}" class="border p-2">

                <input name="read_time" placeholder="Read Time"
                    value="{{ old('read_time', $article->read_time ?? '') }}" class="border p-2">
            </div>

            <div class="grid grid-cols-2 gap-3">
                <input name="badge_text" placeholder="Badge"
                    value="{{ old('badge_text', $article->badge_text ?? '') }}" class="border p-2">

                <input type="date" name="published_at"
                    value="{{ old('published_at', optional($article)->published_at?->format('Y-m-d')) }}"
                    class="border p-2">
            </div>
        </div>

        {{-- ================= IMAGES ================= --}}
        <div class="border p-4 rounded bg-gray-50 space-y-3">
            <h3 class="font-bold">Images</h3>

            <input type="file" name="author_image">
            @if($article?->author_image)
                <img src="{{ asset('storage/'.$article->author_image) }}" class="w-16 h-16 mt-2">
            @endif

            <input type="file" name="hero_image">
            @if($article?->hero_image)
                <img src="{{ asset('storage/'.$article->hero_image) }}" class="w-full h-32 mt-2">
            @endif

            <textarea name="hero_caption" placeholder="Hero Caption"
                class="border p-2 w-full">{{ old('hero_caption', $article->hero_caption ?? '') }}</textarea>
        </div>

        {{-- ================= MAIN CONTENT ================= --}}
        <div class="border p-4 rounded bg-blue-50 space-y-3">
            <h3 class="font-bold">Main Content</h3>

            <textarea name="content_html" class="border p-2 w-full h-32"
                placeholder="Content">{{ old('content_html', $article->content_html ?? '') }}</textarea>

            <textarea name="quote" class="border p-2 w-full"
                placeholder="Quote">{{ old('quote', $article->quote ?? '') }}</textarea>
        </div>

        {{-- ================= CONTENT IMAGES ================= --}}
        <div class="border p-4 rounded space-y-2">
            <h3 class="font-bold">Content Images</h3>

            <div id="images1">
                @foreach($contentImages as $img)
                    <div class="flex gap-2 mb-2">
                        <input name="content_images[]" value="{{ $img }}" class="border p-2 flex-1">
                        <button type="button" onclick="this.parentElement.remove()">X</button>
                    </div>
                @endforeach
            </div>

            <button type="button" onclick="addImage1()">+ Add</button>
        </div>

        {{-- ================= VEHICLE SPECS ================= --}}
        <div class="border p-4 rounded bg-yellow-50">
            <h3 class="font-bold">Vehicle Specs</h3>

            <div id="specs">
                @foreach($specs as $spec)
                    <div class="flex gap-2 mb-2">
                        <input name="vehicle_specs[key][]" value="{{ $spec['key'] }}" class="border p-2 flex-1">
                        <input name="vehicle_specs[value][]" value="{{ $spec['value'] }}" class="border p-2 flex-1">
                        <button type="button" onclick="this.parentElement.remove()">X</button>
                    </div>
                @endforeach
            </div>

            <button type="button" onclick="addSpec()">+ Add</button>
        </div>

        {{-- ================= SECTION 2 ================= --}}
        <div class="border p-4 rounded bg-green-50">
            <h3 class="font-bold">Section 2</h3>

            <input name="title2" placeholder="Title"
                value="{{ old('title2', $article->title2 ?? '') }}" class="border p-2 w-full mb-2">

            <textarea name="content_html2" class="border p-2 w-full"
                placeholder="Content">{{ old('content_html2', $article->content_html2 ?? '') }}</textarea>

            <div id="images2">
                @foreach($contentImages2 as $img)
                    <div class="flex gap-2 mt-2">
                        <input name="content_images2[]" value="{{ $img }}" class="border p-2 flex-1">
                        <button type="button" onclick="this.parentElement.remove()">X</button>
                    </div>
                @endforeach
            </div>

            <button type="button" onclick="addImage2()">+ Add Image</button>
        </div>

        {{-- ================= SECTION 3 ================= --}}
        <div class="border p-4 rounded bg-purple-50">
            <h3 class="font-bold">Section 3</h3>

            <input name="title3" placeholder="Title"
                value="{{ old('title3', $article->title3 ?? '') }}" class="border p-2 w-full mb-2">

            <textarea name="content_html3" class="border p-2 w-full"
                placeholder="Content">{{ old('content_html3', $article->content_html3 ?? '') }}</textarea>
        </div>

        {{-- ================= RELATED ================= --}}
        <div class="border p-4 rounded bg-gray-100">
            <h3 class="font-bold">Related Articles</h3>

            <div id="related">
                @foreach($related as $r)
                    <div class="grid grid-cols-3 gap-2 mb-2">
                        <input name="related_articles[title][]" value="{{ $r['title'] }}" class="border p-2">
                        <input name="related_articles[category][]" value="{{ $r['category'] }}" class="border p-2">
                        <input name="related_articles[image][]" value="{{ $r['image'] }}" class="border p-2">
                        <button type="button" onclick="this.parentElement.remove()">X</button>
                    </div>
                @endforeach
            </div>

            <button type="button" onclick="addRelated()">+ Add</button>
        </div>

        <button class="bg-green-600 text-white px-6 py-3 w-full rounded">
            {{ $article ? 'Update' : 'Create' }}
        </button>

    </form>
</div>

{{-- JS --}}
<script>
function addSpec() {
    document.getElementById('specs').insertAdjacentHTML('beforeend', `
        <div class="flex gap-2 mb-2">
            <input name="vehicle_specs[key][]" class="border p-2 flex-1">
            <input name="vehicle_specs[value][]" class="border p-2 flex-1">
            <button type="button" onclick="this.parentElement.remove()">X</button>
        </div>
    `);
}

function addImage1() {
    document.getElementById('images1').insertAdjacentHTML('beforeend', `
        <div class="flex gap-2 mb-2">
            <input name="content_images[]" class="border p-2 flex-1">
            <button onclick="this.parentElement.remove()">X</button>
        </div>
    `);
}

function addImage2() {
    document.getElementById('images2').insertAdjacentHTML('beforeend', `
        <div class="flex gap-2 mt-2">
            <input name="content_images2[]" class="border p-2 flex-1">
            <button onclick="this.parentElement.remove()">X</button>
        </div>
    `);
}

function addRelated() {
    document.getElementById('related').insertAdjacentHTML('beforeend', `
        <div class="grid grid-cols-3 gap-2 mb-2">
            <input name="related_articles[title][]" class="border p-2">
            <input name="related_articles[category][]" class="border p-2">
            <input name="related_articles[image][]" class="border p-2">
            <button onclick="this.parentElement.remove()">X</button>
        </div>
    `);
}
</script>

@endsection