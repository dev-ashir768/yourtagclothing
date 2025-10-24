<?php
include '../includes/header.php';
?>


<script src="https://assets.wordans.ca/assets/smarty/product_filter_functions-a249b13e59e8a3413aa52cb7d484b4f9e29fd370364747256c1e0cc713b73581.js"></script>

<script>
  const MAX_PRICE = 82.25;
  const MIN_PRICE = 2.5;
  const PARAM_PRICE_MAX = "price_max"
  const PARAM_PRICE_MIN = "price_min"
  const PARAM_SORT = "sort-order"
  const ROOT_URL = "/product"
  const COLORS_ARR = []
  const STYLE2_HASH = {}
  const CATEGORY_HASH = {
    "id": 37029,
    "name": "Blank Apparel | Accessories",
    "selected": true
  }
  const country = "CA";
  const language = "en";
  const currency = "CAD";
  const locale = `${language}-${country}`
  const FILTERS = {
    "categories": [37029],
    "brands": [],
    "gender": null,
    "style": 2729,
    "style2": null,
    "composition": null,
    "weight": null,
    "grammage": null,
    "options": [],
    "colors": [],
    "sizes": [],
    "attribute_values": [],
    "sort_order": {
      "order": 6,
      "name": "popularity",
      "uri": "popularity",
      "elastic_order": {
        "top_display": "desc",
        "nb_sales": "desc",
        "stock_sum": "desc",
        "_score": "desc"
      },
      "query": {
        "order": "models.top_display DESC, models.nb_sales DESC, models.stock_sum DESC"
      },
      "default": true
    },
    "search_text": null,
    "per_page": {
      "order": 5,
      "name": "show 40 items",
      "uri": 50,
      "default": true
    },
    "page": 1,
    "warehouses": [],
    "select": null,
    "price_max": null,
    "price_min": null,
    "groupings": []
  }
</script>
<script>
  jQuery(document).ready(() => {
    const toPrice = helpers.toPriceBy(locale, currency)
    const sliderEl = document.querySelector('tc-range-slider')
    sliderEl.generateLabelsFormat = (value) => {
      if (!value) return ''
      return toPrice(value)
    }
    const debouncedSetPrice = debounce(() => {
      const minPrice = sliderEl.value1
      const maxPrice = sliderEl.value2
      const store = Alpine && Alpine.store('plp')
      if (!store) return
      store.setPrice(minPrice, maxPrice)
    }, 300)
    sliderEl.addEventListener('change', debouncedSetPrice)
  })
</script>

<script src="/assets/js/rangeSlider.js" type="module"></script>
<link rel="stylesheet" href="/assets/css/range-slider.css" />
<link rel="stylesheet" href="/assets/css/pagination.css" />



<div id="pjax-container" itemscope="" itemprop="Product" itemtype="http://schema.org/Product">
  <span itemprop="name" content="T-Shirts wholesale and retail. "></span>
  <span itemprop="description" content="Cheap wholesale T-Shirts products. Bulk discounts, no minimum. Buy at crazy wholesale prices with fast shipping."></span>

  <section id="marketplace-container" class="marketplace-container new-design marketplace-category content !p-0" data-categories="categories" data-brands="brands" data-gender="gender" data-style="type" data-colors="colors" data-options="options" data-weight="weight" data-grammage="grammage" data-style2="type2" data-search="q" data-composition="composition" data-warehouses="warehouse" data-sort="sort-order" data-select="select" data-per_page="per-page" data-page="page" itemscope="" itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
    <span itemprop="ratingValue" content="4.61"></span>
    <span itemprop="ratingCount" content="283"></span>
    <span itemprop="bestRating" content="5.0"></span>

    <div class="wrapper product-container">


      <div class="breadcrumbs turbo-native-hidden">
        <nav class="mt-4 mb-0 md:my-4 py-0 text-sm text-center md:text-lg md:text-left text-[#969696] !font-['montserrat-medium']" itemscope itemtype="http://schema.org/BreadcrumbList" aria-label="Breadcrumb">
          <ol class="list-none p-0 flex flex-wrap items-center">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="">
              <a itemprop="item" href="https://yourtagclothing.com">
                <span class='text-[#969696]' itemprop='name'>Home</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="prepend-breadcrumb-chevron">
              <a itemprop="item" href="/other-apparel-accessories">
                <span class='text-[#969696]' itemprop='name'>Blank Apparel | Accessories</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="prepend-breadcrumb-chevron">
              <span aria-current="page">
                <span class='text-[#969696]' itemprop='name'>T-Shirts</span>
              </span>
              <meta itemprop="position" content="3" />
            </li>
          </ol>
        </nav>

      </div>


      <div>
        <form class="flex justify-between items-start mt-4 md:!mt-8" action="/product" accept-charset="UTF-8" method="post">



          <nav class="relative rounded-xl border border-none light-border md:border-solid md:bg-[#FAFBFD] mr-12 min-w-[241px] w-[241px]"
            x-data="{}"
            data-base-url="/product"
            id="product-filters">

            <div class="p-4 !hidden md:!block w-full">
              <div class="font-bold text-2xl text-dark-gray">Sort by</div>
              <select id="sort_by" class="border border-solid light-border rounded-xl w-full mt-4" @change="e =&gt; $store.plp.addSortFilter(&#39;sort-order&#39;, e.target.value)">
                <option default="default" selected="selected" value="popularity">Popularity</option>
                <option value="ascending-price">Ascending price</option>
                <option value="descending-price">Descending price</option>
                <option value="new-arrivals">New arrivals</option>
              </select>
            </div>

            <div class="p-4">
              <div class="justify-between pt-4 pb-2 flex">
                <div class="font-bold text-2xl text-special">Filters</div>
                <span class="text-xl text-another-blue underline cursor-pointer" @click="$store.plp.resetFilters()">
                  &laquo; Reset
                </span>
              </div>

              <div class="flex justify-between text-dark-blue font-bold md:font-normal md:text-gray-500 text-sm md:text-xl mb-2">
                <span class="!hidden md:!block">Selected</span>
                <span>609 results.</span>
              </div>

              <div class="flex flex-col">

                <div class="summary">



                  <div class="filter-tag">
                    Blank Apparel | Accessories
                    <a href="javascript:leaveCategory('blank-apparel-accessories-c37029')">
                      <i class="fa fa-times"></i>
                    </a>
                  </div>


                  <div class="filter-tag">
                    T-Shirts
                    <a href="javascript:leaveStyle('t-shirts-s2729')">
                      <i class="fa fa-times"></i>
                    </a>
                  </div>












                </div>

              </div>
            </div>

            <!-- This is a slider -->
            <div x-data="{ open: true }">
              <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                <a class="whitespace-nowrap text-purple- font-bold">Price</a>
                <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
              </div>

              <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />

              <div class="py-4 px-6"
                x-show="open"
                x-cloak
                x-transition>
                <tc-range-slider min="2.5"
                  max="82.25"
                  id="range-price-filter"
                  slider-bg-fill="#00228A"
                  slider-height="3px"
                  pointer-width="15px"
                  pointer-height="15px"
                  pointer-border="3px solid #00228A"
                  pointer-border-hover="3px solid #00228A"
                  pointer-border-focus="3px solid #00228A"
                  value1="2.5"
                  value2="82.25"
                  css-links="https://assets.wordans.ca/assets/range-slider-dd6f2f55b278c40f6282470ed1012642492779807d37e1d8d0f0a3e630cb92b4.css">
                </tc-range-slider>

                <div class="grid grid-cols-2 gap-10 mb-6 mt-4">
                  <div class="">
                    <span class="text-xl">From</span>
                    <div class="flex items-center">
                      <span class="border-l border-t border-b border-light-blue font-semibold text-xl text-gray-700 bg-white p-2 rounded-l-lg text-purple-">$</span>
                      <input type="number"
                        id="min-price-input"
                        min="2.5"
                        max="82.25"
                        class="min-amount p-2 rounded-r-lg font-semibold text-xl text-purple- border-y border-t border-b border-r border-light-blue"
                        value="2.5">
                    </div>
                  </div>
                  <div class="">
                    <span class="text-xl">To</span>
                    <div class="flex items-center">
                      <span class="border-l border-t border-b border-light-blue font-semibold text-xl text-gray-700 bg-white p-2 rounded-l-lg text-purple-">$</span>
                      <input type="number"
                        id="max-price-input"
                        min="2.5"
                        max="82.25"
                        class="max-amount p-2 rounded-r-lg font-semibold text-xl text-purple- border-y border-t border-b border-r border-light-blue"
                        value="82.25">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <script>
              const slider = document.getElementById('range-price-filter');
              const min_price = document.getElementById('min-price-input');
              const max_price = document.getElementById('max-price-input');

              slider.addEventListener('change', (evt) => {
                min_price.value = evt.detail.value1;
                max_price.value = evt.detail.value2;
              });

              min_price.addEventListener('change', (evt) => {
                slider.value1 = evt.target.value;
              });

              max_price.addEventListener('change', (evt) => {
                slider.value2 = evt.target.value;
              });
            </script>

            <div class="filter">
              <div x-data="{ open: true }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <a class="whitespace-nowrap text-purple- font-bold">
                    Color
                  </a>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />

                <div class="py-4 px-6" x-cloak="true" x-show="open" x-transition>

                  <div class="grid grid-cols-7 gap-4">



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/black-and-white-m66"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_Black and White"
                      style="background: linear-gradient(#ffffff, #000000)"
                      title="Black And White">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/turquoise-m65"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_Turquoise"
                      style="background: #40e0d0"
                      title="Turquoise">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/lime-green-m64"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_Lime Green"
                      style="background: #89f336"
                      title="Lime Green">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/beige-m61"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_Beige"
                      style="background: #d2b48c"
                      title="Beige">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/navy-blue-m41"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_Navy Blue"
                      style="background: #000080"
                      title="Navy Blue">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/burgundy-m56"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_Burgundy"
                      style="background: #800020"
                      title="Burgundy">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/red-m24"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_red"
                      style="background: #F40B11"
                      title="Red">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/pink-m21"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_pink"
                      style="background: #ffc0cb"
                      title="Pink">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/purple-m27"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_Purple"
                      style="background: #A020F0"
                      title="Purple">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/blue-m6"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_blue"
                      style="background: #1B22E1"
                      title="Blue">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/sky-blue-m60"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_Sky Blue"
                      style="background: #76d7ea"
                      title="Sky Blue">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/green-m15"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_green"
                      style="background: #008000"
                      title="Green">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/yellow-m33"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_yellow"
                      style="background: #FFFF00"
                      title="Yellow">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/orange-m18"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_orange"
                      style="background: #FFA500"
                      title="Orange">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/white-m30"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_white"
                      style="background: #fbfbfa"
                      title="White">
                      <i
                        class="absolute fa fa-check text-dark-blue font-bold top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/brown-m9"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_brown"
                      style="background: #562508"
                      title="Brown">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/khaki-m53"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_Khaki"
                      style="background: #a9a56c"
                      title="Khaki">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/black-m3"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_black"
                      style="background: #000000"
                      title="Black">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      href="/blank-apparel-accessories-c37029/t-shirts-s2729/gray-m12"
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      for="color_gray"
                      style="background: #808080"
                      title="Gray">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Size</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class="grid grid-cols-5 gap-2 ">


                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/t-shirts-s2729/xs-x7">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>XS</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/t-shirts-s2729/s-x1">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>S</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/t-shirts-s2729/m-x2">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>M</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/t-shirts-s2729/l-x3">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>L</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/t-shirts-s2729/xl-x4">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/t-shirts-s2729/2xl-x5">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>2XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/t-shirts-s2729/3xl-x6">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>3XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/t-shirts-s2729/4xl-x10">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>4XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/t-shirts-s2729/5xl-x11">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>5XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/t-shirts-s2729/6xl-x9">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>6XL</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Gender - Age</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/baby-g16549">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Baby</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/boys-g44705">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Boys</span>
                        <span class="small">(68)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/geek-g4724">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Geek</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/girls-g44706">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Girls</span>
                        <span class="small">(66)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/kids-g10">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Kids</span>
                        <span class="small">(65)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/men-g27">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Men</span>
                        <span class="small">(382)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/unisex-g4789">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Unisex</span>
                        <span class="small">(258)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/women-g24">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Women</span>
                        <span class="small">(407)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>




            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Type</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/body-s43733">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Body</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/crop-top-s43730">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Crop top</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/polo-s22095">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polo</span>
                        <span class="small">(185)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/tank-top-s21951">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Tank Top</span>
                        <span class="small">(40)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Brands</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>
                  <div class="wordans-search-box after:!top-[7px] my-4 relative" role="search">
                    <input
                      type="search"
                      x-model="search"
                      class="form-control input- !h-[35px] !rounded-xl text-xl"
                      placeholder="Search">
                  </div>



                  <div class=" max-h-52 overflow-y-auto">


                    <div
                      x-show="search === '' || &quot;allpro&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/allpro-b72741/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>AllPro</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;american apparel&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/american-apparel-b30/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>American Apparel</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;anvil&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/anvil-b9315/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Anvil</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;bella+canvas&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/bella-canvas-b47/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Bella+Canvas</span>
                        <span class="small">(48)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;blank activewear&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/blank-activewear-b44037/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Blank Activewear</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;c2 sport&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/c2-sport-b21257/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>C2 Sport</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;champion&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/champion-b21311/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Champion</span>
                        <span class="small">(41)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;columbia golf&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/columbia-golf-b43776/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Columbia Golf</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;comfort colors&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/comfort-colors-b21528/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Comfort Colors</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;core365&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/core365-b16798/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Core365</span>
                        <span class="small">(31)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;csw 24/7&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/csw-24-7-b44616/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>CSW 24/7</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;cx2&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/cx2-b44617/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>CX2</span>
                        <span class="small">(26)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;cx2 hivis&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/cx2-hivis-b44619', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>CX2 Hivis</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;devon \u0026 jones&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/devon-jones-b22073/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Devon &amp; Jones</span>
                        <span class="small">(24)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;elevate&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/elevate-b23498/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Elevate</span>
                        <span class="small">(27)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;fleece factory&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/fleece-factory-b44791', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Fleece Factory</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;fruit of the loom&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/fruit-of-the-loom-b6348/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Fruit of the Loom</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;g-lyn&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/g-lyn-b44784', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>G-Lyn</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;gildan&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/gildan-b34/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Gildan</span>
                        <span class="small">(75)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;harriton&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/harriton-b22064/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Harriton</span>
                        <span class="small">(34)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;jerzees&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/jerzees-b16792/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jerzees</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;king athletics&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/king-athletics-b4787/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>King Athletics</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;king fashion&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/king-fashion-b72657/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>King Fashion</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;lat&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/lat-b21734', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>LAT</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;los angeles apparel&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/los-angeles-apparel-b44783/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Los Angeles Apparel</span>
                        <span class="small">(22)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;m\u0026o&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/m-o-b72659/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>M&amp;O</span>
                        <span class="small">(21)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;muskoka trail&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/muskoka-trail-b44618/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Muskoka Trail</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;next level&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/next-level-b21317/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Next Level</span>
                        <span class="small">(58)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;next level apparel&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/next-level-apparel-b44139/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Next Level Apparel</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;north end&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/north-end-b22049/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>North End</span>
                        <span class="small">(11)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;north end sport red&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/north-end-sport-red-b22061/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>North End Sport Red</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;on tour&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/on-tour-b23492/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>On Tour</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;rabbit skins&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/rabbit-skins-b17071/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Rabbit Skins</span>
                        <span class="small">(11)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;radsow&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/radsow-b43791/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Radsow</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;roly&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/roly-b23095/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Roly</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;russell athletic&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/russell-athletic-b23156', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Russell Athletic</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;spyder&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/spyder-b44009', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Spyder</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;team 365&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/team-365-b22052/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Team 365</span>
                        <span class="small">(22)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;threadfast&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/threadfast-b23792/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Threadfast</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;trimark&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/trimark-b72655/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Trimark</span>
                        <span class="small">(30)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;vancouver apparel&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/vancouver-apparel-b44785/t-shirts-s2729">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Vancouver Apparel</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Warehouse</a>
                    <a target="_blank" href="/display/shipping_information">
                      <img class="w-8 h-8" alt="Shipping Information" loading="lazy" src="https://assets.wordans.ca/assets/wordans_2024/information_darkblue-33301292e59931b1e79eff30283b02e91e49ed24962b612029ceaf01e6d9abbc.svg" />
                    </a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww1', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W1</span>
                        <span class="small">(138)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww2', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W2</span>
                        <span class="small">(98)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww3', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W3</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww5', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W5</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww6', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W6</span>
                        <span class="small">(38)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww7', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W7</span>
                        <span class="small">(52)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww11', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W11</span>
                        <span class="small">(64)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww12', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W12</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww13', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W13</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww14', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W14</span>
                        <span class="small">(197)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Weight</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/grammage-195-9999', 'grammage')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>195g/m² and over</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/grammage-145-165', 'grammage')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>from 145 to 165g/m²</span>
                        <span class="small">(46)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/grammage-165-195', 'grammage')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>from 165 to 195g/m²</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/grammage-0-145', 'grammage')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>up to 145g/m²</span>
                        <span class="small">(20)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Characteristic</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/custom-o47">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Custom</span>
                        <span class="small">(133)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/high-stock-o50', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>High Stock</span>
                        <span class="small">(256)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/made-in-usa-o52', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Made in USA</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/organic-o5', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Organic</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/recycled-o48', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Recycled</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/sublimation-o66', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sublimation</span>
                        <span class="small">(103)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/tagless-o6', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Tagless</span>
                        <span class="small">(42)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/tear-away-o2', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Tear Away</span>
                        <span class="small">(127)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/thermal-o65', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Thermal</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Sleeves</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="#">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>3/4 sleeves</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/half-sleeves-a5896', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Half sleeves</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/long-sleeves-a5892">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Long sleeves</span>
                        <span class="small">(110)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/short-sleeves-a5893">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Short sleeves</span>
                        <span class="small">(270)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="#">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sleeveless</span>
                        <span class="small">(43)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Pattern</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="#">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Raglan</span>
                        <span class="small">(16)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/ringer-a5948">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Ringer</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/striped-a5922', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Striped</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/tie-dye-a5919', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Tie Dye</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/varsity-a5928', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Varsity</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/vintage-a5920">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Vintage</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Fabric</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>
                  <div class="wordans-search-box after:!top-[7px] my-4 relative" role="search">
                    <input
                      type="search"
                      x-model="search"
                      class="form-control input- !h-[35px] !rounded-xl text-xl"
                      placeholder="Search">
                  </div>



                  <div class=" max-h-52 overflow-y-auto">


                    <div
                      x-show="search === '' || &quot;100% cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/100-cotton-a118">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>100% cotton</span>
                        <span class="small">(100)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;100% polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/100-polyester-a181">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>100% polyester</span>
                        <span class="small">(110)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;50% cotton - 50% polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/50-cotton-50-polyester-a319', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>50% cotton - 50% polyester</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;50/50 cotton-poly&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/50-50-cotton-poly-a7">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>50/50 cotton-poly</span>
                        <span class="small">(14)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;51-79% cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/51-79-cotton-a109">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>51-79% cotton</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;60/40 cotton/polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/60-40-cotton-polyester-a925', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>60/40 cotton/polyester</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;65% polyester/35% cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/65-polyester-35-cotton-a928', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>65% polyester/35% cotton</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;coton-polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/coton-polyester-a136">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Coton-polyester</span>
                        <span class="small">(20)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/cotton-a103">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Cotton</span>
                        <span class="small">(248)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;cotton poly lycra&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/cotton-poly-lycra-a577', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Cotton poly lycra</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;heather&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/heather-a5937">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Heather</span>
                        <span class="small">(85)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;jersey&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/jersey-a5931">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jersey</span>
                        <span class="small">(83)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;jersey - blend&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/jersey-blend-a610">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jersey - blend</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;knit&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/knit-a5933">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Knit</span>
                        <span class="small">(66)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;mesh&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/mesh-a5936">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Mesh</span>
                        <span class="small">(19)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;nylon&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/nylon-a298">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Nylon</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;pique&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/pique-a5939">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pique</span>
                        <span class="small">(37)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;pique - blend&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/pique-blend-a565">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pique - blend</span>
                        <span class="small">(9)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;pique -cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/pique-cotton-a538">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pique -cotton</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;poly-cotton-rayon&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/poly-cotton-rayon-a124">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Poly-cotton-rayon</span>
                        <span class="small">(11)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;poly-elastane&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/poly-elastane-a1334">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Poly-elastane</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/polyester-a145">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester</span>
                        <span class="small">(224)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;polyester mesh&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/polyester-mesh-a664">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester mesh</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;polyester-viscose&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/polyester-viscose-a502">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester-viscose</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;soft&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/soft-a5938">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Soft</span>
                        <span class="small">(71)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;terry&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/terry-a5940">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Terry</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;triblend&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/triblend-a1328">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Triblend</span>
                        <span class="small">(25)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;viscose&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/viscose-a1342', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Viscose</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Neck</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/crew-neck-a22">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Crew Neck</span>
                        <span class="small">(307)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/deep-v-neck-a499', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Deep v-neck</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/henley-a523">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Henley</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/scoop-neck-a127">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Scoop Neck</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/v-neck-a211">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>V-neck</span>
                        <span class="small">(40)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Weight</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/3-oz-a247', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>3 oz.</span>
                        <span class="small">(21)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/4-oz-a58', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>4 oz.</span>
                        <span class="small">(43)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/5-oz-a67', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>5 oz.</span>
                        <span class="small">(24)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/6-oz-a283', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>6 oz.</span>
                        <span class="small">(19)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/heavyweight-a334', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Heavyweight</span>
                        <span class="small">(18)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/lightweight-a397', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Lightweight</span>
                        <span class="small">(37)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Use</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/baseball-a5909">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Baseball</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/casual-a5911">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Casual</span>
                        <span class="small">(41)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/cycling-a5913', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Cycling</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/football-a5903">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Football</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/formal-a5912">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Formal</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/golf-a5905">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Golf</span>
                        <span class="small">(24)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/gym-a5904">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Gym</span>
                        <span class="small">(15)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/hi-vis-a5918', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Hi vis</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/outdoor-a5917">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Outdoor</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/running-a790">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Running</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/sport-performance-a5907">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sport / Performance</span>
                        <span class="small">(118)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/work-professional-a5908">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Work / Professional</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Treatment</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/anti-microbial-a958', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Anti-Microbial</span>
                        <span class="small">(18)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/easy-care-a955', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Easy Care</span>
                        <span class="small">(34)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/moisture-wicking-a934', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Moisture Wicking</span>
                        <span class="small">(54)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/snag-resistant-a940', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Snag Resistant</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/stain-resistant-a946', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Stain Resistant</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/upf-sun-protection-a961', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>UPF Sun Protection</span>
                        <span class="small">(25)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/wrinkle-resistant-a949', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Wrinkle Resistant</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Feature</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/buttons-a973">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Buttons</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/pocket-a964">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pocket</span>
                        <span class="small">(35)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="filter">
              <div x-data="{ open: true, search: '' }">
                <div class="cursor-pointer flex justify-between items-center px-4 py-6" @click="open = !open">
                  <div class="flex items-center gap-2">
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Fit</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/boxy-a5883">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Boxy</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/fitted-a5890">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Fitted</span>
                        <span class="small">(27)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/loose-fit-a5885">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Loose fit</span>
                        <span class="small">(16)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/muscle-fit-a5889">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Muscle fit</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/oversized-a5891">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Oversized</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/t-shirts-s2729/slim-fit-a5886">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Slim fit</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <style>
              .filter:first-of-type hr {
                display: none;
              }
            </style>
          </nav>


          <div class="w-full md:!mr-0 !px-0">





            <h1 class="mt-3 mb-4 text-xl font-bold text-center md:text-left md:text-4xl text-dark-blue">T-Shirts <span class="text-gray-500 font-normal">wholesale and retail</span> </h1>



            <div class="flex items-center justify-between">
              <div class="font-normal text-gray-500">609 results.</div>
              <div class="pagination-container top wordans-pagination pagination-footer">
                <div role="navigation" aria-label="Pagination" class="pagination-new"><span class="previous_page disabled" aria-label="Previous page"><img class="previous-label-icon" alt="Previous" src="https://assets.wordans.ca/assets/wordans_2024/chevron_left-ec55170ac6eb8dd95bfc0172c65c4517b42222254c8087e00fb35e17106b6b6b.svg" /></span> <em class="current">1</em> <a rel="next" href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=2">2</a> <a href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=3">3</a> <span class="gap"></span> <a href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=13">13</a> <a class="next_page" aria-label="Next page" rel="next" href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=2"><img class="next-label-icon" alt="Next" src="https://assets.wordans.ca/assets/wordans_2024/chevron_right-88b7140327f3e7abe94fcc6199c61fac16ace4221cd57aab1d1b6fbe2bf2f58a.svg" /></a></div>
              </div>
            </div>


            <turbo-frame
              id="products-grid"
              data-turbo-action="append"
              class="grid grid-cols-2 gap-5 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 md:mx-0">


              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Roly CA6424 - ATOMIC 150 Tubular short-sleeve t-shirt" data-turbo="false" id="45388" href="/roly-ca6424-atomic-150-tubular-short-sleeve-t-shirt-45388">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/4/21/45388/45388_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738755357" alt="Roly CA6424 - ATOMIC 150 Tubular short-sleeve t-shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="45388"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(45388, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                          <div class="font-bold text-[#EA1F8E] bg-[#FFE0F6] capitalize inline-tag tag">
                            <span>
                              Buy 5 for 4
                            </span>
                          </div>


                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=45388', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $2.99
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$9.67</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -69%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Roly CA6424
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        ATOMIC 150 Tubular short-sleeve t-shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Roly CA0408 - Womens CONTROL-DRY Raglan Performance T-Shirt" data-turbo="false" id="447420" href="/roly-ca0408-women-s-control-dry-raglan-performance-t-shirt-447420">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2019/7/16/447420/447420_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738764530" alt="Roly CA0408 - Womens CONTROL-DRY Raglan Performance T-Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="447420"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(447420, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                          <div class="font-bold text-[#EA1F8E] bg-[#FFE0F6] capitalize inline-tag tag">
                            <span>
                              Buy 5 for 4
                            </span>
                          </div>


                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=447420', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $2.50
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$7.19</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -65%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Roly CA0408
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Women&#39;s CONTROL-DRY Raglan Performance T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/825.gif" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Roly CA7129 - PolyCotton Touch Sublimation Tee with Ribbed Crew Neck" data-turbo="false" id="45463" href="/roly-ca7129-polycotton-touch-sublimation-tee-with-ribbed-crew-neck-45463">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/4/21/45463/45463_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738764484" alt="Roly CA7129 - PolyCotton Touch Sublimation Tee with Ribbed Crew Neck" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="45463"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(45463, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                          <div class="font-bold text-[#EA1F8E] bg-[#FFE0F6] capitalize inline-tag tag">
                            <span>
                              Buy 5 for 4
                            </span>
                          </div>


                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=45463', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.99
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$6.95</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -28%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Roly CA7129
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        PolyCotton Touch Sublimation Tee with Ribbed Crew Neck
                      </div>
                    </h3>


                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Rabbit Skins RS3301 - Toddler Jersey Short-Sleeve T-Shirt" data-turbo="false" id="12346" href="/rabbit-skins-rs3301-toddler-jersey-short-sleeve-t-shirt-12346">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2014/10/1/12346/12346_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732037861" alt="Rabbit Skins RS3301 - Toddler Jersey Short-Sleeve T-Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="12346"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(12346, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=12346', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.69
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$6.40</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -42%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Rabbit Skins RS3301
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Toddler Jersey Short-Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Roly CA6687 - Stylish Cropped Loose-Fit Womens Short-Sleeve Tee" data-turbo="false" id="447726" href="/roly-ca6687-stylish-cropped-loose-fit-women-s-short-sleeve-tee-447726">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2019/7/16/447726/447726_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738764759" alt="Roly CA6687 - Stylish Cropped Loose-Fit Womens Short-Sleeve Tee" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="447726"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(447726, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                          <div class="font-bold text-[#EA1F8E] bg-[#FFE0F6] capitalize inline-tag tag">
                            <span>
                              Buy 5 for 4
                            </span>
                          </div>


                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=447726', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.99
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$9.94</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -60%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Roly CA6687
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Stylish Cropped Loose-Fit Women&#39;s Short-Sleeve Tee
                      </div>
                    </h3>


                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Rabbit Skins 3321 - Fine Jersey Toddler T-Shirt" data-turbo="false" id="26807" href="/rabbit-skins-3321-fine-jersey-toddler-t-shirt-26807">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/26807/26807_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732196817" alt="Rabbit Skins 3321 - Fine Jersey Toddler T-Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="26807"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(26807, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=26807', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $5.79
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.52</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -32%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Rabbit Skins 3321
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Fine Jersey Toddler T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+20 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan 5000 - Premium Heavy Cotton Classic Fit T-Shirt for Adults" data-turbo="false" id="160" href="/gildan-5000-premium-heavy-cotton-classic-fit-t-shirt-for-adults-160">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2010/12/1/160/160_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1743712363" alt="Gildan 5000 - Premium Heavy Cotton Classic Fit T-Shirt for Adults" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="160"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(160, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=160', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $2.97
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$6.74</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -56%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 5000
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Heavy Cotton Classic Fit T-Shirt for Adults
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/22.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+65 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Rabbit Skins 3401 - Infant Short-Sleeve Jersey T-Shirt" data-turbo="false" id="12304" href="/rabbit-skins-3401-infant-short-sleeve-jersey-t-shirt-12304">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/10/1/12304/12304_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742970824" alt="Rabbit Skins 3401 - Infant Short-Sleeve Jersey T-Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="12304"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(12304, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=12304', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.45
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$6.40</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -30%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Rabbit Skins 3401
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Infant Short-Sleeve Jersey T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Jerzees 29M - Heavyweight Blend T-Shirt" data-turbo="false" id="9760" href="/jerzees-29m-heavyweight-blend-t-shirt-9760">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2014/8/27/9760/9760_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732020368" alt="Jerzees 29M - Heavyweight Blend T-Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="9760"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(9760, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=9760', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.77
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$7.90</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -52%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Jerzees 29M
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Heavyweight Blend T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/48.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+7 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan 2000 - Sustainable Ultra Cotton Comfort T-Shirt" data-turbo="false" id="265" href="/gildan-2000-sustainable-ultra-cotton-comfort-t-shirt-265">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2010/12/1/265/265_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1743707544" alt="Gildan 2000 - Sustainable Ultra Cotton Comfort T-Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="265"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(265, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=265', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.80
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.14</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -53%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 2000
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Sustainable Ultra Cotton Comfort T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/22.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+48 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Rabbit Skins 4424 - Fine Jersey Infant Lap Shoulder Creeper" data-turbo="false" id="26852" href="/rabbit-skins-4424-fine-jersey-infant-lap-shoulder-creeper-26852">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/26852/26852_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732196996" alt="Rabbit Skins 4424 - Fine Jersey Infant Lap Shoulder Creeper" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="26852"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(26852, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=26852', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $5.89
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$10.24</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -42%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Rabbit Skins 4424
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Fine Jersey Infant Lap Shoulder Creeper
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+11 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Rabbit Skins 3322 - Fine Jersey Infant T-Shirt" data-turbo="false" id="26810" href="/rabbit-skins-3322-fine-jersey-infant-t-shirt-26810">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/26810/26810_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732196833" alt="Rabbit Skins 3322 - Fine Jersey Infant T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="26810"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(26810, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=26810', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $5.58
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.52</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -35%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Rabbit Skins 3322
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Fine Jersey Infant T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="gildan t-shirts for men army green" data-turbo="false" id="25344" href="/gildan-64000-softstyle-t-shirt-for-men-and-women-comfortable-and-durable-25344">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/28/25344/25344_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732193188" alt="gildan t-shirts for men army green" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25344"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25344, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25344', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.56
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$7.70</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -54%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 64000
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Softstyle T-Shirt for Men and Women - Comfortable and Durable
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/22.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+41 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="JERZEES 29MR - Heavyweight Blend™ 50/50 T-Shirt" data-turbo="false" id="25829" href="/jerzees-29mr-heavyweight-blend-50-50-t-shirt-25829">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/25829/25829_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732194466" alt="JERZEES 29MR - Heavyweight Blend™ 50/50 T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25829"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25829, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25829', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.63
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$4.96</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -27%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        JERZEES 29MR
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Heavyweight Blend™ 50/50 T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/264.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/306.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/341.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Rabbit Skins 4400 - Infant Lap Shoulder Creeper" data-turbo="false" id="26837" href="/rabbit-skins-4400-infant-lap-shoulder-creeper-26837">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/26837/26837_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732196948" alt="Rabbit Skins 4400 - Infant Lap Shoulder Creeper" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="26837"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(26837, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=26837', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $6.55
                      </span>



                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Rabbit Skins 4400
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Infant Lap Shoulder Creeper
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/162.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/296.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/16461.txt" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="gildan t-shirts for men army green" data-turbo="false" id="26543" href="/next-level-6210-premium-fitted-cvc-crew-26543">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/26543/26543_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732196332" alt="gildan t-shirts for men army green" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="26543"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(26543, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=26543', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $9.11
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$15.80</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -42%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Next Level 6210
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Fitted CVC Crew
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/38.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+39 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="gildan t-shirts for men dark green" data-turbo="false" id="11206" href="/gildan-g640-softstyle-ringspun-cotton-comfort-tee-11206">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/11206/11206_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742946008" alt="gildan t-shirts for men dark green" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="11206"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(11206, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=11206', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.56
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$7.70</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -54%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan G640
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Softstyle® Ringspun Cotton Comfort Tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/22.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+45 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Rabbit Skins 3311 - Toddler 5.5 oz. Jersey Long-Sleeve T-Shirt" data-turbo="false" id="12295" href="/rabbit-skins-3311-toddler-5-5-oz-jersey-long-sleeve-t-shirt-12295">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/10/1/12295/12295_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742970818" alt="Rabbit Skins 3311 - Toddler 5.5 oz. Jersey Long-Sleeve T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="12295"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(12295, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=12295', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.00
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$11.80</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -41%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Rabbit Skins 3311
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Toddler 5.5 oz. Jersey Long-Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Bella+Canvas 3001C - Jersey Short-Sleeve T-Shirt" data-turbo="false" id="9766" href="/bella-canvas-3001c-jersey-short-sleeve-t-shirt-9766">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2014/8/27/9766/9766_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732020394" alt="Bella+Canvas 3001C - Jersey Short-Sleeve T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="9766"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(9766, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <div class="bestseller tag">
                            <div class="circle">
                              <span class="copy">
                                Best Seller
                              </span>
                            </div>
                          </div>
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=9766', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $8.46
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$16.96</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -50%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Bella+Canvas 3001C
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Jersey Short-Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/29.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+59 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Next Level 1533 - Womens Ideal Racerback Tank" data-turbo="false" id="38262" href="/next-level-1533-women-s-ideal-racerback-tank-38262">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/1/6/38262/38262_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732485090" alt="Next Level 1533 - Womens Ideal Racerback Tank" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="38262"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(38262, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <div class="bestseller tag">
                            <div class="circle">
                              <span class="copy">
                                Best Seller
                              </span>
                            </div>
                          </div>
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=38262', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $6.01
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$11.34</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -47%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Next Level 1533
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Women&#39;s Ideal Racerback Tank
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+24 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Rabbit Skins 3301T - Toddler Short Sleeve T-Shirt" data-turbo="false" id="26789" href="/rabbit-skins-3301t-toddler-short-sleeve-t-shirt-26789">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/26789/26789_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732196726" alt="Rabbit Skins 3301T - Toddler Short Sleeve T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="26789"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(26789, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=26789', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.69
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$4.68</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -21%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Rabbit Skins 3301T
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Toddler Short Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/101.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/115.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/154.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+6 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan 2400 - Ultra Cotton Long Sleeve Classic Tee" data-turbo="false" id="25745" href="/gildan-2400-ultra-cotton-long-sleeve-classic-tee-25745">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/25745/25745_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732194244" alt="Gildan 2400 - Ultra Cotton Long Sleeve Classic Tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25745"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25745, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25745', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $6.54
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$13.92</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -53%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 2400
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ultra Cotton Long Sleeve Classic Tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+24 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan 8000 - Classic Fit - DryBlend® - Moisture-Wicking T-Shirt" data-turbo="false" id="25374" href="/gildan-8000-classic-fit-dryblend-moisture-wicking-t-shirt-25374">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/28/25374/25374_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732193326" alt="Gildan 8000 - Classic Fit - DryBlend® - Moisture-Wicking T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25374"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25374, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25374', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.55
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.18</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -57%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 8000
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Classic Fit - DryBlend® - Moisture-Wicking T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+35 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="JERZEES 29LSR - Heavyweight Blend™ 50/50 Long Sleeve T-Shirt" data-turbo="false" id="25738" href="/jerzees-29lsr-heavyweight-blend-50-50-long-sleeve-t-shirt-25738">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/25738/25738_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732194212" alt="JERZEES 29LSR - Heavyweight Blend™ 50/50 Long Sleeve T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25738"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25738, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25738', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $6.16
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.90</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -31%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        JERZEES 29LSR
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Heavyweight Blend™ 50/50 Long Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/175.png" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/202.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/264.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+10 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Jerzees 29L - 5.6 oz., 50/50 Heavyweight Blend™ Long-Sleeve T-Shirt" data-turbo="false" id="9757" href="/jerzees-29l-5-6-oz-50-50-heavyweight-blend-long-sleeve-t-shirt-9757">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2014/8/27/9757/9757_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732020352" alt="Jerzees 29L - 5.6 oz., 50/50 Heavyweight Blend™ Long-Sleeve T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="9757"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(9757, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=9757', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.03
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$13.40</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -48%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Jerzees 29L
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        5.6 oz., 50/50 Heavyweight Blend™ Long-Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Next Level 1540 - Women’s Lightweight Combed Cotton V-Neck Tee" data-turbo="false" id="38265" href="/next-level-1540-women-s-lightweight-combed-cotton-v-neck-tee-38265">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/1/6/38265/38265_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732485138" alt="Next Level 1540 - Women’s Lightweight Combed Cotton V-Neck Tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="38265"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(38265, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=38265', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $5.29
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$12.32</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -57%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Next Level 1540
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Women’s Lightweight Combed Cotton V-Neck Tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+23 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Gildan G500 - Heavy Cotton™ All-Purpose Comfortable Fit T-Shirt" data-turbo="false" id="11197" href="/gildan-g500-heavy-cotton-all-purpose-comfortable-fit-t-shirt-11197">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/11197/11197_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945985" alt="Gildan G500 - Heavy Cotton™ All-Purpose Comfortable Fit T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="11197"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(11197, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=11197', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.12
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$6.74</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -54%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan G500
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Heavy Cotton™ All-Purpose Comfortable Fit T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/22.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+66 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan G510P - Sustainable Heavy Cotton Toddler T-Shirt" data-turbo="false" id="29747" href="/gildan-g510p-sustainable-heavy-cotton-toddler-t-shirt-29747">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29747/29747_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732198842" alt="Gildan G510P - Sustainable Heavy Cotton Toddler T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29747"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29747, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29747', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.15
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$7.32</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -57%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan G510P
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Sustainable Heavy Cotton Toddler T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+5 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan 5000B - Heavyweight Cotton Youth T-Shirt" data-turbo="false" id="257" href="/gildan-5000b-heavyweight-cotton-youth-t-shirt-257">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2010/12/1/257/257_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1743712705" alt="Gildan 5000B - Heavyweight Cotton Youth T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="257"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(257, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=257', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.02
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$5.92</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -49%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 5000B
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Heavyweight Cotton Youth T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/22.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+37 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Bella+Canvas 3001CVC -  Unisex Heather T-Shirt" data-turbo="false" id="432606" href="/bella-canvas-3001cvc-unisex-heather-t-shirt-432606">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2018/12/27/432606/432606_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742972127" alt="Bella+Canvas 3001CVC -  Unisex Heather T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="432606"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(432606, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=432606', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $8.68
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$17.22</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -50%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Bella+Canvas 3001CVC
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Unisex Heather T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/31.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/306.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/362.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+70 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Gildan G200 - Ultra Durable Cotton® Comfort Tee" data-turbo="false" id="11182" href="#">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/11182/11182_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945951" alt="Gildan G200 - Ultra Durable Cotton® Comfort Tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="11182"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(11182, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=11182', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.55
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.14</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -56%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan G200
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ultra Durable Cotton® Comfort Tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+48 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Bella+Canvas 3001 - Unisex Short Sleeve Jersey T-Shirt" data-turbo="false" id="24756" href="/bella-canvas-3001-unisex-short-sleeve-jersey-t-shirt-24756">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/28/24756/24756_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732043012" alt="Bella+Canvas 3001 - Unisex Short Sleeve Jersey T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="24756"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(24756, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">


                          <div class="madein inline-tag tag">
                            <span class="ml-2">Made in</span>
                            <span class="uppercase">
                              us
                            </span>
                          </div>




                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=24756', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $8.68
                      </span>



                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Bella+Canvas 3001
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Unisex Short Sleeve Jersey T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/102.png" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/299.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/569.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+13 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Gildan G500B - Eco-Friendly Heavy Cotton™ - Youth T-Shirt" data-turbo="false" id="11200" href="/gildan-g500b-eco-friendly-heavy-cotton-youth-t-shirt-11200">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/11200/11200_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945992" alt="Gildan G500B - Eco-Friendly Heavy Cotton™ - Youth T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="11200"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(11200, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">
                          <div class="organic inline-tag tag">
                            <span>Organic Cotton</span>
                          </div>






                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=11200', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.02
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$5.92</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -49%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan G500B
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Eco-Friendly Heavy Cotton™ - Youth T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/22.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+38 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Next Level 1510 - Womens Premium Cotton-Poly Blend Crew Tee" data-turbo="false" id="38259" href="/next-level-1510-women-s-premium-cotton-poly-blend-crew-tee-38259">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/1/6/38259/38259_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732485218" alt="Next Level 1510 - Womens Premium Cotton-Poly Blend Crew Tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="38259"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(38259, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=38259', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.85
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$11.44</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -66%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Next Level 1510
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Women&#39;s Premium Cotton-Poly Blend Crew Tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+11 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="gildan t-shirts for men green forest" data-turbo="false" id="26516" href="/next-level-3600-premium-short-sleeve-crew-26516">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/26516/26516_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732196139" alt="gildan t-shirts for men green forest" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="26516"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(26516, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=26516', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $8.51
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$15.20</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -44%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Next Level 3600
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Short-Sleeve Crew
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+35 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Gildan G540 - Heavy Cotton™ Long-Sleeve T-Shirt" data-turbo="false" id="11203" href="/gildan-g540-heavy-cotton-long-sleeve-t-shirt-11203">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/11203/11203_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945999" alt="Gildan G540 - Heavy Cotton™ Long-Sleeve T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="11203"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(11203, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=11203', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $6.42
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$12.48</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -49%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan G540
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Heavy Cotton™ Long-Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+13 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan 5000L - Sustainable Heavy Cotton Ladies T-Shirt with Feminine Fit" data-turbo="false" id="3281" href="/gildan-5000l-sustainable-heavy-cotton-ladies-t-shirt-with-feminine-fit-3281">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2011/3/10/3281/3281_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1746545500" alt="Gildan 5000L - Sustainable Heavy Cotton Ladies T-Shirt with Feminine Fit" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="3281"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(3281, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=3281', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.39
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.32</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -47%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 5000L
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Sustainable Heavy Cotton Ladies T-Shirt with Feminine Fit
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+16 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="gildan t-shirts for men bright pink" data-turbo="false" id="11209" href="/gildan-g800-t-shirt-eco-friendly-moisture-wicking-dryblend-11209">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/11209/11209_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742970807" alt="gildan t-shirts for men bright pink" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="11209"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(11209, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=11209', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.55
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.18</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -57%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan G800
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        T-Shirt Eco-Friendly Moisture-Wicking Dryblend
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+35 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Next Level 6610 - Premium Heathered Cotton-Poly Crew Neck Tee" data-turbo="false" id="26573" href="/next-level-6610-premium-heathered-cotton-poly-crew-neck-tee-26573">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/26573/26573_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732196416" alt="Next Level 6610 - Premium Heathered Cotton-Poly Crew Neck Tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="26573"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(26573, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=26573', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $5.96
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$16.62</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -64%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Next Level 6610
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Heathered Cotton-Poly Crew Neck Tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+17 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Bella+Canvas 3413C - Unisex Triblend Short-Sleeve T-Shirt" data-turbo="false" id="9781" href="/bella-canvas-3413c-unisex-triblend-short-sleeve-t-shirt-9781">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2014/8/27/9781/9781_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732020456" alt="Bella+Canvas 3413C - Unisex Triblend Short-Sleeve T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="9781"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(9781, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <div class="bestseller tag">
                            <div class="circle">
                              <span class="copy">
                                Best Seller
                              </span>
                            </div>
                          </div>
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=9781', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $12.73
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$20.80</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -39%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Bella+Canvas 3413C
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Unisex Triblend Short-Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/1470.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/1472.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/1473.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+35 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan 64000L - Ladies Softstyle Cotton T-Shirt" data-turbo="false" id="25347" href="/gildan-64000l-ladies-softstyle-cotton-t-shirt-25347">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/28/25347/25347_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732193209" alt="Gildan 64000L - Ladies Softstyle Cotton T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25347"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25347, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25347', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.83
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.08</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -53%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 64000L
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies&#39; Softstyle Cotton T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+7 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Comfort Colors 1717 - Garment Dyed Short Sleeve Shirt" data-turbo="false" id="24177" href="/comfort-colors-1717-garment-dyed-short-sleeve-shirt-24177">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/28/24177/24177_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1630671197" alt="Comfort Colors 1717 - Garment Dyed Short Sleeve Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="24177"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(24177, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=24177', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $9.12
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$11.78</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -23%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Comfort Colors 1717
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Garment Dyed Short Sleeve Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/32.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+41 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="JERZEES 29BR - Heavyweight Blend™ 50/50 Youth T-Shirt" data-turbo="false" id="25735" href="/jerzees-29br-heavyweight-blend-50-50-youth-t-shirt-25735">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/25735/25735_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732194192" alt="JERZEES 29BR - Heavyweight Blend™ 50/50 Youth T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25735"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25735, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25735', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.39
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$4.86</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -30%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        JERZEES 29BR
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Heavyweight Blend™ 50/50 Youth T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+5 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Jerzees 29P - 5.6 oz., 50/50 Heavyweight Blend™ Pocket T-Shirt" data-turbo="false" id="9763" href="/jerzees-29p-5-6-oz-50-50-heavyweight-blend-pocket-t-shirt-9763">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/9763/9763_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945534" alt="Jerzees 29P - 5.6 oz., 50/50 Heavyweight Blend™ Pocket T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="9763"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(9763, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=9763', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $8.07
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$17.56</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -54%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Jerzees 29P
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        5.6 oz., 50/50 Heavyweight Blend™ Pocket T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="JERZEES 29MPR - Heavyweight Blend™ 50/50 T-Shirt with a Pocket" data-turbo="false" id="25826" href="/jerzees-29mpr-heavyweight-blend-50-50-t-shirt-with-a-pocket-25826">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/25826/25826_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732194450" alt="JERZEES 29MPR - Heavyweight Blend™ 50/50 T-Shirt with a Pocket" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25826"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25826, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25826', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.70
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.16</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -6%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        JERZEES 29MPR
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Heavyweight Blend™ 50/50 T-Shirt with a Pocket
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/202.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/306.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/697.gif" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Bella+Canvas B8800 - Ladies Flowy Racerback Tank" data-turbo="false" id="29777" href="/bella-canvas-b8800-ladies-flowy-racerback-tank-29777">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29777/29777_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742971073" alt="Bella+Canvas B8800 - Ladies Flowy Racerback Tank" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29777"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29777, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <div class="bestseller tag">
                            <div class="circle">
                              <span class="copy">
                                Best Seller
                              </span>
                            </div>
                          </div>
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29777', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.43
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$22.24</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -53%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Bella+Canvas B8800
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Flowy Racerback Tank
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/306.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Next Level 6410 - Premium Fitted Suede Crew" data-turbo="false" id="26552" href="/next-level-6410-premium-fitted-suede-crew-26552">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/26552/26552_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732196392" alt="Next Level 6410 - Premium Fitted Suede Crew" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="26552"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(26552, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=26552', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $11.70
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$23.26</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -50%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Next Level 6410
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Fitted Suede Crew
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+15 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Bella+Canvas 6004 - Comfy Cotton Blend Womens Tee" data-turbo="false" id="24858" href="/bella-canvas-6004-comfy-cotton-blend-women-s-tee-24858">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/28/24858/24858_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732192323" alt="Bella+Canvas 6004 - Comfy Cotton Blend Womens Tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="24858"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(24858, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=24858', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $5.43
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$16.44</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -67%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Bella+Canvas 6004
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Comfy Cotton Blend Women&#39;s Tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/3493.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan 64000L - Premium Comfort Fitted Cotton Blend T-Shirt" data-turbo="false" id="302" href="/gildan-64000l-premium-comfort-fitted-cotton-blend-t-shirt-302">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2010/12/1/302/302_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1746547022" alt="Gildan 64000L - Premium Comfort Fitted Cotton Blend T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="302"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(302, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                          <div class="font-bold gradient-customize text-white capitalize  inline-tag tag">
                            <span>
                              Customize it!
                            </span>
                          </div>

                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=302', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.83
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.08</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -53%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 64000L
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Comfort Fitted Cotton Blend T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+5 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Gildan G240 - Premium Ultra Cotton Long-Sleeve Comfort Tee" data-turbo="false" id="11194" href="/gildan-g240-premium-ultra-cotton-long-sleeve-comfort-tee-11194">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/11194/11194_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945978" alt="Gildan G240 - Premium Ultra Cotton Long-Sleeve Comfort Tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="11194"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(11194, 'undefined', 'undefined');
    } else {
      $store.profile.loadModal()
  }"
                        @mouseenter="hover = true"
                        @mouseleave="hover = false"
                        title="My wishlist"
                        type="button">

                        <div class="flex justify-center items-center w-full h-full" :class="wishlisted || hover ? '!hidden' : '!flex'">
                          <svg width="15" height="15" viewbox="0 0 205 187" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M140.117 11C172.345 11 194 41.6754 194 70.292C194 128.246 104.127 175.7 102.5 175.7C100.873 175.7 11 128.246 11 70.292C11 41.6754 32.655 11 64.8833 11C83.3867 11 95.485 20.3673 102.5 28.6023C109.515 20.3673 121.613 11 140.117 11Z" stroke="#000E3A" stroke-width="20.9143" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                        <div class="flex justify-center items-center w-full h-full" x-cloak :class="wishlisted || hover ? '!flex' : '!hidden'">
                          <svg width="15" height="15" viewbox="0 0 202 182" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M142.113 0.999973C177.335 0.999973 201.002 34.525 201.002 65.8C201.002 129.137 102.779 181 101.002 181C99.2238 181 1.00161 129.137 1.00161 65.8C1.00161 34.525 24.6683 0.999973 59.8905 0.999973C80.1127 0.999973 93.3349 11.2375 101.002 20.2375C108.668 11.2375 121.891 0.999973 142.113 0.999973Z" fill="#000E3A" stroke="#000E3A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                          </svg>
                        </div>
                      </button>


                      <div class="absolute top-0 left-0 product-tags">

                        <div class="circle-tags flex items-center">
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">





                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=11194', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $6.54
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$13.92</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -53%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan G240
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Ultra Cotton Long-Sleeve Comfort Tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+24 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
            </turbo-frame>



            <div
              class="loading-overlay absolute z-1 top-[-12px] left-0 bottom-auto right-auto w-full h-full bg-[#FFFFFF] opacity-70"
              x-data="{ show: true }"
              x-bind:x-on:pjax:complete="show = false"
              x-show="show"
              x-cloak>
              <div id="loading">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
              </div>
            </div>

            <div class="clear"></div>


            <div class="pagination-container wordans-pagination pagination-footer">
              <div role="navigation" aria-label="Pagination" class="pagination-new"><span class="previous_page disabled" aria-label="Previous page"><img class="previous-label-icon" alt="Previous" src="https://assets.wordans.ca/assets/wordans_2024/chevron_left-ec55170ac6eb8dd95bfc0172c65c4517b42222254c8087e00fb35e17106b6b6b.svg" /> Previous</span> <em class="current">1</em> <a rel="next" href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=2">2</a> <a href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=3">3</a> <a href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=4">4</a> <a href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=5">5</a> <a href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=6">6</a> <a href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=7">7</a> <a href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=8">8</a> <a href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=9">9</a> <a href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=10">10</a> <a href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=13">13</a> <a class="next_page" aria-label="Next page" rel="next" href="/blank-apparel-accessories-c37029/t-shirts-s2729?page=2">Next <img class="next-label-icon" alt="Next" src="https://assets.wordans.ca/assets/wordans_2024/chevron_right-88b7140327f3e7abe94fcc6199c61fac16ace4221cd57aab1d1b6fbe2bf2f58a.svg" /></a></div>
            </div>


          </div>
        </form>
      </div>

      <div class='wrapper no-bs grid grid-cols-12 gap-8 my-8 text-lg text-justify'>
        <div class='col-span-12'>
          <p>
          <p>Do you own a shop, an outlet, or are you looking for t-shirts for personal use? Then we welcome you to <a href="https://yourtagclothing.com" target="_blank">yourtagclothing</a>: a wholesale supplier for your clothing. We have a wide selection of colours, <a href="javascript:;" target="_blank">brands</a>, materials, and sizes. All our inexpensive t-shirts are high-quality and built to last.</p>
          </p>

          <section class='content content-container row' id='' x-data='{ isExpanded: true, isCompact: true }'>
            <div @click='isExpanded = !isExpanded' class='flex items-center cursor-pointer'>
              <h2 class="mt-0 title- text-xl mb-0 *:!text-dark-blue !text-dark-blue font-bold md:text-2xl xl:text-3xl " :class="isCompact &amp;&amp; &#39;text-2xl mt-2&#39;">Plain T-Shirts: A Huge Range of Fabrics &amp; Brands</h2>
              <div class='flex items-center ml-auto' x-cloak='true' x-show='!isExpanded'>
                <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15.994" cy="16.0297" r="15.1801" transform="rotate(90 15.994 16.0297)" fill="#000E3A" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.66898 16.1389L13.039 21.2622L16.1129 21.2622L13.7594 17.3685L20.5076 17.3685L20.5076 14.8866L13.7665 14.8866L16.1129 10.9701L13.039 10.9701L9.66898 16.1389Z" fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.66898 16.1389L13.039 21.2622L16.1129 21.2622L13.7594 17.3685L20.5076 17.3685L20.5076 14.8866L13.7665 14.8866L16.1129 10.9701L13.039 10.9701L9.66898 16.1389Z" fill="white" />
                </svg>
              </div>
              <div class='flex items-center ml-auto' x-cloak='true' x-show='isExpanded'>
                <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3762 21.6652L21.4995 18.2953V15.2213L17.6058 17.5748V10.8267H15.1239V17.5677L11.2074 15.2213V18.2953L16.3762 21.6652Z" fill="#000E3A" />
                  <circle cx="15.9941" cy="16.1598" r="14.5476" transform="rotate(-90 15.9941 16.1598)" stroke="#000E3A" stroke-width="1.26501" />
                </svg>
              </div>
            </div>
            <hr class='horizontal-line'>
            <div :class='!isExpanded ? &#39;hidden&#39; : &#39;block&#39;; isCompact ? &#39;mt-2&#39; : &#39;mt-8&#39;' class='section-content' style='content-visibility: auto;'>
              <p>
              <p>If you're looking for a wholesale supplier of blank t-shirts in Canada, then you've come to the right place at yourtagclothing. We have a wide variety of fabrics for your plain t-shirts. We have <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/t-shirts-s2729/100-cotton-a118" target="_blank">100% cotton</a>, <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/t-shirts-s2729/polyester-a145" target="_blank">polyester</a>, pique, and spandex, among others. Many individuals and businesses alike choose to purchase our wholesale t-shirts in order to remain comfortable during the warmer months of the year. However, some fabrics ensure that the wearer remains cool when compared to others. This is when fabrics such as cotton and pique come into play. Since we have numerous different styles, we also have multiple treatment characteristics. For your sportswear, you can filter by <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/t-shirts-s2729/moisture-wicking-a934" target="_blank">moisture-wicking</a> or <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/t-shirts-s2729/sport-performance-a5907" target="_blank">performance</a>.</p>
              </p>
              <p>
              <p>If you plan to wear a plain t-shirt outside, we also have sun protection treatment. Are you looking for a specific brand? In our collection, you will find brands such as <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/alstyle-b42351/t-shirts-s2729" target="_blank">Alstyle</a>, <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/champion-b21311/t-shirts-s2729" target="_blank">Champion</a>, <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/extreme-b22043/t-shirts-s2729" target="_blank">Extreme</a>, <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/devon-jones-b22073/t-shirts-s2729" target="_blank">Devon &amp; Jones</a>, <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/team-365-b22052/t-shirts-s2729" target="_blank">Team 365</a>, and <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/north-end-b22049/t-shirts-s2729" target="_blank">North End</a>. Are you curious if we have the perfect brand for you? On the left of the screen or at the top of the page, you can see the list of all the brands we have.</p>
              </p>

            </div>
          </section>

          <section class='content content-container row' id='' x-data='{ isExpanded: true, isCompact: true }'>
            <div @click='isExpanded = !isExpanded' class='flex items-center cursor-pointer'>
              <h2 class="mt-0 title- text-xl mb-0 *:!text-dark-blue !text-dark-blue font-bold md:text-2xl xl:text-3xl " :class="isCompact &amp;&amp; &#39;text-2xl mt-2&#39;">Cheap T-Shirts Available in Multiple Styles</h2>
              <div class='flex items-center ml-auto' x-cloak='true' x-show='!isExpanded'>
                <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15.994" cy="16.0297" r="15.1801" transform="rotate(90 15.994 16.0297)" fill="#000E3A" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.66898 16.1389L13.039 21.2622L16.1129 21.2622L13.7594 17.3685L20.5076 17.3685L20.5076 14.8866L13.7665 14.8866L16.1129 10.9701L13.039 10.9701L9.66898 16.1389Z" fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.66898 16.1389L13.039 21.2622L16.1129 21.2622L13.7594 17.3685L20.5076 17.3685L20.5076 14.8866L13.7665 14.8866L16.1129 10.9701L13.039 10.9701L9.66898 16.1389Z" fill="white" />
                </svg>
              </div>
              <div class='flex items-center ml-auto' x-cloak='true' x-show='isExpanded'>
                <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3762 21.6652L21.4995 18.2953V15.2213L17.6058 17.5748V10.8267H15.1239V17.5677L11.2074 15.2213V18.2953L16.3762 21.6652Z" fill="#000E3A" />
                  <circle cx="15.9941" cy="16.1598" r="14.5476" transform="rotate(-90 15.9941 16.1598)" stroke="#000E3A" stroke-width="1.26501" />
                </svg>
              </div>
            </div>
            <hr class='horizontal-line'>
            <div :class='!isExpanded ? &#39;hidden&#39; : &#39;block&#39;; isCompact ? &#39;mt-2&#39; : &#39;mt-8&#39;' class='section-content' style='content-visibility: auto;'>
              <p>
              <p>From <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/long-sleeves-s21954" target="_blank">long sleeves</a> to <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/camo-s21633" target="_blank">camos</a>, from <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/raglan-s23820" target="_blank">raglan</a> to <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/ringer-s21754" target="_blank">ringer</a>, from tank tops to <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/v-neck-s21679" target="_blank">v-necks</a>. At our wholesale business in Canada, you can choose from a wide range of different styles of t-shirts. This ensures that you have a suitable outfit for every occasion. For example, a <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/tank-top-s21951" target="_blank">tank top</a> for a hot summer day, a<a href="https://www.wordans.ca/blank-apparel-accessories-c37029/triblend-s21682" target="_blank"> tri-blend t-shirt</a> for a casual outfit, and a <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/long-sleeves-s16378" target="_blank">long-sleeved shirt</a> for the cold days. If you can't choose, you can also alternate different t-shirts, since they're so cheap.</p>
              </p>
              <p>
              <p>At yourtagclothing you can find inexpensive t-shirts for young and old. We have clothing items for babies, toddlers and teenagers. For adult sizes, you can choose sizes from <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/t-shirts-s2729/xs-x7" target="_blank">XS</a> to <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/t-shirts-s2729/6xl-x9" target="_blank">6XL</a>. If you're not sure what size fits you best, you can find a table in the product information. Each product has the measurements, and you can also take a look at our <a href="https://www.wordans.com/blog/the-complete-clothing-size-guide/" target="_blank">universal size guide</a>, so you can be sure that the t-shirt fits properly.</p>
              </p>

            </div>
          </section>

          <section class='content content-container row' id='' x-data='{ isExpanded: true, isCompact: true }'>
            <div @click='isExpanded = !isExpanded' class='flex items-center cursor-pointer'>
              <h2 class="mt-0 title- text-xl mb-0 *:!text-dark-blue !text-dark-blue font-bold md:text-2xl xl:text-3xl " :class="isCompact &amp;&amp; &#39;text-2xl mt-2&#39;">Easily Customize Low-Cost T-Shirts in Bulk</h2>
              <div class='flex items-center ml-auto' x-cloak='true' x-show='!isExpanded'>
                <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="15.994" cy="16.0297" r="15.1801" transform="rotate(90 15.994 16.0297)" fill="#000E3A" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.66898 16.1389L13.039 21.2622L16.1129 21.2622L13.7594 17.3685L20.5076 17.3685L20.5076 14.8866L13.7665 14.8866L16.1129 10.9701L13.039 10.9701L9.66898 16.1389Z" fill="white" />
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.66898 16.1389L13.039 21.2622L16.1129 21.2622L13.7594 17.3685L20.5076 17.3685L20.5076 14.8866L13.7665 14.8866L16.1129 10.9701L13.039 10.9701L9.66898 16.1389Z" fill="white" />
                </svg>
              </div>
              <div class='flex items-center ml-auto' x-cloak='true' x-show='isExpanded'>
                <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3762 21.6652L21.4995 18.2953V15.2213L17.6058 17.5748V10.8267H15.1239V17.5677L11.2074 15.2213V18.2953L16.3762 21.6652Z" fill="#000E3A" />
                  <circle cx="15.9941" cy="16.1598" r="14.5476" transform="rotate(-90 15.9941 16.1598)" stroke="#000E3A" stroke-width="1.26501" />
                </svg>
              </div>
            </div>
            <hr class='horizontal-line'>
            <div :class='!isExpanded ? &#39;hidden&#39; : &#39;block&#39;; isCompact ? &#39;mt-2&#39; : &#39;mt-8&#39;' class='section-content' style='content-visibility: auto;'>
              <p>
              <p>Because our t-shirts are blank, you can design them to your liking. For example, you can print your logo, a drawing, a name, or text on one of our plain t-shirts. This makes yourtagclothing' t-shirt collection ideal if you want to sell the clothes in your own store. You can even choose from t-shirts with tear-away labels, making them really ideal for reselling. Besides, a personalized t-shirt is also a lovely gift to give or receive.</p>
              </p>
              <p>
              <p>You can also <a href="javascript:;" target="_blank">personalize</a> a blank t-shirt for your soccer team, social circle, or party. You can change the colours of your design as you wish. Explore our colour spectrum using the menu on the left side of your screen. Our prices are a huge advantage of our wholesale clothing in Canada. Wholesale buyers can enjoy huge discounts, so you can choose from a wide range of cheap t-shirts and get a fantastic deal. The pricing table below each item will tell you how many you need to order for extra savings.</p>
              </p>
              <p>
              <p>Our main intention is to provide each and every customer with cost-effective products, while never being forced to compromise in terms of quality. yourtagclothing t-shirts are engineered to last. These cheap t-shirts for men and women are only the tip of the iceberg. yourtagclothing offers plenty of additional garments and accessories. Whether you are looking for a quality pair of <a href="javascript:;" target="_blank">pants</a>, <a href="javascript:;" target="_blank">hooded sweatshirts</a> or even <a href="javascript:;" target="_blank">wrist watches</a>, we're here to assist. Please contact us directly if you have any other questions or to learn more about a specific product.</p>
              </p>

            </div>
          </section>

        </div>
      </div>


    </div>
  </section>
</div>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    klaviyoTrack('Viewed Category', {
      "CategoryID": 2729,
      "CategoryName": "T-Shirts",
      "URL": "https://www.wordans.ca/blank-apparel-accessories-c37029/t-shirts-s2729"
    });
  });
</script>


<?php
include '../includes/footer.php';
?>