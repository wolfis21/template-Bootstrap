<?php

//-------- For enums in Seeders --------
return [
    'company_status' => [
        'active'   => 'Идэвхитэй',
        'inactive' => 'Идэвхигүй',
    ],
    'roles' => [
        'admin'             => 'Админ',
        'business'          => 'Бизнес',
        'nonprofit'         => 'Ашгийн бус',
        'person'            => 'Харилцагч',
    ],

    'verification' => [
        'yes' => 'тийм',
        'no'  => 'үгүй',
    ],

    'type_user'               => [
        'normal'        => 'Хэвийн',
        'trusted'       => 'Итгэмжлэгдсэн',
    ],
    'type_preferences'        => [
        'string'             => 'Тэмдэгт',
        'date'               => 'Өдөр',
        'json'               => 'Жсон',
        'number'             => 'Тоо',
    ],
    'person_sex'            => [
        'female'          => 'Эмэгтэй',
        'male'            => 'Эрэгтэй',
    ],
    'type_categories'        => [
        'group'                 => 'Грүпп',
        'store'                 => 'Дэлгүүр',
    ],
    'product_conditions'    => [
        'new'                    => 'Шинэ',
        'refurbished'            => 'Шинэвтэр',
        'used'                   => 'Хэрэглэсэн',
    ],
    'order_status'            => [
        'cancelled'             => 'Буцаасан', /*orden eliminada por el usuario*/
        'closed'                => 'Хаасан', /**/
        'open'                  => 'Нээлттэй', /*orden abienta, en carrito, order,wish list*/
        'paid'                  => 'Төлбөр төлсөн', /**/
        'pending'               => 'Хүлээгдэж байгаа', /**/
        'received'              => 'Хүлээн авсан', /**/
        'sent'                  => 'Илгээсэн', /**/
    ],
    'participant_status'    => [
        'cancelled'             => 'Буцаасан',
        'registered'            => 'Бүртгүүлсэн',
        'winner'                => 'Хожсон',
    ],
    'source_types'            => [
        'tag'                     => 'Шошго',
        'order'                   => 'Захиалга',
        'free_product'            => 'free_product',
        'order_detail'            => 'Захиалгын мэдээлэл',
        'paypal'                  => 'Төлбөрийн мэдээлэл',
    ],
    'product_features'        => [
        'color'                 => 'Өнгө',
        'weight'                => 'Өргөн',
        'dimensions'            => '',
        'volume'                => 'Хэ',
        'video'                 => 'Видео',
        'brand'                 => 'Брэнд',
        'model'                 => 'Модел',
        'size'                  => 'Хэмжээ',
    ],
    'product_types'                => [
        'item'                    => 'ангилал',
        'key'                     => 'key',
        'software'                => 'програм хангамж',
        'software_key'            => 'software_key',
        'gift_card'               => 'бэлгийн карт',
        'freeproduct'             => 'freeproduct',
    ],
    'filters' => [
        'categories'   => 'Ангилал',
        'category'     => 'Ангилал',
        'brand'        => 'Брэнд',
        'brands'       => 'Брэнд',
        'color'        => 'Өнгө',
        'conditions'   => 'Нөхцөлүүд',
        'condition'    => 'Нөхцөл',
        'model'        => 'Загвар',
        'price'        => 'үнэ',
        'price_range'  => 'Үнийн хэмжээ',
        'size'         => 'Хэмжээ',
    ],
    'action_types'            => [
        //Orders
        ['id' => 1, 'source_type' => 'order', 'action' => 'open'],
        ['id' => 2, 'source_type' => 'order', 'action' => 'pending'],
        ['id' => 3, 'source_type' => 'order', 'action' => 'comment'],
        ['id' => 8, 'source_type' => 'order', 'action' => 'closed'],
        ['id' => 9, 'source_type' => 'order', 'action' => 'cancelled'],
        ['id' => 10, 'source_type' => 'order', 'action' => 'received'],
        ['id' => 11, 'source_type' => 'order', 'action' => 'sent'],
        ['id' => 14, 'source_type' => 'order', 'action' => 'rate'],
        ['id' => 15, 'source_type' => 'order', 'action' => 'processing'],
        //Checkout
        ['id' => 6, 'source_type' => 'order', 'action' => 'reload points'],
        ['id' => 7, 'source_type' => 'order', 'action' => 'check out'],
        //Order Details
        ['id' => 4, 'source_type' => 'order_detail', 'action' => 'create'],
        ['id' => 5, 'source_type' => 'order_detail', 'action' => 'update'],
        //Free Products
        ['id' => 12, 'source_type' => 'free_product', 'action' => 'check out'],
        //PayPal
        ['id' => 13, 'source_type' => 'paypal', 'action' => 'buy points'],
    ],
    //------------ Globals Traductions----------------
    'product_features'        => [
        'brand'                    => 'Брэнд',
        'color'                    => 'Өнгө',
        'dimensions'               => 'dimensions',
        'model'                    => 'Модел',
        'size'                     => 'Хэмжээ',
        'video'                    => 'Видео',
        'volume'                   => 'Пуу',
        'weight'                   => 'Өргөн',
    ],
    // --- contain the field to increase (product table) and the constant value, which will be sum to the actual value.
    'product_value_counters' => [
        'view' => '1',
        'sale' => '1',
    ],
    '404_error' => [
        'title'      => 'Хуудас олдсонгүй',
        'message_01' => 'Энэхүү хуудсанд таны хайж буй зүйлсийн илэрц олдсонгүй. Та өмнөх хуудсан руу шилжин харах боломжтой.',

        'link_01'    => 'you were',
        'message_02' => 'or head straight to our',
        'link_02'    => 'Нүүр хуудас',
    ],
    'footer' => [
        'title_info'             => 'Мэдээлэл',
        'customer_service'       => 'Харилцагчийн үйлчилгээ',
        'privacy_terms'          => 'Үйлчилгээний нөхцөл',
        'orders_returns'         => 'Захиалга болон буцаалт',
        'title_buy'              => 'Биднийг сонго',
        'shipping_returns'       => 'Хүргэлт ба буцаалт',
        'secure_shopping'        => 'Нууцлал',
        'international_shipping' => 'Олон улсын хүргэлт',
        'free_products'          => 'Free Products өдөр бүр',
        'business_sellers'       => 'Борлуулагч',
    ],
    //------------ Globals Traductions----------------
    'product_features'    => [
        'brand'         => 'Брэнд',
        'color'         => 'Өнгө',
        'dimensions'    => 'dimensions',
        'model'         => 'Модел',
        'size'          => 'Хэмжээ',
        'video'         => 'Видео',
        'volume'        => 'Дуу',
        'weight'        => 'Өргөн',
    ],
    // --- contain the field to increase (product table) and the constant value, which will be sum to the actual value.
    'product_value_counters' => [
        'view' => '1',
        'sale' => '1',
    ],
    '404_error' => [
        'title'      => 'Хуудас олдсонгүй',
        'message_01' => 'Энэхүү хуудсанд таны хайж буй зүйлсийн илэрц олдсонгүй. Та өмнөх хуудсан руу шилжин харах боломжтой.',
        'link_01'    => 'you were',
        'message_02' => 'or head straight to our',
        'link_02'    => 'Нүүр хуудасруу буцах',
    ],
  'faq'                    => 'FAQs',
  'cancel'                 => 'Буцах',
  'contact'                => 'Холбоо барих',
  'file'                   => 'Файл',
  'help'                   => 'Тусламж',
  'home'                   => 'Нүүр хуудас',
  'notices'                => 'Мэдэгдэл',
  'privacy'                => 'Нууцлал',
  'products'               => 'Бүтээгдэхүүн',
  'refine'                 => 'Сайжруулах',
  'refine_by'              => 'Сайжруулсан',
  'search'                 => 'Хайх',
  'searching'              => 'Хайх',
  'terms'                  => 'Нэр томъёо',
  'type'                   => 'Төрөл',
  'back_top'               => 'Дээш очих',
  'next'                   => 'Дараагийн',
  'previous'               => 'Өмнөх',
  'click_here'             => 'Энд дарна уу',
  'delete'                 => 'Устгах',
  'edit'                   => 'Засах',
  'new'                    => 'Шинэ',
  'save'                   => 'Хадгалах',
  'search_suggestion'      => 'Хайлтанд санал болгох',
  'disable'                => 'Идэвхигүй',
  'enable'                 => 'Идэвхжүүлэх',
  'active'                 => 'Идэвхитэй',
  'brand'                  => 'Брэнд',
  'inactive'               => 'Идэвхигүй',
  'status'                 => 'Статус',
  'integerValidate'        => 'бүхэл тоо байх ёстой',
  'numberValidate'         => 'тоо байх ёстой',
  'required'               => 'Шаардлагатай',
  'required_image'         => 'Зураг оруулах шаардлагатай',
  'urlValidate'            => 'холбоос буруу байна',
  'error'                  => 'Уучлаарай алдаа гарсан байна.',
  'fileErrorFormat'        => 'Файлын формат буруу байна',
  'not_access'             => 'Таньд нэвтэх эрх байхгүй байна.',
  'in'                     => 'дотор',
  'no'                     => 'үгүй',
  'sub'                    => 'Дэд',
  'to'                     => 'хүртэл',
  'total'                  => 'Нийт',
  'yes'                    => 'Тийм',
  'action'                 => 'Үйлдэл',
  'category'               => 'Ангилал',
  'description'            => 'Тайлбар',
  'error_not_available'    => 'Энэ агуулга байхгүй байна.',
  'file_does_not_exist'    => 'Файл байхгүй байна',
  'filter'                 => 'Шүүлт',
  'filtered'               => 'Шүүгдсэн',
  'filter_results'         => 'Шүүлтийн үр дүн',
  'induced_error'          => 'Зааврыг дага.',
  'name'                   => 'Нэр',
  'no_results'             => 'Үр дүн олдсонгүй',
  'personalize'            => 'Хувийн',
  'search_for'             => 'Хайсан',
  'searchResults'          => 'Хайлтын үр дүн',
  'see_more'               => 'Дэлгэрэнгүйг үзэх',
  'more'                   => 'Дэлгэрэнгүй',
  'send_to'                => 'Илгээх',
  'subcategories'          => 'Дэд ангилал',
  'with'                   => 'хамт',
  'worn_points'            => 'Зарцуулсан оноо',
  'rate'                   => 'Үнэлгээ',
  'due_date'               => 'Due on',
  'quantity'               => 'Тоо хэмжээ',
  'popular_tags'           => 'Бүтээгдэхүүний шошго',
  'actions_label'          => 'Үйлдэлүүд',
  'sign_in_label'          => 'Нэвтрэх',
  'reference_label'        => 'Лавлагаа',
  'change_label'           => 'Өөрчлөлт',
  'file_upload_error'      => "Уучлаарай файл хуулах үед алдаа гарлаа :MaxFilesize",
  'twitter_label'          => 'Twitter',
  'google_label'           => 'Google+',
  'facebook_label'         => 'Facebook',
  'about'                  => 'Бидний тухай',
  'all'                    => 'Бүгд',
  'comment'                => 'Сэтгэгдэл',
  'delivery'               => 'Хаана ч хүргэнэ',
  'events'                 => 'Удахгүй болох үйл явдал',
  'free'                   => 'Үнэгүй',
  'freeproducts'           => 'Үнэгүй',
  'newsletter'             => 'Сэтгүүл',
  'top_rated'              => 'Өндөр үнэлгээтэй',
  'image'                  => 'Зураг',
  'points_earned'          => 'Оноо',
  'close_label'            => 'Гарах',
  'customer_name'          => 'Хэрэглэгчийн нэр',
  'full_report'            => 'Бүрэн тайлан',
  'filtered'               => 'Шүүгдсэн',
  'location'               => 'Байршил',
  'suggested_categories'   => 'Санал болгох ангилал',
  'suggested_products'     => 'Санал болгох бараа',
  'barcode_error_msg'      => 'Барааны код буруу байна',
  'max_label'              => 'Их',
  'min_label'              => 'Бага',
  'go_label'               => 'Шүүх',
  'max_price_label'        => 'Их үнэ',
  'min_price_label'        => 'Бага үнэ',
  'your_search'            => 'Таны хайлт',
  'your_filter'            => 'Таны шүүлт',
  'message_no_filter'      => 'Trying changing one of the filters listed above to get a better result',
  'message_no_results_01'  => 'Бүтээгдэхүүний илэрц олдсонгүй',
  'message_no_results_02'  => 'Trying deleting one of the filters listed above to get a better result',
  'go_back_label'          => 'Буцах',
  'result_for'             => 'Үр дүн',
  'in_label'               => 'in',
  'by_label'               => 'by',
  'company_label'          => 'Компани',
  'social_label'           => 'Сошиал',
  'power_by_label'         => 'Powered By',
  'techstar_eCommerce'       => 'Techstar eCommerce',
  'validation_error_label' => 'Баталгаажуулалтын алдаа',
  'success_label'          => 'Амжилттай',
  'newsletter_email_error' => 'И-мэйл оруулах шаардлагатай!',
  'reach_us_msg'           => 'Мэйлээ бүртгүүлж шинэ мэдээлэл аваарай.',
  'send_a_email_label'     => 'Илгээх',
  'share_on_facebook'      => 'Хуваалцах',
  'share_on_twitter'       => 'Жиргэх',
];