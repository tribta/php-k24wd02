import { Link, usePage } from '@inertiajs/react';
import MainLayout from '../pages/layouts/MainLayout';

export default function Dashboard() {
    const { props } = usePage();
    const user = props.auth?.user;

    return (
        <MainLayout>
            <div className="card">
                <h2>Dashboard</h2>
                <p>
                    Greeting, <strong>{user?.name}</strong>
                </p>
                <ul>
                    <li>
                        <Link href="/account">Manage Bank Account</Link>
                    </li>
                </ul>
                
            </div>
        </MainLayout>
    );
}
