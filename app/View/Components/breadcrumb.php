<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadCrumb extends Component
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
        return view('components.common.BreadCrumb', [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
        ]);
    }
}
