<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <script type="text/javascript" src="assets/jquery.min.js"></script>
</head>
<body>
<script>

    $.ajax({
        type: "GET",
        url: "http://comment.bilibili.com/18221667.xml",
        cache: false,
        success: function (html) {
            $("#results").append(html);
            console.log(html);
        }
    });

    var xml = '<rss version="2.0"><channel><title>RSS Title</title></channel></rss>',
            xmlDoc = $.parseXML(html),
            $xml = $( xmlDoc ),
            $title = $xml.find( 'i' );	        // append "RSS Title" to #someElement
    $( '#someElement' ).append( $title.text() );	    // change the title to "XML Title"
    $title.text( 'XML Title' );    // append "XML Title" to #anotherElement
    $( '#anotherElement' ).append( $title.text() );
</script>
</body>

</html>


.text


{{--<div class="icons"--}}
{{--style=" display:inline-block;height:80px; width: 80px; background:  url('assets/images/profile/anim-fav.png') no-repeat;--}}
{{--background-position-x:-80px;background-position-y: 0px;">--}}

{{--</div>--}}

{{--<script>--}}

{{--var animation_interval;--}}
{{--function start_animation_interval() {--}}
{{--animation_interval = setInterval(function () {--}}
{{--var position_x = $(".icons").css("background-position-x").replace("px", "") - 80;--}}
{{--//        alert(position_x);--}}
{{--if (position_x <= -1120) {--}}
{{--position_x = 0;--}}
{{--}--}}
{{--$(".icons").css("background-position-x", position_x + "px")--}}

{{--}, 10)--}}
{{--}--}}


{{--$(".icons").mouseenter(function () {--}}
{{--start_animation_interval();--}}
{{--//        $(".icons").css("background-position-x", "-960px");--}}
{{--});--}}

{{--$(".icons").mouseleave(function () {--}}
{{--clearInterval(animation_interval);--}}
{{--})--}}
{{--</script>--}}