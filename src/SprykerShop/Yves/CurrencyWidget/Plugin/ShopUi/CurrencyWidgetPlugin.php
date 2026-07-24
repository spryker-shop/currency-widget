<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\CurrencyWidget\Plugin\ShopUi;

use Spryker\Yves\Kernel\Widget\AbstractWidgetPlugin;
use SprykerShop\Yves\CurrencyWidget\Widget\CurrencyWidget;
use SprykerShop\Yves\ShopUi\Dependency\Plugin\CurrencyWidget\CurrencyWidgetPluginInterface;

/**
 * @deprecated Use {@link \SprykerShop\Yves\CurrencyWidget\Widget\CurrencyWidget} instead.
 */
class CurrencyWidgetPlugin extends AbstractWidgetPlugin implements CurrencyWidgetPluginInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     */
    public function initialize(): void
    {
        $widget = new CurrencyWidget();

        $this->parameters = $widget->getParameters();
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public static function getName(): string
    {
        return static::NAME;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     */
    public static function getTemplate(): string
    {
        return CurrencyWidget::getTemplate();
    }
}
