<!DOCTYPE html>
<h2>Submit Your Resume</h2>
@if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="/resume" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <textarea name="summary" placeholder="Summary" required></textarea>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Phone" required>
    <input type="text" name="address" placeholder="Address" required>
    <textarea name="hobbies" placeholder="Hobbies (comma-separated)" required></textarea>
    <input type="text" name="education_attainment" placeholder="Education Attainment" required>
    <button type="submit">Submit</button>


    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Summary</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Hobbies</th>
                <th>Address</th>
                <th>Education Attainment</th>
            </tr>
        </thead>
        <tbody>
            @foreach($resumes as $resume)
                <tr>
                    <td>{{ $resume->name }}</td>
                    <td>{{ $resume->summary }}</td>
                    <td>{{ $resume->email }}</td>
                    <td>{{ $resume->phone }}</td>
                    <td>{{ $resume->hobbies }}</td>
                    <td>{{ $resume->address }}</td>
                    <td>{{ $resume->education_attainment }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</form>
</html>
    

