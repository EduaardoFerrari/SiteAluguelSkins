<?php
class User {
    private $id;
    private $nome;
    private $sobrenome;
    private $cpf;
    private $data_nascimento;
    private $telefone;
    private $email;
    private $senhaHash;

    public function __construct($id = 0, $nome = "", $sobrenome = "", $cpf = "", $data_nasc = "", $telefone = "", $email = "", $senhaHash = "") {
        $this->id = $id;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->data_nascimento = $data_nasc;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senhaHash = $senhaHash;
    }

    public function getId() { return $this->id; }
    public function getNome() { return $this->nome; }
    public function getSobrenome() { return $this->sobrenome; }
    public function getCpf() { return $this->cpf; }
    public function getDataNascimento() { return $this->data_nascimento; }
    public function getTelefone() { return $this->telefone; }
    public function getEmail() { return $this->email; }
    public function getSenhaHash() { return $this->senhaHash; }

    public function setId($id) { $this->id = $id; }
    public function setNome($nome) { $this->nome = $nome; }
    public function setSobrenome($sob) { $this->sobrenome = $sob; }
    public function setCpf($cpf) { $this->cpf = $cpf; }
    public function setDataNascimento($dt) { $this->data_nascimento = $dt; }
    public function setTelefone($tel) { $this->telefone = $tel; }
    public function setEmail($email) { $this->email = $email; }
    public function setSenhaHash($hash) { $this->senhaHash = $hash; }
}
