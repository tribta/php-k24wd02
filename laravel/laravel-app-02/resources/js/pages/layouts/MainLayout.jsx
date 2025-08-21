import { Link, usePage } from '@inertiajs/react';

export default function MainLayout({ children }) {
    const { props } = usePage();
    const user = props.auth.user;
    const flash = props.flash;
    return (
        <div className="container">
            <nav className="nav">
                <Link href={'/'}>My Bank</Link>
                <div style={{ marginLeft: 'auto', display: 'flex', gap: '10px' }}>
                    {user ? (
                        <>
                            <Link href={'/dashboard'}>Dashboard</Link>
                            <Link href={'/logout'} method={'post'} as="button" className="btn">
                                Logout
                            </Link>
                        </>
                    ) : (
                        <>
                            <Link href={'/login'}>Login</Link>
                            <Link href={'/register'}>Register</Link>
                        </>
                    )}
                </div>
            </nav>
            {flash?.success && <p className="success">{flash.success}</p>}
            {flash?.error && <p className="error">{flash.error}</p>}
            {children}
        </div>
    );
}
