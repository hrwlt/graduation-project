<div class="row" v-else-if="seen==='myExam'">
    <div class="col-md-12">
        <div class="card">
            <div class="content table-responsive table-full-width">
                <table class="table table-bigboy">
                    <thead>
                    <tr>
                        <th class="text-center">考试ID</th>
                        <th class="text-center">考试名称</th>
                        <th class="text-center">发起老师</th>
                        <th class="text-center">监考老师</th>
                        <th class="text-center">开始考试</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($student_exam_lists as $student_exam_list) { ?>
                        <tr>
                            <td class="text-center">
                                <?php echo $student_exam_list->id; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $student_exam_list->exam_name; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $student_exam_list->creater; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $student_exam_list->monitor_teacher; ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-primary">开始考试</button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>





        </div>
    </div>
</div>
