@extends("layout.index")

@section("content_header")
    {{__("Produto")}}
@endsection
@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{__("Cadastrar produto")}}</h3>
                </div>

                @if(isset($product))
                    <form method="POST" action="{{route("updateProduct", $product->id)}}">@csrf @method("PUT")
                @else
                    <form method="POST" action="{{route("storeProduct")}}">@csrf
                        @endif
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>{{__("Nome")}}</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="{{__("Ex: João sistemas")}}" value="{{$product->name??old("name")}}">
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
        $(document).ready(function(){});
    </script>
@endsection
