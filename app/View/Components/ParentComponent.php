<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ParentComponent extends Component
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        return view('components.parent-component',['data' => $this->data]);
    }
}

?>