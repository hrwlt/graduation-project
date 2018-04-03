<div class="row" v-else-if="seen==='myCourse'">
    <div class="col-md-12">
        <button data-toggle="modal" data-target="#myCourse" type="button" class="btn btn-primary myCourse">自主选课</button>
        <div class="card">
            <div class="content table-responsive table-full-width">
                <table class="table table-bigboy">
                    <thead>
                    <tr>
                        <th class="text-center">封面</th>
                        <th class="text-center">课程名</th>
                        <th class="text-center">课程简介</th>
                        <th class="text-center">状态</th>
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
                    <form method="post" action="/student/course/chose_course">
                        <div class="modal-header">
                            <ul role="tablist">
                                <select name="course_id">
                                    <? foreach ($course_lists as $course_list) { ?>
                                        <option value="<?php echo $course_list->id; ?>">
                                            <li><a href="#message"
                                                   data-toggle="tab"><?php echo $course_list->course_name; ?>
                                                </a></li>
                                        </option>
                                    <?php } ?>
                                </select>
                            </ul>
                        </div>
                        <div class="modal-body">
                            <div class="tab-content">
                                <div id="info" class="tab-pane active">
                                    <p style="font-size: 15px;">dddd</p>
                                </div>
                                <div id="message" class="tab-pane">
                                    <p style="font-size: 15px;">暂无消息</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">确认选择</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>