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
                if(0 <= index && index < History.tabs.length){
                    this.$data.active = index;
                    //scrollTo('.job-header:visible');
                    scrollTo('#history .nav');
                }
            }
        }
    });

    $(document).keydown(function(e) {
        switch(e.which) {
            case 37: // left
                History.set(History.active-1);
                break;
            case 39: // right
                History.set(History.active+1);
                break;
            default: return; // exit this handler for other keys
        }
        //e.preventDefault(); // prevent the default action (scroll / move caret)
    });
}
