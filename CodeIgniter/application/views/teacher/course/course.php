<div class="row" v-else-if="seen==='courselist'">
    <div class="col-md-12">
        <div class="card">
            <div class="content">
                <div class="fresh-datatables">
                    <table id="course" class="table table-striped table-no-bordered table-hover">
                        <thead>
                        <tr>
                            <th>课程</th>
                            <th>任课老师</th>
                            <th>学生人数</th>
                            <th>状态</th>
                            <th>更新时间</th>
                            <th class="disabled-sorting text-right">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($course_list as $course) { ?>
                            <tr>
                                <td><?php echo $course->course_name; ?></td>
                                <td><?php echo $course->teacher; ?></td>
                                <td><?php echo $course->student_num; ?></td>
                                <td><?php echo $course->status; ?></td>
                                <td><?php echo date('Y-m-d', $course->update_time); ?></td>
                                <td class="text-right">
                                    <a href="javescript:;" class="btn btn-simple btn-warning btn-icon edit">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="javescript:;" class="btn btn-simple btn-danger btn-icon remove">
                                        <i class="fa fa-times"></i>
                                    </a>
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