import { Link, useForm } from '@inertiajs/react';
import MainLayout from '../layouts/MainLayout';

export default function Register() {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });

    const submit = (e) => {
        e.preventDefault();
        post('/register', { onFinish: () => reset('password', 'password_confirmation') });
    };

    return (
        <MainLayout>
            <div className="card" style={{ maxWidth: 420, margin: '0 auto' }}>
                <h2>Register</h2>
                <form onSubmit={submit} noValidate>
                    <div className="form-row" style={{ flexDirection: 'column' }}>
                        <label>Fullname</label>
                        <input type="text" className="input" value={data.name} onChange={(e) => setData('name', e.target.value)} />
                        {errors.name && <div className="error">{errors.name}</div>}
                    </div>
                    <div className="form-row" style={{ flexDirection: 'column' }}>
                        <label>Email</label>
                        <input type="email" className="input" value={data.email} onChange={(e) => setData('email', e.target.value)} />
                        {errors.email && <div className="error">{errors.email}</div>}
                    </div>
                    <div className="form-row" style={{ flexDirection: 'column' }}>
                        <label>Password</label>
                        <input type="password" className="input" value={data.password} onChange={(e) => setData('password', e.target.value)} />
                        {errors.password && <div className="error">{errors.password}</div>}
                    </div>
                    <div className="form-row" style={{ flexDirection: 'column' }}>
                        <label>Re-Enter Password</label>
                        <input
                            type="password"
                            className="input"
                            value={data.password_confirmation}
                            onChange={(e) => setData('password_confirmation', e.target.value)}
                        />
                        {errors.password_confirmation && <div className="error">{errors.password_confirmation}</div>}
                    </div>

                    <button type="submit" className="btn" disabled={processing}>
                        {processing ? 'Register in proccessing...' : 'Register'}
                    </button>
                </form>
                <p>
                    Don't have account? <Link href={'/login'}>Login</Link>
                </p>
            </div>
        </MainLayout>
    );
}
