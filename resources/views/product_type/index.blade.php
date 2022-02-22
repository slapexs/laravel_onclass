@extends('layouts.argon')

@section('content')
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

<div class="container">
    <div class="card shadow">
        <div class="card-header border-0">
            <h3 class="mb-0">ข้อมูลประเภทสินค้า (# {{count($product_types)}} รายการ)</h3>
            <a href="{{route('product_types.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> เพิ่มประเภทสินค้า</a>
        </div>

        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ประเภทสินค้า</th>
                        <th scope="col" style="width: 10%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($product_types as $item)
                    <tr>
                        <td class="text-center">{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <form class="delete" action="{{route('product_types.destroy',$item->id)}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}
                                <a href="{{url('product_types/edit',$item->id)}}" class="btn btn-sm btn-outline-success"> <i class="fa fa-edit"></i> แก้ไข</a>
                                <button type="submit" class="btn btn-sm btn-outline-danger"> <i class="fa fa-trash"></i> ลบ</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>
    $(".delete").on("submit", function() {

        return confirm("คุณต้องการลบข้อมูลใช่หรือไม่ ?");

    });
</script>

@endsection