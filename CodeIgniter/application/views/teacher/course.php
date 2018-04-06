<div class="row" v-else-if="seen==='courselist'" xmlns="http://www.w3.org/1999/html">
    <div class="col-md-12">
        <div class="card">
            <button type="button" class="btn btn-primary course" data-toggle="modal" data-target="#addcourse">新建课程</button>
            <div class="content">
                <div class="fresh-datatables">
                    <table id="course" class="table table-striped table-no-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">课程</th>
                            <th class="text-center">任课老师</th>
                            <th class="text-center">学生人数</th>
                            <th class="text-center">状态</th>
                            <th class="text-center">更新时间</th>
                            <th class="disabled-sorting text-center">操作</th>
                            <th class="text-center">发起考试</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($course_list as $course) { ?>
                            <tr>
                                <td class="text-center"><?php echo $course->id; ?></td>
                                <td class="text-center"><?php echo $course->course_name; ?></td>
                                <td class="text-center"><?php echo $course->teacher; ?></td>
                                <td class="text-center"><?php echo $course->student_num; ?></td>
                                <td class="text-center"><?php echo $course->status; ?></td>
                                <td class="text-center"><?php echo date('Y-m-d', $course->update_time); ?></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit" data-toggle="modal" data-target="#editcourseinfo<?php echo $course->id; ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-simple btn-danger btn-icon remove">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <?php if ($course->status == "进行中"){ ?>
                                    <a href="#" class="btn btn-primary exam" data-toggle="modal" data-target="#startexam<?php echo $course->id; ?>">
                                        发起考试
                                    </a>
                                </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php foreach ($course_list as $course) { ?>
                <div class="modal fade" id="startexam<?php echo $course->id; ?>" tabindex="-1"
                     role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="startExam<?php echo $course->id; ?>" method="post" action="">
                                <div class="modal-header">
                                    <label>考试名称：</label><input type="text" name="exam_name">
                                    <label>监考老师：</label><input type="text" name="exam_monitor_teacher">
                                </div>
                                <div class="modal-body">
                                    <label>考试题库：</label>
                                    <select name="exam_question_id">
                                        <?php foreach ($question_list as $question) { ?>
                                            <option value="<?php echo $question->id ?>"><?php echo $question->question_name ?></option>
                                        <?php } ?>
                                    </select>
                                    <label>题目数量：</label><input type="text" name="exam_question_num">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" onclick="startExam(<?php echo $course->id; ?>)">
                                        确认发起考试
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editcourseinfo<?php echo $course->id; ?>" tabindex="-1"
                     role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="editcourse<?php echo $course->id; ?>" method="post" action="">
                                <div class="modal-header">
                                    <label>课程名称：</label><input name="course_name" type="text" value="<?php echo $course->course_name; ?>" style="width: 300px;" readonly>
                                </div>
                                <div class="modal-body course_instruction">
                                    <label>课程简介：</label>
                                    <textarea name="course_instruction"><?php echo $course->course_instruction; ?></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" onclick="editcourse(<?php echo $course->id; ?>)">
                                        确认修改并保存
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="modal fade" id="addcourse" tabindex="-1"
                 role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form id="addcourseinfo" method="post" action="">
                            <div class="modal-header">
                                <label>课程名称：</label><input name="course_name" type="text" style="width: 300px;">
                            </div>
                            <div class="modal-body course_instruction">
                                <label>课程简介：</label>
                                <textarea name="course_instruction"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="addcourse()">
                                    确认修改并保存
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>