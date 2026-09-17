<?php

namespace App\Livewire\Produto;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $cor;
    public $textura;
    public $peso;
    public $unidade_medida;
    public $aplicacao;
    public $qtd_estoque;
    public $qtd_minima;

    public function store(){
        Produto::create([
            'nome'=> $this->nome,
            'cor'=> $this->cor,
            'textura'=> $this->textura,
            'peso'=> $this->peso,
            'unidade_medida'=> $this->unidade_medida,
            'aplicação'=> $this->aplicacao,
            'qtd_estoque'=> $this->qtd_estoque,
            'qtd_minima'=> $this-> qtd_minima

        ]);

        session()->flash('success', 'Cadastrado');
        return redirect()->route('produto.index');
    }
    public function render()
    {
        return view('livewire.produto.produto-create');
    }
}
