@extends('Dashboard.layouts.dashboard')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active"> Categories </li>
@endsection

@section('content')
    <div class="mb-5">
        <a href="{{ route('dashboard.categories.create') }}" class="btn btn-primary">Create</a>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div>

    </div>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Parent Category</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as  $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->parent_name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->description }}</td>
                        <td>{{ $category->status }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td class="d-flex">
                            <a href="{{ route('dashboard.categories.edit', [$category->id]) }}"
                                class="btn btn-sm btn-outline-primary">Edit</a>
                            <form action="{{ route('dashboard.categories.destroy', [$category->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="8">There are no categories</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
