<form action="{{ url('/send-mail') }}" method="POST">
    @csrf

    <label>Email:</label><br>
    <input type="text" name="email">
    <br><br>

    <button type="submit">Send Mail</button>
</form>