<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model
{
    protected $table            = 'usuario';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'email', 'senha', 'nome', 'biografia', 'tecnologia', 'experiencia', 'certificacoes', 'celular', 'rede_social'
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function buscarTodos()
    {
        $resultado = $this->findAll();
        return $resultado;
    }

    public function cadastrarDB($email, $senha, $nome, $biografia, $tecnologia, $experiencia, $certificacoes, $celular, $rede_social)
    {
        $dados = [
            'email' => $email,
            'senha' => $senha,
            'nome' => $nome,
            'biografia' => $biografia,
            'tecnologia' => $tecnologia,
            'experiencia' => $experiencia,
            'certificacoes' => $certificacoes,
            'celular' => $celular,
            'rede_social' => $rede_social,
        ];
        
        $resultado = $this->insert($dados);
        if($resultado){
            return true;
        } else {
            return false;
        }
    }

    public function loginDB($email, $senha)
    {
        $rEmail = $this->where('email', $email)->first();
    
        if($rEmail) {
            if($rEmail->senha === $senha) {
                
                return $rEmail;
            }
        }
    
        return false;
    }
}
