@extends('layouts.storefront.layout')

@section('title','Home')

@section('main')




<form name="clientForm" action="https://www.bdstall.com/advancedSearch//" method="post" enctype="multipart/form-data">

    <input type="hidden" name="DepartmentID" value="-1">
    <input type="hidden" name="CategoryID" value="-1">
    <input type="hidden" name="ItemTypeID" value="-1">
    <input type="hidden" name="minPrice" value="">
    <input type="hidden" name="maxPrice" value="">
    <input type="hidden" name="StallID" value="-1">
    <input type="hidden" name="BrandID" value="-1">

    <div class="container">

        <div class="row">
            <div class="breadcum s-bottom">

                <a class="breadcum-link" href="{{route('index')}}">Home</a> -&gt; <a
                    href="https://www.bdstall.com/stallList/" class="breadcum-link-clk">Stall List</a>
            </div>
        </div>

        <div class="body-header">
            <h1>Megamart Office Equipment BD</h1>
        </div>

        <div class="row">

            <div class="three columns stall-details">

                <a href="https://www.bdstall.com/stallDetail/index/864/"><img
                        src="https://www.bdstall.com/asset/stall-image/big_1410.jpg" alt="Megamart Office Equipment BD"
                        title="Megamart Office Equipment BD"></a>

                <label class="b-top">Stall No - 864</label>

                <p>

                    28/1/C, Toyenbee Circular Road<br>

                    Motijheel, Dhaka,
                    Bangladesh<br>

                    Nazrul Islam Bhuyan, Kazi safi uddin ahmed papon, Md.Mizanur Rahman<br>

                </p>

                <!--branch info-->




                <div class="product-desc-phone b-bottom">

                    <div class="row s-bottom" style="width:100%">
                        <div class="u-pull-left" style="width:5em">Hotline1</div>
                        <div class="u-pull-left">
                            <a href="tel:01819299877">
                                <img src="https://www.bdstall.com/asset/static-image/phone-icon.png">
                                0181-929-9877 </a>
                        </div>
                    </div>

                    <div class="row s-bottom" style="width:100%">
                        <div class="u-pull-left" style="width:5em">Hotline2</div>
                        <div class="u-pull-left">
                            <a href="tel:01711387435">
                                <img src="https://www.bdstall.com/asset/static-image/phone-icon.png">
                                0171-138-7435 </a>
                        </div>
                    </div>

                </div>



            </div>

            <div class="nine columns">


                <!--       <div class="row">

            <a href="https://www.bdstall.com/details/toshiba-e-studio-2303am-digital-all-in-one-photocopier-40977/">

                <div class="stall-product-box">
                <div class="product-box-img">
                    <img src="https://www.bdstall.com/asset/product-image/big_74362.jpg">
                </div>
                <div class="product-box-item-type">
                     Toshiba e-Studio 2303AM...                    </div>

                <div class="product-box-price">
                     ৳ 44,000                    </div>
            </div>

            </a>


            <a href="https://www.bdstall.com/details/toshiba-e-studio-2523a-desktop-copier-49796/">

                <div class="stall-product-box">
                <div class="product-box-img">
                    <img src="https://www.bdstall.com/asset/product-image/big_95047.jpg">
                </div>
                <div class="product-box-item-type">
                     Toshiba e-Studio 2523A...                    </div>

                <div class="product-box-price">
                     ৳ 39,000                    </div>
            </div>

            </a>


            <a href="https://www.bdstall.com/details/toshiba-e-studio-2303a-compact-23-ppm-photostat-machine-28733/">

                <div class="stall-product-box">
                <div class="product-box-img">
                    <img src="https://www.bdstall.com/asset/product-image/big_47834.jpg">
                </div>
                <div class="product-box-item-type">
                     Toshiba e-Studio 2303A...                    </div>

                <div class="product-box-price">
                     ৳ 45,000                    </div>
            </div>

            </a>


            <a href="https://www.bdstall.com/details/toshiba-e-studio-2809a-black-and-white-28-ppm-photocopier-28735/">

                <div class="stall-product-box">
                <div class="product-box-img">
                    <img src="https://www.bdstall.com/asset/product-image/big_47832.jpg">
                </div>
                <div class="product-box-item-type">
                     Toshiba e-Studio 2809A...                    </div>

                <div class="product-box-price">
                     ৳ 80,000                    </div>
            </div>

            </a>

        </div>-->

                <div class="row"><span class="page-stat">Item 1-20 of 57</span></div>

                <div class="m-top">
                    <script language="javascript">
                        function addListing(listingID) {
                            url = 'https://www.bdstall.com/searchItemListing/addListingToMyAccount//' + listingID + '/';
                            http.open("POST", url, true);
                            http.onreadystatechange = showResult;
                            http.send(null);
                        }

                        function showResult() {
                            if (http.readyState == 4) {
                                if (http.responseText == "") {
                                    return;
                                } else {
                                    if (http.responseText == "error") {
                                        alert("You have to login to save");
                                        return;
                                    } else if (http.responseText == "failed") {
                                        alert("Sorry!! failed to save , please try again");
                                        return;
                                    } else if (http.responseText == "success") {
                                        alert("This item has been saved successfully");
                                        return;
                                    } else if (http.responseText == "alreadySave") {
                                        alert("This item is already saved in your account");
                                        return;
                                    }

                                } // end of end

                            }
                        }

                    </script>

                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/electronic-2108-uv-mg-cash-counting-machine-52244/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_102424.jpg"
                                            alt="Electronic 2108 UV / MG Cash Counting Machine"
                                            title="Electronic 2108 UV / MG Cash Counting Machine">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 12,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/electronic-2108-uv-mg-cash-counting-machine-52244/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a
                                href="https://www.bdstall.com/details/electronic-2108-uv-mg-cash-counting-machine-52244/">Electronic
                                2108 UV / MG Cash Counting Machine</a>

                            <p>Automatic start / stop / clearing system, UV and MG detection of fake bills or currency,
                                count bills with 100%...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/toshiba-t-2323c-genuine-black-toner-cartridge-50226/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_96451.jpg"
                                            alt="Toshiba T-2323C Genuine Black Toner Cartridge"
                                            title="Toshiba T-2323C Genuine Black Toner Cartridge">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 4,500</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/toshiba-t-2323c-genuine-black-toner-cartridge-50226/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a
                                href="https://www.bdstall.com/details/toshiba-t-2323c-genuine-black-toner-cartridge-50226/">Toshiba
                                T-2323C Genuine Black Toner Cartridge</a>

                            <p>Original toner, applicable models: e-studio 2822AM / 2523A / 2523AD / 2323AM / 2823AM /
                                2829A, large capacity 338g /...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/toshiba-t-5018p-genuine-black-copier-toner-50195/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_96328.jpg"
                                            alt="Toshiba T-5018P Genuine Black Copier Toner"
                                            title="Toshiba T-5018P Genuine Black Copier Toner">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 8,500</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/toshiba-t-5018p-genuine-black-copier-toner-50195/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/toshiba-t-5018p-genuine-black-copier-toner-50195/">Toshiba
                                T-5018P Genuine Black Copier Toner</a>

                            <p>Monochrome laser technology, 43900 pages @ 5% copy capacity, compatible with E-Studio
                                2518A / 3018A / 3518A / 4518A...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/toshiba-t-5018c-original-copier-toner-50194/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_96309.jpg"
                                            alt="Toshiba T-5018C Original Copier Toner"
                                            title="Toshiba T-5018C Original Copier Toner">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 6,500</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/toshiba-t-5018c-original-copier-toner-50194/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/toshiba-t-5018c-original-copier-toner-50194/">Toshiba
                                T-5018C Original Copier Toner</a>

                            <p>Black copy color, monochrome laser technology, 40000 pages yield copy capacity,
                                compatible with 2518A / 3018A / 3518A /...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/yicing-ev870-automatic-banknote-counter-50187/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_96310.jpg"
                                            alt="Yicing EV870 Automatic Banknote Counter"
                                            title="Yicing EV870 Automatic Banknote Counter">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 120,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/yicing-ev870-automatic-banknote-counter-50187/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/yicing-ev870-automatic-banknote-counter-50187/">Yicing
                                EV870 Automatic Banknote Counter</a>

                            <p>Works in various counting speed settings ranging from 3 ~ 4.5 second per 100 sheet,
                                maximum 200 sheet capacity, LED...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/toshiba-t-3008c-genuine-photocopier-toner-49863/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_95268.jpg"
                                            alt="Toshiba T-3008C Genuine Photocopier Toner"
                                            title="Toshiba T-3008C Genuine Photocopier Toner">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 5,500</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/toshiba-t-3008c-genuine-photocopier-toner-49863/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/toshiba-t-3008c-genuine-photocopier-toner-49863/">Toshiba
                                T-3008C Genuine Photocopier Toner</a>

                            <p>Black and white color with laser technology, e-studio 2508A / 3008A / 3508A / 4508A /
                                5008A photocopier supported,...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/toshiba-e-studio-2523a-desktop-copier-49796/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_95047.jpg"
                                            alt="Toshiba e-Studio 2523A Desktop Copier"
                                            title="Toshiba e-Studio 2523A Desktop Copier">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 39,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/toshiba-e-studio-2523a-desktop-copier-49796/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/toshiba-e-studio-2523a-desktop-copier-49796/">Toshiba
                                e-Studio 2523A Desktop Copier</a>

                            <p>Standard USB printing, one touch double copy, standard USB color scanning, support for
                                custom paper size, scanning...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a href="https://www.bdstall.com/details/plastic-wrapping-paper-rolls-48001/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_89990.jpg"
                                            alt="Plastic Wrapping Paper Rolls" title="Plastic Wrapping Paper Rolls">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 1,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/plastic-wrapping-paper-rolls-48001/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/plastic-wrapping-paper-rolls-48001/">Plastic
                                Wrapping Paper Rolls</a>

                            <p>Smooth finish, tear-resistant, and moisture-proof plastic paper rolls.</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a href="https://www.bdstall.com/details/combo-spiral-binding-machine-45882/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_84984.jpg"
                                            alt="Combo Spiral Binding Machine" title="Combo Spiral Binding Machine">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 12,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/combo-spiral-binding-machine-45882/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/combo-spiral-binding-machine-45882/">Combo Spiral
                                Binding Machine</a>

                            <p>Maximum 22 sheets punching, maximum 380 sheets binding, F4 / A4 / B5 / A5 paper size, 2.5
                                / 4.5 / 6.5 mm paper margin,...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a href="https://www.bdstall.com/details/electric-s15-coil-binding-machine-45881/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_84988.jpg"
                                            alt="Electric S15 Coil Binding Machine"
                                            title="Electric S15 Coil Binding Machine">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 12,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/electric-s15-coil-binding-machine-45881/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/electric-s15-coil-binding-machine-45881/">Electric
                                S15 Coil Binding Machine</a>

                            <p>Maximum 15 sheets punching, maximum 300 sheets capacity binding, F4 / B4 / A4 / B5 / A5
                                paper size, 50-70mm thickness,...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a href="https://www.bdstall.com/details/electric-s-12-coil-binding-machine-45880/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_84986.jpg"
                                            alt="Electric S-12 Coil Binding Machine"
                                            title="Electric S-12 Coil Binding Machine">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 12,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/electric-s-12-coil-binding-machine-45880/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/electric-s-12-coil-binding-machine-45880/">Electric
                                S-12 Coil Binding Machine</a>

                            <p>Maximum binding capacity 300 mm, maximum 12 sheets per manual punch, F4 / B4 / A4 / B5 /
                                A5 paper size, semi-automatic...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/electric-u628-u-handle-coil-binding-machine-45879/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_84985.jpg"
                                            alt="Electric U628 U-Handle Coil Binding Machine"
                                            title="Electric U628 U-Handle Coil Binding Machine">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 15,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/electric-u628-u-handle-coil-binding-machine-45879/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a
                                href="https://www.bdstall.com/details/electric-u628-u-handle-coil-binding-machine-45879/">Electric
                                U628 U-Handle Coil Binding Machine</a>

                            <p>Maximum 20 sheets punching, maximum capacity binding 220 sheets, A4 / A5 / letter / etc
                                paper size, 2 / 4 / 6 mm paper...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/electric-9028a-coil-binding-machine-45877/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_84982.jpg"
                                            alt="Electric 9028A Coil Binding Machine"
                                            title="Electric 9028A Coil Binding Machine">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 16,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/electric-9028a-coil-binding-machine-45877/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/electric-9028a-coil-binding-machine-45877/">Electric
                                9028A Coil Binding Machine</a>

                            <p>Maximum 20 sheets punching, maximum binding capacity 250 sheets, A4 / A5 / B5 / LTR / etc
                                paper size, 4 mm round or 4 x...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/non-electric-c338-coil-binding-machine-45846/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_84981.jpg"
                                            alt="Non Electric C338 Coil Binding Machine"
                                            title="Non Electric C338 Coil Binding Machine">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 10,500</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/non-electric-c338-coil-binding-machine-45846/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/non-electric-c338-coil-binding-machine-45846/">Non
                                Electric C338 Coil Binding Machine</a>

                            <p>A4 / A5 / LTRetc paper size, maximum 12 sheets per manual punch, no roller, manual bind,
                                2 / 4 / 6 mm margin paper, 375...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/electric-c348-coil-binding-machine-with-coil-inserter-45845/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_84971.jpg"
                                            alt="Electric C348 Coil Binding Machine with Coil Inserter"
                                            title="Electric C348 Coil Binding Machine with Coil Inserter">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 12,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/electric-c348-coil-binding-machine-with-coil-inserter-45845/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a
                                href="https://www.bdstall.com/details/electric-c348-coil-binding-machine-with-coil-inserter-45845/">Electric
                                C348 Coil Binding Machine with Coil Inserter</a>

                            <p>Maximum 12 sheets per manual punch, maximum capacity binding 220 sheets, F4 / B4 / A4 /
                                B5 / A5 paper size, 50-70mm...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/trubind-tb-s20-coil-binding-machine-with-coil-inserter-45844/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_87667.jpg"
                                            alt="TruBind TB-S20 Coil Binding Machine with Coil Inserter"
                                            title="TruBind TB-S20 Coil Binding Machine with Coil Inserter">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 14,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/trubind-tb-s20-coil-binding-machine-with-coil-inserter-45844/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a
                                href="https://www.bdstall.com/details/trubind-tb-s20-coil-binding-machine-with-coil-inserter-45844/">TruBind
                                TB-S20 Coil Binding Machine with Coil Inserter</a>

                            <p>TruBind TB-S20 engineered for commercial use, binds paper automatically up to 20 papers
                                can be punched at once,...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a href="https://www.bdstall.com/details/heavy-duty-paper-cutter-machine-45843/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_84884.jpeg"
                                            alt="Heavy Duty Paper Cutter Machine"
                                            title="Heavy Duty Paper Cutter Machine">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 25,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/heavy-duty-paper-cutter-machine-45843/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/heavy-duty-paper-cutter-machine-45843/">Heavy Duty
                                Paper Cutter Machine</a>

                            <p>Surface protected with scratch resistant coating, 42 x 38 cm mesa scale, 40mm / 300 sheet
                                cutting thickness, inches...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/ad-818-multifunction-money-detector-45597/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_84345.jpg"
                                            alt="AD-818 Multifunction Money Detector"
                                            title="AD-818 Multifunction Money Detector">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 4,500</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/ad-818-multifunction-money-detector-45597/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a href="https://www.bdstall.com/details/ad-818-multifunction-money-detector-45597/">AD-818
                                Multifunction Money Detector</a>

                            <p>Detect fake notes, credit cards, traveller's cheques, fluorescent marks and other
                                document by UV lamp, water mark can...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/toshiba-e-studio-2518a-business-photocopier-44572/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_82194.jpg"
                                            alt="Toshiba E-Studio 2518A Business Photocopier"
                                            title="Toshiba E-Studio 2518A Business Photocopier">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 140,000</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/toshiba-e-studio-2518a-business-photocopier-44572/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a
                                href="https://www.bdstall.com/details/toshiba-e-studio-2518a-business-photocopier-44572/">Toshiba
                                E-Studio 2518A Business Photocopier</a>

                            <p>Monochrome black and white multifunction photocopier, small and medium work-group, 10.1
                                inch color WSVGA touch tilting...</p>

                        </div>

                    </div>
                    <div class="row product-cat-box s-top">

                        <div class="six columns product-cat-box-img">
                            <div class="row">
                                <div class="seven columns">
                                    <a
                                        href="https://www.bdstall.com/details/mega-283a-1500-page-yield-laser-printer-toner-cartridge-43816/">
                                        <img src="https://www.bdstall.com/asset/product-image/big_80700.jpg"
                                            alt="Mega 283A 1500 Page Yield Laser Printer Toner Cartridge"
                                            title="Mega 283A 1500 Page Yield Laser Printer Toner Cartridge">
                                    </a> </div>
                                <div class="five columns">
                                    <div class="product-price-group">
                                        <div class="product-price">৳ 850</div>
                                        <div class="product-update-date">6 days ago</div>
                                        <div class="product-cat-box-button">
                                            <a
                                                href="https://www.bdstall.com/details/mega-283a-1500-page-yield-laser-printer-toner-cartridge-43816/">
                                                <div class="button-link">Details</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="six columns product-cat-box-text">
                            <a
                                href="https://www.bdstall.com/details/mega-283a-1500-page-yield-laser-printer-toner-cartridge-43816/">Mega
                                283A 1500 Page Yield Laser Printer Toner Cartridge</a>

                            <p>Mega 283A laser printer toner cartridge has 1500 pages yield, black color cartridge.</p>

                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="pagination"><span class="paginationCurLink">1</span><span class="page-digit-link"><a
                                href="https://www.bdstall.com/stallDetail/index/864/2/">2</a></span><span
                            class="page-digit-link"><a
                                href="https://www.bdstall.com/stallDetail/index/864/3/">3</a></span><span
                            class="page-next-link"><a
                                href="https://www.bdstall.com/stallDetail/index/864/2/">Next</a></span></div>
                </div>

            </div>

        </div>

    </div>

</form>




@endsection
