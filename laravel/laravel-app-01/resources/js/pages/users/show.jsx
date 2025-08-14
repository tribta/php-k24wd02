import Layout from '@/layouts/authenticated';
import { Head } from '@inertiajs/react';

export default function Show({ user }) {
    return (
        <Layout>
            <Head title="Welcome" />
            <h1>Welcome</h1>
            <p>
                Hello <strong>{user.name}</strong>, welcome to Inertia.
            </p>
        </Layout>
    );
}
