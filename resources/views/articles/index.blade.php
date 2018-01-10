@extends('app')
  
  @section('content')
      <h2 class="page-header">�L���ꗗ</h2>
      <div>
          <a href="/articles/create" class="btn btn-primary">���e</a>
      </div>
      <table class="table table-striped table-hover">
          <thead>
          <tr>
              <th>�^�C�g��</th>
              <th>�{��</th>
              <th>�쐬����</th>
              <th>�X�V����</th>
              <th></th>
          </tr>
          </thead>
          <tbody>
          @foreach($articles as $article)
              <tr>
                  <td>{{{ $article->title }}}</td>
                  <td>{{{ $article->body }}}</td>
                  <td>{{{ $article->created_at }}}</td>
                  <td>{{{ $article->updated_at }}}</td>
                  <td>
                      <a href="/articles/show/{{{ $article->id }}}" class="btn btn-default btn-xs">�ڍ�</a>
                      <a href="/articles/edit/{{{ $article->id }}}" class="btn btn-success btn-xs">�ҏW</a>
                      {!! Form::open(['action' => ['ArticlesController@postDelete', $article->id]]) !!}
                      <button type="submit" class="btn btn-danger btn-xs">�폜</button>
                      {!! Form::close() !!}
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>
  @endsection