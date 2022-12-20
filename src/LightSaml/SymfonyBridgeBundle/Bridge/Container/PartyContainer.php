<?php

/*
 * This file is part of the LightSAML Symfony Bridge Bundle package.
 *
 * (c) Milos Tomic <tmilos@lightsaml.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace LightSaml\SymfonyBridgeBundle\Bridge\Container;

use LightSaml\Build\Container\PartyContainerInterface;
use LightSaml\Store\EntityDescriptor\EntityDescriptorStoreInterface;
use LightSaml\Store\TrustOptions\TrustOptionsStoreInterface;

class PartyContainer implements PartyContainerInterface
{
    private EntityDescriptorStoreInterface $idpEntityDescriptorStore;

    private EntityDescriptorStoreInterface $spEntityDescriptorStore;

    private TrustOptionsStoreInterface $trustOptionsStore;

    public function __construct(
        EntityDescriptorStoreInterface $idpEntityDescriptorStore,
        EntityDescriptorStoreInterface $spEntityDescriptorStore,
        TrustOptionsStoreInterface $trustOptionsStore
    ) {
        $this->idpEntityDescriptorStore = $idpEntityDescriptorStore;
        $this->spEntityDescriptorStore = $spEntityDescriptorStore;
        $this->trustOptionsStore = $trustOptionsStore;
    }

    public function getIdpEntityDescriptorStore(): EntityDescriptorStoreInterface
    {
        return $this->idpEntityDescriptorStore;
    }

    public function getSpEntityDescriptorStore(): EntityDescriptorStoreInterface
    {
        return $this->spEntityDescriptorStore;
    }

    public function getTrustOptionsStore(): TrustOptionsStoreInterface
    {
        return $this->trustOptionsStore;
    }
}
