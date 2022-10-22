@extends("layout.index")

@section("content_header")
{{__("Cliente")}}
@endsection
@section("content")
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{__("Cadastrar cliente")}}</h3>
            </div>

            <form method="POST" action="{{route("storeCustomer")}}">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>{{__("Nome")}}</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="{{__("Ex: ID Brasil Sistemas")}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{__("Email")}}</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="{{__("Ex: ID Brasil Sistemas")}}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>{{__("Documento")}}</label>
                            <input type="text" class="form-control" name="document" id="document" placeholder="{{__("Ex: ID Brasil Sistemas")}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{__("Celular")}}</label>
                            <input type="text" class="form-control" name="mobile_phone" id="mobile_phone" placeholder="{{__("Ex: ID Brasil Sistemas")}}">
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary float-right">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section("js")
    <script>
        $(document).ready(function(){
           $("#document").mask("999.999.999-99");
            $("#mobile_phone").mask("(99)99999-9999");
        });
    </script>
@endsection
