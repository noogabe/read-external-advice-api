<?php

namespace App\Console\Commands;

use App\Advice;
use Illuminate\Console\Command;

use App\Services\AdviceAPIService;

class ReadExternalApi extends Command
{
    protected $signature = 'read:api';

    protected $description = 'Read advice Api';

    protected $adviceAPIService;

    public function __construct(AdviceAPIService $adviceAPIService)
    {
        parent::__construct();
        $this->adviceAPIService = $adviceAPIService;
    }

    public function handle()
    {

         $apiUrl = 'https://api.adviceslip.com/advice';

         /* Acesso o método getCurl, da classe adviceAPIService através do construtor
         ** Decodifica uma string json e converte pro php, como um array associativo
         ** Pega a informação que eu quero do array/matriz
         */

         $advice_request = $this->adviceAPIService->getCurl($apiUrl);
         $adviceDecode = json_decode($advice_request, true);

         $dailyAdvice = $adviceDecode['slip']['advice'];

         var_dump($dailyAdvice);

         /* A partir daqui é salvar numa tabela advice esse campo $dailyAdvice
         ** Cria uma nova instancia do model
         ** Atribui o valor de dailyadvice a essa nova instancia
         ** Salva no banco
         */

         $advice = new Advice();

         $advice->advice = $dailyAdvice;

         $advice->save();
    }
}
