/**
 * lets you post ajax requests
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
/**
 * Sends a friendly message to firebug / console users.
 */
if(typeof(console) != undefined){
    console.log("Hey, if you're using the console to check out my work, "+
    "be sure to do a traditional 'view source' so you can see "+
    "the comments. Thanks!")
}
/**
 * Initiates History
 * @constructor
 */
function VueHistory(){
    History = new Vue({
        el: '#history',
        data: {
            tabs: ['Lojistic', 'Aceapp', 'HCWI', 'Park DCS', 'Oxford Media'],
            active:0
        },
        methods:{
            set: function(index){
                this.$data.active = index;
                //scrollTo('.job-header:visible');
                scrollTo('#history .nav');
            }
        }
    });
}
/**
 * Handles form submissions
 * @type {Vue}
 */
function VueMessage() {
    Message = new Vue({
        el: '#message',
        data: {
            status: 'pending',
            invalidHint: '',
            Message: {
                name: '',
                email: '',
                phone: '',
                message: ''
            }
        },
        methods: {
            validate: function () {
                this.status = 'validating';
                this.invalidHint = '';
                var valid = true;
                if (this.Message.email.indexOf('@') == -1) {
                    this.invalidHint = 'Almost There! Email address is required.';
                    //this is the only thing we're really validating
                    valid = false;
                }
                return valid;
            },
            send: function () {
                if (!this.validate()) {
                    return false;
                }
                this.status = 'sending';
                $.ajax({
                    url: '/Message',
                    method: 'post',
                    data: Message.$data
                })
                    .fail(function () {
                        if (confirm('Aw Snap! Sending failed. Would you like to send me a traditional email?')) {
                            window.location.href = 'mailto:mike@mike-wright.com';
                        }
                    })
                    .done(function () {
                        Message.status = 'sent'
                    });
            }
        }
    });
}
/**
 * sets the nth link in nav to be "active"
 * @param n
 */
function nav(n) {
    $('.navbar .nav li:eq(' + n + ')').addClass('active');
    $(document).on('click', '.navbar .nav', function () {
        $('.navbar .active').removeClass('active');
        $(this).addClass('active');
    });
}

function scrollTo(target) {
    var t = $(target).offset().top;
    $("html, body").animate({scrollTop: t}, 700)
}
/**
 * Initiates Skills
 * @constructor
 */
function VueSkills() {
    Skills = new Vue({
        el: '#skills',
        data: {
            skills: [
                'php', 'html 5', 'css 3', 'javascript', 'mysql',
                'laravel', 'vuejs', 'jquery', 'sass', 'bootstrap',
                'git', 'emmet', 'illustrator', 'photoshop', 'ubuntu',
                'angular', 'grunt', 'gulp', 'node', 'scrum'
            ]
        },
        methods: {
            svg: function (skill) {
                var alias = skill;
                alias = alias.replace(' ', '');
                return '#' + alias;
            },
            png: function (skill) {
                var alias = skill;
                alias = alias.replace(' ', '');
                return '/images/' + alias + '.png';
            }
        }
    });
}
//# sourceMappingURL=all.js.map
