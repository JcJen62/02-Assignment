<div id="subWrap">
      <div id="subFoot">
        <div class="footerGrid">
          <div class="footerRow">
              <h2>Contact Us</h2>
              <a
                id="addressLink"
                href="https://www.google.com/maps/place/Walmart+Supercenter/@40.3694274,-111.8210866,15z/data=!4m5!3m4!1s0x874d81bb2d8d0037:0x991bd843e1b46971!8m2!3d40.3849171!4d-111.8249991"
              >
                CABOT CRUIZES <br />
                949 Grassland Dr <br />
                American Fork, UT 84003
              </a>

              <h2>Phone:</h2>
              <a href="tel:+18005551234" class="phone2">1-800-555-1234</a>

              <h2>Hours of Operation:</h2>
              <p>Monday - Friday 9am - 4pm</p>
          </div>
          <div class="footerRow">
            <h2>News Letter</h2>
            <p>
              Subscribe to our email list and stay up-to-date with our hottest
              offers and latest specials.
            </p>
            <form action="#">
              <input
                id="emailInput"
                type="email"
                name="email"
                placeholder="Email"
                required
              />
              <br />
              <button id="subEmail" type="submit">Subscribe</button>
            </form>
          </div>
          <div class="footerRow">
              <h2>Why Cabot Cruises</h2>
              <p>
                Cabot Cruises is a travel agency providing the best cruise deals
                on our online travel website. We can help you with all inclusive
                vacaMons including discounted cruises.
              </p>

              <p>
                We do not sell travel to residents of Delaware, Iowa, Florida,
                Hawaii and Washington state because those states are just wierd.
                If you are a resident of one of these states, call your
                congressman and tell them to change the regulaMons.
              </p>
          </div>
        </div>
      </div>
    </div>

    <div id="socialWrap">
      <a class="fab fa-facebook-square"></a>
      <a class="fab fa-twitter-square"></a>
      <a class="fab fa-instagram"></a>
      <a class="fab fa-youtube"></a>
      <a class="fab fa-pinterest"></a>
    </div>

    <!-- FOOTER HERE -->
    <div class="footWrap">
      <footer>
        &copy; 2021 Jeremy Jensen
        <a href="https://jeremyjensen.net/">Portfolio</a>
      </footer>
    </div>
    <script src="js/scripts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script>
      $(document).ready(function () {
        $(".my_slider").slick({
          dots: true,
          arrows: false,
          infinite: true,
          speed: 1000,
          cssEase: "ease-out",
          autoplay: true,
          autoplaySpeed: 3000,
        });
      });
    </script>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "image": "https://dgm3740assignment1.jeremyjensen.net/images/logo2.png",
        "name": "Cabot Cruises",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "949 Grassland Dr",
          "addressLocality": "American Fork",
          "addressRegion": "UT",
          "postalCode": "84003",
          "addressCountry": "US"
        },
        "url": "https://dgm3740assignment1.jeremyjensen.net/",
        "telephone": "8011234567",
        "openingHours": "Mo-Fr 9-4",
        "priceRange": "400-1,000"
      }
    </script>
  </body>
</html>