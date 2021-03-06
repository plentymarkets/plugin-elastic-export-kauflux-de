<?php

namespace ElasticExportKaufluxDE\Helper;

use Illuminate\Support\Collection;
use Plenty\Modules\StockManagement\Stock\Contracts\StockRepositoryContract;
use Plenty\Modules\StockManagement\Stock\Models\Stock;
use Plenty\Plugin\Log\Loggable;
use Plenty\Repositories\Models\PaginatedResult;
use Plenty\Modules\Helper\Models\KeyValue;

/**
 * Class StockHelper
 * @package ElasticExportIdealoDE\Helper
 */
class StockHelper
{
    use Loggable;

    const STOCK_WAREHOUSE_TYPE = 'sales';

    const STOCK_AVAILABLE_LIMITED = 0;
    const STOCK_AVAILABLE_NOT_LIMITED = 1;
    const STOCK_NOT_AVAILABLE = 2;

    const STOCK_MAXIMUM_VALUE = 100;

	private $stockBuffer = 0;

	private $stockForVariationsWithoutStockLimitation = null;

	private $stockForVariationsWithoutStockAdministration = null;

    /**
     * @var StockRepositoryContract
     */
    private $stockRepository;

    /**
     * @var MarketHelper
     */
    private $marketHelper;

    /**
     * StockHelper constructor.
     *
     * @param StockRepositoryContract $stockRepositoryContract
     * @param MarketHelper $marketHelper
     */
    public function __construct(
        StockRepositoryContract $stockRepositoryContract,
        MarketHelper $marketHelper
    )
    {
        $this->stockRepository = $stockRepositoryContract;
        $this->marketHelper = $marketHelper;
    }

    /**
     * Calculates the stock based depending on different limits.
     *
     * @param  array $variation
     * @return int
     */
    public function getStock($variation):int
    {
        $stockNet = 0;

        if($this->stockRepository instanceof StockRepositoryContract)
        {
            $this->stockRepository->setFilters(['variationId' => $variation['id']]);
            $stockResult = $this->stockRepository->listStockByWarehouseType(self::STOCK_WAREHOUSE_TYPE, ['*'], 1, 1);

            if($stockResult instanceof PaginatedResult)
            {
                $result = $stockResult->getResult();

                if($result instanceof Collection)
                {
                    foreach($result as $model)
                    {
                        if($model instanceof Stock)
                        {
                            $stockNet = (int)$model->stockNet;
                        }
                    }
                }
            }
        }

        $stock = self::STOCK_MAXIMUM_VALUE;

        // stock is limited by kauflux config condition
        if($this->marketHelper->getConfigValue('stockCondition') != 'N')
        {
            // if stock limitation is available, but stock is not limited
            if($variation['data']['variation']['stockLimitation'] == self::STOCK_AVAILABLE_NOT_LIMITED && $stockNet > 0)
            {
                if($stockNet > 999)
                {
                    $stock = 999;
                }
				elseif(!is_null($this->stockForVariationsWithoutStockLimitation))
				{
					$stock = $this->stockForVariationsWithoutStockLimitation;
				}
                else
                {
                    $stock = $stockNet;
                }
                
            }
            // if stock limitation is available and stock is limited
            elseif($variation['data']['variation']['stockLimitation'] == self::STOCK_AVAILABLE_LIMITED && $stockNet > 0)
            {
                if($stockNet > 999)
                {
                    $stock = 999;
                }
                else
                {
                    $stock = $stockNet - $this->stockBuffer;
                }
                
                if($stock < 0)
                {
                	$stock = 0;
				}
            }
        }

        return $stock;
    }

	/**
	 * @param KeyValue $settings
	 */
	public function setAdditionalStockInformation(KeyValue $settings)
	{
		if(!is_null($settings->get('stockBuffer')) && $settings->get('stockBuffer') > 0)
		{
			$this->stockBuffer = $settings->get('stockBuffer');
		}

		if(!is_null($settings->get('stockForVariationsWithoutStockAdministration')) && $settings->get('stockForVariationsWithoutStockAdministration') > 0)
		{
			$this->stockForVariationsWithoutStockAdministration = $settings->get('stockForVariationsWithoutStockAdministration');
		}

		if(!is_null($settings->get('stockForVariationsWithoutStockLimitation')) && $settings->get('stockForVariationsWithoutStockLimitation') > 0)
		{
			$this->stockForVariationsWithoutStockLimitation = $settings->get('stockForVariationsWithoutStockLimitation');
		}
	}


    /**
     * Check if stock available.
     *
     * @param  array $variation
     * @return bool
     */
    public function isValid($variation):bool
    {
        $stock = $this->getStock($variation);

        // if stock is limited by kauflux config condition and stock is negative
        if($this->marketHelper->getConfigValue('stockCondition') != 'N' && $stock <= 0)
        {
            return false;
        }

        // else if stock is unlimited by kauflux config condition or stock is positive
        return true;
    }
}