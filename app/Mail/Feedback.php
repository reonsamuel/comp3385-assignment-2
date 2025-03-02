namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Feedback extends Mailable
{
    use SerializesModels;

    public string $name;
    public string $email;
    public string $comment;

    public function __construct($name, $email, $comment)
    {
        $this->name = $name;
        $this->email = $email;
        $this->comment = $comment;
    }

    public function build()
    {
        return $this->from($this->email, $this->name)
                    ->subject('Feedback from ' . $this->name)
                    ->view('mail.feedback')
                    ->with([
                        'name' => $this->name,
                        'comment' => $this->comment,
                    ]);
    }
}
