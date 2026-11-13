<?php

namespace App\Http\Controllers;

use App\Models\User;

class FounderController extends Controller
{
    public function index()
    {
        $founders = User::withCount('posts')
            ->where('Isfounder', 1)
            ->orderByDesc('likes_count')
            ->latest()
            ->get();

        $foundersCount = $founders->count();

        $totalLikes = $founders->sum('likes_count');

        $totalPosts = $founders->sum('posts_count');

        return view('founders.founders', compact(
            'founders',
            'foundersCount',
            'totalLikes',
            'totalPosts'
        ));
    }

    public function show($id)
    {
        $founder = User::with([
            'posts' => function ($query) {
                $query->latest();
            }
        ])->withCount('posts')->findOrFail($id);

        abort_unless(str_contains($founder->position, 'مؤسس'), 404);

        return view('founders.show', compact('founder'));
    }
}
