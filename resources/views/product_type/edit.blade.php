@extends('layouts.argon')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4><i class="fas fa-edit"></i> แก้ไขประเภทสินค้า</h4>
            </div>

            <div class="card-body">
                {!! Form::open(['url' => route('product_types.update',$product_type->id)]); !!}
                <div class="form-group">
                    {!! Form::label('product_type_name', 'ชื่อประเภทสินค้า'); !!}
                    {!! Form::text('product_type_name', $product_type->name, ['class' => 'form-control']); !!}
                </div>

                <div class="mt-2">
                    {!! Form::submit('บันทึก', ['class' => 'btn btn-primary']); !!}
                </div>
                {!! Form::close(); !!}
            </div>
        </div>
    </div>
@endsection