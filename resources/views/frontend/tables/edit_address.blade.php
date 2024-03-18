<form action="{{ route('frontend.tables.addresses.update', $address->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <label for="country">Country:</label>
    <input type="text" name="country" id="country" value="{{ $address->country }}" required>

    <label for="city">City:</label>
    <input type="text" name="city" id="city" value="{{ $address->city }}" required>

    <label for="street">Street:</label>
    <input type="text" name="street" id="street" value="{{ $address->street }}" required>

    <button type="submit">Update Address</button>
</form>