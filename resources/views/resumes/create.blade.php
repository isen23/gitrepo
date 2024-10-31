<!DOCTYPE html>
<html>
<head>
    <title>Submit Resume</title>
</head>
<body>
    <h1>Submit Your Resume</h1>

    <form action="{{ route('resume.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="text" name="summary" placeholder="Summary" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="text" name="hobbies" placeholder="Hobbies" required>
        <input type="text" name="address" placeholder="Address" required>
        <input type="text" name="education_attainment" placeholder="Education Attainment" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
