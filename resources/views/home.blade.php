@extends('components/head')
@php 
    include_once(app_path().'/includes/backend.php');
    include(app_path().'/includes/devicedetection.php');
@endphp
<link  href="{{asset('/public/css/a74f6e1f5cb94126.css')}}" rel="stylesheet"> 
<link rel="icon" type="image/x-icon" href="{{url('img/bada-business-favicon.png')}}"> 
<meta name="csrf-token" content="{{ csrf_token() }}" />
@php 
session_start();
error_reporting(0);
$url="https://www.badabusiness-trainings.com/bbmylogin/modules/Webforms/capture.php";
$enu = base64_encode($url);
@endphp
       
       
        <section>
        <img src="{{url('public/img/main-bannerhomepage.webp')}}" class="bb" >
            <div class="container ">
            </div>
        </section>
        <section class="about-area pt-100 pb-70 ">
            <div class="container ">
                <h2 class="text-center mb-5 line">Bada Business Horizon</h2>
                <div class="row align-items-center ">
                    <div class="col-lg-6 col-md-6 ">
                        <div class="about-image mb-4">
                            <img src="{{url('public/img/about_event.webp')}}" width="" height="" alt="image" class="main-image-home" >
                            <!-- <div class="video-btn"><i class="	fas fa-caret-right" style=""></i>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 ">
                        <div class="about-content mb-4">
                            <p class="text-justify">HorizonFP Pvt. Ltd. is authorised channel partner for Bada Business Pvt. Ltd. for Central Mumbai area. Horizon main office located in Kurla (E). In Mumbai central area it contains areas Dadar, Matunga, Ghatkopar, Vikhroli, Bhandup, Nahur, Mulund and etc. Bada Business Horizon provides extensive knowledge of the different business strategies and frameworks, which will help Indian Small Medium Enterprises (SME) to do big business or become Bada Business. Bada Business Horizon allows the user to learn everything about entrepreneurship, which is the world’s most affordable entrepreneurship program. 
                            </p>
                            <p class="text-justify">Bada Business is an initiative by Dr. Vivek Bindra, who is a motivational speaker and a renowned business coach. Bada Business is a one stop solution for all your business problems in the field of HR, Marketing, Sales, Technology, etc. Bada Business Horizon provides a lifetime opportunity to learn from billionaire trainers like Mr. Mohandas Pai, Mr. Manu Jain, Mr. R.C. Bhargava and many more like them. With Bada Business, we try to make the Entrepreneurship & Management education available, accessible and affordable to Everyone.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-area pb-100 pt-70 bg_light_blue">
            <div class="container">
                <div class="section-title">
                    <h2>Enquire Now for Our Courses</h2>
                    <p>Your email address will not be published. Required fields are marked *</p>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <div class="bg-transparent">
                    <form class="formsales" id="_idmyform1" name=" Badabusiness Leads" action="" accept-charset="utf-8" enctype="multipart/form-data">
                        <input type="hidden" name="__vtrftk" value="sid:f12bb82686cb3636c8609250f819c80adae338ca,1677318409">
                        <input type="hidden" name="publicid" value="76a79ea12be03378c8ba3c7a92b4389f">                        
                        <input type="hidden" name="urlencodeenable" value="1">               
                        <input type="hidden" name="name" value="Bada Business Homepage">     
                        <input type="hidden" name="cf_881" value="Warm Lead"> 
                        <input type="hidden" name="cf_971" data-label="" value="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36"> 
                        <input name="leadsource" data-label="" value="website" type="hidden">
                        <input name="cf_885" data-label="" value="-" type="hidden"> 
                        <input name="cf_909" data-label="" value="<?php echo $date; ?>" type="hidden">
                        <input name="cf_887" data-label="" value="-" type="hidden">
                        <input name="cf_979" data-label="" value="-" type="hidden"><!--occupation-->
                        <!--User Details-->
                        <input name="cf_897" data-label="" value="19.0748" type="hidden"> 
                        <input name="cf_899" data-label="" value="72.8856" type="hidden"> 
                        <input name="cf_873" data-label="" value="Maharashtra" type="hidden"> <!-- can assign state-->
                        <input name="cf_875" data-label="" value="Mumbai" type="hidden">
                        <input name="cf_893" data-label="" value="India" type="hidden">                       
                        <input name="cf_891" data-label="" value="Asia/Kolkata" type="hidden">
                        <input name="cf_895" data-label="" value="103.210.198.13" type="hidden">
                        <input name="cf_993" data-label="" value="-" type="hidden"><!--dreams-->
                        <input name="cf_965" data-label="" value="" type="hidden">
                        @foreach(App\Models\Product::all() as $cList)
                        <input name="cf_1029" data-label="" value="{{$cList->product_id}}" type="hidden">
                        @endforeach
                        <input name="cf_963" data-label="" value="<?php echo $os; ?>" type="hidden">
                        <!-- End User Details -->
                        <!-- -**********************--> 
                        <input name="cf_921" data-label="" value="Admin" type="hidden"><!--Team Leader-->        
                        <input type="hidden" name="cf_935" data-label="" value="<?php echo $dev; ?>">    
                        <input type="hidden" name="cf_937" data-label="" value="<?php echo $matchtype; ?>"> 
                        <input type="hidden" name="cf_1005" data-label="" value="<?php echo $keyw; ?>"><!--keyword-->
                        <input name="cf_929" data-label="" value="<?php echo $uri; ?>" type="hidden">
                        <input type="hidden" name="cf_939" data-label="" value="<?php echo $tar; ?>">  
                        <input type="hidden" name="cf_971" data-label="" value="<?php echo $place; ?>"> 
                        <input type="hidden" name="cf_949" data-label="" value="<?php echo $create; ?>"> 
                        <input type="hidden" name="cf_945" data-label="" value="<?php echo $physical; ?>"> 
                        <input type="hidden" name="cf_965" data-label="" value="<?php echo $adposition; ?>"> 
                        
                        <input type="hidden" name="cf_967" data-label="" value="<?php echo $CampaignSource; ?>"> <!-- Ad source-->
                        <input type="hidden" name="cf_997" data-label="" value=""> <!-- Product Name-->
                        <input type="hidden" name="cf_903" data-label="" value="https://www.badabusiness-trainings.com/home"><!--url-->
                        <input type="hidden" name="cf_905"  data-label="" value="<?php echo $src; ?>"><!-- Backend source-->
                        <input type="hidden" name="cf_961"  data-label="" value="<?php echo $netw; ?>">              
                        <input name="enu" id="enu" data-label="" value="aHR0cHM6Ly93d3cuYmFkYWJ1c2luZXNzLXRyYWluaW5ncy5jb20vYmJteWxvZ2luL21vZHVsZXMvV2ViZm9ybXMvY2FwdHVyZS5waHA=" type="hidden">
                        <input name="cf_925" data-label="" value="<?php echo $campaignid; ?>" type="hidden"> <!--Campaign ID-->
                        <input name="cf_1009" data-label="" value="" type="hidden">   <!--$SubProduct-->
                        <input name="cf_1007" data-label="" value="<?php echo $campaigntype; ?>" type="hidden">   <!--Campaign Name-->
                     	<input name="cf_977" data-label="" value="<?php echo $CampaignContent; ?>" type="hidden">   <!--Source-->		

                          
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                              <div class="form-group ">
                                <input type="text" pattern="[a-zA-Z ]+" name="lastname" class="form-control border-0" id="name" required="" placeholder="Your name*">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                              <div class="input-group mb-3">
                                <div class="input-group-text border-0">
                                  <select name="cf_907" data-label="label:Country+Code" class="custom-select border-0 boder_lftradius ib_country_2" id="cc1"onChange=selectedCountry(value)>
                                    <option value="India+91">India +91</option>
                                    <option value=" Afghanistan +93"> Afghanistan +93</option>
                                    <option value=" Albania +355">Albania +355</option>
                                    <option value="Algeria +213">Algeria +213</option>
                                    <option value="Andorra +376">Andorra +376</option>
                                    <option value="Angola +244">Angola +244</option>
                                    <option value="Argentina +54">Argentina +54</option>
                                    <option value="Armenia +374">Armenia +374</option>
                                    <option value="Australia +61">Australia +61</option>
                                    <option value="Austria +43">Austria +43</option>
                                    <option value="Azerbaigan +994">Azerbaigan +994</option>
                                    <option value="Bahrain +973">Bahrain +973</option>
                                    <option value="Bangladesh +880">Bangladesh +880</option>
                                    <option value="Belarus +375">Belarus +375</option>
                                    <option value="Belgium +32">Belgium +32</option>
                                    <option value="Bolivia +591">Bolivia +591</option>
                                    <option value="Bosnia +387">Bosnia +387</option>
                                    <option value="Brazil +55">Brazil +55</option>
                                    <option value="Bulgaria +359">Bulgaria +359</option>
                                    <option value="Cameroon +237">Cameroon +237</option>
                                    <option value="Canada +1">Canada +1</option>
                                    <option value="Chad +235">Chad +235</option>
                                    <option value="Chile +56">Chile +56</option>
                                    <option value="China[People's Republic] +86">China[People's Republic] +86</option>
                                    <option value="Colombia +57">Colombia +57</option>
                                    <option value="Congo +242">Congo +242</option>
                                    <option value="Costa Rica +506">Costa Rica +506</option>
                                    <option value="Croatia +385">Croatia +385</option>
                                    <option value="Cuba +53">Cuba +53</option>
                                    <option value="Cyprus +357">Cyprus +357</option>
                                    <option value="Czech Republic +420">Czech Republic +420</option>
                                    <option value="Denmark +45">Denmark +45</option>
                                    <option value="Ecuador +593">Ecuador +593</option>
                                    <option value="Egypt +20">Egypt +20</option>
                                    <option value="France +33">France +33</option>
                                    <option value="Georgia +995">Georgia +995</option>
                                    <option value="Germany +49">Germany +49</option>
                                    <option value="Hong Kong +852">Hong Kong +852</option>
                                    <option value="Iceland +354">Iceland +354</option>
                                    <option value="Indonesia +62">Indonesia +62</option>
                                    <option value="Iran +98">Iran +98</option>
                                    <option value="Iraq +964">Iraq +964</option>
                                    <option value="Ireland +353">Ireland +353</option>
                                    <option value="Italy +36">Italy +36</option>
                                    <option value="Japan +81">Japan +81</option>
                                    <option value="Kenya +254">Kenya +254</option>
                                    <option value="Korea +85">Korea +85</option>
                                    <option value="Liberia +231">Liberia +231</option>
                                    <option value="Libya +218">Libya +218</option>
                                    <option value="Liechtenstein +41">Liechtenstein +41</option>
                                    <option value="Nepal +977">Nepal +977</option>
                                    <option value="New Zealand +64">New Zealand +64</option>
                                    <option value="Nigeria +234">Nigeria +234</option>
                                    <option value="North Korea +850">North Korea +850</option>
                                    <option value="Pakistan +92">Pakistan +92</option>
                                    <option value="Romania +40">Romania +40</option>
                                    <option value="Russia +70">Russia +70</option>
                                    <option value="Saudi Arabia +966">Saudi Arabia +966</option>
                                    <option value="Senegal +221">Senegal +221</option>
                                    <option value="Serbia +381">Serbia +381</option>
                                    <option value="Singapore+65">Singapore +65</option>
                                    <option value="Somalia +252">Somalia +252</option>
                                    <option value="South Africa +27">South Africa +27</option>
                                    <option value="Sri Lanka +94">Sri Lanka +94</option>
                                    <option value="Sweden +46">Sweden +46</option>
                                    <option value="Switzerland +41">Switzerland +41</option>
                                    <option value="Turkey +90">Turkey +90</option>
                                    <option value="United-Arab-Emirates+971">United Arab Emirates +971</option>
                                    <option value="United-Kingdom+44">United Kingdom +44</option>
                                    <option value="USA+1">USA+1</option>
                                    <option value="Zaire +243">Zaire +243</option>
                                    <option value="Zambia +260">Zambia +260</option>
                                    <option value="Zimbabwe +263">Zimbabwe +263</option>
                                  </select>
                                </div>
                                <input type="tel" pattern="^[6-9]\d{9}$" inputmode="numeric" minlength="10" maxlength="16" id="india" class="ib_mobile form-control boder_lft border-0" aria-label="" aria-describedby="basic-addon1"placeholder="Mobile Number*">
                                <input type="tel" inputmode="numeric" maxlength="20"class="ib_mobile form-control boder_lft border-0" aria-label="" aria-describedby="basic-addon1" placeholder="Mobile Number*" id="ocountry" style="display:none">
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                              <div class="form-group">
                                <input type="email" name="email" class="form-control border-0" id="email" required="" placeholder="Your email address*">
                              </div>
                            </div>  
                            
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <select class="checkout-select border-0" name="cf_997" required>
                                                 <option value="">Select Course*</option>
                                                 @foreach(App\Models\Product::all() as $cList)
                                                  <option class="option">{{$cList->pname}}</option>
                                                 @endforeach
                                            </select>
                                        </div>
                                    </div>
                            <div class="col-lg-12 col-md-12 text-center manage-your-business-content">
                              <input id="myBtn1" class="default-btn" type="submit" value="Register Now">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        <section class="team-area pt-100 pb-70 aa">
            <div class="container">
                <div class="section-title">
                    <h2>Meet Our Awesome Professors Team</h2>
                    <p>This is Bada business professors team. They will give you the best strategy to grow your business with there experiences.</p>
                </div>
                <div class="row"> 
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-3">
                            <div class="card">
                                  <img src="{{url('public/img/Mr-Rajesh-Mehta-Chairman.webp')}}"
                                    class="team-member-image" />
                                <p class="text-blk name">Mr Rajesh Mehta 
                                </p>
                                <p class="text-blk position">Chairman
                                </p>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-3">
                         <div class="card ">
                                  <img src="{{url('public/img/Mr-sanjay-gupta.webp')}}"
                                    class="team-member-image" />
                                <p class="text-blk name">Mr Sanjay Gupta
                                </p>
                                <p class="text-blk position">Chairman- Apollo
                                </p>
                            </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 pb-3">
                         <div class="card ">
                                  <img src="{{url('public/img/Mr-R-G-Agarwal-chairman.webp')}}"
                                    class="team-member-image" />
                                 <p class="text-blk name">Mr. R. G. Agarwal</p>                                 
                                 <p class="text-blk position">Chairman</p>                               
                          </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card">
                                  <img src="{{url('public/img/Radhey-dixit-bada-business-professor.webp')}}"
                                    class="team-member-image" />
                                <p class="text-blk name">Radhey Dixit</p>                                
                                <p class="text-blk position">Professor</p>                                
                            </div>
                     </div>
                </div>
            </div>
        </section>
        
        <div class="feedback-area undefined  ptb-100 bg-f9f9f9 ">
            <div class="container">
                <div class="section-title bb">
                    <h2>User's Feedback About Us</h2>
                   </div>
                <div class="owl-slider">
                    <div id="carousel" class="owl-carousel">
                       <div class="item">
                            <div class="single-feedback-box">
                                <div class="rating"><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star"></i></div>
                                <p>One of the best learning business. They are genius and they give best ideas for how to grow your business. Learn and apply.</p>
                                <div class="client-info">
                                    <div class="d-flex align-items-center"><img src="{{url('public/img/user.webp')}}" alt="image">
                                        <div class="title">
                                            <h3>Amit Bhanushali</h3><span>Restaurant Owner</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-feedback-box">
                                <div class="rating"><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i></div>
                                <p>I attended all seminar of bada buiness in mumbai. I got always a new ideas for my business Dr. Vivek bindra is very kind person.</p>
                                <div class="client-info">
                                    <div class="d-flex align-items-center"><img src="{{url('public/img/user.webp')}}" alt="image">
                                        <div class="title">
                                            <h3>Mukesh Nagraj</h3><span>Shop Owner</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-feedback-box">
                                <div class="rating"><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i></div>
                                <p>They teach to believe in our own goals which is some marvellous stuff in here which is great. They motivate until we set a definite target.</p>
                                <div class="client-info">
                                    <div class="d-flex align-items-center"><img src="{{url('public/img/user.webp')}}" alt="image">
                                        <div class="title">
                                            <h3>Namita Sharma</h3><span>Shop Owner</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-feedback-box">
                                <div class="rating"><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i></div>
                                <p>A great place to learn and earn knowledge. At the end it`s up to us the way we pick ourselves in any opportunity. Satisfied</p>
                                <div class="client-info">
                                    <div class="d-flex align-items-center"><img src="{{url('public/img/user.webp')}}" alt="image">
                                        <div class="title">
                                            <h3>Kiran Shetty</h3><span>Educational Class Owner</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-feedback-box">
                                <div class="rating"><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i></div>
                                <p>I would always recommend Bada Business. My experience with bada business is best as I got a chance to startup my own business.</p>
                                <div class="client-info">
                                    <div class="d-flex align-items-center"><img src="{{url('public/img/user.webp')}}" alt="image">
                                        <div class="title">
                                            <h3>Priyanka Idate</h3><span>Cloths Shop Owner</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-feedback-box">
                                <div class="rating"><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i><i class="fa fa-star checked"></i></div>
                                <p>Excellent Business Ideas. I am IBC bada business. its a great opportunity to learn and earn with bada business.</p>
                                <div class="client-info">
                                    <div class="d-flex align-items-center"><img src="{{url('public/img/user.webp')}}" alt="image">
                                        <div class="title">
                                            <h3>Shruti Makwana</h3><span>IBC Bada Business</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
       @extends('components/footer')
       
         