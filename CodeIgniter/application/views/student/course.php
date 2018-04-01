<div class="row" v-else-if="seen==='myCourse'">
    <div class="col-md-12">
        <div class="card">
            <div class="content table-responsive table-full-width">
                <table class="table table-bigboy">
                    <thead>
                    <tr>
                        <th class="text-center">封面</th>
                        <th class="text-center">课程名</th>
                        <th class="text-center">课程简介</th>
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
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>