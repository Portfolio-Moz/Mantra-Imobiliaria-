<?php

namespace App\Http\Livewire\Frontend\Produto;

use Livewire\Component;

class Index extends Component
{
    public $produto, $imobiliario, $categoria;

    public function mount($produto, $imobiliario, $categoria)
    {
        $this->produto = $produto;
        $this->imobiliario = $imobiliario;
        $this->categoria = $categoria;
    }

    public function render()
    {
        return view('livewire.frontend.produto.index',[
            'produto' => $this->produto,
            'imobiliario' => $this->imobiliario,
            'categoria' => $this->categoria,
        ]);
    }
}
