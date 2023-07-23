 
 <section class="product-details-cc">
     <div class="container" id="courses"  >
         <div class="row">   
            <div class="col-lg-12 col-md-12">  
              @foreach($product as $p)
              <div class="single-listings-item11">
                <div class="row m-0">
                  <div class="col-lg-5 col-md-4 p-0">         
                    <div class="post-image">
                      <a class="d-block" href="{{ url("/details/$p->id"."/". Str::slug($p->name)) }}" style="height:250px;">
                        <img src="{{ url('') }}/public/img/{{$p->img}}" class="main-image1" alt="image">
                      </a>
                    </div>
                  </div>       
                  <div class="col-lg-5 col-md-12 ">
                            <div class="products-details-desc">
                           <div class="products-content" style="margin-top:40px;">                    
                                <h2 style="font-size:28px;">
                                  <a>{{$p->name}}</a>
                                </h2>
                                   <p><b>KEY  COURSE  OUTCOMES</b></p>
                                   <ul class="ul-item">                                                                                          
                                      @php $count = 0; @endphp                                                     
                                    @foreach(str_replace(['""'],[''], explode(".",$p->description)) as $key => $val)
                                       @php if($count == 7) break; @endphp
                                          <li> {{ $val }} </li>
                                       @php $count++; @endphp
                                    @endforeach               
                                  </ul>
                               </div> 
                          </div>
                      </div>
                    <div class="col-lg-2 col-md-8 p-0">
                    <div class="listings-content"><br><br>
                    <br><br>
                    <div class="price">          
                        <span class="new-price"><i style="font-size:23px" class="fa">&#xf156;</i>&nbsp;{{$p->price}}</span>             
                    </div>
                    <div class="manage-your-business-content">                   
                      <!--<a class="default-btn" type="submit" href="{{ url('') }}/details/{{$p->name}}">Know More</a>-->
                      <a class="default-btn" type="submit"  href="{{ url("/details/$p->id"."/". Str::slug($p->name)) }}">Know More</a>
                    </div>                        
                   </div>
                </div>
              </div>
           </div>   
         @endforeach     
         </div>
     </div> 
  </div>
 </div> 
 </section>
 