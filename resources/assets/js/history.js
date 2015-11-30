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
                scrollTo('.job-header:visible');
            }
        }
    });
}