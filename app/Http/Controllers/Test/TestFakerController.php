<?php

namespace App\Http\Controllers\Test;

use App\Endereco;
use App\Http\Controllers\Controller;
use App\Imovel;
use App\Inquilino;
use App\Proprietario;
use Faker\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TestFakerController extends Controller
{

    /**
     * @return int|mixed
     */
    private function cadastrarEndereco()
    {
        $faker = Factory::create('pt_BR');

        $endereco = new Endereco();

        $endereco->cep = preg_replace('/\D/','',$faker->postcode);
        $endereco->logradouro = $faker->streetName;
        $endereco->numero = $faker->numberBetween(10,50000);
        $endereco->complemento = rand(1, 10) % 2 == 0 ? $faker->word : null;
        $endereco->bairro = $faker->sentence;
        $endereco->municipio_id = 5002704;
        $endereco->save();

        return $endereco->id;
    }

    /**
     * @return int|mixed
     */
    private function cadastraImovel()
    {
        $faker = Factory::create('pt_BR');

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

    /**
     * @param int $quantidade
     * @return RedirectResponse
     */
    public function geradorImoveis(int $quantidade)
    {
        for ($i=0; $i < $quantidade; $i++) { 
            $this->cadastraImovel();
        }

        return redirect()->to(route('imovel.index'));
    }

    /**
     * @return int|mixed
     */
    private function cadastraPropietario()
    {
        $faker = Factory::create('pt_BR');

        $endereco_id = $this->cadastrarEndereco();

        $proprietario = new Proprietario();

        $proprietario->nome = $faker->name();
        $proprietario->cpf = preg_replace("/\D/", "", $faker->cpf);
        $proprietario->email = $faker->email;
        $proprietario->telefone = preg_replace("/\D/", "", $faker->phoneNumber);
        $proprietario->telefone_adicional = preg_replace("/\D/", "", $faker->phoneNumber);
        $proprietario->telefone_contato = preg_replace("/\D/", "", $faker->phoneNumber);
        $proprietario->telefone_contato_adicional = preg_replace("/\D/", "", $faker->phoneNumber);
        $proprietario->agencia = $faker->numberBetween(0,999);
        $proprietario->conta = $faker->numberBetween(0,99999);
        $proprietario->operacao = $faker->numberBetween(0,20);
        $proprietario->endereco_id = $endereco_id;
        $proprietario->save();
        
        return $proprietario->id;
    }

    /**
     * @param int $quantidade
     * @return RedirectResponse
     */
    public function geradorPropietarios(int $quantidade)
    {
        for ($i=0; $i < $quantidade; $i++) { 
            $this->cadastraPropietario();
        }

        return redirect()->to(route('proprietarios.index'));
    }

    /**
     * @return int|mixed
     */
    private function cadastraInquilino()
    {
        $faker = Factory::create('pt_BR');

        $endereco_id = $this->cadastrarEndereco();

        $inquilino = new Inquilino();

        $inquilino->nome = $faker->name();
        $inquilino->cpf = preg_replace("/\D/", "", $faker->cpf);
        $inquilino->email = $faker->email;
        $inquilino->telefone = preg_replace("/\D/", "", $faker->phoneNumber);
        $inquilino->telefone_adicional = preg_replace("/\D/", "", $faker->phoneNumber);
        $inquilino->telefone_contato = preg_replace("/\D/", "", $faker->phoneNumber);
        $inquilino->telefone_contato_adicional = preg_replace("/\D/", "", $faker->phoneNumber);
        $inquilino->endereco_id = $endereco_id;
        $inquilino->save();
        
        return $inquilino->id;
    }

    /**
     * @param int $quantidade
     * @return RedirectResponse
     */
    public function geradorInquilinos(int $quantidade)
    {
        for ($i=0; $i < $quantidade; $i++) { 
            $this->cadastraInquilino();
        }

        return redirect()->to(route('inquilinos.index'));
    }
}
