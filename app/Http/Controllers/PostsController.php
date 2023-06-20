<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // 投稿一覧の表示
    }

    public function create()
    {
        // 新しい投稿の作成ページの表示
    }

    public function store(Request $request)
    {
        // 新しい投稿の保存
    }

    public function show($id)
    {
        // 特定の投稿の詳細の表示
    }

    public function edit($id)
    {
        // 既存の投稿の編集ページの表示
    }

    public function update(Request $request, $id)
    {
        // 既存の投稿の更新
    }

    public function destroy($id)
    {
        // 既存の投稿の削除
    }
}
