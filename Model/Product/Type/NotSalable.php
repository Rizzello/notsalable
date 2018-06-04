<?php

namespace Rizzello\NotSalableProductType\Model\Product\Type;

use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Type\AbstractType;

class NotSalable extends AbstractType
{
    const TYPE_CODE = 'notsalable';

    /**
     * Delete data specific for this product type
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return void
     */
    public function deleteTypeSpecificData(Product $product)
    {
        //Nothing to do here
    }

    /**
     * Check is product available for sale
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return bool
     */
    public function isSalable($product)
    {
        return false;
    }
}
