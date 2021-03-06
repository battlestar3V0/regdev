<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CoreBundle\Twig\TokenParser;

if (!class_exists(\Sonata\Twig\TokenParser\TemplateBoxTokenParser::class, false)) {
    @trigger_error(
        'The '.__NAMESPACE__.'\TemplateBoxTokenParser class is deprecated since version 3.x and will be removed in 4.0.'
        .' Use Sonata\Twig\TokenParser\TemplateBoxTokenParser instead.',
        E_USER_DEPRECATED
    );
}

class_alias(
    \Sonata\Twig\TokenParser\TemplateBoxTokenParser::class,
    __NAMESPACE__.'\TemplateBoxTokenParser'
);

if (false) {
    /**
     * @deprecated Since version 3.x, to be removed in 4.0.
     */
    class TemplateBoxTokenParser extends \Sonata\Twig\TokenParser\TemplateBoxTokenParser
    {
    }
}
