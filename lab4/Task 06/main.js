// Convert JavaScript object to JSON string
function convertToJSON() {
    const input = document.getElementById('jsonInput').value;
    try {
        const obj = eval(`(${input})`); // Convert string to object
        const jsonString = JSON.stringify(obj, null, 4); // Stringify with indentation
        document.getElementById('jsonOutput').value = jsonString;
    } catch (error) {
        document.getElementById('jsonOutput').value = "Invalid JavaScript object!";
    }
}

// Convert JSON string to JavaScript object
function parseJSON() {
    const input = document.getElementById('jsonInput').value;
    try {
        const parsed = JSON.parse(input); // Parse JSON string
        const objString = JSON.stringify(parsed, null, 4); // Format nicely
        document.getElementById('jsonOutput').value = objString;
    } catch (error) {
        document.getElementById('jsonOutput').value = "Invalid JSON!";
    }
}
