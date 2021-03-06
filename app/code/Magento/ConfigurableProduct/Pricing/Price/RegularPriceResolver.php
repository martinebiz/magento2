<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\ConfigurableProduct\Pricing\Price;

class RegularPriceResolver implements PriceResolverInterface
{
    /**
     * @param \Magento\Framework\Pricing\Object\SaleableInterface $product
     * @return float
     */
    public function resolvePrice(\Magento\Framework\Pricing\Object\SaleableInterface $product)
    {
        return $product->getPrice();
    }
}
