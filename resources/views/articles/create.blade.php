@extends('app')
  
  @section('content')
      <h2 class="page-header">�L�����e</h2>
      {!! Form::open() !!}
          <div class="form-group">
              <label>�^�C�g��</label>
              {!! Form::input('text', 'title', null, ['required', 'class' => 'form-control']) !!}
          </div>
          <div class="form-group">
              <label>�{��</label>
              {!! Form::textarea('body', null, ['required', 'class' => 'form-control']) !!}
          </div>
          <button type="submit" class="btn btn-default">���e</button>
      {!! Form::close() !!}
  @endsection