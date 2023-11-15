<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Usuario;
use Symfony\Component\Security\Core\Security;

class PerfilController extends AbstractController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }


    #[Route('/perfil/{id}', name: 'app_perfil')]
    public function perfilUser(ManagerRegistry $doctrine, Request $request, $id)
    {
        $repositorio = $doctrine->getRepository(Usuario::class);
        $user = $repositorio->find($id);

        // Obtener el usuario autenticado
        $usuarioAutenticado = $this->security->getUser();

        // Verificar si el ID del usuario autenticado coincide con el ID solicitado
        if ($usuarioAutenticado && $usuarioAutenticado->getId() == $id) {
            // Si los IDs coinciden, mostrar la plantilla de edición
            return $this->render('perfil/perfilmain.html.twig', [
                'controller_name' => 'PerfilController',
                'user' => $user,
            ]);
        } else {
            // Si los IDs no coinciden, mostrar la plantilla de solo visualización
            return $this->render('perfil/perfilview.html.twig', [
                'controller_name' => 'PerfilController',
                'user' => $user,
            ]);
        }
    }


    #[Route('/perfil', name: 'app_perfil_propio')]
    public function perfilPropio(ManagerRegistry $doctrine)
    {
        // Obtener el usuario autenticado
        $usuarioAutenticado = $this->security->getUser();

        // Comprobar si hay un usuario autenticado
        if (!$usuarioAutenticado) {
            // Si no hay usuario autenticado, redirigir a la página de inicio de sesión o similar
            return $this->redirectToRoute('login');
        }

        // Obtener el perfil del usuario autenticado
        $repositorio = $doctrine->getRepository(Usuario::class);
        $user = $repositorio->find($usuarioAutenticado->getId());

        // Renderizar la plantilla con el perfil del usuario
        return $this->render('perfil/perfilmain.html.twig', [
            'controller_name' => 'PerfilController',
            'user' => $user,
        ]);
    }
}

