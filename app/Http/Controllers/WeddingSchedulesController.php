<?php

namespace App\Http\Controllers;

use App\Mail\ApproveScheduleEmail;
use App\Mail\RejectScheduleEmail;
use App\Mail\RestoreScheduleEmail;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WeddingSchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function approve(Request $request)
    {
        WeddingSchedules::where('id', $request->id)->update([
            'approve' => 1,
        ]);

        $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new ApproveScheduleEmail($data));

        return redirect()->back()->with('success-message', 'Approved!');
    }

    /**
     * Reject application
     */

    public function reject(Request $request)
    {
       WeddingSchedules::where('id', $request->id)->update([
            'reject' => 1,
        ]);

        $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new RejectScheduleEmail($data));

        return redirect()->back()->with('danger-message', 'Rejected!');
    }

     /**
      * Restore application
      */

      public function restore(Request $request)
      {
         WeddingSchedules::where('id', $request->id)->update([
              'approve' => 0,
              'reject' => 0,
          ]);

          $data = [
            'email' => $request->email,
            'name' => $request->name,
        ];

        Mail::to($data['email'])->send(new RestoreScheduleEmail($data));

          return redirect()->back()->with('success-message', 'Restored!');
      }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'first_name' =>  'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255'],
            'brides_name' =>  'required|string|max:255',
            'grooms_name' =>  'required|string|max:255',
            'desired_date' => 'required',
            'desired_time' => 'required',
            'contact_number' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'message' => 'nullable|string|max:255',
            'cenomar' => 'nullable',
            'birth_certificate' => 'nullable',
            'baptismal_certificate' => 'nullable',
            'confirmation_certificate' => 'nullable',
        ]);

        $cenomar = [];
        foreach ($request->file('cenomar') as $index => $file) {
                $path = $file->store('documents', 'public');
                $cenomar[] = $path;
        }

        $birth_certificate = [];
        foreach ($request->file('birth_certificate') as $index => $file) {
                $path = $file->store('documents', 'public');
                $birth_certificate[] = $path;
        }

        $baptismal_certificate = [];
        foreach ($request->file('baptismal_certificate') as $index => $file) {
                $path = $file->store('documents', 'public');
                $baptismal_certificate[] = $path;
        }

        $confirmation_certificate = [];
        foreach ($request->file('confirmation_certificate') as $index => $file) {
                $path = $file->store('documents', 'public');
                $confirmation_certificate[] = $path;
        }

         WeddingSchedules::create([
            'user_id' => Auth::user()->id,
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
            'brides_name' => $request->input('brides_name'),
            'grooms_name' => $request->input('grooms_name'),
            'desired_date' => $request->input('desired_date'),
            'desired_time' => $request->input('desired_time'),
            'contact_number' => $request->input('contact_number'),
            'address' => $request->input('address'),
            'message' => $request->input('message'),
            'cenomar' => implode("|", $cenomar),
            'birth_certificate' => implode("|", $birth_certificate),
            'baptismal_certificate' => implode("|", $baptismal_certificate),
            'confirmation_certificate' => implode("|", $confirmation_certificate),
         ]);

         return redirect()->back()->with('modal-message', 'Submitted Successfuly!');
    }

    /**
     * Display the specified resource.
     */
    public function show(WeddingSchedules $weddingSchedules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WeddingSchedules $weddingSchedules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WeddingSchedules $weddingSchedules)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WeddingSchedules $weddingSchedules)
    {
        //
    }
}
