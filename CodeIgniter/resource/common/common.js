var vm = new Vue({
    el: '#container',
    data: {
        seen: 'home'
    },
    methods: {
        edit: function () {
            this.seen = 'personedit'
        },
        avatar: function () {
            this.seen = 'personavatar'
        },
        safe: function () {
            this.seen = 'personsafe'
        }
    }
});