<?php

namespace App\Controller\Catalog;

use App\Messenger\EditProductInCatalog;
use App\Messenger\MessageBusAwareInterface;
use App\Messenger\MessageBusTrait;
use App\ResponseBuilder\ErrorBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/product/edit", methods={"POST"}, name="product-edit")
 */
class EditController extends AbstractController implements MessageBusAwareInterface
{
    use MessageBusTrait;

    public function __construct(private ErrorBuilder $errorBuilder) { }

    public function __invoke(Request $request): Response
    {
        $id = (string)$request->get('id');
        $name = (string)$request->get('name');
        $price = (int)$request->get('price');
        $createdAt = new \DateTime();
//        if ($name === '' || $price < 1) {
//            return new JsonResponse(
//                $this->errorBuilder->__invoke('Invalid name or price.'),
//                Response::HTTP_UNPROCESSABLE_ENTITY
//            );
//        }

        $this->dispatch(new EditProductInCatalog($id, $name, $price, $createdAt));

        return new Response('', Response::HTTP_ACCEPTED);
    }
}
