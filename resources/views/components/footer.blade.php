
<footer class="footer-area undefined">
            <div class=" container ">
                <div class="row ">
                    <div class="col-lg-4 col-sm-6 col-md-6 ">
                        <div class="single-footer-widget ">
                            <div class="single-footer-widget ">
                                <a href="# "><img src="{{ url('public/img/black-logo.webp')}} " class="img-fluid " width="150"></a><br>
                                <p class="mt-3"><small> For A Better Learning Experience And Outcome, Every Course Has A Combination Of Graphics, Videos, Animation, Reading Material &amp; Assesments</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6 ">
                        <div class="single-footer-widget listings-details-desc m-0">
                            <h3>Contact Us</h3>
                            <ul class="amenities-list flex-column ">
                                <li style="max-width: 100%; "><span><i class="fas fa-envelope "></i><a href="mailto:swapnil@badabusiness.com" class="text-decoration-none text-secondary"> swapnil@badabusiness.com</a></span></li>
                                <li style="max-width: 100%; "><span><i class="fas fa-phone-volume"></i><a href="tel:+91 9167729245" class="text-decoration-none text-secondary">(+91) 9167729245</a></span></li>
                                <li style="max-width: 100%; "><span><i class="fa fa-map-marker icon "></i>Unit No. 31/B, Kamgaar Nagar, Near Nandikeshwar Temple, Kurla, Mumbai - 400024</span></li>
                            </ul>  
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-6 ">
                        <div class="single-footer-widget listings-details-desc m-0 ">
                             <h3>Social Links</h3>
                            <div class="events-share pb-4">
                                <div class="share-info ">
                                    <ul class="social-link ">
                                         <li class="ml-4" style="margin-right:10px ;"><a href="https://www.facebook.com/badabusinesshorizonibc" class="d-block " target="_blank"><i class="fab fa-facebook-f "></i></a></li>
                                        <!--<li style="margin-right:10px ;"><a href=" https://www.instagram.com/badabusinesshorizon " class="d-block " target="_blank"><i class='fab fa-instagram'></i></a></li>-->
                                        <li class="ml-4"><a href=" https://www.youtube.com/channel/UCw5lU1NEY8EWS7lXd1B7Mww " class="d-block " target="_blank"><i class="fab fa-youtube-square "></i></a></li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
                <div class="row mb-5 ">
                    <div class="copyright-area ">
                        <p><span><a class="mb-3" href="{{url('privacy')}}">Terms and Condition | Privacy</a></span></p>
                        <p> Disclaimer & Privacy Policy : Information Purpose Website | Content Provided By Respective Owners | Authorized Channel Partner <br>2023 © Copyright - All Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>        
         </footer>
    </div>
    
<script src="{{URL::asset('public/js/main.js')}}"></script> 
<script src="{{URL::asset('public/js/bootstrap.bundle.min.js')}} "></script>
<script src="{{URL::asset('public/js/fontjs.js')}}"></script> 

</body>
</html>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js "></script>
    <script>jQuery("#carousel ").owlCarousel({
        autoplay: true,
        rewind: true,
        /* use rewind if you don't want loop */
        // margin: 20,
        
// animateOut: 'fadeOut',
// animateIn: 'fadeIn',

        responsiveClass: true,
        autoHeight: true,
        autoplayTimeout: 7000,
        smartSpeed: 800,
        nav: true,
        responsive: {
            0: {
                items: 1
            },

            600: {
                items: 3
            },

            1024: {
                items: 3
            },

            1366: {
                items: 3
            }
        }
    });
</script>
<script>
        $(document).ready(function() {
            $("#ham-icon ").bind('click', function() {
                $('#mobnav').toggle('d-block');
            });
            var header = $(".start-style ");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 10) {
                    // $("#mobnav ").addClass("isticky ");
                    $("#mobnav1 ").addClass("isticky ");
                } else {
                    // $("#mobnav ").removeClass("isticky ");
                    $("#mobnav1 ").removeClass("isticky ");
                }
            });


        });
        function onClick() {
            $("#submenu ").bind('click', function() {

                $('#d-menu').toggle('d-block');
            });

        }
    </script>

    
    <script type="text/javascript">        
        $("#_idmyform1").on("submit", function(e) {
           
           $.ajaxSetup({
             headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      }
             });
            var dataString = $(this).serialize();

            $("#myBtn1").prop('disabled', true);
            $("#myBtn1").prop('value', 'Please wait...');

            // alert(dataString); return false;

            $.ajax({
                type: "get",
                url:"{{url('/api')}}",
                //headers: {  'Access-Control-Allow-Origin': '*' },
                data: dataString,
                success: function() {

                   window.location.href = "{{url('/thanks')}}";
                }
            });

            e.preventDefault();
        });
    </script>


    <script>
        document.getElementById("myBtn1").addEventListener("click ", function() {
            var mobile = $("input[name=mobile] ").map(function() {
                return $(this).val();
            }).get();
            var lastname = $("input[name=lastname] ").map(function() {
                return $(this).val();
            }).get();
            var email = $("input[name=email] ").map(function() {
                return $(this).val();
            }).get();

            arr = mobile.filter(v => v != '');
            arr1 = lastname.filter(v => v != '');
            arr2 = email.filter(v => v != '');

            var test = arr.toString();
            var test1 = arr1.toString();
            var test2 = arr2.toString();

            $.post('checkmobile.php', {
                mobile: test,
                lastname: test1,
                email: test2
            }, function(data) {

            });

        });
    </script>
    
   
     
   
         