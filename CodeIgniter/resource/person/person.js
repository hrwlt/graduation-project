$("#personedit").click(function () {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/person/personedit",
        data: $('#personeditform').serialize(),
        success: function (data) {
            if (data.success == true) {
                window.location.href = 'http://' + window.location.hostname + '/person/index/personedit';
            } else {
                alert(data.message);
            }
        },
        error: function () {
            alert("登录异常，请稍后再试！");
        }
    });
});