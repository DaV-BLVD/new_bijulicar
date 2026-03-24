@extends('admin.layout')
@section('title', 'Add News Article')

@section('content')

<div class="p-6 max-w-5xl mx-auto">
    <h2 class="text-2xl font-bold mb-6">Add News Article</h2>

    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- ================= BASIC INFO ================= --}}
        <div class="p-4 border rounded-lg bg-gray-50 mb-6">
            <h3 class="font-bold text-lg mb-4">Basic Information</h3>

            <div class="grid md:grid-cols-2 gap-4">
                <input type="text" name="title" placeholder="Title" class="border p-2">
                <input type="text" name="subtitle" placeholder="Subtitle" class="border p-2">
                <input type="text" name="author_name" placeholder="Author Name" class="border p-2">
                <input type="text" name="author_role" placeholder="Author Role" class="border p-2">
                <input type="text" name="badge_text" placeholder="Badge" class="border p-2">
                <input type="text" name="read_time" placeholder="Read Time" class="border p-2">
                <input type="date" name="published_at" class="border p-2">
                <input type="file" name="author_image" class="border p-2">
                <input type="file" name="hero_image" class="border p-2">
            </div>

            <textarea name="hero_caption" placeholder="Hero Caption"
                class="border p-2 w-full mt-4"></textarea>
        </div>

        {{-- ================= MAIN CONTENT ================= --}}
        <div class="p-4 border rounded-lg bg-slate-50 mb-6">
            <h3 class="font-bold text-lg mb-4">Main Content</h3>

            <textarea name="content_html" placeholder="Main Content"
                class="border p-2 w-full h-40"></textarea>

            <textarea name="quote" placeholder="Highlight Quote"
                class="border p-2 w-full mt-3"></textarea>

            {{-- Content Images --}}
            <div class="mt-4">
                <label class="font-semibold mb-1 block">Content Images</label>

                <div id="images1">
                    <div class="flex gap-2 mb-2">
                        <input name="content_images[]" placeholder="Image URL" class="border p-2 w-full">
                        <button type="button" onclick="this.parentNode.remove()">X</button>
                    </div>
                </div>

                <button type="button" onclick="addImage1()" class="text-sm bg-gray-200 px-2 py-1 rounded">
                    + Add Image
                </button>
            </div>
        </div>

        {{-- ================= VEHICLE SPECS ================= --}}
        <div class="p-4 border rounded-lg bg-yellow-50 mb-6">
            <h3 class="font-bold text-lg mb-4 text-yellow-700">Vehicle Specifications</h3>

            <div id="specs">
                <div class="flex gap-2 mb-2">
                    <input name="vehicle_specs[key][]" placeholder="Spec Name" class="border p-2 flex-1">
                    <input name="vehicle_specs[value][]" placeholder="Value" class="border p-2 flex-1">
                    <button type="button" onclick="this.parentNode.remove()">X</button>
                </div>
            </div>

            <button type="button" onclick="addSpec()" class="text-sm bg-gray-200 px-2 py-1 rounded">
                + Add Spec
            </button>
        </div>

        {{-- ================= SECTION 2 ================= --}}
        <div class="p-4 border rounded-lg bg-blue-50 mb-6">
            <h3 class="font-bold text-lg mb-4 text-blue-700">Section 2</h3>

            <input type="text" name="title2" placeholder="Section Title"
                class="border p-2 w-full mb-2">

            <textarea name="content_html2" placeholder="Section Content"
                class="border p-2 w-full h-32"></textarea>

            <div class="mt-3">
                <label class="font-semibold mb-1 block">Section Images</label>

                <div id="images2">
                    <div class="flex gap-2 mb-2">
                        <input name="content_images2[]" placeholder="Image URL" class="border p-2 w-full">
                        <button type="button" onclick="this.parentNode.remove()">X</button>
                    </div>
                </div>

                <button type="button" onclick="addImage2()" class="text-sm bg-gray-200 px-2 py-1 rounded">
                    + Add Image
                </button>
            </div>
        </div>

        {{-- ================= SECTION 3 ================= --}}
        <div class="p-4 border rounded-lg bg-green-50 mb-6">
            <h3 class="font-bold text-lg mb-4 text-green-700">Section 3</h3>

            <input type="text" name="title3" placeholder="Section Title"
                class="border p-2 w-full mb-2">

            <textarea name="content_html3" placeholder="Section Content"
                class="border p-2 w-full h-32"></textarea>
        </div>

        {{-- ================= RELATED ARTICLES ================= --}}
        <div class="p-4 border rounded-lg bg-purple-50 mb-6">
            <h3 class="font-bold text-lg mb-4 text-purple-700">Related Articles</h3>

            <div id="related">
                <div class="grid grid-cols-3 gap-2 mb-2">
                    <input name="related_articles[title][]" placeholder="Title" class="border p-2">
                    <input name="related_articles[category][]" placeholder="Category" class="border p-2">
                    <input name="related_articles[image][]" placeholder="Image URL" class="border p-2">
                </div>
            </div>

            <button type="button" onclick="addRelated()" class="text-sm bg-gray-200 px-2 py-1 rounded">
                + Add Related
            </button>
        </div>

        <button class="bg-green-600 text-white px-6 py-3 rounded w-full">
            Save Article
        </button>

    </form>
</div>

{{-- ================= JS ================= --}}
<script>
function addSpec() {
    let div = document.createElement('div');
    div.className = 'flex gap-2 mb-2';
    div.innerHTML = `
        <input name="vehicle_specs[key][]" placeholder="Spec Name" class="border p-2 flex-1">
        <input name="vehicle_specs[value][]" placeholder="Value" class="border p-2 flex-1">
        <button type="button" onclick="this.parentNode.remove()">X</button>
    `;
    document.getElementById('specs').appendChild(div);
}

function addImage1() {
    let div = document.createElement('div');
    div.className = 'flex gap-2 mb-2';
    div.innerHTML = `
        <input name="content_images[]" placeholder="Image URL" class="border p-2 w-full">
        <button type="button" onclick="this.parentNode.remove()">X</button>
    `;
    document.getElementById('images1').appendChild(div);
}

function addImage2() {
    let div = document.createElement('div');
    div.className = 'flex gap-2 mb-2';
    div.innerHTML = `
        <input name="content_images2[]" placeholder="Image URL" class="border p-2 w-full">
        <button type="button" onclick="this.parentNode.remove()">X</button>
    `;
    document.getElementById('images2').appendChild(div);
}

function addRelated() {
    let div = document.createElement('div');
    div.className = 'grid grid-cols-3 gap-2 mb-2';
    div.innerHTML = `
        <input name="related_articles[title][]" placeholder="Title" class="border p-2">
        <input name="related_articles[category][]" placeholder="Category" class="border p-2">
        <input name="related_articles[image][]" placeholder="Image URL" class="border p-2">
        <button type="button" onclick="this.parentNode.remove()">X</button>
    `;
    document.getElementById('related').appendChild(div);
}
</script>

@endsection