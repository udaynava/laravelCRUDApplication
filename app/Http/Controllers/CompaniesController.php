<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use App\Models\User_company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CompaniesController extends Controller
{
    /*
    ** ========================================================
    ** Function: showCompanies()
    **
    ** INPUT PARAMETERS:
    **  None.
    **
    ** RETURN
    **  View with companies array
    **
    **  IMPLEMENTATION
    **      Handle the '/companies' route and displays all the available companies
    **       in the company table.
    **
    ** HISTORY
    **  2022-01-06 Uday - Created.
    ** ========================================================
    */
    public function showCompanies() {
        $companies = Company::all()->toArray();
        return view('companies.companies')->with('companies', $companies);
    }


     /*
    ** ========================================================
    ** Function: showAddCompany()
    **
    ** INPUT PARAMETERS:
    **  None.
    **
    ** RETURN
    **  View with company array
    **
    **  IMPLEMENTATION
    **      Handle the '/companies/add' route and displays form to add new company
    **
    ** HISTORY
    **  2022-01-06 Uday - Created.
    ** ========================================================
    */
    public function showAddCompany() {
        $company = array();
        return view('companies.addCompany')->with('company', $company);
    }

    /*
    ** ========================================================
    ** Function: addCompany()
    **
    **  HISTORY
    **  2022-01-06 Uday - Created.
    ** ========================================================
    */
    public function addCompany(Request $request) {
        $compInfo = $this->validateAndFillCompanyInfo($request);
        // Create new entry in Company table
        Company::create($compInfo);
        return redirect('/companies')->with('message', 'Company Added');
    }

    /*
    ** ========================================================
    ** Function: showEditCompany()
    **
    **  HISTORY
    **  2022-01-06 Uday - Created.
    ** ========================================================
    */
    public function showEditCompany($compID) {
        $company = Company::where('comp_id', $compID)->first();
        return view('companies.editCompany')->with('company', $company);
    }

    /*
    ** ========================================================
    ** Function: editCompany()
    **
    **  HISTORY
    **  2022-01-06 Uday - Created.
    ** ========================================================
    */
    public function editCompany(Request $request, $compID) {
        $compInfo = $this->validateAndFillCompanyInfo($request);
        // Update entry in company table
        $compMdl = Company::findOrFail($compID);
        $compMdl->update($compInfo);
        return redirect('/companies')->with('message', 'Company Details Updated');
    }

    /*
    ** ========================================================
    ** Function: deleteCompany()
    **
    **  HISTORY
    **  2022-01-06 Uday - Created.
    ** ========================================================
    */
    public function deleteCompany($compID) {
        Company::where('comp_id', $compID)->delete();
    }

     /*
    ** ========================================================
    ** Function: validateAndFillCompanyInfo()
    **
    **  HISTORY
    **  2022-01-06 Uday - Created.
    ** ========================================================
    */
    public function validateAndFillCompanyInfo($request) {
        // Input validation
        $request->validate([
            'title' => 'required|max:255',
        ]);
        $inputs = $request->except('_token');

        $compInfo = array();
        $compInfo['title'] = $inputs['title'];
        return $compInfo;
    }
}
