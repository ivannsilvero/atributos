<?php

namespace Andromeda\Attributes\Model\Config\Multimedia;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class BackWebCamOptions extends AbstractSource
{

    // Sin usar !!!!

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('1.0 Mpx HD'), 'value' => '1_mpx_hd'],
            ['label' =>__('2.0 Mpx'), 'value' => '2_mpx'],
        ];

        return $this->_options;
    }

}