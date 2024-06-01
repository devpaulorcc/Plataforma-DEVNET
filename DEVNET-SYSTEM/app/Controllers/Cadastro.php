<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuarios;
use CodeIgniter\HTTP\ResponseInterface;

class Cadastro extends BaseController
{
    public function cadastro()
    {
        return view('cadastro');
    }
    public function cadastro_sb()
    {
        
        $nome = $this->request->getPost('nomeTxt');
        $email = $this->request->getPost('emailTxt');
        $senha = $this->request->getPost('senhaTxt');
        $bio = $this->request->getPost('bioTxt');
        $area = $this->request->getPost('areaTxt');
        $tempo = $this->request->getPost('tempoTxt');
        $certificacoes = $this->request->getPost('certificacoesTxt');
        $contato = $this->request->getPost('contatoTxt');
        $linkedin = $this->request->getPost('linkedinTxt');

        $modelUsuario = new Usuarios();
        $resultado = $modelUsuario->cadastrarDB($email, $senha, $nome, $bio, $area, $tempo, $certificacoes, $contato, $linkedin);
        if($resultado == true){
            $dados = [
                'email' => $email,
                'nome' => $nome,
                'bio' => $bio,
                'area' => $area,
                'tempo' => $tempo,
                'contato' => $contato,
                'linkedin' => $linkedin
            ];
            return redirect()->to('login');
        } else {
            $erro['motivo'] = 'Seu cadastro apresentou um erro...';
            return view('error/msg', $erro);
        }
    }
}
