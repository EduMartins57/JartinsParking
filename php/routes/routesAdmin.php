<?php

abstract class RouteSwitch
{
    protected function admin()
    {
        require __DIR__ . '/view/admin.php';
    }

    protected function alteraSenha()
    {
        require __DIR__ . '/view/alteraSenha.php';
    }

    protected function atualizaTarifa()
    {
        require __DIR__ . '/view/atualizaTarifa.php';
    }

    protected function erroAdmin()
    {
        require __DIR__ . '/view/erroAdmin.php';
    }

    protected function homeAdmin()
    {
        require __DIR__ . '/view/homeAdmin.php';
    }

    protected function listarLojasAdmin()
    {
        require __DIR__ . '/view/listarLojasAdmin.php';
    }

    protected function rodapeAdmin()
    {
        require __DIR__ . '/view/rodapeAdmin.php';
    }

    protected function sucessoRetiradaAdmin()
    {
        require __DIR__ . '/view/sucessoRetiradaAdmin.php';
    }

    protected function tarifaAdmin()
    {
        require __DIR__ . '/view/tarifaAdmin.php';
    }

}