import { usePage } from '@inertiajs/react';
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
                        <a href="/account">Manage Bank Account</a>
                    </li>
                </ul>
                {props.flash?.success && 
                <p style={{ color: 'green' }}>{props.flash?.success}</p>}
            </div>
        </MainLayout>
    );
}
