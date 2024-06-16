@extends('client.header')
<style>
    .section-padding {
        padding-top: 80px;
    }

    .gallery-section {
        position: relative;
        z-index: 1;
    }

    .title {
        font-size: 46px;
        font-weight: 700;
        font-family: "Roboto", sans-serif;
        color: #f44336;
    }

    .filter {
        text-align: center;
        max-width: 1050px;
        margin: auto;
        font-family: "Roboto", sans-serif;
        font-size: 46px;
        font-weight: 700;
    }

    .filter a{
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        font-weight: 500;
        background:#2a7d2e;
        color:#fff;
        border-radius: 40px;
        padding:10px 15px 10px 15px;
    }

    .btn {
        padding: 10px 20px;
        margin: 5px 4px 4px 0;
        display: inline-block;
        color: #003;
        background: #f2f2f2;
        border: 1px solid #f44336;
        transition: all 0.4s;
        border-radius: 10px;
        font-size: 16px;
        font-weight: 500;
    }

    .btn:hover,
    .btn-active {
        background: #28a745;
        color: #fff;
        
    }

    .gallery {
        display: flex;
        justify-content: center;
        width: fit-content;
        max-width: 1320px;
        flex-wrap: wrap;
        margin: 25px auto;
        /* gap: 14px; */
    }

    .gallery a {
        display: flex;
    }

    .gallery img {
        width: 200px;
        height: 220px;
        object-fit: cover;
        transition: 0.3s ease-in-out;
        border-radius: 12px;
        overflow: hidden;
        margin: 10px 10px;
    }

    .gallery img:hover {
        transform: scale(1.1);
    }

    .sets .hide,
    .sets .pophide {
        width: 0%;
        opacity: 0;
    }

    .closeBtn {
    position: absolute;
    font-size: 26px;
    font-weight: 400;
    right: 25px;
    top: 25px;
    color: white;
    transition: 0.5s linear;
    padding: 8px 15px;
    border-radius: 5px;
    background: #2a7d2e00;
    outline-offset: -6px;
        
    }

    .closeBtn:hover {
        cursor: pointer;
        background: white;
        color: black;
        
    }

    .openDiv {
        width: 100%;
        height: 100vh;
        background: #000000e7;
        position: fixed;
        top: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        left: 0;
        z-index: 9999;
    }

    .imgPreview {
        width: 70%;
        object-fit: scale-down;
        max-height: 40vw;
        height: auto;
       
    }
     .prevButton,
      .nextButton{
      position: absolute;
     top: 50%;
   
     transform: translateY(-42%);
    cursor: pointer;
    z-index: 1;
          
      }
       .prevButton{
            left:10%; 
       }
        .nextButton{
              right:10%
        }
    .prevButton,
    .nextButton {
       background: #fff;
    transition: 1s linear;
     width: 40px;
    height: 40px;
    font-size: 18px;
    border: none;
    color: #000;
    border-radius: 40px;
    border: 1px solid white;
    margin: 10px;
    }

    .prevButton:hover,
    .nextButton:hover {
        background: #f3cf9e;
        color: #000;
    }

    /* resposive CSS Code */

    @media (max-width: 1199px ){
        .section-padding {
            padding-top: 70px;
        }
    }

    @media (max-width: 991px) {
        .section-padding {
            padding-top: 50px;
        }
    }

    @media (max-width: 767px) {
        .title {
            font-size: 36px;
        }

        .gallery img {
            margin: 8px 8px;
            width: 145px;
        }

        .closeBtn {
            padding: 6px 12px;
        }

        .prevButton,
        .nextButton {
           width: 30px;
    height: 30px;
    font-size: 13px;
        }
    }

    @media (max-width: 540px) {
        .section-padding {
            padding-top: 30px;
        }

        .gallery img {
            margin: 8px 6px;
            width: 135px;
        }

        .closeBtn {
            font-size: 16px;
            border-radius: 5px;
        }

        .prevButton,
        .nextButton {
          width: 30px;
    height: 30px;
    font-size: 13px;
        }

        .imgPreview {
            width: 90%;
            max-height: 50vh;
            height: auto;
           
        }

    }
 
      .desktop-view {
        display: block !important;
    }

    .mobile-view {
        display: none !important;
    }

    @media (max-width:567px) {


        .desktop-view {
            display: none !important;
        }

        .mobile-view {
            display: block !important;
        }

        .mobile-view .page-title-area {
            padding-top: 0px !important;
        }

        .mobile-view .page-title-area .page-title-inner h1.page-title {
            font-size: 18px !important;

            padding: 3.5rem 0rem !important;
            text-align: center !important;
        }

        .mobile-view .gd-breadcrumb {
            background: #2a7d2e;
            text-align: center;
            font-size: 15px !important;
            color: #e3e3e3 !important;
            font-weight: 500;
            border-top: 1px dashed #fff;
            border-bottom: 1px dashed #fff;
            font-family: "Roboto", sans-serif;
        }

        .mobile-view .bg_cover {
            background-size: 100% 100% !important;

        }
    }

</style>
@section('content')
    <!--====== Start Page-title-area section ======-->
    <section class="page-title-area text-white bg_cover desktop-view" style="background-image: url(assets/images/gallery-header-img.jpg);">
        <div class="container">
            <!--======  Page-title-Inner ======-->
            <div class="page-title-inner text-center">
                <h1 class="page-title">Gallery </h1>
                <div class="gd-breadcrumb">
                    <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home</a></span>
                    <span class="separator"></span>
                    <span class="breadcrumb-entry active">Gallery </span>
                </div>
            </div>
        </div>
    </section><!--====== End Page-title-area section ======-->
    <section class="mobile-view"> <section class="page-title-area text-white bg_cover" style="background-image: url(assets/images/gallery-header-img.jpg);">
        <div class="container">
            <!--======  Page-title-Inner ======-->
            <div class="page-title-inner text-center">
                <h1 class="page-title">Gallery </h1>
               
            </div>
        </div>
    </section>
    <div class="gd-breadcrumb">
                    <span class="breadcrumb-entry"><a href="{{ url('/') }}">Home | </a></span>
                    <span class="separator"></span>
                    <span class="breadcrumb-entry active">Gallery </span>
                </div></section>

    @php

    $galleries = App\Models\Gallery::get();

    @endphp

    <div class="section-padding gallery-section" id="gallery">
        <div class="container-fluid">
            <div id="btncontainer" class="filter">
                <a class="btn btn-active" href="#all">All</a>
                <a class="btn" href="#Events">Events</a>
                <a class="btn" href="#Celebrations">Celebrations</a>
                <!-- Add more hardcoded categories as needed -->
            </div>
    
            <!-- Gallery Section Start -->
    
            <div class="gallery sets">
                @foreach($galleries as $gallery)
                    <a class="all {{ $gallery->category }}">
                        <img class="imgs" src="{{ asset('images/' . $gallery->image) }}" alt="{{ $gallery->category }}" />
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    



@endsection

@section('scripts')
    @parent
    <script type="text/javascript">
    
    $(".filter a").click(function (e) {
        e.preventDefault();
        var a = $(this).attr("href");
        a = a.substr(1);
        $(".sets a").each(function () {
          if (!$(this).hasClass(a) && a != ""){ 
          $(this).addClass("hide");
          }
          else 
          {
          $(this).removeClass("hide");
          }
          
        });

    

// Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("btncontainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        var current = document.getElementsByClassName("btn-active");
        current[0].className = current[0].className.replace(" btn-active", "");
        this.className += " btn-active";

    }
});

  var imgs = document.querySelectorAll(".imgs");
    
    console.log(imgs);

      let count;
      imgs.forEach((img, index) => {
        img.addEventListener("click", function (e) {
            imgs = document.querySelectorAll(".gallery.sets > a:not(.hide) .imgs");
          console.log('after filtering',imgs);
          if (e.target == this) {
            count = index;
            let openDiv = document.createElement("div");
            let imgPreview = document.createElement("img");
            let butonsSection = document.createElement("div");
            butonsSection.classList.add("butonsSection");
            let closeBtn = document.createElement("button");
            let nextBtn = document.createElement("button");
            let prevButton = document.createElement("button");
            prevButton.innerHTML = "<i class='fa fa-arrow-left'></i>";
            nextBtn.innerHTML = "<i class='fa fa-arrow-right'></i>";

            nextBtn.classList.add("nextButton");
            prevButton.classList.add("prevButton");
            nextBtn.addEventListener("click", function () {
              if (count >= imgs.length - 1) {
                count = 0;
              } else {
                count++;
              }

              imgPreview.src = imgs[count].src;
            });

            prevButton.addEventListener("click", function () {
              if (count === 0) {
                count = imgs.length - 1;
              } else {
                count--;
              }

              imgPreview.src = imgs[count].src;
            });

            closeBtn.classList.add("closeBtn");
            closeBtn.innerHTML = "<i class='fa fa-times' ></i>";
            closeBtn.addEventListener("click", function () {
              openDiv.remove();
            });

            imgPreview.classList.add("imgPreview");
            imgPreview.src = this.src;

            butonsSection.append(prevButton, nextBtn);
            openDiv.append(imgPreview, butonsSection, closeBtn);

            openDiv.classList.add("openDiv");

            document.querySelector("body").append(openDiv);
          }
        });
      });
    </script>
@endsection
