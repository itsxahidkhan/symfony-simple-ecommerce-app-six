<?php


namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    /**
     * @Route("/products", name="product_list")
     */
    public function list(ProductRepository $productRepository, Request $request): Response
    {
        $page = $request->query->getInt('page', 1);
        $products = $productRepository->findBy([], null, 10, ($page - 1) * 10);
        
        return $this->render('product/list.html.twig', [
            'products' => $products,
            'page' => $page,
        ]);
    }

    /**
     * @Route("/products/{id}", name="product_detail")
     */
    public function detail(Product $product): Response
    {
        return $this->render('product/detail.html.twig', [
            'product' => $product
        ]);
    }
}
