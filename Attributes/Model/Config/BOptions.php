<?php

namespace Andromeda\Attributes\Model\Config;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class BOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('Sí'), 'value' => 'si'],
            ['label' =>__('No'), 'value' => 'no'],
        ];

        return $this->_options;
    }

}
