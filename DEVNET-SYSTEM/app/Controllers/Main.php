<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Anuncios;
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
            $erro['motivo'] = 'Este login é inválido! Por favor, se cadastre primeiro.';
            return view('error/msg', $erro);
        }
    }

    public function feed()
    {
        $modelAnuncios = new Anuncios();
        $buscaDados = $modelAnuncios->buscarAnuncios();
        
        $dados = [
            'nome' => session()->get('nome'),
            'numero' => session()->get('celular'),
            'dados' => $buscaDados
        ];
        return view('feed', $dados);
    }

    public function perfil()
    {
        $modelUsuario = new Usuarios();
        $id = session()->get('id');
        $dadosDoUsuario = $modelUsuario->buscarPeloID($id);
        $dados = [
            'nome' => $dadosDoUsuario->nome,
            'biografia' => $dadosDoUsuario->biografia,
            'area' => $dadosDoUsuario->tecnologia,
            'experiencia' => $dadosDoUsuario->experiencia,
            'numero' => $dadosDoUsuario->celular,
            'rede_social' => $dadosDoUsuario->rede_social
        ];
        session()->set($dados);

        return view('perfil/perfil', $dados);
    }

    public function excluir()
    {
        $modelUsuario = new Usuarios();
        $modelAnuncios = new Anuncios();
        $id = session()->get('id');
        $modelAnuncios->where('id_usuarios',$id)->delete();
        $modelUsuario->delete($id);
        session()->destroy();
        return redirect()->to('/');
    }

    public function atualizar()
    {
        $nome = $this->request->getPost('nome');
        $biografia = $this->request->getPost('biografia');
        $area = $this->request->getPost('area');
        $experiencia = $this->request->getPost('experiencia');
        $celular = $this->request->getPost('celular');
        $redeSocial = $this->request->getPost('redeSocial');

        $dados = [
            'nome' => $nome,
            'biografia' => $biografia,
            'tecnologia' => $area,
            'experiencia' => $experiencia,
            'celular' => $celular,
            'rede_social' => $redeSocial
        ];
        $id = session()->get('id');
        $modelUsuario = new Usuarios();
        $atualizar = $modelUsuario->atualizarDB($id, $dados);
        if($atualizar == true){
            return redirect()->to('/');
        } else {
            $erro['motivo'] = 'Ocorreu um erro ao atualizar os seus dados.';
            return view('error/msg', $erro);
        }
    }

    public function confirmacao_delete()
    {
        return view('deletar_sim_ou_nao');
    }
    
    
    public function sairS()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}