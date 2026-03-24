@extends('admin.layout')
@section('title', 'News Articles')
@section('content')

    <div class="p-6">
        <div class="flex justify-between mb-6">
            <h2 class="text-2xl font-bold">News Articles</h2>
            <a href="{{ route('admin.news.create') }}" class="bg-green-600 text-white px-4 py-2 rounded">Add New Article</a>
        </div>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">{{ session('success') }}</div>
        @endif

        <table class="w-full border-collapse border border-slate-200">
            <thead>
                <tr class="bg-slate-100">
                    <th class="border px-4 py-2 text-left">#</th>
                    <th class="border px-4 py-2 text-left">Title</th>
                    <th class="border px-4 py-2 text-left">Author</th>
                    <th class="border px-4 py-2 text-left">Published</th>
                    <th class="border px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td class="border px-4 py-2">{{ $article->id }}</td>
                        <td class="border px-4 py-2">{{ $article->title }}</td>
                        <td class="border px-4 py-2">{{ $article->author_name }}</td>
                        <td class="border px-4 py-2">{{ $article->published_at?->format('M d, Y') }}</td>
                        <td class="border px-4 py-2 flex gap-2">
                            <a href="{{ route('admin.news.edit', $article) }}"
                                class="bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
                            <form action="{{ route('admin.news.destroy', $article) }}" method="POST"
                                onsubmit="return confirm('Delete this article?')">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 text-white px-3 py-1 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-6">
            {{ $articles->links() }}
        </div>
    </div>

@endsection
