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