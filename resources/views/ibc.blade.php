@extends('components/head')

<link  href="{{asset('/css/a74f6e1f5cb94126.css')}}" rel="stylesheet"> 
<link rel="icon" type="image/x-icon" href="{{url('/bada-business-favicon.png')}}"> 
<meta name="csrf-token" content="{{ csrf_token() }}" />
@include('selectjs')

@csrf
   
<section class="banner-wrapper-area1 " >
            <div class="container ">                
            </div>  
</section>      
        <div class="contact_form_container">
            <div class="single-listings-box p-3" >
                <h4 class="text-center text-uppercase pb-3 line">Register Now</h4>
                        <form class="formsales" id="_idmyform1" name=" Badabusiness Leads" action="" accept-charset="utf-8" enctype="multipart/form-data">
                        
                      <div class="row">
                        <div class="col-lg-12 col-md-6">
                          <div class="form-group">
                            <input type="text" pattern="[a-zA-Z ]+" name="lastname" class="form-control contact_input_ht" id="name" required="" placeholder="Your name">
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                          <div class="form-group">
                            <input type="email" name="email" class="form-control contact_input_ht" id="email" required="" placeholder="Your email address">
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                          <div class="input-group mb-3">
                            <div class="input-group-text">
                              <select name="cf_907" data-label="label:Country+Code" class="contact_input_ht custom-select boder_lftradius ib_country_2" id="cc1" onchange="selectedCountry(value)">
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
                            <input type="tel" minlength="10" maxlength="16" pattern="^[6-9]\d{9}$" id="india" class="ib_mobile form-control boder_lft" aria-label="" aria-describedby="basic-addon1" required="" name="mobile" style="display: block;">
                            <input type="tel" inputmode="numeric" maxlength="20" class="ib_mobile form-control boder_lft" aria-label="" aria-describedby="basic-addon1" id="ocountry" style="display:none">
                          </div>
                          <!-- <div class="form-group"><input type="text" name="phone_number" class="form-control" id="phone_number" required="" placeholder="Your phone number"></div> -->
                        </div>
                        <div class="col-lg-12 col-md-12">
                          <div class="mt-4">
                            <center>
                              <input id="myBtn1" class="default-btn" type="submit" value="Enquiry Now">
                            </center>
                          </div>
                        </div>
                      </div>
                    </form>
        </div> <!--<img src="img/bada-business.jpg" alt="ibc banner mobile image">-->
        <div class="formcall position-relative">
            <div class="form-banner-img "></div>
            <a href="tel:+919167729245" class="bdr_clr">
            <span>
            <img src="{{url('/img/call_icon.webp')}}" alt="call">
                9167729245
            </span>
            </a>
            </div>
        </div>
        <section class="about-area ptb-100 pb-aa ">
            <div class="container ">
                <h2 class="text-center pb-5 line">WHAT IS BADA BUSINESS IBC ?</h2>
                <div class="row align-items-center ">                    
                    <div class="col-lg-5 col-md-12 ">
                        <div class="about-image">
                            <img src="{{url('/img/about-img.webp')}}" width ="500" height="500" alt="image">
                            <div id="showvideo" type="button" class="video-btn bmd-modalButton" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-caret-right" style=""></i></div>
                            
                            <!-- Modal HTML -->  
                            <div class="modal loginRegisterModal fade" id="myModal">
                                <div class="modal-dialog modal-dialog-centered " style="z-index:2;">
                                    <div class="modal-content ">
                                        <div class="modal-header"> <div class="react-tabs " data-rttabs="true "><button type="button " class="close " data-bs-dismiss="modal"><i class="fa fa-">&#10006;</i></button> 
                                           </div>
                                        </div>  
                                        <div class="modal-body">
                                            <!-- 16:9 aspect ratio -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Fx58aexCPyE" width="400" height="300px" allowfullscreen></iframe>
                                            </div>
                                        </div>  
                                    </div> 
                                </div> 
                            </div> <!--model end-->
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-6 col-md-12 ">
                        <div class="about-content">
                            <span><strong>Check video presentation to find out more about us.</strong></span>
                            <p class="text-justify">IBC stands for Independent Business Consultant. Basically, IBC is the Mini Franchise of Bada Business Pvt. Ltd. As an IBC, you work independently and earn high commissions by consulting or selling products of Bada Business.
                                Business Coaching Program (BCP), Lifetime Membership (LFP), Independent Business Consultant (IBC), Problem Solving Courses (PSC), Case Studies, White Labelling are some of the products of Bada Business Pvt. Ltd. respectively.
                                It enables you to achieve the financial freedom by consistently having a passive monthly income. Additionally, You get lifetime training from Dr. Vivek Bindra & Bada Business Team.</p>
                          </div>
                      </div>                     
                </div>
            </div>
        </section>

        <div class="bg-f9f9f9 ">
            <section class="category-area pt-100 pb-70 pb-aa ">
                <div class="container ">
                    <div class="section-title text-left ">
                        <h2 class="text-center line">LEARNING SUPPORT FOR IBC</h2>
                    </div>
                    <div class="row ">
                        <div class="col-lg-2 col-sm-6 col-md-4 ">
                            <div class="single-category-box ">
                                <div class="icon "><i class='fas fa-suitcase pt-2'></i></div>
                                <h3>Product <br>Training
                                    <p>
                                </h3>
                                <a class="link-btn " href="# "></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-4 col-half-offset">
                            <div class="single-category-box ">
                                <div class="icon "><i class="fa fa-user pt-2"></i></div>
                                <h3>Consulting<br>Training
                                
                                </h3>
                                <a class="link-btn " href="# "></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-4 col-half-offset">
                            <div class="single-category-box ">
                                <div class="icon "><i class="fas fa-rupee-sign pt-2 "></i></div>
                                <h3>Sales <br>Training
                                    
                                </h3>
                                <a class="link-btn " href="# "></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-4 col-half-offset">
                            <div class="single-category-box ">
                                <div class="icon "><i class="fas fa-laptop pt-2"></i></div>
                                <h3>Digital <br>Training</h3>
                                <a class="link-btn " href="# "></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 col-md-4  col-half-offset">
                            <div class="single-category-box ">
                                <div class="icon "><i class="fas fa-users pt-2"></i></div>
                                <h3>Marketing <br> Training </h3>
                                <a class="link-btn " href="# "></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="places-area pt-100 pb-0 pb-aa">
            <div class="container">
                <div class="section-title">
                    <h2 class="line">HOW WILL YOU BENEFIT FROM IBC?</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="places-image text-center p-5"><img src="{{url('/img/benefit.webp')}}" alt="image"></div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="listings-details-desc">
                            <div id="pricing">
                                <ul class="pricing-list">
                                    <li>Very Low Investment <span><i class="fa fa-check"></i></span></li>
                                    <li>Earn Upto ₹1 To ₹5 Lakhs Per Month <span><i class="fa fa-check"></i></span></li>
                                    <li>Full / Part Time Work Convenience <span><i class="fa fa-check"></i></span></li>
                                    <li>Personalised Micro Website <span><i class="fa fa-check"></i></span></li>
                                    <li>Periodic Webinar By Dr Vivek Bindra <span><i class="fa fa-check"></i></span></li>
                                    <li>Personalized Business Coach<span><i class="fa fa-check"></i></span></li>
                                    <li>Dedicated IBC Managers <span><i class="fa fa-check"></i></span></li>
                                    <li>Free Lifetime Membership | *T&C Apply<span><i class="fa fa-check"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="how-it-works-area pt-100 pb-70 bg-f9f9f9 ">
            <div class="container ">

                <div class="row justify-content-center ">
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="single-how-it-works-box ">
                            <div class="icon "><i class="far fa-handshake pt-3"></i></div>
                            <h5>Just ₹79,650/- Investment</h5>
                            <p>Invest ₹79,650/- to become IBC & Get ₹53,500/- refund after hitting 2 lakhs revenue respectively</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="single-how-it-works-box ">
                            <div class="icon "><i class="fas fa-rupee-sign pt-3"></i></div>
                            <h5>₹1 Lakh-₹5 Lakhs Monthly</h5>
                            <p>Earn upto ₹5 Lakhs Monthly & take your career to the next level! More Efforts = More Reward.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="single-how-it-works-box ">
                            <div class="icon "><i class="fas fa-graduation-cap pt-3"></i></div>
                            <h5>Free Lifetime Membership</h5>
                            <p>Get Free Lifetime Training from Dr. Vivek Bindra through Digital Courses | *T&C Apply.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <div class="single-how-it-works-box ">
                            <div class="icon "><i class="fas fa-hand-holding-usd pt-3"></i></div>
                            <h5>Achieve Financial Freedom</h5>
                            <p>Become Financially Free by having a consistent flow of passive income through IBC!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        @extends('components/footer')
         