function personedit() {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/person/personedit",
        data: $('#personeditForm').serialize(),
        success: function (data) {
            if (data.success == true) {
                swal({
                    title: "编辑成功！",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                },function(){
                    window.location.href = 'http://' + window.location.hostname + '/home/index/personedit/person/personedit';
                });  
            } else {
                swal({
                    title: "编辑失败！",
                    text: data.message,
                    type: "warning",
                    showConfirmButton: false,
                    showCancelButton: true,
                    cancelButtonClass: "btn btn-danger btn-fill",
                    cancelButtonText: "关闭"
                });
            }
        },
        error: function () {
            swal({
                title: "编辑异常，请稍后再试！",
                type: "warning",
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonClass: "btn btn-danger btn-fill",
                cancelButtonText: "关闭"
            });
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
                swal({
                    title: "密码修改成功！",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                },function(){
                    window.location.href = 'http://' + window.location.hostname + '/login/index';
                });
            } else {
                swal({
                    title: "密码修改失败！",
                    text: data.message,
                    type: "warning",
                    showConfirmButton: false,
                    showCancelButton: true,
                    cancelButtonClass: "btn btn-danger btn-fill",
                    cancelButtonText: "关闭"
                });
            }
        },
        error: function () {
            swal({
                title: "密码修改异常，请稍后再试！",
                type: "warning",
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonClass: "btn btn-danger btn-fill",
                cancelButtonText: "关闭"
            });
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