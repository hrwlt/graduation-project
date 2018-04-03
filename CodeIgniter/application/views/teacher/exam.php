<div class="row" v-else-if="seen==='exam'">
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
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>