<?php return [
    'plugin'      => [
        'name'        => 'Shopaholic',
        'description' => '🛍️ Kostenlose E-Commerce-Plugin mit einer großen Reihe von Erweiterungen.',
    ],
    'field'       => [
        'vendor_code'         => 'Herstellerkürzel',
        'price'               => 'Preis',
        'old_price'           => 'Alter Preis',
        'quantity'            => 'Menge',
        'brand'               => 'Marke',
        'offer'               => 'Produktangebote',
        'currency'            => 'Währung',
        'check_offer_active'  => 'When you receive a list of active products, check for active offers.',
        'additional_category' => 'Zusätzliche Kategorien',
        'promo_block_type'    => 'Promoblock mit Produktliste',
        'promo_block'         => 'Promoblock',
        'category_parent_id'  => 'Parent category ID',
        'children_category'   => 'Children categories',
        'product_id'          => 'Produkt ID',
        'rate'                => 'Rate',
        'tax_is_global'       => 'Tax will apply to all products',
        'tax_percent'         => 'Tax percent',
        'tax'                 => 'Tax',
        'without_tax'         => 'Without tax',
        'with_tax'            => 'With tax',
        'countries'           => 'Countries',
        'states'              => 'States',
        'main_price_type'     => 'Main price',
        'price_include_tax'   => 'Price includes taxes',
        'discount_price'      => 'Discount price',

        'hide_brand_import_from_csv'    => 'Hide "Import from CSV" button for brands',
        'hide_brand_import_from_xml'    => 'Hide "Import from XML" button for brands',
        'hide_category_import_from_csv' => 'Hide "Import from CSV" button for categories',
        'hide_category_import_from_xml' => 'Hide "Import from XML" button for categories',
        'hide_product_import_from_csv'  => 'Hide "Import from CSV" button for products',
        'hide_product_import_from_xml'  => 'Hide "Import from XML" button for products',
        'hide_offer_import_from_csv'    => 'Hide "Import from CSV" button for offers',
        'hide_offer_import_from_xml'    => 'Hide "Import from XML" button for offers',
        'hide_price_import_from_xml'    => 'Hide "Import from XML" button for prices',
    ],
    'settings'    => [
        'formula_calculate_discount_from_price'      => 'Formula of calculating discounts on prices with taxes',
        'formula_calculation_from_backend_price'     => 'Discount is deducted from backend price (default)',
        'formula_calculation_from_price_without_tax' => 'Discount is deducted from price without taxes',
        'formula_calculation_from_price_with_tax'    => 'Discount is deducted from price with taxes',
    ],
    'menu'        => [
        'main'                        => 'Katalog',
        'categories'                  => 'Kategorien',
        'product'                     => 'Produkte',
        'brands'                      => 'Marken',
        'shop_catalog'                => 'Produktkatalog',
        'shop_category'               => 'Produktkategorie',
        'all_shop_categories'         => 'Alle Produktkategorien',
        'promo_block'                 => 'Promoblöcke',
        'promo'                       => 'Beförderungen',
        'price_type'                  => 'Preistypen',
        'price_type_description'      => 'Manage price types',
        'currency'                    => 'Currency',
        'currency_description'        => 'Manage currencies',
        'tax'                         => 'Taxes',
        'tax_description'             => 'Manage taxes',
        'configuration'               => 'Catalog settings',
        'main_settings'               => 'Basic settings',
        'main_settings_description'   => 'Basic settings of your catalog',
        'import_xml_file'             => 'Import from XML',
        'import_xml_file_description' => 'Settings of import from XML file',
    ],
    'tab'         => [
        'offer'          => 'Trade offers',
        'price'          => 'Preise',
        'permissions'    => 'Shopaholic',
        'settings'       => 'Catalog configuration',
        'taxes'          => 'Taxes',
        'import_setting' => 'Import',
    ],
    'category'    => [
        'name'         => 'Kategorie',
        'list_title'   => 'Kategorienliste',
        'import_title' => 'Importiere Kategorien',
        'export_title' => 'Exportiere Kategorien',
    ],
    'brand'       => [
        'name'         => 'Marke',
        'list_title'   => 'Markenliste',
        'import_title' => 'Importiere Marken',
        'export_title' => 'Exportiere Marken',
    ],
    'product'     => [
        'name'         => 'Produktes',
        'list_title'   => 'Produktliste',
        'import_title' => 'Importiere Produkte',
        'export_title' => 'Exportiere Produkte',
    ],
    'offer'       => [
        'name'         => 'Produktangebotes',
        'list_title'   => 'Produktangeboteliste',
        'import_title' => 'Importiere Produktangebote',
        'export_title' => 'Exportiere Produktangebote',
    ],
    'promo_block' => [
        'name'       => 'Promoblockes',
        'list_title' => 'Promoblöckeliste',
    ],
    'price_type'  => [
        'name'       => 'price type',
        'list_title' => 'Price type list',
    ],
    'currency'    => [
        'name'       => 'currency',
        'list_title' => 'Currency list',
    ],
    'tax'         => [
        'name'       => 'tax',
        'list_title' => 'Tax list',
    ],
    'country'     => [
        'name'       => 'country',
        'list_title' => 'Länderliste',
    ],
    'state'       => [
        'name'       => 'state',
        'list_title' => 'State list',
    ],
    'component'   => [

        //Product components
        'product_page_name'            => 'Produktseite',
        'product_page_description'     => 'Daten für die Produktseite abrufen',
        'product_data_name'            => 'Produktdaten',
        'product_data_description'     => 'Produktdaten nach ID abrufen',
        'product_list_name'            => 'Produktliste',
        'product_list_description'     => 'Produktliste abrufen',

        //Brand components
        'brand_page_name'              => 'Markenseite',
        'brand_page_description'       => 'Daten für Markenseite abrufen',
        'brand_data_name'              => 'Markendaten',
        'brand_data_description'       => 'Markendaten nach ID abrufen',
        'brand_list_name'              => 'Markenliste',
        'brand_list_description'       => 'Markenübersicht abrufen',

        //Promo block components
        'promo_block_page_name'        => 'Promoblockseite',
        'promo_block_page_description' => 'Daten für Promoblockseite abrufen',
        'promo_block_data_name'        => 'Promoblockdaten',
        'promo_block_data_description' => 'Promoblöckeliste nach ID abrufen',
        'promo_block_list_name'        => 'Promoblöckeliste',
        'promo_block_list_description' => 'Promoblockeliste abrufen',

        //Category components
        'category_page_name'           => 'Kategorieseite',
        'category_page_description'    => 'Daten für Kategorieseite abrufen',
        'category_data_name'           => 'Kategoriedaten',
        'category_data_description'    => 'Kategoriedaten nach ID abrufen',
        'category_list_name'           => 'Kategorienliste',
        'category_list_description'    => 'Kategoriebaum abrufen',

        //Currency components
        'currency_list_name'           => 'Currency list',
        'currency_list_description'    => '',

        //Common components
        'breadcrumbs_name'             => 'Breadcrumbs',
        'breadcrumbs_description'      => 'Daten für Brotkrümel abrufen',

        //Components settings
        'product_list_sorting'         => 'Standardsortierung',
        'sorting_no'                   => 'Ohne Sortierung',
        'sorting_price_desc'           => 'Teuer',
        'sorting_price_asc'            => 'Billig',
        'sorting_new'                  => 'Neu',
        'sorting_popularity_desc'      => 'Populär',
        'sorting_rating_desc'          => 'Hohe Bewertung',
        'sorting_rating_asc'           => 'Niedrige Bewertung',
        'sorting_date_begin_asc'       => 'Datumsanfang (ASC)',
        'sorting_date_begin_desc'      => 'Datumsanfang (DESC)',
        'sorting_date_end_asc'         => 'Datumsende (ASC)',
        'sorting_date_end_desc'        => 'Datumsende (DESC)',
        'is_wildcard'                  => 'Wildcard',
    ],
    'permission'  => [
        'category'        => 'Kategorien verwalten',
        'brand'           => 'Marken verwalten',
        'product'         => 'Produkte verwalten',
        'settings'        => 'Einstellungen verwalten',
        'promo_block'     => 'Werbeblöcke verwalten',
        'currency'        => 'Manage currencies',
        'tax'             => 'Manage taxes',
        'price_type'      => 'Manage price types',
        'import_xml_file' => 'Manage settings of import from XML file',
    ],
    'message'     => [
        'import_additional_category_info'   => 'Set the list of additional product categories separated by commas.',
        'import_from_xml_files_is_disabled' => 'Import from XML files is disabled.',
        'import_from_xml_info'              => '<p>You can use <strong>XPath</strong> syntax to set path to elements.</p>',
    ],
    'button'      => [
        'import_offer_button'   => 'Importiere Angebote mit CSV',
        'import_offer_from_xml' => 'Import offers from XML',
        'import_price_from_xml' => 'Import prices from XML',
    ],
    'widget'      => [
        'import_from_xml_files' => 'Import from XML',
        'import_from_csv_files' => 'Import from CSV',
    ],
];
