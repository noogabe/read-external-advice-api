<?php

namespace App\Services;

class AdviceAPIService {

    /* O cURL é uma ferramenta para criar requisições e obter conteúdo remoto. 
    Ele existe como ferramenta de linha de comando, e também como biblioteca, 
    a libcurl, que o PHP incorpora e expõe por meio das funções curl_. */

    /* Gera uma requisição http em $url
    A função curl_setopt define todos os parâmetros da requisição */
    public function getCurl( $url )
    {   
        // Inicializa sessão curl
        $ch = curl_init();


        /* Definindo parâmetros da requisição, como ela deve ser feita*/
        // Define que a requisição vai ser gerada em $url
        curl_setopt($ch, CURLOPT_URL,$url);

        // Exibe a resposta da requisição normalmente, ignorando códigos de erro
        curl_setopt($ch, CURLOPT_FAILONERROR,1);

        // Siga redirecionamentos http
        // As vezes ao solicitar uma URL, podemos ser direcionados para outra URL
        // Se essa opção estiver como true, vamos seguir para essa outra URL, seguindo esse fluxo
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);

        // foi definido como true, a função curl_exec (que dispara a requisição) 
        // irá retornar o conteúdo recuperado da URL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

        // Executa a sessão cURL, dispara a requisição
        $data = curl_exec($ch);  
        // Fecha sessão cURL 
        curl_close($ch);

        // Retorna os dados de resposta da requisição
        return $data;
    }

}