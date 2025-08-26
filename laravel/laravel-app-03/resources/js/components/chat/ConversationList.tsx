import { Link, usePage } from '@inertiajs/react';

export default function ConversationList({ conversations = [] }) {
    const { url } = usePage();

    if (!conversations.length) return <div className="conv-empty">No Conversation Found.</div>;
    return (
        <ul>
            {conversations.map((c) => {
                const active = url === `/chat/${c.id}`;
                return (
                    <li key={c.id} className="conv-item">
                        <Link href={`/chat/${c.id}`} className={`conv-link ${active ? 'active' : ''}`}>
                            <div>{c.name || c.is_direct ? 'Direct Message' : `Group #${c.id}`}</div>
                            {c.last_message && <div>{c.last_message.user.name}</div>}
                        </Link>
                    </li>
                );
            })}
        </ul>
    );
}
