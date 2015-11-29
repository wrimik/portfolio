/**
 * Created by WRIMIK on 11/13/15.
 */

Skills = new Vue({
   el: '#skills',
    data:{
        skills: Skills
    },
    methods:{
        svg: function(skill){
            var alias = skill;
                alias = alias.replace(' ', '');
            return '/images/' + alias + '.svg';
        },
        png: function(skill){
            var alias = skill;
                alias = alias.replace(' ', '');
            return '/images/' + alias + '.png';
        }
    }
});