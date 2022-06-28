<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__6b1985be2603e9de0f425e8c696313018206c3f117f2c02f519531016762d411 */
class __TwigTemplate_949105cc7e7f658dad76c70c32b6e1209f7b3c9723b3cf0968c149b9ab1a001e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Gestionnaire de modules • Best Place</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.8.6';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '8c518d238a8f5346389b2ca00d484f2f';
    var token_admin_orders = tokenAdminOrders = '4e7cdc5a7898c3034a6f40d0191b6bf6';
    var token_admin_customers = '4cb747b038ab38e021bfb004ea1afccc';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '1e195d6f96d2631e0892c1deb1f02049';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '3c222c82129d4926c1b1ac9731f9c49b';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/admin141ufkuz6/index.php/improve/modules/catalog/recommended?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes';
    var admin_notification_get_link = '/admin141ufkuz6/index.php/common/notification";
        // line 42
        echo "s?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes';
    var admin_notification_push_link = adminNotificationPushLink = '/admin141ufkuz6/index.php/common/notifications/ack?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/admin141ufkuz6/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin141ufkuz6/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin141ufkuz6\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin141ufkuz6\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\";
var currency = {\"iso_code\":\"MGA\",\"sign\":\"Ar\",\"name\":\"Ariary malgache\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MGA\",\"currencySymbol\":\"Ar\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\";
        // line 64
        echo "u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin141ufkuz6/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.8.6\"></script>
<script type=\"text/javascript\" src=\"/admin141ufkuz6/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.8.6\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin141ufkuz6/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>

  

";
        // line 84
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminmodulesmanage\"
  data-base-url=\"/admin141ufkuz6/index.php\"  data-token=\"deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminDashboard&amp;token=b6d2023b2484983fac8b050cf0ff5c1b\"></a>
      <span id=\"shop_version\">1.7.8.6</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminOrders&amp;token=4e7cdc5a7898c3034a6f40d0191b6bf6\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=11ffa4c20ca8fc1d4e369131648092f8\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php/improve/modules/manage?token=2d943094d4c0c8c178ab5f32c2617089\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c3e053775b92d0500c248338df0d826a\"
               ";
        // line 119
        echo "  data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php/sell/catalog/products/new?token=2d943094d4c0c8c178ab5f32c2617089\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php/sell/catalog/categories/new?token=2d943094d4c0c8c178ab5f32c2617089\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminModules&amp;&amp;configure=xipblog&amp;token=ebcb31a7abb76f0c2578807db9bfd661\"
                 data-item=\"XipBlog Settings\"
      >XipBlog Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"126\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-Fk0_JUpmcWIpvalqes\"
        data-post-link=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminQuickAccesses&token=653ca10934ce9e97001b2d2ee56bbc8a\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Modules - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminQuickAccesses&token=653ca10934ce9e97001b2d2ee56bbc8a\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_f";
        // line 157
        echo "orm dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin141ufkuz6/index.php?controller=AdminSearch&amp;token=642732af788e3a35ecc0dc6f0e1a3613\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-b";
        // line 175
        echo "ook\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://presta.lagrandebraderie.mg/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Command";
        // line 221
        echo "es<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=c0b943202551a3d3349d9a8993b80e5d\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
    ";
        // line 267
        echo "        <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://presta.lagrandebraderie.mg/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Vintsy</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin141ufkuz6/index.php/configure/advanced/employees/1/edit?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

   ";
        // line 318
        echo " <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminLogin&amp;logout=1&amp;token=dff42562a61c9cc069240edbd631b0b5\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin141ufkuz6/index.php/configure/advanced/employees/toggle-navigation?_token=deBPpcWGbC";
        // line 336
        echo "3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminDashboard&amp;token=b6d2023b2484983fac8b050cf0ff5c1b\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin141ufkuz6/index.php/sell/orders/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                          ";
        // line 380
        echo "    <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin141ufkuz6/index.php/sell/orders/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin141ufkuz6/index.php/sell/orders/invoices/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin141ufkuz6/index.php/sell/orders/credit-slips/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin141ufkuz6/index.php/sell/orders/delivery-slips/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                            ";
        // line 411
        echo "                                
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminCarts&amp;token=c0b943202551a3d3349d9a8993b80e5d\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin141ufkuz6/index.php/sell/catalog/products?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin141ufkuz6/index.php/sell/catalog/products?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Produits
                                </a>
                              </li>

                                                         ";
        // line 442
        echo "                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin141ufkuz6/index.php/sell/catalog/categories?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin141ufkuz6/index.php/sell/catalog/monitoring/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminAttributesGroups&amp;token=eeba1871a0e94bfbf64062d02460ca28\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin141ufkuz6/index.php/sell/catalog/brands/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class";
        // line 470
        echo "=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin141ufkuz6/index.php/sell/attachments/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminCartRules&amp;token=c3e053775b92d0500c248338df0d826a\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin141ufkuz6/index.php/sell/stocks/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_";
        // line 504
        echo "submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin141ufkuz6/index.php/sell/customers/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin141ufkuz6/index.php/sell/customers/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin141ufkuz6/index.php/sell/addresses/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
              ";
        // line 534
        echo "    
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminCustomerThreads&amp;token=1e195d6f96d2631e0892c1deb1f02049\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminCustomerThreads&amp;token=1e195d6f96d2631e0892c1deb1f02049\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin141ufkuz6/index.php/sell/customer-service/order-messages/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

            ";
        // line 564
        echo "                                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminReturn&amp;token=4144c427660ca030be97fb2d2db44deb\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/admin141ufkuz6/index.php/modules/metrics/legacy/stats?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/admin141ufkuz6/index.php/modules/metrics/legacy/stats?_token=deBPpcWGb";
        // line 593
        echo "C3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/admin141ufkuz6/index.php/modules/metrics?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin141ufkuz6/index.php/improve/modules/manage?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
   ";
        // line 631
        echo "                                           <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin141ufkuz6/index.php/improve/modules/manage?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/admin141ufkuz6/index.php/modules/addons/modules/catalog?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Catalogue de modules
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin141ufkuz6/index.php/improve/design/themes/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                            ";
        // line 660
        echo "        <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin141ufkuz6/index.php/improve/design/themes/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/admin141ufkuz6/index.php/modules/addons/themes/catalog?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin141ufkuz6/index.php/improve/design/mail_theme/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                       ";
        // line 689
        echo "                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin141ufkuz6/index.php/improve/design/cms-pages/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin141ufkuz6/index.php/improve/design/modules/positions/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminImages&amp;token=574e964ea0294a50bbdaf776bb19727f\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin141ufkuz6/index.php/modules/link-widget/list?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link";
        // line 717
        echo "\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminCarriers&amp;token=18151f8dc7057a1bc52cee8379dcc3ce\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminCarriers&amp;token=18151f8dc7057a1bc52cee8379dcc3ce\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShi";
        // line 749
        echo "pping\">
                                <a href=\"/admin141ufkuz6/index.php/improve/shipping/preferences/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin141ufkuz6/index.php/improve/payment/payment_methods?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin141ufkuz6/index.php/improve/payment/payment_methods?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                      ";
        // line 781
        echo "                      
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin141ufkuz6/index.php/improve/payment/preferences?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin141ufkuz6/index.php/improve/international/localization/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin141ufkuz6/index.php/improve/international/localization/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Localisation
                                </a>
                              </li>

       ";
        // line 812
        echo "                                                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin141ufkuz6/index.php/improve/international/zones/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin141ufkuz6/index.php/improve/international/taxes/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin141ufkuz6/index.php/improve/international/translations/settings?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"https:";
        // line 843
        echo "//presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminPsfacebookModule&amp;token=ece2f4ad97f24511fbc1f3887d0153fa\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminPsfacebookModule&amp;token=ece2f4ad97f24511fbc1f3887d0153fa\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=2554ae6c3eeb56855a3651c81906be02\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
              ";
        // line 872
        echo "    
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"159\" id=\"subtab-Adminxprtdashboard\">
                    <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=Adminxippost&amp;token=90aae2720858744f35eed961d41ed0bf\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      Xpert Blog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-159\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-Adminxippost\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=Adminxippost&amp;token=90aae2720858744f35eed961d41ed0bf\" class=\"link\"> Blog Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-Adminxipcategory\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=Adminxipcategory&amp;token=2c5b3a0bda27ee859f12ee123cd903ca\" class=\"link\"> Blog Categories
                                </a>
                              </li>

                         ";
        // line 902
        echo "                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-Adminxipcomment\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=Adminxipcomment&amp;token=291743efaed0a6552b5f69d730171980\" class=\"link\"> Blog Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-Adminxipimagetype\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=Adminxipimagetype&amp;token=6ca3b1f6567127556a9702f12e93eb04\" class=\"link\"> Blog Image Type
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin141ufkuz6/index.php/configure/shop/preferences/preferences?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
     ";
        // line 938
        echo "                 Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin141ufkuz6/index.php/configure/shop/preferences/preferences?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin141ufkuz6/index.php/configure/shop/order-preferences/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin141ufkuz6/index.php/configure/shop/product-preferences/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Produits
      ";
        // line 966
        echo "                          </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin141ufkuz6/index.php/configure/shop/customer-preferences/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin141ufkuz6/index.php/configure/shop/contacts/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin141ufkuz6/index.php/configure/shop/seo-urls/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://presta.la";
        // line 997
        echo "grandebraderie.mg/admin141ufkuz6/index.php?controller=AdminSearchConf&amp;token=25ff00e0f40dc57e6a7c5ac40bb70b40\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminGamification&amp;token=2f99bc868397fbf727a5b7379041e776\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin141ufkuz6/index.php/configure/advanced/system-information/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
";
        // line 1028
        echo "                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin141ufkuz6/index.php/configure/advanced/system-information/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin141ufkuz6/index.php/configure/advanced/performance/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin141ufkuz6/index.php/configure/advanced/administration/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin141ufkuz6/index.php/configure/advanced/emails/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Email
                                </a>
                       ";
        // line 1056
        echo "       </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/admin141ufkuz6/index.php/configure/advanced/import/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin141ufkuz6/index.php/configure/advanced/employees/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin141ufkuz6/index.php/configure/advanced/sql-requests/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin141ufkuz6/index.php/configure/advanced/logs/?_token=deBPpcWGbC3HrgJjqWtlDnVU-";
        // line 1086
        echo "Fk0_JUpmcWIpvalqes\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin141ufkuz6/index.php/configure/advanced/webservice-keys/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin141ufkuz6/index.php/configure/advanced/feature-flags/?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" class=\"link\"> Fonctionnalités Expérimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"152\" id=\"tab-AdminPosMenu\">
                <span class=\"title\">PosExtentions</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"153\" id=\"subtab-AdminPosLogo\">
                    <a href=\"https://presta.lagrande";
        // line 1123
        echo "braderie.mg/admin141ufkuz6/index.php?controller=AdminPosLogo&amp;token=e22b2386cb613e2b9f276c8dee73c8de\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Manage Logo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Gestionnaire de modules </li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin141ufkuz6/index.php/improve/modules/manage?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Gestionnaire de modules          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Installer un module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Installer un module
                </a>
                                                                        <a
             ";
        // line 1174
        echo "     class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-addons_connect\"
                  href=\"#\"                  title=\"Se connecter à la marketplace Addons\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">vpn_key</i>                  Se connecter à la marketplace Addons
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin141ufkuz6/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.6%2526country%253Dfr/Aide?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li class=\"nav-item\">
                    <a href=\"/admin141ufkuz6/index.php/improve/modules/manage?_token=deBPpcWG";
        // line 1201
        echo "bC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"45\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin141ufkuz6/index.php/improve/modules/alerts?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"46\">
                      Alertes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/admin141ufkuz6/index.php/improve/modules/updates?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"47\">
                      Mises à jour
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  ";
        // line 1224
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Installer un module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Installer un module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                                        <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-addons_connect\"
              href=\"#\"              title=\"Se connecter à la marketplace Addons\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Se connecter à la marketplace Addons
              <i class=\"material-icons\">vpn_key</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
           ";
        // line 1248
        echo "    title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin141ufkuz6/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminModules%253Fversion%253D1.7.8.6%2526country%253Dfr/Aide?_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Modules et services recommandés',
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/admin141ufkuz6/index.php/modules/addons/modules/recommended?tabClassName=AdminModulesManage&_token=deBPpcWGbC3HrgJjqWtlDnVU-Fk0_JUpmcWIpvalqes',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1287
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"https://presta.lagrandebraderie.mg/admin141ufkuz6/index.php?controller=AdminDashboard&amp;token=b6d2023b2484983fac8b050cf0ff5c1b\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=stephane%40bestplace.mg&amp;firstname=Vintsy&amp;lastname=Best&amp;website=http%3A%2F%2Fpresta.lagrandebraderie.mg%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin141ufkuz6/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t";
        // line 1335
        echo "\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=stephane%40bestplace.mg&amp;firstname=Vintsy&amp;lastname=Best&amp;website=http%3A%2F%2Fpresta.lagrandebraderie.mg%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<but";
        // line 1375
        echo "ton id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1395
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 84
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1287
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1395
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__6b1985be2603e9de0f425e8c696313018206c3f117f2c02f519531016762d411";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1561 => 1395,  1544 => 1287,  1535 => 84,  1526 => 1395,  1504 => 1375,  1462 => 1335,  1408 => 1287,  1367 => 1248,  1341 => 1224,  1316 => 1201,  1287 => 1174,  1234 => 1123,  1195 => 1086,  1163 => 1056,  1133 => 1028,  1100 => 997,  1067 => 966,  1037 => 938,  999 => 902,  967 => 872,  936 => 843,  903 => 812,  870 => 781,  836 => 749,  802 => 717,  772 => 689,  741 => 660,  710 => 631,  670 => 593,  639 => 564,  607 => 534,  575 => 504,  539 => 470,  509 => 442,  476 => 411,  443 => 380,  397 => 336,  377 => 318,  324 => 267,  276 => 221,  228 => 175,  208 => 157,  168 => 119,  128 => 84,  106 => 64,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6b1985be2603e9de0f425e8c696313018206c3f117f2c02f519531016762d411", "");
    }
}
