@extends('layouts.argon')
@section('content')

<div class="container">
    <div class="card shadow">
        <div class="card-header border-0">
            <h4><i class="fas fa-plus"></i> เพิ่มประเภทสินค้า</h4>
        </div>

        <div class="card-body">
            {!! Form::open(['url' => route('product_types.store')]); !!}
            <div class="form-group">
                {!! Form::label('name', 'ชื่อประเภทสินค้า'); !!}
                {!! Form::text('product_type_name', null, ['class' => 'form-control'.($errors->has('name') ? '-is-invalid' : ''), 'placeholder'=>'Product type name']); !!}
                {!! $errors->first('name', '<p class="text-danger text-sm p-1">:message</p>') !!}
            </div>

            <div class="mt-2">
                {!! Form::submit('บันทึก', ['class' => 'btn btn-primary']); !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
