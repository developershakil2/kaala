

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
                        <h2>Item Details Page </h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Item Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Page Header Section Ends Here========== -->


    <!-- ==========Item Details Section start Here========== -->
    <div class="item-details-section padding-top padding-bottom">
        <div class="container">
            <div class="item-details-wrapper">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="item-desc-part">
                            <div class="item-desc-inner">
                                <div class="item-desc-thumb">
                                    <img src="assets/images/nft-item/item-details.gif" alt="item-img">
                                </div>
                                <div class="item-desc-content">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-details-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-details" type="button" role="tab"
                                                aria-controls="nav-details" aria-selected="true">Details</button>
                                            <button class="nav-link" id="nav-bids-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-bids" type="button" role="tab"
                                                aria-controls="nav-bids" aria-selected="false">Bids</button>
                                            <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-history" type="button" role="tab"
                                                aria-controls="nav-history" aria-selected="false">History</button>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="details-tab tab-pane fade show active" id="nav-details"
                                            role="tabpanel" aria-labelledby="nav-details-tab">

                                            <p>This is the second batch of Cybertino Genesis NFTs for early adopters and
                                                is 1 of 5. This Genesis NFT will be
                                                interactive: hold and wait for future exclusive benefits and early
                                                access to new drops!</p>
                                            <div class="author-profile d-flex flex-wrap align-items-center gap-15">
                                                <div class="author-p-thumb">
                                                    <a href="author.html"><img src="assets/images/seller/02.gif"
                                                            alt="author-img "></a>
                                                </div>
                                                <div class="author-p-info">
                                                    <p class="mb-0">Owner</p>
                                                    <h6><a href="author.html">Alex joe</a></h6>
                                                </div>
                                            </div>
                                            <ul class="other-info-list">
                                                <li class="item-other-info">
                                                    <div class="item-info-title">
                                                        <h6>Contact Address</h6>
                                                    </div>
                                                    <div class="item-info-details">
                                                        <div id="cryptoCode" class="crypto-page">
                                                            <input id="cryptoLink"
                                                                value="0x1dDB2C0897daF134545641545462E71fdD2dbDC0eB3a9Ec"
                                                                readonly>
                                                            <div id="cryptoCopy" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Copy Address">
                                                                <span class="copy-icon">
                                                                    <i class="icofont-ui-copy" aria-hidden="true"
                                                                        data-copytarget="#cryptoLink"></i>
                                                                </span>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li class="item-other-info">
                                                    <div class="item-info-title">
                                                        <h6>Token ID</h6>
                                                    </div>
                                                    <div class="item-info-details">
                                                        <p>0005515456416</p>
                                                    </div>

                                                </li>
                                                <li class="item-other-info">
                                                    <div class="item-info-title">
                                                        <h6>Blockchain</h6>
                                                    </div>
                                                    <div class="item-info-details">
                                                        <p>Ethereum (ETH)</p>
                                                    </div>
                                                </li>

                                                <li class="item-other-info">
                                                    <div class="item-info-title">
                                                        <h6>Size</h6>
                                                    </div>
                                                    <div class="item-info-details">
                                                        <p>1000 x 1000 px.VIDEO (19.85MB)</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bids-tab tab-pane fade" id="nav-bids" role="tabpanel"
                                            aria-labelledby="nav-bids-tab">
                                            <span><i class="icofont-law-order"></i></span>
                                            <p>No active bids yet. Be the first to make a bid!</p>
                                        </div>
                                        <div class="history-tab tab-pane fade" id="nav-history" role="tabpanel"
                                            aria-labelledby="nav-history-tab">
                                            <ul class="item-histo-list">
                                                <li class="histo-item">
                                                    <p>Created by <a href="author.html">@alex joe</a></p>
                                                    <time>2021-08-04 23:05:07</time>
                                                </li>
                                                <li class="histo-item">
                                                    <p>Listed by <a href="author.html">@alex joe</a></p>
                                                    <time>2021-08-04 20:05:07</time>
                                                </li>
                                                <li class="histo-item">
                                                    <p>Owned by <a href="author.html">@alex joe</a></p>
                                                    <time>2021-08-04 22:05:07</time>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item-buy-part">
                            <div class="nft-item-title">
                                <h3>#003 da Silly Cat wid baLoon NFT: size 1/50</h3>
                                <div class="share-btn">
                                    <div class=" dropstart">
                                        <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false" data-bs-offset="25,0">
                                            <i class="icofont-share-alt"></i>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#"><span>
                                                        <i class="icofont-twitter"></i>
                                                    </span> Twitter </a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><span><i
                                                            class="icofont-telegram"></i></span> Telegram</a></li>
                                            <li><a class="dropdown-item" href="#"><span><i
                                                            class="icofont-envelope"></i></span> Email</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details-countdown">
                                <h4>Ends In:</h4>
                                <ul class="item-countdown-list count-down" data-date="June 05, 2022 21:14:01">
                                    <li>
                                        <span class="days">34</span><span class="count-txt">Days</span>
                                    </li>
                                    <li>
                                        <span class="hours">09</span><span class="count-txt">Hours</span>
                                    </li>
                                    <li>
                                        <span class="minutes">32</span><span class="count-txt">Mins</span>
                                    </li>
                                    <li>
                                        <span class="seconds">32</span><span class="count-txt">Secs</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="item-price">
                                <h4>Price</h4>
                                <p><span><i class="icofont-coins"></i> 2.29 ETH
                                    </span>($ 6,227.15)</p>
                            </div>
                            <div class="buying-btns d-flex flex-wrap">
                                <a href="wallet.html" class="default-btn move-right"><span>Buy Now</span> </a>
                                <a href="wallet.html" class="default-btn move-right"><span>Place a Bid</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==========Item Details Section ends Here========== -->












    
    <?php  include_once("includes/footer.php")?>
<?php include_once("includes/script.php")?>