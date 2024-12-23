<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wood Product Shop!</title>
    <!--Tailwind javascript link-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--icon links-->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!--Font awesome icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="navbar" class="sticky top-0 z-50">

    </div>
    <header>
        <div
            class="justify-items-center lg:flex space-y-6  py-8 bg-white lg:p-5 lg:max-w-6xl lg:mx-auto lg:justify-between lg:items-center">
            <div>
                <img src="http://wp1.themexlab.com/newwp/woodworks/wp-content/uploads/2017/01/logo.png"
                    alt="woodworks logo">
            </div>
            <div class="md:flex md:space-y-0 lg:flex space-y-6 lg:space-y-0 gap-x-12">
                <div class="flex items-center">
                    <ion-icon class="text-3xl  font-bold text-red-700" name="location-outline"></ion-icon>
                    <div class="pl-2">
                        <h1 class="font-semibold text-base">STRUCTURE AVENUE</h1>
                        <P class="text-sm text-gray-500">Jamuna Future Park, Dhaka 1212</P>
                    </div>
                </div>
                <div class="flex items-center">
                    <ion-icon class="text-3xl  font-bold text-red-700" name="globe-outline"></ion-icon>
                    <div class="pl-2">
                        <p class="font-semibold text-base">+8801865267895</p>
                        <p class="text-sm text-gray-500">Email:joybaidyabd@gmail.com</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <ion-icon class="text-3xl  font-bold text-red-600" name="time-outline"></ion-icon>
                    <div class="pl-2">
                        <p class="font-semibold text-base">WORKING HOURS</p>
                        <p class="text-sm text-gray-500">Mon-Sat:09.00am to 18.00pm</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
   
    <section>
        <div class="w-full mx-auto relative overflow-hidden rounded-lg">
            <div id="slider" class="flex slider-transition duration-500 ease-in-out">
                <div
                    class="w-full flex-shrink-0 h-[300px] md:h-[400px] lg:h-[500px] bg-cover bg-center bg-no-repeat bg-[url('https://hatil-image.s3.ap-southeast-1.amazonaws.com/HomePageImage/Dining_16x9_Jan24_Low.jpg')]">
                    <div
                        class="text-center mt-16 md:mt-24 lg:mt-40 bg-black bg-opacity-80 max-w-2xl mx-auto p-4 md:p-5 rounded-lg">
                        <h1 class="font-bold text-xl md:text-2xl lg:text-3xl text-white">Made for creating tasty memories
                        </h1>
                        <a class="pt-2 md:pt-3 text-white font-medium text-lg md:text-xl lg:text-2xl hover:text-orange-600"
                            href="#">Bundle of satisfaction</a>
                    </div>
                </div>
                <div
                    class="w-full flex-shrink-0 h-[300px] md:h-[400px] lg:h-[500px] bg-cover bg-center bg-[url('https://hatil-image.s3.ap-southeast-1.amazonaws.com/HomePageImage/Living_16x9_Jan24_Low.jpg')]">
                    <div
                        class="text-center mt-16 md:mt-24 lg:mt-40 bg-black bg-opacity-85 max-w-2xl mx-auto p-4 md:p-5 rounded-lg">
                        <h1 class="font-bold text-xl md:text-2xl lg:text-3xl text-white">Sets you as a trend</h1>
                        <h2 class="pt-2 md:pt-4 font-medium text-lg md:text-2xl lg:text-3xl text-white">Aesthetically
                            stylish setter</h2>
                    </div>
                </div>
                <div
                    class="w-full flex-shrink-0 h-[300px] md:h-[400px] lg:h-[500px] bg-cover bg-center bg-[url('https://hatil-image.s3.ap-southeast-1.amazonaws.com/HomePageImage/Bed_16x9_Jan24_Low.jpg')]">
                    <div
                        class="text-center mt-16 md:mt-24 lg:mt-40 bg-black bg-opacity-80 max-w-2xl mx-auto p-4 md:p-5 rounded-lg">
                        <h1 class="font-bold text-xl md:text-2xl lg:text-3xl text-white">Compliments your lifestyle</h1>
                        <a class="pt-2 md:pt-3 text-white font-medium text-lg md:text-xl lg:text-2xl hover:text-orange-600"
                            href="#">The expression of text</a>
                    </div>
                </div>
            </div>
            <button id="prevBtn"
                class="absolute top-1/2 left-2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 md:p-3 rounded-full hover:bg-opacity-75 z-10">
                &lt;
            </button>
            <button id="nextBtn"
                class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-2 md:p-3 rounded-full hover:bg-opacity-75 z-10">
                &gt;
            </button>
    
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="indicator w-2 h-2 md:w-3 md:h-3 bg-white rounded-full" data-index="0"></button>
                <button class="indicator w-2 h-2 md:w-3 md:h-3 bg-white opacity-50 rounded-full" data-index="1"></button>
                <button class="indicator w-2 h-2 md:w-3 md:h-3 bg-white opacity-50 rounded-full" data-index="2"></button>
            </div>
        </div>
    </section>

    <section class="mt-16 md:mt-24">
        <h1 class="text-center text-2xl md:text-3xl lg:text-4xl text-orange-700 font-mono font-semibold">
            OUR SERVICE
        </h1>
    </section>
    <section class="flex flex-col max-w-6xl mx-auto justify-between space-x-4  md:flex-row px-6 md:px-12 lg:px-20 mt-12 md:mt-16">
        <div class="w-full md:w-1/2 lg:w-[296px]">
            <h1 class="font-bold text-xl md:text-2xl lg:text-3xl pt-8 md:pt-16 pb-4 md:pb-6">
                We Create The Art Of Stylish Living Stylishly
            </h1>
            <p class="text-sm md:text-base lg:text-lg text-slate-900 pb-4 md:pb-7">
                It is a long-established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
                of letters.
            </p>
            <div class="flex items-center">
                <i
                    class="fa-sharp-duotone fa-solid fa-phone text-orange-300 bg-orange-100 p-4 md:p-5 text-xl md:text-2xl lg:text-3xl rounded-full"></i>
                <div class="pl-4 md:pl-5">
                    <p class="font-bold text-base md:text-lg lg:text-xl">01865267895</p>
                    <p class="text-sm md:text-base">Call Us Anytime</p>
                </div>
            </div>
            <button
                class="bg-black text-white text-sm md:text-base p-3 md:p-4 rounded-lg lg:rounded-xl mt-4 md:mt-6 font-medium">
                Get Free Estimation &rarr;
            </button>
        </div>
        <div class="w-full md:w-1/2 mt-8 md:mt-0 flex justify-center md:justify-end">
            <img class="w-full max-w-md md:max-w-lg h-auto rounded-bl-[80px] md:rounded-bl-[120px] rounded-tr-[120px] md:rounded-tr-[220px]"
                src="https://png.pngtree.com/thumb_back/fw800/background/20230720/pngtree-contemporary-kitchen-interior-with-sleek-gray-cabinets-3d-render-image_3723445.jpg"
                alt="Contemporary Kitchen" />
        </div>
    </section>

    <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 mt-12 px-6 sm:px-12 lg:px-28">
        <div>
            <img class="rounded-tr-[40px] rounded-bl-[40px] w-full"
                src="https://wp1.themexlab.com/newwp/woodworks/wp-content/uploads/2017/01/1-1.jpg" alt="">
            <div class="pl-6 sm:pl-8 mt-4">
                <h1 class="font-semibold py-3 text-lg sm:text-xl">GENERAL CARPENTRY</h1>
                <p class="text-zinc-600 text-sm sm:text-base">Professionals work with a variety of materials, in various
                    settings—indoor and outdoor, urban and rural, far above ground...</p>
            </div>
        </div>
        <div>
            <img class="rounded-tr-[40px] rounded-bl-[40px] w-full"
                src="https://wp1.themexlab.com/newwp/woodworks/wp-content/uploads/2017/01/2-1.jpg" alt="">
            <div class="pl-6 sm:pl-8 mt-4">
                <h1 class="font-semibold py-3 text-lg sm:text-xl">GENERAL CARPENTRY</h1>
                <p class="text-zinc-600 text-sm sm:text-base">Professionals work with a variety of materials, in various
                    settings—indoor and outdoor, urban and rural, far above ground...</p>
            </div>
        </div>
        <div>
            <img class="rounded-tr-[40px] rounded-bl-[40px] w-full"
                src="https://wp1.themexlab.com/newwp/woodworks/wp-content/uploads/2017/01/3-1.jpg" alt="">
            <div class="pl-6 sm:pl-8 mt-4">
                <h1 class="font-semibold py-3 text-lg sm:text-xl">GENERAL CARPENTRY</h1>
                <p class="text-zinc-600 text-sm sm:text-base">Professionals work with a variety of materials, in various
                    settings—indoor and outdoor, urban and rural, far above ground...</p>
            </div>
        </div>
    </section>


    <div class="text-center mt-12">
        <a class="border border-orange-600 text-orange-600 px-6 py-2 font-medium hover:bg-orange-600 hover:text-white hover:font-bold"
            href="service.php">VIEW ALL SERVICE</a>
    </div>

    <section class="mt-12 bg-neutral-50 px-6 sm:px-12 lg:px-28">
        <div class="grid lg:grid-cols-2  gap-8 pt-10">
            <div class="px-0 sm:px-6">
                <h1 class="font-bold text-3xl sm:text-4xl pb-6 sm:pb-8">About Wood Product</h1>
                <div>
                    <p class="font-semibold text-xl sm:text-2xl pb-4">
                        Over 25 Years Experience in This Industry
                    </p>
                    <p class="text-zinc-600 text-sm sm:text-base pb-6">
                        Our commitment to bring professionalism, good service & trust to the home repair service &
                        maintenance business. We take immense pride in sending some of the most professional
                        handymen to your homes to fix things that aren't working. We have fixed over 5,50,000
                        houses in our little over 25 years of existence so far.
                    </p>
                    <p class="text-zinc-600 text-sm sm:text-base pb-6">
                        Since our meetings take place in your home or office, we’ll work with you to help visualize
                        a design solution that aligns with your taste and budget, to provide customers with a home
                        repair service experience that delights them and becomes their best handy-friend.
                    </p>
                </div>
                <div class="flex items-center pt-5 flex-col sm:flex-row">
                    <button class="mr-0 sm:mr-6 mb-4 sm:mb-0 border border-orange-600 text-orange-600 px-7 py-3 font-semibold 
                            hover:bg-orange-600 hover:text-white hover:font-bold">
                        <a href="about.php">MORE ABOUT US</a>
                    </button>
                    <div class="flex items-center">
                        <i class="fa-solid fa-phone text-orange-300 p-3 text-3xl rounded-full"></i>
                        <div class="ml-4">
                            <h1 class="font-semibold text-orange-700 text-lg sm:text-xl">Hotline</h1>
                            <p class="font-bold text-lg sm:text-xl">+8801781785236</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 sm:mt-0 sm:pl-6 lg:mt-24">
                <div class="relative w-full aspect-w-16 aspect-h-9">
                    <iframe class="w-full h-full md:h-[300px] rounded-lg"
                        src="https://www.youtube.com/embed/PYTPSLBo-Sc?si=BLCVDenMh52btj_O" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </section>


    <section class="mt-20">
        <!-- Heading Section -->
        <div class="text-center space-y-3 font-serif">
            <h1 class="font-bold text-4xl sm:text-5xl text-orange-600">Creations with Purpose</h1>
            <p class="font-normal text-xl sm:text-2xl text-zinc-600">Many choices based on your space</p>
        </div>

        <!-- Grid Section -->
        <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 px-6 sm:px-12 gap-8">

            <div>
                <img src="https://hips.hearstapps.com/hmg-prod/images/ashley-ferguson-interiors-kieran-reeves-photography-2-6638e9080dcfe.jpg?crop=0.8888888888888888xw:1xh;center,top&resize=1200:*"
                    alt="Bed Image" class="w-full lg:h-[280px] object-cover rounded shadow-xl">
                <div class="text-center mt-4">
                    <h1 class="py-2 font-bold text-2xl text-orange-800">Bed Room</h1>
                    <button
                        class="bg-orange-600 px-8 sm:px-16 py-2 rounded-lg text-white font-semibold text-lg sm:text-xl hover:bg-orange-400 hover:text-black">
                        <a href="bed.php">VIEW ALL</a>
                    </button>
                </div>
            </div>

            <div>
                <img src="https://cubicdesign.com.bd/wp-content/uploads/2022/04/otobi-office-table-2.jpg"
                    alt="Office Image" class="w-full lg:h-[280px] object-cover rounded shadow-xl">
                <div class="text-center mt-4">
                    <h1 class="py-2 font-bold text-2xl text-orange-800">Office Space</h1>
                    <button
                        class="bg-orange-600 px-8 sm:px-16 py-2 rounded-lg text-white font-semibold text-lg sm:text-xl hover:bg-orange-400 hover:text-black">
                        <a href="office.php">VIEW ALL</a>
                    </button>
                </div>
            </div>

            <div>
                <img src="https://furnitureconcepts.com/wp-content/uploads/2021/06/DSC5525-Web--1024x683.webp"
                    alt="Institutional Image" class="w-full lg:h-[280px] object-cover rounded shadow-xl">
                <div class="text-center mt-4">
                    <h1 class="py-2 font-bold text-2xl text-orange-800">Institutional Space</h1>
                    <button
                        class="bg-orange-600 px-8 sm:px-16 py-2 rounded-lg text-white font-semibold text-lg sm:text-xl hover:bg-orange-400 hover:text-black">
                        <a href="Institutional.php">VIEW ALL</a>
                    </button>
                </div>
            </div>

            <div>
                <img src="https://www.thespruce.com/thmb/ZqfUoFjPOAqtJBpzjDw-sxRdiNQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/modern-dining-room-ideas-4147451-hero-d6333998f8b34620adfd4d99ac732586.jpg"
                    alt="Dining Image" class="w-full lg:h-[280px] object-cover rounded shadow-xl">
                <div class="text-center mt-4">
                    <h1 class="py-2 font-bold text-2xl text-orange-800">Dining Space</h1>
                    <button
                        class="bg-orange-600 px-8 sm:px-16 py-2 rounded-lg text-white font-semibold text-lg sm:text-xl hover:bg-orange-400 hover:text-black">
                        <a href="dining.php">VIEW ALL</a>
                    </button>
                </div>
            </div>

            <div>
                <img src="https://lindyegalloway.com/wp-content/uploads/2019/10/lVY2QrOh-1-600x400.jpg"
                    alt="Living Room Image" class="w-full lg:h-[280px] object-cover rounded shadow-xl">
                <div class="text-center mt-4">
                    <h1 class="py-2 font-bold text-2xl text-orange-800">Living Space</h1>
                    <button
                        class="bg-orange-600 px-8 sm:px-16 py-2 rounded-lg text-white font-semibold text-lg sm:text-xl hover:bg-orange-400 hover:text-black">
                        <a href="living.php">VIEW ALL</a>
                    </button>
                </div>
            </div>
            <div>
                <img src="https://www.tomhowley.co.uk/wp-content/uploads/THKitchenCollections_02.jpg"
                    alt="Kitchen Image" class="w-full lg:h-[280px] object-cover rounded shadow-xl">
                <div class="text-center mt-4">
                    <h1 class="py-2 font-bold text-2xl text-orange-800">kitchen Space</h1>
                    <button
                        class="bg-orange-600 px-8 sm:px-16 py-2 rounded-lg text-white font-semibold text-lg sm:text-xl hover:bg-orange-400 hover:text-black">
                        <a href="kitchen.php">VIEW ALL</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

<section class="mt-24">
<h2 class="text-3xl font-bold text-center text-orange-600 mb-6 italic">What Our Clients Say</h2>
<div id="review-slider" class="relative overflow-hidden w-full h-auto">
  <div class="flex transition-transform duration-500" id="slides">
    <!-- Slide 1 -->
    <div class="min-w-full p-6 bg-white shadow-lg rounded-lg flex-shrink-0 flex flex-col items-center">
      <img class="h-[250px] w-[230px] rounded-md mb-4" src="joy.jpg" alt="Joy Baidya">
      <h3 class="text-xl font-semibold text-gray-700">Joy Baidya</h3>
      <p class="text-gray-500">Web Developer</p>
      <div class="flex mt-1">
        <span class="star text-yellow-500">&#9733;</span>
        <span class="star text-yellow-500">&#9733;</span>
        <span class="star text-yellow-500">&#9733;</span>
        <span class="star text-yellow-500">&#9733;</span>
        <span class="star text-gray-300">&#9734;</span>
      </div>
      <p class="mt-4 text-gray-600 text-center text-sm">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac velit elit."</p>
    </div>

    <!-- Slide 2 -->
    <div class="min-w-full p-6 bg-white shadow-lg rounded-lg flex-shrink-0 flex flex-col items-center">
      <img class="h-[250px] w-[230px] rounded-md mb-4" src="tamanna.jpg" alt="Tamanna">
      <h3 class="text-xl font-semibold text-gray-700">Jubira Tamanna</h3>
      <p class="text-gray-500">UI UX Designer.</p>
      <div class="flex mt-1">
        <span class="star text-yellow-500">&#9733;</span>
        <span class="star text-yellow-500">&#9733;</span>
        <span class="star text-yellow-500">&#9733;</span>
        <span class="star text-gray-300">&#9734;</span>
        <span class="star text-gray-300">&#9734;</span>
      </div>
      <p class="mt-4 text-gray-600 text-center text-sm">"Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi."</p>
    </div>

    <!-- Slide 3 -->
    <div class="min-w-full p-6 bg-white shadow-lg rounded-lg flex-shrink-0 flex flex-col items-center">
      <img class="h-[250px] w-[230px] rounded-md mb-4" src="saiful.jpg" alt="Saiful Islam">
      <h3 class="text-xl font-semibold text-gray-700">Saiful Islam</h3>
      <p class="text-gray-500">Freelancer</p>
      <div class="flex mt-1">
        <span class="star text-yellow-500">&#9733;</span>
        <span class="star text-yellow-500">&#9733;</span>
        <span class="star text-yellow-500">&#9733;</span>
        <span class="star text-yellow-500">&#9733;</span>
        <span class="star text-yellow-500">&#9733;</span>
      </div>
      <p class="mt-4 text-gray-600 text-center text-sm">"Duis aute irure dolor in reprehenderit in voluptate velit esse."</p>
    </div>
  </div>

  <!-- Navigation Buttons -->
  <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2 rounded-full">&#8592;</button>
  <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2 rounded-full">&#8594;</button>
</div>

</section>

    <section class="mt-20 px-10 sm:px-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="h-[400px] sm:h-[500px] md:h-[500px] lg:h-[500px] rounded-tr-[150px] rounded-bl-[150px] bg-cover bg-center"
                style="background-image: url('https://hatil-image.s3.ap-southeast-1.amazonaws.com/HomePageImage/Bed_960x1090_Jan24_Low.jpg');">
                <div class="p-6 sm:p-12 md:p-10 flex flex-col justify-center h-full">
                    <h1 class="font-bold text-2xl sm:text-2xl md:text-3xl lg:text-4xl font-sans text-white">
                        Designed to enhance your personification
                    </h1>
                    <button class="mt-4 font-semibold text-lg sm:text-xl md:text-2xl text-white underline">
                        <a href="#">Explore Now</a>
                    </button>
                </div>
            </div>

            <div class="h-[400px] sm:h-[500px] md:h-[500px] lg:h-[500px] rounded-tr-[150px] rounded-bl-[150px] bg-cover bg-center"
                style="background-image: url('https://hatil-image.s3.ap-southeast-1.amazonaws.com/Nop_Image/HATIL%20Bed%20Elegant-189.jpg');">
                <div class="p-6 sm:p-12 md:p-10 flex flex-col justify-center h-full">
                    <h1 class="font-bold text-2xl sm:text-2xl md:text-3xl lg:text-4xl font-sans text-white">
                        Innovative enough to styling according to convenience
                    </h1>
                    <button class="mt-4 font-semibold text-lg sm:text-xl md:text-2xl text-white underline">
                        <a href="#">Explore Now</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-20">
        <div class="flex items-center justify-between px-6 sm:px-12">
            <h1 class="font-normal text-3xl sm:text-4xl text-orange-600">
                Popular Furniture
            </h1>
            <ion-icon class="text-3xl sm:text-4xl text-orange-700" name="arrow-forward"></ion-icon>
        </div>
    </section>


    <section class="mt-12 px-6 sm:px-12 lg:px-20">
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            <div class="text-center">
                <img src="https://i5.walmartimages.com/seo/Modern-Upholstered-Loveseat-Sofa-ONE-PIX-Two-Seater-PU-Sofa-Tulip-Patterns-Couch-2-Dumpling-shaped-Pillows-Living-Room-Bedroom-Office-Pink_9c01b64d-8a09-4b9d-a381-f2b930da5c12.f86babe512409ac6df036c0ecd66fe09.jpeg?odnHeight=264&odnWidth=264&odnBg=FFFFFF"
                    alt="Sofa" class="w-full  lg:w-[200px] lg:h-[150px] object-cover rounded-2xl">
                <p class="mt-4 hover:text-orange-500 hover:font-bold"><a href="sofa.php">Sofa</a></p>
            </div>

            <div class="text-center">
                <img src="https://content.jdmagicbox.com/comp/chapra/q2/9999p6152.6152.181201171358.t6q2/catalogue/shiv-furniture-sahebganj-chapra-furniture-dealers-06vpj1d10f-250.jpg"
                    alt="Sofa with Divan" class="w-full lg:w-[200px] lg:h-[150px] object-cover rounded-2xl">
                <p class="mt-4 hover:text-orange-500 hover:font-bold"><a href="sofaWithDivan.php">Sofa with Divan</a>
                </p>
            </div>

            <div class="text-center">
                <img src="https://furnituredash.com/cdn/shop/products/PRA346_3.jpg?v=1714074248"
                    alt="Modular center Table" class="w-full lg:w-[200px] lg:h-[150px] object-cover rounded-2xl">
                <p class="mt-4 hover:text-orange-500 hover:font-bold"><a href="modularTable.php">Modular center
                        Table</a></p>
            </div>

            <div class="text-center">
                <img src="https://www.deshigreetings.com/public/uploads/all/UU9SrcZv67fdu3etrTS2OozRAMAvyJD6144v7NNh.jpg"
                    alt="Lobby Chair" class="w-full lg:w-[200px] lg:h-[150px] object-cover rounded-2xl">
                <p class="mt-4 hover:text-orange-500 hover:font-bold"><a href="lobbyChair.php">Lobby Chair</a></p>
            </div>

            <div class="text-center">
                <img src="https://www.hi-tech.com.bd/wp-content/uploads/2024/04/IMG-20240417-WA0010.jpg" alt="Dining"
                    class="w-full lg:w-[200px] lg:h-[150px] object-cover rounded-2xl">
                <p class="mt-4 hover:text-orange-500 hover:font-bold"><a href="dining.php">Dining</a></p>
            </div>
        </div>
    </section>

    <div id="footer">

    </div>
    
    <script src="javascript.js"></script>
    <script src="slider.js"></script>

    
</body>

</html>