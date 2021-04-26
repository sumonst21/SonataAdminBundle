<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Tests\Form\Type\Filter;

use Sonata\AdminBundle\Form\Type\Filter\DateType;
use Symfony\Component\Translation\TranslatorInterface;

final class DateTypeTest extends BaseTypeTest
{
    public function testDefaultOptions(): void
    {
        $form = $this->factory->create($this->getTestedType());

        $view = $form->createView();

        $this->assertFalse($view->children['type']->vars['required']);
        $this->assertFalse($view->children['value']->vars['required']);
    }

    protected function getTestedType(): string
    {
        return DateType::class;
    }

    /**
     * NEXT_MAJOR: Remove this method.
     *
     * @return DateType[]
     */
    protected function getTypes(): array
    {
        return [
            new DateType($this->createStub(TranslatorInterface::class)),
        ];
    }
}