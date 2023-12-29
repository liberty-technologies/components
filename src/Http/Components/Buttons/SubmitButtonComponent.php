<?php

namespace LibertyTechnologies\Components\Http\Components\Buttons;

use Illuminate\View\Component;
use Illuminate\View\View;

class SubmitButtonComponent extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components::buttons.submit');
    }
}
