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
                                <button class="btn btn-primary" data-toggle="modal"
                                        data-target="#student_exam<?php echo $student_exam_list->id; ?>">开始考试
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php foreach ($student_exam_lists as $student_exam_list) { ?>
            <!-- 模态框（Modal） -->
            <div class="modal fade" id="student_exam<?php echo $student_exam_list->id; ?>" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="studentexamid<?php echo $student_exam_list->id; ?>" method="post" action="">
                            <div class="modal-header">
                                <p class="student_exam_title"><?php echo $student_exam_list->exam_name; ?>考试</p>
                            </div>
                            <div class="modal-body">
                                <?php foreach ($student_exam_list->exam_question as $exam_key => $exam_question) { ?>
                                    <p class="student_exam_question"><?php echo ($exam_key + 1) . '、' . $exam_question->question_name; ?></p>
                                    <?php foreach ($exam_question->option as $option_key => $option) { ?>
                                        <p class="student_exam_option"><input type="radio"
                                                                              value="<?php echo $option_key; ?>"
                                                                              name="option<?php echo $exam_key; ?>"><?php echo $option_array[$option_key] . $option; ?>
                                        </p>
                                    <? } ?>
                                    <input style="display: none;" name="right_option<?php echo $exam_key; ?>"
                                           value="<?php echo $exam_question->right_option; ?>">
                                <?php } ?>
                                <input style="display: none;" name="exam_question_num"
                                       value="<?php echo count($student_exam_list->exam_question); ?>">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"
                                        onclick="student_exam_end(<?php echo $student_exam_list->id; ?>)">提交答案
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>