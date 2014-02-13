<?php

namespace Puphpet\Extension\MemcacheBundle;

use Puphpet\MainBundle\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class Configure extends Extension\ExtensionAbstract
{
    protected $name = 'Memcache';
    protected $slug = 'memcache';
    protected $targetFile = 'puphpet/puppet/manifest.pp';

    protected $sources = [
        'memcache' => ":git => 'https://github.com/bmxskin/puppet-memcached.git', :ref => 'new'",
    ];

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->dataLocation = __DIR__ . '/Resources/config';

        parent::__construct($container);
    }

    public function getFrontController()
    {
        return $this->container->get('puphpet.extension.memcache.front_controller');
    }

    public function getManifestController()
    {
        return $this->container->get('puphpet.extension.memcache.manifest_controller');
    }
}
