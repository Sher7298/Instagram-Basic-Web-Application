@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
           <img src="{{url('/images/instaa.jpg')}}" alt="Image" style="height: 120px" >
       </div>

       <div class="col-9 p-5" >
           <div class="d-flex justify-content-between">
            <h1>{{$user->userName}}</h1>
              <a href="#">Add New </a>
           </div>
           <div class="d-flex">
               <div  class="pr-5" ><strong>21 </strong>Posts</div>
               <div class="pr-5"><strong>222 </strong>Followers</div>
                <div class="pr-5"><strong>188 </strong>Follwing</div>
           </div>
           <div class="pt-4 font-weight-bold">{{$user->profile}}</div>
           <div>{{$user->profile}}</div>
           <div class="pt-4 font-weight-bold"><a href="">{{$user->profile}}</a></div>
           <div class="row pt-5">
               <div class="col-4 ">
                   <img src="https://instagram.fisb1-1.fna.fbcdn.net/vp/b8e644b2729eab321370d64a738c612b/5E50A42A/t51.2885-15/e35/c0.135.1080.1080a/s150x150/72395602_748072898977256_8486797471970486233_n.jpg?_nc_ht=instagram.fisb1-1.fna.fbcdn.net&_nc_cat=108" class="w-100">
               </div>
               <div class="col-4"><img src="https://instagram.fisb1-1.fna.fbcdn.net/vp/101ee954c9 95aabc8c9e9bb1e23416b4/5E6125A6/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/72753177_452358755630585_4701205104207938072_n.jpg?_nc_ht=instagram.fisb1-1.fna.fbcdn.net&_nc_cat=105" class="w-100"></div>
               <div class="col-4"><img src="https://instagram.fisb1-1.fna.fbcdn.net/vp/c2fac03190321443eef13a284bc3615c/5E589C05/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/71774926_912462445782487_5403566933048992858_n.jpg?_nc_ht=instagram.fisb1-1.fna.fbcdn.net&_nc_cat=107"class="w-100"></div>
           </div>    
       </div>
   </div>
</div>
@endsection
