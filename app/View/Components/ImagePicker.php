<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Storage;

class ImagePicker extends Component
{
    public $uniqueId;
    public $src;
    public $name;
    
    /**
     * Create a new component instance.
     */
    
    public function __construct($name, $id = null,  $src = null)
    {
        $this->name = $name;
        $this->uniqueId = 'imagePicker_' . ($id ?? uniqid());
        $this->src = trim($src ?? '');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.image-picker');
    }
}
