<?php

// src/Controller/ProductApiController.php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductApiController extends AbstractController
{
    /**
     * @Route("/api/products", name="api_products", methods={"GET"})
     */
    public function getAll(ProductRepository $productRepository): JsonResponse
    {
        $products = $productRepository->findAll();
        $data = [];

        foreach ($products as $product) {
            $data[] = [
                'id' => $product->getId(),
                'title' => $product->getTitle(),
                'description' => $product->getDescription(),
                'price' => $product->getPrice(),
                'category' => $product->getCategory(),
            ];
        }

        return new JsonResponse($data);
    }

    /**
     * @Route("/api/products/{id}", name="api_product_detail", methods={"GET"})
     */
    public function getOne(Product $product): JsonResponse
    {
        return new JsonResponse([
            'id' => $product->getId(),
            'title' => $product->getTitle(),
            'description' => $product->getDescription(),
            'price' => $product->getPrice(),
            'category' => $product->getCategory(),
        ]);
    }
}
