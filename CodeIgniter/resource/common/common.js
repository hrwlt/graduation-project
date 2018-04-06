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
            this.operate = 'course';
            this.seen = 'courselist';
        },
        exam: function () {
            this.title = '考试列表';
            this.operate = 'exam';
            this.seen = 'examlist';
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

// 学生端选择课程显示
function course_change(obj) {
    $(".course_list").hide();
    if (obj.value != 0) {
        $("#div" + obj.value).show();
    }
}

function chose() {
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
                }, function () {
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

/* 教师端 */
// 知识点库删除
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
        table.on('click', '.remove', function (e) {
            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            //数据库中这行删除
            $knowledge_id = data[0];
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "/teacher/knowledge/delete_knowledge",
                data: "knowledge_id=" + $knowledge_id,
                success: function (data) {
                    if (data.success == true) {
                        swal({
                            title: "删除成功！",
                            type: "success",
                            timer: 1000,
                            showConfirmButton: false
                        }, function () {
                            window.location.href = 'http://' + window.location.hostname + '/home/index/knowledge/question/knowledgelist';
                        });
                    } else {
                        swal({
                            title: "删除失败！",
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
                        title: "删除异常，请稍后再试！",
                        type: "warning",
                        showConfirmButton: false,
                        showCancelButton: true,
                        cancelButtonClass: "btn btn-danger btn-fill",
                        cancelButtonText: "关闭"
                    });
                }
            });
            //列表中这行删除
            table.row($tr).remove().draw();
            e.preventDefault();
        });
    });
}

// 题库删除
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
            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            $question_id = data[0];
            //数据库中这行删除
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "/teacher/question/delete_question",
                data: "question_id=" + $question_id,
                success: function (data) {
                    if (data.success == true) {
                        swal({
                            title: "删除成功！",
                            type: "success",
                            timer: 1000,
                            showConfirmButton: false
                        }, function () {
                            window.location.href = 'http://' + window.location.hostname + '/home/index/question/question/questionlist';
                        });
                    } else {
                        swal({
                            title: "删除失败！",
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
                        title: "删除异常，请稍后再试！",
                        type: "warning",
                        showConfirmButton: false,
                        showCancelButton: true,
                        cancelButtonClass: "btn btn-danger btn-fill",
                        cancelButtonText: "关闭"
                    });
                }
            });
            //列表中这行删除
            table.row($tr).remove().draw();
            e.preventDefault();
        });
    });
}

// 课程删除
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
            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            $course_id = data[0];
            //数据库中这行删除
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "/teacher/course/delete_course",
                data: "course_id=" + $course_id,
                success: function (data) {
                    if (data.success == true) {
                        swal({
                            title: "删除成功！",
                            type: "success",
                            timer: 1000,
                            showConfirmButton: false
                        }, function () {
                            window.location.href = 'http://' + window.location.hostname + '/home/index/course/course/courselist';
                        });
                    } else {
                        swal({
                            title: "删除失败！",
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
                        title: "删除异常，请稍后再试！",
                        type: "warning",
                        showConfirmButton: false,
                        showCancelButton: true,
                        cancelButtonClass: "btn btn-danger btn-fill",
                        cancelButtonText: "关闭"
                    });
                }
            });
            //列表中这行删除
            table.row($tr).remove().draw();
            e.preventDefault();
        });
    });
}

// 考试结束
function teach_exam() {
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
        table.on('click', '.remove', function (e) {
            $tr = $(this).closest('tr');
            var data = table.row($tr).data();
            $exam_id = data[0];
            //数据库中这行删除
            $.ajax({
                type: "POST",
                dataType: "json",
                url: "/teacher/exam/end_exam",
                data: "exam_id=" + $exam_id,
                success: function (data) {
                    if (data.success == true) {
                        swal({
                            title: "结束考试成功！",
                            type: "success",
                            timer: 1000,
                            showConfirmButton: false
                        }, function () {
                            window.location.href = 'http://' + window.location.hostname + '/home/index/exam/exam/examlist';
                        });
                    } else {
                        swal({
                            title: "结束考试失败！",
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
                        title: "结束考试异常，请稍后再试！",
                        type: "warning",
                        showConfirmButton: false,
                        showCancelButton: true,
                        cancelButtonClass: "btn btn-danger btn-fill",
                        cancelButtonText: "关闭"
                    });
                }
            });
            //列表中这行删除
            table.row($tr).remove().draw();
            e.preventDefault();
        });
    });
}

// 修改某个知识点库
function editknowledge(id) {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/teacher/knowledge/edit_knowledge_list",
        data: "knowledge_id=" + id + "&" + $('#knowledge_list_edit' + id).serialize(),
        success: function (data) {
            if (data.success == true) {
                swal({
                    title: "修改成功！",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                }, function () {
                    window.location.href = 'http://' + window.location.hostname + '/home/index/knowledge/question/knowledgelist';
                });
            } else {
                swal({
                    title: "修改失败！",
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
                title: "修改异常，请稍后再试！",
                type: "warning",
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonClass: "btn btn-danger btn-fill",
                cancelButtonText: "关闭"
            });
        }
    });
}

// 添加知识点库
function add_knowledge_list() {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/teacher/knowledge/add_knowledge_list",
        data: $('#add_knowledge_list').serialize(),
        success: function (data) {
            if (data.success == true) {
                swal({
                    title: "添加成功！",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                }, function () {
                    window.location.href = 'http://' + window.location.hostname + '/home/index/knowledge/question/knowledgelist';
                });
            } else {
                swal({
                    title: "添加失败！",
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
                title: "添加异常，请稍后再试！",
                type: "warning",
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonClass: "btn btn-danger btn-fill",
                cancelButtonText: "关闭"
            });
        }
    });
}

// 发起考试
function startExam(id) {
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/teacher/exam/startExam",
        data: "course_id=" + id + "&" + $('#startExam' + id).serialize(),
        success: function (data) {
            if (data.success == true) {
                swal({
                    title: "添加成功！",
                    type: "success",
                    timer: 1000,
                    showConfirmButton: false
                }, function () {
                    window.location.href = 'http://' + window.location.hostname + '/home/index/knowledge/question/knowledgelist';
                });
            } else {
                swal({
                    title: "添加失败！",
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
                title: "添加异常，请稍后再试！",
                type: "warning",
                showConfirmButton: false,
                showCancelButton: true,
                cancelButtonClass: "btn btn-danger btn-fill",
                cancelButtonText: "关闭"
            });
        }
    });
}
