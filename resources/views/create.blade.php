<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Modern Form</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f0f0f0; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">

    <form method="POST" action="{{route('store')}}" style="background-color: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 300px;">
            @csrf
        <h2 style="text-align: center; color: #333; margin-bottom: 1.5rem;">Sign Up</h2>
        <div style="margin-bottom: 1rem;">
            <label for="name" style="display: block; margin-bottom: 0.5rem; color: #555;">Name</label>
            <input type="text" id="name" name="name" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 1rem;">
            <label for="email" style="display: block; margin-bottom: 0.5rem; color: #555;">Email</label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 1rem;">
            <label for="password" style="display: block; margin-bottom: 0.5rem; color: #555;">Password</label>
            <input type="password" id="password" name="password" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 1.5rem;">
            <label for="phone" style="display: block; margin-bottom: 0.5rem; color: #555;">Phone Number</label>
            <input type="tel" id="phone" name="phone" required style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
        </div>
        <button type="submit" style="width: 100%; padding: 0.75rem; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem;">Sign Up</button>
    </form>
</body>
</html>