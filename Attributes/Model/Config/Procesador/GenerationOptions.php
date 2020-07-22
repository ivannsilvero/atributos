<?php

namespace Andromeda\Attributes\Model\Config\Procesador;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class GenerationOptions extends AbstractSource
{

    public function getAllOptions()
    {
        $this->_options = [
            ['label' =>__('10ma generación'), 'value' => '10th_gen'],
            ['label' =>__('9na generación'), 'value' => '9th_gen']
        ];

        return $this->_options;
    }

}