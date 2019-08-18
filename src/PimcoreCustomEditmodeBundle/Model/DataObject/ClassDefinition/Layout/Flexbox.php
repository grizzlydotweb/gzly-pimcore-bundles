<?php


namespace GrizzlyWeb\PimcoreBundles\PimcoreCustomEditmodeBundle\Model\DataObject\ClassDefinition\Layout;


use Pimcore\Model\DataObject\ClassDefinition\Layout;

class Flexbox extends Layout {

    /**
     * @var string
     */
    public $fieldtype = 'flexbox';

    /**
     * @var int
     */
    public $labelWidth = 100;

    /**
     * @var bool
     */
    public $fullscreen;

    /**
     * @var string|null
     */
    public $align = 'stretch';

    /**
     * @var
     */
    public $icon;

    /**
     * @var array
     */
    public $layout;

    /**
     * @return string
     */
    public function getFieldtype(): string {
        return $this->fieldtype;
    }

    /**
     * @param string $fieldtype
     */
    public function setFieldtype( string $fieldtype ): void {
        $this->fieldtype = $fieldtype;
    }

    /**
     * @return bool
     */
    public function getFullscreen(): bool {
        return $this->fullscreen;
    }

    /**
     * @param bool $fullscreen
     */
    public function setFullscreen( bool $fullscreen ): void {
        $this->fullscreen = $fullscreen;
    }

    /**
     * @return string|null
     */
    public function getAlign(): ?string
    {
        return $this->align;
    }

    /**
     * @param string|null $align
     */
    public function setAlign(?string $align): void
    {
        $this->align = $align;
    }

    /**
     * @return mixed
     */
    public function getIcon() {
        return $this->icon;
    }

    /**
     * @param mixed $icon
     */
    public function setIcon( $icon ): void {
        $this->icon = $icon;
    }

    /**
     * @return array
     */
    public function getLayout(): array {
        return $this->layout;
    }

    /**
     * @param array $layout
     */
    public function setLayout( array $layout ): void {
        $this->layout = $layout;
    }

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



}
