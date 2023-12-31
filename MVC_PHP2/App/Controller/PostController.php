<?php

class PostController
{
    public function index($params)
    {   
        try {
            $postagem = Postagem::selecionarPorId($params['id']);

            $loader = new \Twig\Loader\FilesystemLoader('App/View');
            $twig = new \Twig\Environment($loader);
            $template = $twig->load('single.html');

            $parametros = array();
            $parametros['id'] = $postagem->id;
            $parametros['titulo'] = $postagem->titulo;
            $parametros['conteudo'] = $postagem->conteudo;
            $parametros['comentarios'] = $postagem->comentarios;

            $conteudo = $template->render($parametros);
            echo $conteudo;

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function addComent()
    {   
        try{
            Comentario::inserir($_POST);

            header('Location: http://localhost/ProjetoPHP/MVC_PHP2/?pagina=post&id='.$_POST['id'].'');
        } catch (Exception $e) {
            echo '<script>alert("'.$e->getMessage().'");</script>';
            echo '<script>location.href="http://localhost/ProjetoPHP/MVC_PHP2/?pagina=post&id='.$_POST['id'].'"</script>';
        }
    }
}