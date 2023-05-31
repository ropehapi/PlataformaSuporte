<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\StoreCustomerRequest;
use App\Models\SoftwareHouse;
use App\Models\User;
use Cassandra\Custom;
use Illuminate\Http\Request;

class SoftwareHouseController extends Controller
{
    public function index()
    {
        $softwareHouse = SoftwareHouse::all();
        return view("root.customer.index", [
            "customers" => $softwareHouse
        ]);
    }

    public function create()
    {
        return view("root.customer.create");
    }

    public function store(StoreCustomerRequest $request)
    {
        $softwareHouse = new SoftwareHouse();
        $softwareHouse->name = $request->name;
        $softwareHouse->email = $request->email;
        $softwareHouse->document = Helper::removeMask($request->document);
        $softwareHouse->mobile_phone = Helper::removeMask($request->mobile_phone);
        $softwareHouse->status = SoftwareHouse::ACTIVE;
        $softwareHouse->save();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = sha1(Helper::removeMask($request->document));
        $user->profile = User::CUSTOMER_ADMIN;
        $user->customer_id = $softwareHouse->id;
        $user->save();

        return redirect()->route("customers")->withStatus(__("Cliente cadastrado com sucesso."));
    }

    public function show(SoftwareHouse $softwareHouse)
    {
        //
    }

    public function edit(SoftwareHouse $softwareHouse)
    {
        return view("root.customer.create",[
            "customer" => $softwareHouse
        ]);
    }

    public function update(StoreCustomerRequest $request, SoftwareHouse $softwareHouse)
    {
        $softwareHouse->name = $request->name;
        $softwareHouse->email = $request->email;
        $softwareHouse->document = Helper::removeMask($request->document);
        $softwareHouse->mobile_phone = Helper::removeMask($request->mobile_phone);
        $softwareHouse->status = SoftwareHouse::ACTIVE;

        $softwareHouse->update();

        return redirect()->route("customers")->withStatus(__("Cliente alterado com sucesso."));
    }

    public function destroy(Request $request)
    {
        $softwareHouse = SoftwareHouse::find($request->id);
        $softwareHouse->delete();

        return redirect()->route("customers")->withStatus(__("Cliente excluído com sucesso."));
    }
}
