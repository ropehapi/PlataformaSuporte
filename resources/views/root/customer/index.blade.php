@extends("layout.index")

@section("content_header")
    {{__("Cliente")}}
@endsection
@section("content")
    <div class="row">
        <div class="col-md-12">
            <table id="customersTable" class="table table-bordered table-hover dataTable dtr-inline">
                <thead>
                    <tr>
                        <th class="sorting">{{__("Nome")}}</th>
                        <th class="sorting">{{__("Email")}}</th>
                        <th class="sorting">{{__("Documento")}}</th>
                        <th class="sorting">{{__("Celular")}}</th>
                        <th class="sorting">{{__("Status")}}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->getMaskedDocument()}}</td>
                        <td>{{$customer->getMaskedMobilePhone()}}</td>
                        <td>{{$customer->status}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section("js")
    <script>
        $(document).ready(function(){
            $('#customersTable').DataTable();
        });
    </script>
@endsection
