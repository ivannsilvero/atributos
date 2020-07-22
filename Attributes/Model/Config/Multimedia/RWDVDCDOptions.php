<?php

namespace Andromeda\Attributes\Model\Config\Multimedia;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class RWDVDCDOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('Lectora/Grabadora CD/DVD'), 'value' => 'lectora_grabadora_cd_dvd'],
            ['label' =>__('Sí'), 'value' => 'si_cd_dvd'],
            ['label' =>__('No posee'), 'value' => 'no_cd_dvd'],
        ];

        return $this->_options;
    }

}