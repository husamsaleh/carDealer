<form action="{{ route('frontend.tables.addresses.store') }}" method="POST">
    @csrf
    <label for="country">Country:</label>
    <input type="text" name="country" id="country" required>

    <label for="city">City:</label>
    <input type="text" name="city" id="city" required>

    <label for="street">Street:</label>
    <input type="text" name="street" id="street" required>

    <button type="submit">Create Address</button>
</form>