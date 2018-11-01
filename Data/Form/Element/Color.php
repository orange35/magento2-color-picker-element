<?php

namespace Orange35\ColorPicker\Data\Form\Element;

class Color extends \Magento\Framework\Data\Form\Element\Text
{
    public function getElementHtml()
    {
        $this->addCustomAttribute('data-mage-init', $this->getDataInit());
        return parent::getElementHtml();
    }

    private function getDataInit()
    {
        return htmlspecialchars(json_encode($this->getDataInitOptions()));
    }

    private function getDataInitOptions()
    {
        return [
            'Orange35_ColorPicker/js/colorpicker' => [],
        ];
    }
}
