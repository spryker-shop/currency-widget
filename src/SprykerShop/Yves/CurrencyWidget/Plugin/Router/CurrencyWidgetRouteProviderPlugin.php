<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\CurrencyWidget\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class CurrencyWidgetRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    /**
     * @deprecated Use {@link \SprykerShop\Yves\CurrencyWidget\Plugin\Router\CurrencyWidgetRouteProviderPlugin::ROUTE_NAME_CART} instead.
     *
     * @var string
     */
    protected const ROUTE_CART = 'currency-switch';

    /**
     * @var string
     */
    public const ROUTE_NAME_CART = 'currency-switch';

    /**
     * {@inheritDoc}
     * - Adds Routes to the RouteCollection.
     *
     * @api
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection = $this->addCurrencySwitchRoute($routeCollection);

        return $routeCollection;
    }

    protected function addCurrencySwitchRoute(RouteCollection $routeCollection): RouteCollection
    {
        $route = $this->buildRoute('/currency/switch', 'CurrencyWidget', 'CurrencySwitch', 'indexAction');
        $routeCollection->add(static::ROUTE_NAME_CART, $route);

        return $routeCollection;
    }
}
