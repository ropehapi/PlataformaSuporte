<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\StoreCompanyRequest;
use App\Models\Company;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view("customer.company.index",[
            "companies" => $companies
        ]);
    }

    public function create()
    {
        return view("customer.company.create");
    }

    public function store(StoreCompanyRequest $request)
    {
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->document = Helper::removeMask($request->document);
        $company->mobile_phone = Helper::removeMask($request->mobile_phone);
        $company->status = Customer::ACTIVE;
        $company->save();

        return redirect()->route("companies")->withStatus(__("Empresa cadastrada com sucesso."));
    }

    public function show(Company $customer)
    {
        //
    }

    public function edit(Company $company)
    {
        return view("customer.company.create",[
            "company" => $company
        ]);
    }

    public function update(StoreCompanyRequest $request, Company $company)
    {
        $company->name = $request->name;
        $company->email = $request->email;
        $company->document = Helper::removeMask($request->document);
        $company->mobile_phone = Helper::removeMask($request->mobile_phone);
        $company->status = Company::ACTIVE;

        $company->update();

        return redirect()->route("companies")->withStatus(__("Empresa alterada com sucesso."));
    }

    public function destroy(Request $request)
    {
        $company = Company::find($request->id);
        $company->delete();

        return redirect()->route("companies")->withStatus(__("Empresa excluída com sucesso"));
    }
}
