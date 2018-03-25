<div id="class_info">
    <select v-model="CollegeSelected">
        <option v-for="item in CollegeList" :value="item.id">{{item.name}}</option>
    </select>
    <select v-model="MajorSelected">
        <option v-for="item in MajorList" :value="item.id">{{item.name}}</option>
    </select>
    <select v-model="ClassSelected">
        <option v-for="item in ClassList" :value="item.id">{{item.name}}</option>
    </select>
</div>

<script type="text/javascript" src="<?= base_url() . 'resource/vue.js' ?>"></script>
<script>
    var CollegeRows = [
        {name: "请选择学院", id: "0"},
        {name: "浙江省", id: "1"}
    ];
    var MajorRows = [
        {name: "请选择专业", id: "0", pid: "0"},
        {name: "台州", id: "1", pid: "1"}
    ];
    var ClassRows = [
        {name: "请选择班级", id: "0", pid: "0"},
        {name: "天台", id: "1", pid: "1"}
    ];
    var vm = new Vue({
            el: "#class_info",
            data: {
                CollegeSelected: 0,
                MajorSelected: 0,
                ClassSelected: 0,
                CollegeList: CollegeRows,
                MajorList: [],
                ClassList: []
            },
            created: function () {
                var val = this.CollegeSelected;
                this.MajorList = MajorRows.filter(
                    function (major) {
                        return major.pid == val
                    }
                );

                val = this.MajorSelected;
                this.ClassList = ClassRows.filter(
                    function (classinfo) {
                        return classinfo.pid == val
                    }
                );
            },
            watch: {
                CollegeSelected: function (val) {
                    this.MajorList = MajorRows.filter(
                        function (major) {
                            return major.pid == val
                        }
                    );
                    this.MajorSelected = this.MajorList.length > 0 ? this.MajorList[0].id : "0";
                }
                ,
                MajorSelected: function (val) {
                    this.ClassList = ClassRows.filter(
                        function (classinfo) {
                            return classinfo.pid == val
                        }
                    );
                    this.ClassSelected = this.ClassList.length > 0 ? this.ClassList[0].id : "0";
                }
            }
        })
        ;
</script>
