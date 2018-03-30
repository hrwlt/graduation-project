var title = $('#title').attr('title');
var operate = $('#operate').attr('operate');
var seen = $('#seen').attr('seen');
var vm = new Vue({
    el: '#container',
    data: {
        seen: seen,
        operate: operate,
        title: title
    },
    methods: {
        edit: function () {
            this.title = '个人中心 - 基本设置';
            this.operate = 'person';
            this.seen = 'personedit';
        },
        avatar: function () {
            this.title = '个人中心 - 头像设置';
            this.operate = 'person';
            this.seen = 'personavatar';
        },
        safe: function () {
            this.title = '个人中心 - 安全设置';
            this.operate = 'person';
            this.seen = 'personsafe';
        },
        questionlist: function () {
            this.title = '我的试题库';
            this.operate = 'question';
            this.seen = 'questionlist';
        },
        knowledgelist: function () {
            this.title = '我的知识点库';
            this.operate = 'question';
            this.seen = 'knowledgelist';
        },
        courselist: function () {
            this.title = '我的课程';
            this.operate = 'teach';
            this.seen = 'courselist';
        },
        exam: function () {
            this.title = '考试列表';
            this.operate = 'exam';
            this.seen = 'exam';
        },
        myExam: function () {
            this.title = '我的考试';
            this.operate = 'myExam';
            this.seen = 'myExam';
        },
        myCourse: function () {
            this.title = '我的课程';
            this.operate = 'myCourse';
            this.seen = 'myCourse';
        }
    }
});