<?php
namespace frontend\widgets\productsList;

use common\widgets\BaseWidget;

/**
 * Class ProductsList
 * @package frontend\widgets\productsList
 */
class ProductsList extends BaseWidget
{

    /**
     * @return array
     */
    public function getProducts()
    {
        return [
            [
                'title' => 'Lisette Dress',
                'price' => 58.00,
                'url' => ['product.html'],
                'sale' => false,
                'images' => [
                    'primary' => 'db_file_img_48_640xauto.jpg',
                    'secondary' => 'db_file_img_49_640xauto.jpg',
                ]
            ],
            [
                'title' => 'El Silencio',
                'price' => 57.99,
                'base' => 58.00,
                'url' => ['product.html'],
                'sale' => true,
                'images' => [
                    'primary' => 'db_file_img_32_640xauto.jpg',
                    'secondary' => 'db_file_img_33_640xauto.jpg',
                ]
            ],
            [
                'title' => 'Malta Dress',
                'price' => 88.00,
                'url' => ['product.html'],
                'sale' => false,
                'images' => [
                    'primary' => 'db_file_img_137_640xauto.jpg',
                    'secondary' => 'db_file_img_138_640xauto.jpg',
                ]
            ],
            [
                'title' => 'Babar Soul',
                'price' => 70.00,
                'url' => ['product.html'],
                'sale' => false,
                'images' => [
                    'primary' => 'db_file_img_92_640xauto.jpg',
                    'secondary' => 'db_file_img_93_640xauto.jpg',
                ]
            ],
            [
                'title' => 'Babar Afrique',
                'price' => 220.00,
                'url' => ['product.html'],
                'sale' => false,
                'images' => [
                    'primary' => 'db_file_img_87_640xauto.jpg',
                    'secondary' => 'db_file_img_88_640xauto.jpg',
                ]
            ],
            [
                'title' => 'Nep Pocket Tee',
                'price' => 50.00,
                'url' => ['product.html'],
                'sale' => false,
                'images' => [
                    'primary' => 'db_file_img_10_640xauto.jpg'
                ]
            ],
            [
                'title' => 'Dustbowl Snapback',
                'price' => 28.00,
                'featured' => true,
                'url' => ['product.html'],
                'sale' => false,
                'images' => [
                    'primary' => 'db_file_img_34_640xauto.jpg',
                    'secondary' => 'db_file_img_35_640xauto.jpg',
                ]
            ],
            [
                'title' => 'Carstensen',
                'price' => 140.00,
                'url' => ['product.html'],
                'sale' => false,
                'images' => [
                    'primary' => 'db_file_img_97_640xauto.jpg',
                    'secondary' => 'db_file_img_98_640xauto.jpg',
                ]
            ],
            [
                'title' => 'Classic Glasgow in Silver',
                'price' => 140.00,
                'url' => ['product.html'],
                'sale' => false,
                'images' => [
                    'primary' => 'db_file_img_151_640xauto.jpg',
                    'secondary' => 'db_file_img_152_640xauto.jpg',
                ]
            ],
            [
                'title' => 'El Paso Tank',
                'price' => 38.00,
                'url' => ['product.html'],
                'sale' => false,
                'images' => [
                    'primary' => 'db_file_img_122_640xauto.jpg',
                    'secondary' => 'db_file_img_123_640xauto.jpg',
                ]
            ],
            [
                'title' => 'Bay Blocker',
                'price' => 72.00,
                'url' => ['product.html'],
                'sale' => false,
                'images' => [
                    'primary' => 'db_file_img_39_640xauto.jpg',
                ]
            ],
            [
                'title' => 'Marais Dress',
                'price' => 58.00,
                'url' => ['product.html'],
                'sale' => false,
                'images' => [
                    'primary' => 'db_file_img_42_640xauto.jpg',
                    'secondary' => 'db_file_img_43_640xauto.jpg',

                ]
            ],
            [
                'title' => 'Amelia Tote',
                'price' => 48.00,
                'base' => 58.00,
                'url' => ['product.html'],
                'sale' => true,
                'images' => [
                    'primary' => 'db_file_img_44_640xauto.jpg',
                    'secondary' => 'db_file_img_45_640xauto.jpg',
                ]
            ],
            [
                'title' => 'Navy Linen Blazer',
                'price' => 228.00,
                'url' => ['product.html'],
                'sale' => false,
                'images' => [
                    'primary' => 'db_file_img_155_640xauto.jpg',
                    'secondary' => 'db_file_img_159_640xauto.jpg',
                ]
            ]
        ];
    }

    /**
     * @param $product
     * @return string
     */
    public function renderProduct($product)
    {
        return $this->render('product', ['product' => $product]);
    }
}