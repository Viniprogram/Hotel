<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
    protected $table = 'apartamentos';
    
    private $id;
    private $Codigo_Hotel;
    private $Numero_Apartamento;    
    private $Tipo_Apartamento;
    private $Tipo_Acomodacao;
    private $Quantidade_Cama;
    private $TV;
    private $Frigobar;
    private $Banheira;
    private $Escrivaninha;
    private $Ocupado;
    private $Inicio_Hospedagem;
    private $Fim_Hospedagem;
    private $Valor_Diaria;
    private $Codigo_Hospede;
    
    //regra de segurança para evitar mass assingment (assinamento em massa)
    protected $fillable = [
        'id',
        'Codigo_Hotel',
        'Numero_Apartamento',    
        'Tipo_Apartamento',
        'Tipo_Acomodacao',
        'Quantidade_Cama',
        'TV',
        'Frigobar',
        'Banheira',
        'Escrivaninha',
        'Ocupado',
        'Inicio_Hospedagem',
        'Fim_Hospedagem',
        'Valor_Diaria',
        'Codigo_Hospede'
    ];
    
    function getId() {
        return $this->id;
    }

    function getCodigo_Hotel() {
        return $this->Codigo_Hotel;
    }

    function getNumero_Apartamento() {
        return $this->Numero_Apartamento;
    }

    function getTipo_Apartamento() {
        return $this->Tipo_Apartamento;
    }

    function getTipo_Acomodacao() {
        return $this->Tipo_Acomodacao;
    }

    function getQuantidade_Cama() {
        return $this->Quantidade_Cama;
    }

    function getTV() {
        return $this->TV;
    }

    function getFrigobar() {
        return $this->Frigobar;
    }

    function getBanheira() {
        return $this->Banheira;
    }

    function getEscrivaninha() {
        return $this->Escrivaninha;
    }

    function getOcupado() {
        return $this->Ocupado;
    }

    function getInicio_Hospedagem() {
        return $this->Inicio_Hospedagem;
    }

    function getFim_Hospedagem() {
        return $this->Fim_Hospedagem;
    }

    function getValor_Diaria() {
        return $this->Valor_Diaria;
    }

    function getCodigo_Hospede() {
        return $this->Codigo_Hospede;
    }
    
    function setId($id) {
        $this->id = $id;
    }

    function setCodigo_Hotel($Codigo_Hotel) {
        $this->Codigo_Hotel = $Codigo_Hotel;
    }

    function setNumero_Apartamento($Numero_Apartamento) {
        $this->Numero_Apartamento = $Numero_Apartamento;
    }

    function setTipo_Apartamento($Tipo_Apartamento) {
        $this->Tipo_Apartamento = $Tipo_Apartamento;
    }

    function setTipo_Acomodacao($Tipo_Acomodacao) {
        $this->Tipo_Acomodacao = $Tipo_Acomodacao;
    }

    function setQuantidade_Cama($Quantidade_Cama) {
        $this->Quantidade_Cama = $Quantidade_Cama;
    }

    function setTV($TV) {
        $this->TV = $TV;
    }

    function setFrigobar($Frigobar) {
        $this->Frigobar = $Frigobar;
    }

    function setBanheira($Banheira) {
        $this->Banheira = $Banheira;
    }

    function setEscrivaninha($Escrivaninha) {
        $this->Escrivaninha = $Escrivaninha;
    }

    function setOcupado($Ocupado) {
        $this->Ocupado = $Ocupado;
    }

    function setInicio_Hospedagem($Inicio_Hospedagem) {
        $this->Inicio_Hospedagem = $Inicio_Hospedagem;
    }

    function setFim_Hospedagem($Fim_Hospedagem) {
        $this->Fim_Hospedagem = $Fim_Hospedagem;
    }

    function setValor_Diaria($Valor_Diaria) {
        $this->Valor_Diaria = $Valor_Diaria;
    }

    function setCodigo_Hospede($Codigo_Hospede) {
        $this->Codigo_Hospede = $Codigo_Hospede;
    }
}
