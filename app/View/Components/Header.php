<?php

namespace App\View\Components;

use App\Models\Option;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        view()->share('options', Option::pluck('value', 'key'));
//        $settings = Option::pluck('value', 'key');
//        dd($settings);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
