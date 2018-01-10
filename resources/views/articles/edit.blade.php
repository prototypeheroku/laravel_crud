@extends('app')
  
  @section('content')
      <h2 class="page-header">�L���ҏW</h2>
      {!! Form::open(['action' => ['ArticlesController@postEdit', $article->id]]) !!}
          <div class="form-group">
              <label>�^�C�g��</label>
              {!! Form::input('text', 'title', $article->title, ['required', 'class' => 'form-control']) !!}
          </div>
          <div class="form-group">
              <label>�{��</label>
              {!! Form::textarea('body', $article->body, ['required', 'class' => 'form-control']) !!}
          </div>
          <button type="submit" class="btn btn-default">�ҏW</button>
      {!! Form::close() !!}
  @endsection