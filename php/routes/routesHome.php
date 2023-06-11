<?php

abstract class RouteSwitch
{
    protected function index()
    {
        require __DIR__ . '/';
    }

    protected function alteraSenha()
    {
        require __DIR__ . '/view/alteraSenha.php';
    }
    
    protected function cabecalho()
    {
        require __DIR__ . '/view/cabecalho.php';
    }

    protected function cadastra()
    {
        require __DIR__ . '/view/cadastra.php';
    }

    protected function cadastraVeiculo()
    {
        require __DIR__ . '/view/cadastraVeiculo.php';
    }

    protected function erro()
    {
        require __DIR__ . '/view/erro.php';
    }

    protected function home()
    {
        require __DIR__ . '/view/home.php';
    }

    protected function listarLojas()
    {
        require __DIR__ . '/view/listarLojas.php';
    }

    protected function listarVeiculosFora()
    {
        require __DIR__ . '/view/listarVeiculosFora.php';
    }

    protected function login()
    {
        require __DIR__ . '/view/login.php';
    }

    protected function lojas()
    {
        require __DIR__ . '/view/lojas.php';
    }

    protected function rodape()
    {
        require __DIR__ . '/view/rodape.php';
    }

    protected function rodapeModel()
    {
        require __DIR__ . '/view/rodapeModel.php';
    }

    protected function sair()
    {
        require __DIR__ . '/view/sair.php';
    }

    protected function sucesso()
    {
        require __DIR__ . '/view/sucesso.php';
    }

    protected function sucessoCadastro()
    {
        require __DIR__ . '/view/sucessoCadastro.php';
    }
    protected function sucessoRetirada()
    {
        require __DIR__ . '/view/sucessoRetirada.php';
    }

    protected function tarifa()
    {
        require __DIR__ . '/view/tarifa.php';
    }

    protected function visualizaVeiculosDentro()
    {
        require __DIR__ . '/view/visualizaVeiculosDentro.php';
    }

    protected function visualizaVeiculosFora()
    {
        require __DIR__ . '/view/visualizaVeiculosFora.php';
    }
    
}