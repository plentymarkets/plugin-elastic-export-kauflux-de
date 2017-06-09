<?php

namespace ElasticExportKaufluxDE\Helper;

use Plenty\Modules\Item\Property\Contracts\PropertyMarketReferenceRepositoryContract;
use Plenty\Modules\Item\Property\Contracts\PropertyNameRepositoryContract;
use Plenty\Modules\Item\Property\Models\PropertyName;
use Plenty\Plugin\Log\Loggable;

/**
 * Class PropertyHelper
 * @package ElasticExportIdealoDE\Helper
 */
class PropertyHelper
{
    use Loggable;

    const KAUFLUX_DE = 116.00;

    const PROPERTY_TYPE_TEXT = 'text';
    const PROPERTY_TYPE_SELECTION = 'selection';
    const PROPERTY_TYPE_EMPTY = 'empty';

    /**
     * @var array
     */
    private $itemPropertyCache = [];

    /**
     * @var PropertyNameRepositoryContract
     */
    private $propertyNameRepository;

    /**
     * @var PropertyMarketReferenceRepositoryContract
     */
    private $propertyMarketReferenceRepository;

    /**
     * PropertyHelper constructor.
     *
     * @param PropertyNameRepositoryContract $propertyNameRepository
     * @param PropertyMarketReferenceRepositoryContract $propertyMarketReferenceRepository
     */
    public function __construct(
        PropertyNameRepositoryContract $propertyNameRepository,
        PropertyMarketReferenceRepositoryContract $propertyMarketReferenceRepository)
    {
        $this->propertyNameRepository = $propertyNameRepository;
        $this->propertyMarketReferenceRepository = $propertyMarketReferenceRepository;
    }

    /**
     * Get description of all correlated properties.
     *
     * @param  array $variation
     * @param  string $lang
     * @return string|bool
     */
    public function getPropertyListDescription($variation, string $lang = 'de')
    {
        $properties = $this->getItemPropertyList($variation, $lang);

        $propertyDescription = '';

        foreach($properties as $property)
        {
            $propertyDescription .= '<br/>' . $property;
        }

        return $propertyDescription;
    }

    /**
     * Get item properties for a given variation.
     *
     * @param  array $variation
     * @param  string $lang
     * @return array
     */
    private function getItemPropertyList($variation, string $lang = 'de'):array
    {
        if(!array_key_exists($variation['data']['item']['id'], $this->itemPropertyCache))
        {
            $list = array();

            foreach($variation['data']['properties'] as $property)
            {
                if(!is_null($property['property']['id']) &&
                    $property['property']['valueType'] != 'file')
                {
                    $propertyName = $this->propertyNameRepository->findOne($property['property']['id'], $lang);
                    $propertyMarketReference = $this->propertyMarketReferenceRepository->findOne($property['property']['id'], self::KAUFLUX_DE);

                    // Skip properties which do not have the External Component set up
                    if(!($propertyName instanceof PropertyName) ||
                        is_null($propertyName) ||
                        is_null($propertyMarketReference) ||
                        $propertyMarketReference->externalComponent == '0')
                    {
                        $this->getLogger(__METHOD__)->debug('ElasticExportKaufluxDE::item.variationPropertyNotAdded', [
                            'ItemId'            => $variation['data']['item']['id'],
                            'VariationId'       => $variation['id'],
                            'Property'          => $property,
                            'ExternalComponent' => $propertyMarketReference->externalComponent
                        ]);

                        continue;
                    }

                    if($property['property']['valueType'] == self::PROPERTY_TYPE_TEXT)
                    {
                        if(is_array($property['texts']))
                        {
                            $list[(string)$propertyMarketReference->externalComponent] = $property['texts']['value'];
                        }
                    }

                    if($property['property']['valueType'] == self::PROPERTY_TYPE_SELECTION)
                    {
                        if(is_array($property['selection']))
                        {
                            $list[(string)$propertyMarketReference->externalComponent] = $property['selection']['name'];
                        }
                    }

                    if($property['property']['valueType'] == self::PROPERTY_TYPE_EMPTY)
                    {
                        $list[(string)$propertyMarketReference->externalComponent] = $propertyMarketReference->externalComponent;
                    }
                }
            }

            $this->itemPropertyCache[$variation['data']['item']['id']] = $list;

            $this->getLogger(__METHOD__)->debug('ElasticExportKaufluxDE::item.variationPropertyList', [
                'ItemId'        => $variation['data']['item']['id'],
                'VariationId'   => $variation['id'],
                'PropertyList'  => count($list) > 0 ? $list : 'no properties'
            ]);
        }

        return $this->itemPropertyCache[$variation['data']['item']['id']];
    }
}