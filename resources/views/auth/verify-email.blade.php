<h1>verification EMAIL HAS BEEN SENT</h1>
<form action="{{route('verification.send')}}" method="post">
    @csrf
    <button type="submit" class="p-3 rounded-lg w-full bg-gray-900 text-white">Resend Email</button>
</form>