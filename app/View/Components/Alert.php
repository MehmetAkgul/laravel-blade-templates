<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $type;
    public string $title;
    protected $except = [];
    public function __construct($type, $title)
    {
        $this->type = $type;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {


        return view('components.alert');
    }

    public function shouldRender(): bool
    {
        return Str::length($this->title) > 0;
    }

}
