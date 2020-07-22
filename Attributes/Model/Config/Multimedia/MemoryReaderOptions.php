<?php

namespace Andromeda\Attributes\Model\Config\Multimedia;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class MemoryReaderOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('6 en 1 (MMC/SD/RSMMC/SD/SDHC/SDXC)'), 'value' => '6_en_1_lector_memoria'],
            ['label' =>__('No posee'), 'value' => 'no_posee'],
        ];

        return $this->_options;
    }

}