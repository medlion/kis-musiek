<?php


namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route(
     *     "/add-user",
     *     name="_get_add_user",
     *     methods={"GET"}
     * )
     * @Template()
     * @param Request $request
     */
    public function addUserAction (Request $request)
    {

    }
}