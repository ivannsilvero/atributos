<?php

namespace Andromeda\Attributes\Model\Config\Pantalla;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class PanelOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('IPS'), 'value' => 'ips'],
            ['label' =>__('TN'), 'value' => 'tn'],
        ];

        return $this->_options;
    }

}