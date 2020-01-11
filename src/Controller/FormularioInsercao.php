<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao implements InterfaceControllerRequisicao
{
    public function processaRequisicao(): void
    {        
        $titulo = 'Novo Curso';
        require __DIR__ . '/../../view/cursos/formulario.php';
    }
}
?>