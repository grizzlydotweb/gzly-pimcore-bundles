<?php


namespace GrizzlyWeb\PimcoreBundles\PimcoreCustomEditmodeBundle\Model\DataObject\ClassDefinition\Layout;


use Pimcore\Model\DataObject\ClassDefinition\Layout;

class Flexitem extends Layout {

    /**
     * @var int
     */
    public $flex = 1;

    /**
     * Static type of this element
     *
     * @var string
     */
    public $fieldtype = 'flexitem';
    /**
     * Width of input field labels
     *
     * @var int
     */
    public $labelWidth = 100;

    /**
     * @param $labelWidth
     *
     * @return $this
     */
    public function setLabelWidth($labelWidth) {
        if (!empty($labelWidth)) {
            $this->labelWidth = intval($labelWidth);
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getLabelWidth() {
        return $this->labelWidth;
    }

    /**
     * @return int
     */
    public function getFlex(): int {
        return $this->flex;
    }

    /**
     * @param int $flex
     */
    public function setFlex( int $flex ): void {
        $this->flex = $flex;
    }



}
