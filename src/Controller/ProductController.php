<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'product_index')]
    public function index(Request $request, ProductRepository $productRepository, CategoryRepository $categoryRepository): Response
    {
        $search = $request->query->get('search');
        $categoryId = $request->query->get('category');
        $sort = $request->query->get('sort');

        $queryBuilder = $productRepository->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->addSelect('c');

        if ($search) {
            $queryBuilder->andWhere('p.name LIKE :search OR p.description LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        if ($categoryId) {
            $queryBuilder->andWhere('p.category = :category')
                ->setParameter('category', $categoryId);
        }

        switch ($sort) {
            case 'name_asc':
                $queryBuilder->orderBy('p.name', 'ASC');
                break;
            case 'name_desc':
                $queryBuilder->orderBy('p.name', 'DESC');
                break;
            case 'price_asc':
                $queryBuilder->orderBy('p.price', 'ASC');
                break;
            case 'price_desc':
                $queryBuilder->orderBy('p.price', 'DESC');
                break;
            default:
                $queryBuilder->orderBy('p.id', 'DESC');
        }

        $products = $queryBuilder->getQuery()->getResult();
        $categories = $categoryRepository->findAll();

        return $this->render('product/index.html.twig', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    #[Route('/products/{id}', name: 'product_show', requirements: ['id' => '\d+'])]
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/products/image/{id}', name: 'product_image', requirements: ['id' => '\d+'])]
    public function serveImage(Product $product): Response
    {
        if (!$product->getImage()) {
            throw $this->createNotFoundException('No image found for this product.');
        }

        $imageData = stream_get_contents($product->getImage());
        if ($imageData === false) {
            throw $this->createNotFoundException('Unable to read image data.');
        }

        return new Response(
            $imageData,
            200,
            [
                'Content-Type' => $product->getImageMimeType() ?? 'image/jpeg',
                'Content-Disposition' => 'inline; filename="product-' . $product->getId() . '"'
            ]
        );
    }
}