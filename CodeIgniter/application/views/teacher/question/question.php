<div class="row" v-else-if="seen==='questionlist'">
    <div class="col-md-12">
        <div class="card">
            <div class="content">
                <div class="fresh-datatables">
                    <table id="question" class="table table-striped table-no-bordered table-hover">
                        <thead>
                        <tr>
                            <th>题库名称</th>
                            <th>创建人</th>
                            <th>知识点库</th>
                            <th>状态</th>
                            <th>更新时间</th>
                            <th class="disabled-sorting text-right">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($question_list as $question) { ?>
                            <tr>
                                <td><?php echo $question->question_name; ?></td>
                                <td><?php echo $question->creater; ?></td>
                                <td><?php echo $question->knowledge_id; ?></td>
                                <td><?php echo $question->status; ?></td>
                                <td><?php echo date('Y-m-d', $question->update_time); ?></td>
                                <td class="text-right">
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