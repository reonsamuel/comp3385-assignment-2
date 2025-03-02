<form action="{{ route('feedback.send') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="comment">Comment:</label>
    <textarea id="comment" name="comment" required></textarea>
    <button type="submit">Send Feedback</button>
</form>
