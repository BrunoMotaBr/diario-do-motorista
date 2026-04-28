<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class botao extends Component
{
    /**
     * Create a new component instance.
     */
    public string $cor;
    public string  $texto;
    public string  $corTexto;
    public string  $link;

    public function __construct(
            string $cor = '#131929',
            string  $texto = 'Entrar',
            string  $corTexto = 'black',
            string  $link = "#"
        )
    {
        $this->cor = $cor;
        $this->texto = $texto;
        $this->corTexto = $corTexto;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.botao');
    }
}
