<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuarios;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function home()
    {
        $modelUsuario = new Usuarios();
        $resultado = $modelUsuario->buscarTodos();
        $dados = [
            'nome' => session()->get('nome'),
            'numberUsers' => $resultado
        ];
        return view('home', $dados);
    }

    public function login()
    {
        return view('login');
    }

    public function login_sb()
    {
        $email = $this->request->getPost('emailTxt');
        $senha = $this->request->getPost('senhaTxt');

        $modelUsuario = new Usuarios();
        $resultado = $modelUsuario->loginDB($email, $senha);
        if($resultado == true){
            $dados = [
                'id' => $resultado->id,
                'nome' => $resultado->nome
            ];
            session()->set($dados);
            return redirect()->to('/');
        } else {
            return redirect()->to('cadastro');
        }
    }

    public function sairS()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}