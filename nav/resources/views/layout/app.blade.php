<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap - 简洁、直观、强悍、移动设备优先的前端开发框架，让web开发更迅速、简单。">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="author" content="leon xia <xialeidns@gmail.com>">

    <title>
        nav
    </title>

    <!-- Bootstrap core CSS -->

    <link href="{{url('/css')}}/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/css')}}/index.css" rel="stylesheet">


    <!-- Optional Bootstrap Theme -->

    <link href="data:text/css;charset=utf-8," data-href="{{url('/css')}}/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicons -->
    {{--<link rel="apple-touch-icon" href="/apple-touch-icon.png">--}}
    {{--<link rel="icon" href="/favicon.ico">--}}

</head>
<body>
@yield('content')

<footer class="bs-docs-footer">
    <div class="container">
        <p>Designed and built with all the love in the world by <a href="https://twitter.com/mdo" target="_blank">@mdo</a> and <a href="https://twitter.com/fat" target="_blank">@fat</a>. Maintained by the <a href="https://github.com/orgs/twbs/people">core team</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributors</a>.</p>

    </div>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{url('js')}}/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')</script>


<script src="{{url('/js')}}/bootstrap.min.js"></script>


</body>
</html>
