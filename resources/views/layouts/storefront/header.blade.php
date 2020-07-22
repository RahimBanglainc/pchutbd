{{-- header start  --}}

    <div class="main-header">
        <div class="container">

        <a href="{{route('index')}}"><img src="{{asset('img/logo.png')}}" alt="pchutbd.com"
                    title="pchutbd.com"></a>

            <div class="spinner-master">
                <input type="checkbox" id="spinner-form">
                <label for="spinner-form" class="spinner-spin">
                    <div class="spinner diagonal part-1"></div>
                    <div class="spinner horizontal"></div>
                    <div class="spinner diagonal part-2"></div>
                </label>

            </div>

            <input type="hidden" name="DepartmentID" value="-1">
            <input type="hidden" name="ItemTypeID" value="-1">
            <a href="##search_box" class="search-btn" id="search"><img
            src="{{asset('img/site-search-icon.png')}}"></a>
            <form class="search_box" id="search_box" action="#search/">
                <input name="term" placeholder="Search item" value="" type="text">
                <input class="search_icon" value="Search" type="submit">
            </form>


            <div class="main-header-link">

                @guest
                @if (Route::has('register'))
                <div class="main-header-desk-link">
                    <a href="{{ route('register') }}">{{ __('Register') }}</a>
                </div>
                @endif

                <a href="{{ route('login') }}">
                    <div class="main-header-login-link">{{ __('Login') }}</div>
                </a>

                @else
                    <a href="{{ __('home') }}">
                        <div class="main-header-login-link">Home</div>
                    </a>
                @endguest


                <div class="main-header-desk-link"><a href="#blog/list/">Blog</a></div>
            </div>



        </div>


    </div>


    <nav id="menu" class="menu top-menu">
                <ul class="menu-pd">

                    <li class="has-submenu"><a href="#pc/">PC &amp; Laptop
                        </a>


                        <ul class="sub-menu">

                            <li>
                                <a href="#laptop/">Laptop</a>
                            </li>

                            <li>
                                <a href="#gaming-laptop/">Gaming Laptop</a>
                            </li>

                            <li>
                                <a href="#used-laptop/">Used Laptop</a>
                            </li>

                            <li>
                                <a href="#pcbuilder/">PC Builder</a>
                            </li>

                            <li>
                                <a href="#desktop-pc/">Desktop PC</a>
                            </li>

                            <li>
                                <a href="#gaming-desktop-pc/">Gaming PC</a>
                            </li>

                            <li>
                                <a href="#brand-desktop-pc/">Brand PC</a>
                            </li>

                            <li>
                                <a href="#mini-pc/">Mini PC</a>
                            </li>

                            <li>
                                <a href="#tablet-pc/">Tablet PC</a>
                            </li>

                            <li>
                                <a href="#all-in-one-pc/">All In One PC</a>
                            </li>

                            <li>
                                <a href="#graphics-tablet-and-pen-pc-input-device/">Graphics
                                    Tablet</a>
                            </li>

                            <li>
                                <a href="#digital-signature-pad/">Signature Pad</a>
                            </li>

                            <li>
                                <a href="#server/">Server</a>
                            </li>

                            <li>
                                <a href="#server-rack-cabinet/">Server Rack</a>
                            </li>

                            <li>
                                <a href="#workstation/">Workstation</a>
                            </li>

                            <li>
                                <a href="#computer-repair-service/">Computer Repair</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#computer-parts/">PC Parts
                        </a>


                        <ul class="sub-menu">

                            <li>
                                <a href="#headphone/">Headphone</a>
                            </li>

                            <li>
                                <a href="#ups/">UPS</a>
                            </li>

                            <li>
                                <a href="#computer-processor/">Processor</a>
                            </li>

                            <li>
                                <a href="#motherboard/">Motherboard</a>
                            </li>

                            <li>
                                <a href="#computer-ram/">RAM</a>
                            </li>

                            <li>
                                <a href="#hard-disk-drive/">Hard Disk</a>
                            </li>

                            <li>
                                <a href="#ssd/">SSD</a>
                            </li>

                            <li>
                                <a href="#graphics-card/">Graphics Card</a>
                            </li>

                            <li>
                                <a href="#mouse/">Mouse</a>
                            </li>

                            <li>
                                <a href="#computer-keyboard/">Keyboard</a>
                            </li>

                            <li>
                                <a href="#pc-cpu-cooling-fan/">CPU Cooler</a>
                            </li>

                            <li>
                                <a href="#computer-optical-drive/">DVD Writer</a>
                            </li>

                            <li>
                                <a href="#computer-casing/">Computer Casing</a>
                            </li>

                            <li>
                                <a href="#internet-modem/">Internet Modem</a>
                            </li>

                            <li>
                                <a href="#webcam/">Webcam</a>
                            </li>

                            <li>
                                <a href="#tv-card/">TV Card</a>
                            </li>

                            <li>
                                <a href="#pen-drive/">Pen Drive</a>
                            </li>

                            <li>
                                <a href="#cable/">Cable</a>
                            </li>

                            <li>
                                <a href="#surge-protector-power-strip/">Surge Protector</a>
                            </li>

                            <li>
                                <a href="#computer-power-supply/">Power Supply</a>
                            </li>

                            <li>
                                <a href="#usb-hub/">USB Hub</a>
                            </li>

                            <li>
                                <a href="#ups-battery/">UPS Battery</a>
                            </li>

                            <li>
                                <a href="#memory-card-reader/">Memory Card Reader</a>
                            </li>

                            <li>
                                <a href="#blank-disk/">Blank Disk</a>
                            </li>

                            <li>
                                <a href="#sound-card/">Sound Card</a>
                            </li>

                            <li>
                                <a href="#thermal-paste/">Thermal Paste</a>
                            </li>

                            <li>
                                <a href="#gaming-chair/">Gaming Chair</a>
                            </li>

                            <li>
                                <a href="#mouse-pad/">Mouse Pad</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#pc-tablet-accessories/">Laptop Accessories
                        </a>


                        <ul class="sub-menu">

                            <li>
                                <a href="#laptop-battery/">Laptop Battery</a>
                            </li>

                            <li>
                                <a href="#laptop-adapter/">Laptop Charger</a>
                            </li>

                            <li>
                                <a href="#laptop-bag/">Laptop Bag</a>
                            </li>

                            <li>
                                <a href="#laptop-cooler/">Laptop Cooler</a>
                            </li>

                            <li>
                                <a href="#laptop-screen/">Laptop Display</a>
                            </li>

                            <li>
                                <a href="#laptop-keyboard/">Laptop Keyboard</a>
                            </li>

                            <li>
                                <a href="#portable-laptop-table/">Laptop Table</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#networking-device/">Networking
                        </a>


                        <ul class="sub-menu">

                            <li>
                                <a href="#wireless-router/">Wireless Router</a>
                            </li>

                            <li>
                                <a href="#network-wireless-access-point/">Wireless Access
                                    Point</a>
                            </li>

                            <li>
                                <a href="#wireless-bridge/">Wireless Bridge</a>
                            </li>

                            <li>
                                <a href="#wireless-range-extender/">WiFi Repeater</a>
                            </li>

                            <li>
                                <a href="#network-switch/">Network Switch</a>
                            </li>

                            <li>
                                <a href="#network-lan-card/">WiFi Adapter</a>
                            </li>

                            <li>
                                <a href="#network-storage/">Network Storage</a>
                            </li>

                            <li>
                                <a href="#network-cable/">Network Cable</a>
                            </li>

                            <li>
                                <a href="#network-connector/">Network Connector</a>
                            </li>

                            <li>
                                <a href="#fiber-optic-splicer-machine/">Splicer Machine</a>
                            </li>

                            <li>
                                <a href="#wireless-antenna/">Wireless Antenna</a>
                            </li>

                            <li>
                                <a href="#fiber-optic-media-converter/">Optical Converter</a>
                            </li>

                            <li>
                                <a href="#kvm-switch/">KVM Switch</a>
                            </li>

                            <li>
                                <a href="#network-accessories/">Networking Accessories</a>
                            </li>

                            <li>
                                <a href="#network-support-service/">Network Support</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#projection/">Projection
                        </a>


                        <ul class="sub-menu">

                            <li>
                                <a href="#projector/">Projector</a>
                            </li>

                            <li>
                                <a href="#mini-projector/">Mini Projector</a>
                            </li>

                            <li>
                                <a href="#overhead-projector/">Overhead Projector</a>
                            </li>

                            <li>
                                <a href="#digital-interactive-whiteboard/">Digital Interactive
                                    Whiteboard</a>
                            </li>

                            <li>
                                <a href="#projector-screen/">Projector Screen</a>
                            </li>

                            <li>
                                <a href="#projector-mount/">Projector Mount</a>
                            </li>

                            <li>
                                <a href="#projector-lamp/">Projector Lamp</a>
                            </li>

                            <li>
                                <a href="#wireless-presenter/">Wireless Presenter</a>
                            </li>

                            <li>
                                <a href="#projector-repair-service/">Projector Repair</a>
                            </li>

                            <li>
                                <a href="#projector-and-screen-rental/">Projector Rental</a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="#monitor/">Monitor

                        </a>

                    </li>

                    <li class="has-submenu"><a href="#print-and-scan/">Print &amp; Scan
                        </a>


                        <ul class="sub-menu">

                            <li>
                                <a href="#copier/">Photocopier</a>
                            </li>

                            <li>
                                <a href="#printer/">Printer</a>
                            </li>

                            <li>
                                <a href="#photo-printer/">Photo Printer</a>
                            </li>

                            <li>
                                <a href="#scanner/">Scanner</a>
                            </li>

                            <li>
                                <a href="#large-format-printer/">Banner Printer</a>
                            </li>

                            <li>
                                <a href="#pos-printer/">POS Printer</a>
                            </li>

                            <li>
                                <a href="#label-printer/">Label Printer</a>
                            </li>

                            <li>
                                <a href="#barcode-scanner/">Barcode Scanner</a>
                            </li>

                            <li>
                                <a href="#id-card-printer/">ID Card Printer</a>
                            </li>

                            <li>
                                <a href="#dot-matrix-printer/">Dot Matrix Printer</a>
                            </li>

                            <li>
                                <a href="#digital-duplicator/">Digital Duplicator</a>
                            </li>

                            <li>
                                <a href="#copier-toner/">Copier Toner</a>
                            </li>

                            <li>
                                <a href="#printer-cartridge/">Printer Cartridge</a>
                            </li>

                            <li>
                                <a href="#thermal-paper-roll/">Thermal Paper Roll</a>
                            </li>

                            <li>
                                <a href="#printer-paper/">Printer Paper</a>
                            </li>

                            <li>
                                <a href="#printer-drum/">Printer Drum</a>
                            </li>

                            <li>
                                <a href="#copier-repair/">Copier Repair</a>
                            </li>

                            <li>
                                <a href="#copier-spare-parts/">Copier Parts</a>
                            </li>

                            <li>
                                <a href="#printing-accessories/">Printing Accessories</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#office-electronics/">Office Electronics
                        </a>


                        <ul class="sub-menu">

                            <li>
                                <a href="#paper-shredder/">Paper Shredder</a>
                            </li>

                            <li>
                                <a href="#money-counting-and-detector-machine/">Money Counting
                                    Machine</a>
                            </li>

                            <li>
                                <a href="#electronic-cash-register/">Cash Register</a>
                            </li>

                            <li>
                                <a href="#cash-drawer/">Cash Drawer</a>
                            </li>

                            <li>
                                <a href="#fake-note-detector/">Fake Note Detector</a>
                            </li>

                            <li>
                                <a href="#laminating-machine/">Laminating Machine</a>
                            </li>

                            <li>
                                <a href="#binding-machine/">Spiral Binding Machine</a>
                            </li>

                            <li>
                                <a href="#paper-cutting-machine/">Paper Cutting Machine</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#software-price-in-bangladesh/">Software
                        </a>


                        <ul class="sub-menu">

                            <li>
                                <a href="#antivirus-security-software/">Antivirus &amp;
                                    Security</a>
                            </li>

                            <li>
                                <a href="#business-software/">Business Software</a>
                            </li>

                            <li>
                                <a href="#pos-software/">POS Software</a>
                            </li>

                            <li>
                                <a href="#inventory-software/">Inventory Software</a>
                            </li>

                            <li>
                                <a href="#accounting-software/">Accounting Software</a>
                            </li>

                            <li>
                                <a href="#website-design-development/">Website Design</a>
                            </li>

                            <li>
                                <a href="#microsoft-office/">Microsoft Office</a>
                            </li>

                            <li>
                                <a href="#educational-software/">Educational Software</a>
                            </li>

                            <li>
                                <a href="#operating-system-software/">Microsoft Windows</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#web-service/">Web Service
                        </a>


                        <ul class="sub-menu">

                            <li>
                                <a href="#web-hosting/">Web Hosting</a>
                            </li>

                            <li>
                                <a href="#domain-name-registration-service/">Domain Name</a>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#digital-marketing/">Digital Marketing
                        </a>


                        <ul class="sub-menu">

                            <li>
                                <a href="#digital-signage/">Digital Kiosk</a>
                            </li>

                            <li>
                                <a href="#sms-marketing/">SMS Marketing</a>
                            </li>

                            <li>
                                <a href="#led-sign-board/">LED Sign Board</a>
                            </li>
                        </ul>
                    </li>
                </ul>
    </nav>
{{-- Header end  --}}
