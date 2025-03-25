<footer>
    <style>

        .footer-top {
            background-image: url("{{ Vite::asset('resources/img/footer-bg.jpg') }}");
            height: 250px;
            color: white;
            font-size: 10px;
        }
        .footer-bottom {
            background-color: #303030;
            height: 80px;
        }
    </style>
   <div class="footer-top z-n1 position-relative">
        <div class="container">
            <div class="row pt-4">
               
                <div class="col-3 text-center">
                     <h6>DC COMICS</h6>
                     <ul style = "list-style: none;">
                          <li>Characters</li>
                          <li>Comics</li>
                          <li>Movies</li>
                          <li>TV</li>
                          <li>Games</li>
                          <li>Videos</li>
                          <li>News</li>
                     </ul>
                </div>
                <div class="col-3 text-center">
                     <h6>SHOP</h6>
                     <ul style = "list-style: none;">
                          <li>Shop DC</li>
                          <li>Shop DC Collectibles</li>
                     </ul>
                </div>
                <div class="col-3 text-center">
                     <h6>DC</h6>
                     <ul style = "list-style: none;">
                          <li>Terms Of Use</li>
                          <li>Privacy policy (New)</li>
                            <li>Ad Choices</li>
                            <li>Advertising</li>
                            <li>Jobs</li>
                            <li>Subscriptions</li>
                            <li>Talent Workshops</li>
                            <li>CPSC Certificates</li>
                            <li>Ratings</li>
                            <li>Shop Help</li>
                            <li>Contact Us</li>
                     </ul>
                </div> 
                    <div class="col-3 ">
                     <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="" style="width: 300px;">
                    </div>
        </div>

    </div>     
                           
                          
   </div>
   <div class="footer-bottom pt-3 ">
         <div class="container">
              <div class="row ">
                <div class="col-6">
               <button>SIGN-UP NOW!</button>
            </div>
                <div class="col-6 text-center">
                      <ul style = "list-style: none; display: flex; justify-content: space-around; ">
                              <li style="color:#0282F9">FOLLOW US</li>
                              <li><img src="{{ Vite::asset('resources/img/footer-facebook.png')}}" alt=""></li>
                              <li><img src="{{ Vite::asset('resources/img/footer-periscope.png')}}" alt=""></li>
                              <li><img src="{{ Vite::asset('resources/img/footer-pinterest.png')}}" alt=""></li>
                              <li><img src="{{ Vite::asset('resources/img/footer-twitter.png')}}" alt=""></li>
                              <li><img src="{{ Vite::asset('resources/img/footer-youtube.png')}}" alt=""></li>
                        </ul>
              </div>
         </div>

   </div>








</footer>