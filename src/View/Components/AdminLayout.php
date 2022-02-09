<?php

namespace Firith\Nore\View\Components;

use Illuminate\View\Component;

class AdminLayout extends Component
{
    public ?string $pageTitle;

    public function __construct(?string $pageTitle = null)
    {
        $this->pageTitle = $pageTitle;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('nore::layouts.admin');
    }
}
