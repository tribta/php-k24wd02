import { useForm } from '@inertiajs/react';
import MainLayout from '../layouts/MainLayout';

function Create() {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: 'Payment',
        currency: 'VND',
    });

    const submit = (e) => {
        e.preventDefault();
        post('/accounts');
    };

    return (
        <MainLayout>
            <div className="card">
                <h2>Create New Account</h2>
                <form onSubmit={submit} noValidate>
                    <label htmlFor="name">Account Name</label>
                    <div className="form-row">
                        <input id="name" type="text" className="input" value={data.name} onChange={(e) => setData(e.target.value)} />
                    </div>

                    <label htmlFor="currency">Currency</label>
                    <div className="form-row">
                        <input id="currency" type="text" className="input" value={data.currency} onChange={(e) => setData(e.target.value)} />
                    </div>

                    <button type="submit" className="btn" disabled={processing}>
                        {processing ? 'Account create in proccessing...' : 'Create'}
                    </button>
                </form>
            </div>
        </MainLayout>
    );
}

export default Create;
