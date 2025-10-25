<?php
include 'includes/header.php';
?>


<script>
  const MAX_PRICE = 199.17;
  const MIN_PRICE = 0.0;
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
  <span itemprop="name" content="Blank Apparel  wholesale and retail. "></span>
  <span itemprop="description" content="Cheap wholesale products for everyone. Bulk discounts, no minimum. Buy at crazy wholesale prices."></span>

  <section id="marketplace-container" class="marketplace-container new-design marketplace-category content !p-0" data-categories="categories" data-brands="brands" data-gender="gender" data-style="type" data-colors="colors" data-options="options" data-weight="weight" data-grammage="grammage" data-style2="type2" data-search="q" data-composition="composition" data-warehouses="warehouse" data-sort="sort-order" data-select="select" data-per_page="per-page" data-page="page" itemscope="" itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
    <span itemprop="ratingValue" content="4.5"></span>
    <span itemprop="ratingCount" content="290"></span>
    <span itemprop="bestRating" content="5.0"></span>

    <div class="wrapper product-container">


      <div class="breadcrumbs turbo-native-hidden">
        <nav class="my-0 py-0" aria-hidden="true"></nav>

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
                <span>2346 results.</span>
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
                <tc-range-slider min="0.0"
                  max="199.17"
                  id="range-price-filter"
                  slider-bg-fill="#00228A"
                  slider-height="3px"
                  pointer-width="15px"
                  pointer-height="15px"
                  pointer-border="3px solid #00228A"
                  pointer-border-hover="3px solid #00228A"
                  pointer-border-focus="3px solid #00228A"
                  value1="0.0"
                  value2="199.17"
                  css-links="https://assets.wordans.ca/assets/range-slider-dd6f2f55b278c40f6282470ed1012642492779807d37e1d8d0f0a3e630cb92b4.css">
                </tc-range-slider>

                <div class="grid grid-cols-2 gap-10 mb-6 mt-4">
                  <div class="">
                    <span class="text-xl">From</span>
                    <div class="flex items-center">
                      <span class="border-l border-t border-b border-light-blue font-semibold text-xl text-gray-700 bg-white p-2 rounded-l-lg text-purple-">$</span>
                      <input type="number"
                        id="min-price-input"
                        min="0.0"
                        max="199.17"
                        class="min-amount p-2 rounded-r-lg font-semibold text-xl text-purple- border-y border-t border-b border-r border-light-blue"
                        value="0.0">
                    </div>
                  </div>
                  <div class="">
                    <span class="text-xl">To</span>
                    <div class="flex items-center">
                      <span class="border-l border-t border-b border-light-blue font-semibold text-xl text-gray-700 bg-white p-2 rounded-l-lg text-purple-">$</span>
                      <input type="number"
                        id="max-price-input"
                        min="0.0"
                        max="199.17"
                        class="max-amount p-2 rounded-r-lg font-semibold text-xl text-purple- border-y border-t border-b border-r border-light-blue"
                        value="199.17">
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
                      href="/black-and-white-m66"
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
                      href="/turquoise-m65"
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
                      href="/lime-green-m64"
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
                      href="/beige-m61"
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
                      href="/navy-blue-m41"
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
                      href="/burgundy-m56"
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
                      href="/red-m24"
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
                      href="/pink-m21"
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
                      href="/purple-m27"
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
                      href="/blue-m6"
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
                      href="/sky-blue-m60"
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
                      href="/green-m15"
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
                      href="/yellow-m33"
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
                      href="/orange-m18"
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
                      href="/white-m30"
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
                      href="/brown-m9"
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
                      href="/khaki-m53"
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
                      href="/black-m3"
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
                      href="/gray-m12"
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

                      <a class="block text-xl text-gray-600" href="/2xs-x8">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>2XS</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/xs-x7">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>XS</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/s-x1">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>S</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/m-x2">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>M</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/l-x3">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>L</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/xl-x4">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/2xl-x5">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>2XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/3xl-x6">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>3XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/4xl-x10">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>4XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/5xl-x11">
                        <div class="flex justify-center items-center m-1 border border-solid light-border rounded-xl aspect-square uppercase text-gray-600 ">
                          <span>5XL</span>
                        </div>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block text-xl text-gray-600" href="/6xl-x9">
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/baby-g16549">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Baby</span>
                        <span class="small">(9)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/boys-g44705">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Boys</span>
                        <span class="small">(160)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/geek-g4724">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Geek</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/girls-g44706">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Girls</span>
                        <span class="small">(158)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/kids-g10">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Kids</span>
                        <span class="small">(156)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/men-g27">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Men</span>
                        <span class="small">(1719)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/unisex-g4789">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Unisex</span>
                        <span class="small">(1294)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/women-g24">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Women</span>
                        <span class="small">(1700)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/other-apparel-accessories">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Blank Apparel | Accessories</span>
                        <span class="small">(2291)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/fashion-clothing-c32395">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Fashion | Clothing</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/promo-products-c43968">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Promo Products</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/ajm-b42369">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>AJM</span>
                        <span class="small">(290)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;allpro&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/allpro-b72741">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>AllPro</span>
                        <span class="small">(18)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;american apparel&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/american-apparel-b30">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>American Apparel</span>
                        <span class="small">(15)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;anvil&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/anvil-b9315">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Anvil</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;artisan collection by reprime&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/artisan-collection-by-reprime-b44003">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Artisan Collection by Reprime</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;bella+canvas&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/bella-canvas-b47">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Bella+Canvas</span>
                        <span class="small">(61)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;berne&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/berne-b43784">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Berne</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;blank activewear&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/blank-activewear-b44037">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Blank Activewear</span>
                        <span class="small">(19)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;burnside&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/burnside-b21254">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Burnside</span>
                        <span class="small">(9)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;c2 sport&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/c2-sport-b21257">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>C2 Sport</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;canada sportswear&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/canada-sportswear-b44615">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Canada Sportswear</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;canada sportswear genuine&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/canada-sportswear-genuine-b44614">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Canada Sportswear Genuine</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;champion&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/champion-b21311">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Champion</span>
                        <span class="small">(157)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;columbia&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/columbia-b4784">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Columbia</span>
                        <span class="small">(29)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;columbia golf&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/columbia-golf-b43776">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Columbia Golf</span>
                        <span class="small">(17)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;columbia timing&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/columbia-timing-b43781">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Columbia Timing</span>
                        <span class="small">(16)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;comfort colors&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/comfort-colors-b21528">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Comfort Colors</span>
                        <span class="small">(19)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;core365&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/core365-b16798">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Core365</span>
                        <span class="small">(104)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;csw 24/7&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/csw-24-7-b44616">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>CSW 24/7</span>
                        <span class="small">(30)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;cx2&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/cx2-b44617">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>CX2</span>
                        <span class="small">(132)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;cx2 hivis&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/cx2-hivis-b44619">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>CX2 Hivis</span>
                        <span class="small">(23)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;devon \u0026 jones&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/devon-jones-b22073">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Devon &amp; Jones</span>
                        <span class="small">(90)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;dri duck&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/dri-duck-b22696">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Dri Duck</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;egotierpro&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/egotierpro-b43790">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>EgotierPro</span>
                        <span class="small">(19)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;elevate&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/elevate-b23498">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Elevate</span>
                        <span class="small">(151)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;fleece factory&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/fleece-factory-b44791">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Fleece Factory</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;flexfit&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/flexfit-b16294">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Flexfit</span>
                        <span class="small">(25)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;foresight apparel&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/foresight-apparel-b44403">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Foresight Apparel</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;fruit of the loom&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/fruit-of-the-loom-b6348">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Fruit of the Loom</span>
                        <span class="small">(11)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/gildan-b34">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Gildan</span>
                        <span class="small">(111)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;hanes&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/hanes-b48', 'brand')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Hanes</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;harriton&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/harriton-b22064">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Harriton</span>
                        <span class="small">(80)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;heritage 54&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/heritage-54-b44621">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Heritage 54</span>
                        <span class="small">(11)</span>
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
                      x-show="search === '' || &quot;independent trading co.&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/independent-trading-co-b21275">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Independent Trading Co.</span>
                        <span class="small">(34)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;jerzees&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/jerzees-b16792">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jerzees</span>
                        <span class="small">(32)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;kati&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/kati-b16298">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Kati</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;king athletics&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/king-athletics-b4787">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>King Athletics</span>
                        <span class="small">(35)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;king fashion&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/king-fashion-b72657">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>King Fashion</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;landmark&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/landmark-b23495">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Landmark</span>
                        <span class="small">(12)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;lat&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/lat-b21734">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>LAT</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;los angeles apparel&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/los-angeles-apparel-b44783">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Los Angeles Apparel</span>
                        <span class="small">(43)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;m\u0026o&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/m-o-b72659">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>M&amp;O</span>
                        <span class="small">(26)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;muskoka trail&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/muskoka-trail-b44618">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Muskoka Trail</span>
                        <span class="small">(19)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/next-level-b21317">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Next Level</span>
                        <span class="small">(76)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;next level apparel&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/next-level-apparel-b44139">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Next Level Apparel</span>
                        <span class="small">(6)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/north-end-b22049">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>North End</span>
                        <span class="small">(63)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;north end sport red&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/north-end-sport-red-b22061">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>North End Sport Red</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;oakley&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/oakley-b16304">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Oakley</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;on tour&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/on-tour-b23492">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>On Tour</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;outer boundary&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/outer-boundary-b23489">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Outer Boundary</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;puma&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/puma-b21767">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>PUMA</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;q-tees&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/q-tees-b42342">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Q-Tees</span>
                        <span class="small">(25)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;rabbit skins&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/rabbit-skins-b17071">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Rabbit Skins</span>
                        <span class="small">(25)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;radsow&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/radsow-b43791">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Radsow</span>
                        <span class="small">(18)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;richardson&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/richardson-b44811">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Richardson</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;roly&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/roly-b23095">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Roly</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;russell athletic&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/russell-athletic-b23156">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Russell Athletic</span>
                        <span class="small">(16)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;sportsman&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/sportsman-b16307">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sportsman</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;spyder&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/spyder-b44009">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Spyder</span>
                        <span class="small">(25)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;team 365&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/team-365-b22052">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Team 365</span>
                        <span class="small">(60)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;threadfast&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/threadfast-b23792">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Threadfast</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;timberlea&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/timberlea-b43563">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Timberlea</span>
                        <span class="small">(18)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;trimark&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/trimark-b72655">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Trimark</span>
                        <span class="small">(157)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;valucap&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/valucap-b21293">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Valucap</span>
                        <span class="small">(14)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;vancouver apparel&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/vancouver-apparel-b44785">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Vancouver Apparel</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;whelk goods&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/whelk-goods-b44827">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Whelk Goods</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;wild river&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/wild-river-b44620">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Wild River</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;yp classics&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/yp-classics-b44781">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>YP Classics</span>
                        <span class="small">(17)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;yupoong&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/yupoong-b16316">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Yupoong</span>
                        <span class="small">(14)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;zero friction&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/zero-friction-b44606">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>ZERO FRICTION</span>
                        <span class="small">(42)</span>
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
                  <div class="wordans-search-box after:!top-[7px] my-4 relative" role="search">
                    <input
                      type="search"
                      x-model="search"
                      class="form-control input- !h-[35px] !rounded-xl text-xl"
                      placeholder="Search">
                  </div>



                  <div class=" max-h-52 overflow-y-auto">


                    <div
                      x-show="search === '' || &quot;w1&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww1', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W1</span>
                        <span class="small">(453)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;w2&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww2', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W2</span>
                        <span class="small">(343)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;w3&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww3', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W3</span>
                        <span class="small">(44)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;w5&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww5', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W5</span>
                        <span class="small">(19)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;w6&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww6', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W6</span>
                        <span class="small">(228)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;w7&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww7', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W7</span>
                        <span class="small">(127)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;w8&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww8', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W8</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;w10&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww10', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W10</span>
                        <span class="small">(290)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;w11&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww11', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W11</span>
                        <span class="small">(329)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;w12&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww12', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W12</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;w13&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww13', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W13</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;w14&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/warehouse-ww14', 'warehouse')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>W14</span>
                        <span class="small">(504)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/custom-o47">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Custom</span>
                        <span class="small">(214)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/high-stock-o50', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>High Stock</span>
                        <span class="small">(940)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/made-in-usa-o52', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Made in USA</span>
                        <span class="small">(10)</span>
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
                        <span class="small">(13)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/recycled-o48', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Recycled</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/sublimation-o66', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sublimation</span>
                        <span class="small">(155)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/tagless-o6', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Tagless</span>
                        <span class="small">(141)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/tear-away-o2', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Tear Away</span>
                        <span class="small">(220)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/thermal-o65', 'option')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Thermal</span>
                        <span class="small">(51)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/3-4-sleeves-a5895">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>3/4 sleeves</span>
                        <span class="small">(7)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/long-sleeves-a5892">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Long sleeves</span>
                        <span class="small">(170)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/short-sleeves-a5893">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Short sleeves</span>
                        <span class="small">(289)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/sleeveless-a5894">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sleeveless</span>
                        <span class="small">(46)</span>
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


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/acid-wash-a5927', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Acid wash</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/camo-a5924">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Camo</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/plaid-a5926">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Plaid</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/raglan-a5921">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Raglan</span>
                        <span class="small">(35)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/ringer-a5948">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Ringer</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/star-a5925">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Star</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/striped-a5922">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Striped</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/tie-dye-a5919">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Tie Dye</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/varsity-a5928">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Varsity</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/vintage-a5920">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Vintage</span>
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
                      x-show="search === '' || &quot;100% acrylic&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/100-acrylic-a1332', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>100% Acrylic</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;100% cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/100-cotton-a118">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>100% cotton</span>
                        <span class="small">(157)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;100% polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/100-polyester-a181">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>100% polyester</span>
                        <span class="small">(392)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;50% cotton - 50% polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/50-cotton-50-polyester-a319">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>50% cotton - 50% polyester</span>
                        <span class="small">(42)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;50/50 cotton-poly&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/50-50-cotton-poly-a7">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>50/50 cotton-poly</span>
                        <span class="small">(15)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;51-79% cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/51-79-cotton-a109">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>51-79% cotton</span>
                        <span class="small">(11)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;60/40 cotton/polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/60-40-cotton-polyester-a925">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>60/40 cotton/polyester</span>
                        <span class="small">(8)</span>
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
                      x-show="search === '' || &quot;80% cotton - 20% polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/80-cotton-20-polyester-a529">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>80% cotton - 20% polyester</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;\u003e 80% cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/80-cotton-a631">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>&gt; 80% cotton</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;acrylic&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/acrylic-a169">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Acrylic</span>
                        <span class="small">(17)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;coton-polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/coton-polyester-a136">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Coton-polyester</span>
                        <span class="small">(108)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/cotton-a103">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Cotton</span>
                        <span class="small">(587)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;cotton poly lycra&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/cotton-poly-lycra-a577">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Cotton poly lycra</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;denim&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/denim-a5935">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Denim</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;duck&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/duck-a625">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Duck</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;elastane&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/elastane-a1347">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Elastane</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;heather&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/heather-a5937">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Heather</span>
                        <span class="small">(133)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;jersey&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/jersey-a5931">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jersey</span>
                        <span class="small">(151)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;jersey - blend&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/jersey-blend-a610">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Jersey - blend</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;knit&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/knit-a5933">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Knit</span>
                        <span class="small">(181)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;mesh&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/mesh-a5936">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Mesh</span>
                        <span class="small">(166)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;micro fleece&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/micro-fleece-a5942">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Micro fleece</span>
                        <span class="small">(25)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;neoprene&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/neoprene-a727', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Neoprene</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;nylon&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/nylon-a298">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Nylon</span>
                        <span class="small">(86)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;nylon poly&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/nylon-poly-a823', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Nylon poly</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;nylon taslan&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/nylon-taslan-a904', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Nylon taslan</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;padded&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/padded-a5943">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Padded</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;pique&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/pique-a5939">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pique</span>
                        <span class="small">(47)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;pique - blend&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/pique-blend-a565">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pique - blend</span>
                        <span class="small">(9)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;pique -cotton&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/pique-cotton-a538">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pique -cotton</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;poly fleece&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/poly-fleece-a454">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Poly fleece</span>
                        <span class="small">(15)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;poly microfleece&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/poly-microfleece-a676">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Poly microfleece</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;poly-cotton-rayon&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/poly-cotton-rayon-a124">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Poly-cotton-rayon</span>
                        <span class="small">(11)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;poly-elastane&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/poly-elastane-a1334">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Poly-elastane</span>
                        <span class="small">(13)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;polyester&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/polyester-a145">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester</span>
                        <span class="small">(878)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;polyester mesh&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/polyester-mesh-a664">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester mesh</span>
                        <span class="small">(62)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;polyester-viscose&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/polyester-viscose-a502">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Polyester-viscose</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;rayon blend&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/rayon-blend-a73">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Rayon blend</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;shell&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/shell-a5941">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Shell</span>
                        <span class="small">(40)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;soft&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/soft-a5938">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Soft</span>
                        <span class="small">(252)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;spandex&quot;.includes(search.toLowerCase())"
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/spandex-a1345', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Spandex</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;terry&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/terry-a5940">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Terry</span>
                        <span class="small">(18)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;triblend&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/triblend-a1328">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Triblend</span>
                        <span class="small">(26)</span>
                      </a>
                    </div>

                    <div
                      x-show="search === '' || &quot;twill&quot;.includes(search.toLowerCase())"
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/twill-a466">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Twill</span>
                        <span class="small">(3)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/boat-neck-a5901">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Boat Neck</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/cowl-neck-a5902', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Cowl Neck</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/crew-neck-a22">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Crew Neck</span>
                        <span class="small">(379)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/henley-a523">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Henley</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/scoop-neck-a127">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Scoop Neck</span>
                        <span class="small">(13)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/turtleneck-a1329">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Turtleneck</span>
                        <span class="small">(3)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/v-neck-a211">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>V-neck</span>
                        <span class="small">(50)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/zippered-a238">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Zippered</span>
                        <span class="small">(62)</span>
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
                        <span class="small">(26)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/4-oz-a58', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>4 oz.</span>
                        <span class="small">(46)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/5-oz-a67', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>5 oz.</span>
                        <span class="small">(26)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/6-oz-a283', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>6 oz.</span>
                        <span class="small">(24)</span>
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
                        <span class="small">(30)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/8-9-oz-a931', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>8-9 oz.</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/9-oz-a322', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>9 oz.</span>
                        <span class="small">(8)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/10-oz-a496', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>&gt;10 oz.</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/heavyweight-a334', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Heavyweight</span>
                        <span class="small">(59)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/lightweight-a397', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Lightweight</span>
                        <span class="small">(191)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/midweight-a313', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Midweight</span>
                        <span class="small">(51)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/baseball-a5909">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Baseball</span>
                        <span class="small">(7)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/casual-a5911">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Casual</span>
                        <span class="small">(272)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/football-a5903">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Football</span>
                        <span class="small">(2)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/formal-a5912">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Formal</span>
                        <span class="small">(16)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/golf-a5905">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Golf</span>
                        <span class="small">(74)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/gym-a5904">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Gym</span>
                        <span class="small">(30)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/hi-vis-a5918">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Hi vis</span>
                        <span class="small">(10)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/other-a160">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Other</span>
                        <span class="small">(27)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/outdoor-a5917">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Outdoor</span>
                        <span class="small">(231)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/running-a790">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Running</span>
                        <span class="small">(31)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/sport-performance-a5907">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Sport / Performance</span>
                        <span class="small">(496)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/trekking-a5916', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Trekking</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/work-professional-a5908">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Work / Professional</span>
                        <span class="small">(41)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/yoga-a5910">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Yoga</span>
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
                        <span class="small">(20)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/easy-care-a955', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Easy Care</span>
                        <span class="small">(44)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/moisture-wicking-a934', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Moisture Wicking</span>
                        <span class="small">(93)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/snag-resistant-a940', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Snag Resistant</span>
                        <span class="small">(9)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/stain-resistant-a946', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Stain Resistant</span>
                        <span class="small">(20)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/upf-sun-protection-a961', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>UPF Sun Protection</span>
                        <span class="small">(30)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/water-resistant-a1335', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Water-resistant</span>
                        <span class="small">(52)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/waterproof-a952', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Waterproof</span>
                        <span class="small">(119)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/wrinkle-resistant-a949', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Wrinkle Resistant</span>
                        <span class="small">(25)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/buttons-a973">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Buttons</span>
                        <span class="small">(4)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/hood-a967">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Hood</span>
                        <span class="small">(157)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/pocket-a964">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Pocket</span>
                        <span class="small">(73)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/thumbholes-a5949">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Thumbholes</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">


                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" @click="$store.plp.toggleFilter('/uv-protection-a1340', 'attribute')">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>UV protection</span>
                        <span class="small">(1)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/zipper-a970">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Zipper</span>
                        <span class="small">(172)</span>
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

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/boxy-a5883">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Boxy</span>
                        <span class="small">(6)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/fitted-a5890">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Fitted</span>
                        <span class="small">(42)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/loose-fit-a5885">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Loose fit</span>
                        <span class="small">(21)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/muscle-fit-a5889">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Muscle fit</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/oversized-a5891">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Oversized</span>
                        <span class="small">(17)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/slim-fit-a5886">
                        <i class="fa fa-check-square text-special" x-show="false" x-cloak></i>
                        <i class="fa fa-square-o" x-show="!false" x-cloak></i>
                        <span>Slim fit</span>
                        <span class="small">(5)</span>
                      </a>
                    </div>

                    <div
                      class="filter-item">

                      <a class="block bg-white my-2 p-3 rounded-lg text-lg md:text-xl text-dark-gray" href="/stretch-a5884">
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
            <h1 class="mt-3 mb-4 text-xl font-bold text-center md:text-left md:text-4xl text-dark-blue">Blank Apparel <span class="text-gray-500 font-normal">wholesale and retail</span> </h1>



            <div class="flex items-center justify-between">
              <div class="font-normal text-gray-500">2346 results.</div>
              <div class="pagination-container top wordans-pagination pagination-footer">
                <div role="navigation" aria-label="Pagination" class="pagination-new"><span class="previous_page disabled" aria-label="Previous page"><img class="previous-label-icon" alt="Previous" src="https://assets.wordans.ca/assets/wordans_2024/chevron_left-ec55170ac6eb8dd95bfc0172c65c4517b42222254c8087e00fb35e17106b6b6b.svg" /></span> <em class="current">1</em> <a rel="next" href="/products?_kx=oOvHKmCIQKfoY9MogZh3Iq6wpsDeFhqQ3Y3Sd5Lk5-Q.RMfrwJ&amp;page=2&amp;test=&amp;utm_campaign=CA+-+EN+%2F+20%25+OFF+W3+%7C+CATALOG&amp;utm_klaviyo_id=01K5PWR9XFAY9A1N3TSGYY6ZYV&amp;utm_medium=email&amp;utm_source=Klaviyo">2</a> <a href="/products?_kx=oOvHKmCIQKfoY9MogZh3Iq6wpsDeFhqQ3Y3Sd5Lk5-Q.RMfrwJ&amp;page=3&amp;test=&amp;utm_campaign=CA+-+EN+%2F+20%25+OFF+W3+%7C+CATALOG&amp;utm_klaviyo_id=01K5PWR9XFAY9A1N3TSGYY6ZYV&amp;utm_medium=email&amp;utm_source=Klaviyo">3</a> <span class="gap"></span> <a href="/products?_kx=oOvHKmCIQKfoY9MogZh3Iq6wpsDeFhqQ3Y3Sd5Lk5-Q.RMfrwJ&amp;page=47&amp;test=&amp;utm_campaign=CA+-+EN+%2F+20%25+OFF+W3+%7C+CATALOG&amp;utm_klaviyo_id=01K5PWR9XFAY9A1N3TSGYY6ZYV&amp;utm_medium=email&amp;utm_source=Klaviyo">47</a> <a class="next_page" aria-label="Next page" rel="next" href="/products?_kx=oOvHKmCIQKfoY9MogZh3Iq6wpsDeFhqQ3Y3Sd5Lk5-Q.RMfrwJ&amp;page=2&amp;test=&amp;utm_campaign=CA+-+EN+%2F+20%25+OFF+W3+%7C+CATALOG&amp;utm_klaviyo_id=01K5PWR9XFAY9A1N3TSGYY6ZYV&amp;utm_medium=email&amp;utm_source=Klaviyo"><img class="next-label-icon" alt="Next" src="https://assets.wordans.ca/assets/wordans_2024/chevron_right-88b7140327f3e7abe94fcc6199c61fac16ace4221cd57aab1d1b6fbe2bf2f58a.svg" /></a></div>
              </div>
            </div>


            <turbo-frame
              id="products-grid"
              data-turbo-action="append"
              class="grid grid-cols-2 gap-5 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 md:mx-0">


              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Radsow 03815 - Condor Unisex Hooded Sweatshirt" data-turbo="false" id="526975" href="/radsow-03815-condor-unisex-hooded-sweatshirt-526975">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2023/10/31/526975/526975_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738590229" alt="Radsow 03815 - Condor Unisex Hooded Sweatshirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="526975"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(526975, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=526975', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $6.99
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$15.69</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -55%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Radsow 03815
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Condor Unisex Hooded Sweatshirt
                      </div>
                    </h3>


                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Radsow 03814 - Columbia Unisex Round Neck Sweatshirt" data-turbo="false" id="526974" href="/radsow-03814-columbia-unisex-round-neck-sweatshirt-526974">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2023/10/31/526974/526974_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1705654218" alt="Radsow 03814 - Columbia Unisex Round Neck Sweatshirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="526974"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(526974, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=526974', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.99
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$15.69</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -49%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Radsow 03814
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Columbia Unisex Round Neck Sweatshirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/828.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59517.jpg" />

                    </div>
                  </div>

                </a>
              </div>
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



                <a class="product " title="Radsow UXX04 - Radsow Mens London Comfort Fleece Hoodie" data-turbo="false" id="479409" href="/radsow-uxx04-radsow-men-s-london-comfort-fleece-hoodie-479409">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2020/8/11/479409/479409_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738591241" alt="Radsow UXX04 - Radsow Mens London Comfort Fleece Hoodie" loading="lazy" fetchpriority="high">


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



                <a class="product " title="Radsow UXX03 - Mens Cozy Brushed Fleece Sweatshirt" data-turbo="false" id="479406" href="/radsow-uxx03-men-s-cozy-brushed-fleece-sweatshirt-479406">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2020/8/11/479406/479406_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738591361" alt="Radsow UXX03 - Mens Cozy Brushed Fleece Sweatshirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="479406"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(479406, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=479406', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.99
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$13.19</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -70%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Radsow UXX03
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Men&#39;s Cozy Brushed Fleece Sweatshirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/178.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/577.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Radsow UXX03F - Radsow Womens Parisian Comfort Fleece Sweatshirt" data-turbo="false" id="498451" href="/radsow-uxx03f-radsow-women-s-parisian-comfort-fleece-sweatshirt-498451">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2020/11/18/498451/498451_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738591399" alt="Radsow UXX03F - Radsow Womens Parisian Comfort Fleece Sweatshirt" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="498451"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(498451, 'undefined', 'undefined');
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


                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=498451', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $3.99
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$16.99</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -77%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Radsow UXX03F
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Radsow Women&#39;s Parisian Comfort Fleece Sweatshirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/178.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/577.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+2 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Gildan hoodies for men dark gray" data-turbo="false" id="11149" href="/jerzees-996-nublend-fleece-pullover-hood-11149">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/11149/11149_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945891" alt="Gildan hoodies for men dark gray" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="11149"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(11149, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=11149', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $13.72
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$31.42</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -56%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Jerzees 996
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Nublend® Fleece Pullover Hood
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/48.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+23 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Radsow UXX04F - Radsow Womens Ultra-Soft London Hoodie" data-turbo="false" id="498448" href="/radsow-uxx04f-radsow-women-s-ultra-soft-london-hoodie-498448">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2020/11/18/498448/498448_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738764408" alt="Radsow UXX04F - Radsow Womens Ultra-Soft London Hoodie" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="498448"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(498448, 'undefined', 'undefined');
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


                        </div>

                        <div
                          class="absolute bottom-[20px] top-auto right-[10px] left-auto cursor-pointer hover:opacity-60 transition-all duration-200 hover:scale-105"
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=498448', { frame: 'quick-add-to-cart-modal' });">
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
                        Radsow UXX04F
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Radsow Women&#39;s Ultra-Soft London Hoodie
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



                <a class="product contain" title="HOST Polyester lanyard with carabiner - EgotierPro LY7053" data-turbo="false" id="502778" href="/host-polyester-lanyard-with-carabiner-egotierpro-ly7053-502778">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2021/2/12/502778/502778_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732527622" alt="HOST Polyester lanyard with carabiner - EgotierPro LY7053" loading="lazy" fetchpriority="high">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="502778"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(502778, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=502778', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $0.99
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$2.39</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -59%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        HOST Polyester lanyard with carabiner
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        EgotierPro LY7053
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/2777.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/19078.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Roly CA0408 - Womens CONTROL-DRY Raglan Performance T-Shirt" data-turbo="false" id="447420" href="/roly-ca0408-women-s-control-dry-raglan-performance-t-shirt-447420">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2019/7/16/447420/447420_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738764530" alt="Roly CA0408 - Womens CONTROL-DRY Raglan Performance T-Shirt" loading="lazy">


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



                <a class="product contain" title="Rabbit Skins 4400 - Infant Baby Rib Bodysuit" data-turbo="false" id="29726" href="/rabbit-skins-4400-infant-baby-rib-bodysuit-29726">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2015/9/21/29726/29726_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742971051" alt="Rabbit Skins 4400 - Infant Baby Rib Bodysuit" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="29726"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(29726, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=29726', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $6.55
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$8.72</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -25%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Rabbit Skins 4400
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Infant Baby Rib Bodysuit
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/34.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+13 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Roly CA7129 - PolyCotton Touch Sublimation Tee with Ribbed Crew Neck" data-turbo="false" id="45463" href="/roly-ca7129-polycotton-touch-sublimation-tee-with-ribbed-crew-neck-45463">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/4/21/45463/45463_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738764484" alt="Roly CA7129 - PolyCotton Touch Sublimation Tee with Ribbed Crew Neck" loading="lazy">


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



                <a class="product " title="Jerzees 562 - Premium Nublend Fleece Crew Sweatshirt" data-turbo="false" id="9904" href="/jerzees-562-premium-nublend-fleece-crew-sweatshirt-9904">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2014/8/27/9904/9904_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732020690" alt="Jerzees 562 - Premium Nublend Fleece Crew Sweatshirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="9904"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(9904, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=9904', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $10.30
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$22.30</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -54%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Jerzees 562
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Nublend Fleece Crew Sweatshirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/48.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+11 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="MOUNTAIN Tote bag made of cotton fabric in different colours - EgotierPro BO7602" data-turbo="false" id="447327" href="/mountain-tote-bag-made-of-cotton-fabric-in-different-colours-egotierpro-bo7602-447327">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2019/7/16/447327/447327_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732623977" alt="MOUNTAIN Tote bag made of cotton fabric in different colours - EgotierPro BO7602" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="447327"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(447327, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=447327', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $1.99
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$3.14</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -37%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        MOUNTAIN Tote bag made of cotton fabric in different colours
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        EgotierPro BO7602
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/88.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/99.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="CALAO All-purpose drawstring bag - EgotierPro BO7151" data-turbo="false" id="447321" href="/calao-all-purpose-drawstring-bag-egotierpro-bo7151-447321">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2019/7/16/447321/447321_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732613610" alt="CALAO All-purpose drawstring bag - EgotierPro BO7151" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="447321"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(447321, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=447321', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $1.99
                      </span>



                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        CALAO All-purpose drawstring bag
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        EgotierPro BO7151
                      </div>
                    </h3>


                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Rabbit Skins RS3301 - Toddler Jersey Short-Sleeve T-Shirt" data-turbo="false" id="12346" href="/rabbit-skins-rs3301-toddler-jersey-short-sleeve-t-shirt-12346">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2014/10/1/12346/12346_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732037861" alt="Rabbit Skins RS3301 - Toddler Jersey Short-Sleeve T-Shirt" loading="lazy">


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



                <a class="product " title="Roly DE9129 - Premium Chef Apron with Double Pocket and Tie-Straps" data-turbo="false" id="501908" href="/roly-de9129-premium-chef-apron-with-double-pocket-and-tie-straps-501908">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2021/2/4/501908/501908_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738764901" alt="Roly DE9129 - Premium Chef Apron with Double Pocket and Tie-Straps" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="501908"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(501908, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=501908', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.50
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$6.29</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -30%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Roly DE9129
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Premium Chef Apron with Double Pocket and Tie-Straps
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/2777.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59481.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Roly CA6687 - Stylish Cropped Loose-Fit Womens Short-Sleeve Tee" data-turbo="false" id="447726" href="/roly-ca6687-stylish-cropped-loose-fit-women-s-short-sleeve-tee-447726">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2019/7/16/447726/447726_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738764759" alt="Roly CA6687 - Stylish Cropped Loose-Fit Womens Short-Sleeve Tee" loading="lazy">


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
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/26807/26807_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732196817" alt="Rabbit Skins 3321 - Fine Jersey Toddler T-Shirt" loading="lazy">


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



                <a class="product " title="Gildan 18000 - Heavy Blend Fleece Crewneck Sweatshirt" data-turbo="false" id="222" href="/gildan-18000-heavy-blend-fleece-crewneck-sweatshirt-222">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2010/12/1/222/222_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1743706201" alt="Gildan 18000 - Heavy Blend Fleece Crewneck Sweatshirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="222"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(222, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=222', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $9.39
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$19.18</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -51%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 18000
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Heavy Blend Fleece Crewneck Sweatshirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+21 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="HAMELIN All-purpose drawstring bag - EgotierPro BO7114" data-turbo="false" id="45334" href="/hamelin-all-purpose-drawstring-bag-egotierpro-bo7114-45334">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2016/4/21/45334/45334_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1676568758" alt="HAMELIN All-purpose drawstring bag - EgotierPro BO7114" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="45334"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(45334, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=45334', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $1.99
                      </span>



                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        HAMELIN All-purpose drawstring bag
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        EgotierPro BO7114
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/59.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/99.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/103.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Gildan G180 - Stylish Heavy Blend Fleece Crewneck Sweatshirt" data-turbo="false" id="11167" href="/gildan-g180-stylish-heavy-blend-fleece-crewneck-sweatshirt-11167">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/11167/11167_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945917" alt="Gildan G180 - Stylish Heavy Blend Fleece Crewneck Sweatshirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="11167"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(11167, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=11167', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $9.39
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$19.18</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -51%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan G180
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Stylish Heavy Blend Fleece Crewneck Sweatshirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+33 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan 5000 - Premium Heavy Cotton Classic Fit T-Shirt for Adults" data-turbo="false" id="160" href="/gildan-5000-premium-heavy-cotton-classic-fit-t-shirt-for-adults-160">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2010/12/1/160/160_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1743712363" alt="Gildan 5000 - Premium Heavy Cotton Classic Fit T-Shirt for Adults" loading="lazy">


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



                <a class="product " title="Rabbit Skins 3326 - Toddler Fleece Pullover Hood" data-turbo="false" id="12301" href="/rabbit-skins-3326-toddler-fleece-pullover-hood-12301">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2014/10/1/12301/12301_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732037808" alt="Rabbit Skins 3326 - Toddler Fleece Pullover Hood" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="12301"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(12301, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=12301', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $16.49
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$27.40</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -40%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Rabbit Skins 3326
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Toddler Fleece Pullover Hood
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/41.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/113.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+4 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product contain" title="Rabbit Skins 3401 - Infant Short-Sleeve Jersey T-Shirt" data-turbo="false" id="12304" href="/rabbit-skins-3401-infant-short-sleeve-jersey-t-shirt-12304">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/10/1/12304/12304_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742970824" alt="Rabbit Skins 3401 - Infant Short-Sleeve Jersey T-Shirt" loading="lazy">


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
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2014/8/27/9760/9760_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732020368" alt="Jerzees 29M - Heavyweight Blend T-Shirt" loading="lazy">


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



                <a class="product contain" title="Gildan fleece for men Bordeaux" data-turbo="false" id="11173" href="/gildan-g185-heavy-blend-hoodie-for-cold-weather-comfort-11173">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2014/8/27/11173/11173_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1742945931" alt="Gildan fleece for men Bordeaux" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="11173"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(11173, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=11173', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $13.66
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$32.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -57%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan G185
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Heavy Blend™ Hoodie for Cold Weather Comfort
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+33 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan sweatshirt for men blue" data-turbo="false" id="25233" href="/gildan-18500-heavy-blend-fleece-hooded-sweatshirt-25233">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/28/25233/25233_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732192775" alt="Gildan sweatshirt for men blue" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25233"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25233, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25233', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $13.66
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$32.00</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -57%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Gildan 18500
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Heavy Blend Fleece Hooded Sweatshirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+33 Colors</span>
                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="NANUK Cotton Touch Tubular Neckwarmer - EgotierPro BR9004" data-turbo="false" id="45337" href="/nanuk-cotton-touch-tubular-neckwarmer-egotierpro-br9004-45337">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2016/4/21/45337/45337_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738762680" alt="NANUK Cotton Touch Tubular Neckwarmer - EgotierPro BR9004" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="45337"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(45337, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=45337', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $0.49
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$4.19</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -88%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        NANUK Cotton Touch Tubular Neckwarmer
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        EgotierPro BR9004
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/99.jpg" />

                    </div>
                  </div>

                </a>
              </div>
              <div class="margin-bottom-5 animated fadeIn">



                <a class="product " title="Gildan 2000 - Sustainable Ultra Cotton Comfort T-Shirt" data-turbo="false" id="265" href="/gildan-2000-sustainable-ultra-cotton-comfort-t-shirt-265">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2010/12/1/265/265_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1743707544" alt="Gildan 2000 - Sustainable Ultra Cotton Comfort T-Shirt" loading="lazy">


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



                <a class="product " title="Gildan hoodies for men green" data-turbo="false" id="25940" href="/jerzees-996mr-nublend-hooded-sweatshirt-25940">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/25940/25940_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732194900" alt="Gildan hoodies for men green" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25940"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25940, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25940', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $14.09
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$19.30</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -27%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        JERZEES 996MR
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        NuBlend® Hooded Sweatshirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/341.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/584.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/697.gif" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+10 Colors</span>
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



                <a class="product " title="Gildan sweatshirt for men dark grey" data-turbo="false" id="25901" href="/jerzees-562mr-nublend-crewneck-sweatshirt-25901">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/25901/25901_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732194747" alt="Gildan sweatshirt for men dark grey" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="25901"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(25901, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=25901', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $7.81
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$11.90</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -34%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        JERZEES 562MR
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        NuBlend® Crewneck Sweatshirt
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/20.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/23.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/36.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+15 Colors</span>
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



                <a class="product " title="Rabbit Skins 3317 - Toddler/Juvy Crewneck Sweatshirt" data-turbo="false" id="26804" href="/rabbit-skins-3317-toddler-juvy-crewneck-sweatshirt-26804">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2015/8/31/26804/26804_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1732196803" alt="Rabbit Skins 3317 - Toddler/Juvy Crewneck Sweatshirt" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="26804"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(26804, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=26804', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $14.07
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$19.28</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -27%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Rabbit Skins 3317
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        Toddler/Juvy Crewneck Sweatshirt
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



                <a class="product " title="Roly DE9125 - BENOIT Long apron in twill fabric" data-turbo="false" id="447399" href="/roly-de9125-benoit-long-apron-in-twill-fabric-447399">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-cover object-top" src="https://img.netenders.com/@wordans/files/models/2019/7/16/447399/447399_mediumbig.jpg?width=254&amp;height=382&amp;timestamp=1738764934" alt="Roly DE9125 - BENOIT Long apron in twill fabric" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="447399"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(447399, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=447399', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $4.50
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$10.50</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -57%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Roly DE9125
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        BENOIT Long apron in twill fabric
                      </div>
                    </h3>


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



                <a class="product contain" title="Eco-Friendly Vibrant Cotton Tote Bag with Reinforced Handles - EgotierPro Q7521" data-turbo="false" id="534777" href="/eco-friendly-vibrant-cotton-tote-bag-with-reinforced-handles-egotierpro-q7521-534777">

                  <div class="product-information text-dark-gray">
                    <div class="relative my-3 image-container group">
                      <img class="w-full border border-solid light-border rounded-2xl aspect-[2/3] object-contain object-center" src="https://img.netenders.com/@wordans/files/models/2024/2/20/534777/534777_mediumbig.jpg?width=254&amp;height=&amp;timestamp=1732883460" alt="Eco-Friendly Vibrant Cotton Tote Bag with Reinforced Handles - EgotierPro Q7521" loading="lazy">


                      <button
                        class="add-to-wishlist-new-design   right"
                        data-add-to-wishlist="534777"
                        x-data="{ wishlisted: undefined, hover: false, isLogged: $store.profile.isLogged }"
                        @click.prevent="
    if ($store.profile.isLogged) {
      wishlisted = !wishlisted;
      addToWishlist(534777, 'undefined', 'undefined');
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
                          onclick="event.preventDefault(); Turbo.visit('/quick_add_to_cart?product_id=534777', { frame: 'quick-add-to-cart-modal' });">
                          <img class="object-contain aspect-square w-[30px] h-[30px] mt-[1px]" alt="Quick Add To Cart" loading="lazy" src="https://assets.wordans.ca/images/wordans_2024/icons/quick_add.svg" />
                        </div>
                      </div>
                    </div>

                    <div class="mb-0 prices-info md:mb-4">
                      <span class="price text-xl md:text-3xl font-bold !leading-normal">
                        $2.88
                      </span>

                      <span class="text-sm line-through retail-price text-special-red md:text-lg">$4.92</span>

                      <span class="float-right px-3 py-1 text-sm mt-[2px] font-semibold md:mt-0 md:px-6 md:py-2 md:text-base md:font-bold rounded-lg bg-soft-red text-special-red">
                        -41%
                      </span>

                    </div>

                    <h3 class="mb-0">
                      <div class="text-base font-bold truncate md:text-2xl">
                        Eco-Friendly Vibrant Cotton Tote Bag with Reinforced Handles
                      </div>

                      <div class="text-sm font-normal truncate md:text-lg">
                        EgotierPro Q7521
                      </div>
                    </h3>


                    <div class="color-circles">
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/423.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/2803.jpg" />
                      <img class="rounded-full w-4" loading="lazy" style="border: .5px solid #E5E7EB" src="https://assets.wordans.ca/files/colors/25909.jpg" />

                      <img class="w-5 aspect-square" alt="Colors" loading="lazy" src="https://assets.wordans.ca/assets/colorWheel-2f22f70ea6c73418db459956901d54765f42621f32f1ca48b42111babfe6a670.png" />
                      <span class="text-sm text-gray-400 md:text-lg">+1 Colors</span>
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
              <div role="navigation" aria-label="Pagination" class="pagination-new"><span class="previous_page disabled" aria-label="Previous page"><img class="previous-label-icon" alt="Previous" src="https://assets.wordans.ca/assets/wordans_2024/chevron_left-ec55170ac6eb8dd95bfc0172c65c4517b42222254c8087e00fb35e17106b6b6b.svg" /> Previous</span> <em class="current">1</em> <a rel="next" href="javascript:;">2</a> <a href="javascript:;">3</a> <a href="javascript:;">4</a> <a href="/products?_kx=oOvHKmCIQKfoY9MogZh3Iq6wpsDeFhqQ3Y3Sd5Lk5-Q.RMfrwJ&amp;page=5&amp;test=&amp;utm_campaign=CA+-+EN+%2F+20%25+OFF+W3+%7C+CATALOG&amp;utm_klaviyo_id=01K5PWR9XFAY9A1N3TSGYY6ZYV&amp;utm_medium=email&amp;utm_source=Klaviyo">5</a> <a href="/products?_kx=oOvHKmCIQKfoY9MogZh3Iq6wpsDeFhqQ3Y3Sd5Lk5-Q.RMfrwJ&amp;page=6&amp;test=&amp;utm_campaign=CA+-+EN+%2F+20%25+OFF+W3+%7C+CATALOG&amp;utm_klaviyo_id=01K5PWR9XFAY9A1N3TSGYY6ZYV&amp;utm_medium=email&amp;utm_source=Klaviyo">6</a>
                <a href="javascript:;">7</a>
                <a href="javascript:;">8</a>
                <a href="javascript:;">9</a>
                <a href="javascript:;">10</a>
                <a href="javascript:;">20</a>
                <a href="javascript:;">30</a>
                <a href="javascript:;">40</a>
                <a href="javascript:;">47</a>
                <a class="next_page" aria-label="Next page" rel="next" href="javascript:;">Next <img class="next-label-icon" alt="Next" src="https://assets.wordans.ca/assets/wordans_2024/chevron_right-88b7140327f3e7abe94fcc6199c61fac16ace4221cd57aab1d1b6fbe2bf2f58a.svg" /></a>
              </div>
            </div>


          </div>
        </form>
      </div>




    </div>
  </section>
</div>





<?php
include 'includes/footer.php';
?>