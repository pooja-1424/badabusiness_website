@extends('components/head')
<link  href="{{asset('/css/a74f6e1f5cb94126.css')}}" rel="stylesheet"> 
 <link rel="icon" type="image/x-icon" href="{{url('img/bada-business-favicon.png')}}"> 
<link href="{{url('/css/bootstrap.css')}}" rel="stylesheet">
@include('selectjs')
@csrf
<section>
    <img src="{{url('/img/website_badabusiness_image.webp')}}" class="aa" >
            <div class="container ">
                <!-- <a href="tel:+919167729245" class="con5">
                <span><img src="img/call_icon.png" alt="call" style="max-width:20%;">9167729245</span>
                </a> -->
            </div>
        </section>
     <section class="bg-f9f9f9 about-area pt-70 pb-70" style="background-color:#eee;margin-top:24px;margin-bottom:-92px">
       <div class="main-banner-area">
        <div class="container">
          <div class="main-banner-content">          
            <form>
              <div class="row m-0 align-items-center">
                <div class="col-lg-5 col-md-6 p-0">
                  <div class="form-group category-select">                    
                    <select class="banner-form-select" id="s1">
                      <option >Select Category </option>
                  @foreach(App\Models\Category::all() as $cList)
                    <option class="option" value="{{$cList->category_id}}" >{{$cList->name}}</option>
                  @endforeach
                    </select>
                  </div>
                </div>              
              
                <div class="col-lg-5 col-md-12 p-0">
                  <div class="form-group">                  
                    <input type="search" id="tags" name="search" class="form-control" placeholder="What are you looking for?" required > </select>
                    <i class="fa fa-search" aria-hidden="true"></i>
                 </div>
                </div>
                <div class="col-lg-2 col-md-12 p-0">
                  <div class="submit-btn">
                    <button type="submit">Search Now</button>
                  </div>
                </div>
              </div>
            </form>           
          </div>
        </div>
      </div>
    </section>  

<section class="product-details-cc">
<div class="container" id="courses"  >
<div class="row">   
  <div class="col-lg-12 col-md-12">  
  @foreach($data as $p)
    <div class="single-listings-item11">
      <div class="row m-0">
        <div class="col-lg-5 col-md-4 p-0">         
          <div class="post-image">
            <a class="d-block" href="{{ url("/details/$p->id"."/". Str::slug($p->name)) }}" style="height:250px;">
             
              <img src="{{ asset('img/'.$p->img) }}" class="main-image1" alt="image">

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
        
           <a class="default-btn" href="{{ url('details/'.$p->id.'/'.Str::slug($p->name)) }}">Know More</a>

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
@extends('components/footer')
