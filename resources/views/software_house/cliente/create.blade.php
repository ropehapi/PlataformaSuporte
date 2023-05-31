@extends("layout.index")

@section("content_header")
    {{__("Empresa")}}
@endsection
@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{__("Cadastrar empresa")}}</h3>
                </div>

                @if(isset($cliente))
                    <form method="POST" action="{{route("updateCliente", $cliente->id)}}">@csrf @method("PUT")
                @else
                    <form method="POST" action="{{route("storeCliente")}}">@csrf
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>{{__("Nome")}}</label>
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="{{__("Ex: João sistemas")}}" value="{{$cliente->nome??old("nome")}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>{{__("Email")}}</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="{{__("Ex: joao@mail.com")}}" value="{{$cliente->email??old("email")}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>{{__("Documento")}}</label>
                                    <input onkeyup="return trataTipoDocumento(this.value)" maxlength="18" type="text" class="form-control" name="documento" id="documento" placeholder="{{__("Ex: 999.999.999-99")}}" value="{{$cliente->documento??old("documento")}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>{{__("Celular")}}</label>
                                    <input type="text" class="form-control" name="celular" id="celular" placeholder="{{__("Ex: (99) 99999-9999")}}" value="{{$cliente->celular??old("celular")}}">
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
            $("#celular").mask("(99)99999-9999");
            @if(isset($cliente))
            if({{strlen($cliente->documento)}} <= 14){
                $('#documento').mask('###.###.###-##');
            }else{
                $('#documento').mask('##.###.###/####-##');
            }
            @endif
        });

        function trataTipoDocumento(documento){
            if(documento.length <= 14){
                $('#documento').mask('###.###.###-##');
            }else{
                $('#documento').mask('##.###.###/####-##');
            }
        }
    </script>
@endsection
