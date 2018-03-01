$("#login").click(function () {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "login",
        data: $('#myForm').serialize(),
        success: function (data) {
            if (data.success == TRUE) {
                alert(data.message);
                window.location.href('http://' + location.hostname + '/home/index');
            } else {
                alert(data.message);
            }
        },
        error: function () {
            alert("登录异常，请稍后再试！");
        }
    });
});