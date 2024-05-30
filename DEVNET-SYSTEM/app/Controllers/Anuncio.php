<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Anuncios;
use CodeIgniter\HTTP\ResponseInterface;

class Anuncio extends BaseController
{
    public function anunciar()
    {
        $dados = [
            'nome' => session()->get('nome'),
        ];
        return view('anunciar', $dados);
    }
    public function anunciar_sb(){
        $tituloAnuncio = $this->request->getPost('tituloAnuncio');
        $tipoProjeto = $this->request->getPost('tipoProjeto');
        $descricao = $this->request->getPost('descricao');
        $tecnologias = $this->request->getPost('tecnologias');
        $numeroWhatsapp = $this->request->getPost('numeroWhatsapp');

        $modelAnuncio = new Anuncios();
        $resultado = $modelAnuncio->cadastrarDB($tituloAnuncio, $tipoProjeto, $descricao, $tecnologias, $numeroWhatsapp);
        if($resultado == true){
            return redirect()->to('feed');
        } else {
            $erro['motivo'] = 'Seu anúncio apresentou um erro...';
            return view('error/msg', $erro);
        }
    }
}