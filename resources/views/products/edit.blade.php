@extends('layouts.argon')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4><i class="fas fa-edit"></i> แก้ไขสินค้า</h4>
        </div>

        <div class="card-body pt-0" style="min-height: 50vh">
            {!! Form::open(['url' => route('products.update', $product->id),'files'=>true]) !!}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('name', 'ชื่อสินค้า'); !!}
                        {!! Form::text('name', $product->name, ['class' => 'form-control'.($errors->has('name') ? 'is-invalid' : ''),]); !!}
                        {!! $errors->first('name', '<p class="text-red text-sm p-1">:message</p>') !!}
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('product_type_id', 'ประเภทชื่อสินค้า'); !!}
                        {!! Form::select('product_type_id', $productTypes,null,['class' => 'form-control']); !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <!-- new -->
                        {!! Form::label('cost', 'ราคาทุน'); !!}
                        {!! Form::text('cost', $product->cost, ['class' => 'form-control'.($errors->has('cost') ? 'is-invalid' : ''),]); !!}
                        {!! $errors->first('cost', '<p class="text-red text-sm p-1">:message</p>') !!}
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <!-- new -->
                        {!! Form::label('price', 'ราคาขาย'); !!}
                        {!! Form::text('price', $product->price, ['class' => 'form-control']); !!}
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <!-- new -->
                        {!! Form::label('quantity', 'จำนวนคงเหลือ'); !!}
                        {!! Form::text('quantity', $product->quantity, ['class' => 'form-control']); !!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <!-- new -->

                    {!! Form::label('image', 'รูปภาพ'); !!}
                    {!! Form::file('image', null, ['class' => 'form-control-file']); !!}
                </div>
                <div class="form-group text-center">
                    <img src="{{asset('images/products/'. $product->image)}}" class="img-fluid" width="300" alt="product_image" draggable="false">
                    <p><small class="text-muted">(รูปปัจจุบัน)</small></p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    {!! Form::submit('บันทึก', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection