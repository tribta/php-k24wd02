import { useForm } from '@inertiajs/react';

export default function Login() {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: '',
        password: '',
        remember: false,
    });

    const submit = (e) => {
        e.preventDefault();
        post('/login', { onFinish: () => reset('password') });
    };

    return (
        <div className="card">
            <h2>Login</h2>
            <form onSubmit={submit}>
                <div>
                    <label>Email</label>
                    <input type="email" className="input" value={data.email} onChange={(e) => setData('email', e.target.value)} />
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" className="input" value={data.password} onChange={(e) => setData('password', e.target.value)} />
                </div>
                <div>
                    <label htmlFor="remember">Remember Me</label>
                    <input type="checkbox" id="remember" checked={data.remember} onChange={(e) => setData('remember', e.target.checked)} />
                </div>
                <button type="submit" className="btn" disabled={processing}>
                    {processing ? 'Login in proccessing...' : 'Login'}
                </button>
            </form>
        </div>
    );
}
