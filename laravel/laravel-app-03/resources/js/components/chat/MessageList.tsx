// @ts-nocheck

export default function MessageList({ messages, currentUserId }) {
    return (
        <div ref={containerRef} className="message-list">
            {messages.data.map((m) => {
                const me = currentUserId && m.user?.id === currentUserId;
                return (
                    <div key={m.id} className={`msg-item ${me ? 'me' : 'other'}`}>
                        <div className="msg-meta">
                            {m.user?.name} • {new Date(m.created_at).toLocaleString()}
                        </div>
                        <div className="msg-bubble">{m.body}</div>
                    </div>
                );
            })}
            <div ref={bottomRef} />
        </div>
    );
}
