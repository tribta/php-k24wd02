export default function AuthenticatedLayout({ children }) {
    return (
        <div>
            <header style={{ background: '#ddd', padding: '10px' }}>
                <h2>My React App</h2>
            </header>
            <main style={{ padding: '20px' }}>{children}</main>
        </div>
    );
}
