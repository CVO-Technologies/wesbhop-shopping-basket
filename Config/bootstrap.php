<?php

Croogo::hookBehavior('Product', 'WebshopShoppingCart.CartItem');
Croogo::hookBehavior('Order', 'WebshopShoppingCart.CartOrder');

CroogoNav::add('node-menu-product', 'add-to-cart-old', array(
	'icon'  => array('comments', 'large'),
	'title' => __d('webshop', 'Add to cart (old)'),
	'url'   => array(
		'plugin'     => 'webshop_shopping_cart',
		'controller' => 'shopping_cart',
		'action'     => 'add_product',
		'_id'
	)
));

CroogoNav::add('node-menu-product', 'add-to-cart', array(
	'icon'  => array('comments', 'large'),
	'title' => __d('webshop', 'Add to cart'),
	'url'   => array(
		'plugin'     => 'webshop_shopping_cart',
		'controller' => 'shopping_basket_items',
		'action'     => 'add',
		'_id'
	)
));
