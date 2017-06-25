<script src="assets/jquery.min.js"></script>


<div class="icons"
     style=" display:inline-block;height:80px; width: 80px; background:  url('assets/images/profile/anim-fav.png') no-repeat;
                        background-position-x:-80px;background-position-y: 0px;">

</div>

<script>

    var animation_interval;
    function start_animation_interval() {
        animation_interval = setInterval(function () {
            var position_x = $(".icons").css("background-position-x").replace("px", "") - 80;
//        alert(position_x);
            if (position_x <= -1120) {
                position_x = 0;
            }
            $(".icons").css("background-position-x", position_x + "px")

        }, 10)
    }


    $(".icons").mouseenter(function () {
        start_animation_interval();
//        $(".icons").css("background-position-x", "-960px");
    });

    $(".icons").mouseleave(function () {
        clearInterval(animation_interval);
    })
</script>