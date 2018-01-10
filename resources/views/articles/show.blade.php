@extends('app')
  
  @section('content')
      <h2 class="page-header">�L���ڍ�</h2>
      <ul class="list-inline">
          <li>
              <a href="/articles/edit/{{{ $article->id }}}" class="btn btn-primary pull-left">�ҏW</a>
          </li>
          <li>
              {!! Form::open(['action' => ['ArticlesController@postDelete', $article->id]]) !!}
              <button type="submit" class="btn btn-danger pull-left">�폜</button>
              {!! Form::close() !!}
          </li>
      </ul>
      <table class="table table-striped">
          <tbody>
          <tr>
              <th>�^�C�g��</th>
              <td>{{{ $article->title }}}</td>
          </tr>
          <tr>
              <th>�{��</th>
              <td>{{{ $article->body }}}</td>
          </tr>
          <tr>
              <th>�쐬����</th>
              <td>{{{ $article->created_at }}}</td>
          </tr>
          <tr>
              <th>�X�V����</th>
              <td>{{{ $article->updated_at }}}</td>
          </tr>
          </tbody>
      </table>
  @endsection