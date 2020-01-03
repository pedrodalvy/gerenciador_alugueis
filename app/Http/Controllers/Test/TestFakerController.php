<?php

namespace App\Http\Controllers\Test;

use App\Endereco;
use App\Http\Controllers\Controller;
use App\Imovel;
use App\Inquilino;
use App\Proprietario;
use Illuminate\Http\Request;

class TestFakerController extends Controller
{

    private function cadastrarEndereco()
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

    private function cadastraImovel()
    {
        $faker = \Faker\Factory::create('pt_BR');

        $endereco_id = $this->cadastrarEndereco();

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

    private function cadastraPropietario()
    {
        $faker = \Faker\Factory::create('pt_BR');

        $endereco_id = $this->cadastrarEndereco();

        $proprietario = new Proprietario();

        $proprietario->nome = $faker->name();
        $proprietario->cpf = preg_replace("/\D/", "", $faker->cpf);
        $proprietario->email = $faker->email;
        $proprietario->telefone = $faker->phoneNumber;
        $proprietario->telefone_adicional = $faker->phoneNumber;
        $proprietario->telefone_contato = $faker->phoneNumber;
        $proprietario->telefone_contato_adicional = $faker->phoneNumber;
        $proprietario->agencia = $faker->numberBetween(0,999);
        $proprietario->conta = $faker->numberBetween(0,99999);
        $proprietario->operacao = $faker->numberBetween(0,20);
        $proprietario->endereco_id = $endereco_id;
        $proprietario->save();
        
        return $proprietario->id;
    }

    public function geradorPropietarios(int $quantidade)
    {
        for ($i=0; $i < $quantidade; $i++) { 
            $this->cadastraPropietario();
        }

        return redirect()->to(route('proprietarios.index'));
    }

    private function cadastraInquilino()
    {
        $faker = \Faker\Factory::create('pt_BR');

        $endereco_id = $this->cadastrarEndereco();

        $inquilino = new Inquilino();

        $inquilino->nome = $faker->name();
        $inquilino->cpf = preg_replace("/\D/", "", $faker->cpf);
        $inquilino->email = $faker->email;
        $inquilino->telefone = $faker->phoneNumber;
        $inquilino->telefone_adicional = $faker->phoneNumber;
        $inquilino->telefone_contato = $faker->phoneNumber;
        $inquilino->telefone_contato_adicional = $faker->phoneNumber;
        $inquilino->endereco_id = $endereco_id;
        $inquilino->save();
        
        return $inquilino->id;
    }

    public function geradorInquilinos(int $quantidade)
    {
        for ($i=0; $i < $quantidade; $i++) { 
            $this->cadastraInquilino();
        }

        return redirect()->to(route('inquilinos.index'));
    }
}
