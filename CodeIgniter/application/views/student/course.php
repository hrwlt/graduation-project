<div class="row" v-else-if="seen==='myCourse'">
    <div class="col-md-12">
        <button data-toggle="modal" data-target="#myCourse" type="button" class="btn btn-primary myCourse">自主选课</button>
        <div class="card">
            <div class="content table-responsive table-full-width">
                <table class="table table-bigboy">
                    <thead>
                    <tr>
                        <th class="text-center" width="133px">封面</th>
                        <th class="text-center" width="155px">课程名</th>
                        <th class="text-center" width="344px">课程简介</th>
                        <th class="text-center" width="88px">状态</th>
                        <th class="text-center">更多</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($student_course_lists as $student_course_list) { ?>
                        <tr>
                            <td>
                                <div class="img-container">
                                    <img src="/resource/imgs/<?php echo $student_course_list->course_img; ?>">
                                </div>
                            </td>
                            <td class="text-center">
                                <?php echo $student_course_list->course_name; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $student_course_list->course_instruction; ?>
                            </td>
                            <td class="text-center">
                                <?php echo $student_course_list->course_status; ?>
                            </td>
                            <?php if ($student_course_list->course_status === '进行中') { ?>
                                <td class="text-center">
                                    <a type="button" class="btn btn-primary"
                                       href="/student/study/index/<?php echo $student_course_list->id; ?>">立即学习</a>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 模态框（Modal） -->
        <div class="modal fade" id="myCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="course_list" method="post" action="">
                        <div class="modal-header">
                            <label>请选择课程：</label>
                            <select name="course_id" style="height: 30px;" onchange="course_change(this)">
                                <option value="0" selected>请选择你想选休课程</option>
                                <? foreach ($course_lists as $course_list) { ?>
                                    <option value="<?php echo $course_list->id; ?>">
                                        <?php echo $course_list->course_name; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bigboy">
                                <thead>
                                <tr>
                                    <th class="text-center" width="111px">封面</th>
                                    <th class="text-center" width="333px">课程简介</th>
                                    <th class="text-center">任课老师</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($course_lists as $course_list) { ?>
                                    <tr class="course_list" id="div<?php echo $course_list->id; ?>"
                                        style="display: none;">
                                        <td>
                                            <div class="img-container">
                                                <img src="/resource/imgs/<?php echo $course_list->course_img; ?>">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $course_list->course_instruction; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $course_list->teacher; ?>
                                        </td>
                                    </tr>
                                <? } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="chose()">确认选择</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>