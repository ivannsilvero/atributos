<?php

namespace Andromeda\Attributes\Model\Config\Graficos;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class ProcessorGraphicsOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('Intel UHD Graphics'), 'value' => 'intel_uhd_graphics'],
            ['label' =>__('Intel HD Graphics 630'), 'value' => 'intel_hd_graphics_630']
        ];

        return $this->_options;
    }

}