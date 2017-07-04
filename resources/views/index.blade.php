@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')
  <!-- Main jumbotron -->
  <div class="jumbotron bicycle-polo-background">
    <div class="container bicycle-polo-text">
      <h1 class="text-center"><strong>Birchwood Bicycle Polo Co.</strong></h1>
      <p>
        We sell only the finest bicycle polo supplies for those seeking fame and glory in this <a href="https://www.youtube.com/watch?v=DaK9Zj3QHDY" target="_blank">sport of kings</a>.
      </p>

      <h3><strong>Having trouble with one of our products?</strong></h3>
      <p>
         Talk to one of our support agents now — or fill out the support form below and someone will call you later.
      </p>
      <p><a class="btn btn-primary btn-lg btn-block" href="#support" role="button">Get help</a></p>
    </div>
  </div>

  <div class="container">

    @include('_messages')

    <h2 id="support">Contact support</h2>

    <p class="lead">
      Talk with one of our support agents right now by clicking the "Call Support" button on the right. If you can't talk now, fill out a support ticket and an agent will call you later.
    </p>

    <div class="row">

      <div class="col-md-6 col-md-push-6">

        <div class="panel panel-info client-controls">
          <div class="panel-heading">
            <h3 class="panel-title">Talk to support now</h3>
          </div>
          <div class="panel-body">
            <p><strong>Status</strong></p>
            <div class="well well-sm" id="call-status">
              Connecting to Twilio...
            </div>

            <button class="btn btn-lg btn-primary call-support-button" onclick="callSupport()">
              <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Call support
            </button>
            <button class="btn btn-lg btn-danger hangup-button" disabled onclick="hangUp()">Hang up</button>
          </div>
        </div>

      </div>

      <div class="col-md-6 col-md-pull-6">

          {!! Form::open(['url' => route('new-ticket')]) !!}
              <div class="form-group">
                  {!! Form::label('name') !!}
                  {!! Form::text('name', '', ['class' => 'form-control']) !!}
              </div>
              <div class="form-group">
                  {!! Form::label('phone_number', 'Phone number') !!}
                  {!! Form::text('phone_number', '', ['class' => 'form-control']) !!}
              </div>
              <div class="form-group">
                  {!! Form::label('description', 'Description') !!}
                  {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Submit ticket</button>
              </div>
          {!! Form::close() !!}

      </div>
    </div>

    <small class="pull-right">
      Header photo courtesy <a href="https://www.flickr.com/photos/tink20seven/4654348885/">David Sachs via Flickr</a>
    </small>
  </div>
  @endsection
