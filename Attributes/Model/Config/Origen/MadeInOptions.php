<?php

namespace Andromeda\Attributes\Model\Config\Origen;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class MadeInOptions extends AbstractSource
{

    public function getAllOptions()
    {   

        $this->_options = [
            ['label' =>__('Argentina'), 'value' => 'hecho_en_argentina']
        ];

        return $this->_options;
    }

}