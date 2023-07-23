@extends('components/head')
@php  
    include_once(app_path().'/includes/backend.php');
    include(app_path().'/includes/devicedetection.php');
@endphp
<link  href="{{asset('public/css/a74f6e1f5cb94126.css')}}" rel="stylesheet"> 
<link rel="icon" type="image/x-icon" href="{{url('img/bada-business-favicon.png')}}"> 
<link href="{{asset('public/css/bootstrap.css')}}" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<?php
session_start();
error_reporting(0);
$url="https://www.badabusiness-trainings.com/bbmylogin/modules/Webforms/capture.php";
$enu = base64_encode($url);
?>
        <section>
        <img src="{{url('public/img/Bada_business_website_Banner_images_LTM.webp')}}" class="bb" >
            <div class="container ">
            </div>
        </section>
        <div class="contact_form_container">
            <div class="single-listings-box p-3">
                <h4 class="text-center text-uppercase pb-3 line">Register Now</h4>
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
                        <input name="cf_1029" data-label="" value="104" type="hidden"><!--product ID-->
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
                        <input type="hidden" name="cf_997" data-label="" value="LTM"> <!-- Product Name-->
                        <input type="hidden" name="cf_903" data-label="" value="https://www.badabusiness-trainings.com/ltm"><!--url-->
                        <input type="hidden" name="cf_905"  data-label="" value="<?php echo $src; ?>"><!-- Backend source-->
                        <input type="hidden" name="cf_961"  data-label="" value="<?php echo $netw; ?>">              
                        <input name="enu" id="enu" data-label="" value="aHR0cHM6Ly93d3cuYmFkYWJ1c2luZXNzLXRyYWluaW5ncy5jb20vYmJteWxvZ2luL21vZHVsZXMvV2ViZm9ybXMvY2FwdHVyZS5waHA=" type="hidden">
                        <input name="cf_925" data-label="" value="<?php echo $campaignid; ?>" type="hidden"> <!--Campaign ID-->
                        <input name="cf_1009" data-label="" value="" type="hidden">   <!--$SubProduct-->
                        <input name="cf_1007" data-label="" value="<?php echo $campaigntype; ?>" type="hidden">   <!--Campaign Name-->
                     	<input name="cf_977" data-label="" value="<?php echo $CampaignContent; ?>" type="hidden">   <!--Source-->		
	
                      
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group"><input type="text"  pattern="[a-zA-Z ]+" name="lastname" class="form-control contact_input_ht" id="name" required="" placeholder="Your name"></div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group"><input type="email" name="email" class="form-control contact_input_ht" id="email" required="" placeholder="Your email address"></div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-text">
                                    <select name="cf_907" data-label="label:Country+Code" class="contact_input_ht custom-select boder_lftradius ib_country_2" id="cc1" onChange=selectedCountry(value)>
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
                                         <input type="tel" minlength="10" maxlength="16"  pattern="^[6-9]\d{9}$" id="india" class="ib_mobile form-control boder_lft" aria-label="" aria-describedby="basic-addon1" placeholder="Mobile Number">
                                        <input type="tel" inputmode="numeric" maxlength="20"class="ib_mobile form-control boder_lft" aria-label="" aria-describedby="basic-addon1" placeholder="Mobile Number" id="ocountry" style="display:none">
                                        </div>
                                    <!-- <div class="form-group"><input type="text" name="phone_number" class="form-control" id="phone_number" required="" placeholder="Your phone number"></div> -->
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="mt-4">
                                        <center><input id="myBtn1" class="default-btn" type="submit" value="Enquiry Now"></center>
                                    </div>
                                </div>
                            </div>
                        </form>
                   </div>
                   <div class="formcall position-relative">
                     <div class="form-banner-img "></div>
                       <a href="tel:+919167729245" class="bdr_clr">
                        <span><img src="{{url('public/img/call_icon.webp')}}" alt="call"> 9167729245 </span>
                       </a>
                    </div>
               </div>
                    
                <section class="pb-100 pt-100 pb-aa">
                <div class="container pb-50 pt-50" >
                   <div class="row">
                      <div class="col-lg-1"></div>
                        <div class="col-lg-12 col-md-12">
                              <div class="section-title-new text-center"><h2 style="margin-bottom:40px;">LIFETIME MEMBERSHIP</h2></div>
                        </div>
                     </div>
                    <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-5 col-md-12">
                              <div class="images">
                             <img src="{{url('public/img/ltm2.webp')}}" class="main-image  d-sm-block" alt="image">
                            </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                              <div class="about-content">
                                   <p>Entrepreneurs can access valuable materials through lifetime membership to help them launch profitable businesses. Additionally, it aids in the planning, selection, and access of the best marketing strategy for the company.</p>
                                    <p>You can get the answer to your urgent business challenges with the assistance of eminent millionaire professors. Sign up for a lifetime subscription to 10 times your company's growth. Excellent access to chances for lifelong learning is provided by lifetime membership. </p>
                               </div>
                            </div>
                      </div>
            </section>
            <section class="aa">
               <div class="container">
                  <div class="row">
                        <div class="col-lg-1"></div>
                       <div class="col-lg-5 col-md-12">
                       <div class="widget-area">
                       <div class="widget widget_categories ">
                           <div class="col-lg-12 col-md-12">
                                  <div class="section-title-new text-left"><h2>Aladdin ka Chirag</h2>
                                 </div>
                            </div>
                           <ul> 
                             <li><p> Lifetime Membership Benefits (600 business strategy tools, frameworks, checklists, and much more).</p></li>
                             <li><p>Observe two EAE events.</p></li>
                             <li><p>Lifetime access to all digital courses using mobile applications Opportunity.</p></li>
                             <li><p>High-quality videos, animations, tests, discussion forums, and much more.</p></li>
                             <li><p>Frameworks for business strategies</p></li>
                             <li><p>Lifetime PSCs</p></li>
                             <li><p> Accessible Lifetime Membership pricing with EMI options</p></li>
                           </ul>
                         </div>
                    </div>
                </div>
                       <div class="col-lg-5 col-md-12">
                            <img src="{{url('public/img/chirag_img.webp')}}" class="main-image" alt="image">
                       </div>
                   </div>
               </div>
            </div>
 </section>
 @extends('components/footer')
