<?php

namespace Andromeda\Attributes\Model\Config\Apariencia;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class DimensionOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('360,4 x 244,5 x 19,9 mm'), 'value' => 'dimension_360_244_19'],
            ['label' =>__('561 x 430 x 110 mm'), 'value' => 'dimension_561_430_110'],
            ['label' =>__('99 x 295 x 365 mm (Gabinete)'), 'value' => 'dimension_99_295_365']
        ];

        return $this->_options;
    }

}