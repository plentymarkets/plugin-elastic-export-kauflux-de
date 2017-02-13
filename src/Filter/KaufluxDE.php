<?php

namespace ElasticExportKaufluxDE\Filter;

use Plenty\Modules\DataExchange\Contracts\FiltersForElasticSearchContract;

use Plenty\Plugin\Application;

class KaufluxDE extends FiltersForElasticSearchContract
{
    /**
     * @var Application $app
     */
    private $app;


    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * @return array
     */
    public function generateElasticSearchFilter():array
    {
        $searchFilter = array();

        return $searchFilter;
    }
}