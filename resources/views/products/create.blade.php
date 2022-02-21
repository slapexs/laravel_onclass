 @extends('layouts.argon')



 @section('content')

 <div class="container">


         <div class="card shadow">

             <div class="card-header border-0">

                 <div class="row align-items-center">

                     <div class="col">

                         <h3 class="mb-0">เพิ่มข้อมูลสินค้า</h3>

                     </div>

                 </div>

             </div>

             <!-- 

@if ($errors->any()) 

   <div class="alert alert-danger m-4"> 

       <ul> 

           @foreach($errors->all() as $error) 

               <li>{{$error}}</il> 

           @endforeach 

       </ul> 

   </div> 

@endif  

-->




             <div class="card-body pt-0" style="min-height: 50vh">

                 <!--{!! Form::open(['url' =>'#' ,'file'=>true]) !!}-->

                 {!! Form::open(['url' => route('products.store'),'files'=>true]) !!}

                 <div class="row">

                     <div class="col">

                         <div class="form-group">

                             {!! Form::label('name', 'ชื่อสินค้า'); !!}

                             {!! Form::text('name', null, ['class' => 'form-control'.($errors->has('name') ? 'is-invalid' : ''),]); !!}

                             {!! $errors->first('name', '<p class="text-red text-sm p-1">:message</p>') !!}




                         </div>

                     </div>

                     <div class="col">

                         <div class="form-group">

                             {!! Form::label('product_type_id', 'ประเภทชื่อสินค้า'); !!}

                             {!! Form::select('product_type_id', $productTypes,null,

                             ['class' => 'form-control']); !!}

                         </div>

                     </div>



                 </div>

                 <div class="row">

                     <div class="col">

                         <div class="form-group">

                             <!-- new -->

                             {!! Form::label('cost', 'ราคาทุน'); !!}

                             {!! Form::text('cost', null, ['class' => 'form-control'.($errors->has('cost') ? 'is-invalid' : ''),]); !!}

                             {!! $errors->first('cost', '<p class="text-red text-sm p-1">:message</p>') !!}

                         </div>

                     </div>

                     <div class="col">

                         <div class="form-group">

                             <!-- new -->

                             {!! Form::label('price', 'ราคาขาย'); !!}

                             {!! Form::text('price', null, ['class' => 'form-control']); !!}

                         </div>

                     </div>

                     <div class="col-6">

                         <div class="form-group">

                             <!-- new -->

                             {!! Form::label('quantity', 'จำนวนคงเหลือ'); !!}

                             {!! Form::text('quantity', null, ['class' => 'form-control']); !!}

                         </div>

                     </div>



                 </div>

                 <div class="row">

                     <div class="form-group">

                         <!-- new -->

                         {!! Form::label('image', 'รูปภาพ'); !!}

                         {!! Form::file('image', null, ['class' => 'form-control-file']); !!}



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