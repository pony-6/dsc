<script src="{{ asset('assets/admin/js/jquery.purebox.js') }}"></script>
<script type="text/javascript">
    $(function () {
        // 操作提示
        $("#explanationZoom").on("click", function () {
            var explanation = $(this).parents(".explanation");
            var width = $(".content_tips").width();
            if ($(this).hasClass("shopUp")) {
                $(this).removeClass("shopUp");
                $(this).attr("title", "{{ lang('admin/common.fold_tips') }}");
                explanation.find(".ex_tit").css("margin-bottom", 10);
                explanation.animate({
                    width: width - 0
                }, 300, function () {
                    $(".explanation").find("ul").show();
                });
            } else {
                $(this).addClass("shopUp");
                $(this).attr("title", "{{ lang('admin/common.relevant_setup_operation') }}");
                explanation.find(".ex_tit").css("margin-bottom", 0);
                explanation.animate({
                    width: "118"
                }, 300);
                explanation.find("ul").hide();
            }
        });


        //弹出框
        $(".fancybox").fancybox({
            width: '60%',
            height: '60%',
            closeBtn: true,
            title: ''
        });

    });
</script>
</body>
</html>