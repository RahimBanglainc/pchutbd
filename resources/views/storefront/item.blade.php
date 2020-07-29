@extends('layouts.storefront.layout')

@section('title','Deshboard')


@section('main')

<div id="app">

    <div name="clientForm" action="" method="post">


        <input type="hidden" name="UserID" value="23272">

        <div class="container">

            <div class="row">


                @include('storefront.components.saidbar')



                <form action="{{ route('client.passwordpost') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')



                    <div class="ten columns account-head">

                        <div class="body-header">
                            <h1>Product List</h1>
                        </div>




                        <div class="account-search-panel">

                            <select name="ItemTypeID" onchange="selectItemFeature()">
                                <option value="-1" selected="">select</option>
                                <option value="6">PC &amp; Laptop- Laptop</option>
                                <option value="477">PC &amp; Laptop- Gaming Laptop</option>
                                <option value="4">PC &amp; Laptop- Desktop PC</option>
                                <option value="474">PC &amp; Laptop- Gaming PC</option>
                                <option value="471">PC &amp; Laptop- Brand PC</option>
                                <option value="376">PC &amp; Laptop- Mini PC</option>
                                <option value="10">PC &amp; Laptop- Tablet PC</option>
                                <option value="470">PC &amp; Laptop- All In One PC</option>
                                <option value="97">PC &amp; Laptop- Computer Repair</option>
                                <option value="74">PC Parts- Headphone</option>
                                <option value="95">PC Parts- UPS</option>
                                <option value="27">PC Parts- Processor</option>
                                <option value="28">PC Parts- Motherboard</option>
                                <option value="31">PC Parts- RAM</option>
                                <option value="29">PC Parts- Hard Disk</option>
                                <option value="262">PC Parts- SSD</option>
                                <option value="32">PC Parts- Graphics Card</option>
                                <option value="39">PC Parts- Mouse</option>
                                <option value="380">PC Parts- Keyboard</option>
                                <option value="90">PC Parts- CPU Cooler</option>
                                <option value="35">PC Parts- DVD Writer</option>
                                <option value="40">PC Parts- Computer Casing</option>
                                <option value="37">PC Parts- Internet Modem</option>
                                <option value="36">PC Parts- Webcam</option>
                                <option value="34">PC Parts- TV Card</option>
                                <option value="30">PC Parts- Pen Drive</option>
                                <option value="111">PC Parts- Cable</option>
                                <option value="351">PC Parts- Surge Protector</option>
                                <option value="358">PC Parts- USB Hub</option>
                                <option value="502">PC Parts- UPS Battery</option>
                                <option value="195">PC Parts- Power Supply</option>
                                <option value="109">PC Parts- Memory Card Reader</option>
                                <option value="363">PC Parts- Blank Disk</option>
                                <option value="33">PC Parts- Sound Card</option>
                                <option value="525">PC Parts- Gaming Chair</option>
                                <option value="526">PC Parts- Mouse Pad</option>
                                <option value="501">PC Parts- Thermal Paste</option>
                                <option value="86">Laptop Accessories- Laptop Battery</option>
                                <option value="87">Laptop Accessories- Laptop Charger</option>
                                <option value="77">Laptop Accessories- Laptop Bag</option>
                                <option value="78">Laptop Accessories- Laptop Cooler</option>
                                <option value="88">Laptop Accessories- Laptop Display</option>
                                <option value="89">Laptop Accessories- Laptop Keyboard</option>
                                <option value="410">Laptop Accessories- Laptop Table</option>
                                <option value="48">Networking- Wireless Router</option>
                                <option value="17">Monitor- Monitor</option>
                                <option value="23">Print &amp; Scan- Printer</option>
                                <option value="21">Print &amp; Scan- Photo Printer</option>
                                <option value="170">Print &amp; Scan- Printer Cartridge</option>
                                <option value="104">Print &amp; Scan- Printer Paper</option>
                                <option value="368">Print &amp; Scan- Printer Drum</option>
                                <option value="511">Print &amp; Scan- Printing Accessories</option>
                            </select> <select name="ListingStatusID">
                                <option value="0">All Item</option>
                                <option value="10" selected="">Active</option>
                                <option value="50">Waiting for Moderation</option>
                                <option value="100">Available</option>
                                <option value="1">Sold Out</option>
                                <option value="15">Hot Pick</option>
                                <option value="20">Featured Item</option>
                                <option value="400">My Priority</option>
                                <option value="130">Expired Item</option>
                                <option value="135">Inactive for Reasons</option>
                                <option value="140">Inactive Item</option>
                            </select> <input type="text" name="term" value="">
                            <input type="submit" value="Search">
                        </div>


                        <div class="row">

                            <div class="u-pull-left">Item 1-20 of 85</div>

                            <!--    <div class="u-pull-right"><a href="https://www.bdstall.com/productListing/index/23272/845/">Post New Item</a></div>-->

                        </div>

                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/gaming-pc-ryzen-5-3400g-8gb-ram-500gb-hdd-19-monitor-53182/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_105346.jpg"
                                                alt="Gaming PC Ryzen 5 3400G 8GB RAM 500GB HDD 19" monitor"=""
                                                title="Gaming PC Ryzen 5 3400G 8GB RAM 500GB HDD 19">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 28,000</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>746 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(53182,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/gaming-pc-ryzen-5-3400g-8gb-ram-500gb-hdd-19-monitor-53182/"
                                    target="_BLANK">Gaming PC Ryzen 5 3400G 8GB RAM 500GB HDD 19" Monitor</a>
                                <p>Gigabyte A320M-S2H motherboard, 3.7 GHz base processor speed, 19" LED monitor, DDR4
                                    8GB
                                    RAM, view one ATX casing. </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/gaming-pc-amd-ryzen-3-8gb-ram-1tb-hdd-120gb-ssd-52829/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_104364.jpg"
                                                alt="Gaming PC AMD Ryzen 3 8GB RAM 1TB HDD + 120GB SSD"
                                                title="Gaming PC AMD Ryzen 3 8GB RAM 1TB HDD + 120GB SSD">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 23,500</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>1876 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52829,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/gaming-pc-amd-ryzen-3-8gb-ram-1tb-hdd-120gb-ssd-52829/"
                                    target="_BLANK">Gaming PC AMD Ryzen 3 8GB RAM 1TB HDD + 120GB SSD</a>
                                <p>Gigabyte A-320M S2H motherboard, AMD Ryzen 3 3200G processor, DDR4 8GB RAM, USB
                                    standard
                                    keyboard and mouse. </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/intel-core-i7-3770s-3rd-generation-52656/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_103739.jpg"
                                                alt="Intel Core i7-3770s 3rd Generation"
                                                title="Intel Core i7-3770s 3rd Generation">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 7,500</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>1942 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52656,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/intel-core-i7-3770s-3rd-generation-52656/"
                                    target="_BLANK">Intel Core i7-3770s 3rd Generation</a>
                                <p>4 core, 8 thread, 3.10 GHz ~ 3.90 GHz, 8 MB cache, 5 GT/s BUS, 32GB max. memory
                                    support,
                                    2-channel DDR3 1333 / 1600... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/intel-core-i3-6100t-6th-gen-32-ghz-processor-52655/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_103787.jpg"
                                                alt="Intel Core i3-6100T 6th Gen 3.2 GHz Processor"
                                                title="Intel Core i3-6100T 6th Gen 3.2 GHz Processor">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 6,800</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>1930 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52655,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/intel-core-i3-6100t-6th-gen-32-ghz-processor-52655/"
                                    target="_BLANK">Intel Core i3-6100T 6th Gen 3.2 GHz Processor</a>
                                <p>2 core and 4 thread, 3.20GHz 64-bit generation 6th, 3 MB Intel smart cache, APU with
                                    built-in graphics Intel HD... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/msi-gt-710-2gd3h-lp-2gb-ddr3-64-bit-video-card-52566/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_103509.jpg"
                                                alt="MSI GT 710 2GD3H LP 2GB DDR3 64-bit Video Card"
                                                title="MSI GT 710 2GD3H LP 2GB DDR3 64-bit Video Card">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 4,400</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2415 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52566,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/msi-gt-710-2gd3h-lp-2gb-ddr3-64-bit-video-card-52566/"
                                    target="_BLANK">MSI GT 710 2GD3H LP 2GB DDR3 64-bit Video Card</a>
                                <p>NVIDIA GeForce GT 710 graphics processing unit, memory BUS 64-bit, DDR3 2GB RAM,
                                    1600MHz
                                    memory clock speed, 954MHz... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/zotac-geforce-gt-710-2gb-ddr3-graphics-card-52565/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_103447.jpg"
                                                alt="Zotac GeForce GT 710 2GB DDR3 Graphics Card"
                                                title="Zotac GeForce GT 710 2GB DDR3 Graphics Card">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 4,500</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2320 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52565,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/zotac-geforce-gt-710-2gb-ddr3-graphics-card-52565/"
                                    target="_BLANK">Zotac GeForce GT 710 2GB DDR3 Graphics Card</a>
                                <p>Single-slot, 1600 MHz memory clock, 2GB DDR3 video memory, 64-bit memory BUS, 954 MHz
                                    engine clock, 25-watt power... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/gigabyte-b365-m-aorus-elite-rgb-fusion-20-intel-family-52557/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_103544.jpg"
                                                alt="Gigabyte B365 M Aorus Elite RGB Fusion 2.0 Intel Family"
                                                title="Gigabyte B365 M Aorus Elite RGB Fusion 2.0 Intel Family">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 11,500</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2272 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52557,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/gigabyte-b365-m-aorus-elite-rgb-fusion-20-intel-family-52557/"
                                    target="_BLANK">Gigabyte B365 M Aorus Elite RGB Fusion 2.0 Intel Family</a>
                                <p>8th / 9th Gen i3 / i5 / i7 all supported with LGA1151, maximum 64GB RAM support,
                                    PCI-E,
                                    anti-sulfur resistor, CEC 2019... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/gigabyte-h310m-h-8th-gen-intel-core-m-atx-mainboard-52556/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_103539.jpg"
                                                alt="Gigabyte H310M H 8th Gen Intel Core m-ATX Mainboard"
                                                title="Gigabyte H310M H 8th Gen Intel Core m-ATX Mainboard">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 6,800</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2547 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52556,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/gigabyte-h310m-h-8th-gen-intel-core-m-atx-mainboard-52556/"
                                    target="_BLANK">Gigabyte H310M H 8th Gen Intel Core m-ATX Mainboard</a>
                                <p>8th / 9th Gen i3 / i5 / i7 all supported by LGA 1151 socket, 2 x DIMM, max. 32GB DDR4
                                    RAM, 3 x PCIe slot, m-ATX, gaming... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/msi-a320m-a-pro-max-amd-ryzen-am4-m-atx-mainboard-52555/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_103533.jpg"
                                                alt="MSI A320M-A Pro Max AMD Ryzen AM4 m-ATX Mainboard"
                                                title="MSI A320M-A Pro Max AMD Ryzen AM4 m-ATX Mainboard">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 6,000</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2165 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52555,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/msi-a320m-a-pro-max-amd-ryzen-am4-m-atx-mainboard-52555/"
                                    target="_BLANK">MSI A320M-A Pro Max AMD Ryzen AM4 m-ATX Mainboard</a>
                                <p>AM4 socket for 1st, 2nd and 3rd generation AMD Ryzen with Radeon Vega graphics,
                                    m-ATX, 64
                                    GB maximum RAM, Turbo M.2... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/gigabyte-ga-a320m-s2h-amd-ryzen-am4-micro-atx-mainboard-52554/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_103529.jpg"
                                                alt="Gigabyte GA-A320M-S2H AMD Ryzen AM4 Micro ATX Mainboard"
                                                title="Gigabyte GA-A320M-S2H AMD Ryzen AM4 Micro ATX Mainboard">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 5,700</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2775 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52554,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/gigabyte-ga-a320m-s2h-amd-ryzen-am4-micro-atx-mainboard-52554/"
                                    target="_BLANK">Gigabyte GA-A320M-S2H AMD Ryzen AM4 Micro ATX Mainboard</a>
                                <p>Socket AM4 for AMD Ryzen &amp; 7th Generation A series / Athlon processors, 3 x PCI
                                    Express slot, 2 x DDR4 maximum 32 GB,... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/lexar-ns100-128gb-25-sata-iii-ssd-52551/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_103411.jpg"
                                                alt="Lexar NS100 128GB 2.5" sata="" iii="" ssd"=""
                                                title="Lexar NS100 128GB 2.5">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 2,800</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2114 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52551,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/lexar-ns100-128gb-25-sata-iii-ssd-52551/"
                                    target="_BLANK">Lexar NS100 128GB 2.5" SATA III SSD</a>
                                <p>SATA III 6Gb/s interface, 128GB solid-state drive storage, 520MB/s maximum read
                                    speed,
                                    gray color, 0°C to 70°C... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/esonic-h61ffl-desktop-motherboard-52340/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_102878.jpg"
                                                alt="Esonic H61FFL Desktop Motherboard"
                                                title="Esonic H61FFL Desktop Motherboard">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 3,800</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2708 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52340,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/esonic-h61ffl-desktop-motherboard-52340/"
                                    target="_BLANK">Esonic H61FFL Desktop Motherboard</a>
                                <p>Core i3 / i5 / i7 2nd / 3rd generation processor support, 16GB DDR3 1600/1333 BUS RAM
                                    support, VGA / HDMI / RJ-45 port. </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/intel-core-i5-6400t-6th-gen-6mb-cache-processor-52339/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_102863.jpg"
                                                alt="Intel Core i5-6400T 6th Gen 6MB Cache Processor"
                                                title="Intel Core i5-6400T 6th Gen 6MB Cache Processor">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 9,500</div>
                                            <div class="product-update-date">16 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2563 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52339,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/intel-core-i5-6400t-6th-gen-6mb-cache-processor-52339/"
                                    target="_BLANK">Intel Core i5-6400T 6th Gen 6MB Cache Processor</a>
                                <p>Desktop processor Intel Core i5 6th generation, up to 2.80 GHz, 4 core, 4 thread,
                                    DDR4-1866/2133 and DDR3L-1333/1600... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/geil-evo-spear-16gb-ddr4-2400mhz-desktop-ram-52101/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_102026.jpg"
                                                alt="Geil Evo Spear 16GB DDR4 2400MHz Desktop RAM"
                                                title="Geil Evo Spear 16GB DDR4 2400MHz Desktop RAM">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 6,500</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2415 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(52101,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/geil-evo-spear-16gb-ddr4-2400mhz-desktop-ram-52101/"
                                    target="_BLANK">Geil Evo Spear 16GB DDR4 2400MHz Desktop RAM</a>
                                <p>Model number GSB416GB2400C16SC, designed for gamers, extreme overclocking performance
                                    without manual adjustment,... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/gaming-pc-ryzen-5-8gb-ram-500gb-hdd-19-led-monitor-51939/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_101678.jpg"
                                                alt="Gaming PC Ryzen 5 8GB RAM 500GB HDD 19" led="" monitor"=""
                                                title="Gaming PC Ryzen 5 8GB RAM 500GB HDD 19">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 28,000</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2498 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(51939,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/gaming-pc-ryzen-5-8gb-ram-500gb-hdd-19-led-monitor-51939/"
                                    target="_BLANK">Gaming PC Ryzen 5 8GB RAM 500GB HDD 19" LED Monitor</a>
                                <p>AMD Ryzen 5 2400G processor, up to 3.9GHz processor speed, L1 384 KB / L2 2MB / L3
                                    4MB
                                    cache, cores-4 and threads-8,... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/desktop-pc-core-i3-6th-gen-4gb-ram-17-led-monitor-51937/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_101671.jpg"
                                                alt="Desktop PC Core i3 6th Gen 4GB RAM  17" led="" monitor"=""
                                                title="Desktop PC Core i3 6th Gen 4GB RAM  17">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 19,000</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2273 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(51937,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/desktop-pc-core-i3-6th-gen-4gb-ram-17-led-monitor-51937/"
                                    target="_BLANK">Desktop PC Core i3 6th Gen 4GB RAM 17" LED Monitor</a>
                                <p>Intel Core i3-6100 6th generation processor, 500GB hard disk, Intel HD graphics 530,
                                    3 MB
                                    cache memory, DDR4 memory... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/hp-deskjet-ink-advantage-2135-all-in-one-color-printer-23414/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_35621.jpg"
                                                alt="HP DeskJet Ink Advantage 2135 All-in-One Color Printer"
                                                title="HP DeskJet Ink Advantage 2135 All-in-One Color Printer">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 5,700</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>1863 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(51936,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/hp-deskjet-ink-advantage-2135-all-in-one-color-printer-23414/"
                                    target="_BLANK">HP DeskJet Ink Advantage 2135 All-in-One Color Printer</a>
                                <p>HP DeskJet ink advantage 2135 all-in-one printer has 4800 x 1200 maximum print
                                    resolution, manual duplex, flatbed scan... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/esonic-h55kel-desktop-motherboard-51826/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_101624.jpg"
                                                alt="Esonic H55KEL Desktop Motherboard"
                                                title="Esonic H55KEL Desktop Motherboard">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 3,500</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2962 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(51826,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/esonic-h55kel-desktop-motherboard-51826/"
                                    target="_BLANK">Esonic H55KEL Desktop Motherboard</a>
                                <p>Intel chipset for providing faster response, huge memory support up to 16GB, up to
                                    core
                                    i7 processor support. </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/seagate-barracuda-st2000dm005-2tb-desktop-hdd-51550/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_100565.jpg"
                                                alt="Seagate Barracuda ST2000DM005 2TB Desktop HDD"
                                                title="Seagate Barracuda ST2000DM005 2TB Desktop HDD">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 4,500</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>2541 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(51550,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/seagate-barracuda-st2000dm005-2tb-desktop-hdd-51550/"
                                    target="_BLANK">Seagate Barracuda ST2000DM005 2TB Desktop HDD</a>
                                <p>SATA 6 Gb/s 8.9 cm interface, 256 MB cache, 5400 RPM speed, 2TB storage capacity,
                                    358g
                                    weight, 10.2 x 14.7 x 2 cm... </p>
                            </div>

                        </div>


                        <div class="row product-cat-box s-top">

                            <div class="six columns product-cat-box-img">
                                <div class="row">
                                    <div class="seven columns">
                                        <a href="https://www.bdstall.com/details/seagate-st3500414cs-500gb-5900-rpm-internal-hdd-51443/"
                                            target="_BLANK">
                                            <img src="https://www.bdstall.com/asset/product-image/big_100076.jpg"
                                                alt="Seagate ST3500414CS 500GB 5900 RPM Internal HDD"
                                                title="Seagate ST3500414CS 500GB 5900 RPM Internal HDD">
                                        </a> </div>
                                    <div class="five columns">
                                        <div class="product-price-group">
                                            <div class="product-price">৳ 1,300</div>
                                            <div class="product-update-date">10 hours ago</div>

                                            <div class="account-prod-link">
                                                <span>3002 times</span>
                                            </div>
                                            <div class="account-prod-link">
                                                <span>
                                                    <font color="green">In Stock</font>
                                                </span>
                                            </div>

                                            <div class="product-cat-box-button">
                                                <a href="javascript: editListing(51443,23272)">
                                                    <div class="button-link">Edit</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="six columns product-cat-box-text">
                                <a href="https://www.bdstall.com/details/seagate-st3500414cs-500gb-5900-rpm-internal-hdd-51443/"
                                    target="_BLANK">Seagate ST3500414CS 500GB 5900 RPM Internal HDD</a>
                                <p>Serial-ATA/300 disk interface, 16MB cache, 10.17 ms rotation, 2 number of head, 1
                                    number
                                    of disk, 2000 mA required... </p>
                            </div>

                        </div>

                        <div class="pagination s-top">
                            <div class="pagination"><span class="paginationCurLink">1</span><span
                                    class="page-digit-link"><a
                                        href="?ListingStatusID=10&amp;ItemTypeID=-1&amp;term=&amp;page=2">2</a></span><span
                                    class="page-digit-link"><a
                                        href="?ListingStatusID=10&amp;ItemTypeID=-1&amp;term=&amp;page=3">3</a></span><span
                                    class="page-digit-link"><a
                                        href="?ListingStatusID=10&amp;ItemTypeID=-1&amp;term=&amp;page=4">4</a></span><span
                                    class="page-next-link"><a
                                        href="?ListingStatusID=10&amp;ItemTypeID=-1&amp;term=&amp;page=2">Next</a></span>
                            </div>
                        </div>
                    </div>



                </form>


            </div>
        </div>

    </div>

</div>

@endsection
