<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CustomerValidationRequest;
use Illuminate\Support\Facades\File;

class CustomerController extends Controller
{
    
    public function index()
    {
        $customer = Customer::latest()->paginate(5);
        return view('customers.index', ['customer'=>$customer]);
    }

    
    public function create()
    {
        return view('customers.create');
    }

    
    public function store(CustomerValidationRequest $request)
    {
        $request->validated();

        $image = Storage::put('customer',$request->file('image'));

        Customer::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $image,
        ]);

        return redirect()->route('customers.index')
            ->with('status', 'Customer created successfully.');
    }

    
    public function show(Customer $customer)
    {
        return view('customers.show', ['customer'=>$customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', ['customer'=>$customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerValidationRequest $request, Customer $customer)
    {
        $request->validated();

        $customer->fill($request->all());

        if ($request->hasFile('image')) {
            $destination = 'storage/' . $customer->image;
            // Deletes the file if it exists
            if( File::exists($destination) ) {
                File::delete($destination);
            }
            $customer->image = Storage::put('customer',$request->file('image'));
        
        }

        $customer->save();

        return redirect()->route('customers.index')
            ->with('status', 'Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')
            ->with('status', 'Customer deleted successfully');
    }
}
