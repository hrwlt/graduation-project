<div class="row" v-else-if="seen==='examlist'">
    <div class="col-md-12">
        <div class="card">
            <div class="content">
                <div class="fresh-datatables">
                    <table id="exam" class="table table-striped table-no-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">考试名称</th>
                            <th class="text-center">创建老师</th>
                            <th class="text-center">监考老师</th>
                            <th class="text-center">状态</th>
                            <th class="text-center">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($exam_lists as $exam_list) { ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo $exam_list->id; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $exam_list->exam_name; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $exam_list->creater; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $exam_list->monitor_teacher; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $exam_list->status; ?>
                                </td>
                                <?php if ($exam_list->creater == $this->session->username && $exam_list->status == "正在进行中") { ?>
                                    <td class="text-center">
                                        <a href="#" type="button" class="btn btn-danger remove">结束考试</a>
                                    </td>
                                <?php } else { ?>
                                    <td></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>