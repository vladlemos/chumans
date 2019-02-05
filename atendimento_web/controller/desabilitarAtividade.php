<?php

    // VERIFICA SE EXISTEM ERROS DE EXECUÇÃO NO CÓDIGO
    ini_set('display_errors',1);

    // CHAMA OS ARQUIVOS DE VERIFICAÇÃO DE EXISTÊNCIA DAS CLASSES
    require_once("../../config_classes_globais.php");
    require_once("configAtendimentoWeb.php");

    // INSTANCIA OBJETO DA CLASSE LISTA ATIVIDADE
    $listaAtividade = new ListaAtividade();

    // RECEBE DADOS VIA GET E ATRIBUI AO OBJETO
    $listaAtividade->setIdAtividade($_GET['itemListaAtividades']);

    // echo "ID da Atividade: " . $listaAtividade->getIdAtividade()  . "<br><hr>";

    // CHAMA O MÉTODO DE REMOVER (DESABILITAR) A ATIVIDADE
    $listaAtividade->removerAtividade($listaAtividade->getIdAtividade());

    echo "Atividade removida com sucesso!<br><hr>";

?>

<a href="../view/lista_atividades.php">VOLTAR</a>