<?php

namespace Andromeda\Attributes\Model\Config\Alimentacion;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class InternalSourceOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('Fuente 220V-200W 80 Plus'), 'value' => 'interna_220v_200w_80plus'],
            ['label' =>__('Fuente 220V-250W'), 'value' => 'interna_220v_250w']
        ];

        return $this->_options;
    }

}