<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CourseComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $src;
    public $titleCourses;

    public function __construct($src, $titleCourses)
    {
        $this->src = $src;
        $this->titleCourses = $titleCourses;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course-component');
    }
}
