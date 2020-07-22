<?php

namespace Andromeda\Attributes\Model\Config\Ram;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class RamOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('8GB'), 'value' => '8gbram']
        ];

        return $this->_options;
    }

}