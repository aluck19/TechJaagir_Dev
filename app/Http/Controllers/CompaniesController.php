<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CompanyRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    public function index(){
        $companies = Company::latest('updated_at')->get();

        return view('companies.index', compact('companies'));
    }

    public function show(Company $company){
        return view('companies.show', compact('company'));
    }

    public function  create(){
        return view('companies.create');
    }

    public function  store(CompanyRequest $request){
        $this->createCompany($request);

        flash()->overlay('Your company has been created.', 'Company Created');

        return redirect('companies');
    }

    public function edit(Company $company){
        return view('companies.edit', compact('company'));
    }

    public function update(Company $company, CompanyRequest $request){
        $company->update($request->all());

        return redirect('companies');
    }

    private function createCompany(CompanyRequest $request){
        $company = Auth::user()->companies()->create($request->all());

        return    $company;
    }
}
