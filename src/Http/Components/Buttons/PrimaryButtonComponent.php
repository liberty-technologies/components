<?php

namespace LibertyTechnologies\Components\Http\Components\Buttons;

use Illuminate\View\Component;
use Illuminate\View\View;

class PrimaryButtonComponent extends Component
{
    public string $component;

    /**
     * @param  string  $type  Can be `button` or `link`
     */
    public function __construct(public string $type = 'button')
    {
        if ($this->type === 'button') {
            $this->componentName = 'button-base';
        } else {
            $this->componentName = 'button-link';
        }
    }

    public function render(): View
    {
        return view('components::buttons.primary');
    }
}
