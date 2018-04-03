var title = $('#title').attr('title');
var operate = $('#operate').attr('operate');
var seen = $('#seen').attr('seen');
var vm = new Vue({
    el: '#container',
    data: {
        seen: seen,
        operate: operate,
        title: title
    },
    methods: {
        edit: function () {
            this.title = '个人中心 - 基本设置';
            this.operate = 'person';
            this.seen = 'personedit';
        },
        avatar: function () {
            this.title = '个人中心 - 头像设置';
            this.operate = 'person';
            this.seen = 'personavatar';
        },
        safe: function () {
            this.title = '个人中心 - 安全设置';
            this.operate = 'person';
            this.seen = 'personsafe';
        },
        questionlist: function () {
            this.title = '我的试题库';
            this.operate = 'question';
            this.seen = 'questionlist';
        },
        knowledgelist: function () {
            this.title = '我的知识点库';
            this.operate = 'question';
            this.seen = 'knowledgelist';
        },
        courselist: function () {
            this.title = '我的课程';
            this.operate = 'teach';
            this.seen = 'courselist';
        },
        exam: function () {
            this.title = '考试列表';
            this.operate = 'exam';
            this.seen = 'exam';
        },
        myExam: function () {
            this.title = '我的考试';
            this.operate = 'myExam';
            this.seen = 'myExam';
        },
        myCourse: function () {
            this.title = '我的课程';
            this.operate = 'myCourse';
            this.seen = 'myCourse';
        }
    }
});

function course_change(obj){
    $(".course_list").hide();
    if(obj.value != 0){
        $("#div" + obj.value).show();
    }
}

function course() {
    $(document).ready(function () {
        var table = $('#course').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [[10, 25, -1], [10, 25, "全部"]],
            "bRetrieve": "true",
            language: {
                search: "_INPUT_",
                searchPlaceholder: "关键字查询",
                sEmptyTable: "你还没有新建课程",
                sZeroRecords: "没有匹配结果",
                sInfo: "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                sInfoEmpty: "显示第 0 至 0 项结果，共 0 项",
                sInfoFiltered: "(由 _MAX_ 项结果过滤)",
                sLengthMenu: "显示 _MENU_ 项结果",
                oPaginate: {
                    sFirst: "首页",
                    sPrevious: "上页",
                    sNext: "下页",
                    sLast: "末页"
                }
            }
        });
        table.on('click', '.edit', function () {
            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });
        table.on('click', '.remove', function (e) {
            //数据库中这行删除

            //列表中这行删除
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });
    });
}

function chose(){
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/student/course/chose_course",
        data: $('#course_list').serialize(),
        success: function (data) {
            if (data.success == true) {
                swal({
                    title: "选修成功！",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                },function(){
                    window.location.href = 'http://' + window.location.hostname + '/student/course/index';
                });  
            } else {
                swal({
                    title: "选修失败！",
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
                title: "选修异常，请稍后再试！",
                type: "warning",
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonClass: "btn btn-danger btn-fill",
                cancelButtonText: "关闭"
            });
        }
    });
}

function knowledge() {
    $(document).ready(function () {
        var table = $('#knowledge').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [[10, 25, -1], [10, 25, "全部"]],
            "bRetrieve": "true",
            language: {
                search: "_INPUT_",
                searchPlaceholder: "关键字查询",
                sEmptyTable: "你还没有新建知识点",
                sZeroRecords: "没有匹配结果",
                sInfo: "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                sInfoEmpty: "显示第 0 至 0 项结果，共 0 项",
                sInfoFiltered: "(由 _MAX_ 项结果过滤)",
                sLengthMenu: "显示 _MENU_ 项结果",
                oPaginate: {
                    sFirst: "首页",
                    sPrevious: "上页",
                    sNext: "下页",
                    sLast: "末页"
                }
            }
        });
        table.on('click', '.edit', function () {
            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });
        table.on('click', '.remove', function (e) {
            //数据库中这行删除

            //列表中这行删除
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });
    });
}

function question() {
    $(document).ready(function () {
        var table = $('#question').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [[10, 25, -1], [10, 25, "全部"]],
            "bRetrieve": "true",
            language: {
                search: "_INPUT_",
                searchPlaceholder: "关键字查询",
                sEmptyTable: "你还没有新建知识点",
                sZeroRecords: "没有匹配结果",
                sInfo: "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                sInfoEmpty: "显示第 0 至 0 项结果，共 0 项",
                sInfoFiltered: "(由 _MAX_ 项结果过滤)",
                sLengthMenu: "显示 _MENU_ 项结果",
                oPaginate: {
                    sFirst: "首页",
                    sPrevious: "上页",
                    sNext: "下页",
                    sLast: "末页"
                }
            }
        });
        table.on('click', '.edit', function () {
            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });
        table.on('click', '.remove', function (e) {
            //数据库中这行删除

            //列表中这行删除
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });
    });
}

function exam() {
    $(document).ready(function () {
        var table = $('#exam').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [[10, 25, -1], [10, 25, "全部"]],
            "bRetrieve": "true",
            language: {
                search: "_INPUT_",
                searchPlaceholder: "关键字查询",
                sEmptyTable: "你还没有新建知识点",
                sZeroRecords: "没有匹配结果",
                sInfo: "显示第 _START_ 至 _END_ 项结果，共 _TOTAL_ 项",
                sInfoEmpty: "显示第 0 至 0 项结果，共 0 项",
                sInfoFiltered: "(由 _MAX_ 项结果过滤)",
                sLengthMenu: "显示 _MENU_ 项结果",
                oPaginate: {
                    sFirst: "首页",
                    sPrevious: "上页",
                    sNext: "下页",
                    sLast: "末页"
                }
            }
        });
        table.on('click', '.edit', function () {
            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });
        table.on('click', '.remove', function (e) {
            //数据库中这行删除

            //列表中这行删除
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });
    });
}