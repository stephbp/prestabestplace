<?php return array (
  'name' => 'theme_optima_electronic',
  'display_name' => 'Optima_electronic',
  'version' => '1.0.0',
  'author' => 
  array (
    'name' => 'Posthemes',
    'email' => '',
    'url' => 'http://posthemes.com/',
  ),
  'meta' => 
  array (
    'compatibility' => 
    array (
      'from' => '1.7.0.0',
      'to' => NULL,
    ),
    'available_layouts' => 
    array (
      'layout-full-width' => 
      array (
        'name' => 'Full Width',
        'description' => 'No side columns, ideal for distraction-free pages such as product pages.',
      ),
      'layout-both-columns' => 
      array (
        'name' => 'Three Columns',
        'description' => 'One large central column and 2 side columns.',
      ),
      'layout-left-column' => 
      array (
        'name' => 'Two Columns, small left column',
        'description' => 'Two columns with a small left column',
      ),
      'layout-right-column' => 
      array (
        'name' => 'Two Columns, small right column',
        'description' => 'Two columns with a small right column',
      ),
    ),
  ),
  'assets' => NULL,
  'global_settings' => 
  array (
    'configuration' => 
    array (
      'PS_IMAGE_QUALITY' => 'png',
    ),
    'modules' => 
    array (
      'to_disable' => 
      array (
        0 => 'welcome',
        1 => 'ps_customtext',
        2 => 'ps_featuredproducts',
        3 => 'ps_imageslider',
        4 => 'ps_mainmenu',
        5 => 'ps_banner',
        6 => 'ps_searchbar',
        7 => 'ps_viewedproduct',
        8 => 'ps_contactinfo',
      ),
      'to_enable' => 
      array (
        0 => 'ps_linklist',
        1 => 'ps_advertising',
        2 => 'ps_categoryproducts',
        3 => 'ps_emailsubscription',
        4 => 'productcomments',
        5 => 'possearchproducts',
        6 => 'poslogo',
        7 => 'posmegamenu',
        8 => 'posvegamenu',
        9 => 'posslideshows',
        10 => 'posstaticblocks',
        11 => 'posstaticfooter',
        12 => 'posbestsellers',
        13 => 'poscountdown',
        14 => 'posspecialproducts',
        15 => 'poslistcategories',
        16 => 'poslistcateproduct',
        17 => 'xipblog',
        18 => 'xipblogdisplayposts',
      ),
    ),
    'hooks' => 
    array (
      'modules_to_hook' => 
      array (
        'displayBlockPosition1' => 
        array (
          0 => 'posbestsellers',
          1 => 'posstaticblocks',
          2 => 'poslistcategories',
          3 => 'posspecialproducts',
          4 => 'poslistcateproduct',
        ),
        'displayBlockPosition2' => 
        array (
          0 => 'posstaticblocks',
        ),
        'displayBlockPosition3' => 
        array (
          0 => 'posstaticblocks',
          1 => 'xipblogdisplayposts',
          2 => 'poslogo',
        ),
        'displayBlockPosition4' => 
        array (
          0 => 'posstaticblocks',
        ),
        'displayBlockPosition5' => 
        array (
          0 => 'posstaticblocks',
        ),
        'displayBlockPosition6' => 
        array (
          0 => 'posstaticblocks',
        ),
        'displayBlockPosition7' => 
        array (
          0 => 'posstaticblocks',
        ),
        'displayBrandSlider' => NULL,
        'displayNav1' => 
        array (
          0 => 'posstaticblocks',
        ),
        'displayTopColumn' => 
        array (
          0 => 'posslideshows',
          1 => 'posstaticblocks',
        ),
        'displayNav' => 
        array (
          0 => 'ps_languageselector',
          1 => 'ps_currencyselector',
          2 => 'ps_customersignin',
          3 => 'posstaticblocks',
        ),
        'displayTop' => 
        array (
          0 => 'ps_shoppingcart',
          1 => 'possearchproducts',
          2 => 'posstaticblocks',
        ),
        'displayFooter' => 
        array (
          0 => 'ps_linklist',
          1 => 'posstaticfooter',
        ),
        'displayFooterBefore' => 
        array (
          0 => 'posstaticfooter',
        ),
        'displayFooterAfter' => 
        array (
          0 => 'ps_emailsubscription',
          1 => 'posstaticfooter',
        ),
        'displayBlockFooter1' => 
        array (
          0 => 'posstaticfooter',
        ),
        'displayBlockFooter2' => 
        array (
          0 => 'posstaticfooter',
        ),
        'displayBlockFooter3' => 
        array (
          0 => 'posstaticfooter',
        ),
        'displayBlockFooter4' => 
        array (
          0 => 'posstaticfooter',
        ),
        'displayLeftColumn' => 
        array (
          0 => 'ps_categorytree',
          1 => 'ps_facetedsearch',
          2 => 'ps_advertising',
        ),
        'displayFooterProduct' => 
        array (
          0 => 'ps_categoryproducts',
        ),
        'displayProductButtons' => 
        array (
          0 => 'ps_sharebuttons',
        ),
        'displayReassurance' => 
        array (
          0 => 'blockreassurance',
        ),
        'displayBackOfficeHeader' => 
        array (
          0 => 'posstaticfooter',
          1 => 'posstaticblocks',
        ),
      ),
    ),
    'image_types' => 
    array (
      'cart_default' => 
      array (
        'width' => 125,
        'height' => 125,
        'scope' => 
        array (
          0 => 'products',
        ),
      ),
      'small_default' => 
      array (
        'width' => 98,
        'height' => 98,
        'scope' => 
        array (
          0 => 'products',
          1 => 'categories',
          2 => 'manufacturers',
          3 => 'suppliers',
        ),
      ),
      'medium_default' => 
      array (
        'width' => 458,
        'height' => 458,
        'scope' => 
        array (
          0 => 'products',
          1 => 'manufacturers',
          2 => 'suppliers',
        ),
      ),
      'home_default' => 
      array (
        'width' => 350,
        'height' => 350,
        'scope' => 
        array (
          0 => 'products',
        ),
      ),
      'large_default' => 
      array (
        'width' => 800,
        'height' => 800,
        'scope' => 
        array (
          0 => 'products',
          1 => 'manufacturers',
          2 => 'suppliers',
        ),
      ),
      'category_default' => 
      array (
        'width' => 870,
        'height' => 450,
        'scope' => 
        array (
          0 => 'categories',
        ),
      ),
      'stores_default' => 
      array (
        'width' => 170,
        'height' => 170,
        'scope' => 
        array (
          0 => 'stores',
        ),
      ),
      'side_default' => 
      array (
        'width' => 70,
        'height' => 70,
        'scope' => 
        array (
          0 => 'products',
        ),
      ),
    ),
  ),
  'theme_settings' => 
  array (
    'default_layout' => 'layout-full-width',
    'layouts' => 
    array (
      'index' => 'layout-full-width',
      'category' => 'layout-left-column',
      'best-sales' => 'layout-left-column',
      'new-products' => 'layout-left-column',
      'prices-drop' => 'layout-left-column',
      'contact' => 'layout-left-column',
      'Manufacturers' => 'layout-left-column',
      'Search' => 'layout-left-column',
      'module-xipblog-archive' => 'layout-left-column',
      'module-xipblog-single' => 'layout-left-column',
    ),
  ),
  'dependencies' => 
  array (
    'modules' => 
    array (
      0 => 'ps_linklist',
      1 => 'ps_advertising',
      2 => 'ps_categoryproducts',
      3 => 'ps_emailsubscription',
      4 => 'productcomments',
      5 => 'possearchproducts',
      6 => 'poslogo',
      7 => 'posmegamenu',
      8 => 'posvegamenu',
      9 => 'posslideshows',
      10 => 'posstaticblocks',
      11 => 'posstaticfooter',
      12 => 'posbestsellers',
      13 => 'poscountdown',
      14 => 'posspecialproducts',
      15 => 'poslistcategories',
      16 => 'poslistcateproduct',
      17 => 'xipblog',
      18 => 'xipblogdisplayposts',
    ),
  ),
);
