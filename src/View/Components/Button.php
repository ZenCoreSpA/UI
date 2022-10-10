<?php

namespace ZenCoreSpA\UI\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function render(): View
    {
        return view('ui::components.button');
    }
}