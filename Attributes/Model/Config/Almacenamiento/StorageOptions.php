<?php

namespace Andromeda\Attributes\Model\Config\Almacenamiento;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class StorageOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('SSD 480GB'), 'value' => 'ssd480gb'],
            ['label' =>__('SSD 240GB'), 'value' => 'ssd240gb'],
            ['label' =>__('240GB'), 'value' => '240gb'],
        ];

        return $this->_options;
    }

}