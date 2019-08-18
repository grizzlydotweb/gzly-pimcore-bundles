<?php


namespace GrizzlyWeb\PimcoreBundles\PimcoreCustomEditmodeBundle\Twig;

use Pimcore\Model\Document\PageSnippet;
use Pimcore\Model\Document\Tag;
use Pimcore\Templating\Renderer\TagRenderer;
use Symfony\Bridge\Twig\TwigEngine;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CustomSettingsExtension extends AbstractExtension {

    /**
     * @var TagRenderer
     */
    protected $tagRenderer;
    /**
     * @var TagRenderer
     */
    protected $twigEngine;

    /**
     * @param TagRenderer $tagRenderer
     * @param TwigEngine $twigEngine
     */
    public function __construct(
        TagRenderer $tagRenderer,
        TwigEngine $twigEngine
    ) {
        $this->tagRenderer = $tagRenderer;
        $this->twigEngine = $twigEngine;
    }

    /**
     * @see \Pimcore\View::tag
     *
     * @param array $context
     * @param string $name
     * @param string $inputName
     * @param string $label
     * @param array $options
     *
     * @return Tag|string
     */
    public function renderCustomSetting($context, $name, $inputName, $label, $options = []) {
        $document = $context['document'];
        $editmode = $context['editmode'];

        if (!$editmode) {
            return '';
        }

        if (!($document instanceof PageSnippet)) {
            return '';
        }

        $tag = $this->tagRenderer->render($document, $name, $inputName, $options, $editmode);

        return '<div class="custom_pimcore_editmode_setting custom_pimcore_editmode_setting__'. $name .'">' . PHP_EOL . '<span class="custom_pimcore_editmode__label">'. $label .'</span>' . $tag . '</div>';
    }

    /**
     * @inheritDoc
     */
    public function getFunctions(): array {
        return [
            new TwigFunction('gw_setting_*', [$this, 'renderCustomSetting'], [
                'needs_context' => true,
                'is_safe' => ['html'],
            ])
        ];
    }

/*    public function getTokenParsers(): array
    {
        return [
            new SettingsTokenParser()
        ];
    }*/
}
