<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    
    private $id;
    private $name;
    private $email;    
    private $password;
    private $Nivel_Acesso;
    private $Codigo_Hotel;
    
    //regra de segurança para evitar mass assingment (assinamento em massa)
    protected $fillable = [
        'id',
        'name',
        'email',        
        'password',
        'Nivel_Acesso',
        'Codigo_Hotel'
    ];
    
    function getId(){
        return $this->id;
    }
    
    function getName() {
        return $this->name;
    }
    
    function getEmail() {
        return $this->email;
    }
    
    function getPassword() {
        return $this->password;
    }

    function getNivel_Acesso() {
        return $this->Nivel_Acesso;
    }

    function getCodigo_Hotel() {
        return $this->Codigo_Hotel;
    }
    
    function setId($id){
        $this->id = $id;
    }
    
    function setName($name) {
        $this->name = $name;
    }
    
    function setEmail($email) {
        $this->email = $email;
    }    
    
    function setPassword($password) {
        $this->password = $password;
    }
    
    function setNivel_Acesso($Nivel_Acesso) {
        $this->Nivel_Acesso = $Nivel_Acesso;
    }
    
    function setCodigo_Hotel($Codigo_Hotel) {
        $this->Codigo_Hotel = $Codigo_Hotel;
    }
    
}


