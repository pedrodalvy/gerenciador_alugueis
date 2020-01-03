<?php

namespace App\Http\Controllers\Test;

use App\Endereco;
use App\Http\Controllers\Controller;
use App\Imovel;
use Illuminate\Http\Request;

class ImoveisCreateController extends Controller
{
    public function cadastraEndereco()
    {
        $faker = \Faker\Factory::create('pt_BR');

        $endereco = new Endereco();

        $endereco->cep = $faker->postcode;
        $endereco->logradouro = $faker->streetName;
        $endereco->numero = $faker->numberBetween(10,50000);
        $endereco->complemento = rand(1, 10) % 2 == 0 ? $faker->word : null;
        $endereco->bairro = $faker->sentence;
        $endereco->municipio_id = 5002704;
        $endereco->save();

        return $endereco->id;
    }

    public function cadastraImovel()
    {
        $faker = \Faker\Factory::create('pt_BR');

        $endereco_id = $this->cadastraEndereco();

        $imovel = new Imovel();

        $imovel->endereco_id = $endereco_id;
        $imovel->descricao = $faker->sentence;
        $imovel->inscricao_imobiliaria = rand(1000000000,9999999999);
        $imovel->valor_venda = $faker->numberBetween(100000,1000000);
        $imovel->valor_aluguel = $faker->numberBetween(800,2000);
        $imovel->save();

        return $imovel->id;
    }

    public function geradorImoveis(int $quantidade)
    {
        for ($i=0; $i < $quantidade; $i++) { 
            $this->cadastraImovel();
        }

        return redirect()->to(route('imovel.index'));
    }
}
