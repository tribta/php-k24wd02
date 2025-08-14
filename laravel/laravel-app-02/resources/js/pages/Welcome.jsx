export default function Welcome({ appName }) {
    return (
        <div className="container">
            <div className="card">
                <h1>{appName}</h1>
                <p>Welcome to My Bank.</p>
                <a href="/login">Login</a> . <a href="/register">Register</a>
            </div>
        </div>
    );
}
