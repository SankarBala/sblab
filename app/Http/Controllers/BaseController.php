<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Division;
use App\Models\Faq;
use App\Models\Message;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;

class BaseController extends Controller
{
    public function __construct()
    {
        view()->share('divisions', Division::where('active', 1)->get());
    }

    public function home(): View
    {
        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }

    public function contact(): View
    {
        return view('contact');
    }

    public function articles(): View
    {
        return view('articles');
    }

    public function article(): View
    {
        // view()->share('article', $article);
        return view('article');
    }

    public function faq(): View
    {
        $faqs = Faq::where('active', 1)->get();
        return view('faq')->with('faqs', $faqs);
    }

    public function store_message(MessageRequest $request): JsonResponse
    {
        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();

        return response()->json(['status' => 'success', 'message' => 'Message sent successfully.']);
    }
}
