<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Spryker Marketplace License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductOfferMerchantPortalGuiExtension\Dependency\Plugin;

use Symfony\Component\Form\FormBuilderInterface;

/**
 * Provides form expansion capabilities.
 *
 * Use this plugin interface for expanding `ProductOfferForm` with new form fields or subforms.
 */
interface ProductOfferFormExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands `ProductOfferForm` with new form fields or subforms.
     *
     * @api
     *
     * @param \Symfony\Component\Form\FormBuilderInterface<mixed> $builder
     * @param array<string, mixed> $options
     *
     * @return \Symfony\Component\Form\FormBuilderInterface<mixed>
     */
    public function expand(FormBuilderInterface $builder, array $options): FormBuilderInterface;
}
