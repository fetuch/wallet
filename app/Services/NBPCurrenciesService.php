<?php

namespace App\Services;

use App\Models\Resource;
use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class NBPCurrenciesService
{
    protected $http;

    private $apiUrl;

    public function __construct()
    {
        $this->apiUrl = config('services.api.nbp');

        $this->http = new Client();
    }

    public function fetch($day = null)
    {
        if (! $day) {
            $day = Carbon::now()->format('Y-m-d');
        }

        try {
            $response = $this->http->get($this->apiUrl.'/exchangerates/tables/A/'.$day.'?format=json');

            if ($exchangerates = json_decode($response->getBody())) {
                $this->store($exchangerates);
            }
        } catch (RequestException $e) {
            \Log::error(Psr7\str($e->getRequest()));
        }
    }

    public function fetchPeriod($startDay, $endDay)
    {
        try {
            $response = $this->http->get($this->apiUrl.'/exchangerates/tables/A/'.$startDay.'/'.$endDay.'?format=json');

            if ($exchangerates = json_decode($response->getBody())) {
                $this->store($exchangerates);
            }
        } catch (RequestException $e) {
            \Log::error(Psr7\str($e->getRequest()));
        }
    }

    /**
     * @param $exchangerates
     */
    private function store($exchangerates): void
    {
        $valuationCurrency = Resource::whereName('PLN')->firstOrFail();

        foreach ($exchangerates as $exchangerate) {
            foreach ($exchangerate->rates as $rate) {
                $currency = Resource::firstOrCreate([
                    'currency_id' => $valuationCurrency->id,
                    'name' => $rate->code,
                ]);

                if(! $currency->valuations()->where('date', $exchangerate->effectiveDate)->first())
                {
                    $currency->valuations()->create([
                        'amount' => $rate->mid,
                        'date' => $exchangerate->effectiveDate,
                    ]);
                }
            }
        }
    }
}
