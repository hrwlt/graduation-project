<div class="row" v-else-if="seen==='questionlist'">
    <div class="col-md-12">
        <div class="card">
            <button data-toggle="modal" data-target="#addQuestion" type="button" class="btn btn-primary question">新建题库</button>
            <div class="content">
                <div class="fresh-datatables">
                    <table id="question" class="table table-striped table-no-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">题库名称</th>
                            <th class="text-center">创建人</th>
                            <th class="text-center">知识点库</th>
                            <th class="text-center">更新时间</th>
                            <th class="disabled-sorting text-center">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($question_list as $question) { ?>
                            <tr>
                                <td class="text-center"><?php echo $question->id; ?></td>
                                <td class="text-center"><?php echo $question->question_name; ?></td>
                                <td class="text-center"><?php echo $question->creater; ?></td>
                                <td class="text-center"><?php echo $question->knowledge_id; ?></td>
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
        <div class="modal fade" id="addQuestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="add_question_list" method="post" action="">
                        <div class="modal-header">
                            <label>请选择对应知识点库：</label>
                            <select name="knowledge_id" style="height: 30px;">
                                <option value="0" selected>请选择对应知识点库</option>
                                <? foreach ($knowledge_list as $knowledge) { ?>
                                    <option value="<?php echo $knowledge->id; ?>">
                                        <?php echo $knowledge->knowledge_name; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="modal-body">
                            <label>题库名称：</label><input type="text" name="question_name">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="add_question()">确认添加并保存</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>