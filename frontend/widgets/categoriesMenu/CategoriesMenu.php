<?php
namespace frontend\widgets\categoriesMenu;

use common\widgets\BaseWidget;

/**
 * Class CategoriesMenu
 * @package frontend\widgets\categoriesMenu
 */
class CategoriesMenu extends BaseWidget
{
    /**
     * @return array
     */
    public function getMenuOptions()
    {
        return [
            'items' => $this->getItems(),
            'submenuTemplate' => "\n<ul class='treeview-menu'>\n{items}\n</ul>\n",
            'linkTemplate' => '<a href="{url}" class="title">{label}</a>',
            'encodeLabels' => false,
            'activateParents' => true
        ];
    }

    /**
     * @return array
     */
    private function getItems()
    {
        return [
            [
                'label' => 'Mens',
                'url' => ['category.html'],
                'items' => [
                    ['label' => 'T-Shirts', 'url' => 'category.html'],
                    ['label' => 'Jackets', 'url' => 'category.html'],
                    ['label' => 'Jumpers', 'url' => 'category.html'],
                    ['label' => 'Shoes', 'url' => 'category.html'],
                    ['label' => 'Shirts', 'url' => 'category.html'],
                    ['label' => 'Accessories', 'url' => 'category.html'],
                ],
            ],
            [
                'label' => 'Womens',
                'url' => ['category.html'],
                'items' => [
                    ['label' => 'Shoes', 'url' => 'category.html'],
                    ['label' => 'Dresses', 'url' => 'category.html'],
                    ['label' => 'Bags', 'url' => 'category.html'],
                    ['label' => 'Trousers', 'url' => 'category.html'],
                    ['label' => 'Tops', 'url' => 'category.html'],
                    ['label' => 'Accessories', 'url' => 'category.html'],
                ]
            ]
        ];
    }
}