@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="font-size: 17px">Survey</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        
                        

                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Enter your age: </label>

                            <div class="col-md-6">
                                <select class="form-control top-buffer-sm" name="age" id="age"   required autofocus>
                               <option></option>
                               <option value="10-18">10-18</option>
                               <option value="18-30">18-30</option>
                               <option value="30-40">30-40</option>
                               <option value="40-50">40-50</option>
                               <option value="50-70">50-70</option>
                               <option value="70">70~</option>                         
                            </select>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="clearfix"></div>
                        <div class="bot-border" style=" border-bottom:1px #dcdfe5 solid;  margin:5px 0  20px 0"></div>
                                            


                        <div class="form-group{{ $errors->has('agree') ? ' has-error' : '' }}">
                            <label for="agree" class="col-md-4 control-label">Do you prefer this form: </label>

                            <div class="col-md-6">
                                <input id="agree" type="radio" name="agree" value="Yes" required autofocus>  Yes<br>
                                <input id="agree" type="radio" name="agree" value="No" required autofocus>  No

                                @if ($errors->has('agree'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('agree') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="clearfix"></div>
                        <div class="bot-border" style=" border-bottom:1px #dcdfe5 solid;  margin:5px 0  20px 0"></div>


                        <div class="form-group">
                            <label for="age" class="col-md-12 col-md-offset-2" style="margin-left: 5px; display: block; width: 735px; ">dsfafdsadfasdfasdfasdfasdfasdfasd fasdfasdfasdfasfasdfasdfasdfsadfsdfsa dfsdfsdfsdfsdf sadfasdfsa dffasdfasdfasdfasdfasdfweqfqrfqwogyfaiubsjvbireqwbro 8wqvikjhqjerbfouvp8 w qjfboqiwyef quwebf[0q qwp9e8npqiuweb[9we vu asdfasdfas asfasdfa dasfasdf dsafasdfasdfasdf fasdfasdfasdf asfdasdfasdfasdfs asdfasdfasdfasd asdfasdfsa</label>
                        </div>   


                        <div class="clearfix"></div>
                        <div class="bot-border" style=" border-bottom:1px #dcdfe5 solid;  margin:5px 0  20px 0"></div> 

                        <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label"> Enter the text in form that was written before: </label>

                            <div class="col-md-6">
                                <textarea class="form-control top-buffer-sm" name="text" id="text" style="display: block; width: 350px;" value="{{ old('text') }}" required autofocus></textarea>

                                @if ($errors->has('text'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <div class="clearfix"></div>
                        <div class="bot-border" style=" border-bottom:1px #dcdfe5 solid;  margin:5px 0  20px 0"></div>

                    
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-left: 35%;">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
