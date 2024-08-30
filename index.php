<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-Based Compiler</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-3xl bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Web-Based Compiler</h1>
        <form action="compile.php" method="POST" class="space-y-6">
            <div>
                <label for="html" class="block text-lg font-medium text-gray-700">HTML:</label>
                <textarea id="html" name="html_code" rows="10" class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div>
                <label for="css" class="block text-lg font-medium text-gray-700">CSS:</label>
                <textarea id="css" name="css_code" rows="10" class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div>
                <label for="js" class="block text-lg font-medium text-gray-700">JavaScript:</label>
                <textarea id="js" name="js_code" rows="10" class="w-full mt-2 p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div class="text-center">
                <input type="submit" value="Run" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200 cursor-pointer">
            </div>
        </form>
        <hr class="my-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Output:</h2>
        <iframe id="output_frame" width="100%" height="400px" class="border border-gray-300 rounded-lg"></iframe>
    </div>

    <script>
        // Fetch and display the output in the iframe
        const form = document.querySelector('form');
        form.onsubmit = async function(event) {
            event.preventDefault();
            const formData = new FormData(form);
            const response = await fetch('compile.php', {
                method: 'POST',
                body: formData
            });
            const output = await response.text();
            document.getElementById('output_frame').srcdoc = output;
        };
    </script>
</body>
</html>
