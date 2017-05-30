@extends('layout.app')
@section('content')

<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-5">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
        <button class="btn btn btn-info" type="button">Go!</button>
      </span>
        </div><!-- /input-group -->
    </div>
    <div class="col-md-3"></div>

</div>
<div class="row">
    <div class="col-xs-12 col-md-1"></div>
    <div  class="col-xs-12 col-md-7 section_content top_nav ">
        <div class="col-md-12 url_nav">
            <ul class="nav_ul">
                <li><a>百度</a></li>
                <li><a>新浪</a></li>
                <li><a>淘宝</a></li>
                <li><a>安居客</a></li>
                <li><a>百度</a></li>
                <li><a>新浪</a></li>
                <li><a>淘宝</a></li>
                <li><a>安居客</a></li>
                <li><a>百度</a></li>
                <li><a>新浪</a></li>
                <li><a>淘宝</a></li>
                <li><a>安居客</a></li>
            </ul>
            <hr />

            <ul class="nav_ul">
                <li><a>百度</a></li>
                <li><a>新浪</a></li>
                <li><a>淘宝</a></li>
                <li><a>安居客</a></li>
            </ul>
        </div>
        <div class="col-md-12 url_nav">
            <div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
                <ul id="myTabs" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">要闻</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#profile" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">国内</a>
                    </li>

                </ul>
                <div id="news_content" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                        @include('news.focus')
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                        rewwerwerwewer
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 section_content top_nav">

    </div>
    <div>4</div>

</div>

@section('javascript')
<script type="application/javascript">

</script>
@endsection
