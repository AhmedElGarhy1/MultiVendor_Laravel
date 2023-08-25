@extends('Dashboard.layouts.dashboard')

@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"> Categories </li>
    <li class="breadcrumb-item active"> Create </li>
@endsection

@section('content')
    <form action="{{ route('dashboard.categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="name" class="form-control" />
        </div>
        <div class="form-group">
            <label>Category Parent</label>
            <select name="parent_id">
                <option value="">Primary Categories</option>
                @foreach ($parents as $parent)
                    <option value={{ $parent->id }}>{{ $parent->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Category Image</label>
            <input type="file" name="image" class="form-control" />
        </div>
        <div class="form-group">
            <label>Category Status</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="active" value="active">
                <label class="form-check-label" for="active">Active</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="archived" value="archived">
                <label class="form-check-label" for="archived">Archived</label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection
