<?php

namespace ElasticExportKaufluxDE;

use Plenty\Modules\DataExchange\Services\ExportPresetContainer;
use Plenty\Plugin\DataExchangeServiceProvider;

class ElasticExportKaufluxDEServiceProvider extends DataExchangeServiceProvider
{
    public function register()
    {

    }

    public function exports(ExportPresetContainer $container)
    {
        $container->add(
            'KaufluxDE-Plugin',
            'ElasticExportKaufluxDE\ResultField\KaufluxDE',
            'ElasticExportKaufluxDE\Generator\KaufluxDE',
            'ElasticExportKaufluxDE\Filter\KaufluxDE',
            true
        );
    }
}