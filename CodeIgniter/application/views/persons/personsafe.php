<div class="row" v-else-if="seen === 'personsafe'">
    <div class="col-md-8 col-md-offset-2">
        <div class="card card-wizard" id="wizardCard">
            <form id="personsafeForm" method="post" action="">
                <div class="header text-center">
                    <h3 class="title">修改密码</h3>
                </div>
                <div class="content">
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group">
                                    <label class="control-label">旧密码</label>
                                    <input class="form-control" type="password" placeholder="旧密码"
                                           name="old_password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="form-group">
                                    <label class="control-label">新密码</label>
                                    <input class="form-control" type="password" placeholder="新密码"
                                           name="new_password">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="control-label">确认密码</label>
                                    <input class="form-control" type="password" placeholder="确认密码"
                                           name="confirm_password">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <button type="reset" class="btn btn-default btn-fill btn-wd btn-back pull-left">重置</button>
                    <button onclick="personsafe()" type="button" class="btn btn-info btn-fill btn-wd btn-next pull-right">确认修改
                    </button>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </div>
</div>