@extends('template')

@section('content')
<h1>Book Information</h1>
<hr/>
<div class="panel panel-default">
    <div class="panel-heading">Book</div>
    <div class="panel-body">
        <div class="row col-md-10">
            <div class="row">
                <div class="form-group">
                    <label class="col-sm-6"><div class="pull-right">&nbsp;</div></label>
                    <div class="col-sm-6"></div>
                </div>
            </div>
            
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                ISBN: 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->isbn}}</div>
                    </div>
                </div>
            <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Title: 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->title}}</div>
                    </div>
                </div>
            <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Author: 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->author}}</div>
                    </div>
                </div>
            <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Publisher: 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->publisher}}</div>
                    </div>
                </div>
            <div class="row">
                    <div class="form-group">
                        <label class="col-sm-6">
                            <div class="pull-right">
                                Language: 
                            </div>
                        </label>
                        <div class="col-sm-6">{{ $book->language==1 ? 'English' : 'Spanish' }}</div>
                    </div>
                </div>
            
        </div>
    </div>
</div>

@stop