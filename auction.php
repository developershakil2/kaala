

<?php  include_once("includes/head.php")?>

<body class="home-3">
    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->



    <!-- ===============// header section start here \\================= -->
    <?php  include_once("includes/header.php")?>
    <!-- ===============//header section end here \\================= -->







    <!-- ==========Page Header Section Start Here========== -->
    <section class="page-header-section style-1">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>NFT's Live Auction </h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">auction</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->


    <!-- ==========Auction Section start Here========== -->
    <section class="explore-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <div class="nft-filter d-flex flex-wrap align-items-center justify-content-center  gap-15">
                    <h3><i class="icofont-network-tower theme-color"></i> Live Auctions</h3>
                    <div class="form-floating">
                        <select class="form-select" id="catSelect" aria-label="Floating label select example">
                            <option selected>All Category</option>
                            <option value="1">Art</option>
                            <option value="2">Music</option>
                            <option value="3">Video</option>
                            <option value="3">Digital Anime</option>
                        </select>
                        <label for="catSelect">Select a Category</label>
                    </div>
                </div>
                <div class="nft-search">
                    <div class="form-floating nft-search-input">
                        <input type="text" class="form-control" id="nftSearch" placeholder="Search NFT">
                        <label for="nftSearch">Search NFT</label>
                        <button type="button"> <i class="icofont-search-1"></i></button>
                    </div>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="explore-wrapper">
                    <div class="row justify-content-center gx-4 gy-3">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="assets/images/seller/04.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Gucci Lucas</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="devteam/2246.png" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                            <h4><a href="item.php">#2246</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.05 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/01.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/01.gif" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="assets/images/seller/02.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Ecalo jers</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="devteam/2245.png" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                        <h4><a href="item.php">#2245</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.05 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    278</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/02.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/05.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="assets/images/seller/04.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Hola moc</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="devteam/2244.png" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                        <h4><a href="item.php">#2244</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.05 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    340</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/06.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="assets/images/seller/05.gif" alt="author-img"></a>
                                                    <h6><a href="author.html">Logicto pen</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="devteam/2243.png" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                        <h4><a href="item.php">#223</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.05 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    330</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/06.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/07.gif" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="assets/images/seller/09.png" alt="author-img"></a>
                                                    <h6><a href="author.html">unique lo</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part"><i class="icofont-flikr"></i></div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="devteam/2242.png" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                        <h4><a href="item.php">#2242</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.05 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    355</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="assets/images/seller/05.gif" alt="author-img"></a>
                                                    <h6><a href="author.html">Monica bel</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy"src="devteam/2241.png" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                        <h4><a href="item.php">#2241</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.05 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    60</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/08.gif" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/01.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="assets/images/seller/11.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Gucci L.</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="devteam/2240.png" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content"> <h4><a href="item.php">#2240</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.05 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/01.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/07.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="assets/images/seller/09.png" alt="author-img"></a>
                                                    <h6><a href="author.html">ptrax elm.</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="devteam/2239.png" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                        <h4><a href="item.php">#2239</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.05 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    930</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/06.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="assets/images/seller/05.gif" alt="author-img"></a>
                                                    <h6><a href="author.html">Logicto pen</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="devteam/2238.png" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                        <h4><a href="item.php">#2238</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.05 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    330</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/02.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/05.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="assets/images/seller/04.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Hola moc</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="devteam/2237.png" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                        <h4><a href="item.php">#2237</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.05 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    340</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/01.png" alt="author-img"></a>
                                                </li>
                                                <li class="single-author">
                                                    <a href="author.html"><img loading="lazy"
                                                            src="assets/images/seller/01.gif" alt="author-img"></a>
                                                </li>
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="assets/images/seller/02.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Ecalo jers</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="devteam/2236.png" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                        <h4><a href="item.php">#2236</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.05 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    278</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="nft-item">
                                <div class="nft-inner">
                                    <!-- nft top part -->
                                    <div class="nft-item-top d-flex justify-content-between align-items-center">
                                        <div class="author-part">
                                            <ul class="author-list d-flex">
                                                <li class="single-author d-flex align-items-center">
                                                    <a href="author.html" class="veryfied"><img loading="lazy"
                                                            src="assets/images/seller/04.png" alt="author-img"></a>
                                                    <h6><a href="author.html">Gucci Lucas</a></h6>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="more-part">
                                            <div class=" dropstart">
                                                <a class=" dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false"
                                                    data-bs-offset="25,0">
                                                    <i class="icofont-flikr"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><span>
                                                                <i class="icofont-warning"></i>
                                                            </span> Report </a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><span><i
                                                                    class="icofont-reply"></i></span> Share</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- nft-bottom part -->
                                    <div class="nft-item-bottom">
                                        <div class="nft-thumb">
                                            <img loading="lazy" src="devteam/2235.png" alt="nft-img">

                                            <!-- nft countdwon -->
                                            <ul class="nft-countdown count-down" data-date="July 05, 2022 21:14:01">
                                                <li>
                                                    <span class="days">34</span><span class="count-txt">D</span>
                                                </li>
                                                <li>
                                                    <span class="hours">09</span><span class="count-txt">H</span>
                                                </li>
                                                <li>
                                                    <span class="minutes">32</span><span class="count-txt">M</span>
                                                </li>
                                                <li>
                                                    <span class="seconds">32</span><span class="count-txt">S</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="nft-content">
                                        <h4><a href="item.php">#2235</a> </h4>
                                            <div class="price-like d-flex justify-content-between align-items-center">
                                                <p class="nft-price">Price: <span class="yellow-color">0.05 ETH</span>
                                                </p>
                                                <a href="#" class="nft-like"><i class="icofont-heart"></i>
                                                    230</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="load-btn mt-5">
                        <a href="#" class="default-btn move-bottom">
                            <span>Load More</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ==========Auction Section ends Here========== -->







    

    <?php  include_once("includes/footer.php")?>
<?php include_once("includes/script.php")?>