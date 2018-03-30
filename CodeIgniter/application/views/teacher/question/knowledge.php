<div class="row" v-else-if="seen==='knowledgelist'">
    <div class="col-md-12">
        <div class="card">
            <div class="content">
                <div class="fresh-datatables">
                    <table id="knowledge" class="table table-striped table-no-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>知识点库名称</th>
                            <th>创建人</th>
                            <th>是否展示给学生</th>
                            <th>更新时间</th>
                            <th class="disabled-sorting text-right">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($knowledge_list as $knowledge) { ?>
                            <tr>
                                <td><?php echo $knowledge->id; ?></td>
                                <td><?php echo $knowledge->knowledge_name; ?></td>
                                <td><?php echo $knowledge->creater; ?></td>
                                <td><?php echo $knowledge->is_show ? '是' : '否'; ?></td>
                                <td><?php echo date('Y-m-d', $knowledge->update_time); ?></td>
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