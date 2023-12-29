<?php

namespace LibertyTechnologies\Components\Http\Components\Links;

use Illuminate\View\Component;
use Illuminate\View\View;

class ViewLinkComponent extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components::links.view');
    }
}
