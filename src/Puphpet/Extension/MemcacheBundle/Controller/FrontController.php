<?php

namespace Puphpet\Extension\MemcacheBundle\Controller;

use Puphpet\MainBundle\Extension;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller implements Extension\ControllerInterface
{
    public function indexAction(array $data)
    {
        return $this->render('PuphpetExtensionMemcacheBundle:form:Memcache.html.twig', [
            'memcache' => $data,
        ]);
    }
}
