<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route(
 *     "/manage"
 * )
 */
class ManageController
{
    /**
     * @Route(
     *     "/",
     *     name="get_manage"
     * )
     * @Template()
     * @param Request $request
     */
    public function manage (Request $request)
    {
        return;
    }
}