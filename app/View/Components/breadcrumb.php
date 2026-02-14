<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumb extends Component
{
    public $title;
    public $subtitle;

    public function __construct($title = null, $subtitle = null)
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
    }

    public function render(): View|Closure|string
    {
        return view('components.common.breadcrumb', [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
        ]);
    }
}
