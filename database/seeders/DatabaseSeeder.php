<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Usuario
        User::create([
            'name' => 'Admin',
            'email' => 'admin@senai.br',
            'password' => Hash::make('123'),
        ]);

        //Produtos
        Produto::create([ 
            'nome' => 'tinta',
            'cor'=> 'azul',
            'textura'=> 'granulada',
            'peso'=> '12,4',
            'unidade_medida'=> 'gramas',
            'aplicação'=> 'acabamento',
            'qtd_estoque'=> 0,
            'qtd_minima'=> 4,
        ]);

        Produto::create([ 
            'nome' => 'tinta',
            'cor'=> 'rosa',
            'textura'=> 'granulada',
            'peso'=> '12,4',
            'unidade_medida'=> 'gramas',
            'aplicação'=> 'acabamento',
            'qtd_estoque'=> 0,
            'qtd_minima'=> 5,
        ]);

        Produto::create([ 
            'nome' => 'cimento',
            'cor'=> 'cinza',
            'textura'=> 'liso',
            'peso'=> '24,4',
            'unidade_medida'=> 'gramas',
            'aplicação'=> 'estrutura',
            'qtd_estoque'=> 0,
            'qtd_minima'=> 6,
        ]);

        Produto::create([ 
            'nome' => 'cimento',
            'cor'=> 'branco',
            'textura'=> 'pastoso',
            'peso'=> '24,4',
            'unidade_medida'=> 'gramas',
            'aplicação'=> 'estrutura',
            'qtd_estoque'=> 0,
            'qtd_minima'=> 3,
        ]);

        Produto::create([ 
            'nome' => 'argamassa',
            'cor'=> 'azul acinzentado',
            'textura'=> 'granulado',
            'peso'=> '29,4',
            'unidade_medida'=> 'gramas',
            'aplicação'=> 'acabamento',
            'qtd_estoque'=> 0,
            'qtd_minima'=> 7,
        ]);
    }
  
}
