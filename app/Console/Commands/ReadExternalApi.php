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

         $advice_request = $this->adviceAPIService->getCurl($apiUrl);
         $adviceDecode = json_decode($advice_request, true);

         $dailyAdvice = $adviceDecode['slip']['advice'];

         var_dump($dailyAdvice);
         //a partir daqui é salvar numa tabela advice esse campo $dailyAdvice

         $advice = new Advice();

         $advice->advice = $dailyAdvice;

         $advice->save();
    }
}
