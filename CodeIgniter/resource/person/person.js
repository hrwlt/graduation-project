function personedit() {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/person/personedit",
        data: $('#personeditForm').serialize(),
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
}

function personsafe() {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/person/personsafe",
        data: $('#personsafeForm').serialize(),
        success: function (data) {
            if (data.success == true) {
                alert(data.message);
                window.location.href = 'http://' + window.location.hostname + '/login/index';
            } else {
                alert(data.message);
            }
        },
        error: function () {
            alert("登录异常，请稍后再试！");
        }
    });
}

function upload($value) {
    var filePath = $value;
    if (filePath.indexOf("jpg") != -1 || filePath.indexOf("png") != -1 || filePath.indexOf("gif") != -1) {
        $(".fileerror").html("").hide();
        var arr = filePath.split('\\');
        var fileName = arr[arr.length - 1];
        $(".filename").html(fileName).show();
    } else {
        $(".filename").html("").hide();
        $(".fileerror").html("您上传文件类型有误！").show();
        return false
    }
}