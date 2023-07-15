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
            ->paginate(10)->through(fn($item) => [
                'id' => $item->id,
                'title' => $item->title,
                'body' => $item->body
            ]);
        $data['items'] = $items;
        return Inertia::render('article.index', ['data' => $data]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
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
