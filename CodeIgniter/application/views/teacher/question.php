<div class="row" v-else-if="seen==='questionlist'">
    <div class="col-md-12">
        <div class="card">
            <button type="button" class="btn btn-primary question">新建课程</button>
            <div class="content">
                <div class="fresh-datatables">
                    <table id="question" class="table table-striped table-no-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">题库名称</th>
                            <th class="text-center">创建人</th>
                            <th class="text-center">知识点库</th>
                            <th class="text-center">状态</th>
                            <th class="text-center">更新时间</th>
                            <th class="disabled-sorting text-center">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($question_list as $question) { ?>
                            <tr>
                                <td class="text-center"><?php echo $question->question_name; ?></td>
                                <td class="text-center"><?php echo $question->creater; ?></td>
                                <td class="text-center"><?php echo $question->knowledge_id; ?></td>
                                <td class="text-center"><?php echo $question->status; ?></td>
                                <td class="text-center"><?php echo date('Y-m-d', $question->update_time); ?></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-simple btn-warning btn-icon edit"><i
                                            class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-simple btn-danger btn-icon remove"><i
                                            class="fa fa-times"></i></a>
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