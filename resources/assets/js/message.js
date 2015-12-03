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