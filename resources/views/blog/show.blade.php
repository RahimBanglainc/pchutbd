@extends('layouts.storefront.layout')

@section('title','Blog')

@section('main')

@push('css')

<style>
    /* The alert message box */
.alert {
  padding: 20px;
  background-color: #ff9800; /* Red */
  color: white;
  margin-bottom: 15px;
  border-radius: 10px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
}
</style>


@endpush


<div class="container">

    <form name="clientForm" method="post" enctype="multipart/form-data">

        <div class="m-top breadcum">
            <label>

                <a href="{{ route('index') }}" class="sortLink">Home</a><span>
                    &nbsp;&gt;&nbsp;</span><a class="sortLinkClk" href="{{ route('blog') }}">Blog</a>

            </label>


        </div>


        <div class="row">

            @if ($blog->status == true)

            <div class="mag-body-header">
                <h1>{{ $blog->title }}</h1>
            </div>

            <div class="row s-top">
                <div class="u-pull-left">{{ $blog->created_at->toFormattedDateString() }}</div>
                <div class="u-pull-right">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.show',$blog->slug) }}"
                        target="_blank">
                        <img alt="Share on Facebook" title="Share on Facebook"
                            src="{{ asset('img/fb_share.jpg') }}">
                    </a>
                    <a target="_blank"
                        href="http://twitter.com/home?status={{ route('blog.show',$blog->slug) }}"><img
                            alt="Post on Twitter" title="Post on Twitter"
                            src="{{ asset('img/twitter_share.jpg') }}"></a>
                </div>
            </div>

            <div class="mag-content">

                {!! $blog->body!!}

                <hr>
            </div>


            @else

                <div class="alert alert-info">
                    <strong>Info!</strong> This Blog is Inactive from Admin.
                </div>

              {{-- <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                This is an alert box.
              </div> --}}

            @endif

            <div class="product-review b-top">


                <input type="hidden" name="id" value="434">
                <input type="hidden" name="url_title" value="tips-for-using-hair-trimmer">
                <input type="hidden" name="lang_id" value="2">
                {{-- <div class="m-top b-bottom">

                    <b>Reviews</b> <span class="product-review-lbl">(0)</span>

                    <img src="./assets/no-rating.png" width="15">

                    <img src="./assets/no-rating.png" width="15">

                    <img src="./assets/no-rating.png" width="15">

                    <img src="./assets/no-rating.png" width="15">

                    <img src="./assets/no-rating.png" width="15">

                    <a href="javascript:review()">Write a Review</a>
                </div> --}}

            </div>
            <br>


            <div class="row u-full-width u-pull-left m-top">

                @foreach($rblogs as $rblog)

                @if ($rblog->status == true)

                    <div class="mag-related-box" style="max-height: 10em">

                        <a href="{{ route('blog.show',$rblog->slug) }}">
                            <div class="mag-related-box-img">
                                <img src="{{ Storage::disk('public')->url('blog/'.$rblog->img) }}"
                                    title="{{ $blog->title }}">
                            </div>
                            <div class="mag-related-box-item-title">
                                {{ \Illuminate\Support\str::limit($rblog->title, 27) }}
                            </div>
                        </a>
                    </div>

                @endif


                @endforeach

            </div>

        </div>
    </form>



</div>

@push('js')

@endpush



@endsection
