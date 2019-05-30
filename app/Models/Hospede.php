<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
    protected $table = 'hospedes';
    
    private $id;
    private $Nome_Hospede;
    private $Data_Nascimento;
    private $CPF;
    private $Endereco;
    private $Numero;
    private $Complemento;
    private $Bairro;
    private $Cidade;
    private $UF;
    private $CEP;
    private $Telefone;
    private $Celular;
    private $Email;
    private $Empresa;
    
      
     //regra de segurança para evitar mass assingment (assinamento em massa)
     protected $fillable = [
        'id',
        'Nome_Hospede',
        'Data_Nascimento',
        'CPF',
        'Endereco',
        'Numero',
        'Complemento',
        'Bairro',
        'Cidade',
        'UF',
        'CEP',
        'Telefone',
        'Celular',
        'Email',
        'Empresa'
    ];
    
 function getId() {
     return $this->id;
 }

 function getNome_Hospede() {
     return $this->Nome_Hospede;
 }

 function getData_Nascimento() {
     return $this->Data_Nascimento;
 }

 function getCPF() {
     return $this->CPF;
 }

 function getEndereco() {
     return $this->Endereco;
 }

 function getNumero() {
     return $this->Numero;
 }

 function getComplemento() {
     return $this->Complemento;
 }

 function getBairro() {
     return $this->Bairro;
 }

 function getCidade() {
     return $this->Cidade;
 }

 function getUF() {
     return $this->UF;
 }

 function getCEP() {
     return $this->CEP;
 }

 function getTelefone() {
     return $this->Telefone;
 }

 function getCelular() {
     return $this->Celular;
 }

 function getEmail() {
     return $this->Email;
 }

 function getEmpresa() {
     return $this->Empresa;
 }

 function setId($id) {
     $this->id = $id;
 }

 function setNome_Hospede($Nome_Hospede) {
     $this->Nome_Hospede = $Nome_Hospede;
 }

 function setData_Nascimento($Data_Nascimento) {
     $this->Data_Nascimento = $Data_Nascimento;
 }

 function setCPF($CPF) {
     $this->CPF = $CPF;
 }

 function setEndereco($Endereco) {
     $this->Endereco = $Endereco;
 }

 function setNumero($Numero) {
     $this->Numero = $Numero;
 }

 function setComplemento($Complemento) {
     $this->Complemento = $Complemento;
 }

 function setBairro($Bairro) {
     $this->Bairro = $Bairro;
 }

 function setCidade($Cidade) {
     $this->Cidade = $Cidade;
 }

 function setUF($UF) {
     $this->UF = $UF;
 }

 function setCEP($CEP) {
     $this->CEP = $CEP;
 }

 function setTelefone($Telefone) {
     $this->Telefone = $Telefone;
 }

 function setCelular($Celular) {
     $this->Celular = $Celular;
 }

 function setEmail($Email) {
     $this->Email = $Email;
 }

 function setEmpresa($Empresa) {
     $this->Empresa = $Empresa;
 }


} 
