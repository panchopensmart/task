<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    private $productRepository;


    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    #[Route('/data', name: 'product_list')]
    public function getData(): Response
    {
        $products = $this->productRepository->findAllProducts();
        $result = [];

        foreach ($products as $product) {
            $result[] = [
                'cardId' => $product->getCardId(),
                'mp' => $product->getMp(),
                'date' => $product->getDate()->format('Y-m-d'),
                'cardID' => $product->getCardId(),
                'revenue' => $product->getRevenue(),
                'orders_count' => $product->getOrdersCount(),
                'abcSpent' => $product->getAdsSpent(),
                'absOrders' => $product->getAdsOrders(),
                'logistic' => $product->getLogistic(),
                'commission' => $product->getCommission(),
                'holdings' => $product->getHoldings()
            ];
        }

        return new Response(json_encode([$result]), 200,);
    }

}