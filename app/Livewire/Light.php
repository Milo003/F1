<?php

namespace App\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 10; 

    public function Off()
    {
        $this->brightness = 0; 
    }

    public function decrement()
    {
if ($this->brightness >= 10) {

    $this->brightness = $this->brightness - 10;
}
    }

    public function increment()
    {
if ($this->brightness <= 90) {


    $this->brightness = $this->brightness + 10;
}
    }

    public function On()
    {
        $this->brightness = 100; 
    }
    public function render()
    {
        return view('livewire.light');
    }
}
