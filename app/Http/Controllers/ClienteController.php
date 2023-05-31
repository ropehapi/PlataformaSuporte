<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\StoreCompanyRequest;
use App\Models\Cliente;
use App\Models\SoftwareHouse;
use App\Models\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $companies = Cliente::all();
        return view("customer.company.index",[
            "companies" => $companies
        ]);
    }

    public function create()
    {
        return view("software_house.company.create");
    }

    public function store(StoreCompanyRequest $request)
    {
        $company = new Cliente();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->document = Helper::removeMask($request->document);
        $company->mobile_phone = Helper::removeMask($request->mobile_phone);
        $company->status = SoftwareHouse::ACTIVE;
        $company->save();

        return redirect()->route("companies")->withStatus(__("Empresa cadastrada com sucesso."));
    }

    public function show(Cliente $softwareHouse)
    {
        //
    }

    public function edit(Cliente $company)
    {
        return view("customer.company.create",[
            "company" => $company
        ]);
    }

    public function update(StoreCompanyRequest $request, Cliente $company)
    {
        $company->name = $request->name;
        $company->email = $request->email;
        $company->document = Helper::removeMask($request->document);
        $company->mobile_phone = Helper::removeMask($request->mobile_phone);
        $company->status = Cliente::ACTIVE;

        $company->update();

        return redirect()->route("companies")->withStatus(__("Empresa alterada com sucesso."));
    }

    public function destroy(Request $request)
    {
        $company = Cliente::find($request->id);
        $company->delete();

        return redirect()->route("companies")->withStatus(__("Empresa excluída com sucesso"));
    }
}
