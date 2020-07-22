<?php

namespace Andromeda\Attributes\Model\Config\Multimedia;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class BuiltInSpeakersOptions extends AbstractSource
{

    public function getAllOptions()
    {

        $this->_options = [
            ['label' =>__('Stereo'), 'value' => 'stereo_parlantes_incorporados'],
            ['label' =>__('Stereo 2W'), 'value' => 'stereo_2w_parlantes_incorporados']
        ];

        return $this->_options;
    }

}