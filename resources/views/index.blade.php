@extends('layouts.main-home')
@section('container')
<section class="hero-section">
  <div class="container mx-auto">
    <div class="xl:grid xl:grid-cols-12">
      <div class="xl:col-span-4" data-aos="fade-right" data-aos-duration="1500">
        <p class="text-[#BFBFBF] font-Poppins text-base sm:text-[24px] 2xl:text-base font-medium">
          @foreach ($genres->take(4) as $genre)
          {{ $genre->name }},
          @endforeach
        </p>
        <p class="pt-2 sm:text-[56px] md:text-[62px] lg:text-[86px] text-white font-Poppins text-[32px] font-bold xl:text-[44px] 2xl:text-[48px] xl:font-semibold">Demon Slayer :
          Kimetsu No Yaiba</p>
        <div class="hidden xl:flex xl:items-center xl:mt-[260px]">
          <p class="text-white font-Poppins text-[48px] font-semibold me-4">8,5</p>
          <div class="">
            <div class="flex items-center">
              <img src="/asset-home/star.svg" alt="">
              <img src="/asset-home/star.svg" alt="">
              <img src="/asset-home/star.svg" alt="">
              <img src="/asset-home/star.svg" alt="">
              <img src="/asset-home/star.svg" alt="">
            </div>
            <p class="text-[24px] font-Poppins font-light text-white mt-4">100 Review</p>
          </div> 
        </div>
      </div>
      <div data-aos="fade-up" data-aos-duration="2000" class="xl:col-span-4 mt-10 xl:mt-[100px] sm:justify-center sm:flex">
        <img class="img-hero" src="/asset-home/img-hero.svg" alt="">
      </div>
      <div data-aos="fade-left" data-aos-duration="1500" class="xl:col-span-4 xl:ms-5">
        <p class="sm:hidden xl:flex mt-10 xl:mt-0 text-base font-Poppins text-[#BFBFBF] font-medium xl:w-[auto] 2xl:w-[467px]">Forem ipsum dolor sit amet, consectetur lesgo adipiscing elit. Etiam eu turpis molestie, dictum est a mattis tellus. Sed dignissim, metus nec fringill risus sem Maecenas eget condimentum velit, sit amet feugiat lectus. torquent peros.
        </p>
        <div class="mt-10 flex xl:mt-[18px] sm:flex sm:justify-center xl:justify-start">
        <button class="bg-[#F90] w-[126px] h-[42px] text-black font-Poppins text-base font-semibold rounded-[5px]">Read Now</button>
        <button class="ms-[32px] flex w-[126px] h-[42px] items-center text-white text-basea font-Poppins font-medium"><img class="pe-2" src="/asset-home/book.svg" alt=""> CH 204</button>
      </div>
      </div>
    </div>
  </div>
</section>

<section class="New-Released-Comic">
  <div class="container mx-auto">
    <p data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500px" data-aos-once="true" class="text-[#FEFEFE] font-Poppins xl:text-[40px] text-[30px] font-bold italic">New Rele<span class="text-[#F51717]">ased Comic</span></p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-11 gap-10">
      @foreach ($novels->take(4) as $novel)
      <div class="Card-1 w-full h-full text-center xl:text-start" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500" data-aos-once="true">
              <a href="/novels/{{ $novel->slug }}">
              <img class="w-full" src="{{ asset('storage/' . $novel->image) }}" alt="">
              <div class="">
                <a href="#" class="text-[#E8E8E8] font-Poppins text-[32px] xl:text-[24px] font-bold pt-1">{{ $novel->title }}</a>
                <p class="text-[#A9A9A9] text-base font-Poppins font-normal">{{ $novel->genre->name }}</p>
                <div class="flex pt-1 items-center xl:justify-start justify-center">
                  <img src="/asset-home/star.svg" alt="">
                  <p class="text-[16px] font-Poppins text-white font-semibold ms-2">{{  $novel->averageRating($novel->id) }} / 5.0</p>
                </div>
              </div>
            </a>
            </div>
            @endforeach

    </div>
  </div> 
</section>

<section class="Genre-list">
  <div class="container mx-auto">
    <p class="text-[#FEFEFE] font-Poppins text-[40px] italic font-bold text-center">Explore By Interest</p>
    <div class="grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 grid gap-10 mt-[44px] place-items-center">
    @foreach ($genres->take(7) as $genre)  
      <div style="background: url('/asset-home/all-genre.svg')" class="bg-[url(/asset-home/goku-bg.svg)] bg-[#B12C3F] w-[225px] h-[350px] rounded-[12px] flex flex-col justify-between">
        <p class="px-[16px] py-[16px] text-white font-Poppins text-[44px] font-medium italic">{{ $genre->name }}</p>
        <div class="mb-[20px]">
          <p class="text-white font-Poppins text-base font-semibold pb-[16px] px-[16px]">Feel the tension during fighting scene</p>
        </div>
      </div>
    @endforeach

      <div style="background: url('/asset-home/all-genre.svg')" class="bg-[url(/asset-home/all-genre.svg)]/ bg-[#B12C3F] w-[225px] h-[350px] rounded-[12px]">
        <p class="px-[16px] py-[16px] text-white font-Poppins text-[24px] font-medium italic text-center">See all genres</p>
      </div>

    </div>      
  </div>
</section>

<section class="Popular-Comics">
  <div class="container mx-auto">
    <p data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500px" data-aos-once="true" class="text-[#FEFEFE] font-Poppins xl:text-[40px] text-[30px] font-bold italic text-center xl:text-start">Popular<span class="text-[#F51717]">Comics</span></p>
    <div class="grid place-items-center xl:place-items-start grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 mt-11 gap-10">
    @foreach ($novels->take(5) as $novel)
    <div class="Card-1 w-[212px] h-[310px]" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500" data-aos-once="true">
      <a href="/novels/{{ $novel->slug }}">
        <img class="w-[212px] h-[310px]" src="{{ asset('storage/' . $novel->image) }}" alt="">
      </a>
    </div>
    @endforeach

    </div>

  </div>  
</section>

<section class="Contact-Us" id="contact">
  <div class="container mx-auto">
    <div class="xl:grid xl:grid-cols-12">
      <div class="col-span-6">
        <p class="text-white text-[52px] xl:text-[64px] font-extrabold italic">Updated <span class="text-[#F51717]">Everyday</span>
          Only at Komiweb</p>
          <p class="text-white font-Poppins text-xl font-medium mt-4 xl:w-[594px]">Comic are always updated at 10 am and there is a notification if the comic will be updated</p>
          <p class="text-white font-Poppins text-[24px] font-extrabold mt-4">Daily Update Manga</p>
          <div class="bg-[#1F1F1F] w-full xl:w-[623px] h-[84px] flex justify-start items-center rounded-[48px] mt-6">
            <div class="flex justify-between items-center w-[632px]">
              <div class="ms-[24px] xl:ms-[34px]">
                <input class="outline-none text-[#515151] font-Poppins text-[24px] font-normal bg-transparent" type="text" placeholder="Enter Your email address">
              </div>
              <div class="hidden xl:flex">
                <button class="me-[46px] rounded-[24px] bg-[#C72F44] text-white font-Poppins text-base font-semibold w-[140px] h-[45px]">Get Notified</button>
              </div>
            </div>
          </div>
      </div>

      <div class="col-span-6 xl:ms-[200px] mt-10 xl:mt-0  justify-center xl:justify-start hidden xl:flex">
        <img class="" src="/asset-home/Popular-1.svg" alt="">
      </div>
      
    </div>
  </div>
</section>
<footer class="bg-black h-full pb-10 mt-[100px]">
  <div class="container mx-auto">
      <div class="grid grid-cols-1 xl:grid-cols-4 pt-[50px]">

          <div class="">
              <h1 class=""><img src="/asset/Logo.svg" alt=""></h1>
              <div class="text-white text-base font-Poppins font-normal space-y-[24px] pt-[24px]">
                  <p class="flex items-center"><img class="pr-2" src="/asset/location-footer.svg" alt="">We have built our reputation as true local area experts.</p>
              </div>
              <p class="text-white text-[20px] font-medium pt-[24px]">Newsletter</p>
              <div class="flex items-center">
                <input placeholder="input Your Email" class="w-[351px] ps-3 h-[42px] text-[#828282] font-Poppins text-base font-normal bg-white mt-3"></input>
                <button class="w-[88px] h-[42px] bg-[#054C73] mt-[12px] flex justify-center items-center text-base text-white font-medium">Send</button>
              </div>
          </div>

          <div class="xl:ps-[144px]">
              <h1 class="text-white font-Poppins text-[20px] font-semibold pt-5 xl:pt-0">Services</h1>
              <div class="text-white text-base font-normal space-y-[16px] pt-[24px]">
                  <p>About us</p>
                  <p>Terms & Conditions</p>
                  <p>Privacy & Policy</p>
              </div>
          </div>

          <div class="xl:ps-[80px]">
              <h1 class="text-white font-Poppins text-[20px] font-semibold pt-5 xl:pt-0">Community</h1>
              <div class="text-white text-base font-normal space-y-[16px] pt-[24px]">
                  <p>Find agents</p>
                  <p>Lifestyle</p>
                  <p>Legal notic</p>
              </div>
          </div>

          <div class="">
              <h1 class="text-white font-Poppins text-[20px] font-semibold pt-5 xl:pt-0">Social media</h1>
              <div class="flex items-center pt-[24px] gap-[16px]">
                 <img src="/asset/ig.svg" alt="">
                 <img src="/asset/yt.svg" alt="">
                 <img src="/asset/fb.svg" alt="">
              </div>
          </div>

      </div>
  </div>
</footer>
@endsection