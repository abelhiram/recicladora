<form action="/enviar" method="post">
<input type="text" name="message">
<input type="submit">
{{ csrf_field() }}
</form>
