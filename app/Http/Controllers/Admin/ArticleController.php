<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Article;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArticleController extends Controller
{
    public function index()
    {
        $items = Article::query()
            ->latest()
            ->paginate(10)
            ->through(fn($item) => [
                'id' => $item->id,
                'title' => $item->title,
                'body' => $item->body
            ]);
        $data['items'] = $items;
        return Inertia::render('article.index', ['data' => $data]);
    }

    public function create()
    {
        return Inertia::render('article.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:articles|max:255',
            'body' => 'required',
        ]);
        Article::create($validated);
        return redirect()->route('admin.articles.index');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
