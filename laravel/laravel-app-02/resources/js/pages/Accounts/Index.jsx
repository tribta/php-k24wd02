import { Link, usePage } from '@inertiajs/react';
import MainLayout from '../layouts/MainLayout';

function Index({ accounts }) {
    const { props } = usePage();
    return (
        <MainLayout>
            <div className="card">
                <div>
                    <h2>My Accounts</h2>
                    <Link className="btn" href={'/accounts/create'}>
                        + Create New Account
                    </Link>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>number</th>
                            <th>name</th>
                            <th>balance</th>
                            <th>transaction</th>
                        </tr>
                    </thead>
                    <tbody>
                        {accounts.map((a) => (
                            <tr>
                                <td>{a.number}</td>
                                <td>{a.name}</td>
                                <td>{a.balance}</td>
                                <td>
                                    <Link href={`/accounts/${a.id}/transactions`}>
                                        Transaction
                                    </Link>
                                </td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </MainLayout>
    );
}

export default Index;
