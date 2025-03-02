namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Feedback;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required|string',
        ]);

        Mail::to('comp3385@uwi.edu')->send(new Feedback(
            $request->input('name'),
            $request->input('email'),
            $request->input('comment')
        ));

        return redirect('/feedback/success');
    }
}