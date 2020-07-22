<?php

namespace Andromeda\Attributes\Model\Config\Multimedia;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class AudioOutputOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('Jack 3.5 mm'), 'value' => 'jack_3_5_mm']
        ];

        return $this->_options;
    }

}