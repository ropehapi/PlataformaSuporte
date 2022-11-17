<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customer;
use App\Models\User;
use Cassandra\Custom;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view("root.customer.index", [
            "customers" => $customers
        ]);
    }

    public function create()
    {
        return view("root.customer.create");
    }

    public function store(StoreCustomerRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->document = Helper::removeMask($request->document);
        $customer->mobile_phone = Helper::removeMask($request->mobile_phone);
        $customer->status = Customer::ACTIVE;
        $customer->save();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = sha1(Helper::removeMask($request->document));
        $user->profile = User::CUSTOMER_ADMIN;
        $user->customer_id = $customer->id;
        $user->save();

        return redirect()->route("customers")->withStatus(__("Cliente cadastrado com sucesso."));
    }

    public function show(Customer $customer)
    {
        //
    }

    public function edit(Customer $customer)
    {
        return view("root.customer.create",[
            "customer" => $customer
        ]);
    }

    public function update(StoreCustomerRequest $request, Customer $customer)
    {
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->document = Helper::removeMask($request->document);
        $customer->mobile_phone = Helper::removeMask($request->mobile_phone);
        $customer->status = Customer::ACTIVE;

        $customer->update();

        return redirect()->route("customers")->withStatus(__("Cliente alterado com sucesso."));
    }

    public function destroy(Request $request)
    {
        $customer = Customer::find($request->id);
        $customer->delete();

        return redirect()->route("customers")->withStatus(__("Cliente excluído com sucesso."));
    }
}
