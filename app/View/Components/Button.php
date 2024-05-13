<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{

    public string $styleType;
    public bool $disabled;
    public string $size;
    public string $icon;
    public string $position;
    public string $text;
    public bool $loading;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $styleType = 'primary',
        string $size = 'normal',
        string $icon = '',
        string $position = 'left',
        string $text = '',
        bool $loading = false,
        bool $disabled = false,
    )
    {
        $this->styleType = $styleType;
        $this->size = $size;
        $this->icon = $icon;
        $this->position = $position;
        $this->text = $text;
        $this->loading = $loading;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
