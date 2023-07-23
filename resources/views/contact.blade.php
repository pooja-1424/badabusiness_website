@extends('components/head') 
@php 
    include_once(app_path().'/includes/backend.php');
    include(app_path().'/includes/devicedetection.php');
@endphp
<link rel="icon" type="image/x-icon" href="{{url('img/bada-business-favicon.png')}}"> 
<link  href="{{asset('public/css/a74f6e1f5cb94126.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" >
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.css" rel="stylesheet">
<link href="public/css/bootstrap.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">     
@php
session_start();
error_reporting(0);
$url="https://www.badabusiness-trainings.com/bbmylogin/modules/Webforms/capture.php";
$enu = base64_encode($url);
@endphp
            <div class="others-option-for-responsive ">
                <div class="container ">
                    <div class="dot-menu ">
                        <div class="inner ">
                             <div class="circle circle-one "></div>
                            <div class="circle circle-two "></div>
                            <div class="circle circle-three "></div> -->
                        </div>
                    </div>
                    <div class="container ">
                        <div class="option-inner ">
                            <div class="others-option ">
                                <div class="option-item ">
                                    <form class="navbar-search-box "><label></label><input type="text " class="input-search " placeholder="What are you looking for? "></form>
                                </div>
                                <div class="option-item "><span data-toggle="modal "><i class="flaticon-user "></i> Login / Register</span></div>
                                 <div class="option-item "><a class="default-btn " href="/dashboard/add-listing/ "><i class="flaticon-more "></i> Add Listing</a></div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="page-title-area page-title-bg2">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="{{url('/home')}}">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <!-- <div class="back-icon"><i class="fa fa-map-marker"></i></div> -->
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <h3>Our Address</h3>
                            <p>Unit No. 31/B, Kamgaar Nagar, Near Nandikeshwar Temple, Kurla, Mumbai - 400024</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-info-box">
                            <!-- <div class="back-icon"><i class="fas fa-phone-volume"></i></div> -->
                            <div class="icon aa"><i class="fas fa-phone-volume"></i></div>
                            <h3>Contact</h3>
                                
                            <p>Mobile: <a href="tel:+91 9167729245" class="text-decoration-none text-secondary">(+91) 9167729245</a></p>
                            <p>E-mail: <a href="mailto:swapnil@badabusiness.com" class="text-decoration-none text-secondary">swapnil@badabusiness.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div class="contact-info-box">
                            <div class="icon bb"><i class="far fa-clock"></i></div>
                            <h3>Hours of Operation</h3>
                            <p>Monday - Sunday: 10:00AM - 7:00PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="map" style="position: relative; overflow: hidden;">
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15084.236399497213!2d72.883177!3d19.061139!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x64635052f7bc9638!2sHorizon%20Financial%20planners!5e0!3m2!1sen!2sin!4v1667124586471!5m2!1sen!2sin" width="600"-->
            <!--    height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1885.52850233327!2d72.885833157882!3d19.061231131919822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8bd183c38cf%3A0xc3c3261035496c30!2sHorizon%20Financial%20%26%20Properties%20Advisers%20LLP!5e0!3m2!1sen!2sin!4v1669374265809!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <section class="contact-area pb-100 bg-f9f9f9 pt-70">
            <div class="container">
                <div class="section-title">
                    <h2>Ready to Get Started?</h2>
                    <p>Your email address will not be published. Required fields are marked *</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-image"><img src="{{url('/public/img/contact.webp')}}" alt="image"></div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="contact-form">
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
                           <input name="cf_979" data-label="" value="-" type="hidden">
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
                         <input name="cf_963" data-label="" value="<?php echo $os; ?>" type="hidden">
                        <!-- End User Details -->
                        <!-- -**********************--> 
                        <input name="cf_921" data-label="" value="Admin" type="hidden"><!--Team Leader-->        
                        <input type="hidden" name="cf_935" data-label="" value="<?php echo $dev; ?>">    
                        <input type="hidden" name="cf_937" data-label="" value="<?php echo $matchtype; ?>"> 
                        <input type="hidden" name="cf_1005" data-label="" value="<?php echo $keyw; ?>"><!--keyword-->
                        <input type="hidden" name="cf_939" data-label="" value="<?php echo $tar; ?>">  
                        <input type="hidden" name="cf_971" data-label="" value="<?php echo $place; ?>"> 
                        <input type="hidden" name="cf_949" data-label="" value="<?php echo $create; ?>"> 
                        <input type="hidden" name="cf_945" data-label="" value="<?php echo $physical; ?>"> 
                        <input type="hidden" name="cf_929" data-label="" value="<?php echo $uri; ?>"> <!--Referrer url-->
                        <input type="hidden" name="cf_967" data-label="" value="<?php echo $CampaignSource; ?>"> <!-- Ad source-->
                        <input type="hidden" name="cf_997" data-label="" value=""> <!-- Product Name-->
                        <input type="hidden" name="cf_903" data-label="" value="https://www.badabusiness-trainings.com/contact"><!--url-->
                        <input type="hidden" name="cf_905"  data-label="" value="<?php echo $src; ?>"><!-- Backend source-->
                        <input type="hidden" name="cf_961"  data-label="" value="<?php echo $netw; ?>">              
                        <input name="enu" id="enu" data-label="" value="aHR0cHM6Ly93d3cuYmFkYWJ1c2luZXNzLXRyYWluaW5ncy5jb20vYmJteWxvZ2luL21vZHVsZXMvV2ViZm9ybXMvY2FwdHVyZS5waHA=" type="hidden">
                        <input name="cf_925" data-label="" value="<?php echo $campaignid; ?>" type="hidden"> <!--Campaign ID-->
                        <input name="cf_1009" data-label="" value="" type="hidden">   <!--$SubProduct-->
                        <input name="cf_1007" data-label="" value="<?php echo $campaigntype; ?>" type="hidden">   <!--Campaign Name-->
                     	<input name="cf_977" data-label="" value="<?php echo $CampaignContent; ?>" type="hidden">   <!--Source-->		

                          
                                <div class="row">
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group"><input type="text" pattern="[a-zA-Z ]+" name="lastname" class="form-control" id="name" required="" placeholder="Your name"></div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group"><input type="email" name="email" class="form-control" id="email" required="" placeholder="Your email address"></div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-text">
                                                <select name="cf_888" data-label="label:Country+Code" class="custom-select boder_lftradius ib_country_2" id="cc1" onChange=selectedCountry(value)>
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
                                            <input type="tel" minlength="10" maxlength="16"  pattern="^[6-9]\d{9}$" id="india" class="ib_mobile form-control boder_lft" aria-label="" aria-describedby="basic-addon1">
                                          <input type="tel" inputmode="numeric" maxlength="20" class="ib_mobile form-control boder_lft" aria-label="" aria-describedby="basic-addon1" id="ocountry" style="display:none">
                                          </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group"><select class="checkout-select" name="cf_997">
                                          <option value="">Select Course*</option>
                                                 @foreach(App\Models\Product::all() as $cList)
                                                  <option class="option">{{$cList->pname}}</option>
                                                 @endforeach
                                    </div><br>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group"><textarea name="description" class="form-control" cols="30" rows="4" required="" placeholder="Write your message..."></textarea></div>
                                    </div>
                                    <div class="col-lg-12 col-md-12"><input id="myBtn1" class="default-btn" type="submit" value="Enquiry Now"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @extends('components/footer') 