<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processed Image</title>
</head>
<body>
    <h1>Your Image with Necklace</h1>
   
    @if ($imagePath == null)
    no image
    @else
    @if ($imagePath)
    <img src="{{ $imagePath }}" alt="Processed Image">
    @endif
    
    @endif
</body>
</html>
