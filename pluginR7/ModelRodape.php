<?php

    defined('ABSPATH') or die('qualquercoisa');
/*
Plugin Name: Plugin R7
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Basic WordPress Plugin Header Comment
Version:     1.0.0 ALPHA
Author:      Matheus Yuji
*/
    // Funcao que faz o rodape

    function rodape ()
     {

        $rodape = '
                <html lang="pt-br">
                    <head>
                    <meta charset="UTF-8">
                    <title>Rodape</title>
                    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
                    /*
                        estilo de das letras
                    */
                    <style>
                        .col-xs-8
                        {
                            margin-top: 10px;
                            border: 1px solid #000;

                            background-color: #007acc;
                        }
                        h1
                        {
                            font-family: "Arial black", Monaco, monospace;
                            color: #FFFFFF;

                            margin-top: -10px;
                            padding-top: 20px;
                        }
                        ul, a
                        {
                            list-style: none;
                            color: #fff;
                            position: fixed;
                            padding-top: 5px;
                        }
                        li#anuncie
                        {
                            margin-left: 200px;
                        }
                        li#trabalho
                        {
                            margin-left: 320px;
                        }
                        li#comunicar
                        {
                            margin-left: 460px;
                        }
                        li#fale
                        {
                            margin-left: 580px;
                        }
                        li#mapa
                        {
                            margin-left: 690px;
                        }
                        li#termos
                        {
                            margin-left: 790px;
                        }
                        li#privacidade
                        {
                            margin-left: 1000px;
                        }
                        p#nome
                        {
                            margin-top: 50px;
                            margin-left: 600px;

                            color: #fff;
                        }
                    </style>
                </head>
            <body>
                <!-- div com o rodape -->
                <div class="container-fluid">
                    <div class="col-xs-8 panel-footer">
                        <div class="col-xs-2">
                            <h1>R7.COM</h1>
                        </div>
                        <ul>
                            <li id="anuncie"><a href="#">Anuncie no R7</a></li>
                            <li id="trabalho"><a href="#">Trabalhe conosco</a></li>
                            <li id="comunicar"><a href="#">Comunicar erro</a></li>
                            <li id="fale"><a href="#">Fale com o R7</a></li>
                            <li id="mapa"><a href="#">Mapa do Site</a></li>
                            <li id="termos"><a href="#">Termos e Condições de Uso</a></li>
                            <li id="privacidade"><a href="#">Privacidade</a></li>
                        </ul>
                        <p id="nome">Matheus Yuji - 18/08</p>
                    </div>
                </div>
            </body>
            </html>';
        // Retorna o rodape
        return $rodape;
    }

    add_shortcode('qualquerCoisa', 'rodape;');




