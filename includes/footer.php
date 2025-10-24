<div class="bg-light-blue flex flex-col" style="content-visibility: auto;">
  <div class="py-10 md:py-24 wrapper">

    <!-- Desktop sections -->
    <div class="flex">
      <!-- Desktop sections -->
      <div class="flex-wrap flex-1 col-span-2 gap-8 justify-between text-xl whitespace-nowrap border border-red-500 md:flex-nowrap xl:justify-evenly only-desktop-flex">



        <div x-data="{ isExpanded: false, isCompact: false }" class="flex-1 only-mobile-block" @click="isExpanded = !isExpanded">
          <div class="flex justify-between items-center text-2xl">
            <div class="text-2xl font-bold text-dark-blue">
              Contact Us
            </div>

            <div class="flex items-center ml-auto" x-show="!isExpanded" x-cloak="true">
              <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15.994" cy="16.0297" r="15.1801" transform="rotate(90 15.994 16.0297)" fill="#000E3A" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.66898 16.1389L13.039 21.2622L16.1129 21.2622L13.7594 17.3685L20.5076 17.3685L20.5076 14.8866L13.7665 14.8866L16.1129 10.9701L13.039 10.9701L9.66898 16.1389Z" fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.66898 16.1389L13.039 21.2622L16.1129 21.2622L13.7594 17.3685L20.5076 17.3685L20.5076 14.8866L13.7665 14.8866L16.1129 10.9701L13.039 10.9701L9.66898 16.1389Z" fill="white" />
              </svg>
            </div>
            <div class="flex items-center ml-auto" x-show="isExpanded" x-cloak="true">
              <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3762 21.6652L21.4995 18.2953V15.2213L17.6058 17.5748V10.8267H15.1239V17.5677L11.2074 15.2213V18.2953L16.3762 21.6652Z" fill="#000E3A" />
                <circle cx="15.9941" cy="16.1598" r="14.5476" transform="rotate(-90 15.9941 16.1598)" stroke="#000E3A" stroke-width="1.26501" />
              </svg>
            </div>
          </div>
          <hr class="border-gray-300 horizontal-line">
          <div class="section-content" :class="{ 'hidden': !isExpanded, 'block': isExpanded, 'mt-2': isCompact, 'mt-8': !isCompact }">
            <ul class="md:mt-10 p-0 list-none">
              <address>
                <div class="flex items-start mb-8 text-footer-text">
                  <div class="mr-4">
                    <img alt="Sales" loading="lazy" width="22" src="/assets/images/mail.svg" />
                  </div>
                  <div class="flex flex-col">
                    <div class="text-xl font-bold text-purple-">
                      Sales
                    </div>
                    <div class="mt-1 text-xl">
                      <a class="text-footer-text" href="/display/contact?subject=cs">sales@yourtagclothing.com</a>
                    </div>
                  </div>
                </div>

                <div class="flex items-start mb-8 text-footer-text">
                  <div class="mr-4">
                    <img alt="Sales" loading="lazy" width="22" src="/assets/images/mail.svg" />
                  </div>
                  <div class="flex flex-col">
                    <div class="text-xl font-bold text-purple-">
                      Info
                    </div>
                    <div class="mt-1 text-xl">
                      <a class="text-footer-text" href="/display/contact?subject=sales">info@yourtagclothing.com</a>
                    </div>
                  </div>
                </div>

                <div class="flex items-start mb-8 text-footer-text">
                  <div class="mr-4">
                    <img alt="Hotline" loading="lazy" width="22" src="/assets/images/phone.svg" />
                  </div>
                  <div class="flex flex-col">
                    <div class="text-xl font-bold text-purple-">
                      Hotline
                    </div>
                    <div class="mt-1 text-xl">
                      <div>
                        <a class="text-footer-text" href="tel:4164549134">4164549134</a>
                      </div>
                      <div class="text-footer-text">
                        Monday - Friday 9am - 5pm EST
                      </div>
                    </div>
                  </div>
                </div>
              </address>
            </ul>

          </div>
        </div>


        <div class="flex-col only-desktop-flex">
          <div class="text-2xl font-bold text-dark-blue">
            Contact Us
          </div>

          <ul class="md:mt-10 p-0 list-none">
            <address>
              <div class="flex items-start mb-8 text-footer-text">
                <div class="mr-4">
                  <img alt="Sales" loading="lazy" width="22" src="/assets/images/mail.svg" />
                </div>
                <div class="flex flex-col">
                  <div class="text-xl font-bold text-purple-">
                    Sales
                  </div>
                  <div class="mt-1 text-xl">
                    <a class="text-footer-text" href="/display/contact?subject=cs">sales@yourtagclothing.com</a>
                  </div>
                </div>
              </div>

              <div class="flex items-start mb-8 text-footer-text">
                <div class="mr-4">
                  <img alt="Sales" loading="lazy" width="22" src="/assets/images/mail.svg" />
                </div>
                <div class="flex flex-col">
                  <div class="text-xl font-bold text-purple-">
                    Info
                  </div>
                  <div class="mt-1 text-xl">
                    <a class="text-footer-text" href="/display/contact?subject=sales">info@yourtagclothing.com</a>
                  </div>
                </div>
              </div>

              <div class="flex items-start mb-8 text-footer-text">
                <div class="mr-4">
                  <img alt="Hotline" loading="lazy" width="22" src="/assets/images/phone.svg" />
                </div>
                <div class="flex flex-col">
                  <div class="text-xl font-bold text-purple-">
                    Hotline
                  </div>
                  <div class="mt-1 text-xl">
                    <div>
                      <a class="text-footer-text" href="tel:4164549134">4164549134</a>
                    </div>
                    <div class="text-footer-text">
                      Monday - Friday 9am - 5pm EST
                    </div>
                  </div>
                </div>
              </div>
            </address>
          </ul>

        </div>





        <div x-data="{ isExpanded: false, isCompact: false }" class="flex-1 only-mobile-block" @click="isExpanded = !isExpanded">
          <div class="flex justify-between items-center text-2xl">
            <div class="text-2xl font-bold text-dark-blue">
              Let Us Help
            </div>

            <div class="flex items-center ml-auto" x-show="!isExpanded" x-cloak="true">
              <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15.994" cy="16.0297" r="15.1801" transform="rotate(90 15.994 16.0297)" fill="#000E3A" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.66898 16.1389L13.039 21.2622L16.1129 21.2622L13.7594 17.3685L20.5076 17.3685L20.5076 14.8866L13.7665 14.8866L16.1129 10.9701L13.039 10.9701L9.66898 16.1389Z" fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.66898 16.1389L13.039 21.2622L16.1129 21.2622L13.7594 17.3685L20.5076 17.3685L20.5076 14.8866L13.7665 14.8866L16.1129 10.9701L13.039 10.9701L9.66898 16.1389Z" fill="white" />
              </svg>
            </div>
            <div class="flex items-center ml-auto" x-show="isExpanded" x-cloak="true">
              <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3762 21.6652L21.4995 18.2953V15.2213L17.6058 17.5748V10.8267H15.1239V17.5677L11.2074 15.2213V18.2953L16.3762 21.6652Z" fill="#000E3A" />
                <circle cx="15.9941" cy="16.1598" r="14.5476" transform="rotate(-90 15.9941 16.1598)" stroke="#000E3A" stroke-width="1.26501" />
              </svg>
            </div>
          </div>
          <hr class="border-gray-300 horizontal-line">
          <div class="section-content" :class="{ 'hidden': !isExpanded, 'block': isExpanded, 'mt-2': isCompact, 'mt-8': !isCompact }">
            <ul class="flex flex-col md:mt-8 list-none p-0">
              <li class="flex justify-between items-center my-2">
                <span>
                  <a class="text-footer-text" href="/bulk-discounts">Wholesale Prices</a>
                </span>
                <div class="ml-4">
                  <svg width="7" height="6" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.452 0.12L6.18 2.7L4.452 5.304H3.132L4.74 2.7L3.132 0.12H4.452ZM5.028 2.16V3.252H0.708V2.16H5.028Z" fill="#546BB1" />
                  </svg>
                </div>
              </li>
              <li class="flex justify-between items-center my-2">
                <span>
                  <a class="text-footer-text" href="/local-wholesale-t-shirt">Local Wholesale T-Shirts</a>
                </span>
                <div class="ml-4">
                  <svg width="7" height="6" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.452 0.12L6.18 2.7L4.452 5.304H3.132L4.74 2.7L3.132 0.12H4.452ZM5.028 2.16V3.252H0.708V2.16H5.028Z" fill="#546BB1" />
                  </svg>
                </div>
              </li>
              <li class="flex justify-between items-center my-2">
                <span>
                  <a class="text-footer-text" rel="nofollow" href="/page/return-policy">Returns &amp; Refunds</a>
                </span>
                <div class="ml-4">
                  <svg width="7" height="6" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.452 0.12L6.18 2.7L4.452 5.304H3.132L4.74 2.7L3.132 0.12H4.452ZM5.028 2.16V3.252H0.708V2.16H5.028Z" fill="#546BB1" />
                  </svg>
                </div>
              </li>
            </ul>

          </div>
        </div>


        <div class="flex-col footer-about-links only-desktop-flex">
          <div class="text-2xl font-bold text-dark-blue">
            Let Us Help
          </div>

          <ul class="flex flex-col md:mt-8 list-none p-0">
            <li class="flex justify-between items-center my-2">
              <span>
                <a class="text-footer-text" href="/bulk-discounts">Wholesale Prices</a>
              </span>
              <div class="ml-4">
                <svg width="7" height="6" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.452 0.12L6.18 2.7L4.452 5.304H3.132L4.74 2.7L3.132 0.12H4.452ZM5.028 2.16V3.252H0.708V2.16H5.028Z" fill="#546BB1" />
                </svg>
              </div>
            </li>
            <li class="flex justify-between items-center my-2">
              <span>
                <a class="text-footer-text" href="/local-wholesale-t-shirt">Local Wholesale T-Shirts</a>
              </span>
              <div class="ml-4">
                <svg width="7" height="6" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.452 0.12L6.18 2.7L4.452 5.304H3.132L4.74 2.7L3.132 0.12H4.452ZM5.028 2.16V3.252H0.708V2.16H5.028Z" fill="#546BB1" />
                </svg>
              </div>
            </li>
            <li class="flex justify-between items-center my-2">
              <span>
                <a class="text-footer-text" rel="nofollow" href="/page/return-policy">Returns &amp; Refunds</a>
              </span>
              <div class="ml-4">
                <svg width="7" height="6" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.452 0.12L6.18 2.7L4.452 5.304H3.132L4.74 2.7L3.132 0.12H4.452ZM5.028 2.16V3.252H0.708V2.16H5.028Z" fill="#546BB1" />
                </svg>
              </div>
            </li>
          </ul>

        </div>





        <div x-data="{ isExpanded: false, isCompact: false }" class="flex-1 only-mobile-block" @click="isExpanded = !isExpanded">
          <div class="flex justify-between items-center text-2xl">
            <div class="text-2xl font-bold text-dark-blue">
              Our Company
            </div>

            <div class="flex items-center ml-auto" x-show="!isExpanded" x-cloak="true">
              <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="15.994" cy="16.0297" r="15.1801" transform="rotate(90 15.994 16.0297)" fill="#000E3A" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.66898 16.1389L13.039 21.2622L16.1129 21.2622L13.7594 17.3685L20.5076 17.3685L20.5076 14.8866L13.7665 14.8866L16.1129 10.9701L13.039 10.9701L9.66898 16.1389Z" fill="white" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.66898 16.1389L13.039 21.2622L16.1129 21.2622L13.7594 17.3685L20.5076 17.3685L20.5076 14.8866L13.7665 14.8866L16.1129 10.9701L13.039 10.9701L9.66898 16.1389Z" fill="white" />
              </svg>
            </div>
            <div class="flex items-center ml-auto" x-show="isExpanded" x-cloak="true">
              <svg width="25" height="25" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3762 21.6652L21.4995 18.2953V15.2213L17.6058 17.5748V10.8267H15.1239V17.5677L11.2074 15.2213V18.2953L16.3762 21.6652Z" fill="#000E3A" />
                <circle cx="15.9941" cy="16.1598" r="14.5476" transform="rotate(-90 15.9941 16.1598)" stroke="#000E3A" stroke-width="1.26501" />
              </svg>
            </div>
          </div>
          <hr class="border-gray-300 horizontal-line">
          <div class="section-content" :class="{ 'hidden': !isExpanded, 'block': isExpanded, 'mt-2': isCompact, 'mt-8': !isCompact }">
            <ul class="flex flex-col md:mt-8 list-none p-0">
              <li class="flex justify-between items-center my-2">
                <span>
                  <a class="text-footer-text" href="/who-are-we">Who We Are</a>
                </span>
                <div class="ml-4">
                  <svg width="7" height="6" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.452 0.12L6.18 2.7L4.452 5.304H3.132L4.74 2.7L3.132 0.12H4.452ZM5.028 2.16V3.252H0.708V2.16H5.028Z" fill="#546BB1" />
                  </svg>
                </div>
              </li>
              <li class="flex justify-between items-center my-2">
                <span>
                  <a class="text-footer-text" href="/display/contact">Contact Us</a>
                </span>
                <div class="ml-4">
                  <svg width="7" height="6" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.452 0.12L6.18 2.7L4.452 5.304H3.132L4.74 2.7L3.132 0.12H4.452ZM5.028 2.16V3.252H0.708V2.16H5.028Z" fill="#546BB1" />
                  </svg>
                </div>
              </li>
            </ul>

          </div>
        </div>


        <div class="flex-col footer-information-links only-desktop-flex">
          <div class="text-2xl font-bold text-dark-blue">
            Our Company
          </div>

          <ul class="flex flex-col md:mt-8 list-none p-0">
            <li class="flex justify-between items-center my-2">
              <span>
                <a class="text-footer-text" href="/who-are-we">Who We Are</a>
              </span>
              <div class="ml-4">
                <svg width="7" height="6" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.452 0.12L6.18 2.7L4.452 5.304H3.132L4.74 2.7L3.132 0.12H4.452ZM5.028 2.16V3.252H0.708V2.16H5.028Z" fill="#546BB1" />
                </svg>
              </div>
            </li>
            <li class="flex justify-between items-center my-2">
              <span>
                <a class="text-footer-text" href="/display/contact">Contact Us</a>
              </span>
              <div class="ml-4">
                <svg width="7" height="6" viewBox="0 0 7 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4.452 0.12L6.18 2.7L4.452 5.304H3.132L4.74 2.7L3.132 0.12H4.452ZM5.028 2.16V3.252H0.708V2.16H5.028Z" fill="#546BB1" />
                </svg>
              </div>
            </li>
            
          </ul>

        </div>

      </div>
    </div>

    <div class="flex justify-between flex-col-reverse md:flex-row md:items-center">
      <div class="flex flex-col text-base md:text-xl company">
        <span class="text-footer-text">2018. All Rights Reserved</span>
        <div class="mt-2 text-base md:text-xl">
          <a rel="nofollow" title="yourtagclothing T-shirt Terms &amp; Conditions" class="!text-footer-text underline" href="/page/terms-conditions">Terms &amp; Conditions</a>
          &nbsp;|&nbsp;

          <a id="privacyLink_text" rel="nofollow" title="Privacy Policy" class="!text-footer-text underline" href="/page/privacy-policy">Privacy Policy</a>
          &nbsp;|&nbsp;

          <a rel="nofollow" class="!text-footer-text underline" href="/page/cookie-policy">Cookies Policy</a>

        </div>

      </div>
    </div>
  </div>
</div>
</div>

<script src="/assets/js/bundle2.js" defer></script>
<script src="/assets/js/yourtagclothing_v2.js" type="module"></script>
<script src="/assets/js/alpine.js" type="module"></script>
<link rel="stylesheet" href="/assets/css/searchbar.css" />
<link rel="stylesheet" href="/assets/css/tags.css" />
</body>

</html>