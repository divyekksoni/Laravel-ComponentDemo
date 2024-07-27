<div>
    <h2>Child Component</h2>
    <p>Data from Child:</p>
    <ul>
        @foreach ($jsonData as $key => $value)
            <li><strong>{{ $key }}:</strong> {{ $value }}</li>
        @endforeach
    </ul>
</div>