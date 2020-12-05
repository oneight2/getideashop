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

/* __string_template__21f500ed9fe1ae4324b8ac3df805d927764243c1403990a7eef68eacaebe68bf */
class __TwigTemplate_db48dbae476b81db5d26c7ca549147d973e0e7d0501c06ea3fb4350ded155c67 extends \Twig\Template
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
<html lang=\"id\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/getideashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/getideashop/img/app_icon.png\" />

<title>Informasi berkaitan pelanggan J. DOE • getideashop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCustomers';
    var iso_user = 'id';
    var lang_is_rtl = '0';
    var full_language_code = 'id';
    var full_cldr_language_code = 'id-ID';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '1.7.7.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Pembelian baru di toko Anda.';
    var order_number_msg = 'Nomor pesanan: ';
    var total_msg = 'Total: ';
    var from_msg = 'Dari: ';
    var see_order_msg = 'Lihat pembelian ini';
    var new_customer_msg = 'Pelanggan baru yang terdaftar.';
    var customer_name_msg = 'Nama pelanggan: ';
    var new_msg = 'Ada pesan baru di toko Anda.';
    var see_msg = 'Baca pesan';
    var token = '12f7ecc7e95d72be94e34b449178cabe';
    var token_admin_orders = 'e78a5390362e552b0b8006423d4e9b8d';
    var token_admin_customers = '12f7ecc7e95d72be94e34b449178cabe';
    var token_admin_customer_threads = 'e7b89140e3c74f8bc2d2530baf40d8b4';
    var currentIndex = 'index.php?controller=AdminCustomers';
    var employee_token = '692a82900a0f96fcabca03f47188907e';
    var choose_language_translate = 'Pilih Bahasa:';
    var default_language = '1';
    var admin_modules_link = '/getideashop/admin1/index.php/improve/modules/catalog/recommended?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0';
    var admin_notification_get_link = '/getideashop/admin1/index.php/common/notifications?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0';
    var admin_notification_push_link = '/getideashop/admin1/index.php/common/notifications/ack?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0';
    var tab_modules_list = '';
    var update_success_msg = 'update berhasil';
    var errorLogin = 'PrestaShop tidak dapat login ke Addons. Harap cek login dan koneksi internet Anda.';
    var search_product_msg = 'Cari produk';
  </script>

      <link href=\"/getideashop/admin1/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/getideashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/getideashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/getideashop/admin1/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/getideashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/getideashop/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/getideashop/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/getideashop\\/admin1\\/\";
var baseDir = \"\\/getideashop\\/\";
var changeFormLanguageUrl = \"\\/getideashop\\/admin1\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Rupiah Indonesia\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"IDR\",\"currencySymbol\":\"Rp\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/getideashop/admin1/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/getideashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/getideashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/getideashop/js/admin.js?v=1.7.7.0\"></script>
<script type=\"text/javascript\" src=\"/getideashop/admin1/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/getideashop/js/tools.js?v=1.7.7.0\"></script>
<script type=\"text/javascript\" src=\"/getideashop/admin1/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/getideashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/getideashop/admin1/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/getideashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/getideashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/getideashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/getideashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/getideashop/modules/midtranspay/js/midtrans_admin.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/getideashop/admin1/index.php/common/notifications?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/getideashop\\/admin1\\/index.php?controller=AdminGamification&token=36232aa624e6d2331216166824ae5fd7\";
            var current_id_tab = 25;
        </script>

";
        // line 104
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-id admincustomers\"
  data-base-url=\"/getideashop/admin1/index.php\"  data-token=\"uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/getideashop/admin1/index.php?controller=AdminDashboard&amp;token=572601cc740ed39d4987f8b520bf4c12\"></a>
      <span id=\"shop_version\">1.7.7.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Akses cepat
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/getideashop/admin1/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=382cba72993630512b57d3fde7fa6af0\"
                 data-item=\"Katalog evaluasi\"
      >Katalog evaluasi</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/getideashop/admin1/index.php/sell/catalog/categories/new?token=39629d4b1efc29812f83240705a1842c\"
                 data-item=\"Kategori baru\"
      >Kategori baru</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/getideashop/admin1/index.php/improve/modules/manage?token=39629d4b1efc29812f83240705a1842c\"
                 data-item=\"Modul terpasang\"
      >Modul terpasang</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/getideashop/admin1/index.php?controller=AdminOrders&amp;token=e78a5390362e552b0b8006423d4e9b8d\"
                 data-item=\"Penjualan\"
      >Penjualan</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/getideashop/admin1/index.php/sell/catalog/products/new?token=39629d4b1efc29812f83240705a1842c\"
                 data-item=\"Produk baru\"
      >Produk baru</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/getideashop/admin1/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=860516b22cbcf5a0c7c9779af8403b93\"
                 data-item=\"Voucher baru\"
      >Voucher baru</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"128\"
        data-icon=\"icon-AdminParentCustomer\"
        data-method=\"add\"
        data-url=\"index.php/sell/customers/2/view\"
        data-post-link=\"http://localhost/getideashop/admin1/index.php?controller=AdminQuickAccesses&token=509507dfbfcd224eb055b377da8da8c1\"
        data-prompt-text=\"Harap namai shortcut ini:\"
        data-link=\"Pelanggan - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/getideashop/admin1/index.php?controller=AdminQuickAccesses&token=509507dfbfcd224eb055b377da8da8c1\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/getideashop/admin1/index.php?controller=AdminSearch&amp;token=997ebb372e1efd17ae0d39d78def2dc4\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Cari (misalnya referensi produk, nama pelanggan…) d='Admin.Navigation.Header'\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Dimana-mana
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Dimana-mana\" href=\"#\" data-value=\"0\" data-placeholder=\"Apa yang Anca cari?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Dimana-mana</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan Dengan nama\" href=\"#\" data-value=\"2\" data-placeholder=\"Nama\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Pelanggan Dengan nama</a>
        <a class=\"dropdown-item\" data-item=\"Pelanggan oleh alamat IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Pelanggan menurut alamat IP</a>
        <a class=\"dropdown-item\" data-item=\"Penjualan\" href=\"#\" data-value=\"3\" data-placeholder=\"Nomor Pesanan\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Penjualan</a>
        <a class=\"dropdown-item\" data-item=\"Invoice\" href=\"#\" data-value=\"4\" data-placeholder=\"Nomor invoice\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoice</a>
        <a class=\"dropdown-item\" data-item=\"Troli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Cart\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Troli</a>
        <a class=\"dropdown-item\" data-item=\"Modul\" href=\"#\" data-value=\"7\" data-placeholder=\"Nama modul\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modul</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CARI</span><i class=\"material-icons\">search</i></button>
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
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/getideashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Lihat toko
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
              Pesanan<span id=\"_nb_new_orders_\"></span>
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
              Pelanggan<span id=\"_nb_new_customers_\"></span>
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
              Pesan<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada order :(<br>
              Sudahkah Anda memeriksa <strong><a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=d24c4ca036ad9713c79a20844709fa54\">troli yang ditinggalkan</a></strong>?<br>Pesanan berikutnya mungkin tersembunyi di situ!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pelanggan baru :(<br>
              Sudahkah Anda mengirim surel akuisisi belakangan ini?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Belum ada pesan baru saat ini.<br>
              Itu berarti lebih banyak waktu untuk sesuatu yang lain!
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
      dari <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - terdaftar <strong>_date_add_</strong>
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
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/1606109%40sttgarut.ac.id.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Syarif</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/getideashop/admin1/index.php/configure/advanced/employees/1/edit?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\">
      <i class=\"material-icons\">settings</i>
      Profile Anda
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Pelatihan</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> Prestashop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/getideashop/admin1/index.php?controller=AdminLogin&amp;logout=1&amp;token=321f0c625758bae6b0ea809073843608\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Keluar</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/getideashop/admin1/index.php/configure/advanced/employees/toggle-navigation?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminDashboard&amp;token=572601cc740ed39d4987f8b520bf4c12\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Jual</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/getideashop/admin1/index.php/sell/orders/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Penjualan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/getideashop/admin1/index.php/sell/orders/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Penjualan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/getideashop/admin1/index.php/sell/orders/invoices/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Invoice
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/getideashop/admin1/index.php/sell/orders/credit-slips/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Nota kredit
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/getideashop/admin1/index.php/sell/orders/delivery-slips/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Nota pengiriman
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminCarts&amp;token=d24c4ca036ad9713c79a20844709fa54\" class=\"link\"> Daftar belanja
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/getideashop/admin1/index.php/sell/catalog/products?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Katalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/getideashop/admin1/index.php/sell/catalog/products?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Produk
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/getideashop/admin1/index.php/sell/catalog/categories?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Kategori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/getideashop/admin1/index.php/sell/catalog/monitoring/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminAttributesGroups&amp;token=3824101ead3ae237f0e0b8f1d9c56678\" class=\"link\"> Atribut dan Fitur
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/getideashop/admin1/index.php/sell/catalog/brands/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Brand dan Supplier
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/getideashop/admin1/index.php/sell/attachments/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> File
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminCartRules&amp;token=860516b22cbcf5a0c7c9779af8403b93\" class=\"link\"> Diskon
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/getideashop/admin1/index.php/sell/stocks/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/getideashop/admin1/index.php/sell/customers/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Pelanggan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo -active\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/getideashop/admin1/index.php/sell/customers/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/getideashop/admin1/index.php/sell/addresses/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Alamat
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminCustomerThreads&amp;token=e7b89140e3c74f8bc2d2530baf40d8b4\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Layanan Pelanggan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminCustomerThreads&amp;token=e7b89140e3c74f8bc2d2530baf40d8b4\" class=\"link\"> Layanan Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/getideashop/admin1/index.php/sell/customer-service/order-messages/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Pesan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminReturn&amp;token=a5008524cfaa7838bcea13d2c6e74b48\" class=\"link\"> Retur barang
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminStats&amp;token=382cba72993630512b57d3fde7fa6af0\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistik
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Peningkatan</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/getideashop/admin1/index.php/improve/modules/manage?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modul
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/getideashop/admin1/index.php/improve/modules/manage?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/getideashop/admin1/index.php/modules/addons/modules/catalog?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Katalog Modul
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/getideashop/admin1/index.php/improve/design/themes/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Desain
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/getideashop/admin1/index.php/improve/design/themes/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/getideashop/admin1/index.php/modules/addons/themes/catalog?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Kumpulan Tema
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/getideashop/admin1/index.php/improve/design/mail_theme/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Tema email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/getideashop/admin1/index.php/improve/design/cms-pages/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Halaman
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/getideashop/admin1/index.php/improve/design/modules/positions/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Posisi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminImages&amp;token=2785b4eddf5161561d911adfebbe080e\" class=\"link\"> Pengaturan Gambar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/getideashop/admin1/index.php/modules/link-widget/list?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Link Widget
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminCarriers&amp;token=3265a9b0bd187fbc9140e041be035f17\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Pengiriman
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminCarriers&amp;token=3265a9b0bd187fbc9140e041be035f17\" class=\"link\"> Kurir
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/getideashop/admin1/index.php/improve/shipping/preferences?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Setting
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/getideashop/admin1/index.php/improve/payment/payment_methods?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pembayaran
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/getideashop/admin1/index.php/improve/payment/payment_methods?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Cara Pembayaran
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/getideashop/admin1/index.php/improve/payment/preferences?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Setting
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/getideashop/admin1/index.php/improve/international/localization/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internasional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/getideashop/admin1/index.php/improve/international/localization/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Pelokalan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminZones&amp;token=5594fa5820fe70d28561cc9aa68b8149\" class=\"link\"> Lokasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/getideashop/admin1/index.php/improve/international/taxes/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Pajak
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/getideashop/admin1/index.php/improve/international/translations/settings?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Terjemahan
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                    <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminEmarketing&amp;token=578f050c461084c90c133906b9e6122a\" class=\"link\">
                      <i class=\"material-icons mi-track_changes\">track_changes</i>
                      <span>
                      Advertising
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Konfigurasi</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/getideashop/admin1/index.php/configure/shop/preferences/preferences?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parameter Toko
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/getideashop/admin1/index.php/configure/shop/preferences/preferences?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Umum
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/getideashop/admin1/index.php/configure/shop/order-preferences/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Pengaturan Order
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/getideashop/admin1/index.php/configure/shop/product-preferences/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Produk
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/getideashop/admin1/index.php/configure/shop/customer-preferences/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Pengaturan Pelanggan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/getideashop/admin1/index.php/configure/shop/contacts/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Kontak
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/getideashop/admin1/index.php/configure/shop/seo-urls/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminSearchConf&amp;token=d227cc6fe0752b7125e02206706d3495\" class=\"link\"> Cari
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminGamification&amp;token=36232aa624e6d2331216166824ae5fd7\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/getideashop/admin1/index.php/configure/advanced/system-information/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parameter lanjutan
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/getideashop/admin1/index.php/configure/advanced/system-information/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Informasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/getideashop/admin1/index.php/configure/advanced/performance/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Kinerja
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/getideashop/admin1/index.php/configure/advanced/administration/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Administrasi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/getideashop/admin1/index.php/configure/advanced/emails/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/getideashop/admin1/index.php/configure/advanced/import/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Impor
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/getideashop/admin1/index.php/configure/advanced/employees/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Karyawan
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/getideashop/admin1/index.php/configure/advanced/sql-requests/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/getideashop/admin1/index.php/configure/advanced/logs/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Log
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/getideashop/admin1/index.php/configure/advanced/webservice-keys/?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Pelanggan</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Informasi berkaitan pelanggan J. DOE          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Bantuan\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/getideashop/admin1/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fid%252Fdoc%252FAdminCustomers%253Fversion%253D1.7.7.0%2526country%253Did/Bantuan?_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0\"
                   id=\"product_form_open_help\"
                >
                  Bantuan
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Modul dan layanan yang direkomendasikan',
        'Close': 'Tutup',
      },
      recommendedModulesUrl: '/getideashop/admin1/index.php/modules/addons/modules/recommended?tabClassName=AdminCustomers&_token=uy3_79NGnHW1AHgSDPoBlGx6eeEZDTUqRoj3XLVMli0',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1108
        $this->displayBlock('content_header', $context, $blocks);
        // line 1109
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1110
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1111
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1112
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, tidak!</h1>
  <p class=\"mt-3\">
    Versi seluler halaman ini belum tersedia.
  </p>
  <p class=\"mt-2\">
    Gunakan komputer desktop untuk mengakses halaman ini sampai halaman diadaptasikan untuk perangkat seluler.
  </p>
  <p class=\"mt-2\">
    Terima kasih.
  </p>
  <a href=\"http://localhost/getideashop/admin1/index.php?controller=AdminDashboard&amp;token=572601cc740ed39d4987f8b520bf4c12\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Kembali
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ID&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/id/login?email=1606109%40sttgarut.ac.id&amp;firstname=Syarif&amp;lastname=Hidayat&amp;website=http%3A%2F%2Flocalhost%2Fgetideashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/getideashop/admin1/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Hubungkan toko Anda dengan pasar PrestaShop guna mengimpor secara otomatis semua pembelian Addons Anda.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Tidak memiliki akun ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Temukan kelebihan PrestaShop Addons! Kunjungi marketplace resmi PrestaShop dan temukan lebih dari 3 500 modul dan theme inovatif yang dapat meningkatkan rate konversi, menaikan jumlah pengunjung, membangun kesetiaan pelanggan dan memaksimalkan produktivitas Anda</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Terhubung ke PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/id/forgot-your-password\">Lupa password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/id/login?email=1606109%40sttgarut.ac.id&amp;firstname=Syarif&amp;lastname=Hidayat&amp;website=http%3A%2F%2Flocalhost%2Fgetideashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tBuat akun
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Login
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
        // line 1219
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 104
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1108
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1109
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1110
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1111
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1219
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
        return "__string_template__21f500ed9fe1ae4324b8ac3df805d927764243c1403990a7eef68eacaebe68bf";
    }

    public function getDebugInfo()
    {
        return array (  1309 => 1219,  1304 => 1111,  1299 => 1110,  1294 => 1109,  1289 => 1108,  1280 => 104,  1272 => 1219,  1163 => 1112,  1160 => 1111,  1157 => 1110,  1154 => 1109,  1152 => 1108,  144 => 104,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__21f500ed9fe1ae4324b8ac3df805d927764243c1403990a7eef68eacaebe68bf", "");
    }
}
