<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SessionBooking;
use App\Models\SessionType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function App\Helpers\greetings;
use Yabacon\Paystack\Paystack;

class SessionController extends Controller
{
    public function session_booking_page(Request $request)
    {
        $data['sessiontypes'] = SessionType::all();
        return view("session-booking-page", $data);
    }
    public function admin_dashboard(Request $request)
    {
        $greeting = greetings();
        return view("admin.admin-dashboard", compact('greeting'));
    }
    public function admin_session_page(Request $request)
    {
        $greeting = greetings();
        $data['sessiontypes'] = SessionType::all();
        return view("admin.admin-session-page", $data, compact('greeting'));
    }
    public function UpsertSession(Request $request)
    {
        // return view("session-page");
    }
    public function AddSessionType(Request $request)
    {
        return $this->UpsertRecord($request, SessionType::class);
    }
    // public function AddSessionBooking(Request $request)
    // {
    //     return $this->UpsertRecord($request, SessionBooking::class);
    // }



    public function AddSessionBooking(Request $request)
    {
        // Booking session logic goes here
        $response = $this->UpsertRecord($request, SessionBooking::class);

        if ($response->getStatusCode() === 200) {
            // After booking, create a payment URL
            $amount = $request->session_price * 100; // Amount in kobo (Paystack requires this format)

            $data = [
                'email' => Auth::user()->email, // Get user email
                'amount' => $amount,            // Amount to pay (in kobo)
                'reference' => uniqid(),        // Unique reference for the payment
            ];

            try {
                $paystack = new Paystack(env('PAYSTACK_SECRET_KEY'));
                $paystackResponse = $paystack->transaction->initialize($data);

                if ($paystackResponse->status && isset($paystackResponse->data->authorization_url)) {
                    return response()->json([
                        'message' => 'Session booked successfully',
                        'payment_url' => $paystackResponse->data->authorization_url,
                    ]);
                } else {
                    return response()->json(['message' => 'Error creating payment link'], 400);
                }
            } catch (\Exception $e) {
                return response()->json(['message' => 'Payment link creation failed: ' . $e->getMessage()], 500);
            }
        }

        return $response;  // Return the original response if not successful
    }

    public function UpsertRecord(Request $request, $modelClass)
    {
        $input = $request->all();
        try {
            DB::beginTransaction();
            $input['user_id'] = Auth::user()->id;

            if ($request->id) {
                $record = $modelClass::find($request->id);
                if (!$record) {
                    return response()->json(['message' => 'Record not found'], 404);
                }
                $record->update($input);
                DB::commit();
                return response()->json(['message' => 'Record updated successfully'], 200);
            } else {
                $modelClass::create($input);
                DB::commit();
                return response()->json(['message' => 'Record created successfully'], 200);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }
}
