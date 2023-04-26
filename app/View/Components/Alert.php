<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $type;
    public string $message;

    public function __construct($alertType, $message)
    {
        $this->type = $alertType;
        $this->message = $message;
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
        return Str::length($this->message) > 0;
    }

}
