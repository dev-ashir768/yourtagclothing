<?php
include '../includes/header.php';
?>


<script src="/assets/js/product_filter_functions.js"></script>

<script>
  const MAX_PRICE = 31.62;
  const MIN_PRICE = 1.61;
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
    "style": 2732,
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
  <span itemprop="name" content="Headwear wholesale and retail. "></span>
  <span itemprop="description" content="Cheap wholesale Headwear products. Bulk discounts, no minimum. Buy at crazy wholesale prices with fast shipping."></span>

  <section id="marketplace-container" class="marketplace-container new-design marketplace-category content !p-0" data-categories="categories" data-brands="brands" data-gender="gender" data-style="type" data-colors="colors" data-options="options" data-weight="weight" data-grammage="grammage" data-style2="type2" data-search="q" data-composition="composition" data-warehouses="warehouse" data-sort="sort-order" data-select="select" data-per_page="per-page" data-page="page" itemscope="" itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
    <span itemprop="ratingValue" content="5.0"></span>
    <span itemprop="ratingCount" content="23"></span>
    <span itemprop="bestRating" content="5.0"></span>

    <div class="wrapper product-container">


      <div class="breadcrumbs turbo-native-hidden">
        <nav class="mt-4 mb-0 md:my-4 py-0 text-sm text-center md:text-lg md:text-left text-[#969696] !font-['montserrat-medium']" itemscope itemtype="http://schema.org/BreadcrumbList" aria-label="Breadcrumb">
          <ol class="list-none p-0 flex flex-wrap items-center">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="">
              <a itemprop="item" href="https://yourtagclothing.com/">
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
                <span class='text-[#969696]' itemprop='name'>Headwear</span>
              </span>
              <meta itemprop="position" content="3" />
            </li>
          </ol>
        </nav>

      </div>


      <div>
        <form class="flex justify-between items-start mt-4 md:!mt-8" action="/product" accept-charset="UTF-8" method="post">



          <nav class="relative rounded-xl border border-none light-border md:border-solid md:bg-[#FAFBFD] mr-12 min-w-[241px] w-[241px] md:!block hidden"
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
                <span>412 results.</span>
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
                    Headwear
                    <a href="javascript:leaveStyle('headwear-s2732')">
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
                <tc-range-slider min="1.61"
                  max="31.62"
                  id="range-price-filter"
                  slider-bg-fill="#00228A"
                  slider-height="3px"
                  pointer-width="15px"
                  pointer-height="15px"
                  pointer-border="3px solid #00228A"
                  pointer-border-hover="3px solid #00228A"
                  pointer-border-focus="3px solid #00228A"
                  value1="1.61"
                  value2="31.62"
                  css-links="https://assets.wordans.ca/assets/range-slider-dd6f2f55b278c40f6282470ed1012642492779807d37e1d8d0f0a3e630cb92b4.css">
                </tc-range-slider>

                <div class="grid grid-cols-2 gap-10 mb-6 mt-4">
                  <div class="">
                    <span class="text-xl">From</span>
                    <div class="flex items-center">
                      <span class="border-l border-t border-b border-light-blue font-semibold text-xl text-gray-700 bg-white p-2 rounded-l-lg text-purple-">$</span>
                      <input type="number"
                        id="min-price-input"
                        min="1.61"
                        max="31.62"
                        class="min-amount p-2 rounded-r-lg font-semibold text-xl text-purple- border-y border-t border-b border-r border-light-blue"
                        value="1.61">
                    </div>
                  </div>
                  <div class="">
                    <span class="text-xl">To</span>
                    <div class="flex items-center">
                      <span class="border-l border-t border-b border-light-blue font-semibold text-xl text-gray-700 bg-white p-2 rounded-l-lg text-purple-">$</span>
                      <input type="number"
                        id="max-price-input"
                        min="1.61"
                        max="31.62"
                        class="max-amount p-2 rounded-r-lg font-semibold text-xl text-purple- border-y border-t border-b border-r border-light-blue"
                        value="31.62">
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/black-and-white-m66"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/turquoise-m65"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/lime-green-m64"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/beige-m61"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/navy-blue-m41"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/burgundy-m56"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/red-m24"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/pink-m21"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/purple-m27"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/blue-m6"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/sky-blue-m60"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/green-m15"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/yellow-m33"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/orange-m18"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/white-m30"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/brown-m9"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/khaki-m53"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/black-m3"
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
                      href="/blank-apparel-accessories-c37029/headwear-s2732/gray-m12"
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
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Gender - Age</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/kids-g10">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Kids</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/men-g27">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Men</span>
                        <span class="small">(385)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/unisex-g4789">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Unisex</span>
                        <span class="small">(378)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/beanies-s43647">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Beanies</span>
                        <span class="small">(79)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/bucket-hats-s43638">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Bucket Hats</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/camo-s21778">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Camo</span>
                        <span class="small">(31)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/caps-s21750">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Caps</span>
                        <span class="small">(162)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/headbands-s23237', 'style')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Headbands</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/toque-s21740">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Toque</span>
                        <span class="small">(26)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/trapper-s43641', 'style')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Trapper</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/visor-s21876">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Visor</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/ajm-b42369/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>AJM</span>
                        <span class="small">(268)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;champion&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/champion-b21311/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Champion</span>
                        <span class="small">(14)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;core365&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/core365-b16798', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Core365</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;csw 24/7&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/csw-24-7-b44616/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>CSW 24/7</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;dri duck&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/dri-duck-b22696', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Dri Duck</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;elevate&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/elevate-b23498/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Elevate</span>
                        <span class="small">(13)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;flexfit&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/flexfit-b16294/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Flexfit</span>
                        <span class="small">(25)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;imperial&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/imperial-b37503', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Imperial</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;kati&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/kati-b16298/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Kati</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;los angeles apparel&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/los-angeles-apparel-b44783/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Los Angeles Apparel</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;puma&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/puma-b21767/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>PUMA</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;radsow&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/radsow-b43791/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Radsow</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;richardson&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/richardson-b44811/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Richardson</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;sportsman&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/sportsman-b16307/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sportsman</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;team 365&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/team-365-b22052/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Team 365</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;trimark&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/trimark-b72655/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Trimark</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;valucap&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/valucap-b21293/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Valucap</span>
                        <span class="small">(13)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;whelk goods&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/whelk-goods-b44827/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Whelk Goods</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;yp classics&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/yp-classics-b44781/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>YP Classics</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;yupoong&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/yupoong-b16316/headwear-s2732">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Yupoong</span>
                        <span class="small">(14)</span>
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
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww2', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W2</span>
                        <span class="small">(17)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww3', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W3</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww6', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W6</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww7', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W7</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww8', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W8</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww10', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W10</span>
                        <span class="small">(268)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww11', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W11</span>
                        <span class="small">(16)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww14', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W14</span>
                        <span class="small">(83)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/custom-o47">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Custom</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/high-stock-o50', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>High Stock</span>
                        <span class="small">(347)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/organic-o5', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Organic</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/thermal-o65', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Thermal</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/camo-a5924">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Camo</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/plaid-a5926">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Plaid</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/vintage-a5920', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Vintage</span>
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
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Fabric</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/100-acrylic-a1332', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>100% Acrylic</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/100-cotton-a118">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>100% cotton</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/100-polyester-a181">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>100% polyester</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/acrylic-a169">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Acrylic</span>
                        <span class="small">(11)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/coton-polyester-a136">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Coton-polyester</span>
                        <span class="small">(52)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/cotton-a103">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Cotton</span>
                        <span class="small">(45)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/heather-a5937">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Heather</span>
                        <span class="small">(13)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/jersey-a5931">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jersey</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/knit-a5933">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Knit</span>
                        <span class="small">(32)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/mesh-a5936">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Mesh</span>
                        <span class="small">(66)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/micro-fleece-a5942">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Micro fleece</span>
                        <span class="small">(14)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/nylon-a298">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Nylon</span>
                        <span class="small">(11)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/polyester-a145">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester</span>
                        <span class="small">(134)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/polyester-mesh-a664">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester mesh</span>
                        <span class="small">(43)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/soft-a5938">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Soft</span>
                        <span class="small">(73)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/spandex-a1345', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Spandex</span>
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/heavyweight-a334', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Heavyweight</span>
                        <span class="small">(6)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/baseball-a5909">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Baseball</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/casual-a5911">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Casual</span>
                        <span class="small">(142)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/formal-a5912">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Formal</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/golf-a5905', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Golf</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/other-a160">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Other</span>
                        <span class="small">(27)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/outdoor-a5917">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Outdoor</span>
                        <span class="small">(143)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/running-a790', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Running</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/sport-performance-a5907">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sport / Performance</span>
                        <span class="small">(21)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/work-professional-a5908">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Work / Professional</span>
                        <span class="small">(10)</span>
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/moisture-wicking-a934', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Moisture Wicking</span>
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
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Fit</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/fitted-a5890">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Fitted</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-apparel-accessories-c37029/headwear-s2732/stretch-a5884">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Stretch</span>
                        <span class="small">(7)</span>
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





            <h1 class="mt-3 mb-4 text-xl font-bold text-center md:text-left md:text-4xl text-dark-blue">Headwear <span class="text-gray-500 font-normal">wholesale and retail</span> </h1>



            <div class="flex items-center justify-between">
              <div class="font-normal text-gray-500">412 results.</div>
              <div class="pagination-container top wordans-pagination pagination-footer">
                <div role="navigation" aria-label="Pagination" class="pagination-new"><span class="previous_page disabled" aria-label="Previous page"><img class="previous-label-icon" alt="Previous" src="https://assets.wordans.ca/assets/wordans_2024/chevron_left-ec55170ac6eb8dd95bfc0172c65c4517b42222254c8087e00fb35e17106b6b6b.svg" /></span> <em class="current">1</em> <a rel="next" href="/blank-apparel-accessories-c37029/headwear-s2732?page=2">2</a> <a href="/blank-apparel-accessories-c37029/headwear-s2732?page=3">3</a> <span class="gap"></span> <a href="/blank-apparel-accessories-c37029/headwear-s2732?page=9">9</a> <a class="next_page" aria-label="Next page" rel="next" href="/blank-apparel-accessories-c37029/headwear-s2732?page=2"><img class="next-label-icon" alt="Next" src="https://assets.wordans.ca/assets/wordans_2024/chevron_right-88b7140327f3e7abe94fcc6199c61fac16ace4221cd57aab1d1b6fbe2bf2f58a.svg" /></a></div>
              </div>
            </div>


            <turbo-frame
              id="products-grid"
              data-turbo-action="append"
              class="grid grid-cols-2 gap-5 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 md:mx-0">


              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Radsow KS12 - Knitted Beanie Cozy 100% Acrylic  - One Size Fits All" data-turbo="false" id="516956" href="/radsow-ks12-knitted-beanie-cozy-100-acrylic-one-size-fits-all-516956">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2022/3/18/516956/516956_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732485445" alt="Radsow KS12 - Knitted Beanie Cozy 100% Acrylic  - One Size Fits All" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="516956"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(516956, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=516956', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $2.61
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$5.10</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -49%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Radsow KS12
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Knitted Beanie Cozy 100% Acrylic - One Size Fits All
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+12 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Yupoong 6006 - Five-Panel Classic Trucker Cap" data-turbo="false" id="27756" href="/yupoong-6006-five-panel-classic-trucker-cap-27756">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/9/1/27756/27756_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732197183" alt="Yupoong 6006 - Five-Panel Classic Trucker Cap" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="27756"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(27756, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=27756', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.88
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$11.34</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -31%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong 6006
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Five-Panel Classic Trucker Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+5 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Yupoong 6506 - Adult 5-Panel Retro Trucker Cap" data-turbo="false" id="433824" href="/yupoong-6506-adult-5-panel-retro-trucker-cap-433824">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2019/1/24/433824/433824_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732486851" alt="Yupoong 6506 - Adult 5-Panel Retro Trucker Cap" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="433824"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(433824, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=433824', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $8.25
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$11.34</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -27%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong 6506
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Adult 5-Panel Retro Trucker Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+5 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Yupoong 6606 - Classic Retro Trucker Hat with Mesh Back and Adjustable Closure" data-turbo="false" id="27777" href="/yupoong-6606-classic-retro-trucker-hat-with-mesh-back-and-adjustable-closure-27777">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/1/27777/27777_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732197226" alt="Yupoong 6606 - Classic Retro Trucker Hat with Mesh Back and Adjustable Closure" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="27777"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(27777, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=27777', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.68
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$12.40</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -38%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong 6606
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Classic Retro Trucker Hat with Mesh Back and Adjustable Closure
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+10 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit FF6277 - Baseball Hat Premium Cotton Blend Fitted with Structured Mid-Profile Design" data-turbo="false" id="5128" href="/flexfit-ff6277-baseball-hat-premium-cotton-blend-fitted-with-structured-mid-profile-design-5128">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/7/8/5128/5128_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1743705684" alt="Flexfit FF6277 - Baseball Hat Premium Cotton Blend Fitted with Structured Mid-Profile Design" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="5128"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(5128, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=5128', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.84
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$17.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -36%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit FF6277
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Baseball Hat Premium Cotton Blend Fitted with Structured Mid-Profile Design
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/99.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/176.png" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/64665.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Yupoong 6089 - 6-Panel Structured Flat Visor Classic Snapback" data-turbo="false" id="40632" href="/yupoong-6089-6-panel-structured-flat-visor-classic-snapback-40632">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2016/1/19/40632/40632_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732489608" alt="Yupoong 6089 - 6-Panel Structured Flat Visor Classic Snapback" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="40632"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(40632, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=40632', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.38
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$13.58</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -24%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong 6089
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        6-Panel Structured Flat Visor Classic Snapback
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/32.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Yupoong 6245CM - Adult Low-Profile Classic Dad Cap" data-turbo="false" id="422478" href="/yupoong-6245cm-adult-low-profile-classic-dad-cap-422478">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422478/422478_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732526120" alt="Yupoong 6245CM - Adult Low-Profile Classic Dad Cap" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422478"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422478, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422478', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $8.90
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$13.10</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -32%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong 6245CM
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Adult Low-Profile Classic Dad Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+9 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit 5001 - 6-Panel Structured Mid-Profile Cotton Twill Cap" data-turbo="false" id="29921" href="/flexfit-5001-6-panel-structured-mid-profile-cotton-twill-cap-29921">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29921/29921_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732199317" alt="Flexfit 5001 - 6-Panel Structured Mid-Profile Cotton Twill Cap" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29921"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29921, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29921', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $11.16
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$15.18</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -26%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit 5001
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        6-Panel Structured Mid-Profile Cotton Twill Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/32.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit 6277 - Classic Wool-Like Structured 6-Panel Cap" data-turbo="false" id="29909" href="/flexfit-6277-classic-wool-like-structured-6-panel-cap-29909">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29909/29909_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732199269" alt="Flexfit 6277 - Classic Wool-Like Structured 6-Panel Cap" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29909"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29909, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29909', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.84
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$17.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -36%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit 6277
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Classic Wool-Like Structured 6-Panel Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/29.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+17 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit 6511 - 6-Panel Structured Trucker Cap with Mesh" data-turbo="false" id="29918" href="/flexfit-6511-6-panel-structured-trucker-cap-with-mesh-29918">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29918/29918_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732199303" alt="Flexfit 6511 - 6-Panel Structured Trucker Cap with Mesh" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29918"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29918, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29918', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.66
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$12.78</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -40%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit 6511
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        6-Panel Structured Trucker Cap with Mesh
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/96.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+9 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="toque bourdeaux" data-turbo="false" id="29906" href="/yupoong-1501-premium-hypoallergenic-knit-beanie-cap-29906">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29906/29906_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732199249" alt="toque bourdeaux" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29906"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29906, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29906', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $5.23
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$6.80</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -23%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong 1501
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Hypoallergenic Knit Beanie Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/547.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Valucap VC300A - Adult Bio-Washed Unstructured Cap" data-turbo="false" id="23531" href="/valucap-vc300a-adult-bio-washed-unstructured-cap-23531">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/8/27/23531/23531_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1746610674" alt="Valucap VC300A - Adult Bio-Washed Unstructured Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="23531"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(23531, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=23531', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.36
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -15%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Valucap VC300A
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Adult Bio-Washed Unstructured Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/32.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+19 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit FF6511 - Premium Structured Trucker Mesh Cap with Permacurv Visor" data-turbo="false" id="14527" href="/flexfit-ff6511-premium-structured-trucker-mesh-cap-with-permacurv-visor-14527">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/11/26/14527/14527_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1743705900" alt="Flexfit FF6511 - Premium Structured Trucker Mesh Cap with Permacurv Visor" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="14527"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(14527, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=14527', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.20
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$12.78</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -20%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit FF6511
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Structured Trucker Mesh Cap with Permacurv Visor
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/709.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/711.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit 6477 - Wooly Blend 6-Panel Cap" data-turbo="false" id="29903" href="/flexfit-6477-wooly-blend-6-panel-cap-29903">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29903/29903_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732199234" alt="Flexfit 6477 - Wooly Blend 6-Panel Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29903"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29903, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29903', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $12.01
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$19.42</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -38%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit 6477
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Wooly Blend 6-Panel Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/32.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+6 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit FF6477 - Premium Wool Blend Structured Fitted Cap with Permacurv Visor" data-turbo="false" id="5131" href="/flexfit-ff6477-premium-wool-blend-structured-fitted-cap-with-permacurv-visor-5131">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/7/8/5131/5131_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1746537019" alt="Flexfit FF6477 - Premium Wool Blend Structured Fitted Cap with Permacurv Visor" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="5131"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(5131, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=5131', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $12.86
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$19.42</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -34%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit FF6477
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Wool Blend Structured Fitted Cap with Permacurv Visor
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/32.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Radsow Bobby - Bucket Hat - Versatile Chino Twill Unstructured" data-turbo="false" id="523092" href="/radsow-bobby-bucket-hat-versatile-chino-twill-unstructured-523092">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2023/3/1/523092/523092_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732626208" alt="Radsow Bobby - Bucket Hat - Versatile Chino Twill Unstructured" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="523092"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(523092, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=523092', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.38
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$9.57</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -23%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Radsow Bobby
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Bucket Hat - Versatile Chino Twill Unstructured
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/108.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/110.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Champion CH2006 - Ameritage Dad Adjustable Cap" data-turbo="false" id="498906" href="/champion-ch2006-ameritage-dad-adjustable-cap-498906">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2020/12/17/498906/498906_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732614973" alt="Champion CH2006 - Ameritage Dad Adjustable Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="498906"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(498906, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=498906', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $15.24
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$20.72</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -26%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion CH2006
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ameritage Dad Adjustable Cap
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



                <a class="product contain" title="Flexfit 6210 - High-Profile Structured Fitted Cap with Moisture Control" data-turbo="false" id="38464" href="/flexfit-6210-high-profile-structured-fitted-cap-with-moisture-control-38464">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2016/1/12/38464/38464_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732624383" alt="Flexfit 6210 - High-Profile Structured Fitted Cap with Moisture Control" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="38464"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(38464, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=38464', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $12.97
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$19.86</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -35%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit 6210
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        High-Profile Structured Fitted Cap with Moisture Control
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/577.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit 110F - Fitted Classic Shape Cap" data-turbo="false" id="29654" href="/flexfit-110f-fitted-classic-shape-cap-29654">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29654/29654_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732198633" alt="Flexfit 110F - Fitted Classic Shape Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29654"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29654, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29654', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $12.50
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$20.70</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -40%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit 110F
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Fitted Classic Shape Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Champion 4101NN - Comfort Fit Cotton Twill Sun Protection Cap" data-turbo="false" id="478629" href="/champion-4101nn-comfort-fit-cotton-twill-sun-protection-cap-478629">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2020/7/10/478629/478629_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732624958" alt="Champion 4101NN - Comfort Fit Cotton Twill Sun Protection Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="478629"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(478629, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=478629', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $19.06
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$27.07</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -30%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion 4101NN
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Comfort Fit Cotton Twill Sun Protection Cap
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



                <a class="product " title="toque white" data-turbo="false" id="29915" href="/yupoong-1500-premium-knit-cap-for-easy-embroidery-hypoallergenic-29915">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29915/29915_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732199283" alt="toque white" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29915"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29915, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29915', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.53
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$6.10</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -26%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong 1500
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Knit Cap for Easy Embroidery - Hypoallergenic
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/547.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit 110C - Cool/Dry Pro-Formance Cap" data-turbo="false" id="29648" href="/flexfit-110c-cool-dry-pro-formance-cap-29648">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29648/29648_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732198620" alt="Flexfit 110C - Cool/Dry Pro-Formance Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29648"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29648, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29648', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $12.58
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$20.90</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -40%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit 110C
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Cool/Dry Pro-Formance Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/32.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit ATB100 - for Team 365 Cool &amp; Dry® Mini Piqué Performance Cap" data-turbo="false" id="29666" href="/flexfit-atb100-for-team-365-cool-dry-mini-pique-performance-cap-29666">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29666/29666_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732198661" alt="Flexfit ATB100 - for Team 365 Cool &amp; Dry® Mini Piqué Performance Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29666"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29666, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29666', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.87
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$19.86</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -45%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit ATB100
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        for Team 365 Cool &amp; Dry® Mini Piqué Performance Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/9626.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit FF5001 - Fitted Cap V-Flex Structured Cotton Twill" data-turbo="false" id="5119" href="/flexfit-ff5001-fitted-cap-v-flex-structured-cotton-twill-5119">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/7/8/5119/5119_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1746536622" alt="Flexfit FF5001 - Fitted Cap V-Flex Structured Cotton Twill" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="5119"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(5119, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=5119', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $11.16
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$15.18</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -26%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit FF5001
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Fitted Cap V-Flex Structured Cotton Twill
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Flexfit 6597 - Ultra Cool &amp; Dry Performance Sport Cap by Flexfit" data-turbo="false" id="24576" href="/flexfit-6597-ultra-cool-dry-performance-sport-cap-by-flexfit-24576">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/28/24576/24576_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732042751" alt="Flexfit 6597 - Ultra Cool &amp; Dry Performance Sport Cap by Flexfit" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="24576"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(24576, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=24576', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $11.78
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$16.16</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -27%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit 6597
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ultra Cool &amp; Dry Performance Sport Cap by Flexfit
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/32.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Valucap VC300Y - Youth Bio-Washed Unstructured Cap" data-turbo="false" id="23534" href="/valucap-vc300y-youth-bio-washed-unstructured-cap-23534">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/8/27/23534/23534_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1440686633" alt="Valucap VC300Y - Youth Bio-Washed Unstructured Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="23534"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(23534, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=23534', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.85
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -10%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Valucap VC300Y
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Youth Bio-Washed Unstructured Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit ATB102 - for Team 365 Pro Performance Front Sweep Cap" data-turbo="false" id="29675" href="/flexfit-atb102-for-team-365-pro-performance-front-sweep-cap-29675">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29675/29675_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732198689" alt="Flexfit ATB102 - for Team 365 Pro Performance Front Sweep Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29675"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29675, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29675', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.24
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$16.82</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -39%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit ATB102
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        for Team 365 Pro Performance Front Sweep Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/13568.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/13841.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="CSW 24/7 H08200 - Home Run Cotton Twill Cap" data-turbo="false" id="666617" href="/csw-24-7-h08200-home-run-cotton-twill-cap-666617">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2025/4/22/666617/666617_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1745311916" alt="CSW 24/7 H08200 - Home Run Cotton Twill Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="666617"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(666617, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=666617', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.01
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$7.40</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -46%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        CSW 24/7 H08200
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Home Run Cotton Twill Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+17 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Yupoong YP5089 - Adult 5-Panel Structured Flat Visor Classic Snapback Cap" data-turbo="false" id="522468" href="/yupoong-yp5089-adult-5-panel-structured-flat-visor-classic-snapback-cap-522468">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2023/1/8/522468/522468_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733148781" alt="Yupoong YP5089 - Adult 5-Panel Structured Flat Visor Classic Snapback Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="522468"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(522468, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=522468', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.29
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$12.82</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -20%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong YP5089
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Adult 5-Panel Structured Flat Visor Classic Snapback Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/577.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit FF110F - Wool Blend Flat Bill Snapback" data-turbo="false" id="5116" href="/flexfit-ff110f-wool-blend-flat-bill-snapback-5116">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/7/8/5116/5116_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1746536467" alt="Flexfit FF110F - Wool Blend Flat Bill Snapback" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="5116"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(5116, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=5116', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $12.50
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$20.70</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -40%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit FF110F
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Wool Blend Flat Bill Snapback
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/577.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Yupoong 6006W - Adult Classic Trucker with White Front Panel Cap" data-turbo="false" id="522457" href="/yupoong-6006w-adult-classic-trucker-with-white-front-panel-cap-522457">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2023/1/8/522457/522457_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732626451" alt="Yupoong 6006W - Adult Classic Trucker with White Front Panel Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="522457"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(522457, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=522457', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.88
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$10.16</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -22%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong 6006W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Adult Classic Trucker with White Front Panel Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/71266.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/71267.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit 110FT - Fitted Classic Two-Tone Cap" data-turbo="false" id="29660" href="/flexfit-110ft-fitted-classic-two-tone-cap-29660">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29660/29660_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732198647" alt="Flexfit 110FT - Fitted Classic Two-Tone Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29660"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29660, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29660', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $12.76
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$20.70</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -38%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit 110FT
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Fitted Classic Two-Tone Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/248.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/980.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Yupoong 6606MC - YP Classics® Retro Trucker Multicam® Snapback" data-turbo="false" id="522473" href="/yupoong-6606mc-yp-classics-retro-trucker-multicam-snapback-522473">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2023/1/8/522473/522473_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733146080" alt="Yupoong 6606MC - YP Classics® Retro Trucker Multicam® Snapback" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="522473"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(522473, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=522473', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $11.65
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$14.50</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -20%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong 6606MC
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        YP Classics® Retro Trucker Multicam® Snapback
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/42492.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/42495.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit YP180 - Flexfit Stain-Block Mid-Profile Performance Cap" data-turbo="false" id="522470" href="/flexfit-yp180-flexfit-stain-block-mid-profile-performance-cap-522470">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2023/1/8/522470/522470_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732643433" alt="Flexfit YP180 - Flexfit Stain-Block Mid-Profile Performance Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="522470"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(522470, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=522470', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $15.51
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$21.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -26%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit YP180
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Flexfit Stain-Block Mid-Profile Performance Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/244.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Yupoong Y6007 - Adult 5-Panel Cotton Twill Snapback Cap" data-turbo="false" id="522472" href="/yupoong-y6007-adult-5-panel-cotton-twill-snapback-cap-522472">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2023/1/8/522472/522472_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733140060" alt="Yupoong Y6007 - Adult 5-Panel Cotton Twill Snapback Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="522472"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(522472, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=522472', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $8.74
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$11.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -21%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong Y6007
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Adult 5-Panel Cotton Twill Snapback Cap
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



                <a class="product contain" title="CSW 24/7 H08000 - Polar Adult Acrylic Knit Cuff Toque" data-turbo="false" id="546607" href="/csw-24-7-h08000-polar-adult-acrylic-knit-cuff-toque-546607">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2024/10/18/546607/546607_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732884179" alt="CSW 24/7 H08000 - Polar Adult Acrylic Knit Cuff Toque" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="546607"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(546607, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=546607', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.43
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$7.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -51%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        CSW 24/7 H08000
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Polar Adult Acrylic Knit Cuff Toque
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/32.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+8 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit FF6210 - Premium Structured Flat Visor Fitted Cap" data-turbo="false" id="14524" href="/flexfit-ff6210-premium-structured-flat-visor-fitted-cap-14524">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/11/26/14524/14524_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1746536645" alt="Flexfit FF6210 - Premium Structured Flat Visor Fitted Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="14524"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(14524, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=14524', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $12.97
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$19.86</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -35%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit FF6210
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Structured Flat Visor Fitted Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/577.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit 6533 - Ultrafiber Cap with Air Mesh Sides" data-turbo="false" id="24561" href="/flexfit-6533-ultrafiber-cap-with-air-mesh-sides-24561">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/8/28/24561/24561_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732042743" alt="Flexfit 6533 - Ultrafiber Cap with Air Mesh Sides" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="24561"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(24561, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=24561', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.05
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$15.32</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -34%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit 6533
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ultrafiber Cap with Air Mesh Sides
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/132.png" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="CSW 24/7 H08210 - Retro Foam Snap back Trucker Cap" data-turbo="false" id="666619" href="/csw-24-7-h08210-retro-foam-snap-back-trucker-cap-666619">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2025/4/22/666619/666619_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1745312260" alt="CSW 24/7 H08210 - Retro Foam Snap back Trucker Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="666619"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(666619, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=666619', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.15
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.50</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -51%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        CSW 24/7 H08210
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Retro Foam Snap back Trucker Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/95.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/101.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+7 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Flexfit 110F - Wool Blend Flat Bill Snapback Cap" data-turbo="false" id="24522" href="/flexfit-110f-wool-blend-flat-bill-snapback-cap-24522">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/28/24522/24522_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732042698" alt="Flexfit 110F - Wool Blend Flat Bill Snapback Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="24522"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(24522, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=24522', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $12.50
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$20.70</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -40%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit 110F
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Wool Blend Flat Bill Snapback Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/547.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Yupoong 6601T - Classics® Low Profile 2-Tone Trucker Cap" data-turbo="false" id="527675" href="/yupoong-6601t-classics-low-profile-2-tone-trucker-cap-527675">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2023/11/25/527675/527675_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733138540" alt="Yupoong 6601T - Classics® Low Profile 2-Tone Trucker Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="527675"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(527675, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=527675', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $9.15
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$9.80</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -10%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong 6601T
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Classics® Low Profile 2-Tone Trucker Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/96.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/709.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/1179.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="CSW 24/7 H08205 - Trucker Cotton Twill Snap back Trucker Cap" data-turbo="false" id="666618" href="/csw-24-7-h08205-trucker-cotton-twill-snap-back-trucker-cap-666618">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2025/4/22/666618/666618_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1745312139" alt="CSW 24/7 H08205 - Trucker Cotton Twill Snap back Trucker Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="666618"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(666618, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=666618', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.15
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.50</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -51%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        CSW 24/7 H08205
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Trucker Cotton Twill Snap back Trucker Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/96.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/101.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+8 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Richardson 112 - Richardson Truckr Snapback Cap" data-turbo="false" id="547200" href="/richardson-112-richardson-truckr-snapback-cap-547200">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2024/11/28/547200/547200_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1747671807" alt="Richardson 112 - Richardson Truckr Snapback Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="547200"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(547200, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=547200', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $9.51
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$12.83</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -26%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Richardson 112
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Richardson Truckr Snapback Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+47 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Sportsman SP12 - Knit 12? Tuque" data-turbo="false" id="14536" href="/sportsman-sp12-knit-12-tuque-14536">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/11/26/14536/14536_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1743720769" alt="Sportsman SP12 - Knit 12? Tuque" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="14536"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(14536, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=14536', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $2.92
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -10%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Sportsman SP12
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Knit 12? Tuque
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+23 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Champion 4100NN - Breathable Two-Tone Trucker Mesh Cap" data-turbo="false" id="478626" href="/champion-4100nn-breathable-two-tone-trucker-mesh-cap-478626">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2020/7/10/478626/478626_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732897784" alt="Champion 4100NN - Breathable Two-Tone Trucker Mesh Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="478626"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(478626, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=478626', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $19.06
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$25.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -24%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion 4100NN
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Breathable Two-Tone Trucker Mesh Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/96.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/709.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/710.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit 110M - Adult 110® Mesh Cap" data-turbo="false" id="534722" href="/flexfit-110m-adult-110-mesh-cap-534722">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2024/2/16/534722/534722_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732899263" alt="Flexfit 110M - Adult 110® Mesh Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="534722"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(534722, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=534722', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.77
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$13.70</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -21%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Flexfit 110M
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Adult 110® Mesh Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+10 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="CSW 24/7 H8200Y - Home Run Youth Cotton Twill Cap" data-turbo="false" id="666621" href="/csw-24-7-h8200y-home-run-youth-cotton-twill-cap-666621">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2025/4/22/666621/666621_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1745312444" alt="CSW 24/7 H8200Y - Home Run Youth Cotton Twill Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="666621"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(666621, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=666621', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.01
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$7.40</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -46%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        CSW 24/7 H8200Y
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Home Run Youth Cotton Twill Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+17 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Yupoong 6601 - Classics® Low Profile Trucker Cap" data-turbo="false" id="527673" href="/yupoong-6601-classics-low-profile-trucker-cap-527673">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2023/11/25/527673/527673_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732883269" alt="Yupoong 6601 - Classics® Low Profile Trucker Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="527673"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(527673, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=527673', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $8.99
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$9.80</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -10%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Yupoong 6601
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Classics® Low Profile Trucker Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/101.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Valucap 8869 - Five-Panel Twill Cap" data-turbo="false" id="27513" href="/valucap-8869-five-panel-twill-cap-27513">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/9/1/27513/27513_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1441167635" alt="Valucap 8869 - Five-Panel Twill Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="27513"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(27513, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=27513', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.91
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -10%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Valucap 8869
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Five-Panel Twill Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Champion 4102NN - Ultimate Comfort Stretch Fit Sports Cap" data-turbo="false" id="478632" href="/champion-4102nn-ultimate-comfort-stretch-fit-sports-cap-478632">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2020/7/10/478632/478632_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733143656" alt="Champion 4102NN - Ultimate Comfort Stretch Fit Sports Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="478632"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(478632, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=478632', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $20.33
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$27.62</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -26%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Champion 4102NN
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ultimate Comfort Stretch Fit Sports Cap
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
              <div role="navigation" aria-label="Pagination" class="pagination-new"><span class="previous_page disabled" aria-label="Previous page"><img class="previous-label-icon" alt="Previous" src="https://assets.wordans.ca/assets/wordans_2024/chevron_left-ec55170ac6eb8dd95bfc0172c65c4517b42222254c8087e00fb35e17106b6b6b.svg" /> Previous</span> <em class="current">1</em> <a rel="next" href="/blank-apparel-accessories-c37029/headwear-s2732?page=2">2</a> <a href="/blank-apparel-accessories-c37029/headwear-s2732?page=3">3</a> <a href="/blank-apparel-accessories-c37029/headwear-s2732?page=4">4</a> <a href="/blank-apparel-accessories-c37029/headwear-s2732?page=5">5</a> <a href="/blank-apparel-accessories-c37029/headwear-s2732?page=6">6</a> <a href="/blank-apparel-accessories-c37029/headwear-s2732?page=7">7</a> <a href="/blank-apparel-accessories-c37029/headwear-s2732?page=8">8</a> <a href="/blank-apparel-accessories-c37029/headwear-s2732?page=9">9</a> <a class="next_page" aria-label="Next page" rel="next" href="/blank-apparel-accessories-c37029/headwear-s2732?page=2">Next <img class="next-label-icon" alt="Next" src="https://assets.wordans.ca/assets/wordans_2024/chevron_right-88b7140327f3e7abe94fcc6199c61fac16ace4221cd57aab1d1b6fbe2bf2f58a.svg" /></a></div>
            </div>


          </div>
        </form>
      </div>

      <div class='wrapper no-bs grid grid-cols-12 gap-8 my-8 text-lg text-justify'>
        <div class='col-span-12'>
          <p>
          <p>When selling garments, your list of items on sale cannot be complete without headwear, and this is where <a href="https://yourtagclothing.com/" target="_blank">yourtagclothing</a> comes in handy. yourtagclothing provides retailers with wholesale garments. Their products are sourced from multiple brands and are available in different styles for <a href="#" target="_blank">children </a>and adults, making it the ideal place to purchase <strong>bulk headwear</strong>.</p>
          </p>

          <section class='content content-container row' id='' x-data='{ isExpanded: true, isCompact: true }'>
            <div @click='isExpanded = !isExpanded' class='flex items-center cursor-pointer'>
              <h2 class="mt-0 title- text-xl mb-0 *:!text-dark-blue !text-dark-blue font-bold md:text-2xl xl:text-3xl " :class="isCompact &amp;&amp; &#39;text-2xl mt-2&#39;">Low-Cost Headwear Available in Bulk at yourtagclothing</h2>
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
              <p>At yourtagclothing, we stock a wide array of headwear styles and designs for the entire family. Below are the common types.</p>
              </p>
              <p>
              <ul>
                <li>
                  <strong>Caps: </strong>yourtagclothing provides <a href="#" target="_blank">caps</a> in various designs, sizes, and colours to suit clients' diverse needs. We also have adjustable caps, which are popular for allowing wearers to adjust the size for the best fit. These include <a href="#" target="_blank">snapback</a> and <a href="#" target="_blank">mesh</a> caps.
                </li>
                <li>
                  <strong>Flat Bills: </strong>Flat bill hats were quite popular in the 1990s but lost their popularity in the early 2000s. Like many other fashion trends, however, the flat bill regained popularity. These hats are versatile and come in different designs. At yourtagclothing, we provide flat bill hats in different sizes and from some of the best brands like Yupoong.
                </li>
                <li>
                  <strong>Bucket Hats: </strong>A particularly popular design right now. <a href="#" target="_blank">Bucket hats</a> are practical, seeing as they work as sun hats, and they also look great.
                </li>
                <li>
                  <strong>Plenty More Besides: </strong>Apart from these hat styles, the platform also offers women, children, and men various other head accessories, including <a href="#" target="_blank">headbands</a>, <a href="#" target="_blank">scarves</a>, and <a href="#" target="_blank">visors</a>.
                </li>
              </ul>
              </p>

            </div>
          </section>

          <section class='content content-container row' id='' x-data='{ isExpanded: true, isCompact: true }'>
            <div @click='isExpanded = !isExpanded' class='flex items-center cursor-pointer'>
              <h2 class="mt-0 title- text-xl mb-0 *:!text-dark-blue !text-dark-blue font-bold md:text-2xl xl:text-3xl " :class="isCompact &amp;&amp; &#39;text-2xl mt-2&#39;">Always Expect Competitive Prices from yourtagclothing</h2>
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
              <p>Other than the wide array of styles, below are some other qualities you can expect from our products. One of the best things about purchasing headwear at yourtagclothing is its favourable pricing. Generally, yourtagclothing' headwear prices range between $5 to $20. So if you are looking for cheap headwear options, this is the place to go. These prices go even lower thanks to their frequent <strong>promos </strong>and <strong>discounts</strong>. We also provide extra discounts when buying bulk headwear.</p>
              </p>
              <p>
              <p>yourtagclothing features wholesale headwear from reputable brands like <a href="#" target="_blank">Champion</a>, <a href="#" target="_blank">Flexfit</a>, <a href="#" target="_blank">Puma Golf</a>, and <a href="#" target="_blank">Yupoong</a>. The yourtagclothing website allows you to search for items by brand, making it easy to search for wholesale headwear from your favourite brands. By sourcing your products from different brands, you're guaranteed to provide your customers with a myriad of design and colour options. You'll get multiple colours and tone combinations.</p>
              </p>

            </div>
          </section>

          <section class='content content-container row' id='' x-data='{ isExpanded: true, isCompact: true }'>
            <div @click='isExpanded = !isExpanded' class='flex items-center cursor-pointer'>
              <h2 class="mt-0 title- text-xl mb-0 *:!text-dark-blue !text-dark-blue font-bold md:text-2xl xl:text-3xl " :class="isCompact &amp;&amp; &#39;text-2xl mt-2&#39;">Headwear of the Best Quality in all of Canada</h2>
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
              <p>Our site also offers bulk headwear in various fabrics. These include: polyester, acrylic, cotton, and brushed cotton. These materials are chosen depending on their durability, aesthetic appeal, and popularity among clients. yourtagclothing also guarantees high quality with all its products. We understand the market and the needs of clients. Therefore, we produce products that clients will love and review positively. For this reason, yourtagclothing boasts numerous positive reviews on trusted platforms.</p>
              </p>
              <p>
              <p>It is worth mentioning that some products at yourtagclothing are blank apparel, making them ideal for customers who want to brand and print them to fit their business, clientele, and purpose. You can also purchase the products for special events as part of your branding goals. We understand the importance of coordination for work or pleasure, hence our range of products.</p>
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
      "CategoryID": 2732,
      "CategoryName": "Headwear",
      "URL": "https://www.wordans.ca/blank-apparel-accessories-c37029/headwear-s2732"
    });
  });
</script>


<?php
include '../includes/footer.php';
?>