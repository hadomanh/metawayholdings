@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title">News</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
      <table class="table table-hover text-nowrap">
        <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($images as $item)
              <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td><a href="javascript:void(0)" target="_blank">{{ $item->title }}</a></td>

                    <td>
                        <a href="{{ route('image.edit', $item->id) }}" class="btn btn-outline-warning">
                            <i class="far fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('image.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">
                                <i class="far fa-trash-alt"></i> Delete
                            </button>
                        </form>

                    </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection
