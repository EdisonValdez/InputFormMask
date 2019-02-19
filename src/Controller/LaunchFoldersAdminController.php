<?php
/**
 * Created by PhpStorm.
 * User: valdez
 * Date: 2/19/2019
 * Time: 12:30 PM
 */

namespace App\Controller;

use App\Entity\LaunchFolders;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class LaunchFoldersAdminController extends AbstractController
{
    /**
     * @Route("/admin/lf/new", name="app_admin_lf_new")
     */
    public function launchFolderNew()
    {
        return new Response('This is where we are going to create new Launch Folders!');
    }
}