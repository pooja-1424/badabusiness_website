@extends('components/head')
<link href="{{asset('/css/a74f6e1f5cb94126.css')}}" rel="stylesheet"> 
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="{{asset('/css/bootstrap.css')}}" rel="stylesheet">


<section>
  
         <section class="products-details-area mt-100" style="margin-top:150px;">
            <div class="container">
              <div class="row  my-profile-box bg-light-blue">
                @foreach($details as $p)
                <div class="col-lg-6 col-md-12 p-0">
                  <div class="single-products-box">
                    <div class="products-details-image">
                      <img src="{{ url('') }}/img/{{$p->img}}" class="main-image3" alt="image">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 ">
                  <div class="products-details-desc">
                    <div class="products-content">
                      <h2>
                        <a>{{$p->name}}</a>
                      </h2>
                      <div class="price price-aa">
                        <!--<span class="old-price me-2">$321</span>-->
                        <span class="new-price"><i style="font-size:23px" class="fa">&#xf156;</i>&nbsp;{{$p->price}} </span> 
                       

                      </div>
                      <p>
                        <b>KEY COURSE OUTCOMES</b>
                      </p>
                      <ul>
                         @foreach(str_replace(['""'],[''], explode(".",$p->description)) as $key => $val)                                   
                                        <li> {{ $val }} </li>                                    
                           @endforeach      
                      </ul>
                      <div class="manage-your-business-content">
                        <input id="myBtn1" class="default-btn" type="submit" value="Know More" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-bottom:30px;">
                      </div>
                      @endforeach   
                    </div>
                  </div>
                </div>
              </div>
            </section>
 <!--modal start-->
 <div class="modal loginRegisterModal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered " style="z-index:2;">
      <div class="modal-content ">
          <div class="react-tabs " data-rttabs="true "><button type="button " class="close " data-bs-dismiss="modal"><i class="fa fa-">&#10006;</i></button>
              <ul class="nav nav-tabs " id="myTab ">
                  <ul class="react-tabs__tab-list " role="tablist ">
                      <li class="nav-item react-tabs__tab--selected " role="tab " id="tab:Rcb6:0 " aria-selected="true " aria-disabled="false " aria-controls="panel:Rcb6:0 " tabindex="0 " data-rttab="true "><a class="nav-link " id="login-tab ">Enquiry Now</a></li>
                  </ul>
              </ul>
              <div class="tab-content " id="myTabContent ">
                  <div class="react-tabs__tab-panel react-tabs__tab-panel--selected " role="tabpanel " id="panel:Rcb6:0 " aria-labelledby="tab:Rcb6:0 ">
                      <div class="tab-pane fade show active " id="login ">
                          <div class="miran-login ">

                            <form class="formsales" id="_idmyform1" name=" Badabusiness Leads" action="" accept-charset="utf-8" enctype="multipart/form-data">
                               <div class="form-group "><input type="text " pattern="[a-zA-Z ]+" placeholder="Name*" class="form-control " name="lastname" required></div>
                                  <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                          <select name="cf_907" data-label="label:Country+Code" class="form-control" id="cc1" required onChange=selectedCountry(value)>
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
                                       <input type="tel" minlength="10" maxlength="16"  pattern="^[6-9]\d{9}$"  id="india" placeholder="Mobile*" class="ib_mobile form-control boder_lft" aria-label="" aria-describedby="basic-addon1">
                                       <input type="tel" inputmode="numeric" maxlength="20" class="ib_mobile form-control boder_lft" placeholder="Mobile*" aria-label="" aria-describedby="basic-addon1" id="ocountry" style="display:none">
                                    </div>
                                  </div>
                                  <div class="form-group "><input type="email " class="form-control " name="email" placeholder="Email*" required=""></div>
                                  <button class="form-group round_btn mt-4" id="personality-development"  type="submit" >Enquiry Now</button>
                              </form>
                          </div>
                      </div>
                  </div>
                  <div class="react-tabs__tab-panel " role="tabpanel " id="panel:Rcb6:1 " aria-labelledby="tab:Rcb6:1 "></div>
              </div>
          </div>
      </div>
    </div>
  </div>

@extends('components/footer')
