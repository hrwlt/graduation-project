<div class="row" v-else-if="seen==='knowledgelist'">
    <div class="col-md-12">
        <div class="card">
            <button type="button" class="btn btn-primary knowledge">新建知识点</button>
            <div class="content">
                <div class="fresh-datatables">
                    <table id="knowledge" class="table table-striped table-no-bordered table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">知识点库名称</th>
                            <th class="text-center">创建人</th>
                            <th class="text-center">是否展示给学生</th>
                            <th class="text-center">更新时间</th>
                            <th class="disabled-sorting text-center">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($knowledge_list as $knowledge) { ?>
                            <tr>
                                <td class="text-center"><?php echo $knowledge->id; ?></td>
                                <td class="text-center"><?php echo $knowledge->knowledge_name; ?></td>
                                <td class="text-center"><?php echo $knowledge->creater; ?></td>
                                <td class="text-center"><?php echo $knowledge->is_show ? '是' : '否'; ?></td>
                                <td class="text-center"><?php echo date('Y-m-d', $knowledge->update_time); ?></td>
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