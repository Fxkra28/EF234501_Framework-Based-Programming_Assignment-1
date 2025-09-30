<x-layout>
    <div class="container">
        <main>
            <section>
                <h2>Create a New User</h2>
                
                {{-- This form will submit to your 'notes/createuser' route --}}
                <form action="/notes/createuser" method="POST">
                    @csrf {{-- CSRF protection token --}}

                    {{-- Name Field --}}
                    <div class="form-group mb-4">
                        <label for="user-name">Name:</label>
                        <input type="text" id="user-name" name="name" required class="form-control">
                    </div>

                    {{-- Email Field --}}
                    <div class="form-group mb-4">
                        <label for="user-email">Email:</label>
                        <input type="email" id="user-email" name="email" required class="form-control">
                    </div>

                    {{-- Password Field --}}
                    <div class="form-group mb-4">
                        <label for="user-password">Password:</label>
                        <input type="password" id="user-password" name="password" required class="form-control">
                    </div>

                    {{-- Password Confirmation Field --}}
                    <div class="form-group mb-4">
                        <label for="user-password-confirmation">Confirm Password:</label>
                        <input type="password" id="user-password-confirmation" name="password_confirmation" required class="form-control">
                    </div>

                    <div>
                        <button type="submit" class="btn">Create User</button>
                    </div>
                </form>
            </section>
        </main>
    </div>
</x-layout>