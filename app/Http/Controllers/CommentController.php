<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {

        $request->validate([
            "commentable_type" => ["required", Rule::in(['App\\Models\\Article', 'App\\Models\\Product', 'App\\Models\\Comment'])],
        ]);

        $comments = Comment::where('commentable_type', $request->commentable_type)
            ->where('commentable_id', $request->commentable_id)
            ->get();

        $comments = $comments->map(function ($comment) {
            return $comment->loadReplies();
        });

        return response()->json(['comments' => $comments], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'commentable_type' => [
                'required',
                'string',
                Rule::in(['App\\Models\\Article', 'App\\Models\\Product', 'App\\Models\\Comment']),
            ],
            'guid' => 'required|string',
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email|max:255',
            'image_url' => 'nullable|url',
            'text' => 'required|string|max:1000',
        ]);

        $comment = new Comment();
        $comment->commentable_type = $request->commentable_type;
        $comment->commentable_id = $request->commentable_id;
        $comment->guid = $request->guid;
        $comment->user_name = $request->user_name;
        $comment->user_email = $request->user_email;
        $comment->image_url = $request->image_url;
        $comment->text = $request->text;
        $comment->save();

        return response()->json(['message' => 'Comment created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {

        $validated = $request->validate([
            'guid' => 'required|string',
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email|max:255',
            'image_url' => 'nullable|url',
            'text' => 'required|string|max:1000',
        ]);

        if ($request->user_email !== $comment->user_email || $request->guid !== $comment->guid) { 
            abort(401, 'Unauthorized');
        }
 
        if ($comment->isDirty($validated)) {
            $comment->update($validated); 
        }

        return response()->json(['message' => 'Comment updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json(['message' => 'Comment deleted successfully'], 200);
    }
}
