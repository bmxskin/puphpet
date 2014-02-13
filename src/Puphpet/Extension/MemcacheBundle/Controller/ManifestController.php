<?php

namespace Puphpet\Extension\MemcacheBundle\Controller;

use Puphpet\MainBundle\Extension;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ManifestController extends Controller implements Extension\ControllerInterface
{
    public function indexAction(array $data)
    {
        return $this->render('PuphpetExtensionMemcacheBundle:manifest:Memcache.pp.twig', [
            'data' => $data,
        ]);
    }
}
