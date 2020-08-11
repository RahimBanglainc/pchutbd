@extends('layouts.storefront.layout')

@section('title','Stall Update')


@section('main')

<div id="app">

    <div name="clientForm">


        <input type="hidden" name="UserID" value="23272">

        <div class="container">

            <div class="row">


                @include('storefront.components.saidbar')



                <form action="{{ route('client.item.update', $item->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')





                    <div class="nine columns account-head">




                        <div class="body-header">
                            <h1>Update Product</h1>
                        </div>

                        <!--                <span>Active</span>-->

                        <div clas="row">
                            <div class="six columns">

                                <div class="form-style">

                                    <div class="form-element"><label>Stock</label><select name="stock" required>
                                            <option value="">select status</option>
                                    <option value="1" {{$item->stock ? 'selected':'' }}>In Stock</option>
                                            <option value="0" {{$item->stock ? '':'selected' }}>Sold Out</option>
                                        </select></div>


                                    <div class="form-element"><label>Price</label><input type="text" name="price"
                                            value="{{$item->price}}" required></div>


                                    <div class="form-element"><label></label><span style="color:#5F7084">Delivery
                                            Fee</span></div>

                                    <div class="form-element"><label>Dhaka</label><input type="text" placeholder="৳ 60"
                                            name="ship_dhaka" value="{{$item->ship_dhaka}}" required></div>

                                    <div class="form-element"><label>Bangladesh</label><input type="text"
                                    placeholder="৳ 130" name="ship_bd" value="{{$item->ship_bd}}" required></div>


                                    <div class="form-element"><label>Offer</label>

                                        <textarea name="offer"
                                            onkeydown="limitText(this.form.SpecialOffer,this.form.countdown,100);"
                                            onkeyup="limitText(this.form.SpecialOffer,this.form.countdown,100);">{{$item->offer}}</textarea>
                                    </div>

                                </div>

                                <div class="s-top"><input type="submit" name="btnSave" value="Update"></div>

                            </div>


                            <div class="six columns form-style">

                                <div class="form-element"><label>Item ID</label>{{$item->id}}</div>


                                <div class="form-element"><label>Title</label><textarea readonly="readonly"
                                        name="title"
                                        style="height:auto">{{$item->title}}</textarea>
                                </div>

                                <div class="form-element"><label>Description</label>
                                    <textarea readonly="readonly" name="ListingDescription"
                                        onkeydown="limitText(this.form.ListingDescription,this.form.countdown,1000);"
                                        onkeyup="limitText(this.form.ListingDescription,this.form.countdown,1000);">{{$item->description}}</textarea>
                                </div>

                                <div class="form-element"><label>Stall</label><select name="stall_id">
                                        <option value="{{$item->stall_id}}" selected="">{{$item->stall()->where('id', $item->stall_id)->first()->name}}</option>
                                    </select></div>

                                <div class="form-element"><label>Item</label><select name="subcategory_id"
                                        onchange="selectItemFeature()">
                                        <option value="{{$item->subcategory_id}}" selected="">{{$item->subcategory()->where('id', $item->subcategory_id)->first()->name}}</option>
                                    </select></div>

                                <!--            <div class="form-element"><label>Type</label>
                            <span id="showType">
                            <select name=ItemTypeID onchange="selectItemFeature()" ><option value="474" selected >Gaming PC</option></select>                            </span>
            </div>-->

                                <div class="form-element"><label>Brand</label><select name="brand_id">
                                        <option value="0" selected="">Others</option>
                                    </select></div>

                                <div class="form-element"><label>Model</label><input type="text" readonly="readonly"
                                        name="model" value="{{$item->model}}" maxlength="20">

                                </div>

                            </div>

                            <div id="showItemFeature">



                                <table style="width:100%">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b>Item Features</b>
                                            </td>
                                        </tr>

                                        <tr style="background-color:#EFF0F2;">
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[0]" value="19">
                                                Processor Type </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[0]"
                                                    value="AMD Ryzen 5 3400G" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[1]" value="22">
                                                Processor Speed </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[1]"
                                                    value=" Up to 4.2 GHz Maximum Boost Clock"
                                                    style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr style="background-color:#EFF0F2;">
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[2]" value="25">
                                                Main Board </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[2]"
                                                    value="Gigabyte A320M-S2H" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[3]" value="40">
                                                Monitor </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[3]"
                                                    value="19&quot; LED Monitor" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr style="background-color:#EFF0F2;">
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[4]" value="28">
                                                RAM </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[4]"
                                                    value="DDR-4 8GB RAM" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[5]" value="31">
                                                Hard Disk </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[5]"
                                                    value="500GB Hard Disk Drive" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[6]" value="1714">
                                                Disk Type </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[6]"
                                                    value="" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[7]" value="37">
                                                Graphics Card </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[7]"
                                                    value="" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr style="background-color:#EFF0F2;">
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[8]" value="34">
                                                Optical Drive </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[8]"
                                                    value="" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[9]" value="43">
                                                Audio / Speaker </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[9]"
                                                    value="" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr style="background-color:#EFF0F2;">
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[10]" value="46">
                                                Networking </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[10]"
                                                    value="LAN / USB / Wi-Fi" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[11]" value="49">
                                                Keyboard </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[11]"
                                                    value="USB Standard Keyboard" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr style="background-color:#EFF0F2;">
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[12]" value="52">
                                                Mouse </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[12]"
                                                    value="USB Standard Mouse" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[13]" value="55">
                                                Modem </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[13]"
                                                    value="" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr style="background-color:#EFF0F2;">
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[14]" value="58">
                                                Casing </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[14]"
                                                    value="" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[15]" value="61">
                                                Software </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[15]"
                                                    value="" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr style="background-color:#EFF0F2;">
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[16]" value="64">
                                                Other Features </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[16]"
                                                    value="" style="width:100% !important">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td width="30%" align="left">
                                                <input type="hidden" name="ItemFeatureID[17]" value="67">
                                                Warranty </td>
                                            <td width="70%" align="left">
                                                <input type="text" readonly="readonly" name="ItemFeatureDescription[17]"
                                                    value="3 Years Standard Warranty" style="width:100% !important">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table><input type="hidden" name="rowCount" value="18">

                            </div>

                            <div class="hometab">

                                {{-- <a href="" id="image1-tab" onclick="tabmenu(1, 5); return false"
                                    class="selHomeTab">Image1</a>
                                <a href="" id="image2-tab" onclick="tabmenu(2, 5); return false" class="">Image2</a>
                                <a href="" id="image3-tab" onclick="tabmenu(3, 5); return false" class="">Image3</a>
                                <a href="" id="image4-tab" onclick="tabmenu(4, 5); return false" class="">Image4</a>
                                <a href="" id="image5-tab" onclick="tabmenu(5, 5); return false" class="">Image5</a> --}}

                                <div class="s-top">


                                    <input type="hidden" name="ListingAvatorID[0]" value="105346">
                                    <input type="hidden" name="ExistingListingAvator[0]" value="jpg">


                                    <div style="" id="image1">
                                        <div class="tab-window-row">
                                            <img src="https://www.bdstall.com/asset/product-image/giant_105346.jpg"
                                                style="max-width:100%; min-height: 10em">
                                        </div>

                                        <div class="tab-window-row b-top" style="color: #5F7084">
                                            Uploaded: 500 x 353 (82 KB)
                                        </div>

                                        <div class="tab-window-row b-top">
                                            <input type="file" name="ListingAvator[0]" size="6" disabled="">
                                        </div>

                                        <div style="display:none">
                                            <input type="hidden" name="IsDefault" value="0" checked="" enabled="">
                                        </div>
                                    </div>


                                    <input type="hidden" name="ListingAvatorID[1]" value="">
                                    <input type="hidden" name="ExistingListingAvator[1]" value="">


                                    <div style="display:none" id="image2">
                                        <div class="tab-window-row">
                                            <img src="https://www.bdstall.com/asset/static-image/imagebox.jpeg"
                                                style="max-width:100%; min-height: 10em">
                                        </div>


                                        <div class="tab-window-row b-top">
                                            <input type="file" name="ListingAvator[1]" size="6" disabled="">
                                        </div>

                                        <div style="display:none">
                                            <input type="hidden" name="IsDefault" value="1" disabled="">
                                        </div>
                                    </div>


                                    <input type="hidden" name="ListingAvatorID[2]" value="">
                                    <input type="hidden" name="ExistingListingAvator[2]" value="">


                                    <div style="display:none" id="image3">
                                        <div class="tab-window-row">
                                            <img src="https://www.bdstall.com/asset/static-image/imagebox.jpeg"
                                                style="max-width:100%; min-height: 10em">
                                        </div>


                                        <div class="tab-window-row b-top">
                                            <input type="file" name="ListingAvator[2]" size="6" disabled="">
                                        </div>

                                        <div style="display:none">
                                            <input type="hidden" name="IsDefault" value="2" disabled="">
                                        </div>
                                    </div>


                                    <input type="hidden" name="ListingAvatorID[3]" value="">
                                    <input type="hidden" name="ExistingListingAvator[3]" value="">


                                    <div style="display:none" id="image4">
                                        <div class="tab-window-row">
                                            <img src="https://www.bdstall.com/asset/static-image/imagebox.jpeg"
                                                style="max-width:100%; min-height: 10em">
                                        </div>


                                        <div class="tab-window-row b-top">
                                            <input type="file" name="ListingAvator[3]" size="6" disabled="">
                                        </div>

                                        <div style="display:none">
                                            <input type="hidden" name="IsDefault" value="3" disabled="">
                                        </div>
                                    </div>


                                    <input type="hidden" name="ListingAvatorID[4]" value="">
                                    <input type="hidden" name="ExistingListingAvator[4]" value="">


                                    <div style="display:none" id="image5">
                                        <div class="tab-window-row">
                                            <img src="https://www.bdstall.com/asset/static-image/imagebox.jpeg"
                                                style="max-width:100%; min-height: 10em">
                                        </div>


                                        <div class="tab-window-row b-top">
                                            <input type="file" name="ListingAvator[4]" size="6" disabled="">
                                        </div>

                                        <div style="display:none">
                                            <input type="hidden" name="IsDefault" value="4" disabled="">
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="u-pull-left b-top">
                                <input type="submit" name="btnSave" value="Update" class="submit"
                                    >
                            </div>

                        </div>
                    </div>





            </div>

            </form>



        </div>
    </div>

</div>

</div>

@endsection
