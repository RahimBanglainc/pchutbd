@extends('layouts.storefront.layout')

@section('title','Deshboard')


@section('main')



<script type="text/javascript" language="javascript">

    /* function for insert*/
    start_over_at = 3;
    counter = 0;
    function insertData()
    {
            if(http.readyState!=4 && http.readyState!=0 )
        {
                alert("Please wait...");
                return;
        }

    //	if(document.clientForm.StallID.value==-1)
    //	{
    //			alert("Please select stall.");
    //			document.clientForm.StallID.focus();
    //			return;
    //	}
    //	if(document.clientForm.CategoryID.value==-1)
    //	{
    //			alert("Please select category.");
    //			document.clientForm.CategoryID.focus();
    //			return;
    //	}

        if(document.clientForm.subcategory_id.value==-1)
        {
                alert("Please select item type.");
                document.clientForm.subcategory_id.focus();
                return;
        }

        if(document.clientForm.ListingPrice.value=="")
        {
                alert("Please enter price.");
                document.clientForm.ListingPrice.focus();
                return;
        }
            else if(!isNumeric(document.clientForm.ListingPrice.value))
            {
                            alert("Please enter valid price and do not put any comma (,)");
                document.clientForm.ListingPrice.focus();
                return;
            }
            else if(document.clientForm.ListingPrice.value<=0)
        {
                alert("Price must be greater than Zero");
                document.clientForm.ListingPrice.focus();
                return;
        }

        if(document.clientForm.ListingTitle.value== "")
        {
                alert("Please enter item title.");
                document.clientForm.ListingTitle.focus();
                return;
        }

    //	if(document.clientForm.BrandID.value==-1)
    //	{
    //			alert("Please select brand.");
    //			document.clientForm.BrandID.focus();
    //			return;
    //	}
        if(document.clientForm.ListingDescription.value=="")
        {
                alert("Please enter item description");
                document.clientForm.ListingDescription.focus();
                return;
        }
            //prevent multiple submission
            counter++;
            if(counter >= start_over_at) { counter = 1; }
            if(counter == 2) {
                alert('Sometimes the server is a bit slow. ' +
                    'One click is sufficient.\n\nThe ' +
                     'server will respond in a few seconds.\n\n' +
                     'Thank you for your patience.');
            }
            if(counter > 1) { return false; }
            else {document.clientForm.submit();}
    }


    http = getHTTPObject();

    img="<img src='";
    img=img +"{{asset('img/')}}";
        img=img +"/ajax-loader.gif";
        img=img +"'";
        img=img +"/>";


    function selectItemType()
    {
            http = getHTTPObject();

            if (http.readyState != 4)
         {
                document.getElementById("showType").innerHTML=img;
          }

        var CategoryID=document.clientForm.CategoryID.value;
        url  = 'https://s/productListing/getItemType//' + CategoryID + '/';
        http.open( "POST" ,url, true);
        http.onreadystatechange = showItemType;
        http.send(null);
    }

    function showItemType()
    {
        if (http.readyState == 4)
         {
            if(http.responseText=="")
              {
                return;
              }

            document.getElementById("showType").innerHTML=http.responseText;
            document.getElementById("showItemFeature").innerHTML="";
          }
    }


    function selectItemFeature()
    {
            http = getHTTPObject();

            if (http.readyState != 4)
         {
            document.getElementById("showItemFeature").innerHTML=img;
          }

        var brand_id=document.clientForm.brand_id.value;
        url  = '{{route('index')}}/getItemFeature//' + brand_id;
        http.open( "GET" ,url, true);
        http.onreadystatechange = displayItemFeature;
        http.send(null);
    }

    function displayItemFeature()
    {
        if (http.readyState == 4)
         {
            if(http.responseText=="")
              {
                return;
              }

            document.getElementById("showItemFeature").innerHTML=http.responseText;

          }
    }
        function limitText(limitField, limitCount, limitNum) {
            if (limitField.value.length > limitNum) {
                limitField.value = limitField.value.substring(0, limitNum);
            }
        }

    function tabmenu(status, max_photo){
          for(i=1; i<=max_photo; i++)
           {
            image_id = "image" + i;
            image_tab_id="image" + i + "-tab";

            if (status==i)
                {
                    document.getElementById(image_id).style.display='block';
                    document.getElementById(image_tab_id).className='selHomeTab';
                }
                else
                {
                    document.getElementById(image_id).style.display='none';
                    document.getElementById(image_tab_id).className='';
                }
            }
        return false;
    }
    </script>



<div id="app">

    <div action="" method="post">


        <input type="hidden" name="UserID" value="23272">

        <div class="container">

            <div class="row">


                @include('storefront.components.saidbar')


                <form name="clientForm" action="{{ route('client.item.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf



                    <div class="nine columns account-head">




                        <div class="body-header">
                            <h1>Post New Item</h1>
                        </div>

                        <div class="row">
                            <div class="eight columns">


                                @if($count && $stall->item_exp >= $my_time)


                                    <div class="form-style">
                                        <!--            <div class="form-element"><label>Stall</label></div>-->

                                        <div class="form-element"><label>Item</label><select name="brand_id"
                                                onchange="selectItemFeature()" required>
                                                <option value="-1">select</option>
                                                @foreach (App\Brand::first()->get() as $brand)

                                                <option value="{{$brand->id}}">

                                                    {{ App\Category::where('id', App\Subcategory::where('id', $brand->Subcategory_id)->first()->Category_id)->first()->name }}->{{ App\Subcategory::where('id', $brand->Subcategory_id)->first()->name }}->>{{ $brand->name }}

                                                </option>

                                                @endforeach
                                            </select>
                                        </div>

                                        <!--            <div class="form-element">
                                        <label>Type</label>
                                        <span id="showType">
                                        <select name="subcategory_id" id="subcategory_id" >
                                            <option value="-1" > select </option>
                                        </select>
                                        </span>
                                </div>-->

                                        <!--            <div class="form-element"><label>Brand</label><select name=BrandID ><option value="-1"  >select</option><option value="198"  >3M</option><option value="45"  >A4Tech</option><option value="1"  >Acer</option><option value="65"  >AData</option><option value="85"  >Ainol</option><option value="93"  >Akij</option><option value="76"  >Alcatel</option><option value="44"  >Altec-Lansing</option><option value="2"  >AMD</option><option value="83"  >Antec</option><option value="129"  >Anviz</option><option value="53"  >Apacer</option><option value="3"  >Apple</option><option value="4"  >Asus</option><option value="194"  >Audi</option><option value="84"  >Avexir</option><option value="114"  >Avtech</option><option value="103"  >Awei</option><option value="178"  >Baijia</option><option value="139"  >Bajaj</option><option value="124"  >BaoFeng</option><option value="41"  >Belkin</option><option value="5"  >Benq</option><option value="6"  >Benq-Siemens</option><option value="89"  >Biostar</option><option value="165"  >Bixolon</option><option value="7"  >Blackberry</option><option value="175"  >BMW</option><option value="180"  >Bosch</option><option value="109"  >Bose</option><option value="52"  >Brother</option><option value="34"  >Canon</option><option value="75"  >Carrier</option><option value="100"  >Casio</option><option value="163"  >Cheerlux</option><option value="137"  >Chigo</option><option value="121"  >China</option><option value="71"  >Cisco</option><option value="8"  >Compaq</option><option value="90"  >Corsair</option><option value="113"  >CP Plus</option><option value="32"  >Creative</option><option value="51"  >D-Link</option><option value="64"  >Daewoo</option><option value="107"  >Dahua</option><option value="9"  >Dell</option><option value="185"  >Deng Yuan</option><option value="108"  >Edifier</option><option value="162"  >Eken</option><option value="10"  >Emachines</option><option value="40"  >Epson</option><option value="63"  >F&D</option><option value="118"  >Fanvil</option><option value="81"  >Fujifilm</option><option value="11"  >Fujitsu</option><option value="102"  >Gamdias</option><option value="176"  >Garrett</option><option value="12"  >Gateway</option><option value="78"  >General</option><option value="189"  >Genius</option><option value="13"  >Gigabyte</option><option value="133"  >Godrej</option><option value="130"  >Granding</option><option value="117"  >Grandstream</option><option value="97"  >Gree</option><option value="62"  >Haier</option><option value="172"  >Hamko</option><option value="127"  >Harman Kardon</option><option value="174"  >Havit</option><option value="157"  >Hero</option><option value="183"  >Heron</option><option value="112"  >Hikvision</option><option value="14"  >Hitachi</option><option value="167"  >HiTi</option><option value="140"  >Honda</option><option value="147"  >Honeywell</option><option value="15"  >HP</option><option value="16"  >HTC</option><option value="66"  >Huawei</option><option value="187"  >Huion</option><option value="136"  >Hundure</option><option value="196"  >Hyundai</option><option value="144"  >i-Life</option><option value="17"  >IBM</option><option value="148"  >IKE</option><option value="18"  >Intel</option><option value="111"  >JBL</option><option value="105"  >Jovision</option><option value="197"  >Kemei</option><option value="192"  >Kent</option><option value="126"  >Kenwood</option><option value="179"  >Kington</option><option value="170"  >Kirisun</option><option value="110"  >Konica Minolta</option><option value="184"  >Lan Shan</option><option value="143"  >Lava</option><option value="19"  >Lenovo</option><option value="20"  >LG</option><option value="73"  >Linksys</option><option value="35"  >LiteOn</option><option value="48"  >Logitech</option><option value="46"  >Mak</option><option value="70"  >Maximus</option><option value="39"  >Mercury</option><option value="42"  >Microlab</option><option value="58"  >Micromax</option><option value="37"  >Micronet</option><option value="57"  >Microsoft</option><option value="125"  >Midea</option><option value="88"  >Mikrotik</option><option value="171"  >Mitsubishi</option><option value="21"  >Motorola</option><option value="22"  >MSI</option><option value="23"  >NEC</option><option value="43"  >Netgear</option><option value="101"  >Netis</option><option value="60"  >Nikon</option><option value="156"  >Nissan</option><option value="24"  >Nokia</option><option value="149"  >Nuear</option><option value="79"  >Okapia</option><option value="119"  >Omron</option><option value="99"  >OnePlus</option><option value="80"  >Oppo</option><option value="86"  >Optoma</option><option value="31" selected >Others</option><option value="67"  >Panasonic</option><option value="25"  >Philips</option><option value="150"  >Phonak</option><option value="145"  >Plustek</option><option value="164"  >Posiflex</option><option value="49"  >Prolink</option><option value="82"  >Rado</option><option value="116"  >Rahimafrooz</option><option value="173"  >Rapoo</option><option value="154"  >Realme</option><option value="104"  >Remax</option><option value="152"  >Resound</option><option value="91"  >Ricoh</option><option value="120"  >Rongta</option><option value="168"  >Sam4S</option><option value="26"  >Samsung</option><option value="27"  >Sanyo</option><option value="169"  >Sato</option><option value="61"  >Seagate</option><option value="177"  >SecuScan</option><option value="92"  >Segotep</option><option value="166"  >Sewoo</option><option value="69"  >Sharp</option><option value="98"  >Siemens</option><option value="55"  >Silicon Power</option><option value="161"  >SJCAM</option><option value="138"  >Sky View</option><option value="38"  >Sony</option><option value="28"  >Sony Ericsson</option><option value="132"  >Soyal</option><option value="151"  >Starkey</option><option value="134"  >Su-Kam</option><option value="131"  >Suprema</option><option value="160"  >Suzuki</option><option value="47"  >Symphony</option><option value="191"  >Tamron</option><option value="195"  >Tata</option><option value="77"  >Tenda</option><option value="94"  >Thermaltake</option><option value="74"  >Tissot</option><option value="72"  >Titan</option><option value="182"  >Toa</option><option value="190"  >Topaz</option><option value="29"  >Toshiba</option><option value="122"  >Toten</option><option value="155"  >Toyota</option><option value="50"  >TP-Link</option><option value="36"  >Transcend</option><option value="59"  >TRENDnet</option><option value="141"  >TVS</option><option value="30"  >twinMos</option><option value="95"  >Ubiquiti</option><option value="193"  >Unilever</option><option value="135"  >Uniview</option><option value="33"  >Verbatim</option><option value="142"  >Verivide</option><option value="56"  >ViewSonic</option><option value="128"  >Virdi</option><option value="123"  >Vivanco</option><option value="87"  >Vivitek</option><option value="115"  >Vivo</option><option value="186"  >Wacom</option><option value="68"  >Walton</option><option value="54"  >Western Digital</option><option value="153"  >Widex</option><option value="96"  >Xiaomi</option><option value="188"  >XP-Pen</option><option value="158"  >Yamaha</option><option value="181"  >Yarmee</option><option value="159"  >Yeastar</option><option value="146"  >Zebra</option><option value="106"  >ZKTeco</option></select></div>-->

                                        <div class="form-element"><label>Model</label><input type="text" name="model"
                                                value=""></div>

                                        <div class="form-element"><label>Price</label><input type="number" name="price"
                                                value="" required></div>

                                        <div class="form-element">
                                            <label>Title</label>
                                            <textarea name="title"
                                                onkeydown="limitText(this.form.ListingTitle,this.form.countdown,57);"
                                                onkeyup="limitText(this.form.ListingTitle,this.form.countdown,55);" required></textarea>
                                        </div>

                                        <div class="form-element">
                                            <label>Description</label>
                                            <textarea name="description"
                                                onkeydown="limitText(this.form.ListingDescription,this.form.countdown,1000);"
                                                onkeyup="limitText(this.form.ListingDescription,this.form.countdown,1000);" required></textarea>
                                        </div>

                                        <div class="form-element"><label>Special Offer</label>
                                            <textarea name="offer"
                                                onkeydown="limitText(this.form.SpecialOffer,this.form.countdown,100);"
                                                onkeyup="limitText(this.form.SpecialOffer,this.form.countdown,100);" ></textarea>
                                        </div>

                                    </div>

                                    <div id="showItemFeature">


                                    </div>




                                    <div class="account-prod-image-box">

                                        <!--                            <a href="" id="image1-tab" onclick="tabmenu(1, 5); return false" class="">Image1</a>               -->
                                        <!--                            <a href="" id="image2-tab" onclick="tabmenu(2, 5); return false" class="">Image2</a>               -->
                                        <!--                            <a href="" id="image3-tab" onclick="tabmenu(3, 5); return false" class="">Image3</a>               -->
                                        <!--                            <a href="" id="image4-tab" onclick="tabmenu(4, 5); return false" class="">Image4</a>               -->
                                        <!--                            <a href="" id="image5-tab" onclick="tabmenu(5, 5); return false" class="">Image5</a>               -->

                                        <div class="image-box">

                                            <input type="hidden" name="IsDefault" value="-1">


                                            <input type="hidden" name="ListingAvatorID[0]" value="">
                                            <input type="hidden" name="ExistingListingAvator[0]" value="">


                                            <div id="image1">
                                                <input type="file" name="img" size="6" required>
                                            </div>


                                            <input type="hidden" name="ListingAvatorID[1]" value="">
                                            <input type="hidden" name="ExistingListingAvator[1]" value="">


                                            <div id="image2">
                                                <input type="file" name="img1" size="6">
                                            </div>


                                            <input type="hidden" name="ListingAvatorID[2]" value="">
                                            <input type="hidden" name="ExistingListingAvator[2]" value="">


                                            <div id="image3">
                                                <input type="file" name="img2" size="6">
                                            </div>


                                            <input type="hidden" name="ListingAvatorID[3]" value="">
                                            <input type="hidden" name="ExistingListingAvator[3]" value="">


                                            <div id="image4">
                                                <input type="file" name="img3" size="6">
                                            </div>


                                            <input type="hidden" name="ListingAvatorID[4]" value="">
                                            <input type="hidden" name="ExistingListingAvator[4]" value="">


                                            <div id="image5">
                                                <input type="file" name="img4" size="6">
                                            </div>


                                        </div>

                                        <div class="form-element s-top">
                                            <label></label>
                                            <input type="submit" value="Submit">
                                        </div>

                                    </div>
                                @else

                                    <div class="form-style">

                                        @if (!$count)

                                        <small> Item Post limit is over. Please increase the limit.</small><br>
                                        Limit : <font color="olive">{{ $stall->item_limit }}</font>
                                        Left : <font color="olive">{{ $count }}</font><br>

                                        @else

                                        <small> Item Post Date is Expire.</small><br>

                                        @endif


                                    </div>

                                @endif


                            </div>
                            <div class="four columns">


                                <div class="b-bottom">
                                    <b>
                                        <font color="green">Computer Item</font>
                                    </b><br>

                                    Limit : <font color="olive">{{ $stall->item_limit }}</font><br>
                                    Left : <font color="olive">{{ $count }}</font><br>
                                </div>


                                {{-- <div class="b-bottom">
                                    <b>
                                        <font color="green">PC</font>
                                    </b><br>

                                    Limit : <font color="olive">50</font><br>
                                    Left : <font color="olive">4</font><br>
                                </div> --}}



                            </div>

                        </div>



                        <br class="clear">
                    </div>




                </form>






            </div>
        </div>

    </div>

</div>

@endsection
