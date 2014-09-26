<?php

Croogo::hookBehavior('Product', 'WebshopShoppingCart.CartItem');

CroogoNav::add('node-menu-product', 'add-to-cart', array(
	'icon'  => array('comments', 'large'),
	'title' => __d('webshop', 'Add to cart'),
	'url'   => array(
		'plugin'     => 'webshop_shopping_cart',
		'controller' => 'shopping_cart',
		'action'     => 'add_product',
		'_id'
	)
));
