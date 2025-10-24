<?php
include '../includes/header.php';
?>


<script src="https://assets.wordans.ca/assets/smarty/product_filter_functions-a249b13e59e8a3413aa52cb7d484b4f9e29fd370364747256c1e0cc713b73581.js"></script>

<script>
  const MAX_PRICE = 176.78;
  const MIN_PRICE = 0.49;
  const PARAM_PRICE_MAX = "price_max"
  const PARAM_PRICE_MIN = "price_min"
  const PARAM_SORT = "sort-order"
  const ROOT_URL = "/product"
  const COLORS_ARR = []
  const STYLE2_HASH = {}
  const CATEGORY_HASH = {}
  const country = "CA";
  const language = "en";
  const currency = "CAD";
  const locale = `${language}-${country}`
  const FILTERS = {
    "categories": [],
    "brands": [],
    "gender": null,
    "style": null,
    "style2": null,
    "composition": null,
    "weight": null,
    "grammage": null,
    "options": [],
    "colors": [],
    "sizes": [],
    "attribute_values": [],
    "sort_order": {
      "order": 8,
      "name": "Clearance",
      "uri": "sale_percent",
      "elastic_order": {
        "sale_percent": "desc",
        "nb_sales": "desc",
        "stock_sum": "desc",
        "_score": "desc"
      },
      "query": {
        "order": "models.cached_sale_percent DESC, models.nb_sales DESC, models.stock_sum DESC"
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
    "select": "sale",
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
  <span itemprop="name" content="Blank Apparel  wholesale and retail. "></span>
  <span itemprop="description" content="Cheap wholesale products for everyone. Bulk discounts, no minimum. Buy at crazy wholesale prices."></span>

  <section id="marketplace-container" class="marketplace-container new-design marketplace-category content !p-0" data-categories="categories" data-brands="brands" data-gender="gender" data-style="type" data-colors="colors" data-options="options" data-weight="weight" data-grammage="grammage" data-style2="type2" data-search="q" data-composition="composition" data-warehouses="warehouse" data-sort="sort-order" data-select="select" data-per_page="per-page" data-page="page" itemscope="" itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
    <span itemprop="ratingValue" content="4.31"></span>
    <span itemprop="ratingCount" content="16"></span>
    <span itemprop="bestRating" content="5.0"></span>

    <div class="wrapper product-container">


      <div class="breadcrumbs turbo-native-hidden">
        <nav class="my-0 py-0" aria-hidden="true"></nav>

      </div>


      <div>
        <form class="flex justify-between items-start mt-4 md:!mt-8" action="/product" accept-charset="UTF-8" method="post">


          <input type="hidden" name="select" id="select" value="sale" autocomplete="off" />

          <nav class="relative rounded-xl border border-none light-border md:border-solid md:bg-[#FAFBFD] mr-12 min-w-[241px] w-[241px]"
            x-data="{}"
            data-base-url="/product"
            id="product-filters">

            <div class="p-4 !hidden md:!block w-full">
              <div class="font-bold text-2xl text-dark-gray">Sort by</div>
              <select id="sort_by" class="border border-solid light-border rounded-xl w-full mt-4" @change="e =&gt; $store.plp.addSortFilter(&#39;sort-order&#39;, e.target.value)">
                <option default="default" selected="selected" value="sale_percent">Clearance</option>
                <option value="popularity">Popularity</option>
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
                <span>275 results.</span>
              </div>

              <div class="flex flex-col">

                <div class="summary">
















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
                <tc-range-slider min="0.49"
                  max="176.78"
                  id="range-price-filter"
                  slider-bg-fill="#00228A"
                  slider-height="3px"
                  pointer-width="15px"
                  pointer-height="15px"
                  pointer-border="3px solid #00228A"
                  pointer-border-hover="3px solid #00228A"
                  pointer-border-focus="3px solid #00228A"
                  value1="0.49"
                  value2="176.78"
                  css-links="https://assets.wordans.ca/assets/range-slider-dd6f2f55b278c40f6282470ed1012642492779807d37e1d8d0f0a3e630cb92b4.css">
                </tc-range-slider>

                <div class="grid grid-cols-2 gap-10 mb-6 mt-4">
                  <div class="">
                    <span class="text-xl">From</span>
                    <div class="flex items-center">
                      <span class="border-l border-t border-b border-light-blue font-semibold text-xl text-gray-700 bg-white p-2 rounded-l-lg text-purple-">$</span>
                      <input type="number"
                        id="min-price-input"
                        min="0.49"
                        max="176.78"
                        class="min-amount p-2 rounded-r-lg font-semibold text-xl text-purple- border-y border-t border-b border-r border-light-blue"
                        value="0.49">
                    </div>
                  </div>
                  <div class="">
                    <span class="text-xl">To</span>
                    <div class="flex items-center">
                      <span class="border-l border-t border-b border-light-blue font-semibold text-xl text-gray-700 bg-white p-2 rounded-l-lg text-purple-">$</span>
                      <input type="number"
                        id="max-price-input"
                        min="0.49"
                        max="176.78"
                        class="max-amount p-2 rounded-r-lg font-semibold text-xl text-purple- border-y border-t border-b border-r border-light-blue"
                        value="176.78">
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
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/black-and-white-m66', 'color')"
                      for="color_Black and White"
                      style="background: linear-gradient(#ffffff, #000000)"
                      title="Black And White">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/turquoise-m65', 'color')"
                      for="color_Turquoise"
                      style="background: #40e0d0"
                      title="Turquoise">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/lime-green-m64', 'color')"
                      for="color_Lime Green"
                      style="background: #89f336"
                      title="Lime Green">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/beige-m61', 'color')"
                      for="color_Beige"
                      style="background: #d2b48c"
                      title="Beige">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/navy-blue-m41', 'color')"
                      for="color_Navy Blue"
                      style="background: #000080"
                      title="Navy Blue">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/burgundy-m56', 'color')"
                      for="color_Burgundy"
                      style="background: #800020"
                      title="Burgundy">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/red-m24', 'color')"
                      for="color_red"
                      style="background: #F40B11"
                      title="Red">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/pink-m21', 'color')"
                      for="color_pink"
                      style="background: #ffc0cb"
                      title="Pink">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/purple-m27', 'color')"
                      for="color_Purple"
                      style="background: #A020F0"
                      title="Purple">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/blue-m6', 'color')"
                      for="color_blue"
                      style="background: #1B22E1"
                      title="Blue">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/sky-blue-m60', 'color')"
                      for="color_Sky Blue"
                      style="background: #76d7ea"
                      title="Sky Blue">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/green-m15', 'color')"
                      for="color_green"
                      style="background: #008000"
                      title="Green">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/yellow-m33', 'color')"
                      for="color_yellow"
                      style="background: #FFFF00"
                      title="Yellow">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/orange-m18', 'color')"
                      for="color_orange"
                      style="background: #FFA500"
                      title="Orange">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/white-m30', 'color')"
                      for="color_white"
                      style="background: #fbfbfa"
                      title="White">
                      <i
                        class="absolute fa fa-check text-dark-blue font-bold top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/brown-m9', 'color')"
                      for="color_brown"
                      style="background: #562508"
                      title="Brown">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/khaki-m53', 'color')"
                      for="color_Khaki"
                      style="background: #a9a56c"
                      title="Khaki">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/black-m3', 'color')"
                      for="color_black"
                      style="background: #000000"
                      title="Black">
                      <i
                        class="absolute fa fa-check text-white top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"
                        x-cloak="true"
                        x-show="false"></i>
                    </a>



                    <a
                      class="relative border border-solid rounded-lg mx-auto w-10 h-10 cursor-pointer"
                      :class="false ? &#39;border-black&#39; : &#39;light-border&#39;"
                      @click="$store.plp.toggleFilter('/gray-m12', 'color')"
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


                      <a class="block cursor-pointer text-xl text-gray-600" @click="$store.plp.toggleFilter('/2xs-x8', 'size')">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>2XS</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block cursor-pointer text-xl text-gray-600" @click="$store.plp.toggleFilter('/xs-x7', 'size')">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>XS</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block cursor-pointer text-xl text-gray-600" @click="$store.plp.toggleFilter('/s-x1', 'size')">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>S</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block cursor-pointer text-xl text-gray-600" @click="$store.plp.toggleFilter('/m-x2', 'size')">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>M</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block cursor-pointer text-xl text-gray-600" @click="$store.plp.toggleFilter('/l-x3', 'size')">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>L</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block cursor-pointer text-xl text-gray-600" @click="$store.plp.toggleFilter('/xl-x4', 'size')">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block cursor-pointer text-xl text-gray-600" @click="$store.plp.toggleFilter('/2xl-x5', 'size')">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>2XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block cursor-pointer text-xl text-gray-600" @click="$store.plp.toggleFilter('/3xl-x6', 'size')">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>3XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block cursor-pointer text-xl text-gray-600" @click="$store.plp.toggleFilter('/4xl-x10', 'size')">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>4XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block cursor-pointer text-xl text-gray-600" @click="$store.plp.toggleFilter('/5xl-x11', 'size')">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>5XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block cursor-pointer text-xl text-gray-600" @click="$store.plp.toggleFilter('/6xl-x9', 'size')">
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/kids-g10', 'gender')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Kids</span>
                        <span class="small">(27)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/men-g27', 'gender')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Men</span>
                        <span class="small">(194)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/unisex-g4789', 'gender')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Unisex</span>
                        <span class="small">(96)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/women-g24', 'gender')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Women</span>
                        <span class="small">(147)</span>
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
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Categories</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/blank-apparel-accessories-c37029', 'category')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Blank Apparel | Accessories</span>
                        <span class="small">(269)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/promo-products-c43968', 'category')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Promo Products</span>
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
                      x-show="search === '' || &quot;american apparel&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/american-apparel-b30', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>American Apparel</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;anvil&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/anvil-b9315', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Anvil</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;bella+canvas&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/bella-canvas-b47', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Bella+Canvas</span>
                        <span class="small">(11)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;burnside&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/burnside-b21254', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Burnside</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;champion&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/champion-b21311', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Champion</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;comfort colors&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/comfort-colors-b21528', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Comfort Colors</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;core365&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/core365-b16798', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Core365</span>
                        <span class="small">(13)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;devon \u0026 jones&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/devon-jones-b22073', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Devon &amp; Jones</span>
                        <span class="small">(18)</span>
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
                      x-show="search === '' || &quot;egotierpro&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/egotierpro-b43790', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>EgotierPro</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;flexfit&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/flexfit-b16294', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Flexfit</span>
                        <span class="small">(16)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;gildan&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/gildan-b34', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Gildan</span>
                        <span class="small">(68)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;harriton&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/harriton-b22064', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Harriton</span>
                        <span class="small">(15)</span>
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
                      x-show="search === '' || &quot;jerzees&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/jerzees-b16792', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jerzees</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;king athletics&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/king-athletics-b4787', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>King Athletics</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;king fashion&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/king-fashion-b72657', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>King Fashion</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;m\u0026o&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/m-o-b72659', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>M&amp;O</span>
                        <span class="small">(15)</span>
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
                      x-show="search === '' || &quot;next level&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/next-level-b21317', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Next Level</span>
                        <span class="small">(10)</span>
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/north-end-b22049', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>North End</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;north end sport red&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/north-end-sport-red-b22061', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>North End Sport Red</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;q-tees&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/q-tees-b42342', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Q-Tees</span>
                        <span class="small">(3)</span>
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
                      x-show="search === '' || &quot;radsow&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/radsow-b43791', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Radsow</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;richardson&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/richardson-b44811', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Richardson</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;roly&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/roly-b23095', 'brand')">
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
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;sportsman&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/sportsman-b16307', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sportsman</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;team 365&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/team-365-b22052', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Team 365</span>
                        <span class="small">(21)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;valucap&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/valucap-b21293', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Valucap</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;yp classics&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/yp-classics-b44781', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>YP Classics</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;yupoong&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/yupoong-b16316', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Yupoong</span>
                        <span class="small">(8)</span>
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
                        <span class="small">(81)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww2', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W2</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww3', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W3</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww7', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W7</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww12', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W12</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww14', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W14</span>
                        <span class="small">(169)</span>
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/custom-o47', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Custom</span>
                        <span class="small">(77)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/high-stock-o50', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>High Stock</span>
                        <span class="small">(172)</span>
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/new-products-o64', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>New Products</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/organic-o5', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Organic</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/sublimation-o66', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sublimation</span>
                        <span class="small">(28)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/tagless-o6', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Tagless</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/tear-away-o2', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Tear Away</span>
                        <span class="small">(40)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/thermal-o65', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Thermal</span>
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/long-sleeves-a5892', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Long sleeves</span>
                        <span class="small">(33)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/short-sleeves-a5893', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Short sleeves</span>
                        <span class="small">(69)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/sleeveless-a5894', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sleeveless</span>
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
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Pattern</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/raglan-a5921', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Raglan</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/star-a5925', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Star</span>
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/100-cotton-a118', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>100% cotton</span>
                        <span class="small">(40)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;100% polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/100-polyester-a181', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>100% polyester</span>
                        <span class="small">(59)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;50% cotton - 50% polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/50-cotton-50-polyester-a319', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>50% cotton - 50% polyester</span>
                        <span class="small">(20)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;50/50 cotton-poly&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/50-50-cotton-poly-a7', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>50/50 cotton-poly</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;51-79% cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/51-79-cotton-a109', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>51-79% cotton</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;60/40 cotton/polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/60-40-cotton-polyester-a925', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>60/40 cotton/polyester</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;\u003e 80% cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/80-cotton-a631', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>&gt; 80% cotton</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;acrylic&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/acrylic-a169', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Acrylic</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;coton-polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/coton-polyester-a136', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Coton-polyester</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/cotton-a103', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Cotton</span>
                        <span class="small">(112)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;denim&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/denim-a5935', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Denim</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;heather&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/heather-a5937', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Heather</span>
                        <span class="small">(37)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;jersey&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/jersey-a5931', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jersey</span>
                        <span class="small">(22)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;jersey - blend&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/jersey-blend-a610', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jersey - blend</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;knit&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/knit-a5933', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Knit</span>
                        <span class="small">(26)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;mesh&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/mesh-a5936', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Mesh</span>
                        <span class="small">(18)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;nylon&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/nylon-a298', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Nylon</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;pique&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/pique-a5939', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pique</span>
                        <span class="small">(11)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;pique - blend&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/pique-blend-a565', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pique - blend</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;pique -cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/pique-cotton-a538', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pique -cotton</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;poly-cotton-rayon&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/poly-cotton-rayon-a124', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Poly-cotton-rayon</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;poly-elastane&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/poly-elastane-a1334', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Poly-elastane</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/polyester-a145', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester</span>
                        <span class="small">(112)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;polyester mesh&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/polyester-mesh-a664', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester mesh</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;polyester-viscose&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/polyester-viscose-a502', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester-viscose</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;rayon blend&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/rayon-blend-a73', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Rayon blend</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;shell&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/shell-a5941', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Shell</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;soft&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/soft-a5938', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Soft</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;terry&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/terry-a5940', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Terry</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;triblend&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/triblend-a1328', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Triblend</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;twill&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/twill-a466', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Twill</span>
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
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Neck</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/boat-neck-a5901', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Boat Neck</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/crew-neck-a22', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Crew Neck</span>
                        <span class="small">(95)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/scoop-neck-a127', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Scoop Neck</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/v-neck-a211', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>V-neck</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/zippered-a238', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Zippered</span>
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
                        <span class="small">(9)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/4-oz-a58', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>4 oz.</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/5-oz-a67', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>5 oz.</span>
                        <span class="small">(16)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/6-oz-a283', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>6 oz.</span>
                        <span class="small">(14)</span>
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/7-8-oz-a97', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>7-8 oz.</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/9-oz-a322', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>9 oz.</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/10-oz-a496', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>&gt;10 oz.</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/heavyweight-a334', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Heavyweight</span>
                        <span class="small">(17)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/lightweight-a397', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Lightweight</span>
                        <span class="small">(13)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/midweight-a313', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Midweight</span>
                        <span class="small">(9)</span>
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
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/casual-a5911', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Casual</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/gym-a5904', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Gym</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/other-a160', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Other</span>
                        <span class="small">(19)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/outdoor-a5917', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Outdoor</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/running-a790', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Running</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/sport-performance-a5907', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sport / Performance</span>
                        <span class="small">(67)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/work-professional-a5908', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Work / Professional</span>
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
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/easy-care-a955', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Easy Care</span>
                        <span class="small">(17)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/moisture-wicking-a934', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Moisture Wicking</span>
                        <span class="small">(38)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/snag-resistant-a940', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Snag Resistant</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/stain-resistant-a946', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Stain Resistant</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/upf-sun-protection-a961', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>UPF Sun Protection</span>
                        <span class="small">(11)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/water-resistant-a1335', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Water-resistant</span>
                        <span class="small">(5)</span>
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

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/wrinkle-resistant-a949', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Wrinkle Resistant</span>
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
                    <a class="whitespace-nowrap text-purple- font-bold text-2xl">Feature</a>
                  </div>
                  <img :class="open &amp;&amp; &#39;rotate-180&#39;" alt="Toggle" src="https://assets.wordans.ca/assets/wordans_2024/chevron_down-c167aaed6a7b1a447edfff95518bc9318498bc6a8be9b47fd487b3456cf946d6.svg" />
                </div>

                <hr class="horizontal-line !my-0 !-mx-8 md:!mx-0" />


                <div class="py-4 px-2" x-show="open" x-cloak x-transition>



                  <div class=" ">


                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/hood-a967', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Hood</span>
                        <span class="small">(22)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/pocket-a964', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pocket</span>
                        <span class="small">(24)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/thumbholes-a5949', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Thumbholes</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/zipper-a970', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Zipper</span>
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
                        <span class="small">(15)</span>
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

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/slim-fit-a5886', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Slim fit</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/stretch-a5884', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Stretch</span>
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





            <h1 class="mt-3 mb-4 text-xl font-bold text-center md:text-left md:text-4xl text-dark-blue">Blank Apparel <span class="text-gray-500 font-normal">wholesale and retail</span> </h1>



            <div class="flex items-center justify-between">
              <div class="font-normal text-gray-500">275 results.</div>
              <div class="pagination-container top wordans-pagination pagination-footer">
                <div role="navigation" aria-label="Pagination" class="pagination-new"><span class="previous_page disabled" aria-label="Previous page"><img class="previous-label-icon" alt="Previous" src="https://assets.wordans.ca/assets/wordans_2024/chevron_left-ec55170ac6eb8dd95bfc0172c65c4517b42222254c8087e00fb35e17106b6b6b.svg" /></span> <em class="current">1</em> <a rel="next" href="/select/sale?page=2">2</a> <a href="/select/sale?page=3">3</a> <span class="gap"></span> <a href="/select/sale?page=6">6</a> <a class="next_page" aria-label="Next page" rel="next" href="/select/sale?page=2"><img class="next-label-icon" alt="Next" src="https://assets.wordans.ca/assets/wordans_2024/chevron_right-88b7140327f3e7abe94fcc6199c61fac16ace4221cd57aab1d1b6fbe2bf2f58a.svg" /></a></div>
              </div>
            </div>


            <turbo-frame
              id="products-grid"
              data-turbo-action="append"
              class="grid grid-cols-2 gap-5 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 md:mx-0">


              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Bella+Canvas B8413 - Ladies Triblend Short-Sleeve T-Shirt" data-turbo="false" id="29633" href="/bella-canvas-b8413-ladies-triblend-short-sleeve-t-shirt-29633">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29633/29633_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742971014" alt="Bella+Canvas B8413 - Ladies Triblend Short-Sleeve T-Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29633"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29633, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29633', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.49
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$5.60</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -75%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Bella+Canvas B8413
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Triblend Short-Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/3553.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Core365 88205 - Region Mens 3-In-1 Jackets With Fleece Liner" data-turbo="false" id="10918" href="/core365-88205-region-men-s-3-in-1-jackets-with-fleece-liner-10918">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/10918/10918_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945872" alt="Core365 88205 - Region Mens 3-In-1 Jackets With Fleece Liner" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="10918"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(10918, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=10918', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $38.19
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$60.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -70%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Core365 88205
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Region Men&#39;s 3-In-1 Jackets With Fleece Liner
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/48.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/313.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Devon &amp; Jones DG796W - Ladies Newbury Colorblock Mélange Fleece Full-Zip" data-turbo="false" id="61697" href="/devon-jones-dg796w-ladies-newbury-colorblock-melange-fleece-full-zip-61697">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2017/1/26/61697/61697_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733154290" alt="Devon &amp; Jones DG796W - Ladies Newbury Colorblock Mélange Fleece Full-Zip" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="61697"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(61697, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=61697', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $17.47
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -70%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG796W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Newbury Colorblock Mélange Fleece Full-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/29357.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/29360.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/29363.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Harriton M580W - Ladies Key West Short-Sleeve Performance Staff Shirt" data-turbo="false" id="40509" href="/harriton-m580w-ladies-key-west-short-sleeve-performance-staff-shirt-40509">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/1/19/40509/40509_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733148632" alt="Harriton M580W - Ladies Key West Short-Sleeve Performance Staff Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="40509"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(40509, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=40509', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $9.56
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$56.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -83%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Harriton M580W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Key West Short-Sleeve Performance Staff Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/319.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Ash City North End 88006 - Mens 3-In-1 Two-Tone Parka" data-turbo="false" id="10672" href="/ash-city-north-end-88006-men-s-3-in-1-two-tone-parka-10672">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2014/8/27/10672/10672_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732021153" alt="Ash City North End 88006 - Mens 3-In-1 Two-Tone Parka" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="10672"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(10672, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=10672', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $66.45
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$110.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -70%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Ash City North End 88006
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s 3-In-1 Two-Tone Parka
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/3607.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/4648.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Core365 78205 - Region Ladies 3-In-1 Jackets With Fleece Liner" data-turbo="false" id="10270" href="/core365-78205-region-ladies-3-in-1-jackets-with-fleece-liner-10270">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/10270/10270_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945710" alt="Core365 78205 - Region Ladies 3-In-1 Jackets With Fleece Liner" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="10270"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(10270, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=10270', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $122.81
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -25%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Core365 78205
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Region Ladies&#39; 3-In-1 Jackets With Fleece Liner
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/48.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/313.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Core365 78183 - Motivate Tm Ladies Unlined Lightweight Jacket" data-turbo="false" id="10210" href="/core365-78183-motivate-tm-ladies-unlined-lightweight-jacket-10210">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/10210/10210_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945650" alt="Core365 78183 - Motivate Tm Ladies Unlined Lightweight Jacket" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="10210"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(10210, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=10210', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $13.58
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -70%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Core365 78183
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Motivate Tm Ladies&#39; Unlined Lightweight Jacket
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/162.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+8 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Harriton M580 - Mens Key West Short-Sleeve Performance Staff Shirt" data-turbo="false" id="40500" href="/harriton-m580-men-s-key-west-short-sleeve-performance-staff-shirt-40500">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/1/19/40500/40500_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733138663" alt="Harriton M580 - Mens Key West Short-Sleeve Performance Staff Shirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="40500"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(40500, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=40500', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $13.86
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$56.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -75%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Harriton M580
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Key West Short-Sleeve Performance Staff Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/319.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Devon &amp; Jones DG798W - Ladies Newbury Mélange Fleece Quarter-Zip" data-turbo="false" id="61718" href="/devon-jones-dg798w-ladies-newbury-melange-fleece-quarter-zip-61718">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2017/1/26/61718/61718_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733144139" alt="Devon &amp; Jones DG798W - Ladies Newbury Mélange Fleece Quarter-Zip" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="61718"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(61718, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=61718', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $15.41
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$86.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -82%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG798W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Newbury Mélange Fleece Quarter-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/950.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/1648.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/17388.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Devon &amp; Jones DG796 - Mens Newbury Colorblock Mélange Fleece Full-Zip" data-turbo="false" id="61694" href="/devon-jones-dg796-men-s-newbury-colorblock-melange-fleece-full-zip-61694">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2017/1/26/61694/61694_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732641315" alt="Devon &amp; Jones DG796 - Mens Newbury Colorblock Mélange Fleece Full-Zip" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="61694"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(61694, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=61694', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $20.14
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$94.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -79%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG796
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Newbury Colorblock Mélange Fleece Full-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/29354.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/29360.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Core365 88183T - Motivate TM MENS UNLINED LIGHTWEIGHT JACKET" data-turbo="false" id="10831" href="/core365-88183t-motivate-tm-mens-unlined-lightweight-jacket-10831">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/10831/10831_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945795" alt="Core365 88183T - Motivate TM MENS UNLINED LIGHTWEIGHT JACKET" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="10831"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(10831, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=10831', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $25.45
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -25%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Core365 88183T
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Motivate TM MENS UNLINED LIGHTWEIGHT JACKET
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/313.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/3087.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Wholesale shirt green" data-turbo="false" id="29804" href="/harriton-m500-men-s-easy-blend-long-sleeve-twill-shirt-with-stain-release-29804">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29804/29804_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732199038" alt="Wholesale shirt green" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29804"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29804, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29804', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $19.23
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$21.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -60%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Harriton M500
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Easy Blend Long-Sleeve Twill Shirt with Stain-Release
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/547.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Devon &amp; Jones DG798 - Mens Newbury Mélange Fleece Quarter-Zip" data-turbo="false" id="61715" href="/devon-jones-dg798-men-s-newbury-melange-fleece-quarter-zip-61715">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2017/1/26/61715/61715_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733153442" alt="Devon &amp; Jones DG798 - Mens Newbury Mélange Fleece Quarter-Zip" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="61715"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(61715, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=61715', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $19.90
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$86.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -77%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG798
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Newbury Mélange Fleece Quarter-Zip
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/950.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/1648.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/10800.jpg" />

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
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
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
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
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
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
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
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
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



                <a class="product " title="Harriton M500SW - Womens Stain-Release Twill Shirt with Wrinkle Resistance" data-turbo="false" id="29612" href="/harriton-m500sw-women-s-stain-release-twill-shirt-with-wrinkle-resistance-29612">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29612/29612_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732198489" alt="Harriton M500SW - Womens Stain-Release Twill Shirt with Wrinkle Resistance" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29612"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29612, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29612', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $13.10
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$25.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -55%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Harriton M500SW
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Women&#39;s Stain-Release Twill Shirt with Wrinkle Resistance
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/315.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/394.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Bella+Canvas 3005 - Unisex Jersey Short-Sleeve V-Neck T-Shirt" data-turbo="false" id="9772" href="/bella-canvas-3005-unisex-jersey-short-sleeve-v-neck-t-shirt-9772">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/9772/9772_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945544" alt="Bella+Canvas 3005 - Unisex Jersey Short-Sleeve V-Neck T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="9772"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(9772, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=9772', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $6.52
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$17.48</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -63%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Bella+Canvas 3005
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Unisex Jersey Short-Sleeve V-Neck T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Gildan G241 - Ultra Cotton® 6 oz. Long-Sleeve Pocket T-Shirt" data-turbo="false" id="29513" href="/gildan-g241-ultra-cotton-6-oz-long-sleeve-pocket-t-shirt-29513">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29513/29513_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742970914" alt="Gildan G241 - Ultra Cotton® 6 oz. Long-Sleeve Pocket T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29513"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29513, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29513', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $9.30
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$21.28</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -56%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan G241
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ultra Cotton® 6 oz. Long-Sleeve Pocket T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/106.png" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan 2410 - Mens Premium Cotton Long Sleeve Shirt with Pocket" data-turbo="false" id="3286" href="/gildan-2410-men-s-premium-cotton-long-sleeve-shirt-with-pocket-3286">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2011/3/10/3286/3286_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1746543315" alt="Gildan 2410 - Mens Premium Cotton Long Sleeve Shirt with Pocket" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="3286"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(3286, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=3286', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $9.30
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$21.28</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -56%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 2410
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Premium Cotton Long Sleeve Shirt with Pocket
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/202.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Nike 811567 - Womens Victory Polo" data-turbo="false" id="663517" href="/nike-811567-women-s-victory-polo-663517">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2025/3/29/663517/663517_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1746577353" alt="Nike 811567 - Womens Victory Polo" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="663517"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(663517, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=663517', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $15.95
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -55%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Nike 811567
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Women&#39;s Victory Polo
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/452.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/1666.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Valucap VC500 - Visor" data-turbo="false" id="5432" href="/valucap-vc500-visor-5432">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/7/8/5432/5432_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1746583204" alt="Valucap VC500 - Visor" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="5432"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(5432, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=5432', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $2.64
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -50%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Valucap VC500
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Visor
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Bella+Canvas 6004 - Womens Slim Fit Tee" data-turbo="false" id="9910" href="/bella-canvas-6004-women-s-slim-fit-tee-9910">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/9910/9910_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945616" alt="Bella+Canvas 6004 - Womens Slim Fit Tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="9910"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(9910, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=9910', { frame: 'quick-add-to-cart-modal' });">
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
                        Women&#39;s Slim Fit Tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/3484.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/3493.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="American Apparel 1304 - Unisex Heavyweight Cotton Long Sleeve Tee" data-turbo="false" id="692423" href="/american-apparel-1304-unisex-heavyweight-cotton-long-sleeve-tee-692423">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2025/7/1/692423/692423_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1751351998" alt="American Apparel 1304 - Unisex Heavyweight Cotton Long Sleeve Tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="692423"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(692423, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=692423', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.03
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -50%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        American Apparel 1304
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Unisex Heavyweight Cotton Long Sleeve Tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/178.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="American Apparel 2001 - Unisex Fine Jersey Short-Sleeve T-Shirt" data-turbo="false" id="38716" href="/american-apparel-2001-unisex-fine-jersey-short-sleeve-t-shirt-38716">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2016/1/12/38716/38716_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742971352" alt="American Apparel 2001 - Unisex Fine Jersey Short-Sleeve T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="38716"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(38716, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=38716', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $6.02
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$14.82</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -59%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        American Apparel 2001
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Unisex Fine Jersey Short-Sleeve T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+13 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Bella B6004 - Ring Spun T-shirt for Women" data-turbo="false" id="3269" href="/bella-b6004-ring-spun-t-shirt-for-women-3269">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2011/3/10/3269/3269_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1746534292" alt="Bella B6004 - Ring Spun T-shirt for Women" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="3269"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(3269, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=3269', { frame: 'quick-add-to-cart-modal' });">
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
                        Bella B6004
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ring Spun T-shirt for Women
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



                <a class="product contain" title="Devon &amp; Jones DG150W - Ladies DRYTEC20 Performance Polo" data-turbo="false" id="29618" href="/devon-jones-dg150w-ladies-drytec20-performance-polo-29618">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29618/29618_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742970994" alt="Devon &amp; Jones DG150W - Ladies DRYTEC20 Performance Polo" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29618"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29618, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29618', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $17.82
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$62.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -71%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG150W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies DRYTEC20 Performance Polo
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



                <a class="product contain" title="Devon &amp; Jones D620W - Ladies Crown Collection Solid Broadcloth" data-turbo="false" id="40455" href="/devon-jones-d620w-ladies-crown-collection-solid-broadcloth-40455">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2016/1/19/40455/40455_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1733140510" alt="Devon &amp; Jones D620W - Ladies Crown Collection Solid Broadcloth" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="40455"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(40455, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=40455', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $22.31
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$32.50</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -50%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones D620W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Crown Collection Solid Broadcloth
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/244.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Devon &amp; Jones DG150 - Mens DRYTEC20 Performance Polo" data-turbo="false" id="29615" href="/devon-jones-dg150-men-s-drytec20-performance-polo-29615">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29615/29615_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742970987" alt="Devon &amp; Jones DG150 - Mens DRYTEC20 Performance Polo" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29615"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29615, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29615', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $19.90
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$62.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -68%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG150
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s DRYTEC20 Performance Polo
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



                <a class="product " title="Anvil 987 - CRS L/S Hooded tee" data-turbo="false" id="4607" href="/anvil-987-crs-l-s-hooded-tee-4607">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2014/7/3/4607/4607_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1444221813" alt="Anvil 987 - CRS L/S Hooded tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="4607"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(4607, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=4607', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.52
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$21.95</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -52%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Anvil 987
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        CRS L/S Hooded tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/5584.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/79854.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT80W - Ladies Leader Soft Shell Jacket" data-turbo="false" id="29495" href="/team-365-tt80w-ladies-leader-soft-shell-jacket-29495">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29495/29495_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732198112" alt="Team 365 TT80W - Ladies Leader Soft Shell Jacket" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29495"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29495, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29495', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $25.88
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$42.50</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -45%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT80W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Leader Soft Shell Jacket
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+8 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Devon &amp; Jones D645W - Ladies Crown Collection Banker Stripe" data-turbo="false" id="40476" href="/devon-jones-d645w-ladies-crown-collection-banker-stripe-40476">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/1/19/40476/40476_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733140497" alt="Devon &amp; Jones D645W - Ladies Crown Collection Banker Stripe" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="40476"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(40476, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=40476', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $22.02
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -45%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones D645W
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Ladies Crown Collection Banker Stripe
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/343.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/394.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/3835.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Next Level N9000 - Unisex French Terry Raglan Crew" data-turbo="false" id="433782" href="/next-level-n9000-unisex-french-terry-raglan-crew-433782">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2019/1/24/433782/433782_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732612727" alt="Next Level N9000 - Unisex French Terry Raglan Crew" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="433782"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(433782, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=433782', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $18.00
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$52.50</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -66%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Next Level N9000
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Unisex French Terry Raglan Crew
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/240.png" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Devon &amp; Jones DG20T - Mens Tall CrownLux Performance Plaited Polo" data-turbo="false" id="422499" href="/devon-jones-dg20t-men-s-tall-crownlux-performance-plaited-polo-422499">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2018/1/25/422499/422499_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732644035" alt="Devon &amp; Jones DG20T - Mens Tall CrownLux Performance Plaited Polo" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="422499"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(422499, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=422499', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $16.64
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$48.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -65%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG20T
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Tall CrownLux Performance Plaited Polo
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Devon &amp; Jones D620 - Mens Crown Collection Solid Broadcloth" data-turbo="false" id="40452" href="/devon-jones-d620-men-s-crown-collection-solid-broadcloth-40452">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2016/1/19/40452/40452_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742971480" alt="Devon &amp; Jones D620 - Mens Crown Collection Solid Broadcloth" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="40452"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(40452, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=40452', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $33.88
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$44.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -45%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones D620
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Crown Collection Solid Broadcloth
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/244.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT80Y - Youth Leader Soft Shell Jacket" data-turbo="false" id="38524" href="/team-365-tt80y-youth-leader-soft-shell-jacket-38524">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/1/12/38524/38524_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733147533" alt="Team 365 TT80Y - Youth Leader Soft Shell Jacket" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="38524"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(38524, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=38524', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $25.08
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$42.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -45%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT80Y
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Youth Leader Soft Shell Jacket
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/461.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/846.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/9626.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="M&amp;O 4810 - Womens Gold Soft Touch T-Shirt" data-turbo="false" id="663503" href="/m-o-4810-women-s-gold-soft-touch-t-shirt-663503">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2025/3/29/663503/663503_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1746567204" alt="M&amp;O 4810 - Womens Gold Soft Touch T-Shirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="663503"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(663503, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=663503', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.85
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -45%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        M&amp;O 4810
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Women&#39;s Gold Soft Touch T-Shirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/106.png" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+9 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Flexfit 6511 - 6-Panel Structured Trucker Cap with Mesh" data-turbo="false" id="29918" href="/flexfit-6511-6-panel-structured-trucker-cap-with-mesh-29918">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29918/29918_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732199303" alt="Flexfit 6511 - 6-Panel Structured Trucker Cap with Mesh" loading="lazy">


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
                          <img class="tag object-contain aspect-square w-10 h-10 mt-[1px] top-[10px] left-[10px]" alt="24h" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/product_icon_24h.svg" />
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



                <a class="product contain" title="Next Level 9301 - Unisex French Terry Pullover Hoody" data-turbo="false" id="433761" href="/next-level-9301-unisex-french-terry-pullover-hoody-433761">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2019/1/24/433761/433761_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742972159" alt="Next Level 9301 - Unisex French Terry Pullover Hoody" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="433761"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(433761, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=433761', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $24.58
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$63.22</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -61%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Next Level 9301
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Unisex French Terry Pullover Hoody
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/248.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/338.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/783.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+6 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Devon &amp; Jones DG20LT - Mens Tall CrownLux Performance Plaited Long-Sleeve Polo" data-turbo="false" id="433845" href="/devon-jones-dg20lt-men-s-tall-crownlux-performance-plaited-long-sleeve-polo-433845">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2019/1/24/433845/433845_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732883244" alt="Devon &amp; Jones DG20LT - Mens Tall CrownLux Performance Plaited Long-Sleeve Polo" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="433845"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(433845, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=433845', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $19.40
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$56.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -65%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Devon &amp; Jones DG20LT
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Tall CrownLux Performance Plaited Long-Sleeve Polo
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



                <a class="product " title="Next Level 9002NL - Unisex Pullover PCH Crewneck Sweatshirt" data-turbo="false" id="500330" href="/next-level-9002nl-unisex-pullover-pch-crewneck-sweatshirt-500330">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2021/2/1/500330/500330_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732884087" alt="Next Level 9002NL - Unisex Pullover PCH Crewneck Sweatshirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="500330"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(500330, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=500330', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $16.96
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$43.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -61%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Next Level 9002NL
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Unisex Pullover PCH Crewneck Sweatshirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/240.png" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/415.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/1459.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+3 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Richardson 312 - Twill Back Trucker Cap" data-turbo="false" id="663536" href="/richardson-312-twill-back-trucker-cap-663536">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2025/3/29/663536/663536_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1746579057" alt="Richardson 312 - Twill Back Trucker Cap" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="663536"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(663536, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=663536', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.09
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -40%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Richardson 312
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Twill Back Trucker Cap
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/1989.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/1993.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/1999.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Radsow NEWYORK - Radsow Apparel - Fleece Jogger NEW YORK" data-turbo="false" id="518547" href="/radsow-newyork-radsow-apparel-fleece-jogger-new-york-518547">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2022/7/21/518547/518547_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738791961" alt="Radsow NEWYORK - Radsow Apparel - Fleece Jogger NEW YORK" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="518547"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(518547, 'undefined', 'undefined');
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


                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=518547', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.99
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$19.99</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -75%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Radsow NEWYORK
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Radsow Apparel - Fleece Jogger NEW YORK
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/178.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/577.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/2305.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Team 365 TT73 - Adult Zone Protect Lightweight Jacket" data-turbo="false" id="433818" href="/team-365-tt73-adult-zone-protect-lightweight-jacket-433818">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2019/1/24/433818/433818_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732626132" alt="Team 365 TT73 - Adult Zone Protect Lightweight Jacket" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="433818"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(433818, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=433818', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $15.79
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$23.50</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -35%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT73
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Adult Zone Protect Lightweight Jacket
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



                <a class="product " title="Team 365 TT73Y - Youth Zone Protect Lightweight Jacket" data-turbo="false" id="433821" href="/team-365-tt73y-youth-zone-protect-lightweight-jacket-433821">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2019/1/24/433821/433821_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1733135981" alt="Team 365 TT73Y - Youth Zone Protect Lightweight Jacket" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="433821"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(433821, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=433821', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $14.37
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$22.50</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -36%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Team 365 TT73Y
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Youth Zone Protect Lightweight Jacket
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



                <a class="product " title="Anvil 880 - Womens CRS fashion tee" data-turbo="false" id="4873" href="/anvil-880-women-s-crs-fashion-tee-4873">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2014/7/8/4873/4873_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1746548227" alt="Anvil 880 - Womens CRS fashion tee" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="4873"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(4873, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=4873', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $5.92
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -35%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Anvil 880
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Womens CRS fashion tee
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/2025.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Radsow UXX04 - Radsow Mens London Comfort Fleece Hoodie" data-turbo="false" id="479409" href="/radsow-uxx04-radsow-men-s-london-comfort-fleece-hoodie-479409">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2020/8/11/479409/479409_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738591241" alt="Radsow UXX04 - Radsow Mens London Comfort Fleece Hoodie" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="479409"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(479409, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=479409', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $9.99
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$19.99</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -50%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Radsow UXX04
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Radsow Men&#39;s London Comfort Fleece Hoodie
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/101.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/799.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="M &amp; O Knits 4800 M&amp;O GOLD SOFT TOUCH" data-turbo="false" id="409" href="/m-o-knits-4800-m-o-gold-soft-touch-409">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2010/12/1/409/409_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1743717957" alt="M &amp; O Knits 4800 M&amp;O GOLD SOFT TOUCH" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="409"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(409, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=409', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.01
                      </span>


                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -35%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        M &amp; O Knits 4800 M&amp;O GOLD SOFT TOUCH
                      </div>

                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+37 Colors</span>
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
              <div role="navigation" aria-label="Pagination" class="pagination-new"><span class="previous_page disabled" aria-label="Previous page"><img class="previous-label-icon" alt="Previous" src="https://assets.wordans.ca/assets/wordans_2024/chevron_left-ec55170ac6eb8dd95bfc0172c65c4517b42222254c8087e00fb35e17106b6b6b.svg" /> Previous</span> <em class="current">1</em> <a rel="next" href="/select/sale?page=2">2</a> <a href="/select/sale?page=3">3</a> <a href="/select/sale?page=4">4</a> <a href="/select/sale?page=5">5</a> <a href="/select/sale?page=6">6</a> <a class="next_page" aria-label="Next page" rel="next" href="/select/sale?page=2">Next <img class="next-label-icon" alt="Next" src="https://assets.wordans.ca/assets/wordans_2024/chevron_right-88b7140327f3e7abe94fcc6199c61fac16ace4221cd57aab1d1b6fbe2bf2f58a.svg" /></a></div>
            </div>


          </div>
        </form>
      </div>



    </div>
  </section>
</div>


<?php
include '../includes/footer.php';
?>