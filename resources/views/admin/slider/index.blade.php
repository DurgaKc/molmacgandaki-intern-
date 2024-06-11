@extends('admin.layouts.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class=" d-flex justify-content-between">
                            <div>
                                <h4  class="fs-4 mt-3 fw-bold">स्लाइडर सूची</h4>
                            </div>
                            <div>
                                <a href="{{ route('admin.slider.create') }}" class="btn btn-primary align-item-end">नयाँ थप्नुहोस</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table border">
            <thead>
              <tr class=" fs-4">
                <th scope="col">क्र.स.</th>
                <th scope="col">शीर्षक</th>
                <th scope="col">शीर्षक अंग्रेजीमा</th>
                <th scope="col">फोटो</th>
                <th scope="col">#</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $slider)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $slider->title ?? '' }}</td>
                        <td>{{ $slider->title_en ?? '' }}</td>
                        <td><img src="{{$slider->photo}}" width="100" height="100"></td>
                        <td>
                            <a href="{{ route('admin.slider.edit', $slider) }}" class="text-dark">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <form action="{{ route('admin.slider.destroy', $slider) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link p-0" onclick="return confirm('Are you sure you want to delete this slider?')">
                                    <i class="fa fa-trash text-dark mx-3" aria-hidden="true"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
