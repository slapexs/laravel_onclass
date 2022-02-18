@extends('layouts.argon')



@section('content')




<!-- Add new-->

@if (session('status'))

<div class="row">

    <div class="col">

        <div class="alert alert-success alert-dismissible fade show" role="alert">

            <span class="alert-inner - icon"><i class="fa fa-check"></i></span>

            <span class="alert-inner - text"><strong>{{session('status')}}</strong> #</span>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                <span aria-hidden="true">&times;</span>

            </button>

        </div>

    </div>

</div>

@endif





<div class="row">

    <div class="col">

        <div class="card shadow">

            <div class="card-header border-0">

                <h3 class="mb-0">ข้อมูลสินค้า (# {{count($products)}} รายการ)</h3>






                <!-- Add new-->

                <div class="col text-right">

                    <a href="{{route('products.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มข้อมูล</a>

                </div>







            </div>



            <div class="table-responsive">

                <table class="table align-items-center table-flush">

                    <thead class="thead-light">

                        <tr>

                            <th scope="col">#</th>

                            <th scope="col">ชื่อสินค้า</th>

                            <th scope="col">ประเภท</th>

                            <th scope="col">ราคาทุน</th>

                            <th scope="col">ราคาขาย</th>

                            <th scope="col">จำนวนคงเเหลือ</th>

                            <th scope="col" style="width: 10%"></th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($products as $item)

                        <tr>

                            <td>{{$item->id}}</td>

                            <td>{{$item->name}}</td>

                            <!--td>{{$item->product_type_id}}</td-->

                            <td>{{$item->productType->name}}</td>






                            <td>{{$item->cost}}</td>

                            <td>{{$item->price}}</td>

                            <td>{{$item->quantity}}</td>

                            <td>

                                <form class="delete" action="{{route('products.destroy',$item->id)}}" method="POST">

                                    <!--input type="hidden" name="_method" value="DELETE"-->

                                    {{ csrf_field() }}

                                    {{ method_field('DELETE') }}

                                    <!--a href="#" class="btn btn-sm btn-outline-success"> <i class="fa fa-edit"></i-->

                                    <a href="{{route('products.edit',$item->id)}}" class="btn btn-sm btn-outline-success"> <i class="fa fa-edit"></i>

                                        แก้ไข</a>

                                    <!--button type="submit" class="btn btn-sm btn-outline-danger"><i 

 class="fa fa-trash"></i> ลบ 

 </button-->

                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Sure Want Delete?')"><i class="fa fa-trash"></i> ลบ</button>




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

@endsection



@section('script')

<!--script> 

 $(".delete").on("submit", function () { 

 return confirm("คุณต้องการลบข้อมูลใช่หรือไม่ ?"); 

 }); 

 </script-->

@endsection