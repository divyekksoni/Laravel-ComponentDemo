<div>
    <h2>Form Component</h2>
    <form id="dataForm">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>

<script>
    document.getElementById('dataForm').addEventListener('submit', function(event) {
        event.preventDefault();

        const formData = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            age: document.getElementById('age').value,
            _token: document.querySelector('input[name="_token"]').value
        };

        fetch('/store-data', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': formData._token
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                alert('Data stored successfully');
                window.location.reload();
            } else {
                alert('Error storing data');
            }
        });
    });
</script>
