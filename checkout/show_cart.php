<?php
include '../includes/header.php';
?>


<script>
  LOCALE = "en-CA"
  CURRENCY = "CAD"
</script>

<script src="https://assets.wordans.ca/assets/checkout/loyalty_program-cef409d5a7d1483b7d162c3d7cdf4d73651b14d8b926ea5a11e527153f38f678.js"></script>

<link rel="stylesheet" href="https://assets.wordans.ca/assets/slick-slider-5125286ed2d5d73612fe4904fbdc35209b09b0e33b36e0006179898c6a239b99.css" />
<link rel="stylesheet" href="https://assets.wordans.ca/assets/cart-b73579b9831f70228be95497670e84f79985f5e6eb5289c4736545f8606bcfe1.css" />
<link rel="stylesheet" href="https://assets.wordans.ca/assets/modal-small-71eb3c19a2ecd76eb6dcabec24b7264b6ad6e9014c262a8fef1322a910fd71e1.css" />

  <div x-data="{}">
      <div class="pt-20 md:py-[15vh]">
        <div class="relative overflow-x-hidden confirmation-background">
          <div class="text-center wrapper">
            <h2 class="mb-4 text-3xl font-extrabold md:text-5xl text-dark-blue">
              Your cart is empty.
            </h2>
            <div class="flex justify-center text-2xl text-center gap-x-2 md:text-3xl text-purple-">
              You must add items on the cart before you proceed to check out.
            </div>
          </div>
        </div>

        <div class="flex flex-col items-center py-20 wrapper turbo-native-hidden">
          <a class="w-full md:w-auto" href="https://www.wordans.ca/products">
            <button class="w-full px-32 text-white md:w-auto btn- bg-light-purple">
              Keep Shopping
            </button>
</a>        </div>
      </div>
  </div>

  <div
  class="modal-wrapper"
  x-cloak
  x-data="{}"
  x-show="$store.cart.modals.deleteItem"
  x-transition:enter="transition ease-out duration-500"
  x-transition:enter-start="opacity-0 transform translate-y-20"
  x-transition:enter-end="opacity-100 transform translate-y-0"
  x-transition:leave="transition ease-in duration-200"
  x-transition:leave-start="opacity-100 transform translate-y-0"
  x-transition:leave-end="opacity-0 transform translate-y-20"
>
  <div class="overlay"></div>
  <div
    class="rounded-2xl custom-modal "
    @click.outside="$store.cart.modals.deleteItem = false"
    x-ref="innerModal"
  >
      <a @click="$store.cart.modals.deleteItem = false" class="ml-auto rounded-full aspect-square p-2 text-black no-underline cursor-pointer flex justify-center items-center !absolute !right-8 !top-8 !left-auto !bottom-auto !bg-[#FAFAFC] z-50"><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.75 3.25L3.25 9.75M3.25 3.25L9.75 9.75" stroke="#A5A5A5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a>
    <div
  x-data="{}"
  class="flex flex-col items-center md:grid md:grid-cols-4 gap-6 md:p-12 text-lg md:text-xl relative"
>

  <!-- Image -->
  <div class="w-1/2 md:w-auto col-span-1 rounded-2xl border border-solid image light-border aspect-square">
    <img :src="$store.cart.cartItem.image" alt="" class="object-cover object-center max-w-full h-full rounded-2xl">
  </div>

  <!-- Details -->
  <div class="flex flex-col w-full md:w-auto md:col-span-3 justify-between">
    <div class="hidden md:!flex justify-between items-start">
      <!-- Item name -->
      <div class="text-lg md:text-2xl font-bold text-text-primary" x-text="$store.cart.cartItem.name"></div>
    </div>

    <!-- Item editable dropdowns -->
    <div class="flex gap-4 justify-between text-lg md:text-xl">

      <div class="flex flex-1 gap-2 flex-col justify-end items-start  mt-2">
        <div class="text-gray-500">Color:</div>
        <div class="flex relative justify-start items-center py-1 px-2 whitespace-nowrap rounded-lg border border-solid h-[25px] w-full text-primary light-border lg:w-[130px]" @click="open = !open" @click.outside="open = false">
          <div class="mr-1 w-6 h-6 rounded-md border border-solid light-border aspect-square" :style="`background: $store.cart.cartItem.color?.hex_code`"></div>
          <div class="overflow-hidden whitespace-nowrap text-ellipsis" x-text="$store.cart.cartItem.color?.name"></div>
        </div>
      </div>

      <div class="flex flex-col gap-2 relative flex-1 justify-end items-start mt-2">
        <div class="text-gray-500">Size:</div>
        <div class="flex relative justify-start items-center py-1 px-2 whitespace-nowrap rounded-lg border border-solid h-[25px] w-full text-primary light-border" @click="open = !open" @click.outside="open = false">
          <div x-text="$store.cart.cartItem.size?.name"></div>
        </div>
      </div>

      <div class="flex flex-col gap-2 flex-1 justify-end items-start mt-2">
        <div class="mr-2 text-gray-500">Quantity:</div>
        <input class="py-0 m-0 rounded-lg input- text-base md:text-lg !h-[25px] w-full" type="number" :value="$store.cart.cartItem.quantity" disabled>
      </div>

    </div>

    <div class="hidden md:!flex col-span-3 justify-end my-4">
      <div class="flex text-2xl text-text-primary">
        <div class="mr-2 font-bold">Total:</div>
        <div x-text="$store.cart.cartItem.price"></div>
      </div>
    </div>
  </div>

  <a
    class="w-full md:w-auto md:col-span-2"
    :href="`/cart/delete_cart_item/${$store.cart.cartItem.id}`"
    data-turbo="true"
    data-turbo-stream
    data-controller="native-remove-from-cart"
    data-bridge-title="native-remove-from-cart"
  >
    <button class="text-xl md:text-2xl w-full btn-danger-" @click="$store.cart.modals.deleteItem = false">
      Remove item
    </button>
  </a>

  <button class="text-xl md:text-2xl col-span-2 px-4 w-full btn- bg-[#E6E9F3]" @click="$store.cart.modals.deleteItem = false">
    Add to Wishlist
  </button>

</div>

  </div>
</div>

<style>
  .modal-wrapper, .overlay {
    position: fixed;
    width: 100vw;
    height: 110vh;
    bottom: 0;
    top: auto;
    left: 0;
    z-index: 900;
  }

  .custom-modal {
    position: absolute;
    display: flex;
    top: 50%;
    left: 50%;
    width: 85vw;
    max-height: 85vh;
    max-width: 650px;
    height: unset;
    transform: translate(-50%, -50%);
    z-index: 1000;
    background: white;
    flex-direction: column;
    overflow-y: auto;
    padding: 2rem;
  }

  .mobile-modal {
    position: fixed;
    display: flex;
    bottom: 0;
    left: 0;
    width: 100vw;
    height: auto;
    max-height: 92vh;
    z-index: 1000;
    background: white;
    flex-direction: column;
    overflow-y: auto;
    overflow-x: hidden;
    padding: 1rem;
  }

  .overlay {
    background: black;
    opacity: .5;
  }

  [x-cloak] {
    display: none !important;
  }
</style>

  <div
  class="modal-wrapper"
  x-cloak
  x-data="{}"
  x-show="$store.cart.modals.saveCart"
  x-transition:enter="transition ease-out duration-500"
  x-transition:enter-start="opacity-0 transform translate-y-20"
  x-transition:enter-end="opacity-100 transform translate-y-0"
  x-transition:leave="transition ease-in duration-200"
  x-transition:leave-start="opacity-100 transform translate-y-0"
  x-transition:leave-end="opacity-0 transform translate-y-20"
>
  <div class="overlay"></div>
  <div
    class="rounded-2xl custom-modal "
    @click.outside="$store.cart.modals.saveCart = false"
    x-ref="innerModal"
  >
      <a @click="$store.cart.modals.saveCart = false" class="ml-auto rounded-full aspect-square p-2 text-black no-underline cursor-pointer flex justify-center items-center !absolute !right-8 !top-8 !left-auto !bottom-auto !bg-[#FAFAFC] z-50"><svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.75 3.25L3.25 9.75M3.25 3.25L9.75 9.75" stroke="#A5A5A5" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a>
    <div class="my-4 mt-10 mx-8 flex flex-col items-center md:items-start">
  <div class="text-3xl mb-4 text-center md:text-left text-dark-blue font-bold">Save cart</div>
  <div class="text-xl my-4 text-center md:text-left text-[#232323]">All of the items in your Cart will be saved for later</div>
  <form action="/myaccount/carts/save_current_cart" method="post" class="mb-0 w-full">
    <div class="form-group">
      <input type="text" name="cart_name" placeholder="Cart name" required class="mb-12 form-control border-1 rounded-xl p-4">
    </div>
    <div class="form-group flex flex-col md:flex-row w-full gap-2 md:gap-4 mb-0">
      <input id="submit" type="submit" value="Save cart" class="btn- flex-1 border-0 bg-success font-bold text-white rounded-xl">
      <button type="button" class="btn- btn-danger- mt-2 md:mt-0 md:ml-2 flex-1" @click="$store.cart.modals.saveCart = false">Cancel</button>
    </div>
  </form>
</div>

  </div>
</div>

<style>
  .modal-wrapper, .overlay {
    position: fixed;
    width: 100vw;
    height: 110vh;
    bottom: 0;
    top: auto;
    left: 0;
    z-index: 900;
  }

  .custom-modal {
    position: absolute;
    display: flex;
    top: 50%;
    left: 50%;
    width: 85vw;
    max-height: 85vh;
    max-width: 650px;
    height: unset;
    transform: translate(-50%, -50%);
    z-index: 1000;
    background: white;
    flex-direction: column;
    overflow-y: auto;
    padding: 2rem;
  }

  .mobile-modal {
    position: fixed;
    display: flex;
    bottom: 0;
    left: 0;
    width: 100vw;
    height: auto;
    max-height: 92vh;
    z-index: 1000;
    background: white;
    flex-direction: column;
    overflow-y: auto;
    overflow-x: hidden;
    padding: 1rem;
  }

  .overlay {
    background: black;
    opacity: .5;
  }

  [x-cloak] {
    display: none !important;
  }
</style>






  <script>
  if (typeof gtag !== 'undefined') {
    gtag('event', 'experimentation', {
      'experiment_id': 'cro_improved_cart',
      'variant': 'no'
    });

    document.getElementById('continue_button').addEventListener('click', function () {
      gtag('event', 'cta_click', {
        'experiment_id': 'cro_improved_cart',
        'variant': 'no'
      });
    });
  }
  </script>


<?php
include '../includes/footer.php';
?>