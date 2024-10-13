namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Safaricom\Mpesa\Mpesa;

class MpesaPaymentController extends Controller
{
    public function payWithMpesa(Request $request)
    {
        // Validate the request data
        $request->validate([
            'amount' => 'required|numeric',
            'phone' => 'required|string', // Ensure phone number format
        ]);

        $mpesa = new Mpesa();

        // Initiate payment request
        $response = $mpesa->lipaNaMpesaOnline([
            'BusinessShortCode' => env('MPESA_SHORTCODE'),
            'LipaNaMpesaOnline' => env('MPESA_LIPA_NA_MPESA_URL'),
            'Amount' => $request->amount,
            'PartyA' => $request->phone, // Your phone number
            'PartyB' => env('MPESA_SHORTCODE'),
            'PhoneNumber' => $request->phone,
            'CallBackURL' => env('MPESA_PAYMENT_NOTIFICATION_URL'),
            'AccountReference' => 'Payment for service',
            'TransactionDesc' => 'Payment description',
        ]);

        // Handle the response accordingly
        return response()->json($response);
    }

    public function callback(Request $request)
    {
        // Handle the M-Pesa callback logic here
        // This is where you would process the push notification from M-Pesa
        // Log the details or update your database accordingly
    }
}
