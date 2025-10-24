<?php
include '../includes/header.php';
?>

<section class="content sidebar_page wrapper text-justify text-xl">


  <div class="flex flex-col gap-x-20 md:flex-row md:py-20">

    <div class="w-full md:pb-8 md:py-24 text-center">
      <h1 class="hidden md:!block headers-static-pages mb-6 !text-4xl !font-extrabold">
        Contact Us
      </h1>
      <div class="flex flex-col mb-8 justify-center text-center text-[#00228A]">
        <span class="mb-2 flex justify-center items-center">
          <img class="mr-2 w-[20px]" src="/assets/images/phone_icon.svg">
          <p class="mb-0">
            <a class="!text-[#00228A] font-bold" href="tel:4164549134">416-454-9134</a>
          </p>
        </span>
        <span class="mb-2">Monday - Friday</span>
        <span>8am - - - 4pm - EST - - </span>
      </div>

      <turbo-frame id="contact_block">
        <p class="md:px-12">You can contact us by email anytime. Please make sure you choose the right department to get a fast answer from our team!</p>

        <form id="contactForm" x-data="contactForm" data-turbo="false" enctype="multipart/form-data" action="/display/contact_request" accept-charset="UTF-8" method="post">

          <fieldset class="md:px-12">
            <div class="mt-2">
              <label for="contact_request_name" class="text-left text-xl font-normal text-gray-500">Your Name*</label>
              <input type="text" name="contact_request[name]" id="contact_request_name" value="" autocomplete="name" class="input-" x-model="name" x-on:change="name = $event.target.value" />
            </div>

            <div class="mt-12">
              <label for="contact_request_email" class="text-left text-xl font-normal text-gray-500">Email*</label>
              <input type="text" name="contact_request[email]" id="contact_request_email" value="" autocomplete="email" class="input-" x-model="email" x-on:change="email = $event.target.value" />
            </div>

            <div class="mt-12">
              <style>
                .custom-select-placeholder {
                  color: #9ca3af;
                }

                .custom-select-placeholder:valid {
                  color: inherit;
                }
              </style>
              <label for="contact_request_title" class="text-left text-xl font-normal text-gray-500">Contact Reason*</label>
              <select name="contact_request[title]" id="contact_request_title" required="required" class="input- custom-select-placeholder" x-on:change="
            subject = $event.target.value;
            department = salesSubjects.includes(subject) ? &#39;Sales&#39; : &#39;Customer Service&#39;;
          ">
                <option disabled="disabled" selected="selected" value="">Contact reason*</option>
                <option value="Address/email change or update">Address/email change or update</option>
                <option value="I cannot apply my coupon code">I cannot apply my coupon code</option>
                <option value="I cannot use my refund coupon">I cannot use my refund coupon</option>
                <option value="I did not receive the order email confirmation">I did not receive the order email confirmation</option>
                <option value="I need a quotation without customization">I need a quotation without customization</option>
                <option value="I need help with my custom design">I need help with my custom design</option>
                <option value="I need help with my custom order">I need help with my custom order</option>
                <option value="I need to get a quotation for a custom order">I need to get a quotation for a custom order</option>
                <option value="I want a refund: double charged">I want a refund: double charged</option>
                <option value="I want a refund: order already returned">I want a refund: order already returned</option>
                <option value="I want a refund: order never received">I want a refund: order never received</option>
                <option value="My refund coupon has the wrong amount (shipping fees)">My refund coupon has the wrong amount (shipping fees)</option>
                <option value="Newsletter">Newsletter</option>
                <option value="Price Match Guarantee Submission">Price Match Guarantee Submission</option>
                <option value="Return request: Damaged items">Return request: Damaged items</option>
                <option value="Return request: I need a return tkt">Return request: I need a return tkt</option>
                <option value="Return request: I ordered the wrong items">Return request: I ordered the wrong items</option>
                <option value="Return request: I received the wrong items">Return request: I received the wrong items</option>
                <option value="Return request: received too late">Return request: received too late</option>
                <option value="When will I receive my order: No update on tracking">When will I receive my order: No update on tracking</option>
                <option value="When will I receive my order: Part of my order is missing">When will I receive my order: Part of my order is missing</option>
                <option value="When will I receive my order: Tracking not available">When will I receive my order: Tracking not available</option>
                <option value="When will I receive my order: Tracking shows order as delivered">When will I receive my order: Tracking shows order as delivered</option>
                <option value="When will this item be back in stock">When will this item be back in stock</option>
                <option value="Other">Other</option>
              </select>
            </div>

            <div class="mt-12">
              <label for="contact_request_department" class="text-left text-xl font-normal text-gray-500">Department*</label>
              <input type="text" name="contact_request[department]" id="contact_request_department" value="" class="input- cursor-default" x-model="department" readonly="readonly" placeholder="Department will appear based on the selected contact reason." />
            </div>

            <div class="mt-12" x-show="subject.toLowerCase() === 'other'" style="display: none;">
              <label for="contact_request_title_other" class="text-left text-xl font-normal text-gray-500">Other Subject*</label>
              <input type="text" name="contact_request[title_other]" id="input-subject" size="24" class="input-" />
            </div>

            <div class="mt-12">
              <label for="contact_request_question" class="text-left text-xl font-normal text-gray-500">Let us know your concern</label>
              <textarea name="contact_request[question]" id="contact_request_question" rows="8" style="height: 200px !important;" class="block input-" x-model="question" x-on:change="question = $event.target.value">
</textarea>
            </div>

            <div class="mt-6 text-left">
              <span> * Mandatory fields to complete</span>
            </div>
          </fieldset>

          <div class="mt-12 md:pl-12 flex items-center">
            <input type="checkbox" name="contact_request[wants_newsletter]" id="contact_request_wants_newsletter" value="1" class="!my-0 !ml-0 !mr-2" checked="checked" />
            I want to receive yourtagclothing exclusive newsletter
            <input type="hidden" name="contact_request[ip]" id="contact_request_ip" value="" autocomplete="off" />
            <input type="hidden" name="contact_request[os]" id="contact_request_os" value="" autocomplete="off" />
            <input type="hidden" name="contact_request[browser]" id="contact_request_browser" value="" autocomplete="off" />
            <input type="hidden" name="contact_request[version]" id="contact_request_version" value="" autocomplete="off" />
          </div>

          <div class="mt-12 flex flex-col items-center">
            <div class="w-full md:w-1/2 h-[50px]">
              <a x-on:click.prevent="checkContactForm" class="w-full block bg-light-purple hover:bg-blue-700 !text-white text-2xl font-bold p-6 rounded-xl" href="#">Submit</a>
            </div>
          </div>

        </form>
        <div class="mt-16 md:px-12">
          <span class="mt-20 headers-static-pages !text-2xl md:!text-3xl">Need further assistance?</span>
          <p class="mt-4 md:mt-8">You can contact us on the following services below</p>
          <div class="flex items-center justify-center w-full flex-col gap-4">
            <div class="flex flex-col items-center justify-center bg-[#FAFAFC] w-full h-[90px] rounded-xl">
              <span class="font-bold text-[#00228A] mb-2 text-xl md:text-2xl">Sales</span>
              <a class="underline text-[#454545] text-lg md:text-xl" href="mailto:sales@yourtagclothing.com">sales@yourtagclothing.com</a>
            </div>
            <div class="flex flex-col items-center justify-center bg-[#FAFAFC] w-full h-[90px] rounded-xl">
              <span class="font-bold text-[#00228A] mb-2 text-xl md:text-2xl">Info</span>
              <a class="underline text-[#454545] text-lg md:text-xl" href="mailto:info@yourtagclothing.com">info@yourtagclothing.com</a>
            </div>
          </div>
        </div>


        <script>
          document.addEventListener('alpine:init', () => {
            Alpine.data('contactForm', () => ({
              subject: "",
              department: "",
              name: "",
              email: "",
              question: "",
              ip: "",
              os: "",
              browser: "",
              version: "",
              showError: false,
              errorMessage: "",
              salesSubjects: ["I need help with my custom design", "I need to get a quotation for a custom order", "I need a quotation without customization", "When will this item be back in stock"],

              init() {
                this.ip = "39.51.114.12";
                this.os = this.detectOS();
                this.browser = this.getBrowserName();
                this.version = this.getBrowserVersion();

                document.getElementById('contact_request_ip').value = this.ip;
                document.getElementById('contact_request_os').value = this.os;
                document.getElementById('contact_request_browser').value = this.browser;
                document.getElementById('contact_request_version').value = this.version;
              },

              detectOS() {
                const userAgent = navigator.userAgent || navigator.vendor || window.opera;

                if (/windows phone/i.test(userAgent)) {
                  return "Windows Phone";
                }

                if (/win/i.test(userAgent)) {
                  return "Windows";
                }

                if (/mac/i.test(userAgent)) {
                  return "MacOS";
                }

                if (/android/i.test(userAgent)) {
                  return "Android";
                }

                if (/linux/i.test(userAgent)) {
                  return "Linux";
                }

                if (/iphone|ipad/i.test(userAgent)) {
                  return "iOS";
                }

                return "Unknown OS";
              },

              getBrowserName() {
                const {
                  userAgent
                } = navigator;
                let tem, matchTest = userAgent.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];

                if (/trident/i.test(matchTest[1])) {
                  tem = /\brv[ :]+(\d+)/g.exec(userAgent) || [];
                  return 'IE';
                }

                if (matchTest[1] === 'Chrome') {
                  tem = userAgent.match(/\b(OPR|Edge)\/(\d+)/);
                  if (tem != null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
                }

                matchTest = matchTest[2] ? [matchTest[1], matchTest[2]] : [navigator.appName, navigator.appVersion, '-?'];
                if ((tem = userAgent.match(/version\/(\d+)/i)) != null) matchTest.splice(1, 1, tem[1]);

                return matchTest.join(' ');
              },

              getBrowserVersion() {
                return navigator.appVersion;
              },

              checkContactForm() {
                this.showError = false;

                if (this.department === '') {
                  this.errorMessage = `Please select a department`;
                  this.showError = true;
                } else if (this.name === '') {
                  this.errorMessage = `Please enter your name`;
                  this.showError = true;
                } else if (this.email === '') {
                  this.errorMessage = `Please enter your email`;
                  this.showError = true;
                } else if (!this.validateEmail(this.email)) {
                  this.errorMessage = `Please make sure that your email is correct`;
                  this.showError = true;
                } else if (this.question === '') {
                  this.errorMessage = `Please fill in a question or comment`;
                  this.showError = true;
                } else {
                  console.log(document.getElementById('contactForm'))
                  document.getElementById('contactForm').requestSubmit();
                }
              },

              validateEmail(value) {
                const apos = value.indexOf("@");
                const dotpos = value.lastIndexOf(".");
                return !(apos < 1 || dotpos - apos < 2);
              }
            }));
          })
        </script>

      </turbo-frame>

    </div>
  </div>
</section>

<?php
include '../includes/footer.php';
?>