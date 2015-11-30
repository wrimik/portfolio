@extends('templates.site')
@section('scripts')
    <script>nav(3);</script>
@stop
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <h2>Contact</h2>

                <div class="col-sm-6 col-sm-offset-3">
                    <div class="text-center">
                        Email:
                        <a href="mailto:mike@mike-wright.com">mike@mike-wright.com</a> |
                        Cell:
                        949.910.7277
                        <hr/>
                    </div>
                    <form id="message" action="">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input v-model="Message.name"
                                   class="form-control"
                                   type="text"/>
                        </div>
                        <div class="form-group">
                            <label for="">Email <sup style="color:#900">*</sup></label>
                            <input v-model="Message.email"
                                   v-bind:class="{'invalid': Message.email.indexOf('@') == -1 && status == 'validating'}"
                                   class="form-control"
                                   type="text"/>
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input v-model="Message.phone"
                                   class="form-control"
                                   type="text"/>
                        </div>
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea v-model="Message.message"
                                      class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <div v-if="invalidHint" class="alert alert-danger" role="alert">
                                @{{ invalidHint }}
                            </div>

                            <div v-on:click="send()"
                                 v-bind:class="status"
                                 class="btn btn-primary btn-lg submit-btn pull-right">
                                <span v-if="status == 'pending' || status == 'validating'">SEND</span>
                                <i v-if="status == 'sending'"
                                   class="fa fa-spinner fa-spin"></i>
                                <i v-if="status == 'sent'"
                                   class="fa fa-check"></i>
                            </div>
                        </div>
                        <div v-if="status == 'sent'" class="col-xs-12">
                            <hr/>
                            <div class="alert alert-success text-center" role="alert">
                                Got it! <br/>
                                We will talk soon!
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
