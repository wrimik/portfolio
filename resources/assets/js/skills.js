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