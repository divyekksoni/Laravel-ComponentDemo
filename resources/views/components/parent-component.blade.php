<div>
    <h1>Parent Component</h1>
    <p>Data from Parent:</p>
    <pre>{{ json_encode($data, JSON_PRETTY_PRINT) }}</pre>

    <x-child-component :jsonData="$data"/>
    
</div>