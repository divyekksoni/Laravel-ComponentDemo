<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ChildComponent extends Component
{
    public $jsonData;

    public function __construct($jsonData)
    {
        $this->jsonData = $jsonData;
    }

    public function render()
    {
        return view('components.child-component');
    }
}

?>