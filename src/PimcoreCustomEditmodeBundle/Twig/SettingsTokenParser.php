<?php


namespace GrizzlyWeb\PimcoreBundles\PimcoreCustomEditmodeBundle\Twig;

use Twig\Error\SyntaxError;
use Twig\Node\Node;
use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;
use Twig\Parser;
use Twig\TokenParser\EmbedTokenParser;

class SettingsTokenParser extends AbstractTokenParser {

    /**
     * SettingsTokenParser constructor.
     */
    public function __construct() {
    }


    /**
     * @inheritDoc
     */
    public function parse( Token $token ) {
        {
            $lineno = $token->getLine();

            /** @var Parser $parser */
            $parser = $this->parser;
            $parent = $parser->getExpressionParser()->parseExpression();
            $stream = $parser->getStream();
            $stream->expect(Token::BLOCK_END_TYPE);

            // create body subtree
            $body = $parser->subparse(function (Token $token) {
                return $token->test(['end_gw_settings']);
            }, true);

            // end tag block end
            $stream->expect(Token::BLOCK_END_TYPE);

            return new Node();
        }
    }

    /**
     * Gets the tag name associated with this token parser.
     *
     * @return string The tag name
     */
    public function getTag() {
        return 'gw_settings';
    }
}
