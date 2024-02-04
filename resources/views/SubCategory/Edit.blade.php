@extends('master')


@section('title')
{{-- <h1>Home page</h1> --}}
<title>Edit page</title>
@endsection

@section('title')
{{-- <h1>Home page</h1> --}}
<h1>Category page</h1>

@endsection

@section('content')
<div class="row">
    <div class="d-flex justify-content-start my-4">
        <a href="{{ route('subcategory.index') }}" class="btn btn-info">Sub Categories</a>
    </div>
<div class="row">
    <div class="col-8 m-auto">
        @if (session('status'))
        <div class="bg-success text-white">
            {{ session('status') }}
        </div>
    @endif
        <form action=" {{ route('subcategory.update',['subcategory'=> $subcategory->id])}} " method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="category_name">
                <option selected>Category Name</option>
                @foreach ($categories as $category)

                <option value={{ $category->id }} @if ($category->id== $subcategory->categorie_id) selected

                @endif>{{ $category->name }}</option>

                @endforeach

              </select>
              </div>
            <div class="mb-3">
                <label for="sub-category-name" class="form-label">Sub Category Name</label>
                <input type="text" value= {{$subcategory->name}} class="form-control @error('subcategory_name')
                is-invalid
                @enderror" id="sub-category-name"
                name="subcategory_name"  placeholder="Please provide Sub Category name"
                value="{{old('subcategory_name')}}">

                @error('subcategory_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-check mb-3">
                <label class="form-check-label" for="flexCheckDefault">
                    Active/Inactive
                  </label>
                <input class="form-check-input" type="checkbox"
                name="is_active" @if ($subcategory->is_active)
                checked

                @endif id="flexCheckDefault">

              </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
</div>
@endsection
