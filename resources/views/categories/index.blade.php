@extends('layout.master')

@section('content')


<div  class="container">
    <div class="row">
        <div class="col-sm-12">
            <table dir="rtl" class="table">
                <thead>
                <tr class="mr-10">
                    <h3 dir="rtl" class="mt-10">لیست کتگوری ها</h3>
                </tr>
                </thead>
                <tbody>
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->title}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->body}}</td>
                    <td><a href="/categories/{{$category->id}}/edit" class="btn btn-primary">ویرایش</a></td>
                    <td><a href="/categories/{{$category->id}}" class="btn btn-danger">حذف</a></td>
                </tr>
            @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection
