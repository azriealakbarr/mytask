@extends('dashboard.admin')

@section('judul')
    Produk Detail
@endsection


@section('isi')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">{{ __('Data') }}</div>
                    <div class="card-body">
                        <a href="{{ route('admin.productdetail.create') }}">
                            <button type="button" class="btn btn-primary mb-3">Buat</button>
                        </a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Product</th>
                                    <th>Unit</th>
                                    <th>Brand</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $item->fkProduct->name }}</td>
                                        <td>{{ $item->unit }}</td>
                                        <td>{{ $item->brand }}</td>
                                        <td>
                                            <form action="{{ route('admin.productdetail.destroy', $item->id) }}"
                                                method="POST">
                                                <a type="button" class="btn btn-warning"
                                                    href="{{ route('admin.productdetail.edit', $item->id) }}">Edit</a>
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
