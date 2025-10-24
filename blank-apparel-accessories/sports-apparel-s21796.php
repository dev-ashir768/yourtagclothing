<?php
include '../includes/header.php';
?>


<script src="/assets/js/product_filter_functions.js"></script>

<script>
  const MAX_PRICE = 124.2;
  const MIN_PRICE = 2.8;
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
    "style": 21796,
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

<script src="https://assets.wordans.ca/assets/rangeSlider-fc16630a343659c1a98e9f42359aa3cac642d9d614d5bdab3e930fb178b4ee57.js" type="module"></script>
<link rel="stylesheet" href="https://assets.wordans.ca/assets/range-slider-dd6f2f55b278c40f6282470ed1012642492779807d37e1d8d0f0a3e630cb92b4.css" />
<link rel="stylesheet" href="https://assets.wordans.ca/assets/pagination-a6c2d950277a6f0dfd1b9da3f445c26864bb4244fccff5747f9ed942c5a30900.css" />



<div id="pjax-container" itemscope="" itemprop="Product" itemtype="http://schema.org/Product">
  <span itemprop="name" content="Sports Apparel wholesale and retail. "></span>
  <span itemprop="description" content="Choose Wordans for your sport apparel needs. We offer quality wholesale sports apparel at cheap prices"></span>

  <section id="marketplace-container" class="marketplace-container new-design marketplace-category content !p-0" data-categories="categories" data-brands="brands" data-gender="gender" data-style="type" data-colors="colors" data-options="options" data-weight="weight" data-grammage="grammage" data-style2="type2" data-search="q" data-composition="composition" data-warehouses="warehouse" data-sort="sort-order" data-select="select" data-per_page="per-page" data-page="page" itemscope="" itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
    <span itemprop="ratingValue" content="5.0"></span>
    <span itemprop="ratingCount" content="4"></span>
    <span itemprop="bestRating" content="5.0"></span>

    <div class="wrapper product-container">


      <div class="breadcrumbs turbo-native-hidden">
        <nav class="mt-4 mb-0 md:my-4 py-0 text-sm text-center md:text-lg md:text-left text-[#969696] !font-['montserrat-medium']" itemscope itemtype="http://schema.org/BreadcrumbList" aria-label="Breadcrumb">
          <ol class="list-none p-0 flex flex-wrap items-center">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="">
              <a itemprop="item" href="https://www.wordans.ca/">
                <span class='text-[#969696]' itemprop='name'>Home</span>
              </a>
              <meta itemprop="position" content="1" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="prepend-breadcrumb-chevron">
              <a itemprop="item" href="/blank-apparel-accessories-c37029">
                <span class='text-[#969696]' itemprop='name'>Blank Apparel | Accessories</span>
              </a>
              <meta itemprop="position" content="2" />
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="prepend-breadcrumb-chevron">
              <span aria-current="page">
                <span class='text-[#969696]' itemprop='name'>Sports Apparel</span>
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
                <span>167 results.</span>
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
                    Sports Apparel
                    <a href="javascript:leaveStyle('sports-apparel-s21796')">
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
                <tc-range-slider min="2.8"
                  max="124.2"
                  id="range-price-filter"
                  slider-bg-fill="#00228A"
                  slider-height="3px"
                  pointer-width="15px"
                  pointer-height="15px"
                  pointer-border="3px solid #00228A"
                  pointer-border-hover="3px solid #00228A"
                  pointer-border-focus="3px solid #00228A"
                  value1="2.8"
                  value2="124.2"
                  css-links="https://assets.wordans.ca/assets/range-slider-dd6f2f55b278c40f6282470ed1012642492779807d37e1d8d0f0a3e630cb92b4.css">
                </tc-range-slider>

                <div class="grid grid-cols-2 gap-10 mb-6 mt-4">
                  <div class="">
                    <span class="text-xl">From</span>
                    <div class="flex items-center">
                      <span class="border-l border-t border-b border-light-blue font-semibold text-xl text-gray-700 bg-white p-2 rounded-l-lg text-purple-">$</span>
                      <input type="number"
                        id="min-price-input"
                        min="2.8"
                        max="124.2"
                        class="min-amount p-2 rounded-r-lg font-semibold text-xl text-purple- border-y border-t border-b border-r border-light-blue"
                        value="2.8">
                    </div>
                  </div>
                  <div class="">
                    <span class="text-xl">To</span>
                    <div class="flex items-center">
                      <span class="border-l border-t border-b border-light-blue font-semibold text-xl text-gray-700 bg-white p-2 rounded-l-lg text-purple-">$</span>
                      <input type="number"
                        id="max-price-input"
                        min="2.8"
                        max="124.2"
                        class="max-amount p-2 rounded-r-lg font-semibold text-xl text-purple- border-y border-t border-b border-r border-light-blue"
                        value="124.2">
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/black-and-white-m66"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/lime-green-m64"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/beige-m61"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/burgundy-m56"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/navy-blue-m41"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/red-m24"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/pink-m21"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/purple-m27"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/blue-m6"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/sky-blue-m60"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/green-m15"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/yellow-m33"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/orange-m18"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/white-m30"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/brown-m9"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/black-m3"
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
                      href="/blank-apparel-accessories-c37029/sports-apparel-s21796/gray-m12"
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

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/xs-x7">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>XS</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/s-x1">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>S</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/m-x2">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>M</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/l-x3">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>L</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/xl-x4">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/2xl-x5">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>2XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/3xl-x6">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>3XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/4xl-x10">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>4XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/5xl-x11">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>5XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/6xl-x9">
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/geek-g4724">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Geek</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/kids-g10">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Kids</span>
                        <span class="small">(18)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/men-g27">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Men</span>
                        <span class="small">(97)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/unisex-g4789">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Unisex</span>
                        <span class="small">(56)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/women-g24">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Women</span>
                        <span class="small">(102)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/accessories-s22008">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Accessories</span>
                        <span class="small">(11)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/caps-s43515', 'style')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Caps</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/jackets-s43518">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jackets</span>
                        <span class="small">(28)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/leggings-s43365">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Leggings</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/pants-shorts-s21648">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pants &amp; Shorts</span>
                        <span class="small">(33)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/polos-sports-t-shirts-s3667">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polos &amp; Sports T-Shirts</span>
                        <span class="small">(77)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/sleeveless-jerseys-s23190', 'style')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sleeveless Jerseys</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/sports-bras-s23182', 'style')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sports Bras</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/tank-top-s22154">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Tank Top</span>
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
                      x-show="search === '' || &quot;ajm&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/ajm-b42369/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>AJM</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;american apparel&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/american-apparel-b30', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>American Apparel</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;bella+canvas&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/bella-canvas-b47', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Bella+Canvas</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;c2 sport&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/c2-sport-b21257/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>C2 Sport</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;champion&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/champion-b21311/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Champion</span>
                        <span class="small">(32)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;columbia&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/columbia-b4784', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Columbia</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;columbia golf&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/columbia-golf-b43776/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Columbia Golf</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;comfort colors&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/comfort-colors-b21528', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Comfort Colors</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;core365&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/core365-b16798/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Core365</span>
                        <span class="small">(11)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;cx2&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/cx2-b44617/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>CX2</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;devon \u0026 jones&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/devon-jones-b22073/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Devon &amp; Jones</span>
                        <span class="small">(15)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;elevate&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/elevate-b23498/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Elevate</span>
                        <span class="small">(24)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;gildan&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/gildan-b34/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Gildan</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;independent trading co.&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/independent-trading-co-b21275', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Independent Trading Co.</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;jerzees&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/jerzees-b16792/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jerzees</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;king athletics&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/king-athletics-b4787/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>King Athletics</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;new balance&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/new-balance-b12738', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>New Balance</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;nike&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/nike-b3662', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Nike</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;north end&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/north-end-b22049/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>North End</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;rabbit skins&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/rabbit-skins-b17071', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Rabbit Skins</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;roly&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/roly-b23095', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Roly</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;russell athletic&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/russell-athletic-b23156/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Russell Athletic</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;spyder&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/spyder-b44009/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Spyder</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;team 365&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/team-365-b22052/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Team 365</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;timberlea&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/timberlea-b43563/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Timberlea</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;trimark&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/trimark-b72655/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Trimark</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;zero friction&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/zero-friction-b44606/sports-apparel-s21796">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>ZERO FRICTION</span>
                        <span class="small">(12)</span>
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
                        <span class="small">(49)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww2', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W2</span>
                        <span class="small">(48)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww3', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W3</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww6', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W6</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww7', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W7</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww10', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W10</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww11', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W11</span>
                        <span class="small">(36)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww14', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W14</span>
                        <span class="small">(12)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/custom-o47">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Custom</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/high-stock-o50', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>High Stock</span>
                        <span class="small">(37)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/made-in-usa-o52', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Made in USA</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/tagless-o6', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Tagless</span>
                        <span class="small">(24)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/tear-away-o2', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Tear Away</span>
                        <span class="small">(10)</span>
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/3-4-sleeves-a5895', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>3/4 sleeves</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/long-sleeves-a5892">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Long sleeves</span>
                        <span class="small">(14)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/short-sleeves-a5893">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Short sleeves</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/sleeveless-a5894', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sleeveless</span>
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
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Pattern</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/raglan-a5921">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Raglan</span>
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
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Fabric</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/100-cotton-a118">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>100% cotton</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/100-polyester-a181">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>100% polyester</span>
                        <span class="small">(53)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/60-40-cotton-polyester-a925', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>60/40 cotton/polyester</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/80-cotton-20-polyester-a529', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>80% cotton - 20% polyester</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/cotton-a103">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Cotton</span>
                        <span class="small">(16)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/elastane-a1347">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Elastane</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/heather-a5937">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Heather</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/jersey-a5931">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jersey</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/knit-a5933">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Knit</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/mesh-a5936">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Mesh</span>
                        <span class="small">(19)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/nylon-a298">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Nylon</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/pique-a5939">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pique</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/polyester-a145">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester</span>
                        <span class="small">(71)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/polyester-mesh-a664">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester mesh</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/shell-a5941', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Shell</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/soft-a5938">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Soft</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/terry-a5940', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Terry</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/crew-neck-a22">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Crew Neck</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/v-neck-a211', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>V-neck</span>
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
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/4-oz-a58', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>4 oz.</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/7-plus-oz-a634', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>7 plus oz.</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/lightweight-a397', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Lightweight</span>
                        <span class="small">(26)</span>
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/baseball-a5909', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Baseball</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/casual-a5911">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Casual</span>
                        <span class="small">(13)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/golf-a5905">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Golf</span>
                        <span class="small">(14)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/gym-a5904">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Gym</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/outdoor-a5917">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Outdoor</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/running-a790">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Running</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/sport-performance-a5907">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sport / Performance</span>
                        <span class="small">(167)</span>
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
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/easy-care-a955', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Easy Care</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/moisture-wicking-a934', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Moisture Wicking</span>
                        <span class="small">(22)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/snag-resistant-a940', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Snag Resistant</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/upf-sun-protection-a961', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>UPF Sun Protection</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/water-resistant-a1335', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Water-resistant</span>
                        <span class="small">(9)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/waterproof-a952', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Waterproof</span>
                        <span class="small">(4)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/pocket-a964">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pocket</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sports-apparel-s21796/zipper-a970">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Zipper</span>
                        <span class="small">(15)</span>
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/fitted-a5890', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Fitted</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/loose-fit-a5885', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Loose fit</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/oversized-a5891', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Oversized</span>
                        <span class="small">(1)</span>
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





            <h1 class="mt-3 mb-4 text-xl font-bold text-center md:text-left md:text-4xl text-dark-blue">Sports Apparel <span class="text-gray-500 font-normal">wholesale and retail</span> </h1>



            <div class="flex items-center justify-between">
              <div class="font-normal text-gray-500">167 results.</div>
              <div class="pagination-container top wordans-pagination pagination-footer">
                <div role="navigation" aria-label="Pagination" class="pagination-new"><span class="previous_page disabled" aria-label="Previous page"><img class="previous-label-icon" alt="Previous" src="https://assets.wordans.ca/assets/wordans_2024/chevron_left-ec55170ac6eb8dd95bfc0172c65c4517b42222254c8087e00fb35e17106b6b6b.svg" /></span> <em class="current">1</em> <a rel="next" href="/blank-apparel-accessories-c37029/sports-apparel-s21796?page=2">2</a> <a href="/blank-apparel-accessories-c37029/sports-apparel-s21796?page=3">3</a> <a href="/blank-apparel-accessories-c37029/sports-apparel-s21796?page=4">4</a> <a class="next_page" aria-label="Next page" rel="next" href="/blank-apparel-accessories-c37029/sports-apparel-s21796?page=2"><img class="next-label-icon" alt="Next" src="https://assets.wordans.ca/assets/wordans_2024/chevron_right-88b7140327f3e7abe94fcc6199c61fac16ace4221cd57aab1d1b6fbe2bf2f58a.svg" /></a></div>
              </div>
            </div>


            <turbo-frame
              id="products-grid"
              data-turbo-action="append"
              class="grid grid-cols-2 gap-5 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 md:mx-0">


              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Roly CA0407 - BAHRAIN Technical short-sleeve raglan t-shirt" data-turbo="false" id="447297" href="/roly-ca0407-bahrain-technical-short-sleeve-raglan-t-shirt-447297">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2019/7/16/447297/447297_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738591808" alt="Roly CA0407 - BAHRAIN Technical short-sleeve raglan t-shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="447297"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(447297, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=447297', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $2.80
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$6.29</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -55%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Roly CA0407
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        BAHRAIN Technical short-sleeve raglan t-shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/825.gif" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/24959.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/54027.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT51 - Mens Zone Performance Polo" data-turbo="false" id="422469" href="/team-365-tt51-men-s-zone-performance-polo-422469">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422469/422469_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732487769" alt="Team 365 TT51 - Mens Zone Performance Polo" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422469"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422469, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422469', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.51
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$24.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -56%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT51
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Zone Performance Polo
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+5 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT11L - Mens Zone Performance Long-Sleeve T-Shirt" data-turbo="false" id="422442" href="/team-365-tt11l-men-s-zone-performance-long-sleeve-t-shirt-422442">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422442/422442_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732488622" alt="Team 365 TT11L - Mens Zone Performance Long-Sleeve T-Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422442"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422442, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422442', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.44
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$21.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -50%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT11L
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Zone Performance Long-Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+10 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Jerzees 975MPR - Adult Nublend® Jogger" data-turbo="false" id="518915" href="/jerzees-975mpr-adult-nublend-jogger-518915">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2022/8/24/518915/518915_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733155092" alt="Jerzees 975MPR - Adult Nublend® Jogger" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="518915"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(518915, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=518915', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $13.25
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$30.04</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -56%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Jerzees 975MPR
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Adult Nublend® Jogger
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/306.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT11WL - Ladies Zone Performance Long-Sleeve T-Shirt" data-turbo="false" id="422445" href="/team-365-tt11wl-ladies-zone-performance-long-sleeve-t-shirt-422445">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422445/422445_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732527455" alt="Team 365 TT11WL - Ladies Zone Performance Long-Sleeve T-Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422445"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422445, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422445', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $9.49
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$21.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -55%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT11WL
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Zone Performance Long-Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+10 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Gildan G420 - Mens Performance® T-Shirt" data-turbo="false" id="29684" href="/gildan-g420-men-s-performance-t-shirt-29684">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29684/29684_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742971036" alt="Gildan G420 - Mens Performance® T-Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29684"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29684, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29684', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $6.22
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$12.14</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -49%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan G420
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Performance® T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/38.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+13 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT51W - Ladies Zone Performance Polo" data-turbo="false" id="422475" href="/team-365-tt51w-ladies-zone-performance-polo-422475">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422475/422475_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732527770" alt="Team 365 TT51W - Ladies Zone Performance Polo" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422475"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422475, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422475', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.51
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$24.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -56%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT51W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Zone Performance Polo
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+5 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Team 365 TT11SH - Mens Zone Performance Short" data-turbo="false" id="431532" href="/team-365-tt11sh-men-s-zone-performance-short-431532">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2018/10/3/431532/431532_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742972099" alt="Team 365 TT11SH - Mens Zone Performance Short" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="431532"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(431532, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=431532', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $11.65
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$22.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -47%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT11SH
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Zone Performance Short
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/9626.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Champion T2102 - 9.3 oz./lin. yd. Heritage Jersey T-Shirt" data-turbo="false" id="433803" href="/champion-t2102-9-3-oz-lin-yd-heritage-jersey-t-shirt-433803">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2019/1/24/433803/433803_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742972175" alt="Champion T2102 - 9.3 oz./lin. yd. Heritage Jersey T-Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="433803"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(433803, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=433803', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.84
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$21.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -48%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion T2102
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        9.3 oz./lin. yd. Heritage Jersey T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Champion CO200 - Adult Packable Anorak 1/4 Zip Jacket" data-turbo="false" id="500324" href="/champion-co200-adult-packable-anorak-1-4-zip-jacket-500324">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2021/2/1/500324/500324_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742973105" alt="Champion CO200 - Adult Packable Anorak 1/4 Zip Jacket" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="500324"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(500324, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=500324', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $34.44
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$61.50</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -44%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion CO200
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Adult Packable Anorak 1/4 Zip Jacket
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+10 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT31 - Mens Zone Performance Quarter-Zip" data-turbo="false" id="422451" href="/team-365-tt31-men-s-zone-performance-quarter-zip-422451">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422451/422451_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732529189" alt="Team 365 TT31 - Mens Zone Performance Quarter-Zip" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422451"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422451, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422451', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $14.71
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$33.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -55%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT31
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Zone Performance Quarter-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+9 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="C2 Sport 5104 - Long Sleeve Performance T-Shirt" data-turbo="false" id="23777" href="/c2-sport-5104-long-sleeve-performance-t-shirt-23777">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/28/23777/23777_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1506417332" alt="C2 Sport 5104 - Long Sleeve Performance T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="23777"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(23777, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=23777', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $13.75
                      </span>



                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        C2 Sport 5104
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Long Sleeve Performance T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT31W - Ladies Zone Performance Quarter-Zip" data-turbo="false" id="422454" href="/team-365-tt31w-ladies-zone-performance-quarter-zip-422454">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422454/422454_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732623628" alt="Team 365 TT31W - Ladies Zone Performance Quarter-Zip" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422454"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422454, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422454', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $15.01
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$33.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -55%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT31W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Zone Performance Quarter-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+9 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Team 365 TT11SHW - Ladies Zone Performance Short" data-turbo="false" id="431502" href="/team-365-tt11shw-ladies-zone-performance-short-431502">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2018/10/2/431502/431502_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742972052" alt="Team 365 TT11SHW - Ladies Zone Performance Short" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="431502"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(431502, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=431502', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $11.10
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$22.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -50%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT11SHW
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Zone Performance Short
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/9626.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Champion 8731 - Champion Lightweight Poly Mesh Athletic Shorts" data-turbo="false" id="25766" href="/champion-8731-champion-lightweight-poly-mesh-athletic-shorts-25766">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/25766/25766_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732194335" alt="Champion 8731 - Champion Lightweight Poly Mesh Athletic Shorts" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25766"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25766, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25766', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $16.51
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$25.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -34%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion 8731
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Champion Lightweight Poly Mesh Athletic Shorts
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/730.gif" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT11YL - Youth Zone Performance Long-Sleeve T-Shirt" data-turbo="false" id="422448" href="/team-365-tt11yl-youth-zone-performance-long-sleeve-t-shirt-422448">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422448/422448_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732625180" alt="Team 365 TT11YL - Youth Zone Performance Long-Sleeve T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422448"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422448, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422448', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.41
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$21.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -50%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT11YL
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Youth Zone Performance Long-Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/9626.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Bella+Canvas 3727 - Unisex Jogger Sweatpant" data-turbo="false" id="422520" href="/bella-canvas-3727-unisex-jogger-sweatpant-422520">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422520/422520_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732626636" alt="Bella+Canvas 3727 - Unisex Jogger Sweatpant" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422520"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422520, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422520', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $26.16
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$73.82</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -65%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Bella+Canvas 3727
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Unisex Jogger Sweatpant
                      </div>
                    </h3>


                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Champion CW26 - Double Dry® Performance Long Sleeve T-Shirt" data-turbo="false" id="23902" href="/champion-cw26-double-dry-performance-long-sleeve-t-shirt-23902">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/28/23902/23902_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732042388" alt="Champion CW26 - Double Dry® Performance Long Sleeve T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="23902"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(23902, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=23902', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $11.43
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$24.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -52%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion CW26
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Double Dry® Performance Long Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/133.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/314.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Champion 8215BL - Womens Essential Short" data-turbo="false" id="497319" href="/champion-8215bl-women-s-essential-short-497319">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2020/9/29/497319/497319_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732626731" alt="Champion 8215BL - Womens Essential Short" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="497319"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(497319, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=497319', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $22.87
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$37.36</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -39%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion 8215BL
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Women&#39;s Essential Short
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/133.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+6 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Rabbit Skins 3323RS - Comfy Cotton Toddler Unisex Tank Top" data-turbo="false" id="546310" href="/rabbit-skins-3323rs-comfy-cotton-toddler-unisex-tank-top-546310">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2024/9/4/546310/546310_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733136937" alt="Rabbit Skins 3323RS - Comfy Cotton Toddler Unisex Tank Top" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="546310"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(546310, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=546310', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $5.69
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.36</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -32%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Rabbit Skins 3323RS
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Comfy Cotton Toddler Unisex Tank Top
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Champion CW23 - Ladies Double Dry® V-Neck Performance T-Shirt" data-turbo="false" id="23988" href="/champion-cw23-ladies-double-dry-v-neck-performance-t-shirt-23988">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/28/23988/23988_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732042431" alt="Champion CW23 - Ladies Double Dry® V-Neck Performance T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="23988"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(23988, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=23988', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $8.80
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$20.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -56%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion CW23
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies&#39; Double Dry® V-Neck Performance T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/133.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+9 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Gildan 42400 - Performance L/S t-shirt" data-turbo="false" id="4717" href="/gildan-42400-performance-l-s-t-shirt-4717">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/7/8/4717/4717_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1443794311" alt="Gildan 42400 - Performance L/S t-shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="4717"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(4717, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=4717', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.59
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$15.18</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -30%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 42400
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Performance L/S t-shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/2803.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Devon &amp; Jones DG20 - Mens CrownLux Performance Plaited Polo" data-turbo="false" id="422493" href="/devon-jones-dg20-men-s-crownlux-performance-plaited-polo-422493">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422493/422493_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733143717" alt="Devon &amp; Jones DG20 - Mens CrownLux Performance Plaited Polo" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422493"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422493, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422493', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $17.25
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$38.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -55%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG20
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s CrownLux Performance Plaited Polo
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+6 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT11SHY - Youth Zone Performance Short" data-turbo="false" id="431535" href="/team-365-tt11shy-youth-zone-performance-short-431535">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/10/3/431535/431535_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1742972108" alt="Team 365 TT11SHY - Youth Zone Performance Short" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="431535"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(431535, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=431535', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $11.11
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$22.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -50%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT11SHY
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Youth Zone Performance Short
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/9626.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Champion B940 - WOMENS PERFORMANCE LEGGING" data-turbo="false" id="423867" href="/champion-b940-women-s-performance-legging-423867">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/2/1/423867/423867_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733139683" alt="Champion B940 - WOMENS PERFORMANCE LEGGING" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="423867"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(423867, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=423867', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $19.06
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$28.25</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -33%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion B940
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        WOMEN&#39;S PERFORMANCE LEGGING
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Timberlea T2003 - Unisex Fleece Jogger" data-turbo="false" id="478572" href="/timberlea-t2003-unisex-fleece-jogger-478572">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2020/7/10/478572/478572_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733136294" alt="Timberlea T2003 - Unisex Fleece Jogger" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="478572"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(478572, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=478572', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $19.57
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$44.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -56%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Timberlea T2003
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Unisex Fleece Jogger
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/154.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Devon &amp; Jones DG420W - Ladies Stretch Tech-Shell® Compass Full-Zip" data-turbo="false" id="40407" href="/devon-jones-dg420w-ladies-stretch-tech-shell-compass-full-zip-40407">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2016/1/19/40407/40407_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742971442" alt="Devon &amp; Jones DG420W - Ladies Stretch Tech-Shell® Compass Full-Zip" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="40407"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(40407, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=40407', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $18.19
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$78.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -77%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG420W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Stretch Tech-Shell® Compass Full-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/698.gif" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/951.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Devon &amp; Jones DG20W - Ladies CrownLux Performance Plaited Polo" data-turbo="false" id="422496" href="/devon-jones-dg20w-ladies-crownlux-performance-plaited-polo-422496">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422496/422496_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733155195" alt="Devon &amp; Jones DG20W - Ladies CrownLux Performance Plaited Polo" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422496"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422496, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422496', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $17.18
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$38.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -55%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG20W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies CrownLux Performance Plaited Polo
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+6 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT51Y - Youth Zone Performance Polo" data-turbo="false" id="422481" href="/team-365-tt51y-youth-zone-performance-polo-422481">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422481/422481_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732884228" alt="Team 365 TT51Y - Youth Zone Performance Polo" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422481"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422481, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422481', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $12.10
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$24.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -50%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT51Y
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Youth Zone Performance Polo
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+5 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Core 365 CE401 - Mens Kinetic Performance Quarter-Zip" data-turbo="false" id="422412" href="/core-365-ce401-men-s-kinetic-performance-quarter-zip-422412">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422412/422412_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742971983" alt="Core 365 CE401 - Mens Kinetic Performance Quarter-Zip" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422412"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422412, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422412', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $28.77
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$64.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -55%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Core 365 CE401
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Kinetic Performance Quarter-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41574.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41703.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41709.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="C2 Sport 5109 - Mesh Shorts" data-turbo="false" id="23780" href="/c2-sport-5109-mesh-shorts-23780">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/8/28/23780/23780_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1506417423" alt="C2 Sport 5109 - Mesh Shorts" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="23780"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(23780, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=23780', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.46
                      </span>



                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        C2 Sport 5109
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Mesh Shorts
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Core 365 88181R - Mens Radiant Performance Piqué Polo with Reflective Piping" data-turbo="false" id="422409" href="/core-365-88181r-men-s-radiant-performance-pique-polo-with-reflective-piping-422409">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422409/422409_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742971976" alt="Core 365 88181R - Mens Radiant Performance Piqué Polo with Reflective Piping" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422409"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422409, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422409', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $14.19
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$31.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -54%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Core 365 88181R
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Radiant Performance Piqué Polo with Reflective Piping
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/313.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/698.gif" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Champion CO125 - Adult Full-Zip Anorak Jacket" data-turbo="false" id="500336" href="/champion-co125-adult-full-zip-anorak-jacket-500336">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2021/2/1/500336/500336_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733137450" alt="Champion CO125 - Adult Full-Zip Anorak Jacket" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="500336"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(500336, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=500336', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $39.51
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -10%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion CO125
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Adult Full-Zip Anorak Jacket
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/730.gif" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Champion B960 - Womens Performance Capri" data-turbo="false" id="478662" href="/champion-b960-women-s-performance-capri-478662">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2020/7/10/478662/478662_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733137752" alt="Champion B960 - Womens Performance Capri" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="478662"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(478662, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=478662', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $19.45
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$40.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -51%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion B960
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Women&#39;s Performance Capri
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Columbia Golf 17F87MP - Performance Drive Polo Shirt for Active Lifestyle" data-turbo="false" id="498414" href="/columbia-golf-17f87mp-performance-drive-polo-shirt-for-active-lifestyle-498414">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2020/11/17/498414/498414_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733135743" alt="Columbia Golf 17F87MP - Performance Drive Polo Shirt for Active Lifestyle" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="498414"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(498414, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=498414', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $38.12
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$63.18</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -40%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Columbia Golf 17F87MP
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Performance Drive Polo Shirt for Active Lifestyle
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/162.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+7 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="CX2 S05931 - Riviera Ladies Crew Neck Tee" data-turbo="false" id="534684" href="/cx2-s05931-riviera-ladies-crew-neck-tee-534684">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2024/2/9/534684/534684_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733157417" alt="CX2 S05931 - Riviera Ladies Crew Neck Tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="534684"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(534684, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=534684', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.08
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$14.50</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -51%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        CX2 S05931
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Riviera Ladies Crew Neck Tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/641.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/950.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/1085.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Devon &amp; Jones DG440 - Mens Stretch Tech-Shell® Compass Quarter-Zip" data-turbo="false" id="40410" href="/devon-jones-dg440-men-s-stretch-tech-shell-compass-quarter-zip-40410">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/1/19/40410/40410_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733140776" alt="Devon &amp; Jones DG440 - Mens Stretch Tech-Shell® Compass Quarter-Zip" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="40410"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(40410, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=40410', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $20.41
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$78.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -74%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG440
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Stretch Tech-Shell® Compass Quarter-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/951.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT31Y - Youth Zone Performance Quarter-Zip" data-turbo="false" id="422457" href="/team-365-tt31y-youth-zone-performance-quarter-zip-422457">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422457/422457_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733139005" alt="Team 365 TT31Y - Youth Zone Performance Quarter-Zip" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422457"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422457, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422457', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $17.73
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$33.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -46%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT31Y
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Youth Zone Performance Quarter-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/9626.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Champion 8212BY - Youth Mesh Short - 7&quot;" data-turbo="false" id="497316" href="/champion-8212by-youth-mesh-short-7-497316">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2020/9/29/497316/497316_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733152615" alt="Champion 8212BY - Youth Mesh Short - 7&quot;" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="497316"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(497316, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=497316', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $27.32
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$37.13</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -26%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion 8212BY
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Youth Mesh Short - 7&quot;
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Devon &amp; Jones DG420 - Mens Stretch Tech-Shell® Compass Full-Zip" data-turbo="false" id="40404" href="/devon-jones-dg420-men-s-stretch-tech-shell-compass-full-zip-40404">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2016/1/19/40404/40404_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742971434" alt="Devon &amp; Jones DG420 - Mens Stretch Tech-Shell® Compass Full-Zip" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="40404"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(40404, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=40404', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $21.22
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$78.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -73%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG420
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Stretch Tech-Shell® Compass Full-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/698.gif" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Champion 8173 - Champion Youth Active Mesh Performance Shorts" data-turbo="false" id="25760" href="/champion-8173-champion-youth-active-mesh-performance-shorts-25760">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/25760/25760_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732194289" alt="Champion 8173 - Champion Youth Active Mesh Performance Shorts" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25760"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25760, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25760', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.37
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$13.19</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -21%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion 8173
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Champion Youth Active Mesh Performance Shorts
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/346.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="CHAMPION 0515BL - Womens Contour Legging" data-turbo="false" id="517777" href="/champion-0515bl-women-s-contour-legging-517777">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2022/6/15/517777/517777_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733143095" alt="CHAMPION 0515BL - Womens Contour Legging" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="517777"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(517777, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=517777', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $48.28
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$72.02</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -33%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        CHAMPION 0515BL
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Women&#39;s Contour Legging
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Columbia Golf 16S15WP - SunGuard Performance Polo with Sweat-Wicking Tech" data-turbo="false" id="498405" href="/columbia-golf-16s15wp-sunguard-performance-polo-with-sweat-wicking-tech-498405">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2020/11/17/498405/498405_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732641661" alt="Columbia Golf 16S15WP - SunGuard Performance Polo with Sweat-Wicking Tech" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="498405"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(498405, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=498405', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $32.40
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$56.51</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -43%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Columbia Golf 16S15WP
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        SunGuard Performance Polo with Sweat-Wicking Tech
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/11688.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+6 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Core 365 78181R - Womens Reflective Performance Polo with UV Protection" data-turbo="false" id="422406" href="/core-365-78181r-women-s-reflective-performance-polo-with-uv-protection-422406">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422406/422406_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742971969" alt="Core 365 78181R - Womens Reflective Performance Polo with UV Protection" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422406"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422406, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422406', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $14.23
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$31.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -54%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Core 365 78181R
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Women&#39;s Reflective Performance Polo with UV Protection
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/313.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/698.gif" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Core 365 CE401W - Ladies Kinetic Performance Quarter-Zip" data-turbo="false" id="422415" href="/core-365-ce401w-ladies-kinetic-performance-quarter-zip-422415">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422415/422415_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732898642" alt="Core 365 CE401W - Ladies Kinetic Performance Quarter-Zip" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422415"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422415, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422415', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $28.81
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$64.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -55%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Core 365 CE401W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Kinetic Performance Quarter-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41574.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41703.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41709.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Champion 0514BY - Champion Kids Durable Interlock Jogger Pants" data-turbo="false" id="478596" href="/champion-0514by-champion-kids-durable-interlock-jogger-pants-478596">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2020/7/10/478596/478596_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733152749" alt="Champion 0514BY - Champion Kids Durable Interlock Jogger Pants" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="478596"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(478596, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=478596', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $32.42
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$78.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -58%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion 0514BY
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Champion Kids Durable Interlock Jogger Pants
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Champion 1714BU - Ultimate Waterproof Ski Pants with Elastic Waist" data-turbo="false" id="478602" href="/champion-1714bu-ultimate-waterproof-ski-pants-with-elastic-waist-478602">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2020/7/10/478602/478602_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732898161" alt="Champion 1714BU - Ultimate Waterproof Ski Pants with Elastic Waist" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="478602"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(478602, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=478602', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $46.67
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$70.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -33%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion 1714BU
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ultimate Waterproof Ski Pants with Elastic Waist
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



                <a class="product " title="Jerzees 21 - Dri-Power® Poly Tee" data-turbo="false" id="546130" href="/jerzees-21-dri-power-poly-tee-546130">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2024/9/3/546130/546130_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733142083" alt="Jerzees 21 - Dri-Power® Poly Tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="546130"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(546130, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=546130', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $6.89
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$13.32</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -48%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Jerzees 21
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Dri-Power® Poly Tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/76674.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/76675.png" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="CX2 P4175Y - Score Youth Athletic Track Pant" data-turbo="false" id="534657" href="/cx2-p4175y-score-youth-athletic-track-pant-534657">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2024/2/9/534657/534657_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733146791" alt="CX2 P4175Y - Score Youth Athletic Track Pant" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="534657"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(534657, 'undefined', 'undefined');
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
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=534657', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $21.02
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$43.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -51%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        CX2 P4175Y
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Score Youth Athletic Track Pant
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/2305.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59517.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Devon &amp; Jones DG440W - Ladies Stretch Tech-Shell® Compass Quarter-Zip" data-turbo="false" id="40413" href="/devon-jones-dg440w-ladies-stretch-tech-shell-compass-quarter-zip-40413">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/1/19/40413/40413_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732885845" alt="Devon &amp; Jones DG440W - Ladies Stretch Tech-Shell® Compass Quarter-Zip" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="40413"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(40413, 'undefined', 'undefined');
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
                          <img class="tag object-contain aspect-square w-12 h-12 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
                        </div>

                        <div class="inline-tags">




                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=40413', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $18.17
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$78.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -77%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG440W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Stretch Tech-Shell® Compass Quarter-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/698.gif" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/951.jpg" />

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
              <div role="navigation" aria-label="Pagination" class="pagination-new"><span class="previous_page disabled" aria-label="Previous page"><img class="previous-label-icon" alt="Previous" src="https://assets.wordans.ca/assets/wordans_2024/chevron_left-ec55170ac6eb8dd95bfc0172c65c4517b42222254c8087e00fb35e17106b6b6b.svg" /> Previous</span> <em class="current">1</em> <a rel="next" href="/blank-apparel-accessories-c37029/sports-apparel-s21796?page=2">2</a> <a href="/blank-apparel-accessories-c37029/sports-apparel-s21796?page=3">3</a> <a href="/blank-apparel-accessories-c37029/sports-apparel-s21796?page=4">4</a> <a class="next_page" aria-label="Next page" rel="next" href="/blank-apparel-accessories-c37029/sports-apparel-s21796?page=2">Next <img class="next-label-icon" alt="Next" src="https://assets.wordans.ca/assets/wordans_2024/chevron_right-88b7140327f3e7abe94fcc6199c61fac16ace4221cd57aab1d1b6fbe2bf2f58a.svg" /></a></div>
            </div>


          </div>
        </form>
      </div>

      <div class='wrapper no-bs grid grid-cols-12 gap-8 my-8 text-lg text-justify'>
        <div class='col-span-12'>
          <section class='content content-container row' id='' x-data='{ isExpanded: true, isCompact: true }'>
            <div @click='isExpanded = !isExpanded' class='flex items-center cursor-pointer'>
              <h2 class="mt-0 title- text-xl mb-0 *:!text-dark-blue !text-dark-blue font-bold md:text-2xl xl:text-3xl " :class="isCompact &amp;&amp; &#39;text-2xl mt-2&#39;">Sports Apparel Wholesale &amp; Retail: Fit for Every Event</h2>
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
              <p>You'll be spoilt for choice when you shop for <a href="https://www.wordans.ca/" target="_blank">Wordans</a>' retail and <strong>wholesale</strong> <strong>sports apparel</strong>, ranging from <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/caps-s43515" target="_blank">caps</a> to <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/jackets-s43518" target="_blank">jackets</a>. This is beyond the more standard sports apparel that includes items like <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/polos-sports-t-shirts-s3667" target="_blank">t-shirts</a>, <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/pants-shorts-s21648" target="_blank">shorts</a>, and sport-specific apparel. Whether you're organizing a marathon, getting gifts for your staff, or just kitting out the family, our sports apparel can help get everyone up and about.</p>
              </p>
              <p>
              <p>Football players and fans shopping at Wordans will be delighted by our huddle football game jerseys, even though they are primarily available in white for the moment. They are available as wholesale sportswear, as well as retail. Another compelling feature of our football game jerseys is that they are available in multiple sizes, ranging from S to XL. Our jerseys are from Champion, which offers customers some reassurance about durability, quality, and overall comfort. Our jerseys are as functional as they are stylish.</p>
              </p>

            </div>
          </section>

          <section class='content content-container row' id='' x-data='{ isExpanded: true, isCompact: true }'>
            <div @click='isExpanded = !isExpanded' class='flex items-center cursor-pointer'>
              <h2 class="mt-0 title- text-xl mb-0 *:!text-dark-blue !text-dark-blue font-bold md:text-2xl xl:text-3xl " :class="isCompact &amp;&amp; &#39;text-2xl mt-2&#39;">Fantastic Wholesale &amp; Retail Apparel for Working Out</h2>
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
              <p>You'll want to shop at Wordans if you spend a considerable amount of time in the gym, jogging, or just working out in general. Our jogging apparel, which is available to both <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/sports-apparel-s21796/men-g27" target="_blank">men</a> and <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/sports-apparel-s21796/women-g24" target="_blank">women</a>, is great at keeping your muscles warm while also possessing cooling qualities that help you perform at a higher intensity for longer periods. We also have <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/sports-apparel-s21796/unisex-g4789" target="_blank">unisex sportswear</a> in stock, which is especially popular with businesses. At Wordans, we're particularly proud of our <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/polos-sports-t-shirts-s3667" target="_blank">polos and t-shirts</a>, which cater to men, women, and young people. We have t-shirts that are suitable for warm environments and t-shirts that are great for cooler environments. We have t-shirts that are absorbent, and t-shirts with great moisture-wicking properties.</p>
              </p>

            </div>
          </section>

          <section class='content content-container row' id='' x-data='{ isExpanded: true, isCompact: true }'>
            <div @click='isExpanded = !isExpanded' class='flex items-center cursor-pointer'>
              <h2 class="mt-0 title- text-xl mb-0 *:!text-dark-blue !text-dark-blue font-bold md:text-2xl xl:text-3xl " :class="isCompact &amp;&amp; &#39;text-2xl mt-2&#39;">Water-Resistant Jackets from Wordans Canada</h2>
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
              <p>Wordans has <strong>wholesale</strong>, <strong>cheap</strong>, and<strong> bulk sports apparel</strong> available to the public in both <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/sports-apparel-s21796/short-sleeves-a5893" target="_blank">short </a>and <a href="https://www.wordans.ca/blank-apparel-accessories-c37029/sports-apparel-s21796/long-sleeves-a5892" target="_blank">long sleeves</a>, which is also a prominent feature of our jackets. Our jackets, which are also great for social gatherings, come in a range of styles for men and women. You can shop through our stores for jackets that are made from 100 percent polyester, which ensures that you stay dry in the wettest of environments. These jackets are light, which is great, but they also have a jersey lining on the inside that will help keep you warm and dry.</p>
              </p>
              <p>
              <p>In extremely cold environments, it isn’t always enough to keep your body warm and dry, but you also need to find a jacket that will keep your head and ears warm. At Wordans, we have quarter-zipped, full-zipped, and heavy-duty cotton jackets that have a hood, along with insulated hooded jackets. Whether you're in the gym or hiking, at Wordans you'll always get the best brands and the best prices. </p>
              </p>

            </div>
          </section>

        </div>
      </div>



    </div>
  </section>
</div>



<?php
include '../includes/footer.php';
?>