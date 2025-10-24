<!DOCTYPE html>
<html lang="en-ca" xml:lang="en-ca" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <script src="/assets/js/helpers.js" type="module"></script>
  <script src="/assets/js/pdp-quick-add.js" type="module"></script>
  <link rel="icon" type="image/x-icon" href="/assets/images/logo.png">
  <link href='https://fonts.googleapis.com' rel='preconnect'>
  <link crossorigin='true' href='https://fonts.gstatic.com' rel='preconnect'>
  <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;family=Roboto:wght@400;700&amp;display=swap' rel='stylesheet'>
  <meta charset='utf-8'>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0' name='viewport'>
  <title> Wholesale Clothing and Accessories | yourtagclothing</title>


  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="stylesheet" href="/assets/css/smarty_yourtagclothing.css" />
  <link rel="stylesheet" href="/assets/css/searchbar.css" />
  <link rel="stylesheet" href="/assets/css/tailwind.css" />
  <link rel="stylesheet" href="/assets/css/embla-carousel.css" />
  <script src="/assets/js/jquery-2.2.4.min.js"></script>

  <script src="/assets/js/smarty_yourtagclothing.js"></script>
  <meta content='none' name='msapplication-config'>
  <meta content='yes' name='apple-mobile-web-app-capable'>
  <meta content='yes' name='mobile-web-app-capable'>
  <meta content='yourtagclothing' name='apple-mobile-web-app-title'>
  <meta content='#1b1649' name='theme-color'>
  <meta content='yourtagclothing' name='application-name'>
  <meta content='yourtagclothing' name='og:site_name'>
  <meta content='website' property='og:type'>
  <meta content='https://yourtagclothing.com/' property='og.url'>
  <meta content='/assets/images/logo.png' property='og:image'>
  <meta content='Wholesale Clothing and Accessories | yourtagclothing' property='og:title'>
  <meta content='Cheap wholesale products for everyone. Bulk discounts, no minimum. Buy at crazy wholesale prices.' property='og:description'>


  <meta content='en-ca' http-equiv='Content-Language'>
  <meta content='Cheap wholesale products for everyone. Bulk discounts, no minimum. Buy at crazy wholesale prices.' name='description'>
  <meta content='Copyright yourtagclothing - 2018' name='copyright'>
  <meta content='https://yourtagclothing.com/' name='author'>
  <meta content='General' name='Rating'>
  <meta content='INDEX, FOLLOW, ALL' name='Robots'>
  <link rel="canonical" href='https://yourtagclothing.com/' />



</head>


<body class='enable-animation topbar blank_products en-CA new-designs yourtagclothing'>
  <div data-sitekey='6Lc9LtQgAAAAABsSmx0aBRii-7YMdWJLJBq-C6Rs' id='recaptcha-script'></div>
  <style>
    body div.topbar {
      font-size: 12px;
    }

    body #wrapper {
      min-height: auto !important;
    }
  </style>

  <div class='no-bs' id='wrapper'>
    <div
      class="sticky top-0 lg:static z-50 lg:z-auto bg-white relative mega-menu-container"
      x-data="headerComponent()"
      x-init="initScrollHandler();">


      <div class="wrapper">
        <header id="top-bar" class="flex flex-col">
          <div class="flex justify-between items-center lg:gap-6 py-6 lg:py-6">
            <div class="flex items-center">
              <button class="p-0 m-0 border-0 cursor-pointer" @click="sideMenuOpen = true">
                <img class="mr-6 lg:!hidden" alt="Menu" src="/assets/images/menu_icon.svg" />
              </button>
              <a title="Logo yourtagclothing" href="https://yourtagclothing.com/">
                <picture>
                  <source srcset="/assets/images/logo.png" media="(max-width: 768px)" />
                  <source srcset="/assets/images/logo.png" media="(min-width: 768.1px)" /><img alt="yourtagclothing" class="shop-logo h-auto w-[104px] mr-6" loading="eager" fetchpriority="high" src="/assets/images/logo.png" />
                </picture>
              </a>
            </div>

            <div
              class="flex items-center justify-center right-side gap-4"
              :class="{ 'extended': isExtended }"
              x-data="{ isExtended: false }">
              <li
                class="!hidden relative rounded-xl lg:!block search search-box over-header grow"
                @click.away="isExtended = false"
                @click="isExtended = true"
                x-data="">
                <form class="sb_wrapper m-0 p-0 " x-on:keydown.enter.prevent="if ($refs.searchInput.value.length &gt; 0) { $refs.searchInput.form.submit() }" action="/product" accept-charset="UTF-8" method="get">
                  <input type="search" name="q" id="q" class="input- !rounded-xl form-control min-w-[300px] !border focus:bg-white bg-gray-100 autocomplete-field-new m-0 py-2 pl-6 pr-12" autocomplete="off" placeholder="Search Products" aria-label="Search Products" x-ref="searchInput" x-on:input="$store.header.handleInput($event)" x-on:click="$store.header.handleClick($event)" />
                  <button
                    id="search-button"
                    class="absolute top-0 right-0 bottom-auto left-auto w-20 h-full rounded-r-xl bg-lighter-blue flex items-center justify-center border border-l-0 border-solid border-light-blue"
                    type="button"
                    @click="if ($refs.searchInput.value.length > 0) { $refs.searchInput.form.submit() }">
                    <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#1170ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </button>
                  <div class="autocomplete-results rounded-2xl grid-cols-2 md:!w-fit md:!left-0"
                    data-no-results="No results."
                    data-search-url="/product"
                    data-suggestions="Suggestions"
                    data-brands="brands"
                    data-categories="Categories"
                    data-faqs="FAQs"
                    data-see-more-product-results-for="see more product results for">
                  </div>

                </form>
              </li>

              <style>
                #search-button>svg {
                  transition: transform 0.2s ease-in-out;
                }

                #search-button:hover>svg {
                  transform: scale(1.2);
                }
              </style>

              <!-- <a ref="nofollow" class="!hidden whitespace-nowrap lg:!flex btn- h-[40px] px-8 justify-center group items-center hover:!text-darker-blue gradient-customize text-white" href="/customization">
                <span class="flex mr-3 edit-icon">
                  <svg width="19" height="19" viewbox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.36722 7.88537L7.88535 4.36723M18 18L15.0233 17.6693C14.6597 17.6289 14.4778 17.6086 14.3079 17.5536C14.1571 17.5048 14.0136 17.4358 13.8812 17.3486C13.7321 17.2502 13.6027 17.1209 13.344 16.8621L1.72863 5.24677C0.757123 4.27526 0.757122 2.70014 1.72863 1.72863C2.70013 0.757124 4.27525 0.757123 5.24676 1.72863L16.8621 13.344C17.1209 13.6027 17.2502 13.7321 17.3486 13.8812C17.4358 14.0136 17.5048 14.1571 17.5536 14.3079C17.6086 14.4778 17.6289 14.6597 17.6693 15.0233L18 18Z" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-darker-blue transition-all duration-300"></path>
                  </svg>
                </span>
                <span>Customization</span>
              </a> -->
              <!-- <a rel="nofollow" class="!hidden whitespace-nowrap lg:!flex btn- h-[40px] px-8 justify-center group items-center hover:!text-darker-blue !bg-[#E7F1FF] text-link" href="/order">
                <span class="flex mr-3 tracking-icon">
                  <svg width="18" height="16" viewbox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.6667 3.83337H12.6144C12.8182 3.83337 12.9201 3.83337 13.016 3.8564C13.1011 3.87681 13.1824 3.91048 13.2569 3.95617C13.341 4.00771 13.4131 4.07977 13.5572 4.2239L16.9428 7.60952C17.087 7.75364 17.159 7.82571 17.2106 7.9098C17.2562 7.98436 17.2899 8.06565 17.3103 8.15068C17.3334 8.24659 17.3334 8.3485 17.3334 8.55233V10.9167C17.3334 11.305 17.3334 11.4991 17.2699 11.6523C17.1853 11.8565 17.0231 12.0187 16.8189 12.1033C16.6658 12.1667 16.4716 12.1667 16.0834 12.1667M11.9167 12.1667H10.6667M10.6667 12.1667V4.00004C10.6667 3.06662 10.6667 2.59991 10.485 2.24339C10.3252 1.92979 10.0703 1.67482 9.75667 1.51503C9.40015 1.33337 8.93344 1.33337 8.00002 1.33337H3.33335C2.39993 1.33337 1.93322 1.33337 1.5767 1.51503C1.2631 1.67482 1.00813 1.92979 0.848343 2.24339C0.666687 2.59991 0.666687 3.06662 0.666687 4.00004V10.5C0.666687 11.4205 1.41288 12.1667 2.33335 12.1667M10.6667 12.1667H7.33335M7.33335 12.1667C7.33335 13.5474 6.21407 14.6667 4.83335 14.6667C3.45264 14.6667 2.33335 13.5474 2.33335 12.1667M7.33335 12.1667C7.33335 10.786 6.21407 9.66671 4.83335 9.66671C3.45264 9.66671 2.33335 10.786 2.33335 12.1667M16.0834 12.5834C16.0834 13.734 15.1506 14.6667 14 14.6667C12.8494 14.6667 11.9167 13.734 11.9167 12.5834C11.9167 11.4328 12.8494 10.5 14 10.5C15.1506 10.5 16.0834 11.4328 16.0834 12.5834Z" stroke="#1170FF" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class=" group-hover:stroke-darker-blue transition-all duration-300"></path>
                  </svg>
                </span>
                <span>Track Order</span>
              </a> -->
              <div class="grid shrink-0 grid-cols-4 lg:grid-cols-3 gap-4 ml-8">
                <!-- Mobile Search -->
                <ul class="flex lg:!hidden m-0 p-0 list-none">
                  <li class="mobile-search-icon-wrapper" @click="$store.header.focusInput()">
                    <img id="mobile-search-icon" alt="Search" src="/assets/images/search_icon.svg" />
                  </li>
                  <div
                    class="absolute top-full left-0 right-auto bottom-auto"
                    x-cloak
                    x-show="$store.header.mobileSearchOpen"
                    @click.away="$store.header.mobileSearchOpen = false">

                    <form class="relative sb_wrapper m-0 p-0" x-on:keydown.enter.prevent="if ($refs.searchInput.value.length &gt; 0) { $refs.searchInput.form.submit() }" action="/product" accept-charset="UTF-8" method="get">
                      <input type="search" name="q" id="q" class="input- !rounded-t-none !bg-white autocomplete-field-new m-0 search-input min-w-[300px] w-screen p-[6.5vw] !rounded-b-xl shadow-md z-[1000] !pr-32" autocomplete="off" placeholder="Search Products" aria-label="Search Products" x-ref="searchInput" x-on:input="$store.header.handleInput($event)" x-on:click="$store.header.handleClick($event)" />
                      <div class="autocomplete-results rounded-2xl grid-cols-2 md:!w-fit md:!left-0"
                        data-no-results="No results."
                        data-search-url="/product"
                        data-suggestions="Suggestions"
                        data-brands="brands"
                        data-categories="Categories"
                        data-faqs="FAQs"
                        data-see-more-product-results-for="see more product results for">
                      </div>

                      <div
                        x-show="$store.header.searchActive"
                        class="fa fa-close text-3xl opacity-60 absolute top-[50%] left-auto bottom-auto right-28 transform translate-y-[-50%]"
                        @click="$store.header.mobileSearchOpen = false">
                      </div>
                      <button
                        id="search-button"
                        class="absolute top-0 right-0 bottom-auto left-auto w-20 h-full rounded-r-xl bg-lighter-blue flex items-center justify-center border border-l-0 border-solid border-light-blue"
                        type="button"
                        @click="if ($refs.searchInput.value.length > 0) { $refs.searchInput.form.submit() }">
                        <svg width="20" height="20" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="#1170ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                      </button>
                    </form>
                  </div>
                </ul>

                <!-- Wishlist icon -->
                <button
                  class="flex items-center justify-center"
                  @click="if ($store.profile.isLogged){ window.open('/myaccount/wishlist', '_self') } else { $store.profile.loadModal() }"
                  title="My wishlist"
                  type="button">

                  <img alt="My wishlist" width="21" height="21" src="/assets/images/heart_icon.svg" />
                </button>

                <!-- Profile icon -->
                <div class="flex items-center justify-center">
                  <div
                    x-show="$store.profile.isLogged"
                    class="relative"
                    @mouseenter="if (mouseLeaveTimeout) clearTimeout(mouseLeaveTimeout); $store.header.profileOpen = true"
                    @mouseleave="mouseLeaveTimeout = setTimeout(() => $store.header.profileOpen = false, 500)">
                    <a
                      href="javascript:;"
                      rel="nofollow">
                      <img alt="Account Information" width="18" height="20" src="/assets/images/profile_icon.svg" />
                    </a>
                    <div x-show="$store.header.profileOpen" x-cloak class="!absolute shadow-xl overflow-hidden z-20 right-0 top-full whitespace-nowrap bg-white rounded-xl border-all light-border">
                      <a rel="nofollow" href="javascript:;">
                        <div class="flex overflow-hidden items-center py-4 pr-12 pl-8 cursor-pointer hover:bg-light-blue">
                          <div class="flex items-center justify-center w-8 h-8">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M16.6668 17.5C16.6668 16.337 16.6668 15.7555 16.5233 15.2824C16.2001 14.217 15.3664 13.3834 14.3011 13.0602C13.828 12.9167 13.2465 12.9167 12.0835 12.9167H7.91683C6.75386 12.9167 6.17237 12.9167 5.69921 13.0602C4.63388 13.3834 3.8002 14.217 3.47703 15.2824C3.3335 15.7555 3.3335 16.337 3.3335 17.5M13.7502 6.25C13.7502 8.32107 12.0712 10 10.0002 10C7.92909 10 6.25016 8.32107 6.25016 6.25C6.25016 4.17893 7.92909 2.5 10.0002 2.5C12.0712 2.5 13.7502 4.17893 13.7502 6.25Z" stroke="#00228A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                          <div class="ml-6 text-xl text-purple-">My Account</div>
                        </div>
                      </a>
                      <a rel="nofollow" href="/myaccount/orders">
                        <div class="flex overflow-hidden items-center py-4 pr-12 pl-8 cursor-pointer hover:bg-light-blue">
                          <div class="flex items-center justify-center w-8 h-8">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M20.5 7.27783L12 12.0001M12 12.0001L3.49997 7.27783M12 12.0001L12 21.5001M21 12.0001V7.94153C21 7.59889 21 7.42757 20.9495 7.27477C20.9049 7.13959 20.8318 7.01551 20.7354 6.91082C20.6263 6.79248 20.4766 6.70928 20.177 6.54288L12.777 2.43177C12.4934 2.27421 12.3516 2.19543 12.2015 2.16454C12.0685 2.13721 11.9315 2.13721 11.7986 2.16454C11.6484 2.19543 11.5066 2.27421 11.223 2.43177L3.82297 6.54288C3.52345 6.70928 3.37368 6.79248 3.26463 6.91082C3.16816 7.01551 3.09515 7.13959 3.05048 7.27477C3 7.42757 3 7.59889 3 7.94153V16.0586C3 16.4013 3 16.5726 3.05048 16.7254C3.09515 16.8606 3.16816 16.9847 3.26463 17.0893C3.37368 17.2077 3.52346 17.2909 3.82297 17.4573L11.223 21.5684C11.5066 21.726 11.6484 21.8047 11.7986 21.8356C11.9315 21.863 12.0685 21.863 12.2015 21.8356C12.3516 21.8047 12.4934 21.726 12.777 21.5684L13 21.4445M7.5 4.50008L16.5 9.50008M22 21.5001L21 20.5001M22 18.0001C22 19.6569 20.6569 21.0001 19 21.0001C17.3431 21.0001 16 19.6569 16 18.0001C16 16.3432 17.3431 15.0001 19 15.0001C20.6569 15.0001 22 16.3432 22 18.0001Z" stroke="#00228A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                          <div class="ml-6 text-xl text-purple-">My Orders</div>
                        </div>
                      </a>
                      <a rel="nofollow" href="/myaccount/carts">
                        <div class="flex overflow-hidden items-center py-4 pr-12 pl-8 cursor-pointer hover:bg-light-blue">
                          <div class="flex items-center justify-center w-8 h-8">
                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_1104_12040)">
                                <path d="M4.16662 12.25H15.1131C15.9571 12.25 16.3791 12.25 16.715 12.0848C17.011 11.9392 17.2597 11.7055 17.4301 11.4128C17.6236 11.0804 17.6702 10.64 17.7634 9.75921L18.2509 5.1523C18.2794 4.88327 18.2936 4.74876 18.2524 4.64464C18.2162 4.5532 18.1516 4.47735 18.069 4.42949C17.975 4.375 17.8461 4.375 17.5883 4.375H3.74995M1.6665 1.75H2.70687C2.92739 1.75 3.03765 1.75 3.12391 1.79403C3.19985 1.8328 3.26278 1.89488 3.30437 1.97204C3.3516 2.05969 3.35848 2.17524 3.37224 2.40634L4.12744 15.0937C4.14119 15.3248 4.14807 15.4403 4.19531 15.528C4.23689 15.6051 4.29982 15.6672 4.37576 15.706C4.46203 15.75 4.57229 15.75 4.7928 15.75H15.8332M6.24984 18.8125H6.25817M13.7498 18.8125H13.7582M6.6665 18.8125C6.6665 19.0541 6.47996 19.25 6.24984 19.25C6.01972 19.25 5.83317 19.0541 5.83317 18.8125C5.83317 18.5709 6.01972 18.375 6.24984 18.375C6.47996 18.375 6.6665 18.5709 6.6665 18.8125ZM14.1665 18.8125C14.1665 19.0541 13.98 19.25 13.7498 19.25C13.5197 19.25 13.3332 19.0541 13.3332 18.8125C13.3332 18.5709 13.5197 18.375 13.7498 18.375C13.98 18.375 14.1665 18.5709 14.1665 18.8125Z" stroke="#00228A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </g>
                              <defs>
                                <clipPath id="clip0_1104_12040">
                                  <rect width="20" height="21" fill="white" />
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                          <div class="ml-6 text-xl text-purple-">Carts</div>
                        </div>
                      </a>
                      <a rel="nofollow" href="/myaccount/stock_notifications">
                        <div class="flex overflow-hidden items-center py-4 pr-12 pl-8 cursor-pointer hover:bg-light-blue">
                          <div class="flex items-center justify-center w-8 h-8">
                            <svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6.86103 16.381H10.1944C10.1944 17.2714 9.44437 18 8.5277 18C7.61103 18 6.86103 17.2714 6.86103 16.381ZM16.0277 14.7619C16.09 15.0718 16.0277 15.5714 16.0277 15.5714H1.0277C1.0277 15.5714 0.965377 15.0718 1.0277 14.7619C1.20658 13.8723 2.69437 13.1429 2.69437 13.1429V8.28571C2.69437 5.77619 4.36103 3.59048 6.86103 2.8619V2.61905C6.86103 1.72857 7.61103 1 8.5277 1C9.44437 1 10.1944 1.72857 10.1944 2.61905V2.8619C12.6944 3.59048 14.361 5.77619 14.361 8.28571V13.1429C14.361 13.1429 15.8488 13.8723 16.0277 14.7619ZM12.6944 8.28571C12.6944 6.01905 10.861 4.2381 8.5277 4.2381C6.19437 4.2381 4.36103 6.01905 4.36103 8.28571V13.9524H12.6944V8.28571Z" fill="#00228A" stroke="#00228A" stroke-width="0.5" stroke-linejoin="round" />
                            </svg>
                          </div>
                          <div class="ml-6 text-xl text-purple-">Stock Notifications</div>
                        </div>
                      </a>
                      <a rel="nofollow" href="/myaccount/wishlist">
                        <div class="flex overflow-hidden items-center py-4 pr-12 pl-8 cursor-pointer hover:bg-light-blue">
                          <div class="flex items-center justify-center w-8 h-8">
                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99452 2.67663C7.39504 0.841742 4.7278 0.348162 2.72376 2.02837C0.719715 3.70858 0.437574 6.51781 2.01136 8.505C3.31985 10.1572 7.27982 13.6419 8.57768 14.7697C8.72288 14.8959 8.79549 14.959 8.88017 14.9838C8.95408 15.0054 9.03496 15.0054 9.10887 14.9838C9.19356 14.959 9.26616 14.8959 9.41136 14.7697C10.7092 13.6419 14.6692 10.1572 15.9777 8.505C17.5515 6.51781 17.3038 3.69091 15.2653 2.02837C13.2268 0.365836 10.594 0.841742 8.99452 2.67663Z" stroke="#00228A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                          <div class="ml-6 text-xl text-purple-">My Wishlist</div>
                        </div>
                      </a>
                      <a rel="nofollow" href="/myaccount/loyalty_program">
                        <div class="flex overflow-hidden items-center py-4 pr-12 pl-8 cursor-pointer hover:bg-light-blue">
                          <div class="flex items-center justify-center w-8 h-8">
                            <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <circle cx="10.5" cy="11" r="9.6" stroke="#00228A" stroke-width="1.8" />
                              <path d="M10.4999 6.80078L11.3092 8.90492C11.4408 9.24709 11.5066 9.41818 11.609 9.56209C11.6997 9.68963 11.8111 9.80107 11.9386 9.89176C12.0825 9.99409 12.2536 10.0599 12.5958 10.1915L14.6999 11.0008L12.5958 11.8101C12.2536 11.9417 12.0825 12.0075 11.9386 12.1098C11.8111 12.2005 11.6997 12.3119 11.609 12.4395C11.5066 12.5834 11.4408 12.7545 11.3092 13.0966L10.4999 15.2008L9.69066 13.0966C9.55906 12.7545 9.49325 12.5834 9.39093 12.4395C9.30023 12.3119 9.1888 12.2005 9.06125 12.1098C8.91734 12.0075 8.74626 11.9417 8.40408 11.8101L6.29995 11.0008L8.40408 10.1915C8.74626 10.0599 8.91734 9.99409 9.06125 9.89176C9.1888 9.80107 9.30023 9.68963 9.39093 9.56209C9.49325 9.41818 9.55906 9.24709 9.69066 8.90492L10.4999 6.80078Z" fill="#00228A" stroke="#00228A" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                          </div>
                          <div class="ml-6 text-xl text-purple-">yourtagclothing+</div>
                        </div>
                      </a>
                      <a data-method="delete" rel="nofollow" onclick="resetCookies()" href="/logout">
                        <div class="flex overflow-hidden items-center py-4 pr-12 pl-8 cursor-pointer hover:bg-light-blue">
                          <div class="flex items-center justify-center w-8 h-8">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.75 3.55556L11.5515 4.80889L13.7445 7.11111H5.98889C5.49797 7.11111 5.1 7.50908 5.1 8C5.1 8.49092 5.49797 8.88889 5.98889 8.88889H13.7445L11.5515 11.1822L12.75 12.4444L17 8M1.7 1.77778H7.61111C8.10203 1.77778 8.5 1.37981 8.5 0.888889C8.5 0.397969 8.10203 0 7.61111 0H1.7C0.765 0 0 0.8 0 1.77778V14.2222C0 15.2 0.765 16 1.7 16H7.61111C8.10203 16 8.5 15.602 8.5 15.1111C8.5 14.6202 8.10203 14.2222 7.61111 14.2222H1.7V1.77778Z" fill="#00228A" />
                            </svg>
                          </div>
                          <div class="ml-6 text-xl text-purple-">Logout</div>
                        </div>
                      </a>
                    </div>

                  </div>
                  <turbo-frame id="header-profile-btn" x-cloak x-show="!$store.profile.isLogged">
                    <div class="relative">
                      <a class="login-button" href="javascript:;" @click="$store.profile.loadModal()">
                        <img alt="My Account" width="18" height="20" src="/assets/images/profile_icon.svg" />
                      </a>
                    </div>

                  </turbo-frame>
                </div>

                <turbo-frame id="minicart">
                  <div
                    @mouseover="$store.header.fetchMinicart(); $store.header.minicartOpen = true; $store.header.profileOpen = false"
                    @mouseleave="$store.header.minicartOpen = false"
                    class="relative">
                    <a rel="nofollow" data-turbo="false" href="javascript:;">
                      <span x-text="$store.header.qty" class="flex absolute justify-center items-center translate-x-[65%] w-7 h-7 -translate-y-[30%] text-base font-bold text-white bg-another-blue rounded-full"></span>
                      <img alt="Cart" width="26" height="26" src="/assets/images/cart_icon.svg" />
                    </a>
                    <div
                      x-cloak
                      x-show="$store.header.minicartOpen"
                      class="!absolute shadow-xl overflow-x-hidden z-50 right-0 top-full min-w-[300px] whitespace-nowrap bg-white rounded-xl border-all light-border">
                      <div id="loading">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                      </div>
                    </div>

                  </div>
                </turbo-frame>

              </div>
            </div>
          </div>


        </header>
      </div>



      <div class="bg-darker-blue" x-data="{}">
        <div class="relative wrapper">
          <ul class="!hidden justify-between px-0 m-0 text-xl lg:!flex mega-links">

            <a href="/brands/wholesale-brands">
              <li

                class="flex overflow-hidden relative gap-x-3 justify-center items-center py-5  mx-0 text-white whitespace-nowrap border-4 cursor-pointer xl:mx-2 first:ml-0 last:mr-0 text-ellipsis mega-link px-3">
                Brands
              </li>
            </a>

            <a href="/blank-apparel-accessories/t-shirts-s2729">
              <li
                class="flex overflow-hidden relative gap-x-3 justify-center items-center py-5  mx-0 text-white whitespace-nowrap border-4 cursor-pointer xl:mx-2 first:ml-0 last:mr-0 text-ellipsis mega-link px-3">
                T-Shirts
              </li>
            </a>
            <a href="/blank-apparel-accessories/sweats-fleece-s3668">
              <li
                class="flex overflow-hidden relative gap-x-3 justify-center items-center py-5  mx-0 text-white whitespace-nowrap border-4 cursor-pointer xl:mx-2 first:ml-0 last:mr-0 text-ellipsis mega-link px-3">
                Sweats &amp; Fleece
              </li>
            </a>
            <a href="/blank-apparel-accessories/sports-apparel-s21796">
              <li
                class="flex overflow-hidden relative gap-x-3 justify-center items-center py-5  mx-0 text-white whitespace-nowrap border-4 cursor-pointer xl:mx-2 first:ml-0 last:mr-0 text-ellipsis mega-link px-3">
                Sports Apparel
              </li>
            </a>
            <a href="/blank-apparel-accessories/jackets-s3669">
              <li
                class="flex overflow-hidden relative gap-x-3 justify-center items-center py-5  mx-0 text-white whitespace-nowrap border-4 cursor-pointer xl:mx-2 first:ml-0 last:mr-0 text-ellipsis mega-link px-3">
                Jackets
              </li>
            </a>
            <a href="/blank-apparel-accessories/headwear-s2732">
              <li
                class="flex overflow-hidden relative gap-x-3 justify-center items-center py-5  mx-0 text-white whitespace-nowrap border-4 cursor-pointer xl:mx-2 first:ml-0 last:mr-0 text-ellipsis mega-link px-3">
                Headwear
              </li>
            </a>
            <a href="/blank-apparel-accessories/pants-shorts">
              <li
                class="flex overflow-hidden relative gap-x-3 justify-center items-center py-5  mx-0 text-white whitespace-nowrap border-4 cursor-pointer xl:mx-2 first:ml-0 last:mr-0 text-ellipsis mega-link px-3">
                Pants &amp; Shorts
              </li>
            </a>
          </ul>




          <div
            x-data="{}"
            x-cloak
            x-show="$store.header.megaMenu && $store.header.megaMenu['brands']"
            @mouseenter="$store.header.megaMenu['brands'] = true"
            @mouseleave="$store.header.megaMenu = {}"
            class="fixed md:!absolute w-screen md:w-full h-screen md:h-auto top-0 left-0 md:top-full z-50">
            <div class="flex flex-col md:flex-row bg-white md:rounded-br-xl md:rounded-bl-xl drop-shadow-xl h-full md:h-auto md:max-h-[75vh]">

              <div class="flex md:hidden justify-between items-center pl-6 pt-8 pr-8">
                <button class="pt-4" @click="$store.header.megaMenu = {}; $store.header.sideMenuOpen = true">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" version="1.1" id="svg1" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                    <defs id="defs1"></defs>
                    <g transform="rotate(90 12 12)">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M 4.7,7.4260677 V 11.798326 L 12.029996,16.573932 19.3,11.798326 V 7.4260677 l -7.270004,4.3722583 z" fill="#666666" id="path1" style="stroke-width:0.182956"></path>
                    </g>
                  </svg>
                </button>
                <button @click="$store.header.megaMenu = {}">
                  <i class="fa fa-close"></i>
                </button>
              </div>

              <div class="flex flex-col flex-1 min-h-0 md:h-auto md:justify-between pb-16 p-8 pr-0 md:p-20">
                <div class="flex flex-col md:hidden">
                  <a class="flex items-center text-dark-blue font-bold text-2xl" href="/brands/wholesale-brands">
                    <span>View All</span>
                  </a>
                  <hr class="horizontal-line">
                </div>
                <div
                  class="standard columns-2 gap-x-4 md:flex md:flex-1 overflow-y-auto justify-stretch">
                  <div class="last:mr-10 brand text-dark-blue w-full">
                    <div class="mb-4 text-2xl font-bold">
                      A-C
                    </div>
                    <ul class="p-0 m-0 list-none">
                      <a href="/ajm-b42369">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          AJM
                        </li>
                      </a> <a href="/allpro-b72741">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          AllPro
                        </li>
                      </a> <a href="/american-apparel-b30">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          American Apparel
                        </li>
                      </a> <a href="/anvil-b9315">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Anvil
                        </li>
                      </a> <a href="/artisan-collection-by-reprime-b44003">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Artisan Collection by Reprime
                        </li>
                      </a> <a href="/bella-canvas-b47">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Bella+Canvas
                        </li>
                      </a> <a href="/berne-b43784">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Berne
                        </li>
                      </a> <a href="/blank-activewear-b44037">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Blank Activewear
                        </li>
                      </a> <a href="/burnside-b21254">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Burnside
                        </li>
                      </a> <a href="/c2-sport-b21257">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          C2 Sport
                        </li>
                      </a> <a href="/canada-sportswear-b44615">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Canada Sportswear
                        </li>
                      </a> <a href="/canada-sportswear-genuine-b44614">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Canada Sportswear Genuine
                        </li>
                      </a> <a href="/champion-b21311">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Champion
                        </li>
                      </a> <a href="/columbia-b4784">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Columbia
                        </li>
                      </a> <a href="/columbia-golf-b43776">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Columbia Golf
                        </li>
                      </a> <a href="/columbia-timing-b43781">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Columbia Timing
                        </li>
                      </a> <a href="/comfort-colors-b21528">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Comfort Colors
                        </li>
                      </a> <a href="/core365-b16798">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Core365
                        </li>
                      </a> <a href="/csw-24-7-b44616">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          CSW 24/7
                        </li>
                      </a> <a href="/cx2-b44617">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          CX2
                        </li>
                      </a> <a href="/cx2-hivis-b44619">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          CX2 Hivis
                        </li>
                      </a>
                    </ul>
                  </div>
                  <div class="last:mr-10 brand text-dark-blue w-full">
                    <div class="mb-4 text-2xl font-bold">
                      D-K
                    </div>
                    <ul class="p-0 m-0 list-none">
                      <a href="/devon-jones-b22073">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Devon &amp; Jones
                        </li>
                      </a> <a href="/dri-duck-b22696">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Dri Duck
                        </li>
                      </a> <a href="/egotierpro-b43790">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          EgotierPro
                        </li>
                      </a> <a href="/elevate-b23498">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Elevate
                        </li>
                      </a> <a href="/fleece-factory-b44791">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Fleece Factory
                        </li>
                      </a> <a href="/flexfit-b16294">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Flexfit
                        </li>
                      </a> <a href="/foresight-apparel-b44403">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Foresight Apparel
                        </li>
                      </a> <a href="/fruit-of-the-loom-b6348">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Fruit of the Loom
                        </li>
                      </a> <a href="/g-lyn-b44784">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          G-Lyn
                        </li>
                      </a> <a href="/gildan-b34">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Gildan
                        </li>
                      </a> <a href="/hanes-b48">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Hanes
                        </li>
                      </a> <a href="/harriton-b22064">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Harriton
                        </li>
                      </a> <a href="/heritage-54-b44621">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Heritage 54
                        </li>
                      </a> <a href="/imperial-b37503">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Imperial
                          <span class="text-sm text-white bg-dark-blue p-1">
                            NEW
                          </span>
                        </li>
                      </a> <a href="/independent-trading-co-b21275">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Independent Trading Co.
                        </li>
                      </a> <a href="/jerzees-b16792">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Jerzees
                        </li>
                      </a> <a href="/kati-b16298">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Kati
                        </li>
                      </a> <a href="/king-athletics-b4787">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          King Athletics
                        </li>
                      </a> <a href="/king-fashion-b72657">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          King Fashion
                        </li>
                      </a>
                    </ul>
                  </div>
                  <div class="last:mr-10 brand text-dark-blue w-full">
                    <div class="mb-4 text-2xl font-bold">
                      L-R
                    </div>
                    <ul class="p-0 m-0 list-none">
                      <a href="/landmark-b23495">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Landmark
                        </li>
                      </a> <a href="/lat-b21734">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          LAT
                        </li>
                      </a> <a href="/los-angeles-apparel-b44783">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Los Angeles Apparel
                        </li>
                      </a> <a href="/m-o-b72659">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          M&amp;O
                        </li>
                      </a> <a href="/muskoka-trail-b44618">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Muskoka Trail
                        </li>
                      </a> <a href="/new-balance-b12738">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          New Balance
                          <span class="text-sm text-white bg-dark-blue p-1">
                            NEW
                          </span>
                        </li>
                      </a> <a href="/next-level-b21317">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Next Level
                          <span class="alert-info">
                            PREMIUM
                          </span>
                        </li>
                      </a> <a href="/next-level-apparel-b44139">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Next Level Apparel
                        </li>
                      </a> <a href="/nike-b3662">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Nike
                          <span class="text-sm text-white bg-dark-blue p-1">
                            NEW
                          </span>
                        </li>
                      </a> <a href="/north-end-b22049">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          North End
                        </li>
                      </a> <a href="/north-end-sport-red-b22061">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          North End Sport Red
                        </li>
                      </a> <a href="/oakley-b16304">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Oakley
                          <span class="text-sm text-white bg-dark-blue p-1">
                            NEW
                          </span>
                        </li>
                      </a> <a href="/on-tour-b23492">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          On Tour
                        </li>
                      </a> <a href="/outer-boundary-b23489">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Outer Boundary
                        </li>
                      </a> <a href="/puma-b21767">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          PUMA
                        </li>
                      </a> <a href="/q-tees-b42342">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Q-Tees
                        </li>
                      </a> <a href="/rabbit-skins-b17071">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Rabbit Skins
                        </li>
                      </a> <a href="/radsow-b43791">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Radsow
                        </li>
                      </a> <a href="/richardson-b44811">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Richardson
                        </li>
                      </a> <a href="/roly-b23095">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Roly
                        </li>
                      </a> <a href="/russell-athletic-b23156">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Russell Athletic
                        </li>
                      </a>
                    </ul>
                  </div>
                  <div class="last:mr-10 brand text-dark-blue w-full">
                    <div class="mb-4 text-2xl font-bold">
                      S-Z
                    </div>
                    <ul class="p-0 m-0 list-none">
                      <a href="/sportsman-b16307">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Sportsman
                        </li>
                      </a> <a href="/spyder-b44009">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Spyder
                        </li>
                      </a> <a href="/team-365-b22052">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Team 365
                        </li>
                      </a> <a href="/threadfast-b23792">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Threadfast
                          <span class="alert-info">
                            PREMIUM
                          </span>
                        </li>
                      </a> <a href="/timberlea-b43563">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Timberlea
                        </li>
                      </a> <a href="/trimark-b72655">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Trimark
                          <span class="text-sm text-white bg-dark-blue p-1">
                            NEW
                          </span>
                        </li>
                      </a> <a href="/valucap-b21293">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Valucap
                        </li>
                      </a> <a href="/vancouver-apparel-b44785">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Vancouver Apparel
                        </li>
                      </a> <a href="/whelk-goods-b44827">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Whelk Goods
                        </li>
                      </a> <a href="/wild-river-b44620">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Wild River
                        </li>
                      </a> <a href="/yp-classics-b44781">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          YP Classics
                        </li>
                      </a> <a href="/yupoong-b16316">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          Yupoong
                        </li>
                      </a> <a href="/zero-friction-b44606">
                        <li class="my-2 text-xl hover:underline !text-dark-blue">
                          ZERO FRICTION
                        </li>
                      </a>
                    </ul>
                  </div>

                </div>

              </div>

            </div>
          </div>








          <div></div>


        </div>

      </div>


      <div class="hidden md:!block w-full lg:border-0 wrapper border-bottom-1 light-border"></div>






      <div
        class="fixed w-screen h-svh top-0 left-0 z-[70]"
        x-data="{}"
        x-cloak
        x-show="$store.header.countrySelectorOpen">
        <div class="fixed top-0 left-0 w-screen h-svh bg-dark-blue opacity-50"></div>
        <div
          x-data="{
      enableScroll: () => clearAllBodyScrollLocks(),
      disableScroll: () => {
        clearAllBodyScrollLocks()
        disableBodyScroll($refs.countrySelector)
      }
    }"
          x-show="$store.header.countrySelectorOpen"
          x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0 translate-y-full"
          x-transition:enter-end="opacity-100 translate-y-0"
          x-transition:leave="transition ease-in duration-200"
          x-transition:leave-start="opacity-100 translate-y-0"
          x-transition:leave-end="opacity-0 translate-y-full"
          x-effect="$store.header.countrySelectorOpen ? disableScroll() : enableScroll()"
          x-cloak
          @click.outside="$store.header.countrySelectorOpen = false"
          class="!overflow-y-auto overflow-x-hidden side-menu bg-[#FAFAFC] drop-shadow-xl fixed bottom-0 left-0 w-screen h-[70svh]">
          <div
            @click.stop
            class="scrollable overflow-x-hidden h-full"
            x-ref="countrySelector">
            <div class="h-full">
              <div class="flex justify-between items-center p-6">
                <div class="text-2xl font-bold text-dark-gray">Country</div>
                <i class="fa fa-close text-4xl" @click="$store.header.countrySelectorOpen = false"></i>
              </div>
            </div>

          </div>
        </div>
      </div>

      <style>
        .scrollable {
          -webkit-overflow-scrolling: touch;
          overflow-y: auto;
          touch-action: pan-y;
        }
      </style>



      <div
        class="fixed w-screen h-svh top-0 left-0 z-[70]"
        x-data="{}"
        x-cloak
        x-show="$store.header.languageSelectorOpen">
        <div class="fixed top-0 left-0 w-screen h-svh bg-dark-blue opacity-50"></div>
      </div>

      <style>
        .scrollable {
          -webkit-overflow-scrolling: touch;
          overflow-y: auto;
          touch-action: pan-y;
          /* Prevents scroll chaining */
        }
      </style>



      <div
        class="fixed w-screen h-svh top-0 left-0 z-[70]"
        x-data="{}"
        x-cloak
        x-show="$store.header.sideMenuOpen">
        <div class="fixed top-0 left-0 w-screen h-svh bg-dark-blue opacity-50"></div>
        <div
          x-data="{
      enableScroll: () => clearAllBodyScrollLocks(),
      disableScroll: () => {
        clearAllBodyScrollLocks()
        disableBodyScroll($refs.sideMenu)
      }
    }"
          x-show="$store.header.sideMenuOpen"
          x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0 -translate-x-full"
          x-transition:enter-end="opacity-100 translate-x-0"
          x-transition:leave="transition ease-in duration-200"
          x-transition:leave-start="opacity-100 translate-x-0"
          x-transition:leave-end="opacity-0 -translate-x-full"
          x-effect="$store.header.sideMenuOpen ? disableScroll() : enableScroll()"
          x-cloak
          @click.outside="$store.header.sideMenuOpen = false"
          class="!overflow-y-auto overflow-x-hidden side-menu bg-[#FAFAFC] drop-shadow-xl top-0 !absolute left-0 w-[80vw] md:w-[50vw] lg:w-[30vw] h-svh">
          <div
            @click.stop
            class="scrollable overflow-x-hidden h-full"
            x-ref="sideMenu">
            <div>
              <div class="flex justify-between items-center p-6">
                <picture>
                  <source srcset="/assets/images/logo.png" media="(max-width: 768px)" />
                  <source srcset="/assets/images/logo.png" media="(min-width: 768.1px)" /><img alt="yourtagclothing" class="h-auto w-[104px] md:w-[240px] mr-6" loading="lazy" fetchpriority="low" src="/assets/images/logo.png" />
                </picture>
                <i class="fa fa-close" @click="$store.header.sideMenuOpen = false"></i>
              </div>
              <hr class="!p-0 !m-0 horizontal-line">

              <div class="flex p-6 hidden-guest">
                <!-- Profile links -->
                <div class="flex items-center justify-center mr-6 rounded-full w-14 h-14 bg-light-blue">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.6668 17.5C16.6668 16.337 16.6668 15.7555 16.5233 15.2824C16.2001 14.217 15.3664 13.3834 14.3011 13.0602C13.828 12.9167 13.2465 12.9167 12.0835 12.9167H7.91683C6.75386 12.9167 6.17237 12.9167 5.69921 13.0602C4.63388 13.3834 3.8002 14.217 3.47703 15.2824C3.3335 15.7555 3.3335 16.337 3.3335 17.5M13.7502 6.25C13.7502 8.32107 12.0712 10 10.0002 10C7.92909 10 6.25016 8.32107 6.25016 6.25C6.25016 4.17893 7.92909 2.5 10.0002 2.5C12.0712 2.5 13.7502 4.17893 13.7502 6.25Z" stroke="#00228A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div class="flex flex-col">
                  <div class="flex">
                    <span class="font-bold text-dark-blue insert-username">
                    </span>
                  </div>
                  <a rel="nofollow" href="/myaccount/orders">
                    <span class="underline text-purple-">My Orders</span>
                  </a>
                </div>
              </div>

              <div class="flex flex-col p-6 hidden-user">
                <button class="flex items-center justify-center px-6 font-bold text-white whitespace-nowrap btn- bg-light-purple" @click="$store.profile.loadModal(); $store.header.sideMenuOpen = false; $store.profile.loginModalOpen = !$store.profile.loginModalOpen">Log In</button>
              </div>

              <hr class="!p-0 !m-0 horizontal-line">

              <div class="flex flex-col p-6" x-data="{}">
                <ul class="p-0 m-0 mt-6 list-none text-purple-">

                  <li class="my-2">

                    <div
                      @click="
                      $store.header.sideMenuOpen = false;
                      $store.header.megaMenu['brands'] = true;
                    "
                      class="flex justify-between items-center font-semibold">
                      <span class="text-special">
                        Brands
                      </span>
                      <svg width="18" height="18" viewbox="0 0 24 24" fill="none" version="1.1" id="svg1" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs1"></defs>
                        <g transform="rotate(270 12 12)">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M 4.7,7.4260677 V 11.798326 L 12.029996,16.573932 19.3,11.798326 V 7.4260677 l -7.270004,4.3722583 z" fill="#334EA1" id="path1" style="stroke-width:0.182956"></path>
                        </g>
                      </svg>
                    </div>
                  </li>

                  <li class="my-2">

                    <div
                      @click="
                      $store.header.sideMenuOpen = false;
                      $store.header.megaMenu['t_shirts'] = true;
                    "
                      class="flex justify-between items-center font-semibold">
                      <span class="text-special">
                        T-Shirts
                      </span>
                      <svg width="18" height="18" viewbox="0 0 24 24" fill="none" version="1.1" id="svg1" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs1"></defs>
                        <g transform="rotate(270 12 12)">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M 4.7,7.4260677 V 11.798326 L 12.029996,16.573932 19.3,11.798326 V 7.4260677 l -7.270004,4.3722583 z" fill="#334EA1" id="path1" style="stroke-width:0.182956"></path>
                        </g>
                      </svg>
                    </div>
                  </li>
                  <li class="my-2">

                    <div
                      @click="
                      $store.header.sideMenuOpen = false;
                      $store.header.megaMenu['sweats_fleece'] = true;
                    "
                      class="flex justify-between items-center font-semibold">
                      <span class="text-special">
                        Sweats &amp; Fleece
                      </span>
                      <svg width="18" height="18" viewbox="0 0 24 24" fill="none" version="1.1" id="svg1" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs1"></defs>
                        <g transform="rotate(270 12 12)">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M 4.7,7.4260677 V 11.798326 L 12.029996,16.573932 19.3,11.798326 V 7.4260677 l -7.270004,4.3722583 z" fill="#334EA1" id="path1" style="stroke-width:0.182956"></path>
                        </g>
                      </svg>
                    </div>
                  </li>
                  <li class="my-2">

                    <div
                      @click="
                      $store.header.sideMenuOpen = false;
                      $store.header.megaMenu['sports_apparel'] = true;
                    "
                      class="flex justify-between items-center font-semibold">
                      <span class="text-special">
                        Sports Apparel
                      </span>
                      <svg width="18" height="18" viewbox="0 0 24 24" fill="none" version="1.1" id="svg1" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs1"></defs>
                        <g transform="rotate(270 12 12)">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M 4.7,7.4260677 V 11.798326 L 12.029996,16.573932 19.3,11.798326 V 7.4260677 l -7.270004,4.3722583 z" fill="#334EA1" id="path1" style="stroke-width:0.182956"></path>
                        </g>
                      </svg>
                    </div>
                  </li>
                  <li class="my-2">

                    <div
                      @click="
                      $store.header.sideMenuOpen = false;
                      $store.header.megaMenu['jackets'] = true;
                    "
                      class="flex justify-between items-center font-semibold">
                      <span class="text-special">
                        Jackets
                      </span>
                      <svg width="18" height="18" viewbox="0 0 24 24" fill="none" version="1.1" id="svg1" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs1"></defs>
                        <g transform="rotate(270 12 12)">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M 4.7,7.4260677 V 11.798326 L 12.029996,16.573932 19.3,11.798326 V 7.4260677 l -7.270004,4.3722583 z" fill="#334EA1" id="path1" style="stroke-width:0.182956"></path>
                        </g>
                      </svg>
                    </div>
                  </li>
                  <li class="my-2">

                    <div
                      @click="
                      $store.header.sideMenuOpen = false;
                      $store.header.megaMenu['headwear'] = true;
                    "
                      class="flex justify-between items-center font-semibold">
                      <span class="text-special">
                        Headwear
                      </span>
                      <svg width="18" height="18" viewbox="0 0 24 24" fill="none" version="1.1" id="svg1" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs1"></defs>
                        <g transform="rotate(270 12 12)">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M 4.7,7.4260677 V 11.798326 L 12.029996,16.573932 19.3,11.798326 V 7.4260677 l -7.270004,4.3722583 z" fill="#334EA1" id="path1" style="stroke-width:0.182956"></path>
                        </g>
                      </svg>
                    </div>
                  </li>
                  <li class="my-2">

                    <div
                      @click="
                      $store.header.sideMenuOpen = false;
                      $store.header.megaMenu['pants_shorts'] = true;
                    "
                      class="flex justify-between items-center font-semibold">
                      <span class="text-special">
                        Pants &amp; Shorts
                      </span>
                      <svg width="18" height="18" viewbox="0 0 24 24" fill="none" version="1.1" id="svg1" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs1"></defs>
                        <g transform="rotate(270 12 12)">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M 4.7,7.4260677 V 11.798326 L 12.029996,16.573932 19.3,11.798326 V 7.4260677 l -7.270004,4.3722583 z" fill="#334EA1" id="path1" style="stroke-width:0.182956"></path>
                        </g>
                      </svg>
                    </div>
                  </li>


                  <li class="my-2">

                    <div
                      @click="
                      $store.header.sideMenuOpen = false;
                      $store.header.megaMenu['promo_products'] = true;
                    "
                      class="flex justify-between items-center font-semibold">
                      <span class="text-special">
                        Promo Products
                      </span>

                      <svg width="18" height="18" viewbox="0 0 24 24" fill="none" version="1.1" id="svg1" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs1"></defs>
                        <g transform="rotate(270 12 12)">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M 4.7,7.4260677 V 11.798326 L 12.029996,16.573932 19.3,11.798326 V 7.4260677 l -7.270004,4.3722583 z" fill="#334EA1" id="path1" style="stroke-width:0.182956"></path>
                        </g>
                      </svg>
                    </div>
                  </li>


                  <li class="my-2">

                    <a class="text-special font-semibold" href="/select/sale">
                      Clearance
                    </a>
                  </li>
                </ul>
                <!-- <a class="btn- mx-0 mt-4 mb-4 px-10 flex justify-center items-center gradient-customize text-white" href="/customization">
                  <span class="flex mr-3 edit-icon">
                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M4.36722 7.88537L7.88535 4.36723M18 18L15.0233 17.6693C14.6597 17.6289 14.4778 17.6086 14.3079 17.5536C14.1571 17.5048 14.0136 17.4358 13.8812 17.3486C13.7321 17.2502 13.6027 17.1209 13.344 16.8621L1.72863 5.24677C0.757123 4.27526 0.757122 2.70014 1.72863 1.72863C2.70013 0.757124 4.27525 0.757123 5.24676 1.72863L16.8621 13.344C17.1209 13.6027 17.2502 13.7321 17.3486 13.8812C17.4358 14.0136 17.5048 14.1571 17.5536 14.3079C17.6086 14.4778 17.6289 14.6597 17.6693 15.0233L18 18Z" stroke="white" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </span>
                  Customization
                </a> -->
                <a rel="nofollow" class="btn- mx-0 mt-4 px-10 flex justify-center group items-center hover:!text-darker-blue !bg-[#E7F1FF] text-link" href="/order">
                  <span class="flex mr-3 tracking-icon">
                    <svg width="18" height="16" viewbox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.6667 3.83337H12.6144C12.8182 3.83337 12.9201 3.83337 13.016 3.8564C13.1011 3.87681 13.1824 3.91048 13.2569 3.95617C13.341 4.00771 13.4131 4.07977 13.5572 4.2239L16.9428 7.60952C17.087 7.75364 17.159 7.82571 17.2106 7.9098C17.2562 7.98436 17.2899 8.06565 17.3103 8.15068C17.3334 8.24659 17.3334 8.3485 17.3334 8.55233V10.9167C17.3334 11.305 17.3334 11.4991 17.2699 11.6523C17.1853 11.8565 17.0231 12.0187 16.8189 12.1033C16.6658 12.1667 16.4716 12.1667 16.0834 12.1667M11.9167 12.1667H10.6667M10.6667 12.1667V4.00004C10.6667 3.06662 10.6667 2.59991 10.485 2.24339C10.3252 1.92979 10.0703 1.67482 9.75667 1.51503C9.40015 1.33337 8.93344 1.33337 8.00002 1.33337H3.33335C2.39993 1.33337 1.93322 1.33337 1.5767 1.51503C1.2631 1.67482 1.00813 1.92979 0.848343 2.24339C0.666687 2.59991 0.666687 3.06662 0.666687 4.00004V10.5C0.666687 11.4205 1.41288 12.1667 2.33335 12.1667M10.6667 12.1667H7.33335M7.33335 12.1667C7.33335 13.5474 6.21407 14.6667 4.83335 14.6667C3.45264 14.6667 2.33335 13.5474 2.33335 12.1667M7.33335 12.1667C7.33335 10.786 6.21407 9.66671 4.83335 9.66671C3.45264 9.66671 2.33335 10.786 2.33335 12.1667M16.0834 12.5834C16.0834 13.734 15.1506 14.6667 14 14.6667C12.8494 14.6667 11.9167 13.734 11.9167 12.5834C11.9167 11.4328 12.8494 10.5 14 10.5C15.1506 10.5 16.0834 11.4328 16.0834 12.5834Z" stroke="#1170FF" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="group-hover:stroke-darker-blue transition-all duration-300"></path>
                    </svg>
                  </span>
                  <span>Track Order</span>
                </a>
              </div>

              <hr class="!p-0 !m-0 horizontal-line">

              <div class="flex flex-col p-6">
                <div class="flex flex-col" x-show="$store.profile.isLogged">
                  <div class="flex my-2 text-purple-">
                    <a rel="nofollow" class="flex items-center" href="javascript:;">
                      <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.6668 17.5C16.6668 16.337 16.6668 15.7555 16.5233 15.2824C16.2001 14.217 15.3664 13.3834 14.3011 13.0602C13.828 12.9167 13.2465 12.9167 12.0835 12.9167H7.91683C6.75386 12.9167 6.17237 12.9167 5.69921 13.0602C4.63388 13.3834 3.8002 14.217 3.47703 15.2824C3.3335 15.7555 3.3335 16.337 3.3335 17.5M13.7502 6.25C13.7502 8.32107 12.0712 10 10.0002 10C7.92909 10 6.25016 8.32107 6.25016 6.25C6.25016 4.17893 7.92909 2.5 10.0002 2.5C12.0712 2.5 13.7502 4.17893 13.7502 6.25Z" stroke="#00228A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      <span class="ml-3">My Account</span>
                    </a>
                  </div>
                  <div class="flex my-2 text-purple-">
                    <a rel="nofollow" class="flex items-center" href="/myaccount/carts">
                      <svg width="24" height="24" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1104_12040)">
                          <path d="M4.16662 12.25H15.1131C15.9571 12.25 16.3791 12.25 16.715 12.0848C17.011 11.9392 17.2597 11.7055 17.4301 11.4128C17.6236 11.0804 17.6702 10.64 17.7634 9.75921L18.2509 5.1523C18.2794 4.88327 18.2936 4.74876 18.2524 4.64464C18.2162 4.5532 18.1516 4.47735 18.069 4.42949C17.975 4.375 17.8461 4.375 17.5883 4.375H3.74995M1.6665 1.75H2.70687C2.92739 1.75 3.03765 1.75 3.12391 1.79403C3.19985 1.8328 3.26278 1.89488 3.30437 1.97204C3.3516 2.05969 3.35848 2.17524 3.37224 2.40634L4.12744 15.0937C4.14119 15.3248 4.14807 15.4403 4.19531 15.528C4.23689 15.6051 4.29982 15.6672 4.37576 15.706C4.46203 15.75 4.57229 15.75 4.7928 15.75H15.8332M6.24984 18.8125H6.25817M13.7498 18.8125H13.7582M6.6665 18.8125C6.6665 19.0541 6.47996 19.25 6.24984 19.25C6.01972 19.25 5.83317 19.0541 5.83317 18.8125C5.83317 18.5709 6.01972 18.375 6.24984 18.375C6.47996 18.375 6.6665 18.5709 6.6665 18.8125ZM14.1665 18.8125C14.1665 19.0541 13.98 19.25 13.7498 19.25C13.5197 19.25 13.3332 19.0541 13.3332 18.8125C13.3332 18.5709 13.5197 18.375 13.7498 18.375C13.98 18.375 14.1665 18.5709 14.1665 18.8125Z" stroke="#00228A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                          <clipPath id="clip0_1104_12040">
                            <rect fill="white" />
                          </clipPath>
                        </defs>
                      </svg>
                      <span class="ml-3">Carts</span>
                    </a>
                  </div>
                  <div class="flex my-2 text-purple-">
                    <a rel="nofollow" class="flex items-center" href="/myaccount/stock_notifications">
                      <svg width="24" height="24" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.86103 16.381H10.1944C10.1944 17.2714 9.44437 18 8.5277 18C7.61103 18 6.86103 17.2714 6.86103 16.381ZM16.0277 14.7619C16.09 15.0718 16.0277 15.5714 16.0277 15.5714H1.0277C1.0277 15.5714 0.965377 15.0718 1.0277 14.7619C1.20658 13.8723 2.69437 13.1429 2.69437 13.1429V8.28571C2.69437 5.77619 4.36103 3.59048 6.86103 2.8619V2.61905C6.86103 1.72857 7.61103 1 8.5277 1C9.44437 1 10.1944 1.72857 10.1944 2.61905V2.8619C12.6944 3.59048 14.361 5.77619 14.361 8.28571V13.1429C14.361 13.1429 15.8488 13.8723 16.0277 14.7619ZM12.6944 8.28571C12.6944 6.01905 10.861 4.2381 8.5277 4.2381C6.19437 4.2381 4.36103 6.01905 4.36103 8.28571V13.9524H12.6944V8.28571Z" fill="#00228A" stroke="#00228A" stroke-width="0.5" stroke-linejoin="round" />
                      </svg>
                      <span class="ml-3">Stock Notifications</span>
                    </a>
                  </div>
                  <div class="flex my-2 text-purple-">
                    <a rel="nofollow" class="flex items-center" href="/myaccount/wishlist">
                      <svg width="24" height="24" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99452 2.67663C7.39504 0.841742 4.7278 0.348162 2.72376 2.02837C0.719715 3.70858 0.437574 6.51781 2.01136 8.505C3.31985 10.1572 7.27982 13.6419 8.57768 14.7697C8.72288 14.8959 8.79549 14.959 8.88017 14.9838C8.95408 15.0054 9.03496 15.0054 9.10887 14.9838C9.19356 14.959 9.26616 14.8959 9.41136 14.7697C10.7092 13.6419 14.6692 10.1572 15.9777 8.505C17.5515 6.51781 17.3038 3.69091 15.2653 2.02837C13.2268 0.365836 10.594 0.841742 8.99452 2.67663Z" stroke="#00228A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      <span class="ml-3">My Wishlist</span>
                    </a>
                  </div>
                  <div class="flex my-2 text-purple-">
                    <a rel="nofollow" class="flex items-center" href="/myaccount/loyalty_program">
                      <svg width="24" height="24" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10.5" cy="11" r="9.6" stroke="#00228A" stroke-width="1.8" />
                        <path d="M10.4999 6.80078L11.3092 8.90492C11.4408 9.24709 11.5066 9.41818 11.609 9.56209C11.6997 9.68963 11.8111 9.80107 11.9386 9.89176C12.0825 9.99409 12.2536 10.0599 12.5958 10.1915L14.6999 11.0008L12.5958 11.8101C12.2536 11.9417 12.0825 12.0075 11.9386 12.1098C11.8111 12.2005 11.6997 12.3119 11.609 12.4395C11.5066 12.5834 11.4408 12.7545 11.3092 13.0966L10.4999 15.2008L9.69066 13.0966C9.55906 12.7545 9.49325 12.5834 9.39093 12.4395C9.30023 12.3119 9.1888 12.2005 9.06125 12.1098C8.91734 12.0075 8.74626 11.9417 8.40408 11.8101L6.29995 11.0008L8.40408 10.1915C8.74626 10.0599 8.91734 9.99409 9.06125 9.89176C9.1888 9.80107 9.30023 9.68963 9.39093 9.56209C9.49325 9.41818 9.55906 9.24709 9.69066 8.90492L10.4999 6.80078Z" fill="#00228A" stroke="#00228A" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                      <span class="ml-3">yourtagclothing+</span>
                    </a>
                  </div>
                </div>

                <div class="flex my-2 text-purple-">
                  <a rel="nofollow" class="flex items-center" href="/coupon-codes">
                    <svg width="24" height="24" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.75 6.66732V5.83398M8.75 10.4173V9.58398M8.75 14.1673V13.334M4.55 3.33398H16.45C17.4301 3.33398 17.9201 3.33398 18.2945 3.51564C18.6238 3.67543 18.8915 3.9304 19.0593 4.244C19.25 4.60052 19.25 5.06723 19.25 6.00065V7.08398C17.5586 7.08398 16.1875 8.38982 16.1875 10.0007C16.1875 11.6115 17.5586 12.9173 19.25 12.9173V14.0007C19.25 14.9341 19.25 15.4008 19.0593 15.7573C18.8915 16.0709 18.6238 16.3259 18.2945 16.4857C17.9201 16.6673 17.4301 16.6673 16.45 16.6673H4.55C3.56991 16.6673 3.07986 16.6673 2.70552 16.4857C2.37623 16.3259 2.10852 16.0709 1.94074 15.7573C1.75 15.4008 1.75 14.9341 1.75 14.0007V12.9173C3.44137 12.9173 4.8125 11.6115 4.8125 10.0007C4.8125 8.38982 3.44137 7.08398 1.75 7.08398V6.00065C1.75 5.06723 1.75 4.60052 1.94074 4.244C2.10852 3.9304 2.37623 3.67543 2.70552 3.51564C3.07986 3.33398 3.56991 3.33398 4.55 3.33398Z" stroke="#00228A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="ml-3">Coupon Codes</span>
                  </a>
                </div>
                <div class="flex my-2 text-purple-">
                  <a rel="nofollow" class="flex items-center" href="/display/faq">
                    <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_1097_8671)">
                        <path d="M7.57484 7.50002C7.77076 6.94308 8.15746 6.47344 8.66647 6.1743C9.17547 5.87515 9.77392 5.7658 10.3558 5.86561C10.9377 5.96543 11.4655 6.26796 11.8457 6.71963C12.226 7.1713 12.4341 7.74296 12.4332 8.33335C12.4332 10 9.93317 10.8334 9.93317 10.8334M9.99984 14.1667H10.0082M18.3332 10C18.3332 14.6024 14.6022 18.3334 9.99984 18.3334C5.39746 18.3334 1.6665 14.6024 1.6665 10C1.6665 5.39765 5.39746 1.66669 9.99984 1.66669C14.6022 1.66669 18.3332 5.39765 18.3332 10Z" stroke="#00228A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                      <defs>
                        <clipPath id="clip0_1097_8671">
                          <rect width="24" height="24" fill="white" />
                        </clipPath>
                      </defs>
                    </svg>
                    <span class="ml-3">FAQ</span>
                  </a>
                </div>
                <div class="flex my-2 text-purple-">
                  <a rel="nofollow" class="flex items-center" href="/display/shipping_information">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14 7H16.3373C16.5818 7 16.7041 7 16.8192 7.02763C16.9213 7.05213 17.0188 7.09253 17.1083 7.14736C17.2092 7.2092 17.2957 7.29568 17.4686 7.46863L21.5314 11.5314C21.7043 11.7043 21.7908 11.7908 21.8526 11.8917C21.9075 11.9812 21.9479 12.0787 21.9724 12.1808C22 12.2959 22 12.4182 22 12.6627V15.5C22 15.9659 22 16.1989 21.9239 16.3827C21.8224 16.6277 21.6277 16.8224 21.3827 16.9239C21.1989 17 20.9659 17 20.5 17M15.5 17H14M14 17V7.2C14 6.0799 14 5.51984 13.782 5.09202C13.5903 4.71569 13.2843 4.40973 12.908 4.21799C12.4802 4 11.9201 4 10.8 4H5.2C4.0799 4 3.51984 4 3.09202 4.21799C2.71569 4.40973 2.40973 4.71569 2.21799 5.09202C2 5.51984 2 6.0799 2 7.2V15C2 16.1046 2.89543 17 4 17M14 17H10M10 17C10 18.6569 8.65685 20 7 20C5.34315 20 4 18.6569 4 17M10 17C10 15.3431 8.65685 14 7 14C5.34315 14 4 15.3431 4 17M20.5 17.5C20.5 18.8807 19.3807 20 18 20C16.6193 20 15.5 18.8807 15.5 17.5C15.5 16.1193 16.6193 15 18 15C19.3807 15 20.5 16.1193 20.5 17.5Z" stroke="#00228A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="ml-3">Shipping Methods</span>
                  </a>
                </div>
                <div class="flex my-2 text-purple-">
                  <a rel="nofollow" class="flex items-center" href="/display/contact">
                    <svg width="24" height="24" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.68192 8.11545C8.31992 9.44427 9.18964 10.6897 10.2911 11.7911C11.3925 12.8926 12.638 13.7623 13.9668 14.4003C14.0811 14.4552 14.1382 14.4826 14.2105 14.5037C14.4675 14.5786 14.7831 14.5248 15.0007 14.369C15.062 14.3251 15.1144 14.2727 15.2192 14.1679C15.5396 13.8475 15.6999 13.6872 15.861 13.5825C16.4687 13.1874 17.252 13.1874 17.8597 13.5825C18.0208 13.6872 18.181 13.8475 18.5015 14.1679L18.6801 14.3466C19.1673 14.8337 19.4109 15.0773 19.5432 15.3389C19.8063 15.8592 19.8063 16.4736 19.5432 16.9938C19.4109 17.2554 19.1673 17.499 18.6801 17.9862L18.5356 18.1307C18.0502 18.6161 17.8074 18.8589 17.4774 19.0443C17.1112 19.25 16.5424 19.3979 16.1223 19.3967C15.7438 19.3955 15.4851 19.3221 14.9677 19.1753C12.1871 18.386 9.56325 16.8969 7.37427 14.708C5.18529 12.519 3.69619 9.89514 2.90697 7.11453C2.76011 6.59712 2.68668 6.33841 2.68555 5.95988C2.6843 5.53984 2.83222 4.97106 3.03794 4.60484C3.22333 4.27481 3.46608 4.03207 3.95156 3.54658L4.09606 3.40208C4.58322 2.91493 4.8268 2.67135 5.08839 2.53904C5.60866 2.27589 6.22307 2.27589 6.74333 2.53904C7.00493 2.67135 7.24851 2.91493 7.73567 3.40208L7.9143 3.58071C8.23477 3.90119 8.395 4.06142 8.49977 4.22255C8.89484 4.8302 8.89485 5.61357 8.49977 6.22122C8.395 6.38235 8.23477 6.54258 7.9143 6.86306C7.80951 6.96784 7.75712 7.02024 7.71326 7.08148C7.55742 7.29912 7.50361 7.61469 7.57852 7.87169C7.5996 7.944 7.62704 8.00115 7.68192 8.11545Z" stroke="#00228A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="ml-3">Contact us</span>
                  </a>
                </div>

                <div class="flex my-2 text-purple-" x-show="$store.profile.isLogged">
                  <a data-method="delete" rel="nofollow" class="flex items-center" onclick="resetCookies()" href="/logout">
                    <svg width="24" height="24" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12.75 3.55556L11.5515 4.80889L13.7445 7.11111H5.98889C5.49797 7.11111 5.1 7.50908 5.1 8C5.1 8.49092 5.49797 8.88889 5.98889 8.88889H13.7445L11.5515 11.1822L12.75 12.4444L17 8M1.7 1.77778H7.61111C8.10203 1.77778 8.5 1.37981 8.5 0.888889C8.5 0.397969 8.10203 0 7.61111 0H1.7C0.765 0 0 0.8 0 1.77778V14.2222C0 15.2 0.765 16 1.7 16H7.61111C8.10203 16 8.5 15.602 8.5 15.1111C8.5 14.6202 8.10203 14.2222 7.61111 14.2222H1.7V1.77778Z" fill="#00228A" />
                    </svg>
                    <span class="ml-3">Logout</span>
                  </a>
                </div>
              </div>


              <div class="flex p-6 bg-light-blue pb-16">
                <!-- Country selector button -->
                <button class="p-1 px-2 mr-4 list-none bg-white rounded-xl light-border border-all" @click="$store.header.sideMenuOpen = false; $store.header.countrySelectorOpen = true;">
                  <a href="#" id="maincountry" title="Canada Wholesale Clothing" data-toggle="dropdown" class="dropdown-toggle">
                    <div class="country-flag rounded-full aspect-square !w-6 fi fis fi-ca"></div>
                    <span class="caret"></span>
                  </a>
                </button>

                <!-- Language selector button -->
                <button class="p-1 px-2 list-none bg-white rounded-xl light-border border-all" @click="$store.header.sideMenuOpen = false; $store.header.languageSelectorOpen = true;">
                  <a href="#" title="en" id="mainlanguage" data-toggle="dropdown" class="dropdown-toggle">
                    <span>EN</span>
                    <span class="caret"></span>
                  </a>
                </button>

              </div>
            </div>

          </div>
        </div>
      </div>

      <style>
        .scrollable {
          -webkit-overflow-scrolling: touch;
          overflow-y: auto;
          touch-action: pan-y;
          /* Prevents scroll chaining */
        }
      </style>



      <turbo-frame id="login-modal"></turbo-frame>

    </div>

    <style>
      #top-bar li {
        list-style: none;
      }

      #top-bar .customize-btn,
      .side-menu .customize-btn {
        transition: none;
      }

      #top-bar .edit-icon svg,
      .side-menu .edit-icon svg {
        width: 17px;
      }

      #top-bar .customize-btn:hover path,
      .side-menu .customize-btn:hover path {
        stroke: black;
        fill: black;
      }

      .visible-search {
        margin-left: -6.5vw;
      }

      .visible-search #mobile-visible-search-icon {
        position: absolute;
        top: 25%;
        right: 6.5vw;
        bottom: auto;
        left: auto;
      }

      .search-input::-webkit-search-cancel-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        display: none;
      }

      .visible-search .autocomplete-results {
        max-height: calc(65vh - 110px);
        border-bottom: 1px solid #ccc;
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
      }

      /* Override current designs */
      .autocomplete-results {
        position: absolute;
        width: unset;
      }

      /* Sticky header styles */
      #top-bar.fixed {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 1rem max(6.5vw, calc((100vw - 1600px) / 2));
        margin: 0 auto;
        z-index: 1000;
        background-color: white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      #top-bar.fixed .shop-logo {
        width: 104px;
        transition: width 0.3s;
      }

      .autocomplete-field-new::placeholder {
        color: #9ca3af;
        opacity: 1;
      }

      .right-side {
        transition: all 0.1s ease-in-out;
      }

      .right-side.extended {
        transition: all 0.1s ease-in-out;
        flex-grow: 2;
        justify-content: space-between;
      }
    </style>

    <script>
      document.addEventListener('alpine:init', () => {
        Alpine.data('headerComponent', () => ({
          loginModalOpen: Alpine.store('profile').loginModalOpen,
          initScrollHandler() {
            Alpine.store('header').initScrollHandler();
            Alpine.store('header').init();
          },
          fetchMinicart() {
            Alpine.store('header').fetchMinicart();
          },
          get sideMenuOpen() {
            return Alpine.store('header').sideMenuOpen;
          },
          set sideMenuOpen(value) {
            Alpine.store('header').sideMenuOpen = value;
          },
        }))
      })
    </script>


    <div class='modal fade' id='signupModal' role='dialog' tabindex='-1'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-body'></div>
        </div>
      </div>
    </div>
    <div class='modal fade' id='signinModal' role='dialog' tabindex='-1'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-body'></div>
        </div>
      </div>
    </div>